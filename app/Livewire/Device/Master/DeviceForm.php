<?php

namespace App\Livewire\Device\Master;

use App\Livewire\Traits\HasTransaction;
use App\Models\Device;
use App\Models\DeviceMaster;
use Illuminate\Contracts\Pagination\Paginator;
use Livewire\Attributes\Validate;
use Livewire\Form;

class DeviceForm extends Form
{
    use HasTransaction;

    #[Validate('nullable', onUpdate: false)]
    public ?int $stock;

    #[Validate('required|min:4', onUpdate: false)]
    public ?string $name;

    #[Validate('nullable|min:3', onUpdate: false)]
    public ?string $serial;

    #[Validate('required', onUpdate: false)]
    public ?string $brand;

    #[Validate('required', onUpdate: false)]
    public $type;

    #[Validate('required_if:deviceType,Laptop|required_if:deviceType,Desktop PC|required_if:deviceType,Server', onUpdate: false)]
    public $os;

    #[Validate('required', onUpdate: false)]
    public $procurementDate;

    #[Validate('required', onUpdate: false)]
    public $procurementType;

    #[Validate('nullable|min:5', onUpdate: false)]
    public $bmn_number;

    public $image;

    public function fetchInformation(?string $keyword, int $pagination): Paginator
    {
        return
            DeviceMaster::search($keyword)
                ->query(fn ($query) => $query->with(['devices:device_id', 'states:device_master_id', 'maintenances:device_master_id,condition']))
                ->orderBy('created_at', 'desc')
                ->paginate($pagination);
    }

    public function save(): string
    {
        $this->validate();

        $query = function() {
            $device = DeviceMaster::create([
                'name'               => $this->name,
                'brand'              => $this->brand,
                'type'               => $this->type,
                'procurement_period' => $this->procurementDate,
                'procurement_type'   => $this->procurementType,
            ]);

            for ($i = 0; $i < $this->stock; $i++) Device::create(['device_id' => $device->id]);
        };

        $result = $this->modelTransaction($query);

        $message = $result === "Success"
                 ? "Informasi perangkat telah ditambahkan."
                 : "Informasi perangkat gagal ditambahkan.";

        return $message;
    }

    public function update(Device $device): string
    {
        $this->validate();

        return '';
    }
}
