<div class="bg-gray-100 pb-20">
    <div class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16 bg-gray-100">

        <div class="border-b mb-5 flex justify-between text-sm">
            <div class="text-yellow-700 flex items-center pb-2 pr-2 border-b-2 border-yellow-700 uppercase">
                <a href="#" class="font-semibold inline-block">Rooms</a>
            </div>
            <a href="{{route('room.create')}}" hx-get="{{route('room.create')}}" hx-swap="outerHTML" class="hover:text-yellow-600 font-semibold">Add Room</a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">

        @foreach ($rooms as $room)

            <!-- CARD 1 -->
            <div class="rounded overflow-hidden shadow-lg flex flex-col">
                <a href="#"></a>
                <div class="relative"><a href="#">
                        <img class="w-full"
                            src="{{asset($room->room_img)}}"
                            alt="Sunset in the mountains">
                        <div
                            class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                        </div>
                    </a>
                    <a href="#!">
                        <div
                            class="text-xs absolute top-0 right-0 bg-yellow-700 px-4 py-2 text-white mt-3 mr-3 hover:bg-white hover:text-yellow-700 transition duration-500 ease-in-out">
                            View Guests
                        </div>
                    </a>
                </div>
                <div class="bg-white">
                <div class="px-6 py-4 mb-auto">
                    <a href="#"
                        class="font-medium text-lg hover:text-indigo-600 transition duration-500 ease-in-out inline-block mb-2 uppercase">
                        {{$room->room_name}}</a>
                    <p class="text-gray-500 text-sm">
                       {{$room->description}}
                    </p>
                </div>
                <div class="px-6 py-3 flex flex-row items-center justify-between bg-gray-100">
                    <span href="#" class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
                        <i class="fa-solid fa-tag"></i>
                        <span class="ml-1">₱ {{$room->price}}</span>
                    </span>


                    {{-- <a href="{{route('admin.booking', $room->id)}}" class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center hover:text-yellow-700"> --}}

                    {{-- lahat ng ilalagay mo sa encrypt() method ma encrypt kahit hindi id --}}
                    <a href="{{route('admin.booking', encrypt($room->id))}}" class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center hover:text-yellow-700">
                        <i class="fa-solid fa-book"></i>
                        <span class="ml-1 uppercase font-semibold">View Guests</span>
                    </a>
                </div>
                </div>
            </div>

        @endforeach
        </div>

    </div>
    </div>
