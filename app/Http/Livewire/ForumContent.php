<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Thread;

class ForumContent extends Component
{
    public function render()
    {
        return view('community.forum.forum-content',[
          'thread' => Thread::orderBy('views', 'desc')->get(),
        ]);
    }
}
