@extends('layout.layout')

@section('content')
@include('layout.nav_page')
<div class="mt-36">


@include('users.components.cards')

</div>
@include('layout.footer')
@endsection
