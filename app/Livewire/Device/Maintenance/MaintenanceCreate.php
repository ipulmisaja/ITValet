<?php

declare(strict_types=1);

namespace App\Livewire\Device\Maintenance;

use App\Livewire\Forms\MaintenanceForm;
use App\Models\DeviceMaintenance;
use App\Models\Device;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Title;
use Livewire\Component;

class MaintenanceCreate extends Component
{
    public MaintenanceForm $form;
    public Device $device;
    public DeviceMaintenance $maintenanceId;

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

    public function mount(Device $device)
    {
        $this->device            = $device;
        $this->form->device_id   = $device->id;
        $this->form->device_name = $device->name . ' (' . $device->serial . ')';
    }

    #[Title('Pemeliharaan Baru')]
    public function render()
    {
        return view('livewire.device.maintenance.maintenance-create');
    }

    public function submitData()
    {
        $this->dispatch('validate');

        $result = $this->form->save($this->device);

        session()->flash('messages', $result);

        $this->redirect(route('maintenance.list'), navigate: true);
    }
}
