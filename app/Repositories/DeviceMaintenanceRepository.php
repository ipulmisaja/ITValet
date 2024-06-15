<?php

namespace App\Repositories;

use App\Models\DeviceMaintenance;
use Illuminate\Contracts\Pagination\Paginator;

class DeviceMaintenanceRepository
{
    public static function read(string $role, ?string $filter, ?string $keyword, int $pagination): Paginator
    {
        switch ($role) {
            case 'admin':
                $result = DeviceMaintenance::search($keyword)
                            ->query(fn($query) => $query->with('device'))
                            ->when(!is_null($filter), function ($query) use ($filter) {
                                $query->where('device_id', $filter);
                            })
                            ->orderBy('created_at', 'desc')
                            ->paginate($pagination);
                break;
            case 'keuangan':
                $result = DeviceMaintenance::search($keyword)
                            ->query(fn($query) => $query->with('device'))
                            ->when(!is_null($filter), function ($query) use ($filter) {
                                $query->where('device_id', $filter);
                            })
                            ->where('condition', 'rusak ringan')
                            ->where('maintenance_at', null)
                            ->orderBy('created_at', 'desc')
                            ->paginate($pagination);
                break;
            case 'barjas':
                $result = DeviceMaintenance::search($keyword)
                            ->query(fn($query) => $query->with('device')->where('maintenance_at', '!=', 'NULL'))
                            ->when(!is_null($filter), function ($query) use ($filter) {
                                $query->where('device_id', $filter);
                            })
                            ->where('condition', 'rusak ringan')
                            ->orderBy('created_at', 'desc')
                            ->paginate($pagination);
                break;
        }

        return $result;
    }

    public static function getValue(array $column)
    {
        return DeviceMaintenance::where($column[0], $column[1])->first();
    }
}
