
        <!-- aside -->
        <aside class="flex w-72 flex-col space-y-2 border-r-2 border-gray-200 bg-white p-2" style="height: 90.5vh"
            x-show="asideOpen">

            <a href="" class="flex items-center space-x-1 rounded-md px-2 py-3 hover:bg-gray-100 hover:text-blue-600">
                <span class="text-2xl"><i class="bx bxs-dashboard"></i></span>
                <span>Dashboard</span>
            </a>

            <a href="{{route('admin.room')}}" class="flex items-center space-x-1 rounded-md px-2 py-3 hover:bg-gray-100 hover:text-blue-600">
                <span class="text-2xl"><i class="bx bx-hotel"></i></span>
                <span>Rooms</span>
            </a>

            <a href="" class="flex items-center space-x-1 rounded-md px-2 py-3 hover:bg-gray-100 hover:text-blue-600">
                <span class="text-2xl"><i class="bx bx-book-open"></i></span>
                <span>About</span>
            </a>


            <a href="" class="flex items-center space-x-1 rounded-md px-2 py-3 hover:bg-gray-100 hover:text-blue-600">
                <span class="text-2xl"><i class="bx bx-phone"></i></span>
                <span>Concern</span>
            </a>

            <form action="" method="GET">
                <button type="submit" class="flex items-center space-x-1 rounded-md px-2 py-3 hover:bg-gray-100 hover:text-blue-600">
                    <span class="text-2xl"><i class="bx bx-door-open"></i></span>
                    <span>Logout</span>
                </button>
            </form>
        </aside>

