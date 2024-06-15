<?php

namespace App\Livewire\Dashboard;

use App\Livewire\Forms\UserForm;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Title;
use Livewire\Component;

class Dashboard extends Component
{
    public bool $change_password;
    public string $password;

    public function mount()
    {
        $this->change_password = !auth()->user()->change_password;
    }

    #[Title('Beranda')]
    public function render(): View
    {
        return view("livewire.dashboard.dashboard");
    }

    public function submitData()
    {
        $result = UserForm::changePassword(auth()->user(), $this->password);

        $this->change_password = !$result[1];

        $this->dispatch('notification', message: $result[0]);
    }
}
