<?php

declare(strict_types=1);

namespace App\Models;

use App\Models\Traits\DeviceMasterRelationship;
use App\Models\Traits\ModelUuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;

class DeviceMaster extends Model
{
    use DeviceMasterRelationship, ModelUuid, Searchable, SoftDeletes;

    protected $table = "device_master";

    protected $fillable = [
        'name', 'brand', 'type', 'image', 'procurement_type', 'procurement_period'
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d',
        'updated_at' => 'datetime:Y-m-d',
        'deleted_at' => 'datetime:Y-m-d',
        'procurement_period' => 'datetime:Y-m-d'
    ];

    public function toSearchableArray(): array
    {
        return [
            'name'  => $this->name,
            'brand' => $this->brand,
            'type'  => $this->type,
            'procurement_type' => $this->procurement_type
        ];
    }
}
