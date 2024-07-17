<?php

declare(strict_types=1);

namespace App\Livewire\Device\Maintenance;

use App\Livewire\Traits\HasTransaction;
use App\Models\DeviceMaintenance;
use App\Models\MaintenanceMemo;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use Livewire\Form;

class MaintenanceMemoForm extends Form
{
    use HasTransaction;

    #[Validate('required|min:5', onUpdate: false)]
    public ?string $number;

    public ?array $maintenances;

    #[Validate('nullable', onUpdate: false)]
    public ?string $sign_code;

    #[Validate('nullable', onUpdate: false)]
    public ?string $attachment;

    public function fetchInformation(?string $keyword, int $pagination): Paginator
    {
        return
            MaintenanceMemo::search($keyword)
                ->query(fn($query) => $query->with('maintenances.device'))
                ->orderBy('created_at', 'desc')
                ->paginate($pagination);
    }

    public function save(): string
    {
        $this->validate();

        $data = function() {
            $memo = MaintenanceMemo::create(['number' => $this->number, 'sign_code' => Str::random(8)]);

            for ($i = 0; $i < count($this->maintenances); $i++) {
                DeviceMaintenance::where('id', $this->maintenances[$i])->update(['memo_id' => $memo->id]);
            }
        };

        $result = $this->modelTransaction($data);

        $message = $result === 'Success'
                 ? "Memo telah dibuat."
                 : "Memo gagal dibuat.";

        return $message;
    }

    public function update(string $memoId): string
    {
        $query = function() use ($memoId) {
            MaintenanceMemo::where('id', $memoId)->update(['number' => $this->number]);
        };

        $result = $this->modelTransaction($query);

        $message = $result === 'Success'
                 ? "Memo telah diperbaharui."
                 : "Memo gagal diperbaharui.";

        return $message;
    }

    public function delete(string $memoId): string
    {
        $query = function() use ($memoId) {
            DeviceMaintenance::where('memo_id', $memoId)->update(['memo_id' => null]);

            MaintenanceMemo::where('id', $memoId)->delete();
        };

        $result = $this->modelTransaction($query);

        $message = $result === 'Success'
                 ? "Memo telah dihapus."
                 : "Memo gagal dihapus.";

        return $message;
    }
}
