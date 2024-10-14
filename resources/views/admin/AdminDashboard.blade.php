@extends('layout.layout')

@section('content')
    <!-- page -->
    <main class="min-h-screen w-full bg-gray-100 text-gray-700" x-data="layout">
        <!-- header page -->
        <header class="flex w-full items-center justify-between border-b-2 border-gray-200 bg-white p-2">
            <!-- logo -->
            <div class="flex items-center space-x-2">
                <button type="button" class="text-3xl" @click="asideOpen = !asideOpen"><i class="bx bx-menu"></i></button>
                <div>
                    <a href="#" class="flex items-center">
                        <span class="self-center text-xl font-bold whitespace-nowrap text-yellow-800">Vermille
                        <span
                        class="self-center text-xl font-bold whitespace-nowrap text-gray-400">Hotel</span>
                        </span>
                    </a>
                </div>
            <div class="mx-5">
                {{-- user name --}}
            </div>
        </header>

        <div class="flex">
            @include('layout.nav_admin')

            <!-- main content page -->

            <div class="w-full p-4">
                <h1 class=" mb-5 form-title">Halfday/Undertime</h1>

                {{-- content --}}
            </div>
        </div>
    </main>
@endsection
