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
              {{__('Play of the Game')}}
            </p>
          </div>


          {{-- Content --}}
          <p class="text-2xl pr-8 text-justify">
            Lorem ipsum dolor sit amet, consectetur
            adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur. Excepteur sint
            occaecat cupidatat non proident,
            sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>

        </div>
      </div>
      @livewire('footer')
</x-app-layout>
