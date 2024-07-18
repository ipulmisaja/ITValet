<?php

declare(strict_types=1);

namespace App\Models;

use App\Models\Traits\DeviceMaintenanceRelationship;
use App\Models\Traits\ModelUuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;

class DeviceMaintenance extends Model
{
    use DeviceMaintenanceRelationship, ModelUuid, Searchable, SoftDeletes;

    protected $table = "device_maintenance";

    protected $fillable = [
        'device_master_id',
        'device_id',
        'state_id',
        'request_id',
        'condition',
        'maintenance',
        'description',
        'repair_request',
        'memo_id',
        'created_at',
        'maintenance_at',
        'completed_at'
    ];

    protected $casts = [
        'created_at'     => 'datetime:Y-m-d',
        'maintenance_at' => 'datetime:Y-m-d',
        'completed_at'   => 'datetime:Y-m-d'
    ];

    public $timestamps = false;

    public function toSearchableArray(): array
    {
        return [
            'condition'   => $this->condition,
            'maintenance' => $this->maintenance
        ];
    }
}
