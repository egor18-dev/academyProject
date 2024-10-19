@extends('page')
@section('page')
<div class="container-fluid mt-3">
  <div class="row">
      <div class="col-xl-12">
          <div class="card custom-card">
              <div class="card-header justify-content-between">
                  <div class="card-title">
                      Crear Nivel
                  </div>
              </div>
              <div class="card-body">
                  <form action="{{ route('levels.store') }}" method="POST" class="row g-3 needs-validation" novalidate>
                      @csrf 
                      <div class="col-md-12">
                          <label for="name" class="form-label">Nombre <span class="text-danger">*</span></label>
                          <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" id="name" value="{{ old('name') }}" placeholder="Nombre del usuario" required>
                          <div class="invalid-feedback">
                              Por favor, proporciona un nombre válido.
                          </div>
                      </div>
                      <div class="col-md-12">
                          <label for="description" class="form-label">Descripción <span class="text-danger">*</span></label>
                          <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description" placeholder="Descripción del nivel" required>{{ old('description') }}</textarea>
                          <div class="invalid-feedback">
                              Por favor, proporciona una descripción válida.
                          </div>
                      </div>
                      <div class="col-12">
                          <button class="btn btn-primary" type="submit">Crear Nivel</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection  
