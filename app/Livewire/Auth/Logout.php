<?php

namespace App\Livewire\Auth;

use Illuminate\View\View;
use Livewire\Component;

class Logout extends Component
{
    public function logout()
    {
        auth()->guard('web')->logout();

        session()->invalidate();
        session()->regenerateToken();

        return $this->redirectRoute('login', navigate: true);
    }

    public function render(): View
    {
        return view("livewire.auth.logout");
    }
}
