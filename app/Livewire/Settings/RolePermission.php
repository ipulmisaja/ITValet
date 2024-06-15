<?php

namespace App\Livewire\Settings;

use App\Models\Role;
use Livewire\Attributes\Locked;
use Livewire\Component;

class RolePermission extends Component
{
    #[Locked]
    public $pageTitle = "Pengaturan Hak Akses";

    public bool $modal = false;

    public string $uuid;

    public function render()
    {
        return view('livewire.settings.role-permission', [
            'roles' => Role::with('permissions')->get(),
        ])->title($this->pageTitle);
    }

    public function deleteItem(string $uuid): void
    {
        $this->uuid = $uuid;

        $this->modal = true;
    }

    public function confirmDelete(): void
    {
        $role = Role::where('id', $this->uuid)->first();

        $permissions = $role->permissions->map(function($item) {
                            return ['name' => $item->name];
                        })->flatten()->toArray();

        $role->revokePermissionTo($permissions);

        Role::where('id', $this->uuid)->delete();

        $this->modal = false;
    }
}
