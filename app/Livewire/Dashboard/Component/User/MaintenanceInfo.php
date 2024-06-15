<?php

namespace App\Livewire\Dashboard\Component\User;

use App\Models\DeviceMaintenance;
use App\Models\DeviceState;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class MaintenanceInfo extends Component
{
    public function render(): View
    {
        return view('livewire.dashboard.component.user.maintenance-info', [
            'maintenances' => DeviceState::with('device')->where('user_id', auth()->user()->id)->first(),
        ]);
    }
}
