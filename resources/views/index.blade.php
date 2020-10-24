<!-- Styles -->
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

{{-- @if (Route::has('login')) --}}
  @guest
    @livewire('frontpage')
  @endguest
  @auth
    <x-app-layout>
      <x-slot name="header"></x-slot>
    </x-app-layout>
{{-- @else --}}
@endauth
{{-- @endif --}}
