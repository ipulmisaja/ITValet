<?php

declare(strict_types=1);

namespace App\Models\Traits;

use App\Models\DeviceMaintenance;
use App\Models\DeviceState;
use App\Models\DeviceImage;

trait DeviceRelationship
{
    public function maintenances()
    {
        return $this->hasMany(DeviceMaintenance::class, 'device_id', 'id');
    }

    public function state()
    {
        return $this->hasOne(DeviceState::class);
    }

    public function image()
    {
        return $this->belongsTo(DeviceImage::class, 'image_id', 'id');
    }
}
