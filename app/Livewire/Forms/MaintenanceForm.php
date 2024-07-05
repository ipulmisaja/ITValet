<?php

declare(strict_types=1);

namespace App\Livewire\Forms;

use App\Livewire\Traits\HasTransaction;
use App\Models\Device;
use App\Models\DeviceMaintenance;
use Carbon\Carbon;
use Livewire\Form;

class MaintenanceForm extends Form
{
    use HasTransaction;

    public ?string $device_name;
    public ?string $device_id;
    public ?string $condition;
    public ?string $maintenance;
    public ?string $description;
    public ?int $repair;
    public ?string $maintenance_at;
    public ?string $completed_at;

    public function save(Device $device): string
    {
        // $this->validate();

        $result = $this->modelTransaction(
            DeviceMaintenance::create([
                'device_id'   => $device->id,
                'request_id'  => null,
                'condition'   => $this->condition,
                'description' => $this->description ?? null,
                'created_at'  => Carbon::now(),
            ])
        );

        $message = $result === 'Success'
                 ? 'Permohonan pemeliharaan telah ditambahkan.'
                 : 'Permohonan pemeliharaan gagal ditambahkan.';

        return $message;
    }

    public function update(DeviceMaintenance $deviceMaintenance): string
    {
        // $this->validate();

        $result = $this->modelTransaction(
            $deviceMaintenance->update([
                'condition'      => $this->maintenance === 'selesai perbaikan' ? 'baik' : ($this->maintenance === 'batal perbaikan' ? 'rusak berat' : $this->condition),
                'maintenance'    => $this->maintenance,
                'description'    => $this->description ?? null,
                'repair_request' => $this->repair,
                'completed_at'   => $this->maintenance === 'selesai perbaikan' ? Carbon::now() : ($this->maintenance === 'batal perbaikan' ? Carbon::now() : null)
            ])
        );

        $message = $result === 'Success'
                 ? 'Info pemeliharaan telah diupdate.'
                 : 'Info pemeliharaan gagal diupdate';

        return $message;
    }
}
