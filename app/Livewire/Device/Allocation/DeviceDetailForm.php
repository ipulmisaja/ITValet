<?php

declare(strict_types=1);

namespace App\Livewire\Device\Allocation;

use App\Livewire\Traits\HasTransaction;
use App\Models\Device;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Support\Collection;
use Livewire\Attributes\Validate;
use Livewire\Form;

class DeviceDetailForm extends Form
{
    use HasTransaction;

    #[Validate('nullable|min:5', onUpdate: false)]
    public ?string $serial;

    #[Validate('nullable|min:5', onUpdate: false)]
    public ?string $bmn;

    #[Validate('nullable|min:5', onUpdate: false)]
    public ?string $information;

    public function fetchInformation(string $device, ?string $keyword, int $pagination): Paginator
    {
        return
            Device::search($keyword)
                ->query(fn ($query) => $query->with(['master', 'maintenances', 'states.user']))
                ->where('device_id', $device)
                ->paginate($pagination);
    }

    public function fetchDevice(string $deviceId): void
    {
        $device = Device::where('id', $deviceId)->get(['serial', 'bmn_number', 'information']);

        $this->serial      = $device[0]->serial ?? null;
        $this->bmn         = $device[0]->bmn_number ?? null;
        $this->information = $device[0]->information ?? null;
    }

    public function addStock(string $deviceId): string
    {
        $query = function() use ($deviceId) {
            Device::create(['device_id' => $deviceId]);
        };

        $result = $this->modelTransaction($query);

        $message = $result === "Success"
                 ? "Stok perangkat telah ditambahkan."
                 : "Stok perangkat gagal ditambahkan.";

        return $message;
    }

    public function save(string $deviceId): string
    {
        $this->validate();

        $query = function() use ($deviceId) {
            Device::where('id', $deviceId)->update([
                'serial'      => $this->serial ?? null,
                'bmn_number'  => $this->bmn ?? null,
                'information' => $this->information ?? null
            ]);
        };

        $result = $this->modelTransaction($query);

        $message = $result === "Success"
                 ? "Informasi perangkat telah disimpan."
                 : "Informasi perangkat gagal disimpan.";

        return $message;
    }

    public function delete(string $deleteId): string
    {
        $query = function() use ($deleteId) {
            $device = Device::findOrFail($deleteId);
            $device->delete();
        };

        $result = $this->modelTransaction($query);

        $message = $result === "Success"
                 ? "Informasi perangkat telah dihapus."
                 : "Informasi perangkat gagal dihapus.";

        return $message;
    }
}
