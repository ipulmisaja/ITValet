<?php

use App\Http\Controllers\SSOController;
use App\Livewire\Auth\Login;
use App\Livewire\Dashboard\Dashboard;
use App\Livewire\Device\CreateEditDevice;
use App\Livewire\Device\DeviceList;
use App\Livewire\Device\Allocation\AllocationList;
use App\Livewire\Device\Allocation\AllocationBuilder;
use App\Livewire\Device\Maintenance\MaintenanceList;
use App\Livewire\Device\Maintenance\MaintenanceCreate;
use App\Livewire\Device\Maintenance\MaintenanceEdit;
use App\Livewire\Device\Maintenance\MaintenanceMemoList;
use App\Livewire\Device\Maintenance\MaintenanceMemoBuilder;
use App\Livewire\ItValet\Settings\Webhook\CreateEditWebhook;
use App\Livewire\ItValet\Settings\Webhook\WebhookList;
use App\Livewire\Service\CreateEditRequest;
use App\Livewire\Service\RequestList;
use App\Livewire\Service\RequestRoom;
use App\Livewire\Settings\CreateEditRolePermission;
use App\Livewire\Settings\CreateEditService;
use App\Livewire\Settings\CreateEditUser;
use App\Livewire\Settings\RolePermission;
use App\Livewire\Settings\ServiceList;
use App\Livewire\Settings\UserList;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'dashboard');

Route::get('login', Login::class)->name('login');
Route::get('login/sso', [SSOController::class, 'sso'])->name('sso');
Route::get('/logout', [SSOController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::get('dashboard', Dashboard::class)->name('dashboard');

    Route::prefix('/perangkat-ti/')->group(function () {
        Route::group(['middleware' => ['permission:read-device|read-device-state|read-device-maintenance']], function() {
            Route::get('daftar-perangkat', DeviceList::class)->name('device');
            Route::get('alokasi-perangkat', AllocationList::class)->name('allocation.list');
            Route::get('pemeliharaan/{device?}', MaintenanceList::class)->name('maintenance.list');
            Route::get('pemeliharaan/memo/list', MaintenanceMemoList::class)->name('maintenance.memo');
        });

        Route::group(['middleware' => ['permission:create-device|create-device-state|create-device-maintenance']], function() {
            Route::get('daftar-perangkat/tambah', CreateEditDevice::class)->name('device.create');
            Route::get('alokasi-perangkat/tambah/{id}', AllocationBuilder::class)->name('allocation.create');
            Route::get('pemeliharaan/baru/{device}', MaintenanceCreate::class)->name('maintenance.create');
            Route::get('pemeliharaan/memo/tambah', MaintenanceMemoBuilder::class)->name('maintenance.create-memo');
        });

        Route::group(['middleware' => ['permission:update-device|update-device-state|update-device-maintenance']], function() {
            Route::get('daftar-perangkat/edit/{device}', CreateEditDevice::class)->name('device.edit');
            Route::get('alokasi-perangkat/edit/{id}', AllocationBuilder::class)->name('allocation.edit');
            Route::get('pemeliharaan/edit/{maintenanceId}', MaintenanceEdit::class)->name('maintenance.edit');
            Route::get('pemeliharaan/memo/edit/{maintenanceMemo}', MaintenanceMemoBuilder::class)->name('maintenance.edit-memo');
        });
    });

    Route::prefix('/layanan-ti/')->group(function () {
        // Admin only
        Route::get('layanan', ServiceList::class)->name('service');
        Route::get('tambah', CreateEditService::class)->name('service.create');
        Route::get('edit/{service}', CreateEditService::class)->name('service.edit');

        // All user
        Route::get('permintaan', RequestList::class)->name('request');
        Route::get('permintaan/tambah', CreateEditRequest::class)->name('request.create');
        Route::get('permintaan/edit/{serviceRequest}', CreateEditRequest::class)->name('request.edit');
        Route::get('permintaan/diskuksi/{serviceRequest}', RequestRoom::class)->name('request.room');
    });

    Route::group(['middleware' => ['role:admin']], function () {
        Route::prefix('/pengaturan/')->group(function () {
            Route::get('pengguna', UserList::class)->name('user');
            Route::get('pengguna/tambah', CreateEditUser::class)->name('user.create');
            Route::get('pengguna/edit/{user}', CreateEditUser::class)->name('user.edit');

            Route::get('hak-akses', RolePermission::class)->name('role-permission');
            Route::get('hak-akses/tambah', CreateEditRolePermission::class)->name('role-permission.create');
            Route::get('hak-akses/edit/{role}', CreateEditRolePermission::class)->name('role-permission.edit');

            Route::get('webhook', WebhookList::class)->name('webhook');
            Route::get('webhook/baru', CreateEditWebhook::class)->name('webhook.create');
            Route::get('webhook/sunting/{webhook}', CreateEditWebhook::class)->name('webhook.edit');
        });
    });

    Route::post('/telegram/webhook', function() {
        $webhook = \App\Models\Webhook::get(['url', 'token']);
        dump($webhook);
        // $response = \Telegram\Bot\Laravel\Facades\Telegram::setWebhook(['url' => 'https://example.com/<token>/webhook']);

    });
});
