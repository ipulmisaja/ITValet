<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Laravel\Scout\Searchable;

class ServiceType extends Model
{
    use HasFactory, Searchable;

    protected $table = "service_types";

    protected $fillable = ['type'];

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
            'id'   => $this->id,
            'type' => $this->type
        ];
    }

    public function serviceRequet()
    {
        return $this->hasMany(ServiceRequest::class, 'id', 'service_type_id');
    }
}
