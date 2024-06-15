<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Contracts\Pagination\Paginator;

class UserRepository
{
    public static function read(?string $keyword, int $pagination): Paginator
    {
        return
            User::search($keyword)
                ->query(fn ($query) => $query->with('roles'))
                ->orderBy('name', 'asc')
                ->paginate($pagination);
    }
}
