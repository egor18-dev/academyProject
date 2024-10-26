@extends('welcome')
@section('content')
<div class="container-lg">
    <div class="row justify-content-center authentication authentication-basic align-items-center h-100">
        <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-6 col-sm-8 col-12">
            <div class="card custom-card my-4 border z-3 position-relative">
                <div class="card-body p-0">
                    <div class="p-5">
                        <p class="h4 fw-semibold mb-0 text-center">Iniciar Sesión</p>
                        <p class="mb-3 text-muted fw-normal text-center">Introduce tus credenciales para acceder</p>
                        <form action="{{ route('users.enter') }}" method="POST">
                            @csrf
                            <div class="row gy-3">
                                <div class="col-xl-12">
                                    <label for="email" class="form-label text-default">Email <span class="text-danger">*</span></label>
                                    <div class="position-relative">
                                        <input type="email" class="form-control form-control-lg {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" id="email" placeholder="name@example.com" value="{{ old('email') }}">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <label for="password" class="form-label text-default">Contraseña <span class="text-danger">*</span></label>
                                    <div class="position-relative">
                                        <input type="password" class="form-control form-control-lg {{ $errors->has('password') ? 'is-invalid' : '' }}" name="password" id="password" placeholder="Contraseña">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" name="remember" id="remember">
                                        <label class="form-check-label text-primary" for="remember">
                                            Recordarme
                                        </label>
                                    </div>
                                </div>
                                <div class="d-grid mt-4">
                                    <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                                </div>
                                <div class="text-center mb-3">
                                    <p class="text-muted mt-3 mb-0">¿No tienes cuenta? <a href="{{ route('users.showCreateForm') }}" class="text-primary">Regístrate</a></p>
                                </div>
                                @if ($errors->has('error'))
                                <div class="alert alert-danger d-flex align-items-center" role="alert">
                                    <svg style="fill: #FF383C" class="flex-shrink-0 me-2 svg-danger" xmlns="http://www.w3.org/2000/svg" height="1.5rem" viewBox="0 0 24 24" width="1.5rem" fill="#000000">
                                        <g><rect fill="none" height="24" width="24"/></g>
                                        <g><g><g><path d="M15.73,3H8.27L3,8.27v7.46L8.27,21h7.46L21,15.73V8.27L15.73,3z M19,14.9L14.9,19H9.1L5,14.9V9.1L9.1,5h5.8L19,9.1V14.9z"/>
                                            <rect height="6" width="2" x="11" y="7"/><rect height="2" width="2" x="11" y="15"/></g></g></g>
                                    </svg>
                                    <div>{{ $errors->first('error') }}</div>
                                </div>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
