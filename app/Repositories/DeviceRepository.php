<?php

namespace App\Repositories;

use App\Models\Device;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;

class DeviceRepository
{
    public static function read(?string $keyword, int $pagination)
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

        return $devices->merge($counts)->groupBy('name')->map(function($new) { return Arr::collapse($new); })->values();
    }
}
