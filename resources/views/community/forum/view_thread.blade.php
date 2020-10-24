<x-app-layout>
  <x-slot name="header">

    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Community') }}<br><br>
      @livewire('community-navbar')
    </h2>
  </x-slot>
    <div class="mt-1 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
      <div class="container pl-20">
        <button class="hover:text-blue-500" type="button" name="button">
          <a href="{{route('forum_index')}}">
            <svg class="float-left svg-icon" viewBox="0 0 20 20" style="position: absolute; top: 200px;">
  							<path fill="none" d="M8.388,10.049l4.76-4.873c0.303-0.31,0.297-0.804-0.012-1.105c-0.309-0.304-0.803-0.293-1.105,0.012L6.726,9.516c-0.303,0.31-0.296,0.805,0.012,1.105l5.433,5.307c0.152,0.148,0.35,0.223,0.547,0.223c0.203,0,0.406-0.08,0.559-0.236c0.303-0.309,0.295-0.803-0.012-1.104L8.388,10.049z"></path>
  						</svg>
              <p class="float-right text-2xl">
                &nbsp;&nbsp;
                {{__('Back')}}
              </p>
          </a>
        </button>
        <p class="text-5xl">

          {{__($thread->title)}}<br>
        </p>
        <small>Asked:&nbsp;{{ Carbon\Carbon::parse($thread->created_at)->diffForHumans()}}
          <p class="float-right pr-16">
            By: {{__($thread->user->name)}}<br>
            Last Update:{{ Carbon\Carbon::parse($thread->updated_at)->diffForHumans()}}
          </p>
        </small><br><hr>

        <p class="text-xl">
          <div class="pt-6">
            {{__($thread->post)}}
            <br><br><br>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
              Upvote
            </button>
            @if ($thread->user_id == Auth::id())
              <button class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded-full float-right" type="button" name="button">
                <a href="{{ route('edit_thread', ['thread' => $thread->id]) }}">
                  Edit Thread
                </a>
              </button>
            @endif
            <br><hr><br><br>

          </div>
        </p>
        {{-- Comments Section --}}
        @livewire('comments',[$thread->id])
    </div>

    </div>
    @livewire('footer')
</x-app-layout>
