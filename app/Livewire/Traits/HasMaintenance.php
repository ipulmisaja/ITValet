<?php

declare(strict_types=1);

namespace App\Livewire\Traits;

use App\Models\DeviceMaintenance;
use Carbon\Carbon;

trait HasMaintenance
{
    public function newMaintenance(string $masterId, string $deviceId, string $stateId, string $requestId, string $description)
    {
        DeviceMaintenance::create([
            'device_master_id' => $masterId,
            'device_id'        => $deviceId,
            'state_id'         => $stateId,
            'request_id'       => $requestId,
            'condition'        => 'rusak ringan',
            'maintenance'      => 'belum perbaikan',
            'description'      => $description,
            'created_at'       => Carbon::now()
        ]);
    }
}
