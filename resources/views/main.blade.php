@extends('welcome')
@section('content')
@include('layouts/whatsapp')
<main class="main-home">
    <div class="section">
        <img src="{{ asset('images/start/img1.jpg') }}" alt="Trading Image">
        <h5>Trading</h5>
        <a href="{{ route('trading') }}">Saber más</a>
    </div>
    
    <div class="section">
        <img src="{{ asset('images/start/img2.jpg') }}" alt="Formación Image">
        <h5>Formación</h5>
        <a href="{{ route('academy') }}">Saber más</a>
    </div>
    
    <div class="section">
        <img src="{{ asset('images/start/img3.jpg') }}" alt="Mentoría Image">
        <h5>Cryptos</h5>
        <a  href="{{ route('cryptos') }}">Saber más</a>
    </div>
</main>
@endsection
