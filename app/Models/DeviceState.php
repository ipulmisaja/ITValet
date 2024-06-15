<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use Laravel\Scout\Searchable;

class DeviceState extends Model
{
    use Searchable, SoftDeletes;

    protected $table = "device_states";

    protected $fillable = [
        "user_id",
        "device_id",
        "receipt_at",
        "bast_no"
    ];

    protected $casts = [
        'receipt_at' => 'datetime:Y-m-d'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = (string) Str::uuid();
        });
    }

    public $timestamps = false;

    public function getIncrementing()
    {
        return false;
    }

    public function getKeyType()
    {
        return "string";
    }

    public function toSearchableArray()
    {
        return [
            'bast_no'        => $this->bast_no,
            'users.name'     => '',
            'devices.name'   => '',
            'devices.serial' => '',
            'devices.bmn_number' => ''
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function device()
    {
        return $this->belongsTo(Device::class, 'device_id', 'id')->with('maintenance');
    }
}
