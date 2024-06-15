<?php

namespace App\Livewire\Service;

use App\Livewire\Forms\RequestForm;
use App\Models\ServiceRequest;
use App\Models\ServiceType;
use App\Traits\HasRenderOption;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Locked;
use Livewire\Component;

class CreateEditRequest extends Component
{
    use HasRenderOption;

    #[Locked]
    public $pageTitle;

    public RequestForm $form;

    public ServiceRequest $serviceRequest;

    public string $routeName;

    #[Locked]
    public string $requestType =
        "<option value='troubleshoot'>Penanganan Masalah</option>
        <option value='maintenance'>Pemeliharaan</option>";

    #[Computed]
    public function serviceTypes()
    {
        return $this->renderOption($this->getOptionForRender(app(ServiceType::class), ['id', 'type']));
    }

    public function mount(ServiceRequest $serviceRequest)
    {
        $this->routeName = Route::currentRouteName();

        if ($this->routeName === 'request.edit') {
            $this->pageTitle          = "Edit Permintaan";
            $this->serviceRequest     = $serviceRequest;
            $this->form->request_type = $serviceRequest->request_type;
            $this->form->service_type = $serviceRequest->service_type_id;
            $this->form->summary      = $serviceRequest->summary;
            $this->form->description  = $serviceRequest->description;
        } else {
            $this->pageTitle = "Permintaan Baru";
        }
    }

    public function render(): View
    {
        return view('livewire.service.create-edit-request')->title($this->pageTitle);
    }

    public function submitData()
    {
        $this->dispatch('validate');

        $result = $this->routeName === 'request.edit'
            ? $this->form->update($this->serviceRequest)
            : $this->form->save();

        session()->flash('messages', $result);

        $this->redirect(auth()->user()->hasRole('admin') ? route('request') : route('dashboard'));
    }
}
