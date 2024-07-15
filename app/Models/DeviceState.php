<?php

declare(strict_types=1);

namespace App\Models;

use App\Models\Traits\DeviceStateRelationship;
use App\Models\Traits\ModelUuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;

class DeviceState extends Model
{
    use ModelUuid, DeviceStateRelationship, Searchable, SoftDeletes;

    protected $table = "device_state";

    protected $fillable = [
        'user_id', 'device_id', 'device_master_id', 'receipt_at', 'bast_no', 'bast_file'
    ];

    protected $casts = ['receipt_at' => 'datetime:Y-m-d'];

    public $timestamps = false;

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
}
