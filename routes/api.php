<?php

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Telegram\Bot\Laravel\Facades\Telegram;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post(env('TELEGRAM_BOT_TOKEN') . '/webhook', function() {
    $updates = json_decode(file_get_contents("php://input"));

    if(isset($updates->message)) {
        $message = $updates->message;
        if(isset($message->text)) {
            switch($message->text) {
                case '/start':
                    // cek chat_id
                    $result = User::where('telegram_id', $message->chat->id);

                    if ($result->count() !== 0) {
                        Telegram::sendMessage([
                            'chat_id' => $message->chat->id,
                            'text'    => "Halo! " . $result->first('name')->name
                        ]);
                    } else {
                        Telegram::sendMessage([
                            'chat_id' => $message->chat->id,
                            'text'    => "Halo, verifikasi akun anda dengan mengetik alamat email anda (tanpa @bps.go.id) " .
                                         "\n" . "Contoh : syaifur.rijal"
                        ]);
                    }

                    break;
                default:
                    try {
                        DB::beginTransaction();

                        User::where('username', $message->text)->update([
                            'telegram_id' => $message->chat->id
                        ]);

                        DB::commit();

                        Telegram::sendMessage([
                            'chat_id' => $message->chat->id,
                            'text'    => "Terima kasih telah melakukan verifikasi. Setiap informasi dari sistem akan dikirimkan juga melalui bot ini."
                        ]);
                    } catch(Exception $error) {
                        DB::rollBack();

                        Log::error($error->getMessage());

                        Telegram::sendMessage([
                            'chat_id' => $message->chat->id,
                            'text'    => "Gagal melakukan verifikasi, silahkan coba kembali atau hubungi admin."
                        ]);
                    }

                    break;
            }
        }
    }
});
