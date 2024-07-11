<?php

declare(strict_types=1);

namespace App\Models\Traits;

use App\Models\Device;
use App\Models\DeviceState;
use App\Models\DeviceMaintenance;

trait DeviceMasterRelationship
{
    public function devices()
    {
        return $this->hasMany(Device::class, 'device_id', 'id');
    }

    public function states()
    {
        return $this->hasMany(DeviceState::class, 'device_id', 'id');
    }

    public function maintenances()
    {
        return $this->hasMany(DeviceMaintenance::class, 'device_id', 'id')->where('condition', '!=', 'baik');
    }
}
