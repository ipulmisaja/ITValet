<?php

declare(strict_types=1);

namespace App\Models;

use App\Models\Traits\ModelUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Scout\Searchable;
use MBarlow\Megaphone\HasMegaphone;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, HasRoles, ModelUuid, Searchable, SoftDeletes;

    protected $table = "users";

    protected $fillable = [
        "name",
        "username",
        "email",
        "password",
        "change_password",
        "remember_token",
        "bps_id",
        "employee_id",
        "photo",
        "type"
    ];

    protected $primaryKey = "id";

    protected $hidden = ["password", "remember_token"];

    public function toSearchableArray()
    {
        return [
            'name'        => $this->name,
            'bps_id'      => $this->bps_id,
            'employee_id' => $this->employee_id,
            'email'       => $this->email,
            'type'        => $this->type
        ];
    }
}
