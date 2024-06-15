<?php

namespace App\Traits;

use App\Models\User;
use Telegram\Bot\Laravel\Facades\Telegram;

trait SendNotification
{
    public function sendToAdmin($message)
    {
        Telegram::sendMessage([
            'chat_id' => User::where('username', 'syaifur.rijal')->pluck('telegram_id')[0],
            'text'    => $message
        ]);
    }

    public function sendToUser(string $chatId, string $message)
    {
        Telegram::sendMessage(['chat_id' => $chatId, 'text' => $message]);
    }
}
