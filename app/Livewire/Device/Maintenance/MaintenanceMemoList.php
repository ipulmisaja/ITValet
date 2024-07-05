<?php

declare(strict_types=1);

namespace App\Livewire\Device\Maintenance;

use App\Models\MaintenanceMemo;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\View\View;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

class MaintenanceMemoList extends Component
{
    use WithPagination;

    public int $numberOfPagination = 10;
    public ?string $searchKeyword  = null;

    #[Title('Memo Pemeliharaan')]
    public function render(): View
    {
        return view('livewire.device.maintenance.maintenance-memo-list', [
            'memos' => $this->fetchRequest(
                $this->searchKeyword,
                $this->numberOfPagination
            )
        ]);
    }

    private function fetchRequest(?string $keyword, int $pagination): Paginator
    {
        return
            MaintenanceMemo::search($keyword)
                ->query(fn($query) => $query->with('maintenances.device'))
                ->orderBy('created_at', 'desc')
                ->paginate($pagination);
    }
}
