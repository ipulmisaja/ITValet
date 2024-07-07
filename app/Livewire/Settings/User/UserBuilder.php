<?php

declare(strict_types=1);

namespace App\Livewire\Settings\User;

use App\Livewire\Forms\UserForm;
use App\Models\Role;
use App\Models\User;
use App\Traits\HasRenderOption;
use Illuminate\View\View;
use Illuminate\Support\Facades\Route;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Locked;
use Livewire\Component;
use Livewire\WithFileUploads;

class UserBuilder extends Component
{
    use HasRenderOption, WithFileUploads;

    public UserForm $form;
    public User $user;

    #[Locked]
    public string $pageTitle;

    #[Locked]
    public string $routeName;

    #[Locked]
    public string $userTypeOpt =
        "<option value='Perorangan'>Perorangan</option>
        <option value='Ruangan'>Ruangan</option>";

    #[Computed]
    public function roles()
    {
        return $this->renderOption($this->getOptionForRender(app(Role::class), ['name as id', 'name']));
    }

    public function mount(User $user): void
    {
        $this->routeName = Route::currentRouteName();

        if ($this->routeName === 'user.edit') {
            $this->pageTitle = "Edit User";

            $this->user              = $user;
            $this->form->name        = $user->name;
            $this->form->email       = $user->email;
            $this->form->bps_id      = $user->bps_id;
            $this->form->employee_id = $user->employee_id;
            $this->form->type        = $user->type;
            $this->form->role        = $user->roles[0]->name ?? null;
        } else {
            $this->pageTitle = "User Baru";
        }
    }

    public function render(): View
    {
        return view("livewire.settings.user.user-builder")->title($this->pageTitle);
    }

    public function submitData()
    {
        $this->dispatch('validate');

        $result = $this->routeName === 'user.edit'
            ? $this->form->update($this->user)
            : $this->form->save();

        session()->flash('messages', $result);

        $this->redirectRoute('user', navigate: true);
    }
}
