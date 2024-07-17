<?php

declare(strict_types=1);

namespace App\Livewire\Device\Maintenance;

use App\Livewire\Traits\GenerateMemo;
use App\Livewire\Traits\HasTransaction;
use App\Models\Device;
use App\Models\DeviceMaintenance;
use App\Models\MaintenanceMemo;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\View\View;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class MaintenanceList extends Component
{
    use GenerateMemo, HasTransaction, WithPagination;

    /** Form Property */
    public MaintenanceForm $maintenanceForm;

    public Device $device;

    /** Page Properties */
    public int $numberOfPagination = 10;
    public ?string $searchKeyword  = null;

    /** Modal Properties */
    public bool $builderModal = false;
    public bool $deleteModal = false;

    #[Locked]
    public string $maintenanceId;

    #[Locked]
    public $conditionOpt =
        "<option value='rusak berat'>Rusak Berat</option>
        <option value='rusak ringan'>Rusak Ringan</option>";

    #[Locked]
    public $actionOpt =
        "<option value='belum perbaikan'>Belum</option>
        <option value='sedang perbaikan'>Sedang</option>
        <option value='selesai perbaikan'>Selesai</option>
        <option value='batal perbaikan'>Batal</option>";

    #[Locked]
    public $repairOpt =
        "<option value='1'>Ya</option>
        <option value='0'>Tidak</option>";

    #[Computed]
    public function condition(): array
    {
        $result = DeviceMaintenance::get('condition')->groupBy('condition')->map->count();

        return $result->toArray();
    }

    public function mount(Device $device)
    {
        $this->device = $device;

        if (request()->is('/perangkat-ti/pemeliharaan/*')) {
            $this->maintenanceForm->device_master_id = $device->master->id;
            $this->maintenanceForm->device_id = $device->id;
            $this->maintenanceForm->state_id = $device->states[0]->id;
        }
    }

    #[Title('Pemeliharaan Perangkat')]
    public function render(): View
    {
        return view('livewire.device.maintenance.maintenance-list', [
            'maintenances' => $this->maintenanceForm->fetchInformation(
                $this->device->id,
                $this->searchKeyword,
                $this->numberOfPagination
            )
        ]);
    }

    public function addMaintenance(): void
    {
        $this->reset([
            'maintenanceForm.device_name',
            'maintenanceForm.condition',
            'maintenanceForm.description',
            'maintenanceForm.status',
            'maintenanceForm.repair'
        ]);

        $this->builderModal = true;

        $this->maintenanceForm->device_name = $this->device->master->name . ' (' . $this->device->serial . ')';
    }

    public function storeMaintenance(): void
    {
        $this->dispatch('validate');

        $message = $this->maintenanceForm->save();

        $this->dispatch('notification', message: $message);

        $this->builderModal = false;
    }

    public function editMaintenance(string $maintenanceId)
    {
        $this->maintenanceId = $maintenanceId;

        $this->maintenanceForm->fetchMaintenance($maintenanceId);
    }

    public function updateMaintenance()
    {
        $this->dispatch('validate');

        $message = $this->maintenanceForm->update($this->maintenanceId);

        $this->dispatch('notification', message: $message);

        $this->reset('maintenanceId');
    }

    public function generateMemo(?string $number)
    {
        return $this->generate($number);
    }

    public function deleteMaintenance(string $maintenanceId): void
    {
        $this->maintenanceId = $maintenanceId;

        $this->deleteModal = true;
    }

    public function confirmDelete(): void
    {
        $result = $this->maintenanceForm->delete($this->maintenanceId);

        $this->dispatch('notification', message: $result);

        $this->reset('maintenanceId');

        $this->deleteModal = false;
    }
}
