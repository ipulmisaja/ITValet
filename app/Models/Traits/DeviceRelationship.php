<?php

declare(strict_types=1);

namespace App\Models\Traits;

use App\Models\DeviceMaintenance;
use App\Models\DeviceState;
use App\Models\DeviceMaster;

trait DeviceRelationship
{
    public function master()
    {
        return $this->belongsTo(DeviceMaster::class, 'device_id', 'id');
    }

    public function maintenances()
    {
        return $this->hasMany(DeviceMaintenance::class, 'device_id', 'id');
    }

    public function states()
    {
        return $this->hasMany(DeviceState::class, 'device_id', 'id');
    }
}
