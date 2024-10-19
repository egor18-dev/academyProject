@extends('page')
@section('page')
<div class="container-fluid mt-3">
  <div class="row">
      <div class="col-xl-12">
          <div class="card custom-card">
              <div class="card-header justify-content-between">
                  <div class="card-title">
                      Crear Usuario
                  </div>
              </div>
              <div class="card-body">
                  <form action="{{ route('add-user') }}" method="POST" class="row g-3 needs-validation" novalidate>
                      @csrf 
                      <div class="col-md-6">
                          <label for="name" class="form-label">Nombre <span class="text-danger">*</span></label>
                          <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" id="name" value="{{ old('name') }}" placeholder="Nombre del usuario" required>
                          <div class="invalid-feedback">
                              Por favor, proporciona un nombre válido.
                          </div>
                      </div>
                      <div class="col-md-6">
                          <label for="surnames" class="form-label">Apellidos <span class="text-danger">*</span></label>
                          <input type="text" class="form-control {{ $errors->has('surnames') ? 'is-invalid' : '' }}" name="surnames" id="surnames" value="{{ old('surnames') }}" placeholder="Apellido del usuario" required>
                          <div class="invalid-feedback">
                              Por favor, proporciona apellidos válidos.
                          </div>
                      </div>
                      <div class="col-md-6">
                          <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                          <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" id="email" placeholder="nombre@ejemplo.com" value="{{ old('email') }}" required>
                          <div class="invalid-feedback">
                              Por favor, proporciona un correo electrónico válido.
                          </div>
                      </div>
                      <div class="col-md-6">
                          <label for="role" class="form-label">Función <span class="text-danger">*</span></label>
                          <select class="form-select" name="role" id="role" required>
                              <option value="" selected disabled>Selecciona un rol...</option>
                              @foreach ($roles as $role)
                                  <option value="{{ $role->name }}">{{ $role->name }}</option>
                              @endforeach
                          </select>
                          <div class="invalid-feedback">
                              Por favor, selecciona una función.
                          </div>
                      </div>
                      <div class="col-md-6">
                          <label for="password" class="form-label">Contraseña <span class="text-danger">*</span></label>
                          <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" name="password" id="password" required>
                          <div class="invalid-feedback">
                              Por favor, proporciona una contraseña.
                          </div>
                      </div>
                      <div class="col-12">
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="iAgree" required>
                              <label class="form-check-label" for="iAgree">
                                  Yo acepto los <a href="#!" class="link-primary text-decoration-none">términos y condiciones</a>
                              </label>
                              <div class="invalid-feedback">
                                  Debes aceptar los términos antes de enviar.
                              </div>
                          </div>
                      </div>
                      <div class="col-12">
                          <button class="btn btn-primary" type="submit">Crear cuenta</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection
