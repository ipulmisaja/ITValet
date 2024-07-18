<?php

declare(strict_types=1);

namespace App\Livewire\Device\Maintenance;

use App\Livewire\Traits\HasTransaction;
use App\Models\Device;
use App\Models\DeviceMaintenance;
use Carbon\Carbon;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Support\Collection;
use Livewire\Form;

class MaintenanceForm extends Form
{
    use HasTransaction;

    public ?string $device_master_id;

    public ?string $device_name;

    public ?string $device_id;

    public ?string $state_id;

    public ?string $request_id;

    public ?string $condition;

    public ?string $status;

    public ?string $description;

    public $repair;

    public ?string $maintenance_at;

    public ?string $completed_at;

    public function fetchInformation(?string $device, ?string $keyword, int $pagination): Paginator
    {
        return
            DeviceMaintenance::search($keyword)
                ->query(fn($query) => $query->with(['memo', 'device']))
                ->when(!is_null($device), function($query) use ($device) {
                    $query->where('device_id', $device);
                })
                ->orderBy('condition', 'asc')
                ->paginate($pagination);
    }

    public function fetchMaintenance(string $maintenanceId): void
    {
        $this->reset(['device_name', 'condition', 'description', 'status', 'repair']);

        $maintenance = DeviceMaintenance::with('device')->where('id', $maintenanceId)->get();

        $this->device_name = $maintenance[0]->device->master->name . ' (' . $maintenance[0]->device->serial . ')';
        $this->condition   = $maintenance[0]->condition;
        $this->description = $maintenance[0]->description;
        $this->status      = $maintenance[0]->maintenance ?? null;
        $this->repair      = $maintenance[0]->repair_request ?? null;
    }

    public function save(): string
    {
        // $this->validate();

        $query = function() {
            DeviceMaintenance::create([
                'device_master_id' => $this->device_master_id,
                'device_id'        => $this->device_id,
                'state_id'         => $this->state_id ?? null,
                'request_id'       => $this->request_id ?? null,
                'condition'        => $this->condition,
                'description'      => $this->description ?? null,
                'created_at'       => Carbon::now(),
            ]);
        };

        $result = $this->modelTransaction($query);

        $message = $result === 'Success'
                 ? "Permohonan pemeliharaan telah ditambahkan."
                 : "Permohonan pemeliharaan gagal ditambahkan.";

        return $message;
    }

    public function update(string $maintenanceId): string
    {
        // $this->validate();

        $query = function() use ($maintenanceId) {
            DeviceMaintenance::where('id', $maintenanceId)->update([
                'condition'      => $this->status === 'selesai perbaikan' ? 'baik' : ($this->status === 'batal perbaikan' ? 'rusak berat' : $this->condition),
                'maintenance'    => $this->status,
                'description'    => $this->description ?? null,
                'repair_request' => $this->repair,
                'completed_at'   => $this->status === 'selesai perbaikan' ? Carbon::now() : ($this->status === 'batal perbaikan' ? Carbon::now() : null)
            ]);
        };

        $result = $this->modelTransaction($query);

        $message = $result === 'Success'
                 ? "Info pemeliharaan telah diupdate."
                 : "Info pemeliharaan gagal diupdate";

        return $message;
    }

    public function delete(string $maintenanceId): string
    {
        $query = function() use ($maintenanceId) {
            $maintenance = DeviceMaintenance::findOrFail($maintenanceId);
            $maintenance->delete();
        };

        $result = $this->modelTransaction($query);

        $message = $result === 'Success'
                 ? "Informasi pemeliharaan telah dihapus."
                 : "Informasi pemeliharaan gagal dihapus.";

        return $message;
    }
}
