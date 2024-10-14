@extends('  layout.layout')

@include('layout.nav_page')

@section('content')

{{-- jumbotron --}}
@include('users.components.jumbotron')

{{-- about --}}

@include('users.components.about')

{{-- cards --}}

@include('users.components.cards')

{{-- contact --}}

@include('users.components.contact')

{{-- footer --}}

@include('layout.footer')
@endsection
