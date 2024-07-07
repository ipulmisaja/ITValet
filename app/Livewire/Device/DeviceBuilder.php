<?php

declare(strict_types=1);

namespace App\Livewire\Device;

use App\Livewire\Forms\DeviceForm;
use App\Models\Device;
use App\Models\DeviceState;
use App\Models\DeviceMaintenance;
use App\Traits\HasRenderOption;
use Illuminate\Support\Facades\Route;
use Illuminate\Contracts\View\View;
use Illuminate\Routing\Redirector;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Locked;
use Livewire\Component;
use Livewire\Features\SupportRedirects\Redirector as SupportRedirectsRedirector;
use Livewire\WithFileUploads;

class DeviceBuilder extends Component
{
    use HasRenderOption, WithFileUploads;

    #[Locked]
    public $pageTitle;

    public DeviceForm $form;

    public Device $device;

    #[Locked]
    public $routeName;

    #[Locked]
    public $procurementOption = "<option value='Pusat'>Pusat</option><option value='Daerah'>Daerah</option>";

    public bool $modal = false;

    #[Computed]
    public function brands()
    {
        return $this->renderOption(
            $this->getOptionForRender(app(Device::class), ['brand as id', 'brand'])
        );
    }

    #[Computed]
    public function types()
    {
        return $this->renderOption(
            $this->getOptionForRender(app(Device::class), ['type as id', 'type'])
        );
    }

    #[Computed]
    public function operatingSystem()
    {
        return $this->renderOption(
            $this->getOptionForRender(app(Device::class), ['operating_system as id', 'operating_system'])
        );
    }

    public function mount(Device $device)
    {
        $this->routeName = Route::currentRouteName();

        if ($this->routeName === 'device.edit') {
            // Set Title
            $this->pageTitle = "Edit Informasi Perangkat";

            // Set Form Value
            $this->device                = $device;
            $this->form->name            = $device->name;
            $this->form->serial          = $device->serial ?? null;
            $this->form->brand           = $device->brand;
            $this->form->deviceType      = $device->type;
            $this->form->os              = $device->operating_system ?? null;
            $this->form->procurementDate = $device->procurement_period->format('Y-m-d');
            $this->form->procurementType = $device->procurement_type;
            $this->form->bmn_number      = $device->bmn_number ?? null;
        } else {
            $this->pageTitle = "Perangkat Baru";
        }
    }

    public function render(): View
    {
        return view("livewire.device.device-builder")->title($this->pageTitle);
    }

    public function submitData()
    {
        $this->dispatch('validate');

        if ($this->routeName === 'device.edit') {
            $result = $this->form->update($this->device);

            $route = 'device.allocation.list';
        } else {
            $result = $this->form->save();

            $route = 'device.list';
        }

        // Send notification to redirect page.
        $this->dispatch('notification', message: $result);

        return $this->redirectRoute($route, navigate: true);
    }

    public function deleteItem(): void
    {
        $this->modal = true;
    }

    public function confirmDelete()
    {
        // Delete Device Maintenance
        DeviceMaintenance::where('device_id', $this->device->id)->delete();

        // Delete Device State
        DeviceState::where('device_id', $this->device->id)->delete();

        // Delete Device
        Device::where('id', $this->device->id)->delete();

        $this->modal = false;

        return $this->redirectRoute('device.allocation.list', navigate: true);
    }
}
