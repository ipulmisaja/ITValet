<?php

declare(strict_types=1);

namespace App\Livewire\Forms;

use App\Livewire\Traits\HasTransaction;
use App\Models\DeviceMaintenance;
use App\Models\MaintenanceMemo;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use Livewire\Form;

class MaintenanceMemoForm extends Form
{
    use HasTransaction;

    #[Validate('required|min:5', onUpdate: false)]
    public ?string $number;

    public ?array $maintenances;

    #[Validate('nullable', onUpdate: false)]
    public ?string $sign_code;

    #[Validate('nullable', onUpdate: false)]
    public ?string $attachment;

    public function save(): string
    {
        try {
            DB::beginTransaction();

            $memo = MaintenanceMemo::create(['number' => $this->number, 'sign_code' => Str::random(8)]);

            for ($i = 0; $i < count($this->maintenances); $i++) {
                DeviceMaintenance::where('id', $this->maintenances[$i])->update(['memo_id' => $memo->id]);
            }

            DB::commit();

            $message = "Memo baru telah dibuat.";
        } catch(Exception $exception) {
            DB::rollBack();

            Log::error($exception->getMessage());

            $message = "Memo tidak dapat dibuat.";
        }

        return $message;
    }

    public function update(MaintenanceMemo $maintenanceMemo): string
    {
        $result = $this->modelTransaction($maintenanceMemo->update(['number' => $this->number]));

        $message = $result !== 'Failed'
                 ? "Memo No. " . $maintenanceMemo->number . " telah diperbaharui."
                 : "Memo No. " . $maintenanceMemo->number . " gagal diperbahaui.";

        return $message;
    }
}
