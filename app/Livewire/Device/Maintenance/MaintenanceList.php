<?php

declare(strict_types=1);

namespace App\Livewire\Device\Maintenance;

use App\Livewire\Traits\HasTransaction;
use App\Models\Device;
use App\Models\DeviceMaintenance;
use App\Models\MaintenanceMemo;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Contracts\Pagination\Paginator;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class MaintenanceList extends Component
{
    use HasTransaction, WithPagination;

    public Device $device;
    public int $numberOfPagination = 10;
    public ?string $searchKeyword  = null;
    public bool $deleteModal = false;

    #[Locked]
    public string $maintenanceId;

    #[Computed]
    public function condition(): array
    {
        $result = DeviceMaintenance::get('condition')->groupBy('condition')->map->count();

        return $result->toArray();
    }

    public function mount(Device $device)
    {
        $this->device = $device;
    }

    #[Title('Pemeliharaan Perangkat')]
    public function render()
    {
        return view('livewire.device.maintenance.maintenance-list', [
            'maintenances' => $this->fetchRequests(
                $this->device->id,
                $this->searchKeyword,
                $this->numberOfPagination
            )
        ]);
    }

    public function generateMemo(?string $number)
    {
        if (!empty($number)) {
            $result = MaintenanceMemo::with('maintenances.device')->where('number', $number)->get();

            $data = [
                'invoice' => substr($result[0]->id, 0, 8),
                'number'  => $number,
                'devices' => $result[0]->maintenances,
                'date'    => date('Y-m-d'),
                // $qrcode = base64_encode(QrCode::format('png')->size(200)->errorCorrection('H')->generate('string'));
            ];

            $pdf = Pdf::loadView('memo', ['data' => $data]);

            return response()->streamDownload(function () use ($pdf) {
                echo $pdf->stream();
            }, 'Memo.pdf');
        }
    }

    public function deleteItem(string $maintenanceId): void
    {
        $this->maintenanceId = $maintenanceId;

        $this->deleteModal = true;
    }

    public function confirmDelete(): void
    {
        DeviceMaintenance::where('id', $this->maintenanceId)->delete();

        $this->deleteModal = false;
    }

    private function fetchRequests(?string $device, ?string $keyword, int $pagination): Paginator
    {
        $role = auth()->user()->roles[0]->name;

        return
            DeviceMaintenance::search($keyword)
                ->query(fn($query) => $query->with(['memo', 'device']))
                ->when(!is_null($device), function($query) use ($device) {
                    $query->where('device_id', $device);
                })
                ->orderBy('created_at', 'desc')
                ->paginate($pagination);
    }
}
