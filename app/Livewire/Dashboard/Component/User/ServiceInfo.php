<?php

namespace App\Livewire\Dashboard\Component\User;

use App\Models\ServiceRequest;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class ServiceInfo extends Component
{
    public function render(): View
    {
        return view('livewire.dashboard.component.user.service-info', [
            'requests' => ServiceRequest::with('serviceType')->where('user_id', auth()->user()->id)->get()
        ]);
    }
}
