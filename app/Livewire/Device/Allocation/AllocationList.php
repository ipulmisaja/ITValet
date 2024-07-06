<?php

declare(strict_types=1);

namespace App\Livewire\Device\Allocation;

use App\Livewire\Traits\HasTransaction;
use App\Models\DeviceState;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\View\View;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

class AllocationList extends Component
{
    use HasTransaction, WithPagination;

    public int $numberOfPagination = 10;
    public ?string $searchKeyword  = null;
    public bool $deleteModal = false;

    #[Locked]
    public string $allocationId;

    #[Title('Alokasi Perangkat TI')]
    public function render(): View
    {
        return view("livewire.device.allocation.allocation-list", [
            'states' => $this->fetchRequest(
                $this->searchKeyword,
                $this->numberOfPagination
            )
        ]);
    }

    public function deleteItem(string $allocationId): void
    {
        $this->allocationId = $allocationId;

        $this->deleteModal = true;
    }

    public function confirmDelete(): void
    {
        DeviceState::where('id', $this->allocationId)->delete();

        $this->deleteModal = false;
    }

    private function fetchRequest(?string $keyword, int $pagination): Paginator
    {
        return
            DeviceState::search($keyword)
            ->query(
                fn ($query) => $query
                    ->with(['user', 'device'])
                    ->join('users', 'device_states.user_id', 'users.id')
                    ->rightJoin('devices', 'device_states.device_id', 'devices.id')
                    ->select([
                        'device_states.id',
                        'device_states.user_id',
                        'device_states.device_id as device_state_id',
                        'device_states.receipt_at',
                        'device_states.bast_no',
                        'device_states.bast_file',
                        'users.name as user',
                        'users.email as email',
                        'devices.id as device_id',
                        'devices.name as namedevice',
                        'devices.serial as serial',
                        'devices.type as type',
                        'devices.bmn_number as bmn'
                    ])
            )
            ->orderBy('receipt_at', 'desc')
            ->paginate($pagination);
    }
}
