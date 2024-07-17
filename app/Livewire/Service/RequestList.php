<?php

declare(strict_types=1);

namespace App\Livewire\Service;

use App\Models\Device;
use App\Models\ServiceType;
use App\Livewire\Service\RequestForm;
use App\Traits\HasRenderOption;
use Illuminate\View\View;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

class RequestList extends Component
{
    use HasRenderOption, WithPagination;

    const PERANGKAT_KERAS = "038d0ee1-a909-4e20-88bf-be9ae75121af";

    /** Form Property */
    public RequestForm $requestForm;

    /** Page Properties */
    public int $numberOfPagination = 10;
    public ?string $searchKeyword  = null;

    /** Modal Properties */
    public bool $builderModal = false;
    public bool $maintenanceReqModal = false;
    public bool $deleteModal = false;

    /** Device Filter */
    public bool $showDeviceInput = false;

    #[Locked]
    public string $requestId;

    #[Locked]
    public string $deleteRequestId;


    #[Computed]
    public function devices(): string
    {
        $userId = auth()->user()->id;

        // Retrieve Device Lists by User
        $arrData = Device::with('master')
                    ->withWhereHas('states', function($query) use ($userId) {
                        $query->where('user_id', $userId);
                    })->get()->map(function($item) {
                        return [
                            0 => $item->id,
                            1 => $item->master->name
                        ];
                    })->toArray();

        // Delete Unneed Array Key
        array_walk($arrData, function(&$a, $k) { unset($a[2]); });

        // Add Other Choice
        array_push($arrData, [0 => '00000000', 1 => 'Lainnya']);

        return $this->renderOption($arrData);
    }

    #[Computed]
    public function serviceTypes(): string
    {
        return $this->renderOption($this->getOptionForRender(app(ServiceType::class), ['id', 'type']));
    }

    #[Title('Daftar Layanan TI')]
    public function render(): View
    {
        return view('livewire.service.request-list', [
            'requests' => $this->requestForm->fetchInformation(
                $this->searchKeyword,
                $this->numberOfPagination
            )
        ]);
    }

    public function updatedRequestFormServiceType($value): void
    {
        $this->showDeviceInput = $value === self::PERANGKAT_KERAS ? true : false;
    }

    public function createRequest(): void
    {
        $this->reset([
            'requestForm.service_type',
            'requestForm.device',
            'requestForm.summary',
            'requestForm.description'
        ]);

        $this->builderModal = true;
    }

    public function storeRequest(): void
    {
        $this->dispatch('validate');

        $message = $this->requestForm->save();

        $this->dispatch('notification', message: $message);

        $this->builderModal = false;
    }

    public function editRequest(string $requestId): void
    {
        $this->requestId = $requestId;

        $this->requestForm->fetchRequest($requestId);
    }

    public function updateRequest(): void
    {
        $this->dispatch('validate');

        $message = $this->requestForm->update($this->requestId);

        $this->dispatch('notification', message: $message);

        $this->reset('requestId');
    }

    public function addToMaintenance(string $requestId): void
    {
        $this->reset('requestId');

        $this->requestId = $requestId;

        $this->maintenanceReqModal = true;
    }

    public function confirmMaintenance(bool $state): void
    {
        $message = $this->requestForm->confirmMaintenance($state, $this->requestId);

        $this->dispatch('notification', message: $message);

        $this->maintenanceReqModal = false;
    }

    public function deleteRequest(string $deleteRequestId): void
    {
        $this->deleteRequestId = $deleteRequestId;

        $this->deleteModal = true;
    }

    public function confirmDelete(): void
    {
        $message = $this->requestForm->delete($this->deleteRequestId);

        $this->dispatch('notification', message: $message);

        $this->deleteModal = false;

        $this->reset('deleteRequestId');
    }
}
