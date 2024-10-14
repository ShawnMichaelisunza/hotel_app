<div class="flex flex-col">
    <div class=" overflow-x-auto">
        <div class="min-w-full inline-block align-middle">
            {{-- title  --}}
            <h1 class="mb-5 text-4xl font-semibold text-yellow-700">{{ $room->room_name }}</h1>
            {{-- search --}}
            <div class="relative text-gray-500 focus-within:text-gray-900 mb-2">
                <div class="absolute inset-y-0 left-1 flex items-center pl-3 pointer-events-none ">
                    <i class="fa-solid fa-magnifying-glass h-5 w-5"></i>
                </div>
                <input type="text" id="default-search" name="search" hx-get="{{ route('admin.booking', $room->id) }}"
                    hx-trigger="input changed delay:500ms, search" hx-target="body" hx-indicator=".htmx-indicator"
                    hx-include="[first_name='search']"
                    class="block w-80 h-11 pr-5 pl-12 py-2.5 text-base font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-full placeholder-gray-400 focus:outline-none"
                    placeholder="Search name">
            </div>
            {{-- add book --}}
            <div class="flex justify-end mb-3 mr-12 gap-4">
                <div>
                    <a class="py-1.5 px-3.5 bg-blue-300 rounded text-gray-600 text-sm group transition-all duration-500  flex item-center font-semibold"
                        href="">Approved Guests</a>
                </div>
                <div>
                    <a class="py-1.5 px-3.5 bg-red-300 rounded text-gray-600 text-sm group transition-all duration-500  flex item-center font-semibold"
                        href="">Rejected Guests</a>
                </div>
                <div>
                    <a href="{{ route('book.create', $room->id) }}" hx-get="{{ route('book.create', $room->id) }}"
                        hx-swap="outerHTML"
                        class="py-1.5 px-3.5 bg-green-300 rounded text-gray-600 text-sm group transition-all duration-500  flex item-center font-semibold">
                        Add Guest
                    </a>
                </div>
            </div>
            {{-- books table --}}
            <div class="overflow-hidden ">
                <table class=" min-w-full rounded-xl">
                    <thead>
                        <tr class="bg-gray-50">
                            <th scope="col"
                                class="p-5 text-left text-sm leading-6 font-semibold text-yellow-800 capitalize rounded-t-xl">
                                ID </th>
                            <th scope="col"
                                class="p-4 text-left text-sm leading-6 font-semibold text-yellow-800 capitalize"> First
                                name </th>
                            <th scope="col"
                                class="p-4 text-left text-sm leading-6 font-semibold text-yellow-800 capitalize"> Last
                                name </th>
                            <th scope="col"
                                class="p-4 text-left text-sm leading-6 font-semibold text-yellow-800 capitalize"> Email
                            </th>
                            <th scope="col"
                                class="p-4 text-left text-sm leading-6 font-semibold text-yellow-800 capitalize">
                                Check in </th>
                            <th scope="col"
                                class="p-4 text-left text-sm leading-6 font-semibold text-yellow-800 capitalize">
                                Check out </th>
                            <th scope="col"
                                class="p-4 text-left text-sm leading-6 font-semibold text-yellow-800 capitalize"> Status
                            </th>
                            <th scope="col"
                                class="p-4 text-left text-sm leading-6 font-semibold text-yellow-800 capitalize rounded-t-xl">
                                Actions </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-300 ">
                        @foreach ($books as $book)
                            <tr class="bg-white transition-all duration-500 hover:bg-gray-50">
                                <td class="p-4 whitespace-nowrap text-xs leading-6 font-medium text-gray-600 ">
                                    {{ $book->id }}</td>
                                <td class="p-4 whitespace-nowrap text-xs leading-6 font-medium text-gray-600 uppercase">
                                    {{ $book->first_name }}
                                </td>
                                <td class="p-4 whitespace-nowrap text-xs leading-6 font-medium text-gray-600 uppercase">
                                    {{ $book->last_name }}</td>
                                <td class="p-4 whitespace-nowrap text-xs leading-6 font-medium text-gray-600">
                                    {{ $book->email }}
                                </td>
                                <td class="p-4 whitespace-nowrap text-xs leading-6 font-medium text-gray-600">
                                    {{ Carbon\Carbon::parse($book->check_in)->format('M d, Y') }}
                                </td>
                                <td class="p-4 whitespace-nowrap text-xs leading-6 font-medium text-gray-600">
                                    {{ Carbon\Carbon::parse($book->check_out)->format('M d, Y') }}
                                </td>
                                <td class="p-4 whitespace-nowrap text-xs leading-6 font-medium">
                                    @if ($book->status == 'PENDING')
                                        <span class="text-blue-500"> {{ $book->status }}</span>
                                    @elseif ($book->status == 'APPROVE')
                                        <span class="text-green-500"> {{ $book->status }}</span>
                                    @else
                                        <span class="text-red-500"> {{ $book->status }}</span>
                                    @endif
                                </td>
                                {{-- buttons --}}
                                <td class=" p-4 ">

                                    <div class="flex items-center gap-1">
                                        {{-- view button --}}
                                        <a href="{{ route('admin.viewBook', $book->id) }}"
                                            hx-get="{{ route('admin.viewBook', $book->id) }}" hx-swap="outerHTML"
                                            class="p-2  rounded-full  group transition-all duration-500  flex item-center">
                                            <i class="fa-solid fa-street-view text-yellow-600"></i>
                                        </a>
                                        {{-- edit book --}}
                                        <a href="{{ route('book.edit', $book->id) }}"
                                            hx-get="{{ route('book.edit', $book->id) }}" hx-swap="outerHTML"
                                            class="p-2  rounded-full  group transition-all duration-500  flex item-center">
                                            <i class="fa-solid fa-pen-to-square text-blue-600"></i>
                                        </a>
                                        {{-- approve button --}}
                                        <form action="{{ route('book.approve', $book->id) }}" method="post">
                                            @csrf
                                            <button
                                                class="p-2  rounded-full  group transition-all duration-500  flex item-center">
                                                <i class="fa-solid fa-check text-green-600"></i>
                                            </button>
                                        </form>
                                        {{-- reject button --}}
                                        <form action="{{ route('book.reject', $book->id) }}" method="post">
                                            @csrf
                                            <button
                                                class="p-2  rounded-full  group transition-all duration-500  flex item-center">
                                                <i class="fa-solid fa-xmark text-red-600"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
