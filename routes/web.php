<?php

use App\Http\Controllers\SSOController;
use App\Livewire\Auth\Login;
use App\Livewire\Dashboard\Dashboard;
use App\Livewire\Device\Master\DeviceList;
use App\Livewire\Device\Allocation\AllocationList;
use App\Livewire\Device\Maintenance\MaintenanceList;
use App\Livewire\Device\Maintenance\MaintenanceCreate;
use App\Livewire\Device\Maintenance\MaintenanceEdit;
use App\Livewire\Device\Maintenance\MaintenanceMemoList;
use App\Livewire\Device\Maintenance\MaintenanceMemoBuilder;
use App\Livewire\Service\RequestList;
use App\Livewire\Service\RequestBuilder;
use App\Livewire\Service\RequestRoom;
use App\Livewire\Settings\Access\RolePermission;
use App\Livewire\Settings\Access\RolePermissionBuilder;
use App\Livewire\Settings\User\UserList;
use App\Livewire\Settings\User\UserBuilder;
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
            Route::get('pemeliharaan/memo/list', MaintenanceMemoList::class)->name('device.maintenance.memo');
        });

        Route::group(['middleware' => ['permission:create-device|create-device-state|create-device-maintenance']], function() {
            Route::get('pemeliharaan/baru/{deviceId}', MaintenanceCreate::class)->name('device.maintenance.create');
            Route::get('pemeliharaan/memo/tambah', MaintenanceMemoBuilder::class)->name('device.maintenance.create-memo');
        });

        Route::group(['middleware' => ['permission:update-device|update-device-state|update-device-maintenance']], function() {
            Route::get('pemeliharaan/edit/{maintenanceId}', MaintenanceEdit::class)->name('device.maintenance.edit');
            Route::get('pemeliharaan/memo/edit/{maintenanceMemo}', MaintenanceMemoBuilder::class)->name('device.maintenance.edit-memo');
        });
    });

    Route::prefix('/layanan-ti/')->group(function () {
        Route::get('permintaan', RequestList::class)->name('request');
        Route::get('permintaan/tambah', RequestBuilder::class)->name('request.create');
        Route::get('permintaan/edit/{serviceRequest}', RequestBuilder::class)->name('request.edit');
        Route::get('permintaan/diskuksi/{serviceRequest}', RequestRoom::class)->name('request.room');
    });

    Route::group(['middleware' => ['role:admin']], function () {
        Route::prefix('/pengaturan/')->group(function () {
            Route::get('pengguna', UserList::class)->name('user');
            Route::get('pengguna/tambah', UserBuilder::class)->name('user.create');
            Route::get('pengguna/edit/{user}', UserBuilder::class)->name('user.edit');

            Route::get('hak-akses', RolePermission::class)->name('role-permission');
            Route::get('hak-akses/tambah', RolePermissionBuilder::class)->name('role-permission.create');
            Route::get('hak-akses/edit/{role}', RolePermissionBuilder::class)->name('role-permission.edit');

            // Route::get('webhook', WebhookList::class)->name('webhook');
            // Route::get('webhook/baru', CreateEditWebhook::class)->name('webhook.create');
            // Route::get('webhook/sunting/{webhook}', CreateEditWebhook::class)->name('webhook.edit');
        });
    });

    // Route::post('/telegram/webhook', function() {
    //     $webhook = \App\Models\Webhook::get(['url', 'token']);
    //     dump($webhook);
    //     // $response = \Telegram\Bot\Laravel\Facades\Telegram::setWebhook(['url' => 'https://example.com/<token>/webhook']);

    // });
});
