<div id="login-popup" tabindex="-1"
    class="bg-black/50 overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 h-full items-center justify-center flex">
    <div class="relative p-4 w-full max-w-md h-full md:h-auto">

        <div class="relative bg-white rounded-lg shadow">
            <a type="button" href="{{route('admin.room')}}"
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
                <p class="mb-4 text-sm font-normal text-gray-800"></p>

                <div class="text-center">
                    <p class="mb-3 text-2xl font-semibold leading-5 text-slate-900">
                        Add Room
                    </p>
                    <p class="mt-2 text-sm leading-4 text-slate-600">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam voluptatibus,
                    </p>
                </div>
                <br>


                <form class="w-full" method="POST" action="{{route('room.store')}}"  enctype="multipart/form-data">
                    @csrf

                    <label  class="sr-only">Room Image</label>
                    <input name="room_img" type="file" autocomplete="email" required=""
                        class="my-2 block w-full rounded-lg border border-gray-300 px-3 py-2 shadow-sm outline-none placeholder:text-gray-400 focus:ring-2 focus:ring-black focus:ring-offset-1"
                        placeholder="Room name" value="">

                    <label  class="sr-only">Room name</label>
                    <input name="room_name" type="text" autocomplete="email" required=""
                        class="block w-full rounded-lg border border-gray-300 px-3 py-2 shadow-sm outline-none placeholder:text-gray-400 focus:ring-2 focus:ring-black focus:ring-offset-1"
                        placeholder="Room name" value="">

                    <label  class="sr-only">Capacity</label>
                    <input name="capacity" type="number" autocomplete="current-password" required=""
                        class="my-2 block w-full rounded-lg border border-gray-300 px-3 py-2 shadow-sm outline-none placeholder:text-gray-400 focus:ring-2 focus:ring-black focus:ring-offset-1"
                        placeholder="Capacity" value="">

                    <label  class="sr-only">Price</label>
                    <input name="price" type="number" autocomplete="current-password" required=""
                        class="my-2 block w-full rounded-lg border border-gray-300 px-3 py-2 shadow-sm outline-none placeholder:text-gray-400 focus:ring-2 focus:ring-black focus:ring-offset-1"
                        placeholder="Price" value="">

                        <label class="sr-only">Description</label>
                        <textarea name="description" id="" cols="20" rows="5"                          class="my-2 block w-full rounded-lg border border-gray-300 px-3 py-2 shadow-sm outline-none placeholder:text-gray-400 focus:ring-2 focus:ring-black focus:ring-offset-1" placeholder="Description"
                        ></textarea>

                    <button type="submit"
                        class="inline-flex w-full items-center justify-center rounded-lg bg-yellow-800 p-2 py-3 text-sm font-medium text-white outline-none focus:ring-2 focus:ring-black focus:ring-offset-1 disabled:bg-gray-400">
                        Add Room
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
