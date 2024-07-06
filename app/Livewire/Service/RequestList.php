<?php

declare(strict_types=1);

namespace App\Livewire\Service;

use App\Models\ServiceRequest;
use App\Livewire\Traits\HasComment;
use App\Livewire\Traits\HasMaintenance;
use App\Livewire\Traits\HasTransaction;
use Exception;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

class RequestList extends Component
{
    use HasComment, HasMaintenance, HasTransaction, WithPagination;

    public int $numberOfPagination = 10;
    public ?string $searchKeyword  = null;
    public bool $maintenanceReqModal = false;
    public bool $deleteModal = false;

    #[Locked]
    public string $requestId;

    #[Locked]
    public string $deleteRequestId;

    #[Title('Daftar Layanan TI')]
    public function render(): View
    {
        return view('livewire.service.request-list', [
            'requests' => $this->fetchRequests(
                $this->searchKeyword,
                $this->numberOfPagination
            )
        ]);
    }

    public function addToMaintenance(string $requestId)
    {
        $this->requestId = $requestId;

        $this->maintenanceReqModal = true;
    }

    public function confirmMaintenance(bool $state): void
    {
        try {
            $serviceRequest = ServiceRequest::where('id', $this->requestId);

            DB::beginTransaction();

            $serviceRequest->update(['status' => 'dijawab', 'maintenance_request' => $state]);

            $this->newComment($this->requestId, "Permintaan anda sedang di proses.");

            if ($state === true)
                $this->newMaintenance(
                    $serviceRequest->pluck('device_id')[0],
                    $this->requestId,
                    $serviceRequest->pluck('summary')[0]
                );

            DB::commit();
        } catch(Exception $exception) {
            DB::rollBack();

            Log::error($exception->getMessage());
        }

        $this->maintenanceReqModal = false;
    }

    public function deleteItem(string $deleteRequestId): void
    {
        $this->deleteRequestId = $deleteRequestId;

        $this->deleteModal = true;
    }

    public function confirmDelete(): void
    {
        ServiceRequest::where('id', $this->deleteRequestId)->delete();

        $this->deleteModal = false;
    }

    private function fetchRequests(?string $keyword, int $pagination): Paginator
    {
        $admin = auth()->user()->hasRole('admin');

        return
            ServiceRequest::search($keyword)
                ->query(fn ($query) => $query->with(['user', 'serviceType', 'device']))
                ->when(!$admin, function ($query) {
                    $query->where('user_id', auth()->user()->id);
                })
                ->orderBy('created_at', 'desc')
                ->paginate($pagination);
    }
}
