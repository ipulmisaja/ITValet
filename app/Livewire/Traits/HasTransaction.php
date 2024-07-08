<?php

declare(strict_types=1);

namespace App\Livewire\Traits;

use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

trait HasTransaction
{
    public function modelTransaction($model)
    {
        try {
            DB::beginTransaction();

            $message = $model;

            DB::commit();

        } catch(Exception $exception) {
            DB::rollBack();

            Log::error($exception->getMessage());

            $message = "Failed";
        }

        return $message;
    }
}
