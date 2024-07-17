<?php

declare(strict_types=1);

namespace App\Livewire\Device\Maintenance;

use App\Livewire\Traits\GenerateMemo;
use App\Livewire\Traits\HasTransaction;
use App\Models\DeviceMaintenance;
use App\Traits\HasRenderOption;
use Illuminate\View\View;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

class MaintenanceMemo extends Component
{
    use GenerateMemo, HasRenderOption, HasTransaction, WithPagination;

    /** Form Property */
    public MaintenanceMemoForm $maintenanceMemoForm;

    /** Page Properties */
    public int $numberOfPagination = 10;
    public ?string $searchKeyword  = null;

    /** Modal Properties */
    public bool $builderModal = false;
    public bool $deleteModal = false;

    #[Locked]
    public string $memoId;

    #[Computed]
    public function maintenanceList(): string
    {
        $result = DeviceMaintenance::with('device')
                    ->where([['maintenance', 'belum perbaikan'], ['repair_request', 1], ['condition', 'rusak ringan']])
                    ->whereNull('memo_id')
                    ->get(['id', 'device_id'])
                    ->map(function ($item) {
                        return [
                            $item->id,
                            $item->device->master->name . ' - (SN. ' . $item->device->serial . ')'
                        ];
                    })
                    ->toArray();

        if (count($result) > 0)
            return $this->renderOption($result);
        else
            return 'empty';
    }

    #[Title('Memo Pemeliharaan')]
    public function render(): View
    {
        return view('livewire.device.maintenance.maintenance-memo', [
            'memos' => $this->maintenanceMemoForm->fetchInformation(
                $this->searchKeyword,
                $this->numberOfPagination
            )
        ]);
    }

    public function createMemo(): void
    {
        $this->builderModal = true;
    }

    public function storeMemo(): void
    {
        $message = $this->maintenanceMemoForm->save();

        $this->dispatch('notification', message: $message);

        $this->builderModal = false;
    }

    public function generateMemo(string $number)
    {
        return $this->generate($number);
    }

    public function deleteMemo(string $memoId): void
    {
        $this->memoId = $memoId;

        $this->deleteModal = true;
    }

    public function confirmDelete(): void
    {
        $message = $this->maintenanceMemoForm->delete($this->memoId);

        $this->dispatch('notification', message: $message);

        $this->deleteModal = false;
    }

}
