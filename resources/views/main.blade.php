@extends('welcome')
@section('content')
<main class="main-home">
    <div class="section">
        <img src="https://cdn.prod.website-files.com/649220d2911fb5552e5aca5e/64c85a70b2ba9d101d5edb26_Team%20Focus.webp" alt="">
        <h5>Trading</h5>
        <a href="#">Saber más</a>
    </div>
    <div class="section">
        <img src="https://schooltraining.s3.eu-west-3.amazonaws.com/651aac3a196e1_651aac3a19675.jpeg" alt="">
            <h5>Escuela</h5>
            <a href="{{ route('users.index') }}">Saber más</a>
        </div>
    <div class="section">
        <img src="https://thementormorphosis.org/wp-content/uploads/2023/01/TECHNOLOGY...A-WELCOME-DEVELOPMENT-IN-MENTORING.png" alt="">
        <h5>Mentoría</h5>
        <a href="#">Saber más</a>
    </div>
</main>
@endsection