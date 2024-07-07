<?php

declare(strict_types=1);

namespace App\Livewire\Settings\User;

use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\View\View;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

class UserList extends Component
{
    use WithPagination;

    public int $numberOfPagination = 10;
    public ?string $searchKeyword  = null;
    public bool $deleteModal = false;
    public string $userId;

    #[Computed]
    public function roles()
    {
        return User::with('roles')->get();
    }

    #[Title('Daftar Pengguna')]
    public function render(): View
    {
        return view("livewire.settings.user.user-list", [
            'users' => $this->fetchRequest(
                $this->searchKeyword,
                $this->numberOfPagination
            )
        ]);
    }

    public function deleteItem(string $userId): void
    {
        $this->userId = $userId;

        $this->deleteModal = true;
    }

    public function confirmDelete(): void
    {
        User::where('id', $this->userId)->delete();

        $this->deleteModal = false;

        // $this->dispatch('notification', message: 'User telah dihapus.');
    }

    private function fetchRequest(?string $keyword, int $pagination): Paginator
    {
        return
            User::search($keyword)
                ->query(fn ($query) => $query->with('roles'))
                ->orderBy('name', 'asc')
                ->paginate($pagination);
    }
}
