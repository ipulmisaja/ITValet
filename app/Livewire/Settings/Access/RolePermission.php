<?php

declare(strict_types=1);

namespace App\Livewire\Settings\Access;

use App\Models\Role;
use Illuminate\View\View;
use Livewire\Attributes\Title;
use Livewire\Component;

class RolePermission extends Component
{
    public bool $deleteModal = false;

    public string $uuid;

    #[Title('Hak Akses')]
    public function render(): View
    {
        return view('livewire.settings.access.role-permission', [
            'roles' => Role::with('permissions')->get(),
        ]);
    }

    public function deleteItem(string $uuid): void
    {
        $this->uuid = $uuid;

        $this->deleteModal = true;
    }

    public function confirmDelete(): void
    {
        $role = Role::where('id', $this->uuid)->first();

        $permissions = $role->permissions->map(function($item) {
                            return ['name' => $item->name];
                        })->flatten()->toArray();

        $role->revokePermissionTo($permissions);

        Role::where('id', $this->uuid)->delete();

        $this->deleteModal = false;
    }
}
