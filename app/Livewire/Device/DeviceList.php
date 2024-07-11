<?php

declare(strict_types=1);

namespace App\Livewire\Device;

use App\Models\DeviceMaster;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\View\View;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

class DeviceList extends Component
{
    use WithPagination;

    public int $numberOfPagination = 9;
    public ?string $searchKeyword  = null;
    public bool $init = true;

    public bool $modal = false;

    #[Locked]
    public string $id;

    #[Title('Perangkat TI')]
    public function render(): View
    {
        return view("livewire.device.device-list", [
            'device_masters' => $this->fetchRequest(
                $this->searchKeyword,
                $this->numberOfPagination
            )
        ]);
    }

    private function fetchRequest(?string $keyword, int $pagination): Paginator
    {
        return
            DeviceMaster::search($keyword)
                ->query(fn ($query) => $query->with(['devices:device_id', 'states:device_id', 'maintenances:device_id,condition']))
                ->orderBy('created_at', 'desc')
                ->paginate($pagination);
    }
}
