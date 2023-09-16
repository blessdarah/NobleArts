<x-guest-layout>
<ul class="inline-flex space-x-3 bg-gray-100">
    <li class="text-sm underline text-gray-800 font-semibold hover:text-green-600"><a href="{{route('pages.welcome')}}">Home <span>-</span></a></li>
    <li class="text-sm underline text-gray-800 font-semibold hover:text-green-600"><a href="{{route('pages.projects')}}">projects <span>-</span></a></li>
    <li class="text-sm">{{$project->name}}</li>
</ul>

<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
  <div class="mx-auto sm:text-center lg:max-w-2xl">
    <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
      <div>
        <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-400">
          Published on: {{$project->created_at->format('d M, Y')}}
        </p>
      </div>
      <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
        <span class="relative inline-block">
          <svg viewBox="0 0 52 24" fill="currentColor" class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
            <defs>
              <pattern id="5dc90b42-5ed4-45a6-8e63-2d78ca9d3d95" x="0" y="0" width=".135" height=".30">
                <circle cx="1" cy="1" r=".7"></circle>
              </pattern>
            </defs>
            <rect fill="url(#5dc90b42-5ed4-45a6-8e63-2d78ca9d3d95)" width="52" height="24"></rect>
          </svg>
          <span class="relative">{{$project->name}}</span>
        </span>
      </h2>
      <p class="text-base text-gray-700 md:text-lg">{{$project->summary}}</p>
    </div>
    <div class="mb-4 transition-shadow duration-300 hover:shadow-xl lg:mb-6">
      <img class="object-cover w-full h-56 rounded shadow-lg sm:h-64 md:h-80 lg:h-96" src="{{asset('/storage/' . $project->image)}}" alt="" />
    </div>
    <div class="prose prose-zinc text-left">{!! $project->detail !!}</div>
  </div>
</div>


<h3 class="font-bold my-8 text-3xl text-gray-600">Other projects</h3>
<div class="grid gap-5 mb-8 md:grid-cols-2 lg:grid-cols-4 px-10">
    @foreach($otherProjects as $project)
        <div class="p-5 duration-300 transform bg-white border rounded shadow-sm hover:-translate-y-2">
            <img src="{{asset('/storage/' . $project->image)}}" alt="" class="mb-4 rounded-md">
          <h6 class="mb-2 font-semibold leading-5"><a href="{{$project->projectUrl()}}" class="underline text-green-600 hover:text-gray-900">{{$project->name}}</a></h6>
          <p class="text-sm text-gray-900">{{$project->description}}</p>
        </div>
    @endforeach
</div>
</x-guest-layout>
