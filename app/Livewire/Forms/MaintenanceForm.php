<?php

namespace App\Livewire\Forms;

use App\Models\Device;
use App\Models\User;
use App\Models\DeviceMaintenance;
use App\Traits\SendNotification;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Livewire\Attributes\Rule;
use Livewire\Form;

class MaintenanceForm extends Form
{
    use SendNotification;

    public ?string $device_name;
    public ?string $device_id;
    public ?string $condition;
    public ?string $maintenance;
    public ?string $description;
    public ?string $maintenance_at;
    public ?string $completed_at;

    public function save(Device $device): string
    {
        // $this->validate();

        try {
            DB::beginTransaction();

            $device = DeviceMaintenance::create([
                'device_id'   => $device->id,
                'ticket'      => substr(Str::uuid(), 0, 8),
                'condition'   => $this->condition,
                'maintenance' => 'belum perbaikan',
                'description' => $this->description ?? null,
                'created_at'  => Carbon::now(),
            ]);

            DB::commit();

            $message = "Informasi pemeliharaan perangkat telah disimpan.";

            // FIXME: Sementara dinonaktifkan karena bug connection refuse pada production
            // $this->sendToUser(
            //     User::where('username', 'suhermanb')->pluck('telegram_id')[0],
            //     "Pemeliharaan perangkat dengan no. tiket " . $device->ticket . " telah diajukan IPDS."
            // );

        } catch (Exception $error) {
            DB::rollBack();

            Log::error($error->getMessage());

            $message = "Informasi pemeliharaan perangkt gagal disimpan.";
        }

        return $message;
    }

    public function update(DeviceMaintenance $deviceMaintenance): string
    {
        // $this->validate();

        try {
            DB::beginTransaction();

            $deviceMaintenance->update([
                'condition'      => $this->maintenance === 'selesai perbaikan' ? 'baik' : ($this->maintenance === 'batal perbaikan' ? 'rusak berat' : $this->condition),
                'maintenance'    => $this->maintenance,
                'description'    => $this->description ?? null,
                'completed_at'   => $this->maintenance === 'selesai perbaikan' ? Carbon::now() : ($this->maintenance === 'batal perbaikan' ? Carbon::now() : null)
            ]);

            DB::commit();

            $message = "Informasi pemeliharaan perangkat telah disimpan.";
        } catch (Exception $error) {
            DB::rollBack();

            Log::error($error->getMessage());

            $message = "Informasi pemeliharaan perangkt gagal disimpan.";
        }

        return $message;
    }
}
