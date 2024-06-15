<?php

namespace App\Livewire\Service\Comments;

use App\Models\ServiceComment;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\On;
use Livewire\Component;

class CommentList extends Component
{
    public $serviceId;
    public Collection $comments;

    public function mount($serviceId)
    {
        $this->serviceId = $serviceId;
        $this->comments = ServiceComment::with('user')->where('request_id', $serviceId)->get();
    }


    public function render(): View
    {
        return view('livewire.service.comments.comment-list');
    }

    #[On('update-comment-list')]
    public function commentCount()
    {
        $this->comments = ServiceComment::with('user')->where('request_id', $this->serviceId)->get();
    }
}
