<?php

declare(strict_types=1);

namespace App\Livewire\Traits;

use App\Models\MaintenanceMemo;
use Barryvdh\DomPDF\Facade\Pdf;

trait GenerateMemo
{
    public function generate(?string $number)
    {
        if (!empty($number)) {
            $result = MaintenanceMemo::with('maintenances.device')->where('number', $number)->get();

            $data = [
                'invoice' => substr($result[0]->id, 0, 8),
                'number'  => $number,
                'devices' => $result[0]->maintenances,
                'date'    => $result[0]->updated_at->format('Y-m-d'),
                // $qrcode = base64_encode(QrCode::format('png')->size(200)->errorCorrection('H')->generate('string'));
            ];

            $pdf = Pdf::loadView('memo', ['data' => $data]);

            return response()->streamDownload(function () use ($pdf) {
                echo $pdf->stream();
            }, 'Memo.pdf');
        }
    }
}
