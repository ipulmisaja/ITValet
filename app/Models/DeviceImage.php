<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DeviceImage extends Model
{
    protected $table = "device_images";

    protected $fillable = ["name", "path"];
}
