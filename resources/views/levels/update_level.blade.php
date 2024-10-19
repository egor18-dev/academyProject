@extends('page')
@section('page')
<div class="container-fluid mt-3">
  <div class="row">
      <div class="col-xl-12">
          <div class="card custom-card">
              <div class="card-header justify-content-between">
                  <div class="card-title">
                      Actualizar Nivel
                  </div>
              </div>
              <div class="card-body">
                  <form action="{{ route('users.update', ['uuid' => $level->uuid]) }}" method="POST" class="row g-3 needs-validation" novalidate>
                      @csrf 
                      @method('PUT')
                      <div class="col-md-12">
                          <label for="name" class="form-label">Nombre <span class="text-danger">*</span></label>
                          <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" id="name" value="{{ old('name', $level->name) }}" placeholder="Descripción del nivel" required>
                          <div class="invalid-feedback">
                              Por favor, proporciona un nombre válido.
                          </div>
                      </div>
                      <div class="col-md-12">
                          <label for="description" class="form-label">Apellidos <span class="text-danger">*</span></label>
                          <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description" placeholder="Descripción del nivel" required>{{ old('description', $level->description) }}</textarea>
                          <div class="invalid-feedback">
                              Por favor, proporciona apellidos válidos.
                          </div>
                      </div>
                      <div class="col-12">
                          <button class="btn btn-primary" type="submit">Actualizar nivel</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>

  @if(session('success'))
  <div class="container-fluid mt-3">
      <div class="row">
          <div class="col-xl-12">
              <div class="alert alert-success" role="alert">
                  {{ session('success') }}
              </div>
          </div>
      </div>
  </div>
  @endif

</div>
@endsection
