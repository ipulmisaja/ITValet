<?php

use App\Http\Controllers\SSOController;
use App\Livewire\Auth\Login;
use App\Livewire\Dashboard\Dashboard;
use App\Livewire\Device\Master\DeviceList;
use App\Livewire\Device\Allocation\AllocationList;
use App\Livewire\Device\Maintenance\MaintenanceList;
use App\Livewire\Device\Maintenance\MaintenanceMemo;
use App\Livewire\Service\RequestList;
use App\Livewire\Service\RequestRoom;
use App\Livewire\Settings\Access\RolePermission;
use App\Livewire\Settings\Access\RolePermissionBuilder;
use App\Livewire\Settings\User\UserList;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'dashboard');

Route::get('login', Login::class)->name('login');
Route::get('login/sso', [SSOController::class, 'sso'])->name('sso');
Route::get('/logout', [SSOController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::get('dashboard', Dashboard::class)->name('dashboard');

    Route::prefix('/perangkat-ti/')->group(function () {
        Route::group(['middleware' => ['permission:read-device|read-device-state|read-device-maintenance']], function() {
            Route::get('daftar-perangkat', DeviceList::class)->name('device.list');
            Route::get('alokasi-perangkat/{master}', AllocationList::class)->name('device.allocation.list');
            Route::get('pemeliharaan/{device?}', MaintenanceList::class)->name('device.maintenance.list');
            Route::get('pemeliharaan/memo/list', MaintenanceMemo::class)->name('device.maintenance.memo');
        });
    });

    Route::prefix('/layanan-ti/')->group(function () {
        Route::get('permintaan', RequestList::class)->name('request');
        Route::get('permintaan/diskusi/{serviceRequest}', RequestRoom::class)->name('request.room');
    });

    Route::group(['middleware' => ['role:admin']], function () {
        Route::prefix('/pengaturan/')->group(function () {
            Route::get('pengguna', UserList::class)->name('user');

            Route::get('hak-akses', RolePermission::class)->name('role-permission');
            Route::get('hak-akses/tambah', RolePermissionBuilder::class)->name('role-permission.create');
            Route::get('hak-akses/edit/{role}', RolePermissionBuilder::class)->name('role-permission.edit');
        });
    });
});
