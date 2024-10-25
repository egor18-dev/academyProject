@extends('welcome')
@section('content')
<div class="page error-bg" id="particles-js">
    <div class="row authentication coming-soon justify-content-center g-0 my-auto">
        <div class="col-xxl-5 col-xl-5 col-lg-7 col-md-7 col-sm-9 col-11 my-auto">
            <div class="rounded">
                <div class="bg-white p-5 error-img text-center rounded">
                    <div class="row align-items-center mx-0 g-0">
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="row align-items-center justify-content-center text-center h-100">
                                <div class="col-xl-10 col-lg-10 col-md-12 col-12">
                                    <p class="error-text mb-4">403</p>
                                    <p class="fs-5 fw-medium mb-2">Ups, ¿no tienes permiso para acceder a esta página?</p>
                                    <p class="fs-15 mb-4 text-muted">Lo sentimos, pero no tienes autorización para acceder a esta sección. Si crees que esto es un error, contacta al administrador.</p>
                                    <a href="{{ route('profile.index') }}" class="btn btn-lg btn-w-lg mb-2 border-0 btn-primary me-sm-3 sm-0">Volver</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
