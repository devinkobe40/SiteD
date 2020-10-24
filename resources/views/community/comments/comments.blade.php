<div>
    {{-- In work, do what you enjoy. --}}
    {{-- Replies --}}
      @if (count($comments) ==0)

        <p class="text-5xl">
          {{__('No response have been made yet.')}}<br>

        </p>
    @else

      @foreach ($comments as $k)
        {{-- User id --}}
          @if ($k->user->id == Auth::id())

            <p class="float-right text-3xl text-red-500 hover:text-red-900">
              <button type="button" wire:click="delete_comment({{$k}})" name="button">
                Delete
              </button>
            </p>

            <p class="float-right text-3xl text-yellow-500 hover:text-yellow-900">
              <button type="button" id="e{{$k->id}}" name="button">
                Edit&nbsp;
              </button>
            </p>

          @endif

        <div class="tooltip">

          <p class="text-3xl text-gray-500 hover:text-gray-900">

            {{$k->user->name}}:
            <span class="tooltip-text text-xl bg-blue-200 p-3 -mt-6 -ml-6 rounded">
              Joined since:&nbsp;{{ Carbon\Carbon::parse($k->user->created_at)->diffForHumans()}}
            </span>
          </p>
      </div>

        {{-- Content --}}

          <form wire:submit.prevent="edit_comment" method="post">
            @csrf
            <textarea disabled name="new" cols="150" id="edit{{$k->id}}" style="resize:none; overflow:hidden; max-width:100%;" class="border border-blue-400 rounded pl-8 pt-8 pb-8 text-xl">
              {{$k->reply}}
            {{-- </p> --}}
            </textarea>

            <section id="{{$k->id}}" style="display: none;">
              @livewire('edit-comment', [$k->id], key($k->id))
            </section><br>

          </form>

            <script>

              $('#e{{$k->id}}').click(function(){
                $('#{{$k->id}}').toggle();
                $('#edit{{$k->id}}').toggle();
                console.log($('#edit{{$k->id}}').prop('disabled'));
                if ($('#edit{{$k->id}}').prop('disabled') == true){
                  $('#edit{{$k->id}}').prop('disabled', false).focus();
                  console.log('1');
                }else {
                  console.log('0');
                  $('#edit{{$k->id}}').prop('disabled', true);
                }
              });

            </script>
      @endforeach
    @endif

      <br>
    {{-- Reply Input --}}
    <p class="text-2xl">
      {{__('Your Thoughts: ')}}
    </p>
    <form  wire:submit.prevent="comment" action="#">
        <textarea wire:model.lazy="content" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" rows="8" cols="80" required placeholder="Your Thoughts..." style="resize: none;"></textarea>

        <div class="pt-4">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full float-right">
          Post your Thoughts
        </button>
    </form>

  </div>
</div>
