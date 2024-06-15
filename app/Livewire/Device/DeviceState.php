<?php

namespace App\Livewire\Device;

use App\Models\DeviceState as StateModel;
use App\Repositories\DeviceStateRepository;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Locked;
use Livewire\Component;
use Livewire\WithPagination;

class DeviceState extends Component
{
    use WithPagination;

    #[Locked]
    public $pageTitle = "Alokasi Perangkat TI";

    public int $numberOfPagination = 10;
    public ?string $searchKeyword  = null;

    public bool $modal = false;

    public string $id;

    public function render(): View
    {
        return view("livewire.device.device-state", [
            'states' => DeviceStateRepository::read(
                $this->searchKeyword,
                $this->numberOfPagination
            )
        ])->title($this->pageTitle);
    }

    public function deleteItem(string $id): void
    {
        $this->id = $id;

        $this->modal = true;
    }

    public function confirmDelete(): void
    {
        StateModel::where('id', $this->id)->delete();

        $this->modal = false;
    }
}
