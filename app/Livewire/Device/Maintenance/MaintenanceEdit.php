<?php

declare(strict_types=1);

namespace App\Livewire\Device\Maintenance;

use App\Livewire\Forms\MaintenanceForm;
use App\Models\DeviceMaintenance;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Locked;
use Livewire\Component;

class MaintenanceEdit extends Component
{
    public MaintenanceForm $form;
    public DeviceMaintenance $maintenanceId;

    #[Locked]
    public $conditionOpt =
        "<option value='rusak berat'>Rusak Berat</option>
        <option value='rusak ringan'>Rusak Ringan</option>";

    #[Locked]
    public $repairOpt =
        "<option value='1'>Ya</option>
        <option value='0'>Tidak</option>";

    #[Locked]
    public $actionOpt =
        "<option value='belum perbaikan'>Belum</option>
        <option value='sedang perbaikan'>Sedang</option>
        <option value='selesai perbaikan'>Selesai</option>
        <option value='batal perbaikan'>Batal</option>";

    public function mount(DeviceMaintenance $maintenanceId)
    {
        $this->maintenanceId = $maintenanceId;

        $this->form->device_name = $this->maintenanceId->device->name . ' (' . $this->maintenanceId->device->serial . ')';
        $this->form->device_id   = $this->maintenanceId->device->id;
        $this->form->condition   = $this->maintenanceId->condition;
        $this->form->maintenance = $this->maintenanceId->maintenance;
        $this->form->description = $this->maintenanceId->description;
        $this->form->repair      = $this->maintenanceId->repair_request;

    }

    public function render(): View
    {
        return view('livewire.device.maintenance.maintenance-edit')->title('Informasi Pemeliharaan');
    }

    public function submitData()
    {
        $this->dispatch('validate');

        $result = $this->form->update($this->maintenanceId);

        session()->flash('messages', $result);

        $this->redirect(route('maintenance.list'), navigate: true);
    }
}
