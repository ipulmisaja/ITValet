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
    public DeviceState $allocation;
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

        if ($this->routeName === 'device.allocation.edit') {
            $this->pageTitle = "Edit Alokasi Perangkat";

            $allocation = DeviceState::where('id', $id)->first();

            dump($allocation->receipt_at);
            $this->allocation      = $allocation;
            $this->form->user      = $allocation->user_id;
            $this->form->device    = $allocation->device_id;
            $this->form->bast_date = Carbon::parse($allocation->receipt_at) ?? null;
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

    public function submitData()
    {
        $this->dispatch('validate');

        $result = $this->routeName === 'device.allocation.edit'
            ? $this->form->update($this->allocation)
            : $this->form->save();

        $this->dispatch('notification', message: $result);

        return $this->redirectRoute('device.allocation.list', navigate: true);
    }
}
