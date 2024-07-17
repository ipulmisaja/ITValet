<?php

declare(strict_types=1);

namespace App\Livewire\Settings\User;

use App\Models\Role;
use App\Models\User;
use App\Traits\HasRenderOption;
use Illuminate\View\View;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

class UserList extends Component
{
    use HasRenderOption, WithPagination;

    /** Form Property */
    public UserForm $userForm;

    /** Page Properties */
    public int $numberOfPagination = 10;
    public ?string $searchKeyword  = null;

    /** Modal Properties */
    public bool $builderModal = false;
    public bool $deleteModal = false;

    public string $userId;

    #[Locked]
    public string $userTypeOpt =
        "<option value='Perorangan'>Perorangan</option>
        <option value='Ruangan'>Ruangan</option>";

    #[Computed]
    public function userRoles()
    {
        return $this->renderOption($this->getOptionForRender(app(Role::class), ['name as id', 'name']));
    }

    #[Computed]
    public function roles()
    {
        return User::with('roles')->get();
    }

    #[Title('Daftar Pengguna')]
    public function render(): View
    {
        return view("livewire.settings.user.user-list", [
            'users' => $this->userForm->fetchInformation(
                $this->searchKeyword,
                $this->numberOfPagination
            )
        ]);
    }

    public function createUser(): void
    {
        $this->reset([
            'userForm.name',
            'userForm.email',
            'userForm.bps_id',
            'userForm.employee_id',
            'userForm.type',
            'userForm.role'
        ]);

        $this->builderModal = true;
    }

    public function storeUser(): void
    {
        $this->dispatch('validate');

        $message = $this->userForm->save();

        $this->dispatch('notification', message: $message);

        $this->builderModal = false;
    }

    public function editUser(string $userId): void
    {
        $this->userId = $userId;

        $this->userForm->fetchUser($userId);
    }

    public function updateUser(): void
    {
        $message = $this->userForm->update($this->userId);

        $this->dispatch('notification', message: $message);

        $this->reset('userId');
    }

    public function deleteUser(string $userId): void
    {
        $this->userId = $userId;

        $this->deleteModal = true;
    }

    public function confirmDelete(): void
    {
        $message = $this->userForm->delete($this->userId);

        $this->dispatch('notification', message: $message);

        $this->reset('userId');

        $this->deleteModal = false;
    }
}
