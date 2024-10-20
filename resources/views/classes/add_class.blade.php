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
                      <div class="col-lg-6">
                        <label for="title" class="form-label">Título <span class="text-danger">*</span></label>
                        <input type="text" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" name="title" id="title" value="{{ old('title') }}" placeholder="Título de la clase">
                      </div>
                      <div class="col-lg-6">
                          <label for="role" class="form-label">Nivel <span class="text-danger">*</span></label>
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
                      <div class="col-md-12">
                        <label for="description" class="form-label">Descripción <span class="text-danger">*</span></label>
                        <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description" placeholder="Descripción del nivel" required>{{ old('description') }}</textarea>
                        <div class="invalid-feedback">
                            Por favor, proporciona una descripción válida.
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <label for="formFile" class="form-label">Sube un video <span class="text-danger">*</span></label>
                        <input class="form-control" type="file" id="formFile" name="video" accept="video/*">
                    </div>
                      <div class="col-12">
                          <button class="btn btn-primary" type="submit">Subir video</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection
