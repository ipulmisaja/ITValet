<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Laravel\Scout\Searchable;

class Software extends Model
{
    use Searchable;

    protected $table = "software";

    protected $fillable = [
        "name", "category", "url", "note"
    ];

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
            'name' => $this->name,
            'category' => $this->category
        ];
    }
}
