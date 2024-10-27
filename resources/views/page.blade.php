@extends('welcome')
@section('content')
    <section class="container-fluid main-styles p-0">
        <div class="header-page">
            <button class="hamburger-menu">
                <svg width="30" height="30" viewBox="0 0 24 24" fill="#fff" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 6h16M4 12h16M4 18h16" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
        </div>
        @include('aside/aside')
        <div class="right-page w-100 m-auto">
            @yield('page')
        </div>
    </section>
@endsection

<script>

window.addEventListener('load', () => {
    const btn = document.querySelector('.hamburger-menu');
    const btnClose = document.querySelector('.close-btn');
    const aside = document.querySelector('aside');

    console.log(btnClose);

    btn.addEventListener('click', () => {
        aside.classList.toggle('opened');
    });

    btnClose.addEventListener('click', () => {
        aside.classList.remove('opened'); 
    });
});

    

</script>
