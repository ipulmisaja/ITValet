<?php

declare(strict_types=1);

namespace App\Models\Traits;

use App\Models\Device;
use App\Models\User;

trait DeviceStateRelationship
{
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function device()
    {
        return $this->belongsTo(Device::class, 'device_id', 'device_id')->with('master');
    }
}
