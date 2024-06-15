<?php

namespace App\Livewire\Forms;

use App\Models\Software;

use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Rule;
use Livewire\Form;

class SoftwareForm extends Form
{
    #[Rule('required|min:5', onUpdate: false)]
    public $name;

    #[Rule('required|min:5', onUpdate: false)]
    public $category;

    #[Rule('required', onUpdate: false)]
    public $url;

    #[Rule('nullable|min:5', onUpdate: false)]
    public $note;

    public function save(): string
    {
        $this->validate();

        try {
            DB::beginTransaction();

            Software::create([
                'name'     => $this->name,
                'category' => $this->category,
                'url'      => $this->url,
                'note'     => $this->note ?? null
            ]);

            DB::commit();

            $message = "Informasi perangkat lunak telaah ditambahkan.";

        } catch(Exception $error) {
            DB::rollBack();

            Log::error($error->getMessage());

            $message = "Informasi perangkat lunak gagal ditambahkan.";
        }

        return $message;
    }

    public function update(Software $software): String
    {
        $this->validate();

        try {
            DB::beginTransaction();

            $software->update([
                'name'     => $this->name,
                'category' => $this->category,
                'url'      => $this->url,
                'note'     => $this->note ?? null
            ]);

            DB::commit();

            $message = "Informasi perangkat lunak telah diperbaharui.";
        } catch(Exception $error) {
            DB::rollBack();

            Log::error($error->getMessage());

            $message = "Informasi perangkat lunak gagal diperbaharui.";
        }

        return $message;
    }
}
