<?php

namespace App\Livewire\Dashboard\Component\Tables;

use App\Models\ServiceRequest;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class LatestService extends Component
{
    public function render(): View
    {
        return view('livewire.dashboard.component.tables.latest-service', [
            'data' => ServiceRequest::with('user')
                        ->where('status', 'menunggu')
                        ->orWhere('status', 'dijawab')
                        ->orderBy('created_at', 'desc')
                        ->limit(5)
                        ->get()
        ]);
    }
}
