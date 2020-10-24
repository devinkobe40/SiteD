<div>
  <div class="flex">
    <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex">
      <x-jet-nav-link href="{{ route('community') }}" :active="request()->routeIs('community')">
        {{ __('Home') }}
      </x-jet-nav-link>
    </div>

    <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex">
      <x-jet-nav-link href="{{ route('news_index') }}" :active="request()->routeIs('news_index')">
        {{ __('News') }}
      </x-jet-nav-link>
    </div>

    <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex">
      <x-jet-nav-link href="{{route('forum_index') }}" :active="request()->routeIs('forum_index')">
        {{ __('Forum') }}
      </x-jet-nav-link>
    </div>

    <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex">
      <x-jet-nav-link href="#" :active="request()->routeIs('dashboard')">
        {{ __('Marketplace') }}
      </x-jet-nav-link>
    </div>
  {{-- <button wire:click="shstring">click</button><br> --}}
</div>
</div>
