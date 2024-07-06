<?php

declare(strict_types=1);

namespace App\Models;

use App\Models\Traits\DeviceRelationship;
use App\Models\Traits\ModelUuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;

class Device extends Model
{
    use DeviceRelationship, ModelUuid, Searchable, SoftDeletes;

    protected $table = "devices";

    protected $fillable = [
        "name",
        "serial",
        "brand",
        "type",
        "image_id",
        "operating_system",
        "procurement_period",
        "procurement_type",
        "bmn_number"
    ];

    protected $casts = [
        'procurement_period' => 'datetime:Y-m-d',
    ];

    public function toSearchableArray(): array
    {
        return [
            'name'   => $this->name,
            // 'serial' => $this->serial,
            // 'brand'  => $this->brand,
            // 'type'   => $this->type,
            // 'bmn_number' => $this->bmn_number,
            // 'operating_system' => $this->operating_system,
            // 'procurement_type' => $this->procurement_type
        ];
    }
}
