<?php

namespace App\Repositories;

use App\Models\Software;
use Illuminate\Contracts\Pagination\Paginator;

class SoftwareRepository
{
    public static function read(?string $keyword, int $pagination): Paginator
    {
        return
            Software::search($keyword)
            ->latest()
            ->paginate($pagination);
    }
}
