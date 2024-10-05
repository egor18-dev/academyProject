@extends('welcome')
@section('content')
    <section class="container-fluid position-relative p-0">
            @include('templates/header')
            @include('main')
            {{-- @include('templates/footer') --}}
    </section>
@endsection