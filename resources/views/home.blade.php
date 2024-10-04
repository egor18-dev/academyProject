@extends('welcome')
@section('content')
    <section class="container-fluid">
        <div class="row w-100">
            <div>
                @include('templates/header')
            </div>
            <div>
                @include('main')
            </div>
            <div>
                @include('templates/footer')
            </div>
        </div>
    </section>
@endsection