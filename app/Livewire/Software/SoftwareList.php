<?php

namespace App\Livewire\Software;

use App\Models\Software;
use App\Repositories\SoftwareRepository;
use Exception;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

class SoftwareList extends Component
{
    use WithPagination;

    public int $numberOfPagination = 10;

    public ?string $searchKeyword = null;

    public bool $modal = false;

    public string $id;

    #[Title('Perangkat Lunak')]
    public function render()
    {
        return view('livewire.software.software-list', [
            'softwares' => SoftwareRepository::read($this->searchKeyword, $this->numberOfPagination)
        ]);
    }

    public function deleteItem(string $id): void
    {
        $this->id = $id;

        $this->modal = true;
    }

    public function confirmDelete(): void
    {
        try {
            Software::where('id', $this->id)->first();
        } catch(Exception $error) {
            Log::error($error->getMessage());
        }

        $this->modal = false;
    }
}
