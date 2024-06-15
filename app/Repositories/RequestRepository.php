<?php

namespace App\Repositories;

use App\Models\ServiceRequest;
use Illuminate\Contracts\Pagination\Paginator;

class RequestRepository
{
    public static function read(?string $keyword, int $pagination): Paginator
    {
        $admin = auth()->user()->hasRole('admin');

        return
            ServiceRequest::search($keyword)
                ->query(fn ($query) => $query->with(['user', 'serviceType']))
                ->when(!$admin, function ($query) {
                    $query->where('user_id', auth()->user()->id);
                })
                ->orderBy('created_at', 'desc')
                ->paginate($pagination);
    }
}
