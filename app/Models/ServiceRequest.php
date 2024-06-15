<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Laravel\Scout\Searchable;

class ServiceRequest extends Model
{
    use HasFactory, Searchable;

    protected $table = "service_requests";

    protected $fillable = [
        'user_id',
        'request_type',
        'service_type_id',
        'summary',
        'description',
        'attachment',
        'status',
        'created_at',
        'completed_at'
    ];
    protected $casts = [
        'created_at'   => 'datetime:Y-m-d',
        'completed_at' => 'datetime:Y-m-d'
    ];

    public $timestamps = false;

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
            'id'           => $this->id,
            'request_type' => $this->request_type,
            'summary'      => $this->summary,
            'status'       => $this->status
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function serviceType()
    {
        return $this->belongsTo(ServiceType::class, 'service_type_id', 'id');
    }
}
