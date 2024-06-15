<?php

namespace App\Livewire\Dashboard\Component\Cards;

use App\Models\DeviceMaintenance;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class MaintenancesInfo extends Component
{
    public function render(): View
    {
        return view('livewire.dashboard.component.cards.maintenances-info', [
            'total' => DeviceMaintenance::count(),
            'data'  => DeviceMaintenance::groupBy('maintenance')
                            ->selectRaw('count(*) as maintcount, maintenance')
                            ->get()
                            ->mapToGroups(function ($item, $key) {
                                return [explode(" ", $item->maintenance)[0] => $item->maintcount];
                            })->all()
        ]);
    }
}
