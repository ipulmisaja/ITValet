<?php

namespace App\Livewire\Forms;

use App\Models\Device;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Validate;
use Livewire\Form;

class DeviceForm extends Form
{
    #[Validate('nullable', onUpdate: false)]
    public ?int $stock;

    #[Validate('required|min:4', onUpdate: false)]
    public ?string $name;

    #[Validate('nullable|min:3', onUpdate: false)]
    public ?string $serial;

    #[Validate('required', onUpdate: false)]
    public ?string $brand;

    #[Validate('required', onUpdate: false)]
    public $deviceType;

    #[Validate('required_if:deviceType,Laptop|required_if:deviceType,Desktop PC|required_if:deviceType,Server', onUpdate: false)]
    public $os;

    #[Validate('required', onUpdate: false)]
    public $procurementDate;

    #[Validate('required', onUpdate: false)]
    public $procurementType;

    #[Validate('nullable|min:5', onUpdate: false)]
    public $bmn_number;

    public $image;

    public function save(): string
    {
        $this->validate();

        try {
            DB::beginTransaction();

            for ($i = 0; $i < $this->stock; $i++) {
                Device::create([
                    'name'               => $this->name,
                    'brand'              => $this->brand,
                    'type'               => $this->deviceType,
                    'operating_system'   => $this->os ?? null,
                    'procurement_period' => $this->procurementDate,
                    'procurement_type'   => $this->procurementType,
                ]);
            }

            DB::commit();

            $message = "Informasi perangkat telah ditambahkan.";
        } catch(Exception $error) {
            DB::rollBack();

            Log::error($error->getMessage());

            $message = "Informasi perangkat gagal ditambahkan.";
        }

        return $message;
    }

    public function update(Device $device): string
    {
        $this->validate();

        try {
            DB::beginTransaction();

            $device->update([
                'name'               => $this->name,
                'serial'             => $this->serial ?? null,
                'brand'              => $this->brand,
                'type'               => $this->deviceType,
                'bmn_number'         => $this->bmn_number ?? null,
                'operating_system'   => $this->os ?? null,
                'procurement_period' => $this->procurementDate,
                'procurement_type'   => $this->procurementType,
            ]);

            DB::commit();

            $message = "Informasi perangkat telah diperbaharui.";
        } catch(Exception $error) {
            DB::rollBack();

            Log::error($error->getMessage());

            $message = "Informasi perangkat gagal diperbaharui.";
        }

        return $message;
    }
}
