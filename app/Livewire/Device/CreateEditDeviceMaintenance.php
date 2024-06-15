<?php

namespace App\Livewire\Device;

use App\Livewire\Forms\MaintenanceForm;
use App\Models\DeviceMaintenance;
use App\Models\Device;
use App\Repositories\DeviceMaintenanceRepository;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;
use Livewire\Attributes\Locked;
use Livewire\Component;

class CreateEditDeviceMaintenance extends Component
{
    #[Locked]
    public $pageTitle;

    public MaintenanceForm $form;
    public Device $device;
    public DeviceMaintenance $deviceMaintenance;
    public string $routeName;

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
        $this->routeName = Route::currentRouteName();

        if ($this->routeName === 'device-maintenance.edit') {
            $this->pageTitle = "Edit Pemeliharaan Perangkat";

            $ticket = Route::getCurrentRoute()->parameters['ticket'];

            $this->deviceMaintenance = DeviceMaintenanceRepository::getValue(['ticket', $ticket]);
            $this->form->device_name = $this->deviceMaintenance->device->name . ' (' . $this->deviceMaintenance->device->serial . ')';
            $this->form->device_id   = $this->deviceMaintenance->device->id;
            $this->form->condition   = $this->deviceMaintenance->condition;
            $this->form->maintenance = $this->deviceMaintenance->maintenance;
            $this->form->description = $this->deviceMaintenance->description;
        } else {
            $this->pageTitle = "Pemeliharaan Baru";
            $this->device            = $device;
            $this->form->device_name = $device->name . ' (' . $device->serial . ')';
            $this->form->device_id   = $device->id;
        }
    }

    public function render(): View
    {
        return view('livewire.device.create-edit-device-maintenance')->title($this->pageTitle);
    }

    public function submitData()
    {
        $this->dispatch('validate');

        $result = $this->routeName == 'device-maintenance.edit'
            ? $this->form->update($this->deviceMaintenance)
            : $this->form->save($this->device);

        session()->flash('messages', $result);

        $this->redirect(route('device-maintenance', $this->form->device_id));
    }
}
