<?php

declare(strict_types=1);

namespace App\Livewire\Device\Maintenance;

use App\Models\MaintenanceMemo;
use Barryvdh\DomPDF\Facade\Pdf;
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

    public function generateMemo(string $id)
    {
        $result = MaintenanceMemo::with('maintenances.device')->where("id", $id)->get();

            $data = [
                'invoice' => substr($id, 0, 8),
                'number'  => $result[0]->number,
                'devices' => $result[0]->maintenances,
                'date'    => date('Y-m-d'),
                // $qrcode = base64_encode(QrCode::format('png')->size(200)->errorCorrection('H')->generate('string'));
            ];

            $pdf = Pdf::loadView('memo', ['data' => $data]);

            return response()->streamDownload(function () use ($pdf) {
                echo $pdf->stream();
            }, 'Memo.pdf');
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
