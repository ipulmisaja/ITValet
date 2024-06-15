<?php

namespace App\Livewire\ItValet\Settings\Webhook;

use App\Livewire\Forms\ItValet\Settings\WebhookForm;
use App\Models\Webhook;
use App\Traits\HasRenderOption;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Locked;
use Livewire\Component;

class CreateEditWebhook extends Component
{
    use HasRenderOption;

    #[Locked]
    public string $pageTitle;

    public ?string $routeName;

    public Webhook $webhook;

    public WebhookForm $form;

    #[Computed]
    public function providers()
    {
        $result = Webhook::get('provider')->count();

        $webhook = $result > 0
            ? $this->renderOption($this->getOptionForRender(app(Webhook::class), ['provider as id', 'provider']))
            : null;

        return $webhook;
    }

    public function mount(Webhook $webhook)
    {
        $this->routeName = Route::currentRouteName();

        if ($this->routeName === 'webhook.edit') {
            $this->pageTitle = "Sunting Webhook";

            $this->webhook        = $webhook;
            $this->form->provider = $webhook->provider;
            $this->form->name     = $webhook->name;
            $this->form->url      = $webhook->url;
            $this->form->token    = $webhook->token;
            $this->form->status   = $webhook->status;
        } else {
            $this->pageTitle = "Webhook Baru";
        }
    }

    public function render(): View
    {
        return view('livewire.it-valet.settings.webhook.create-edit-webhook')->title($this->pageTitle);
    }

    public function submitData()
    {
        $this->dispatch('validate');

        $result = $this->routeName === 'webhook.edit'
            ? $this->form->update($this->webhook)
            : $this->form->save();

        session()->flash('messages', $result);

        $this->redirect(route('webhook'));
    }
}
