<?php

declare(strict_types=1);

namespace App\Livewire\Service;

use App\Models\ServiceComment;
use App\Models\ServiceRequest;
use App\Models\User;
use App\Traits\SendNotification;
use Carbon\Carbon;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class RequestRoom extends Component
{
    use SendNotification;

    public ServiceRequest $serviceRequest;

    public $status;

    public $comment;

    public function mount(ServiceRequest $serviceRequest)
    {
        $this->serviceRequest = $serviceRequest;
        $this->status = $serviceRequest->status;
    }

    public function render(): View
    {
        return view('livewire.service.request-room')
            ->title('Tiket No. #' . substr($this->serviceRequest->id, 0, 8));
    }

    public function updatedStatus($value)
    {
        $check = $value === 'ditutup' || $value === 'spam';

        $id    = $this->serviceRequest->id;

        ServiceRequest::query()
            ->when($check, function ($query) use ($id, $value) {
                $query->where('id', $id)->update([
                    'status' => $value,
                    'completed_at' => Carbon::now()
                ]);
            })
            ->where('id', $id)
            ->update(['status' => $value]);

        $this->dispatch('notification', message: 'Status tiket telah diubah');

        // FIXME: Sementara dinonaktifkan karena bug connection refuse pada production
        // try {
        //     if ($value === 'dijawab') {
        //         $this->sendToUser(
        //             $this->serviceRequest->user->telegram_id,
        //             "Tiket no. " . substr($id, 0, 8) . " dibuka oleh admin. Anda dapat berkomunikasi pada platform web."
        //         );
        //     } elseif ($value === 'ditutup') {
        //         $this->sendToUser(
        //             $this->serviceRequest->user->telegram_id,
        //             "Tiket no. " . substr($id, 0, 8) . " ditutup oleh admin."
        //         );
        //     }
        // } catch(Exception $error) {
        //     Log::error($error->getMessage());
        // }
    }

    public function saveComment()
    {
        try {
            DB::beginTransaction();

            ServiceComment::create([
                'user_id'    => auth()->user()->id,
                'request_id' => $this->serviceRequest->id,
                'comment'    => $this->comment
            ]);

            if (auth()->user()->hasRole('admin')) {
                try {
                    $notification = new \MBarlow\Megaphone\Types\Important(
                        'Notifikasi!', // Notification Title
                        'Admin membalas chat anda pada tiket #' . substr($this->serviceRequest->id, 0, 8) , // Notification Body
                        route('request.room', $this->serviceRequest)
                    );

                    $user = User::find($this->serviceRequest->user_id);
                    $user->notify($notification);

                    // FIXME: Sementara dinonaktifkan karena bug connection refuse pada production
                    // $this->sendToUser(
                    //     $this->serviceRequest->user->telegram_id,
                    //     'Admin membalas chat anda pada tiket #' . substr($this->serviceRequest->id, 0, 8)
                    // );
                } catch(Exception $error) {
                    Log::error($error->getMessage());
                }
            } else {
                try {
                    $notification = new \MBarlow\Megaphone\Types\Important(
                        'Notifikasi!', // Notification Title
                        auth()->user()->name . ' membalas chat anda pada tiket #' . substr($this->serviceRequest->id, 0, 8), // Notification Body
                        route('request.room', $this->serviceRequest)
                    );

                    $user = User::find('2e034053-7883-4738-8836-a1dab1e5fa9d');
                    $user->notify($notification);

                    // FIXME: Sementara dinonaktifkan karena bug connection refuse di production
                    // $this->sendToAdmin(auth()->user()->name . ' membalas chat anda pada tiket #' . substr($this->serviceRequest->id, 0, 8));
                } catch(Exception $error) {
                    Log::error($error->getMessage());
                }
            }

            DB::commit();

        } catch(Exception $error) {
            DB::rollBack();

            Log::error($error->getMessage());
        }

        $this->reset('comment');

        $this->dispatch('notification', message: 'Komentar telah ditambahkan');

        // Send Event to CommentList Component
        $this->dispatch('update-comment-list');
    }
}
