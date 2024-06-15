<?php

namespace App\Livewire\Settings;

use App\Repositories\ServiceRepository;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class ServiceList extends Component
{
    public int $numberOfPagination = 10;
    public ?string $searchKeyword  = null;
    public string $service_name;

    public function render(): View
    {
        return view('livewire.settings.service-list', [
            'services' => ServiceRepository::read(
                $this->searchKeyword,
                $this->numberOfPagination
            )
        ]);
    }

    public function submitData()
    {
        $this->dispatch('validate');

        $result = ServiceRepository::save($this);

        $this->service_name = '';

        $this->dispatchBrowserEvent('notification', ['message' => $result]);
    }
}
