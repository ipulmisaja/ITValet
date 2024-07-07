<?php

namespace App\Livewire\Settings\Access;

use App\Models\Permission;
use App\Models\Role;
use App\Traits\HasRenderOption;
use Illuminate\Support\Facades\Route;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Locked;
use Livewire\Component;

class RolePermissionBuilder extends Component
{
    use HasRenderOption;

    #[Locked]
    public $pageTitle;

    #[Locked]
    public $routeName;

    public Role $role;

    public $name;

    public $permissionsCheck = [];

    #[Computed]
    public function listPermissions()
    {
        return Permission::get('name');
    }

    public function mount(Role $role)
    {
        $this->routeName = Route::currentRouteName();

        if ($this->routeName === "role-permission.edit") {
            $this->pageTitle = "Edit Hak Akses";
            $this->role = $role;
            $this->name = $role->name;
            $this->permissionsCheck = $role->permissions->map(function($item) {
                                        return [ 'name'  => $item->name ];
                                    })->flatten()->toArray();
        } else {
            $this->pageTitle = "Hak Akses Baru";
        }
    }

    public function render()
    {
        return view('livewire.settings.access.role-permission-builder')->title($this->pageTitle);
    }

    public function submitData()
    {
        if ($this->routeName === 'role-permission.edit') {
            $this->role->syncPermissions($this->permissionsCheck);
        } else {
            $role = Role::create(['name' => $this->name]);
            $role->syncPermissions($this->permissionsCheck);
        }

        session()->flash('messages', 'Sukses');

        $this->redirect(route('role-permission'));
    }
}
