@extends('welcome')
@section('content')
@include('templates/complete_header')
    <section class="container-fluid">
        <div class="row w-100">
            <div class="col-lg-2 p-0 position-relative">
                @include('aside/aside')
            </div>
            <div class="col-lg-10 p-0 position-relative">
                @yield('page')
            </div>
        </div>
    </section>
@endsection
