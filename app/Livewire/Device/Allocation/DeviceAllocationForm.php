<?php

declare(strict_types=1);

namespace App\Livewire\Device\Allocation;

use App\Livewire\Traits\HasTransaction;
use App\Models\DeviceState;
use Illuminate\Support\Collection;
use Livewire\Attributes\Validate;
use Livewire\Form;

class DeviceAllocationForm extends Form
{
    use HasTransaction;

    #[Validate('required', onUpdate: false)]
    public ?string $device;

    #[Validate('required', onUpdate: false)]
    public ?string $device_master;

    #[Validate('required', onUpdate: false)]
    public ?string $user;

    public $bast_date;

    public ?string $bast_number;

    public $bast_file;

    public function fetchProperty(string $allocationId): void
    {
        $state = DeviceState::where('device_id', $allocationId)->get();

        $this->user        = $state[0]->user_id ?? null;
        $this->bast_date   = $state[0]->receipt_at ?? null;
        $this->bast_number = $state[0]->bast_no ?? null;
    }

    public function save(): string
    {
        $this->validate();

        $query = function() {
            DeviceState::updateOrCreate([
                'user_id'          => $this->user,
                'device_id'        => $this->device,
                'device_master_id' => $this->device_master,
                'receipt_at'       => $this->bast_date ?? null,
                'bast_no'          => $this->bast_number ?? null,
                'bast_file'        => $this->bast_file ?? null
            ]);
        };

        $result = $this->modelTransaction($query);

        $message = $result === "Success"
                 ? "Informasi alokasi perangkat telah disimpan."
                 : "Informasi alokasi perangkat gagal disimpan.";

        return $message;
    }

    public function deleteAllocation(string $allocationId): string
    {
        $query = function() use ($allocationId) {
            DeviceState::where('device_id', $allocationId)->where('user_id', $this->user)->delete();
        };

        $result = $this->modelTransaction($query);

        $message = $result === "Success"
                 ? "Informasi alokasi telah dihapus."
                 : "Informasi alokasi gagal dihapus.";

        return $message;
    }
}
