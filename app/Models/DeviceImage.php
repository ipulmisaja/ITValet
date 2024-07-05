<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DeviceImage extends Model
{
    protected $table = "device_images";

    protected $fillable = ["name", "path"];
}
