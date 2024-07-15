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

    public function fetchProperty(string $deviceId): Collection
    {
        return
            Device::where('id', $deviceId)->get(['serial', 'bmn_number', 'information']);
    }

    public function addStock(string $deviceId): string
    {
        $result = $this->modelTransaction(Device::create(['device_id' => $deviceId]));

        $message = $result === "Success"
                 ? "Stok perangkat telah ditambahkan."
                 : "Stok perangkat gagal ditambahkan.";

        return $message;
    }

    public function save(string $deviceId): string
    {
        $this->validate();

        $result = $this->modelTransaction(
                Device::where('id', $deviceId)->update([
                    'serial'      => $this->serial ?? null,
                    'bmn_number'  => $this->bmn ?? null,
                    'information' => $this->information ?? null
                ])
            );

        $message = $result === "Success"
                 ? "Informasi perangkat telah disimpan."
                 : "Informasi perangkat gagal disimpan.";

        return $message;
    }

    public function delete(string $deleteId): string
    {
        $result = $this->modelTransaction(Device::where('id', $deleteId)->delete());

        $message = $result === "Success"
                 ? "Informasi perangkat telah dihapus."
                 : "Informasi perangkat gagal dihapus.";

        return $message;
    }
}
