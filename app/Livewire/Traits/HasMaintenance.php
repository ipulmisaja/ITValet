<?php

declare(strict_types=1);

namespace App\Livewire\Traits;

use App\Models\DeviceMaintenance;
use Carbon\Carbon;

trait HasMaintenance
{
    public function newMaintenance(string $deviceId, string $requestId, string $description)
    {
        DeviceMaintenance::create([
            'device_id'   => $deviceId,
            'request_id'  => $requestId,
            'condition'   => 'rusak ringan',
            'maintenance' => 'belum perbaikan',
            'description' => $description,
            'created_at'  => Carbon::now()
        ]);
    }
}
