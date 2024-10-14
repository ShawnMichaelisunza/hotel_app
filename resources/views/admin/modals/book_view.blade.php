<div class="fixed z-10 inset-0 overflow-y-auto">
    <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-50"></div>
        </div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>
        <div
            class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6">
            <div class="bg-white max-w-2xl shadow overflow-hidden sm:rounded-lg">
                <div class="px-4 py-5 sm:px-6">
                <a type="button" href=""
                    class="absolute top-3 right-2.5 text-gray-800 bg-transparent hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center popup-close"><i class="fa-solid fa-x h-5 w-5"></i>
                    <span class="sr-only">Close popup</span>
                </a>
                <div>
                    <h1 class="text-2xl font-bold text-yellow-800">Vermille <span class="text-gray-400">Hotel</span></h1>
                </div>
                </div>
                <div>
                    <dl>
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-xs font-medium text-yellow-800">
                                Full name :
                            </dt>
                            <dd class="mt-1 text-xs text-gray-900 sm:mt-0 sm:col-span-2">
                              {{$book->first_name}} {{$book->last_name}}
                            </dd>
                        </div>
                        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-xs font-medium text-yellow-800">
                                Email :
                            </dt>
                            <dd class="mt-1 text-xs text-gray-900 sm:mt-0 sm:col-span-2">
                               {{$book->email}}
                            </dd>
                        </div>
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-xs font-medium text-yellow-800">
                               Contact No. :
                            </dt>
                            <dd class="mt-1 text-xs text-gray-900 sm:mt-0 sm:col-span-2">
                                {{$book->phone_no}}
                            </dd>
                        </div>
                        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-xs font-medium text-yellow-800">
                            Check In :
                            </dt>
                            <dd class="mt-1 text-xs text-gray-900 sm:mt-0 sm:col-span-2">
                                {{Carbon\Carbon::parse( $book->check_in)->format('M d, Y')}}
                            </dd>
                        </div>
                        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-xs font-medium text-yellow-800">
                            Check Out :
                            </dt>
                            <dd class="mt-1 text-xs text-gray-900 sm:mt-0 sm:col-span-2">
                                {{Carbon\Carbon::parse( $book->check_out)->format('M d, Y')}}
                            </dd>
                        </div>
                        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-xs font-medium text-yellow-800">
                               Room Offer :
                            </dt>
                            <dd class="mt-1 text-xs text-gray-900 sm:mt-0 sm:col-span-2">
                                ₱ {{$book->room_offer}}
                            </dd>
                        </div>
                        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border-b-2 border-gray-400">
                            <dt class="text-xs font-medium text-yellow-800">
                            Room Charges :
                            </dt>
                            <dd class="mt-1 text-xs text-gray-900 sm:mt-0 sm:col-span-2">
                                ₱ {{$book->add_offer}}
                            </dd>
                        </div>
                        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-yellow-800">
                               Total Price :
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                ₱ {{$book->total_price}}
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</div>
