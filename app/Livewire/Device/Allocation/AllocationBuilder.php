<?php

declare(strict_types=1);

namespace App\Livewire\Device\Allocation;

use App\Livewire\Forms\StateForm;
use App\Models\Device;
use App\Models\DeviceState;
use App\Models\User;
use App\Traits\HasRenderOption;
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Locked;
use Livewire\Component;
use Livewire\WithFileUploads;

class AllocationBuilder extends Component
{
    use HasRenderOption, WithFileUploads;

    #[Locked]
    public $pageTitle;

    public StateForm $form;
    public DeviceState $deviceState;
    public string $routeName;
    public array $savedevices = [];

    #[Computed]
    public function users(): string
    {
        return $this->renderOption($this->getOptionForRender(app(User::class), ['id', 'name']));
    }

    #[Computed]
    public function devices(): string
    {
        return $this->renderOption($this->getOptionForRender(app(Device::class), ['id', 'name', 'serial']));
    }

    public function mount(string $id): void
    {
        $this->routeName = Route::currentRouteName();

        if ($this->routeName === 'allocation.edit') {
            $this->pageTitle = "Edit Alokasi Perangkat";

            $deviceState = DeviceState::where('id', $id)->first();

            $this->deviceState     = $deviceState;
            $this->form->user      = $deviceState->user_id;
            $this->form->device    = $deviceState->device_id;
            $this->form->bast_date = Carbon::parse($deviceState->receipt_at);
        } else {
            $this->pageTitle = "Alokasi Baru";

            $device = Device::where('id', $id)->first();

            $this->form->device = $device->id;
        }
    }

    public function render(): View
    {
        return view("livewire.device.allocation.allocation-builder")->title($this->pageTitle);
    }

    public function submitData(): void
    {
        $this->dispatch('validate');

        $result = $this->routeName === 'allocation.edit'
            ? $this->form->update($this->deviceState)
            : $this->form->save();

        session()->flash('messages', $result);

        $this->redirectRoute('device.allocation.list', navigate: true);
    }
}
