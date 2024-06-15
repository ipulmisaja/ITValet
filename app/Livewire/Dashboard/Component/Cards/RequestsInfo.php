<?php

namespace App\Livewire\Dashboard\Component\Cards;

use App\Models\ServiceRequest;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class RequestsInfo extends Component
{
    public function render(): View
    {
        return view('livewire.dashboard.component.cards.requests-info', [
            'total' => ServiceRequest::count(),
            'data'  => ServiceRequest::groupBy('status')
                        ->selectRaw('count(*) as statuscount, status')
                        ->get()
                        ->mapToGroups(function ($item, $key) {
                                return [$item->status => $item->statuscount];
                        })->all()
        ]);
    }
}
