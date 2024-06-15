<?php

namespace App\Livewire\Dashboard\Component\Cards;

use App\Models\Device;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class DevicesInfo extends Component
{
    public function render(): View
    {
        return view('livewire.dashboard.component.cards.devices-info', [
            'total' => Device::count()
        ]);
    }
}
