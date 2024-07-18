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
        'device_id', 'serial', 'bmn_number', 'information'
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d',
        'updated_at' => 'datetime:Y-m-d',
        'deleted_at' => 'datetime:Y-m-d'
    ];

    public function toSearchableArray(): array
    {
        return [
            'serial'      => $this->serial,
            'bmn_number'  => $this->bmn_number,
            'information' => $this->information
        ];
    }
}
