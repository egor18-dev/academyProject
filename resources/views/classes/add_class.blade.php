@extends('page')
@section('page')
<div class="container-fluid mt-3">
  <div class="row">
      <div class="col-xl-12">
          <div class="card custom-card">
              <div class="card-header justify-content-between">
                  <div class="card-title">
                      Crear Clase
                  </div>
              </div>
              <div class="card-body">
                  <form action="{{ route('users.store') }}" method="POST" class="row g-3 needs-validation" novalidate>
                      @csrf 
                      <div class="col-lg-12">
                        <label for="title" class="form-label">Título <span class="text-danger">*</span></label>
                        <input type="text" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" name="title" id="title" value="{{ old('title') }}" placeholder="Título de la clase">
                      </div>
                      <div class="col-lg-6">
                          <label for="role" class="form-label">Función <span class="text-danger">*</span></label>
                          <select class="form-select {{ $errors->has('role') ? 'is-invalid' : '' }}" name="role" id="role" required>
                              <option value="" selected disabled>Selecciona un nivel...</option>
                              @foreach ($levels as $level)
                                  <option value="{{ $level->name }}">{{ $level->name }}</option>
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
                              <input class="form-check-input" type="checkbox" id="iAgree" required>
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
