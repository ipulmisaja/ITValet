<?php

declare(strict_types=1);

namespace App\Livewire\Device\Maintenance;

use App\Livewire\Forms\MaintenanceForm;
use App\Models\DeviceMaintenance;
use App\Models\Device;
use Illuminate\View\View;
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

    public function mount(Device $deviceId): void
    {
        $this->device            = $deviceId;
        $this->form->device_id   = $deviceId->id;
        $this->form->device_name = $deviceId->name . ' (' . $deviceId->serial . ')';
    }

    #[Title('Pemeliharaan Baru')]
    public function render(): View
    {
        return view('livewire.device.maintenance.maintenance-create');
    }

    public function submitData()
    {
        $this->dispatch('validate');

        $result = $this->form->save($this->device);

        $this->dispatch('notification', message: $result);

        return $this->redirectRoute('device.maintenance.list', navigate: true);
    }
}
