<?php

namespace App\Livewire\ItValet\Settings\Webhook;

use App\Models\Webhook;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

class WebhookList extends Component
{
    use WithPagination;

    public int $numberOfPagination = 10;

    public ?string $searchKeyword;

    public ?string $id;

    public bool $modal = false;
    
    public function mount()
    {
        // Log::debug();   
    }

    #[Title('Webhook')]
    public function render(): View
    {
        return view('livewire.it-valet.settings.webhook.webhook-list', [
            'webhooks' => Webhook::paginate($this->numberOfPagination)
        ]);
    }

    public function deleteItem(string $id): void
    {
        $this->id = $id;

        $this->modal = true;
    }

    public function confirmDelete(): void
    {
        Webhook::where('id', $this->id)->delete();

        $this->modal = false;
    }
}
