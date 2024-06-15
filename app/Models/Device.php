<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use Laravel\Scout\Searchable;

class Device extends Model
{
    use Searchable, SoftDeletes;

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

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = (string) Str::uuid();
        });
    }

    public function getIncrementing()
    {
        return false;
    }

    public function getKeyType()
    {
        return "string";
    }

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

    public function maintenance()
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
