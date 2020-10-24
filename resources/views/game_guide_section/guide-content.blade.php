
<div class="mt-1 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">

    {{-- The whole world belongs to you --}}
    {{-- <ul> --}}
          <div class="flex">
            <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex">
              <x-jet-nav-link href="#" :active="request()->routeIs('dashboard')" id="controls">
                {{ __('Basic Controls') }}
              </x-jet-nav-link><br><br><br>
            </div>

            <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex">
              <x-jet-nav-link href="#" :active="request()->routeIs('dashboard')" id="npc">
                {{ __('NPCs') }}
              </x-jet-nav-link><br><br><br>
            </div>

            <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex">
              <x-jet-nav-link href="#" :active="request()->routeIs('dashboard')" id="tips">
                {{ __('Tips & Tricks') }}
              </x-jet-nav-link><br><br><br>
            </div>
          {{-- <button wire:click="shstring">click</button><br> --}}
        </div>

            <div class="mt-1 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">

                <div id="front">

                  <div class="pl-12">
                    {{-- Header --}}
                    <p class="text-4xl">Newbie Guides</p>

                    {{-- Body --}}

                    <div class="pl-16 px-16">
                      <p class="text-2xl text-justify">New to this game?
                      read this guide to get started.</p>
                    </div>
                  </div>
                </div>

                <div id="basic" style="display: none">
                    <div class="pl-12">
                      {{-- Header --}}
                      <p class="text-4xl">Basic Controls</p>

                      {{-- Body --}}

                      <div class="pl-16 px-16">
                        <p class="text-2xl text-justify">Lorem ipsum dolor sit amet, consectetur
                          adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                          commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                          dolore eu fugiat nulla pariatur. Excepteur
                          sint occaecat cupidatat non proident, sunt in culpa qui
                          officia deserunt mollit anim id est laborum.</p>
                      </div>
                    </div>
                  </div>
                  <div id="npcx" style="display: none">
                      <div class="pl-12">
                        {{-- Header --}}
                        <p class="text-4xl">NPC's</p>

                        {{-- Body --}}

                        <div class="pl-16 px-16">
                          <p class="text-2xl text-justify">Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore eu fugiat nulla pariatur. Excepteur
                            sint occaecat cupidatat non proident, sunt in culpa qui
                            officia deserunt mollit anim id est laborum.</p>
                        </div>
                      </div>
                    </div>

                    <div id="tipsntrick" style="display: none">
                        <div class="pl-12">
                          {{-- Header --}}
                          <p class="text-4xl">Tips n' Tricks</p>

                          {{-- Body --}}

                          <div class="pl-16 px-16">
                            <p class="text-2xl text-justify">Lorem ipsum dolor sit amet, consectetur
                              adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                              commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                              dolore eu fugiat nulla pariatur. Excepteur
                              sint occaecat cupidatat non proident, sunt in culpa qui
                              officia deserunt mollit anim id est laborum.</p>
                          </div>
                        </div>
                      </div>

              </div>
    {{-- </ul> --}}
</div>
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
<script type="text/javascript">

  $('#controls').click(function(){
    $('#basic').toggle(true);
    $('#npcx').toggle(false);
    $('#tipsntrick').toggle(false);
    $('#front').toggle(false);
  });

  $('#npc').click(function(){
    $('#npcx').toggle(true);
    $('#basic').toggle(false);
    $('#tipsntrick').toggle(false);
    $('#front').toggle(false);
  });

  $('#tips').click(function(){
    $('#tipsntrick').toggle(true);
    $('#npcx').toggle(false);
    $('#basic').toggle(false);
    $('#front').toggle(false);
  });

</script>
