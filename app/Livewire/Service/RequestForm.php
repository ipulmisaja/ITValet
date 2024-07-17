<?php

declare(strict_types=1);

namespace App\Livewire\Service;

use App\Livewire\Traits\HasComment;
use App\Livewire\Traits\HasMaintenance;
use App\Livewire\Traits\HasTransaction;
use App\Models\ServiceRequest;
use Carbon\Carbon;
use Illuminate\Contracts\Pagination\Paginator;
use Livewire\Attributes\Validate;
use Livewire\Form;

class RequestForm extends Form
{
    use HasComment, HasMaintenance, HasTransaction;

    #[Validate('required', onUpdate: false)]
    public ?string $service_type;

    #[Validate('nullable', onUpdate: false)]
    public ?string $device;

    #[Validate('required|min:5', onUpdate: false)]
    public ?string $summary;

    #[Validate('required|min:5', onUpdate: false)]
    public ?string $description;

    public function fetchInformation(?string $keyword, int $pagination): Paginator
    {
        $admin = auth()->user()->hasRole('admin');

        return
            ServiceRequest::search($keyword)
                ->query(fn ($query) => $query->with(['user', 'serviceType', 'device']))
                ->when(!$admin, function ($query) {
                    $query->where('user_id', auth()->user()->id);
                })
                ->orderBy('created_at', 'desc')
                ->paginate($pagination);
    }

    public function fetchRequest(string $requestId): void
    {
        $request = ServiceRequest::where('id', $requestId)->get();

        $this->service_type = $request[0]->service_type_id;
        $this->device       = $request[0]->device_id ?? null;
        $this->summary      = $request[0]->summary ?? null;
        $this->description  = $request[0]->description ?? null;
    }

    public function save(): string
    {
        $this->validate();

        $query = function() {
            ServiceRequest::create([
                'user_id'         => auth()->user()->id,
                'service_type_id' => $this->service_type,
                'device_id'       => $this->device ?? null,
                'summary'         => $this->summary,
                'description'     => $this->description,
                'status'          => 'menunggu',
                'created_at'      => Carbon::now()
                //attachment
            ]);
        };

        $result = $this->modelTransaction($query);

        $message = $result === 'Success'
                 ? "Permintaan anda telah disimpan."
                 : "Permintaan anda gagal disimpan.";

        return $message;
    }

    public function update(string $requestId): string
    {
        $this->validate();

        $query = function() use ($requestId) {
            ServiceRequest::where('id', $requestId)->update([
                'service_type_id' => $this->service_type,
                'device_id'       => $this->device ?? null,
                'summary'         => $this->summary,
                'description'     => $this->description,
                'status'          => 'menunggu',
                'created_at'      => Carbon::now()
                //attachment
            ]);
        };

        $result = $this->modelTransaction($query);

        $message = $result === 'Success'
                 ? "Informasi permintaan layanan telah diperbaharui."
                 : "Informasi permintaan layanan gagal diperbaharui.";

        return $message;
    }

    public function delete(string $requestId): string
    {
        $query = function() use ($requestId) {
            $request = ServiceRequest::findOrFail($requestId);
            $request->delete();
        };

        $result = $this->modelTransaction($query);

        $message = $result === 'Success'
                 ? "Permintaan layanan telah dihapus."
                 : "Permintaan layanan gagal dihapus.";

        return $message;
    }

    public function confirmMaintenance(bool $state, string $requestId): string
    {
        $query = function() use ($state, $requestId) {
            $serviceRequest = ServiceRequest::with('device')->where('id', $requestId);

            $serviceRequest->update(['status' => 'dijawab', 'maintenance_request' => $state]);

            $this->newComment($requestId, "Permintaan anda sedang di proses.");

            $data = $serviceRequest->get();

            if ($state === true)
                $this->newMaintenance(
                    $data[0]->device->device_id,
                    $data[0]->device_id,
                    $data[0]->device->states[0]->id,
                    $requestId,
                    $data[0]->summary
                );
        };

        $result = $this->modelTransaction($query);

        $message = $result === 'Success'
                 ? "Konfirmasi pemeliharaan telah disimpan."
                 : "Konfirmasi pemeliharaan gagal disimpan.";

        return $message;
    }
}
