<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;

class DeviceMaintenance extends Model
{
    use Searchable, SoftDeletes;

    protected $table = "device_maintenances";

    protected $fillable = [
        "device_id",
        "ticket",
        "condition",
        "maintenance",
        "description",
        "created_at",
        "maintenance_at",
        "completed_at"
    ];

    protected $casts = [
        'created_at'     => 'datetime:Y-m-d',
        'maintenance_at' => 'datetime:Y-m-d',
        'completed_at'   => 'datetime:Y-m-d'
    ];

    public $timestamps = false;

    public function getRouteKeyName()
    {
        return 'ticket';
    }

    public function toSearchableArray(): array
    {
        return [
            'ticket'      => $this->ticket,
            'condition'   => $this->condition,
            'maintenance' => $this->maintenance
        ];
    }

    public function device()
    {
        return $this->belongsTo(Device::class, 'device_id', 'id')->with('state.user');
    }
}
