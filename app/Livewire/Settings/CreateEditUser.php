<?php

namespace App\Livewire\Settings;

use App\Livewire\Forms\UserForm;
use App\Models\Role;
use App\Models\User;
use App\Traits\HasRenderOption;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Locked;
use Livewire\Component;
use Livewire\Features\SupportRedirects\Redirector;
use Livewire\WithFileUploads;

class CreateEditUser extends Component
{
    use HasRenderOption, WithFileUploads;

    #[Locked]
    public string $pageTitle;

    public ?string $routeName;

    public UserForm $form;

    public User $user;


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
        return view("livewire.settings.create-edit-user")->title($this->pageTitle);
    }

    public function submitData()
    {
        $this->dispatch('validate');

        $result = $this->routeName === 'user.edit'
            ? $this->form->update($this->user)
            : $this->form->save();

        session()->flash('messages', $result);

        $this->redirect(route('user'));
    }
}
