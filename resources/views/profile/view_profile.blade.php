@extends('page')
@section('page')
<section class="container-fluid p-3">
    <div class="card custom-card profile-card">
        <div class="card-body pb-0">
            <div class="profile-banner-img">
                <img src="https://academia.tradimo.com/img/mobile.jpg" class="rounded w-100" style="height: 30vh">
            </div>
            <span class="avatar avatar-xxl avatar-rounded bg-light">
                <img src="https://upload.wikimedia.org/wikipedia/commons/b/bc/Unknown_person.jpg" alt="">
            </span>
            <div
                class="mt-4 mb-0 p-4 d-flex align-items-center flex-wrap gap-3 justify-content-between">
                <div class="">
                <h5 class="fw-semibold m-0">{{$user->name}}</h5>
                <span class="d-block fw-medium text-muted mb-1 pt-0">{{$user->surnames}}</span>
                <a href="#" class="btn btn-primary btn-sm mt-3">Editar perfil</a>
                </div> 
                <div class="d-flex mb-0 flex-wrap gap-4">
                    <div
                        class="py-2 ps-2 pe-3 rounded-pill d-flex align-items-center border gap-3">
                        <div class="main-card-icon primary">
                            <div
                                class="avatar avatar-md avatar-rounded bg-primary-transparent svg-primary border border-primary border-opacity-25">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32"
                                    height="32" fill="#000000" viewBox="0 0 256 256">
                                    <path
                                        d="M224,118.31V200a8,8,0,0,1-8,8H40a8,8,0,0,1-8-8V118.31h0A191.14,191.14,0,0,0,128,144,191.08,191.08,0,0,0,224,118.31Z"
                                        opacity="0.2"></path>
                                    <path
                                        d="M104,112a8,8,0,0,1,8-8h32a8,8,0,0,1,0,16H112A8,8,0,0,1,104,112ZM232,72V200a16,16,0,0,1-16,16H40a16,16,0,0,1-16-16V72A16,16,0,0,1,40,56H80V48a24,24,0,0,1,24-24h48a24,24,0,0,1,24,24v8h40A16,16,0,0,1,232,72ZM96,56h64V48a8,8,0,0,0-8-8H104a8,8,0,0,0-8,8ZM40,72v41.62A184.07,184.07,0,0,0,128,136a184,184,0,0,0,88-22.39V72ZM216,200V131.63A200.25,200.25,0,0,1,128,152a200.19,200.19,0,0,1-88-20.36V200H216Z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <div>
                            <p class="fw-semibold h6 mb-0">75</p>
                            <p class="mb-0 fs-12 text-muted fw-medium">Clases terminadas</p>
                        </div>
                    </div>
                    <div
                        class="py-2 ps-2 pe-3 rounded-pill d-flex align-items-center border  gap-3">
                        <div class="main-card-icon secondary">
                            <div
                                class="avatar avatar-rounded avatar-md bg-secondary-transparent svg-secondary border border-secondary border-opacity-25">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32"
                                    height="32" fill="#000000" viewBox="0 0 256 256">
                                    <path
                                        d="M136,108A52,52,0,1,1,84,56,52,52,0,0,1,136,108Z"
                                        opacity="0.2"></path>
                                    <path
                                        d="M117.25,157.92a60,60,0,1,0-66.5,0A95.83,95.83,0,0,0,3.53,195.63a8,8,0,1,0,13.4,8.74,80,80,0,0,1,134.14,0,8,8,0,0,0,13.4-8.74A95.83,95.83,0,0,0,117.25,157.92ZM40,108a44,44,0,1,1,44,44A44.05,44.05,0,0,1,40,108Zm210.14,98.7a8,8,0,0,1-11.07-2.33A79.83,79.83,0,0,0,172,168a8,8,0,0,1,0-16,44,44,0,1,0-16.34-84.87,8,8,0,1,1-5.94-14.85,60,60,0,0,1,55.53,105.64,95.83,95.83,0,0,1,47.22,37.71A8,8,0,0,1,250.14,206.7Z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <div>
                            <p class="fw-semibold h6 mb-0">85</p>
                            <p class="mb-0 fs-12 text-muted fw-medium">horas estudiadas</p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item p-3">
                    <span class="fw-medium fs-15 d-block mb-3">Secciones terminadas :</span>
                    <div class="w-75">
                        <a href="javascript:void(0);">
                            <span class="badge bg-light text-muted m-1 border">Análisis Técnico</span>
                        </a>
                        <a href="javascript:void(0);">
                            <span class="badge bg-light text-muted m-1 border">Gestión de Riesgos</span>
                        </a>
                        <a href="javascript:void(0);">
                            <span class="badge bg-light text-muted m-1 border">Análisis Fundamental</span>
                        </a>
                        <a href="javascript:void(0);">
                            <span class="badge bg-light text-muted m-1 border">Psicología del Trading</span>
                        </a>
                        <a href="javascript:void(0);">
                            <span class="badge bg-light text-muted m-1 border">Tendencias del Mercado</span>
                        </a>
                        <a href="javascript:void(0);">
                            <span class="badge bg-light text-muted m-1 border">Gestión de Portafolios</span>
                        </a>
                        <a href="javascript:void(0);">
                            <span class="badge bg-light text-muted m-1 border">Interpretación de Datos</span>
                        </a>
                        <a href="javascript:void(0);">
                            <span class="badge bg-light text-muted m-1 border">Estrategias de Backtesting</span>
                        </a>
                        <a href="javascript:void(0);">
                            <span class="badge bg-light text-muted m-1 border">Patrones de Gráficos</span>
                        </a>
                        <a href="javascript:void(0);">
                            <span class="badge bg-light text-muted m-1 border">Ratios de Riesgo/Beneficio</span>
                        </a>
                        <a href="javascript:void(0);">
                            <span class="badge bg-light text-muted m-1 border">Gestión de Apalancamiento</span>
                        </a>
                        <a href="javascript:void(0);">
                            <span class="badge bg-light text-muted m-1 border">Forex y Criptomonedas</span>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    </div>
</section>
@endsection
