<?php

declare(strict_types=1);

namespace App\Livewire\Device\Allocation;

use App\Models\DeviceMaster;
use App\Models\User;
use App\Traits\HasRenderOption;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\View\View;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Locked;
use Livewire\Component;
use Livewire\WithPagination;

class AllocationList extends Component
{
    use HasRenderOption, WithPagination;

    /** Form Property */
    public DeviceDetailForm $deviceDetailForm;
    public DeviceAllocationForm $deviceAllocationForm;

    /** Page Properties */
    public int $numberOfPagination = 10;
    public ?string $searchKeyword  = null;

    /** Modal Property */
    public bool $deleteModal = false;

    #[Locked]
    public string $pageTitle;

    #[Locked]
    public string $master;

    #[Locked]
    public string $deviceId;

    #[Locked]
    public string $allocationId;

    #[Locked]
    public string $deleteId;

    #[Computed]
    public function users(): string
    {
        return $this->renderOption($this->getOptionForRender(app(User::class), ['id', 'name']));
    }

    public function mount(string $master): void
    {
        $this->master = $master;

        $this->pageTitle = DeviceMaster::where('id', $master)->get('name')[0]->name;
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
        $message = $this->deviceDetailForm->addStock($this->master);

        $this->dispatch('notification', message: $message);
    }

    public function addDeviceInformation(string $deviceId): void
    {
        $this->deviceId = $deviceId;

        $property = $this->deviceDetailForm->fetchProperty($deviceId);

        $this->deviceDetailForm->serial = $property[0]->serial ?? null;
        $this->deviceDetailForm->bmn = $property[0]->bmn_number ?? null;
        $this->deviceDetailForm->information = $property[0]->information ?? null;
    }

    public function storeDevice(): void
    {
        $this->dispatch('validate');

        $message = $this->deviceDetailForm->save($this->deviceId);

        $this->dispatch('notification', message: $message);
    }

    public function addAllocationInformation(string $allocationId): void
    {
        $this->allocationId = $allocationId;

        $property = $this->deviceAllocationForm->fetchProperty($allocationId);

        $this->deviceAllocationForm->user = $property[0]->user_id ?? null;
        $this->deviceAllocationForm->bast_date = $property[0]->receipt_at ?? null;
        $this->deviceAllocationForm->bast_number = $property[0]->bast_no ?? null;
    }

    public function storeAllocation(): void
    {
        $this->dispatch('validate');

        $this->deviceAllocationForm->device = $this->allocationId;
        $this->deviceAllocationForm->device_master = $this->master;

        $message = $this->deviceAllocationForm->save();

        $this->dispatch('notification', message: $message);
    }

    public function deleteAllocation(): void
    {
        $message = $this->deviceAllocationForm->deleteAllocation($this->allocationId);

        $this->dispatch('notification', message: $message);
    }

    public function deleteDeviceInformation(string $deleteId): void
    {
        $this->deleteId = $deleteId;

        $this->deleteModal = true;
    }

    public function confirmDelete(): void
    {
        $message = $this->deviceDetailForm->delete($this->deleteId);

        $this->dispatch('notification', message: $message);

        $this->deleteModal = false;
    }

    private function fetchRequest(?string $keyword, int $pagination): Paginator
    {
        return $this->deviceDetailForm->fetchInformation($this->master, $keyword, $pagination);
    }
}
