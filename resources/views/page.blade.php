@extends('welcome')
@section('content')
    <section class="container-fluid">
        <div class="row w-100 justify-content-end">
            <div class="col-lg-2 d-flex align-items-start p-0 left">
                @include('aside/aside')
            </div>
            <div class="col-lg-10 p-0 position-relative right-page">
                @yield('page')
            </div>
        </div>
    </section>
@endsection

<style>
    .left{
        position: fixed;
        top: 0;
        left: 0;
    }
</style>