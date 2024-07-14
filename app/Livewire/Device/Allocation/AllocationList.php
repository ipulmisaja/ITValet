<?php

declare(strict_types=1);

namespace App\Livewire\Device\Allocation;

use App\Models\Device;
use App\Models\DeviceMaster;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\View\View;
use Livewire\Attributes\Locked;
use Livewire\Component;
use Livewire\WithPagination;

class AllocationList extends Component
{
    use WithPagination;

    /** Form Property */
    public DeviceDetailForm $form;

    /** Page Properties */
    public int $numberOfPagination = 10;
    public ?string $searchKeyword  = null;

    /** Modal Property */
    public bool $deleteModal = false;

    #[Locked]
    public string $pageTitle;

    #[Locked]
    public string $device;

    #[Locked]
    public string $allocationId;

    #[Locked]
    public string $deleteId;

    public function mount(string $device): void
    {
        $this->device = $device;

        $this->pageTitle = DeviceMaster::where('id', $device)->get('name')[0]->name;
    }

    public function render(): View
    {
        return view("livewire.device.allocation.allocation-list", [
            'states' => $this->fetchRequest(
                $this->searchKeyword,
                $this->numberOfPagination
            )
        ])->title($this->pageTitle);
    }

    public function addStock(): void
    {
        $message = $this->form->addStock($this->device);

        $this->dispatch('notification', message: $message);
    }

    public function addDeviceInformation(string $allocationId): void
    {
        $this->allocationId = $allocationId;

        $property = $this->form->fetchProperty($allocationId);

        $this->form->serial = $property[0]->serial ?? null;
        $this->form->bmn    = $property[0]->bmn_number ?? null;
        $this->form->information = $property[0]->information ?? null;
    }

    public function storeDevice(): void
    {
        $this->dispatch('validate');

        $message = $this->form->save($this->allocationId);

        $this->dispatch('notification', message: $message);
    }

    public function addAllocationInformation(): void
    {}

    public function deleteDeviceInformation(string $deleteId): void
    {
        $this->deleteId = $deleteId;

        $this->deleteModal = true;
    }

    public function confirmDelete(): void
    {
        $message = $this->form->delete($this->deleteId);

        $this->dispatch('notification', message: $message);

        $this->deleteModal = false;
    }

    private function fetchRequest(?string $keyword, int $pagination): Paginator
    {
        return $this->form->fetchInformation($this->device, $keyword, $pagination);
    }
}
