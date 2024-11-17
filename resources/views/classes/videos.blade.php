@extends('page')
@section('page')
            <section class="container-fluid position-relative pt-3">
                @if ($pendingExams)
                    <div class="alert-exam bg-primary text-white w-25 p-3 rounded position-fixed bottom-0 end-0 me-3 mb-3">
                        <p>
                            Para continuar, completa el siguiente examen. Lee cada pregunta con atención y responde según las indicaciones. Este paso es esencial para avanzar. ¡Buena suerte!
                        </p>
                        <a href="{{ route('exams.showExam', ['uuid' => $pendingExams[0]]) }}" class="btn btn-white btn-sm">Hacer examen</a>
                    </div>
                @endif
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card custom-card nft-banner-card overflow-hidden">
                                    <div class="card-body background p-5">
                                        <div class="row">
                                            <div class="col-lg-7">
                                                <h3 class="fw-semibold text-fixed-white">
                                                    Aprende a Operar en los Mercados: ¡Construye tu Futuro Financiero!
                                                </h3>
                                                <p class="text-fixed-white fs-15 op-8 mb-4">Descubre estrategias de trading, domina los mercados y alcanza tus metas financieras con nuestros cursos especializados.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start gap-3 flex-wrap">
                                            <div>
                                                <span class="avatar avatar-md bg-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><polygon points="152 224 104 152 76.36 193.46 60 168 24 224 152 224" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="152 32 152 88 208 88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M192,224h8a8,8,0,0,0,8-8V88L152,32H56a8,8,0,0,0-8,8v88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <span class="d-block mb-2">Clases totales</span>
                                                <h3 class="fw-semibold mb-2 lh-1">{{$count}}</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start gap-3 flex-wrap">
                                            <div>
                                                <span class="avatar avatar-md bg-secondary svg-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><line x1="128" y1="24" x2="128" y2="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="128" y1="208" x2="128" y2="232" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M184,88a40,40,0,0,0-40-40H112a40,40,0,0,0,0,80h40a40,40,0,0,1,0,80H104a40,40,0,0,1-40-40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <span class="d-block mb-2">Instructores</span>
                                                <h3 class="fw-semibold mb-2 lh-1">+5</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start gap-3 flex-wrap">
                                            <div>
                                                <span class="avatar avatar-md bg-success svg-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M54.46,201.54c-9.2-9.2-3.1-28.53-7.78-39.85C41.82,150,24,140.5,24,128s17.82-22,22.68-33.69C51.36,83,45.26,63.66,54.46,54.46S83,51.36,94.31,46.68C106.05,41.82,115.5,24,128,24S150,41.82,161.69,46.68c11.32,4.68,30.65-1.42,39.85,7.78s3.1,28.53,7.78,39.85C214.18,106.05,232,115.5,232,128S214.18,150,209.32,161.69c-4.68,11.32,1.42,30.65-7.78,39.85s-28.53,3.1-39.85,7.78C150,214.18,140.5,232,128,232s-22-17.82-33.69-22.68C83,204.64,63.66,210.74,54.46,201.54Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><circle cx="96" cy="96" r="16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><circle cx="160" cy="160" r="16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="88" y1="168" x2="168" y2="88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <span class="d-block mb-2">Alumnos</span>
                                                <h3 class="fw-semibold mb-2 lh-1">+{{$totalUsers}}</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="row">
                    <div class="col-xxl-9">
                        </div>
                        <div class="row align-items-center justify-content-start">
                            @foreach ($keys as $key)
                                @foreach ($classes[$key] as $class)
                                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="card custom-card class">
                                        <div class="card-body">
                                            <div class="position-relative mb-3 overflow-hidden rounded">
                                                @if (!$class->allowed)
                                                    <div class="disabled-video">
                                                        <svg viewBox="0 0 8.4666669 8.4666669" id="svg8" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:svg="http://www.w3.org/2000/svg" fill="#fff" stroke="#fff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <defs id="defs2"></defs> <g id="layer1" transform="translate(0,-288.53332)"> <path d="M 16 1 C 12.139297 1 9 4.1392882 9 8 L 9 13 L 7 13 A 1.0000999 1.0000999 0 0 0 6 14 L 6 30 A 1.0000999 1.0000999 0 0 0 7 31 L 25 31 A 1.0000999 1.0000999 0 0 0 26 30 L 26 14 A 1.0000999 1.0000999 0 0 0 25 13 L 23 13 L 23 8 C 23 4.1392882 19.860703 1 16 1 z M 16 3 C 18.787297 3 21 5.212674 21 8 L 21 13 L 11 13 L 11 8 C 11 5.212674 13.212703 3 16 3 z M 16 21.052734 A 0.99999992 0.99999992 0 0 1 17 22.052734 A 0.99999992 0.99999992 0 0 1 16 23.052734 A 0.99999992 0.99999992 0 0 1 15 22.052734 A 0.99999992 0.99999992 0 0 1 16 21.052734 z " id="rect864" style="color:#fff;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-feature-settings:normal;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#fff;letter-spacing:normal;word-spacing:normal;text-transform:none;writing-mode:lr-tb;direction:ltr;text-orientation:mixed;dominant-baseline:auto;baseline-shift:baseline;text-anchor:start;white-space:normal;shape-padding:0;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#fff;solid-opacity:1;vector-effect:none;fill:#fff;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1.99999988;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:stroke fill markers;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate" transform="matrix(0.26458333,0,0,0.26458333,0,288.53332)"></path> </g> </g></svg>
                                                    </div>
                                                @endif
                                                    
                                                <img src="{{ route('userClasses.image', ['uuid' => $class->uuid]) }}" class="card-img rounded" style="height: 30vh" alt="dsa.">
                                                <p class="mb-0 bg-secondary text-fixed-white nft-auction-time"> {{$class->level->name}} </p>
                                                <div class="nft-content">
                                                    <a class="fs-14 fw-bold text-fixed-white">{{$class->title}}</a>
                                                    <div class="d-flex mb-0 align-items-center flex-wrap gap-2 justify-content-between">
                                                        <div> 
                                                            <span class="fs-12 text-fixed-white d-block mb-1 op-8">Creado por</span>
                                                            <span class="fw-medium text-fixed-white d-block lh-1">EgmaSolutions</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="disabled-event"></div>
                                            </div>
                                            <div class="d-grid">
                                                <a href="{{ route('userClasses.view', ['uuid' => $class->uuid]) }}" class="btn btn-primary btn-wave {{!$class->allowed ? 'disabled-button' : ''}}">
                                                    {{!$class->allowed ? 'Ver anteriores' : 'Ver'}}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            @endforeach
                    </div>
            </div>
        </section>
@endsection

<style>
    .background{
        background-image: url('https://images6.alphacoders.com/114/thumb-1920-1141549.png');
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
    }

    .disabled-button{
        opacity: 0.6;
        cursor: none;
        pointer-events: none;
    }

</style>


