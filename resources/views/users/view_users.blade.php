@extends('page')
@section('page')
    <main class="container-fluid">
        @include('users/add_user')
        @include('users/users_list')
    </main>
@endsection
