<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Create Thread') }}<br><br>
      <button type="button" name="button">
        <a href="{{route('forum_index')}}">Back to Forum</a>
      </button>
  </x-slot>
  <div class="mt-1 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
  <form method="post" action="{{ route('submit_thread') }}">
    @csrf
    <div class="px-14">
      <p class="text-xl">
        Always Remember that any hate post, cheats, pornographic materials is prohibited and will be deleted without further notice.
      </p><br>

      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="title" placeholder="Title.." required><br>
      <br>
      <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" rows="8" name="thread" required placeholder="Description.." style="resize: none;"></textarea>

      <button class="float-right" type="submit" name="button" >
        <p class="text-3xl">Submit</p>
      </button>
    </div>
  </form>
  </div>
  @livewire('footer')
</x-app-layout>
