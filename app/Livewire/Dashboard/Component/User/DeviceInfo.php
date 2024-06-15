<?php

namespace App\Livewire\Dashboard\Component\User;

use App\Models\DeviceState;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class DeviceInfo extends Component
{
    public function render(): View
    {
        return view('livewire.dashboard.component.user.device-info', [
            'devices' => DeviceState::with(['device', 'device.image'])->where('user_id', auth()->user()->id)->get()
        ]);
    }
}
