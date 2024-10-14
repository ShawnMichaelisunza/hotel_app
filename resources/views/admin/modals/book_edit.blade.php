<div id="login-popup" tabindex="-1"
    class="bg-black/50 overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 h-full items-center justify-center flex">
    <div class="relative p-4 w-full max-w-fit h-full md:h-auto">

        <div class="relative bg-white rounded-lg shadow">
            <a type="button" href=""
                class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center popup-close"><svg
                    aria-hidden="true" class="w-5 h-5" fill="#c6c7c7" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        cliprule="evenodd"></path>
                </svg>
                <span class="sr-only">Close popup</span>
            </a>

            <div class="p-5">
                <h3 class="text-2xl mb-0.5 font-medium"></h3>
                <p class="mb-3 text-sm font-normal text-gray-800"></p>

                <div class="text-center">
                    <p class="mb-2 text-2xl font-semibold leading-5 text-yellow-700 uppercase">
                        Edit Book
                    </p>
                </div>
                <br>
                {{-- create book --}}
                <form action="{{route('book.update', $book->id)}}" method="POST" class="max-w-md mx-auto">
                    @method('PUT')
                    @csrf
                    <div class="mb-4">
                        <label for="countries" class="mb-3 block font-medium text-yellow-800 dark:text-white text-xs">Choose a Branch</label>
                        <select name="branch_loc" id="countries"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Choose a Branch</option>
                            <option value="Quezon City" >Quezon City</option>
                            <option value="Pasay City">Pasay City</option>
                            <option value="Antipolo City">Antipolo City</option>
                        </select>
                        @error('branch_loc')
                        <span class="text-red-500 text-sm my-2">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="-mx-3 flex flex-wrap">
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-3">
                                <label for="countries" class="mb-3 block  font-medium text-yellow-800 dark:text-white text-xs">Room Offer</label>
                                <select name="room_offer" id="countries"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option disabled selected>Room Offer</option>

                                    {{-- Nag add ako ng ternary operator para auto select kung same sa data sa db --}}
                                    <option value="0" {{ $book->room_offer == 0 ? 'selected' : '' }}>Room only</option>
                                    <option value="300" {{ $book->room_offer == 300 ? 'selected' : '' }}>Room with Breakfast</option>
                                </select>
                                @error('room_offer')
                                <span class="text-red-500 text-sm my-2">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-3">
                                <label for="countries" class="mb-3 block text-xs font-medium text-yellow-800 ">Other Room Charges</label>
                                <select name="add_offer" id="countries"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected>Other Room Charges</option>
                                    <option value="0" {{ $book->add_offer == 0 ? 'selected' : '' }}>Extra person no breakfast</option>
                                    <option value="500" {{ $book->add_offer == 500 ? 'selected' : '' }}>Extra person with breakfast</option>
                                </select>
                                @error('add_offer')
                                <span class="text-red-500 text-sm my-2">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 pt-3">
                        <label class="mb-3 block text-xs font-medium text-yellow-800">
                            Your name
                        </label>
                        <div class=" mx-3 flex flex-wrap">
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-3">
                                    <input type="text" name="first_name" id="area" value="{{$book->first_name}}"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-1 px-3 text-sm font-medium text-[#6B7280] outline-none focus:border-yellow-800 focus:shadow-md" />
                                </div>
                            </div>
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-3">
                                    <input type="text" name="last_name" id="city" value="{{$book->last_name}}"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-1 px-3 text-sm font-medium text-[#6B7280] outline-none focus:border-yellow-800  focus:shadow-md" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="mb-3 block text-xs font-medium text-yellow-800">
                            Email Address
                        </label>
                        <input type="email" name="email" id="email" value="{{$book->email}}"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-1 px-3 text-sm font-medium text-[#6B7280] outline-none focus:border-yellow-800  focus:shadow-md" />
                    </div>
                    <div class="mb-3">
                        <label for="email" class="mb-3 block text-xs font-medium text-yellow-800">
                            Contact No.
                        </label>
                        <input type="number" name="phone_no" id="email" value="{{$book->phone_no}}"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-1 px-3 text-sm font-medium text-[#6B7280] outline-none focus:border-yellow-800  focus:shadow-md" />
                    </div>
                    <div class="-mx-3 flex flex-wrap">
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="date" class="mb-3 block text-xs font-medium text-yellow-800">
                                    Check in
                                </label>
                                <input type="date" name="check_in" id="date" value="{{$book->check_in }}"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-1 px-3 text-sm font-medium text-[#6B7280] outline-none focus:border-yellow-800  focus:shadow-md" />
                            </div>
                        </div>
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="time" class="mb-3 block text-xs font-medium text-yellow-800">
                                    Check out
                                </label>
                                <input type="date" name="check_out" id="time" value="{{$book->check_out }}"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-1 px-3 text-sm font-medium text-[#6B7280] outline-none focus:border-yellow-800 focus:shadow-md" />
                            </div>
                        </div>
                    </div>
                    <div class="mb-5">
                        <button
                            class="hover:shadow-form w-fit rounded-md bg-yellow-800 py-2 mt-3 px-4 text-center text-sm font-semibold text-white outline-none">
                            Update Booking
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
