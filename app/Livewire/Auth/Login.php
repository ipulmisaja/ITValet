<?php

namespace App\Livewire\Auth;

use App\Livewire\Forms\AuthenticationForm;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Title;
use Livewire\Component;

class Login extends Component
{
    public AuthenticationForm $form;

    #[Title('Login')]
    public function render(): View
    {
        return view("livewire.auth.login");
    }

    public function login()
    {
        $this->dispatch('validate');

        if (Auth::attempt($this->form->validate())) $this->redirectIntended('dashboard');

        throw ValidationException::withMessages([
            'form.username' => 'Username tidak sesuai database kami.',
            'form.password' => 'Password tidak sesuai database kami.'
        ]);
    }
}
