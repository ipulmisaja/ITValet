<?php

namespace App\Livewire\Settings;

use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

class UserList extends Component
{
    use WithPagination;

    public int $numberOfPagination = 10;
    public ?string $searchKeyword;

    #[Computed]
    public function roles()
    {
        return app(User::class)::with('roles')->get();
    }

    #[Title('Daftar Pengguna')]
    public function render(): View
    {
        return view("livewire.settings.user-list", [
            'users' => UserRepository::read(
                $this->searchKeyword,
                $this->numberOfPagination
            )
        ]);
    }
}
