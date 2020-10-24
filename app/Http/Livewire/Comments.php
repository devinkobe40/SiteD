<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Thread;

use Auth;

class Comments extends Component
{


    public $content;
    public $new_comment;
    public $thread;

    public function mount($thread)
    {
        $this->thread = Thread::find($thread);
    }

    public function comment(Thread $thread)
    {
        Comment::create([
          'user_id' => Auth::id(),
          'thread_id' => $this->thread->id,
          'reply' => $this->content,
        ]);
        $this->content = null;
    }

    public function delete_comment(Comment $comment)
    {
      $comment->delete();
    }

    public function edit_comment(Comment $comment, Request $request)
    {

      dd($this->new_comment);
      // dd($comment->reply);
    }

    public function render()
    {
        return view('community.comments.comments',[
          'comments' => Comment::where('thread_id', $this->thread->id)->get(),
        ]);
    }
}
