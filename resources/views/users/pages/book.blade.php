@extends('layout.layout')

@section('content')
@include('layout.nav_page')

<div class="mt-36">
<h1 class="text-4xl pt-5 pl-5 font-semibold text-yellow-800">{{$room->room_name}}</h1>

@include('users.components.book_form')

</div>

@include('layout.footer')
@endsection
