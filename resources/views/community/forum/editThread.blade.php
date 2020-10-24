<x-app-layout>
  <div class="">
    <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{__('Edit Thread')}}
      </h2>
    </x-slot>
<div class="mt-1 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">

  <div class="px-14">
    <form class="" action="{{route('update_thread', ['thread' =>$thread->id])}}" method="post">
      @csrf
      <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" rows="8" name="new_thread" required placeholder="New Description.." style="resize: none;">{{$thread->post}}</textarea>

      <button class="float-right" type="submit" name="button">
        <p class="text-3xl">
          Submit Edit
        </p>
      </button>
    </form>
  </div>
</div>
    {{-- {{dd($thread)}} --}}
  </div>
  @livewire('footer')
</x-app-layout>
