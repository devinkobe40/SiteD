<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
	<button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
		<a href="{{ route('create_thread') }}">
			{{__('New Topic')}}
		</a>
	</button>
<!-- component -->
<div class="container">
	<h1 class="mb-4 text-3xl">
    General
  </h1>

	<table class="text-left w-full">
		<thead class="bg-black flex text-white w-full">
			<tr class="flex w-full mb-4">
				<th class="p-4 w-1/2">Topic</th>
				<th class="p-4 w-1/4">Author</th>
				<th class="p-4 w-1/4">Replies</th>
				<th class="p-4 w-1/4">Views</th>
				{{-- <th class="p-4 w-1/4">Four</th> --}}
			</tr>
		</thead>
    {{-- flex flex-col  --}}
    <!-- Remove the nasty inline CSS fixed height on production and replace it with a CSS class — this is just for demonstration purposes! -->
		<tbody class="bg-grey-light items-center justify-between">
			<tr class="flex w-full mb-4 hover:bg-blue-500">
          <td class="p-4 w-1/2">
            <a href="#">Rules & Regulation
            </a>
          </td>
          <td class="p-4 w-1/4">
            <a href="#">Devin Kobe
            </a>
          </td>
          <td class="p-4 w-1/4">522</td>
          <td class="p-4 w-1/4">1,435,132</td>

			</tr>
      <tr class="flex w-full mb-4 hover:bg-blue-500">
            <td class="p-4 w-1/2">
              <a href="#">Banned Players
              </a>
            </td>
            <td class="p-4 w-1/4">
              <a href="#">Devin Kobe
              </a>
            </td>
            <td class="p-4 w-1/4">7,142</td>
            <td class="p-4 w-1/4">58,634</td>

  			</tr>
		</tbody>
	</table>

  {{-- Community Thread --}}
  <div class="container">
  	<h1 class="mb-4 text-3xl">
      Community Thread
    </h1>

  	<table class="text-left w-full">
  		<thead class="bg-black flex text-white w-full">
  			<tr class="flex w-full mb-4">
  				<th class="p-4 w-1/2">Topic</th>
  				<th class="p-4 w-1/4">Author</th>
  				<th class="p-4 w-1/4">Replies</th>
  				<th class="p-4 w-1/4">Views</th>
  				{{-- <th class="p-4 w-1/4">Four</th> --}}
  			</tr>
  		</thead>
      {{-- flex flex-col  --}}
      <!-- Remove the nasty inline CSS fixed height on production and replace it with a CSS class — this is just for demonstration purposes! -->
  		<tbody class="bg-grey-light items-center justify-between">
				@foreach ($thread as $thread)
  			<tr class="flex w-full mb-4 hover:bg-blue-500">

            <td class="p-4 w-1/2">
              <a href="{{route('view_thread', ['thread' => $thread->id])}}">{{$thread->title}}
              </a>
            </td>
            <td class="p-4 w-1/2">
              <a href="#">{{$thread->user->name}}
              </a>
            </td>
            {{-- <td class="p-4 w-1/4">5,845</td> --}}
            <td class="p-4 w-1/4">{{$thread->views}}</td>

  			</tr>
			@endforeach
        {{-- <tr class="flex w-full mb-4 hover:bg-blue-500">
              <td class="p-4 w-1/2">
                <a href="#">Weapon List
                </a>
              </td>
              <td class="p-4 w-1/4">
                <a href="#">Devin Kobe
                </a>
              </td>
              <td class="p-4 w-1/4">21</td>
              <td class="p-4 w-1/4">2,642</td>

    			</tr> --}}
  		</tbody>
  	</table>
</div>
</div>
