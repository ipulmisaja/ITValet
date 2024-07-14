<?php

declare(strict_types=1);

namespace App\Livewire\Traits;

use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

trait HasTransaction
{
    public function modelTransaction($model): string
    {
        try {
            DB::beginTransaction();

            $model;

            DB::commit();

            $message = "Success";
        } catch(Exception $exception) {
            DB::rollBack();

            Log::error($exception->getMessage());

            $message = "Failed";
        }

        return $message;
    }
}
