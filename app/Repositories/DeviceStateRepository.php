<?php

namespace App\Repositories;

use App\Models\DeviceState;
use Exception;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class DeviceStateRepository
{
    public static function read(?string $keyword, int $numberOfPagination)
    {
        return
            DeviceState::search($keyword)
            ->query(
                fn ($query) => $query
                    ->with(['user', 'device' => function ($query) {
                        $query->with('maintenance');
                    }])
                    ->join('users', 'device_states.user_id', 'users.id')
                    ->rightJoin('devices', 'device_states.device_id', 'devices.id')
                    ->select([
                        'device_states.id',
                        'device_states.user_id',
                        'device_states.device_id as device_state_id',
                        'device_states.bast_no',
                        'device_states.bast_file',
                        'users.name as user',
                        'users.email as email',
                        'devices.id as device_id',
                        'devices.name as namedevice',
                        'devices.serial as serial',
                        'devices.type as type',
                        'devices.bmn_number as bmn'
                    ])
            )
            ->orderBy('receipt_at', 'desc')
            ->paginate($numberOfPagination);
    }
}
