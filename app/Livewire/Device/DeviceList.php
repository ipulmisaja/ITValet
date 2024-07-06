<?php

declare(strict_types=1);

namespace App\Livewire\Device;

use App\Models\Device;
use App\Models\DeviceState;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Locked;
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

    #[Locked]
    public string $id;

    #[Computed]
    public function allocation(): array
    {
        return ['states' => DeviceState::count(), 'devices' => Device::count()];
    }

    #[Title('Perangkat TI')]
    public function render(): View
    {
        return view("livewire.device.device-list", [
            'devices' => $this->fetchRequest(
                $this->searchKeyword,
                $this->numberOfPagination
            )
        ]);
    }

    private function fetchRequest(?string $keyword, int $pagination): Collection
    {
        $devices = Device::with('image')
                    ->distinct()
                    ->get(['name', 'brand', 'type', 'image_id'])
                    ->map(function($device) {
                        return [
                            'name'  => $device->name,
                            'brand' => $device->brand,
                            'type'  => $device->type,
                            'image' => $device->image->path ?? null
                        ];
                    });
        // dd($devices);

        $counts = Device::groupBy('name')
                    ->select('name', DB::raw('count(*) as total'))
                    ->get()
                    ->map(function($count) {
                        return [
                            'name'  => $count->name,
                            'total' => $count->total,
                        ];
                    });

        return
            $devices->merge($counts)
                    ->groupBy('name')
                    ->map(function($new) {
                        return Arr::collapse($new);
                    })
                    ->values();
    }
}
