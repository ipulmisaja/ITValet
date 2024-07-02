<?php

declare(strict_types=1);

namespace App\Livewire\Traits;

use App\Models\ServiceComment;

trait HasComment
{
    public function newComment(string $requestId, string $comment)
    {
        ServiceComment::create([
            'user_id'    => auth()->user()->id,
            'request_id' => $requestId,
            'comment'    => $comment
        ]);
    }
}
