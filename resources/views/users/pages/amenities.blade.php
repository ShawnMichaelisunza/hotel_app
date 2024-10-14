@extends('layout.layout')

@section('content')
@include('layout.nav_page')

<div class="mt-40">

<div class=" mt-10 mx-5">
    <h2 class="text-2xl font-bold text-gray-800 lg:text-3xl dark:text-white">Gallery</h2>

    <p class="hidden max-w-screen-sm text-gray-500 dark:text-gray-300 md:block mt-5">
        This is a section of some simple filler text,
        also known as placeholder text. It shares some characteristics of a real written text.
    </p>
</div>
<div class="grid grid-cols-2 md:grid-cols-3 gap-5 my-[20px]">
    <div>
    <img class="h-auto max-w-full rounded-lg" src="https://pagedone.io/asset/uploads/1688025668.png" alt="Gallery image" />
    </div>
    <div>
    <img class="h-auto max-w-full rounded-lg" src="https://pagedone.io/asset/uploads/1688029344.png" alt="Gallery image" />
    </div>
    <div>
    <img class="h-auto max-w-full rounded-lg" src="https://pagedone.io/asset/uploads/1688029370.png" alt="Gallery image" />
    </div>
    <div>
    <img class="h-auto max-w-full rounded-lg" src="https://pagedone.io/asset/uploads/1688029384.png" alt="Gallery image" />
    </div>
    <div>
    <img class="h-auto max-w-full rounded-lg" src="https://pagedone.io/asset/uploads/1688029394.png" alt="Gallery image" />
    </div>
    <div>
    <img class="h-auto max-w-full rounded-lg" src="https://pagedone.io/asset/uploads/1688029408.png" alt="Gallery image" />
    </div>
    <div>
    <img class="h-auto max-w-full rounded-lg" src="https://pagedone.io/asset/uploads/1688029424.jpg" alt="Gallery image" />
    </div>
    <div>
    <img class="h-auto max-w-full rounded-lg" src="https://pagedone.io/asset/uploads/1688029434.png" alt="Gallery image" />
    </div>
    <div>
    <img class="h-auto max-w-full rounded-lg" src="https://pagedone.io/asset/uploads/1688029447.jpg" alt="Gallery image" />
    </div>
</div>
</div>

@include('layout.footer')
@endsection
