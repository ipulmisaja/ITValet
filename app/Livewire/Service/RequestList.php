<?php

namespace App\Livewire\Service;

use App\Repositories\RequestRepository;
use Livewire\Attributes\Title;
use Livewire\Component;

class RequestList extends Component
{
    public int $numberOfPagination = 10;
    public ?string $searchKeyword  = null;

    #[Title('Daftar Layanan TI')]
    public function render()
    {
        return view('livewire.service.request-list', [
            'requests' => RequestRepository::read(
                $this->searchKeyword,
                $this->numberOfPagination
            )
        ]);
    }
}
