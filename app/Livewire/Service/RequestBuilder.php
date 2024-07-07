<?php

declare(strict_types=1);

namespace App\Livewire\Service;

use App\Livewire\Forms\RequestForm;
use App\Models\ServiceRequest;
use App\Models\Device;
use App\Models\ServiceType;
use App\Traits\HasRenderOption;
use Illuminate\View\View;
use Illuminate\Support\Facades\Route;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Locked;
use Livewire\Component;

class RequestBuilder extends Component
{
    use HasRenderOption;

    const PERANGKAT_KERAS = "038d0ee1-a909-4e20-88bf-be9ae75121af";

    #[Locked]
    public string $pageTitle;

    #[Locked]
    public string $routeName;

    public RequestForm $form;
    public ServiceRequest $serviceRequest;
    public bool $showDeviceInput = false;

    #[Computed]
    public function devices(): string
    {
        $userId = auth()->user()->id;

        // Retrieve Device Lists by User
        $arrData = Device::withWhereHas('state', function($query) use ($userId) {
                        $query->where('user_id', $userId);
                    })->get(['id', 'name'])->map(function($item) {
                        return array_values($item->toArray());
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

    public function mount(ServiceRequest $serviceRequest): void
    {
        $this->routeName = Route::currentRouteName();

        if ($this->routeName === 'request.edit') {
            $this->pageTitle          = "Edit Permintaan";
            $this->showDeviceInput    = true;
            $this->serviceRequest     = $serviceRequest;
            $this->form->service_type = $serviceRequest->service_type_id;
            $this->form->device       = $serviceRequest->device_id;
            $this->form->summary      = $serviceRequest->summary;
            $this->form->description  = $serviceRequest->description;
        } else {
            $this->pageTitle = "Permintaan Baru";
        }
    }

    public function render(): View
    {
        return view('livewire.service.request-builder')->title($this->pageTitle);
    }

    public function submitData()
    {
        $this->dispatch('validate');

        $result = $this->routeName === 'request.edit'
            ? $this->form->update($this->serviceRequest)
            : $this->form->save();

        $this->dispatch('notification', message: $result);

        return auth()->user()->hasRole('admin')
            ? $this->redirectRoute('request', navigate: true)
            : $this->redirectRoute('dashboard', navigate: true);
    }

    public function updatedFormServiceType($value): void
    {
        $this->showDeviceInput = $value === self::PERANGKAT_KERAS ? true : false;
    }
}
