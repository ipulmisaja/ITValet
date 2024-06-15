<?php

namespace App\Livewire\Device;

use App\Models\Device;
use App\Models\DeviceState;
use App\Repositories\DeviceRepository;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

class DeviceList extends Component
{
    use WithPagination;

    public int $numberOfPagination = 10;
    public ?string $searchKeyword  = null;
    public bool $init = true;

    public bool $modal = false;

    public string $id;

    #[Computed]
    public function allocation()
    {
        $states  = DeviceState::count();
        $devices = Device::count();

        return [
            'states' => $states,
            'devices' => $devices
        ];
    }

    #[Title('Perangkat TI')]
    public function render(): View
    {
        return view("livewire.device.device-list", [
            'devices' => DeviceRepository::read($this->searchKeyword, $this->numberOfPagination)
        ]);
    }
}
