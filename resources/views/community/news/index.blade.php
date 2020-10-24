<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Community') }}<br><br>
      @livewire('community-navbar')
    </h2>

  </x-slot>
  <div class="mt-1 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
    <div class="pl-20">
      <div class="text-5xl">
        <p class="font-black">
          {{__('News')}}
        </p>
      </div>

        @livewire('news-content')

  </div>
  </div>

  @livewire('footer')
</x-app-layout>
