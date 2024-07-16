<?php

declare(strict_types=1);

namespace App\Models\Traits;

use App\Models\Device;
use App\Models\MaintenanceMemo;

trait DeviceMaintenanceRelationship
{
    public function device()
    {
        return $this->belongsTo(Device::class, 'device_id', 'id')->with(['master', 'states.user']);
    }

    public function memo()
    {
        return $this->belongsTo(MaintenanceMemo::class, 'memo_id', 'id');
    }

    public function request()
    {
        // TODO: Relasi ke Model ServiceRequest
        // Tapi di model DeviceMaintenance kolom request_id, disesuaikan dulu isinya menjadi UUID
        // Kemudian relasi bisa saja kosong kalau menambahkan manual perangkat yang akan di maintenance
    }
}
