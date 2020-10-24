<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Comment;


class EditComment extends Component
{

    public $comment;
    public $www;

    public function mount($comment)
    {
      $this->comment = Comment::find($comment);
    }

    public function edit_comment()
    {
      dd($this->www);

    }

    public function render()
    {
        return <<<'blade'
            <div>

                <textarea wire:model="www" id="text{{$comment->id}}" cols="150" style="resize:none; overflow:hidden; max-width:100%;" class="border border-blue-400 rounded pl-8 pt-8 pb-8 text-xl">
                  {{$comment->reply}}
                {{-- </p> --}}
                </textarea>

                <p class="float-right text-xl text-yellow-500 hover:text-yellow-900">
                  <button id="btn{{$comment->id}}" wire:click="edit_comment" type="button" name="button">
                    Confirm&nbsp;
                  </button>

                </p>
                <button class="float-right" name="button">Cancel&nbsp;</button>

                <script>
                  $('#btn{{$comment->id}}').click(function(){
                    $('#text{{$comment->id}}').toggle();
                  });
                </script>

            </div>
        blade;
    }
}
