<?php

declare(strict_types=1);

namespace App\Livewire\Forms;

use App\Models\DeviceState;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Validate;
use Livewire\Form;

class StateForm extends Form
{
    #[Validate('required', onUpdate: false)]
    public ?string $device;

    #[Validate('required', onUpdate: false)]
    public ?string $user;

    public ?string $bmn;

    public $bast_date;

    #[Validate('nullable|min:3', onUpdate: false)]
    public string $bast_number;

    public function save(): string
    {
        $this->validate();

        try {
            DB::beginTransaction();

            DeviceState::create([
                'user_id'    => $this->user,
                'device_id'  => $this->device,
                'receipt_at' => $this->bast_date ?? null,
                'bast_no'    => $this->bast_number ?? null
            ]);

            DB::commit();

            $message = "Informasi status perangkat telah disimpan.";
        } catch (Exception $error) {
            DB::rollBack();

            Log::error($error->getMessage());

            $message = "Informasi status perangkat gagal disimpan.";
        }

        return $message;
    }

    public function update(DeviceState $deviceState): string
    {
        try {
            DB::beginTransaction();

            $deviceState->update([
                'user_id'    => $this->user,
                'device_id'  => $this->device,
                'receipt_at' => $this->bast_date ?? null,
                'bast_no'    => $this->bast_number ?? null
            ]);

            DB::commit();

            $message = "Informasi status perangkat telah diperbaharui.";
        } catch (Exception $error) {
            DB::rollBack();

            Log::error($error->getMessage());

            $message = "Informasi status perangkat gagal diperbaharui.";
        }

        return $message;
    }
}
