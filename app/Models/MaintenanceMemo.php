<?php

declare(strict_types=1);

namespace App\Models;

use App\Models\Traits\MaintenanceMemoRelationship;
use App\Models\Traits\ModelUuid;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class MaintenanceMemo extends Model
{
    use ModelUuid, MaintenanceMemoRelationship, Searchable;

    protected $table = "maintenance_memos";

    protected $fillable = [
        'number', 'sign_code', 'attachment'
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d',
        'updated_at' => 'datetime:Y-m-d'
    ];

    public function toSearchableArray(): array
    {
        return ['number' => $this->number];
    }
}
