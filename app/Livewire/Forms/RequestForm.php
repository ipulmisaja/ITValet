<?php

namespace App\Livewire\Forms;

use App\Models\ServiceRequest;
use App\Traits\SendNotification;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Rule;
use Livewire\Form;

class RequestForm extends Form
{
    use SendNotification;

    #[Rule('nullable', onUpdate: false)]
    public ?string $request_type;

    #[Rule('nullable', onUpdate: false)]
    public ?string $service_type;

    #[Rule('required', onUpdate: false)]
    public ?string $summary;

    #[Rule('required', onUpdate: false)]
    public ?string $description;

    public function save(): string
    {
        $this->validate();

        try {

            DB::beginTransaction();

            $request = ServiceRequest::create([
                'user_id'         => auth()->user()->id,
                'summary'         => $this->summary,
                'description'     => $this->description,
                'status'          => 'menunggu',
                'created_at'      => Carbon::now()
                //attachment
            ]);

            DB::commit();

            // FIXME: Sementara dinonaktifkan karena bug connection refuse pada production
            // $this->sendToAdmin(
            //     "Permintaan layanan telah diajukan " . auth()->user()->name . " no. tiket #" . substr($request->id, 0, 8)
            // );

            $message = "Permintaan layanan telah diajukan.";

            $this->reset();
        } catch(Exception $error) {
            DB::rollBack();

            Log::error($error->getMessage());

            $message = "Permintaan layanan gagal diajukan.";
        }

        return $message;
    }

    public function update(ServiceRequest $serviceRequest): string
    {
        $this->validate();

        try {
            DB::beginTransaction();

            $serviceRequest->update([
                'request_type'    => $this->request_type ?? null,
                'service_type_id' => $this->service_type ?? null,
                'summary'         => $this->summary,
                'description'     => $this->description,
                'status'          => 'menunggu',
                'created_at'      => Carbon::now()
                //attachment
            ]);

            DB::commit();

            // FIXME: Sementara dinonaktifkan karena bug connection refuse pada production
            // if (! auth()->user()->hasRole('admin')) {
            //     $this->sendToAdmin(
            //         "Permintaan layanan telah disunting " . auth()->user()->name . " no. tiket #" . substr($serviceRequest->id, 0, 8)
            //     );
            // }

            $message = "Permintaan layanan telah diperbaharui.";

            $this->reset();
        } catch(Exception $error) {
            DB::rollBack();

            Log::error($error->getMessage());

            $message = "Permintaan layanan gagal diperbaharui.";
        }

        return $message;
    }
}
