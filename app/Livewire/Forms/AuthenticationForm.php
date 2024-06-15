<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Form;

class AuthenticationForm extends Form
{
    #[Rule('required|min:4', onUpdate: false)]
    public $username;

    #[Rule('required|min:6', onUpdate: false)]
    public $password;

}
