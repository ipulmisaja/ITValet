<?php

namespace App\Livewire\Dashboard\Component\Cards;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class UsersInfo extends Component
{
    public function render(): View
    {
        return view('livewire.dashboard.component.cards.users-info', [
            'total' => User::count(),
            'roles' => User::with('roles')->get()
        ]);
    }
}
