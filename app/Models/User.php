<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Laravel\Scout\Searchable;
use MBarlow\Megaphone\HasMegaphone;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, HasRoles, Notifiable, Searchable, SoftDeletes, HasMegaphone;

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
