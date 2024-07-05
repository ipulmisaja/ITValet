<?php

declare(strict_types=1);

namespace App\Livewire\Device\Maintenance;

use App\Livewire\Forms\MaintenanceMemoForm;
use App\Models\DeviceMaintenance;
use App\Models\MaintenanceMemo;
use App\Traits\HasRenderOption;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Locked;
use Livewire\Component;

class MaintenanceMemoBuilder extends Component
{
    use HasRenderOption;

    public MaintenanceMemo $maintenanceMemo;
    public MaintenanceMemoForm $form;

    #[Locked]
    public string $routeName;

    #[Locked]
    public string $pageTitle;

    #[Computed]
    public function maintenanceList(): string
    {
        $result = DeviceMaintenance::with('device:id,name,serial')
                    ->where([['maintenance', 'belum perbaikan'], ['repair_request', 1], ['condition', 'rusak ringan']])
                    ->whereNull('memo_id')
                    ->get(['id', 'device_id'])
                    ->map(function ($item) {
                        return [
                            $item->id,
                            $item->device->name . ' - (SN. ' . $item->device->serial . ')'
                        ];
                    })
                    ->toArray();

        if (count($result) > 0)
            return $this->renderOption($result);
        else
            return 'empty';
    }

    public function mount(MaintenanceMemo $maintenanceMemo)
    {
        $this->routeName = Route::currentRouteName();

        if ($this->routeName === 'maintenance.edit-memo') {
            $this->pageTitle = "Edit Memo " . $maintenanceMemo->number;

            $this->maintenanceMemo = $maintenanceMemo;
        } else {
            $this->pageTitle = "Memo Baru";
        }
    }

    public function render(): View
    {
        return view('livewire.device.maintenance.maintenance-memo-builder')->title($this->pageTitle);
    }

    public function submitData(): void
    {
        $this->dispatch('validate');

        $result = $this->routeName === 'maintenance.edit-memo'
                ? $this->form->update()
                : $this->form->save();

        session()->flash('messages', $result);

        $this->redirectRoute('maintenance.memo', navigate: true);
    }
}
