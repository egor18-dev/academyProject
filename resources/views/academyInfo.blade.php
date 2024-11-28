@extends('welcome')
@section('content')    
@include('layouts/whatsapp')
<section class="landing-body">
    <a href="{{ route('main') }}" style="position: absolute; top: 0; left: 0; z-index: 9999 !important; margin: 15px;"><svg fill="#fff" height="30px" width="30px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" stroke="#fff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M320,112H192V48h-32L0,208l160,160h32v-64h160c88.365,0,112,71.635,112,160h48V304C512,197.962,426.038,112,320,112z"></path> </g> </g> </g></svg></a>

    <div class="landing-page-wrapper">

        <div class="main-content landing-main px-0 p-0">

            <div class="landing-banner" id="home">
                <section class="section">
                    <div class="container main-banner-container pb-lg-0">
                        <div class="row">
                            <div class="col-xxl-8 col-xl-7 col-lg-7 col-md-8">
                                <div class="pt-lg-5">
                                    <div class="mb-3">
                                        <h6 class="fw-medium text-fixed-white op-9">Bienvenido a Academia Eselmind</h6>
                                    </div>
                                    <p class="landing-banner-heading mb-3 text-fixed-white fw-semibold">Bienvenido a Academia Eselmind, donde aprenderás <span class="text-warning">Trading</span></p>
                                    <div class="fs-16 mb-5 text-fixed-white op-7">Descubre cómo dominar el trading con nuestro enfoque práctico y recursos expertos, diseñados para optimizar tu aprendizaje y rendimiento.</div>
                                    <a href="{{route('users.enter') }}" class="m-1 btn btn-lg btn-secondary btn-wave waves-effect waves-light">
                                        Entrar ahora
                                    </a>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-4 my-auto position-relative">
                                <div class="text-end landing-main-image landing-heading-img">
                                    <img src="{{ asset('images/img1.PNG') }}" alt="img-academy" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            
            <section class="section pt-5" id="about">
                <div class="container position-relative">
                    <div class="text-center">
                        <span class="landing-text-heading">Visión General</span>
                        <h3 class="fw-semibold mb-2 mt-3">¿Por qué elegir nuestros servicios?</h3>
                        <div class="row justify-content-center">
                            <div class="col-xl-7">
                                <p class="text-muted fs-15 mb-5 fw-normal">En Academia Eselmind, estamos dedicados a enseñarte trading con las mejores herramientas y recursos para que logres tus objetivos.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Columna 1 -->
                        <div class="col-xl-4">
                            <div class="card custom-card landing-card landingmain border">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <span class="avatar avatar-xl bg-primary-transparent">
                                            <span class="avatar avatar-lg bg-primary svg-white">
                                                <svg width="64px" height="64px" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" fill="#fff" stroke="#fff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><defs><style>.a{fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;}</style></defs><path class="a" d="M4.5,33.3994l9.1545-11.57,8.2826,16.0354L28.63,10.1356l4.2337,8.1678L39.01,11.4818l4.49,8.4056"></path></g></svg>
                                            </span>
                                        </span>
                                    </div>
                                    <h5 class="fw-semibold">Análisis de Mercado</h5>
                                    <p class="fs-14 text-muted">Aprenderás a interpretar los movimientos del mercado para tomar decisiones informadas en tus inversiones de trading.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Columna 2 -->
                        <div class="col-xl-4">
                            <div class="card custom-card landing-card landingmain border">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <span class="avatar avatar-xl bg-secondary-transparent">
                                            <span class="avatar avatar-lg bg-secondary svg-white">
                                                <svg width="64px" height="64px" viewBox="0 0 64 64" data-name="Layer 1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" fill="#fff" stroke="#fff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><defs><style>.cls-1{fill:#fff;}</style></defs><title></title><path class="cls-1" d="M50.86,38.07H13.14a1,1,0,0,1-1-1V15.43a1,1,0,0,1,1-1H50.86a1,1,0,0,1,1,1V37.07A1,1,0,0,1,50.86,38.07Zm-36.72-2H49.86V16.43H14.14Z"></path><path class="cls-1" d="M29.54,49.57H25.46a1,1,0,0,1-.84-.46,1,1,0,0,1-.07-1l4.5-9.75a1,1,0,0,1,1.82,0l2,4.42a1,1,0,0,1,0,.84L30.45,49A1,1,0,0,1,29.54,49.57Zm-2.52-2H28.9l2-4.33-.94-2Z"></path><path class="cls-1" d="M34,39.82a1,1,0,0,1-.91-.58l-.81-1.75a1,1,0,0,1,.07-1,1,1,0,0,1,.84-.46h1.62a1,1,0,0,1,.84.46,1,1,0,0,1,.07,1L35,39.24A1,1,0,0,1,34,39.82Z"></path><path class="cls-1" d="M38.54,49.57H34.46a1,1,0,0,1-.91-.58l-5.31-11.5a1,1,0,0,1,.07-1,1,1,0,0,1,.84-.46h4.08a1,1,0,0,1,.91.58l5.31,11.5a1,1,0,0,1-.07,1A1,1,0,0,1,38.54,49.57Zm-3.44-2H37l-4.39-9.5H30.71Z"></path><path class="cls-1" d="M23.39,38.07H15.92a1,1,0,0,1-1-1V34.29a1,1,0,0,1,1-1h7.47a1,1,0,0,1,1,1v2.78A1,1,0,0,1,23.39,38.07Zm-6.47-2h5.47v-.78H16.92Z"></path><path class="cls-1" d="M20.71,31.22A1,1,0,0,1,20,29.54a26.94,26.94,0,0,1,20.17-7.82A1,1,0,0,1,41,23.25l-1.5,2.36a1,1,0,1,1-1.69-1.07l.53-.83a25.37,25.37,0,0,0-16.83,7.18A1,1,0,0,1,20.71,31.22Z"></path><path class="cls-1" d="M40.11,23.72a1,1,0,0,1-.81-.41l-1.74-2.39a1,1,0,1,1,1.61-1.18l1.74,2.39a1,1,0,0,1-.21,1.39A1,1,0,0,1,40.11,23.72Z"></path><path class="cls-1" d="M46.38,34.32H31.91a1,1,0,0,1,0-2H46.38a1,1,0,0,1,0,2Z"></path></g></svg>                                            </span>
                                        </span>
                                    </div>
                                    <h5 class="fw-semibold">Estrategias de Trading</h5>
                                    <p class="fs-14 text-muted">Te enseñaremos diferentes estrategias de trading que te permitirán maximizar tus ganancias y minimizar los riesgos.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Columna 3 -->
                        <div class="col-xl-4">
                            <div class="card custom-card landing-card landingmain border">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <span class="avatar avatar-xl bg-success-transparent">
                                            <span class="avatar avatar-lg bg-success svg-white">
                                                <svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#fff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 5V19M12 5L6 11M12 5L18 11" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>                                            </span>
                                        </span>
                                    </div>
                                    <h5 class="fw-semibold">Crecimiento Sostenible</h5>
                                    <p class="fs-14 text-muted">Nuestro enfoque se centra en un aprendizaje continuo y en la construcción de una base sólida para tu crecimiento en el trading.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section section-bg" id="expectations">
    <div class="container">
        <div class="row gx-5 mx-0">
            <div class="col-xl-5">
                <div class="d-xl-block">
                    <img src="https://image-service.usw2.wp-prod-us.cultureamp-cdn.com/S2lN3aEUIFN7rHpqtup8FeRuR5M=/1200x630/cultureampcom/production/f34/fd9/830/f34fd98303160743bfe9f398/blog-employee-personas.png" class="img-fluid h-100 rounded" style="min-height: 45vh" alt="">
                </div>
                <div class="proving-pattern-1"></div>   
            </div>
            <div class="col-xl-7 my-auto">
                <div class="heading-section text-start mb-4">
                    <span class="landing-text-heading">Sobre Mí</span>
                    <h3 class="mt-3 fw-semibold mb-2">Conozca a Eselmind, El Futuro del Trading</h3>
                    <div class="heading-description fs-16 text-muted">Bienvenidos a Eselmind donde el aprendizaje sobre trading no solo es un curso, sino una transformación. Fundada por Marc, un apasionado del trading y la educación, nuestra misión es brindarte las herramientas para que puedas alcanzar tu máximo potencial financiero.</div>
                </div>
                <div class="row gy-3 mb-0">
                    <div class="col-xl-12">
                        <div class="d-flex align-items-top">
                            <div class="me-2 home-prove-svg">
                                <i class="ri-arrow-right-circle-line align-middle fs-16 text-primary d-inline-block"></i>
                            </div>
                            <div>
                                <span class="fs-15">
                                    Fundado por Marc, quien ha dedicado más de 10 años al estudio y la práctica del trading, Eselmind es la academia que siempre has estado buscando para llevar tus habilidades al siguiente nivel.
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="d-flex align-items-top">
                            <div class="me-2 home-prove-svg">
                                <i class="ri-arrow-right-circle-line align-middle fs-16 text-primary d-inline-block"></i>
                            </div>
                            <div>
                                <span class="fs-15">
                                    Marc, con su visión clara y su pasión por el aprendizaje continuo, ha creado un espacio donde los estudiantes no solo aprenden estrategias, sino que se sumergen en una experiencia educativa personalizada y de alto nivel.
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="d-flex align-items-top">
                            <div class="me-2 home-prove-svg">
                                <i class="ri-arrow-right-circle-line align-middle fs-16 text-primary d-inline-block"></i>
                            </div>
                            <div>
                                <span class="fs-15">
                                    En Eselmind, entendemos que cada persona tiene sus propias metas y desafíos, por eso diseñamos un enfoque personalizado para cada uno de nuestros estudiantes, asegurando que se adapten perfectamente a tus necesidades.
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="d-flex align-items-top">
                            <div class="me-2 home-prove-svg">
                                <i class="ri-arrow-right-circle-line align-middle fs-16 text-primary d-inline-block"></i>
                            </div>
                            <div>
                                <span class="fs-15">
                                    Eselmind no es solo una academia, es una comunidad que te acompaña en cada paso. Nos importa tu progreso y trabajamos codo a codo contigo para asegurarnos de que adquieras las habilidades necesarias para tener éxito en el trading.
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="d-flex align-items-top">
                            <div class="me-2 home-prove-svg">
                                <i class="ri-arrow-right-circle-line align-middle fs-16 text-primary d-inline-block"></i>
                            </div>
                            <div>
                                <span class="fs-15">
                                    Estamos siempre disponibles para ayudarte. Marc y su equipo de expertos están a tu disposición 24/7 para resolver tus dudas y brindarte apoyo en cualquier momento, porque tu éxito es nuestra prioridad.
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section" id="services">
    <div class="container">
        <div class="text-center">
            <span class="landing-text-heading">Servicios</span>
            <h3 class="fw-semibold mt-3 mb-2">Servicios de Trading Premium al Alcance de Tu Mano</h3>
            <div class="row justify-content-center">
                <div class="col-xl-7">
                    <p class="text-muted fs-15 mb-5 fw-normal">Disfruta de servicios de trading de primera calidad con facilidad y conveniencia.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3">
                <div class="card custom-card landing-card">
                    <div class="card-body text-center">
                        <div class="mb-4">
                            <span class="svg-gradient avatar avatar-lg bg-primary mx-auto svg-container primary svg-white">
                                <!-- Icono para Análisis de Mercado -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256">
                                    <path d="M215,168.71a96.42,96.42,0,0,1-30.54,37l-9.36-9.37a8,8,0,0,0-3.63-2.09L150,188.59a8,8,0,0,1-5.88-8.9l2.38-16.2a8,8,0,0,1,4.84-6.22l30.46-12.66a8,8,0,0,1,8.47,1.49ZM159.89,105,182.06,79.2A8,8,0,0,0,184,74V50A96,96,0,0,0,50.49,184.65l9.92-6.52A8,8,0,0,0,64,171.49l.21-36.23a8.06,8.06,0,0,1,1.35-4.41l20.94-31.3a8,8,0,0,1,11.34-2l19.81,13a8.06,8.06,0,0,0,5.77,1.45l31.46-4.26A8,8,0,0,0,159.89,105Z" opacity="0.2"></path>
                                    <path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,16a87.5,87.5,0,0,1,48,14.28V74L153.83,99.74,122.36,104l-.31-.22L102.38,90.92A16,16,0,0,0,79.87,95.1L58.93,126.4a16,16,0,0,0-2.7,8.81L56,171.44l-3.27,2.15A88,88,0,0,1,128,40ZM62.29,186.47l2.52-1.65A16,16,0,0,0,72,171.53l.21-36.23L93.17,104a3.62,3.62,0,0,0,.32.22l19.67,12.87a15.94,15.94,0,0,0,11.35,2.77L156,115.59a16,16,0,0,0,10-5.41l22.17-25.76A16,16,0,0,0,192,74V67.67A87.87,87.87,0,0,1,211.77,155l-16.14-14.76a16,16,0,0,0-16.93-3m30.49,16.71a87.88,87.88,0,0,1-73.3,46.27"></path>
                                </svg>
                            </span>
                        </div>
                        <h6 class="fw-semibold">Análisis de Mercado</h6>
                        <p class="fs-15 text-muted mb-0">Análisis de mercado integral para ayudarte a tomar decisiones de trading informadas.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="card custom-card landing-card">
                    <div class="card-body text-center">
                        <div class="mb-4">
                            <span class="svg-gradient avatar avatar-lg bg-secondary mx-auto svg-container secondary svg-white">
                                <!-- Icono para Estrategias de Trading -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256">
                                    <path d="M224,128a96,96,0,1,1-96-96A96,96,0,0,1,224,128Z" opacity="0.2"></path>
                                    <path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm40-68a28,28,0,0,1-28,28h-4v8a8,8,0,0,1-16,0v-8H104a8,8,0,0,1,0-16h36a12,12,0,0,0,0-24H116a28,28,0,0,1,0-56h4V72a8,8,0,0,1,16,0v8h16a8,8,0,0,1,0,16H116a12,12,0,0,0,0,24h24A28,28,0,0,1,168,148Z"></path>
                                </svg>
                            </span>
                        </div>
                        <h6 class="fw-semibold">Estrategias de Trading</h6>
                        <p class="fs-15 text-muted mb-0">Desarrolla estrategias personalizadas para mejorar tu rendimiento en el trading.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="card custom-card landing-card">
                    <div class="card-body text-center">
                        <div class="mb-4">
                            <span class="svg-gradient avatar avatar-lg bg-success mx-auto svg-container success svg-white">
                                <!-- Icono para Señales de Trading -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256">
                                    <path d="M208,40V208H152V40Z" opacity="0.2"></path>
                                    <path d="M224,200h-8V40a8,8,0,0,0-8-8H152a8,8,0,0,0-8,8V80H96a8,8,0,0,0-8,8v40H48a8,8,0,0,0-8,8v64H32a8,8,0,0,0,0,16H224a8,8,0,0,0,0-16ZM160,48h40V200H160ZM104,96h40V200H104ZM56,144H88v56H56Z"></path>
                                </svg>
                            </span>
                        </div>
                        <h6 class="fw-semibold">Señales de Trading</h6>
                        <p class="fs-15 text-muted mb-0">Recibe señales de trading de expertos para aprovechar los movimientos del mercado.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="card custom-card landing-card">
                    <div class="card-body text-center">
                        <div class="mb-4">
                            <span class="svg-gradient avatar avatar-lg bg-info mx-auto svg-container info svg-white">
                                <!-- Icono para Gestión de Riesgos -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256">
                                    <path d="M216,128a88,88,0,1,1-88-88A88.1,88.1,0,0,1,216,128Z" opacity="0.2"></path>
                                    <path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Z"></path>
                                </svg>
                            </span>
                        </div>
                        <h6 class="fw-semibold">Gestión de Riesgos</h6>
                        <p class="fs-15 text-muted mb-0">Implementa técnicas de gestión de riesgos efectivas para proteger tus operaciones.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
            <section class="section section-bg" id="pricing">
                <div class="container">
                    <div class="text-center">
                        <span class="landing-text-heading">Precios</span>
                        <h3 class="fw-semibold mt-3 mb-2">Ofrecemos los Precios Más Competitivos</h3>
                        <div class="row justify-content-center">
                            <div class="col-xl-7">
                                <p class="text-muted fs-15 mb-5 fw-normal">Nuestros planes están diseñados para ser altamente asequibles, adaptándose a cada categoría con un enfoque en el valor y la accesibilidad.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex align-items-center justify-content-center mb-5">
                        <div class="col-lg-8 col-xl-4 col-xxl-4 col-md-8 col-sm-12">
                            <div class="card custom-card pricing-card pricing-card1 border shadow-xs">
                                <div class="card-body p-4">
                                    <div class="d-flex gap-3 align-items-center p-1">
                                        <div class="p-2 border d-inline-block border-primary rounded border-opacity-10 bg-primary-transparent">
                                            <span class="avatar avatar-md bg-primary svg-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256">
                                                    <path d="M128,48v80H40.87A146.29,146.29,0,0,1,40,112V56a8,8,0,0,1,8-8Zm0,80V232s78.06-21.3,87.13-104Z" opacity="0.2"></path>
                                                    <path d="M208,40H48A16,16,0,0,0,32,56v56c0,52.72,25.52,84.67,46.93,102.19,23.06,18.86,46,25.27,47,25.53a8,8,0,0,0,4.2,0c1-.26,23.91-6.67,47-25.53C198.48,196.67,224,164.72,224,112V56A16,16,0,0,0,208,40ZM120,220.55a130.85,130.85,0,0,1-30.93-18.74c-21.15-17.3-34.2-39.37-39-65.81H120ZM120,120H48.23c-.15-2.63-.23-5.29-.23-8l0-56h72Zm47.4,81.42A131.31,131.31,0,0,1,136,220.53V136h69.91C201.16,162.24,188.27,184.18,167.4,201.42ZM208,112c0,2.71-.08,5.37-.23,8H136V56h72Z">
                                                    </path>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="text-start">
                                            <h4 class="fw-medium mb-1">Pro</h4> <span class="mb-1 text-muted d-block">Características esenciales para un inicio exitoso</span>
                                        </div>
                                    </div>
                                    <hr class="border-top my-4">
                                    <div>
                                        <h2 class="mb-0 fw-semibold d-block ">$29.99/<span class="fs-12  fw-medium ms-1">Por Mes</span></h2> <span class="text-muted fs-14"><span class=" me-2 fw-semibold">+15/</span>Persona por mes</span>
                                    </div>
                                    <div class="text-center my-3 pricing-barrier">
                                        <span class="op-6 fs-12 px-2 py-1 border rounded-pill">Recomendado</span>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="d-flex align-items-center"> <span class="avatar avatar-xs svg-primary"> <i class="ri-arrow-right-circle-line fs-14 text-success"></i> </span> <span class="ms-1 my-auto flex-fill"> Asistencia Permanente </span> <span class="badge bg-primary-transparent rounded-pill">Nuevo</span> </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center"> <span class="avatar avatar-xs svg-primary"> <i class="ri-arrow-right-circle-line fs-14 text-success"></i> </span> <span class="ms-1 my-auto"> Experiencia Premium </span> </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center"> <span class="avatar avatar-xs svg-primary"> <i class="ri-arrow-right-circle-line fs-14 text-success"></i> </span> <span class="ms-1 my-auto"> Actualizaciones Infinitas </span> </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center"> <span class="avatar avatar-xs svg-primary"> <i class="ri-arrow-right-circle-line fs-14 text-success"></i> </span> <span class="ms-1 my-auto flex-fill"> Prueba Sin Riesgo </span> <span class="text-muted fs-12 fw-medium">15 Días</span> </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center"> <span class="avatar avatar-xs svg-primary"> <i class="ri-arrow-right-circle-line fs-14 text-success"></i> </span> <span class="ms-1 my-auto flex-fill"> Garantía de Satisfacción </span> <span class="text-muted fs-12 fw-medium">45 Días</span> </div>
                                        </li>
                                    </ul>
                                    <button type="button" class="btn btn-lg mt-4 btn-primary d-grid w-100 btn-wave waves-effect waves-light">
                                        <span class="ms-4 me-4">Agendar una Demo</span> </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="section landing-footer text-fixed-white">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-12 mb-md-0 mb-3">
                            <div class="px-4">
                                <p class="fw-medium mb-3"><a href="index.html"><img
                                            src="../assets/images/brand-logos/desktop-dark.png" alt=""></a></p>
                                <p class="mb-2 op-6 fw-normal">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit et magnam,
                                    fuga est mollitia eius, quo illum illo inventore optio aut quas omnis rem. Dolores
                                    accusantium aspernatur minus ea incidunt.
                                </p>
                                <p class="mb-0 op-6 fw-normal">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Autem ea esse ad</p>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 col-12">
                            <div class="px-4">
                                <h6 class="fw-medium mb-3 text-fixed-white">PÁGINAS</h6>
                                <ul class="list-unstyled op-6 fw-normal landing-footer-list">
                                    <li>
                                        <a href="mail.html" class="text-fixed-white">Correo electrónico</a>
                                    </li>
                                    <li>
                                        <a href="profile.html" class="text-fixed-white">Perfil</a>
                                    </li>
                                    <li>
                                        <a href="timeline.html" class="text-fixed-white">Cronología</a>
                                    </li>
                                    <li>
                                        <a href="projects-list.html" class="text-fixed-white">Proyectos</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-fixed-white">Contactos</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-fixed-white">Portafolio</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 col-12">
                            <div class="px-4">
                                <h6 class="fw-medium text-fixed-white">INFORMACIÓN</h6>
                                <ul class="list-unstyled op-6 fw-normal landing-footer-list">
                                    <li>
                                        <a href="team.html" class="text-fixed-white">Nuestro equipo</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-fixed-white">Contáctanos</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-fixed-white">Acerca de</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-fixed-white">Servicios</a>
                                    </li>
                                    <li>
                                        <a href="blog.html" class="text-fixed-white">Blog</a>
                                    </li>
                                    <li>
                                        <a href="terms_conditions.html" class="text-fixed-white">Términos y condiciones</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="px-4">
                                <h6 class="fw-medium text-fixed-white">CONTACTO</h6>
                                <ul class="list-unstyled fw-normal landing-footer-list">
                                    <li>
                                        <a href="javascript:void(0);" class="text-fixed-white op-6"><i
                                                class="ri-home-4-line me-1 align-middle"></i> Nueva York, NY 10012, EE.UU.</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-fixed-white op-6"><i
                                                class="ri-mail-line me-1 align-middle"></i> info@fmail.com</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-fixed-white op-6"><i
                                                class="ri-phone-line me-1 align-middle"></i> +(555)-1920 1831</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-fixed-white op-6"><i
                                                class="ri-printer-line me-1 align-middle"></i> +(123) 1293 123</a>
                                    </li>
                                    <li class="mt-3">
                                        <p class="mb-2 fw-medium op-8">SÍGUENOS EN :</p>
                                        <div class="mb-0">
                                            <div class="btn-list">
                                                <button
                                                    class="btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light">
                                                    <i class="ri-facebook-line fw-bold"></i>
                                                </button>
                                                <button
                                                    class="btn btn-sm btn-icon btn-secondary-light btn-wave waves-effect waves-light">
                                                    <i class="ri-twitter-x-line fw-bold"></i>
                                                </button>
                                                <button
                                                    class="btn btn-sm btn-icon btn-success-light btn-wave waves-effect waves-light">
                                                    <i class="ri-instagram-line fw-bold"></i>
                                                </button>
                                                <button
                                                    class="btn btn-sm btn-icon btn-info-light btn-wave waves-effect waves-light">
                                                    <i class="ri-github-line fw-bold"></i>
                                                </button>
                                                <button
                                                    class="btn btn-sm btn-icon btn-warning-light btn-wave waves-effect waves-light">
                                                    <i class="ri-youtube-line fw-bold"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-11 -->
            
            <div class="text-center landing-main-footer py-3">
                <span class="text-muted fs-15"> Copyright © <span id="year"></span> <a href="javascript:void(0);"
                        class="text-primary fw-medium"><u>Eselmind</u></a>.
                    Diseñado con <span class="fa fa-heart text-danger"></span> por <a href="https://egmasolutions.com"
                        class="text-primary fw-medium"><u>
                            egmasolutions</u>
                    </a> Todos
                    los derechos
                    reservados
                </span>
            </div>
            

        </div>
        <!-- End::app-content -->

    </div>

</section>

@endsection
