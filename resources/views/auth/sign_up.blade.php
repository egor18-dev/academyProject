
@extends('welcome')
@section('content')
<div class="container-lg">
  <div class="row justify-content-center authentication authentication-basic align-items-center h-100">
      <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-6 col-sm-8 col-12">
          <div class="card custom-card my-4 border z-3 position-relative">
              <div class="card-body p-0">
                  <div class="p-5">
                      <p class="h4 fw-semibold mb-0 text-center">Crear Cuenta</p>
                      <p class="mb-3 text-muted fw-normal text-center">¡Únete creando una cuenta gratuita!</p>
                      <form action="{{ route('users.store') }}" method="POST">
                          @csrf
                          <div class="row gy-3">
                              <div class="col-xl-12">
                                  <label for="name" class="form-label text-default">Nombre <span class="text-danger">*</span></label>
                                  <div class="position-relative">
                                      <input type="text" class="form-control form-control-lg {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" id="name" placeholder="Nombre del usuario" value="{{ old('name') }}">
                                  </div>
                              </div>
                              <div class="col-xl-12">
                                  <label for="surnames" class="form-label text-default">Apellidos <span class="text-danger">*</span></label>
                                  <div class="position-relative">
                                      <input type="text" class="form-control form-control-lg {{ $errors->has('surnames') ? 'is-invalid' : '' }}" name="surnames" id="surnames" placeholder="Apellidos del usuario" value="{{ old('surnames') }}">
                                  </div>
                              </div>
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
                                      <input class="form-check-input" type="checkbox" value="" name="iAgree" id="iAgree" required>
                                      <label class="form-check-label text-primary" for="iAgree">
                                          Yo acepto los <a href="#!" class="link-primary text-decoration-none">términos y condiciones</a>
                                      </label>
                                  </div>
                              </div>
                              <div class="d-grid mt-4">
                                  <button type="submit" class="btn btn-primary">Crear Cuenta</button>
                              </div>
                              <div class="text-center mb-3">
                                  <p class="text-muted mt-3 mb-0">¿Ya tienes una cuenta? <a href="{{ route('users.showEnterForm') }}" class="text-primary">Inicia Sesión</a></p>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection