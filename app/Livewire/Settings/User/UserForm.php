<?php

declare(strict_types=1);

namespace App\Livewire\Settings\User;

use App\Livewire\Traits\HasTransaction;
use App\Models\User;
use Illuminate\Contracts\Pagination\Paginator;
use Livewire\Attributes\Validate;
use Livewire\Form;
use ReflectionFunction;

class UserForm extends Form
{
    use HasTransaction;

    #[Validate('required|min:5', onUpdate: false)]
    public ?string $name;

    #[Validate('required', onUpdate: false)]
    public ?string $role;

    #[Validate('required|email:rfc', onUpdate: false)]
    public ?string $email;

    #[Validate('required|numeric:min:9', onUpdate: false)]
    public $bps_id;

    #[Validate('required|numeric|min:18', onUpdate: false)]
    public $employee_id;

    #[Validate('required', onUpdate: false)]
    public $type;

    public $image;

    public function fetchInformation(?string $keyword, int $pagination): Paginator
    {
        return
            User::search($keyword)
                ->query(fn ($query) => $query->with('roles'))
                ->orderBy('name', 'asc')
                ->paginate($pagination);
    }

    public function fetchUser(string $userId): void
    {
        $user = User::where('id', $userId)->get();

        $this->name        = $user[0]->name;
        $this->email       = $user[0]->email;
        $this->bps_id      = $user[0]->bps_id;
        $this->employee_id = $user[0]->employee_id;
        $this->type        = $user[0]->type;
        $this->role        = $user[0]->roles[0]->name ?? null;
    }

    public function save(): string
    {
        $this->validate();

        $query = function() {
            $user = User::create([
                'name'        => $this->name,
                'email'       => $this->email ?? null,
                'username'    => explode("@", $this->email)[0] ?? null,
                'password'    => $this->type != 'Ruangan' ? bcrypt('itvalet7600') : null,
                'bps_id'      => $this->bps_id ?? null,
                'employee_id' => $this->employee_id ?? null,
                'type'        => $this->type,
            ]);

            $user->assignRole($this->role);
        };

        $result = $this->modelTransaction($query);

        $message = $result === 'Success'
                 ? "Informasi user telah disimpan."
                 : "Informasu user gagal disimpan.";

        return $message;
    }

    public function update(string $userId): string
    {
        $this->validate();

        $query = function() use ($userId) {
            $user = User::findOrFail($userId);

            $user->update([
                'name'        => $this->name,
                'email'       => $this->email ?? null,
                'username'    => explode("@", $this->email)[0] ?? null,
                'bps_id'      => $this->bps_id ?? null,
                'employee_id' => $this->employee_id ?? null,
                'type'        => $this->type,
            ]);

            $user->syncRoles($this->role);
        };

        $result = $this->modelTransaction($query);

        $message = $result === 'Success'
                 ? "Informasi user telah diperbaharui."
                 : "Informasi user gagal diperbaharui.";

        return $message;
    }

    public function delete(string $userId): string
    {
        $query = function() use ($userId) {
            $user = User::findOrFail($userId);
            $user->delete();
        };

        $result = $this->modelTransaction($query);

        $message = $result === 'Success'
                 ? "Informasi user telah dihapus."
                 : "Informasi user gagal dihapus.";

        return $message;
    }

    public function changePassword(string $userId, string $password): string
    {
        $query = function() use ($userId, $password) {
            $user = User::findOrFail($userId);
            $user->update([
                'password' => bcrypt($password),
                'change_password' => true
            ]);
        };

        $result = $this->modelTransaction($query);

        $message = $result === 'Success'
                 ? "Kata sandi baru telah disimpan."
                 : "Kata sandi gagal disimpan.";

        return $message;
    }
}
