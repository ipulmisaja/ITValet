<?php

namespace App\Livewire\Settings;

use App\Models\ServiceType;
use App\Repositories\ServiceRepository;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;
use Livewire\Attributes\Locked;
use Livewire\Component;

class CreateEditService extends Component
{
    #[Locked]
    public string $pageTitle;

    public ?string $routeName;

    public ServiceType $service;
    public string $service_name;

    public function mount(ServiceType $service)
    {
        $this->routeName = Route::currentRouteName();

        if ($this->routeName === 'service.edit') {
            $this->service      = $service;
            $this->service_name = $service->type;
        }
    }

    public function render(): View
    {
        return view('livewire.settings.create-edit-service')
            ->title($this->routeName === 'service.edit' ? 'Edit Tipe Layanan' : 'Tipe Layanan Baru');
    }

    public function submitData()
    {
        $this->dispatch('validate');

        $result = $this->routeName === 'edit-service'
            ? ServiceRepository::update($this)
            : ServiceRepository::save($this);

        session()->flash('messages', $result);

        $this->redirect(route('service-list'));
    }
}
