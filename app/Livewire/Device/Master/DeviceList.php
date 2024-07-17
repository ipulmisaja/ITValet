<?php

declare(strict_types=1);

namespace App\Livewire\Device\Master;

use App\Models\DeviceMaster;
use App\Traits\HasRenderOption;
use Illuminate\View\View;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

class DeviceList extends Component
{
    use HasRenderOption, WithPagination;

    /** Form Property */
    public DeviceForm $form;

    /** Page Properties */
    public int $numberOfPagination = 9;
    public ?string $searchKeyword  = null;

    /** Modal Property */
    public bool $builderModal = false;

    #[Locked]
    public string $id;

    #[Locked]
    public string $procurementOption = "<option value='Pusat'>Pusat</option><option value='Daerah'>Daerah</option>";

    #[Computed]
    public function brands()
    {
        return $this->renderOption($this->getOptionForRender(app(DeviceMaster::class), ['brand as id', 'brand']));
    }

    #[Computed]
    public function types()
    {
        return $this->renderOption($this->getOptionForRender(app(DeviceMaster::class), ['type as id', 'type']));
    }

    #[Title('Perangkat TI')]
    public function render(): View
    {
        return view("livewire.device.master.device-list", [
            'device_masters' => $this->form->fetchInformation(
                $this->searchKeyword,
                $this->numberOfPagination
            )
        ]);
    }

    public function createDevice(): void
    {
        $this->builderModal = true;
    }

    public function storeDevice(): void
    {
        $this->dispatch('validate');

        $result = $this->form->save();

        $this->dispatch('notification', message: $result);

        $this->builderModal = false;
    }
}
