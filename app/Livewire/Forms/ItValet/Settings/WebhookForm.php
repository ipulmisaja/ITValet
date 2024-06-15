<?php

namespace App\Livewire\Forms\ItValet\Settings;

use App\Models\Webhook;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Rule;
use Livewire\Form;
use Telegram\Bot\Laravel\Facades\Telegram;

class WebhookForm extends Form
{
    #[Rule('required|min:4', onUpdate: false)]
    public ?string $provider;

    #[Rule('required|min:4', onUpdate: false)]
    public ?string $name;

    #[Rule('required|min:5', onUpdate: false)]
    public ?string $url;

    #[Rule('required|min:5', onUpdate: false)]
    public ?string $token;

    #[Rule('nullable', onUpdate: false)]
    public ?string $status;

    public function save(): string
    {
        $this->validate();

        try {
            DB::beginTransaction();

            $result = Webhook::create([
                'provider' => $this->provider,
                'name'     => $this->name,
                'url'      => $this->url,
                'token'    => $this->token,
                'status'   => 'down'
            ]);

            DB::commit();

            Log::info("Webhook baru telah ditambahkan. " . $result);

            $message = "Webhook telah ditambahkan.";

            $this->reset();
        } catch(Exception $error) {
            DB::rollBack();

            Log::error($error->getMessage());

            $message = "Webhook gagal ditambahkan.";
        }

        return $message;
    }

    public function update(Webhook $webhook): string
    {
        $this->validate();

        try {
            DB::beginTransaction();

            $result = $webhook->update([
                'provider' => $this->provider,
                'name'     => $this->name,
                'url'      => $this->url,
                'token'    => $this->token,
                'status'   => $this->status
            ]);

            DB::commit();

            $this->switchStatusWebhook();

            Log::info("Webhook telah disunting. " . $result);

            $message = "Webhook telah diperbaharui.";

            $this->reset();
        } catch(Exception $error) {
            DB::rollBack();

            Log::error($error->getMessage());

            $message = "Webhook gagal diperbaharui.";
        }

        return $message;
    }

    private function switchStatusWebhook(): void
    {
        try {
            $this->status === 'up'
                ? Telegram::setWebhook(['url' => $this->url . $this->token])
                : Telegram::removeWebhook();
        } catch(Exception) {
            throw new Exception;
        }
    }
}
