<?php

declare(strict_types=1);

namespace App\Models\Traits;

use App\Models\DeviceMaintenance;

trait MaintenanceMemoRelationship
{
    public function maintenances()
    {
        return $this->hasMany(DeviceMaintenance::class, 'memo_id', 'id');
    }
}
