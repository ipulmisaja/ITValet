<?php

namespace App\Repositories;

use App\Models\ServiceType;

class ServiceRepository
{
    public static function read(?string $keyword, int $pagination)
    {
        return
            ServiceType::search($keyword)
                ->orderBy('created_at', 'desc')
                ->paginate($pagination);
    }
}
