<?php

declare(strict_types=1);

namespace App\Models\Traits;

use App\Models\Device;
use App\Models\ServiceType;
use App\Models\User;

trait ServiceRequestRelationship
{
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id')->withTrashed();
    }

    public function serviceType()
    {
        return $this->belongsTo(ServiceType::class, 'service_type_id', 'id');
    }

    public function device()
    {
        return $this->belongsTo(Device::class, 'device_id', 'id')->with(['master', 'states']);
    }
}
