<?php

declare(strict_types=1);

namespace App\Models;

use App\Models\Traits\ModelUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class ServiceType extends Model
{
    use HasFactory, Searchable, ModelUuid;

    protected $table = "service_types";

    protected $fillable = ['type'];

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
