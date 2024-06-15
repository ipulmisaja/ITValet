<?php

namespace App\Livewire\Dashboard\Component\Tables;

use App\Models\DeviceMaintenance;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class LatestMaintenance extends Component
{
    public function render(): View
    {
        return view('livewire.dashboard.component.tables.latest-maintenance', [
            'data' => DeviceMaintenance::with('device')
                        ->where('maintenance', 'sedang perbaikan')
                        ->orWhere('maintenance', 'belum perbaikan')
                        ->orderBy('created_at', 'desc')
                        ->limit(5)
                        ->get()
        ]);
    }
}
