<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Guides') }}
      </h2>

  </x-slot>
  {{-- Navigation Bar --}}
  @livewire('guide-content')
  @livewire('footer')

  {{-- Content --}}

</x-app-layout>
