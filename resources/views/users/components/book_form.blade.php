<div class="flex items-center justify-center p-10">
    <div id="success">
    @include('reusable.success')
    </div>
    <!-- Author: FormBold Team -->
    <div class="mx-auto w-full max-w-[550px] bg-white">
        <form action="{{route('book.store', $room->id )}}" method="POST" hx-post="{{route('book.store', $room->id )}}" hx-target="body" hx-swap="outerHTML">
            @csrf
            <div class="mb-5">
                <label for="countries" class="mb-3 block text-base font-medium text-yellow-800 dark:text-white">Choose a Branch</label>
                <select name="branch_loc" id="countries"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
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
                    <div class="mb-5">
                        <label for="countries" class="mb-3 block text-base font-medium text-yellow-800 dark:text-white">Room Offer</label>
                        <select name="room_offer" id="countries"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Room Offer</option>
                            <option value="0" >Room only</option>
                            <option value="300">Room with Breakfast</option>
                        </select>
                        @error('room_offer')
                        <span class="text-red-500 text-sm my-2">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label for="countries" class="mb-3 block text-base font-medium text-yellow-800 ">Other Room Charges</label>
                        <select name="add_offer" id="countries"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Other Room Charges</option>
                            <option value="0" >Extra person no breakfast</option>
                            <option value="500">Extra person with breakfast</option>
                        </select>
                        @error('add_offer')
                        <span class="text-red-500 text-sm my-2">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="mb-5 pt-3">
                <label class="mb-3 block text-base font-medium text-yellow-800">
                    Your name
                </label>
                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <input type="text" name="first_name" id="area" placeholder="First name"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-yellow-800 focus:shadow-md" />
                        </div>
                        @error('first_name')
                            <span class="text-red-500 text-xs">* {{ $message }}</span>
                        @enderror
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <input type="text" name="last_name" id="city" placeholder="Last name"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-yellow-800  focus:shadow-md" />
                        </div>
                        @error('last_name')
                            <span class="text-red-500 text-xs my-2">* {{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="mb-5">
                <label for="email" class="mb-3 block text-base font-medium text-yellow-800">
                    Email Address
                </label>
                <input type="email" name="email" id="email" placeholder="Enter your email"
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-yellow-800  focus:shadow-md" />
            </div>
            <div class="mb-5">
                <label for="email" class="mb-3 block text-base font-medium text-yellow-800">
                    Contact No.
                </label>
                <input type="number" name="phone_no" id="email" placeholder="Enter your contact No."
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-yellow-800  focus:shadow-md" />
            </div>
            <div class="-mx-3 flex flex-wrap">
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label for="date" class="mb-3 block text-base font-medium text-yellow-800">
                            Check in
                        </label>
                        <input type="date" name="check_in" id="date"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-yellow-800  focus:shadow-md" />
                    </div>
                </div>
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label for="time" class="mb-3 block text-base font-medium text-yellow-800">
                            Check out
                        </label>
                        <input type="date" name="check_out" id="time"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-yellow-800 focus:shadow-md" />
                    </div>
                </div>
            </div>
            <div class="mb-5">
                <button type="submit"
                    class="hover:shadow-form w-full rounded-md bg-yellow-800 py-3 mt-4 px-8 text-center text-base font-semibold text-white outline-none">
                    Book Room
                </button>
            </div>
        </form>
    </div>
</div>
