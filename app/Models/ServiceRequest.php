<?php

declare(strict_types=1);

namespace App\Models;

use App\Models\Traits\ModelUuid;
use App\Models\Traits\ServiceRequestRelationship;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class ServiceRequest extends Model
{
    use HasFactory, ModelUuid, Searchable, ServiceRequestRelationship;

    protected $table = "service_requests";

    protected $fillable = [
        'user_id',
        'service_type_id',
        'device_id',
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

    public function toSearchableArray()
    {
        return [
            'id'      => $this->id,
            'summary' => $this->summary,
            'status'  => $this->status
        ];
    }
}
