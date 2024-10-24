@extends('page')
@section('page')
<div class="container-fluid mt-3">
  <div class="row">
      <div class="col-xl-12">
          <div class="card custom-card">
              <div class="card-header justify-content-between">
                  <div class="card-title">
                      Actualizar Examen
                  </div>
              </div>
              <div class="card-body">
                  <form action="{{ route('exams.update', ['uuid' => $exam->uuid]) }}" method="POST" class="row g-3 needs-validation" novalidate>
                      @csrf 
                      @method('PUT')
                      <div class="col-md-12">
                          <label for="title" class="form-label">Título <span class="text-danger">*</span></label>
                          <input type="text" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" name="title" id="title" value="{{ old('title', $exam->title) }}" placeholder="Título del examen" required>
                          <div class="invalid-feedback">
                              Por favor, proporciona un título válido.
                          </div>
                      </div>
                      <div class="col-md-12">
                          <label for="description" class="form-label">Descripción <span class="text-danger">*</span></label>
                          <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description" placeholder="Descripción del examen" required>{{ old('description', $exam->description) }}</textarea>
                          <div class="invalid-feedback">
                              Por favor, proporciona una descripción válida.
                          </div>
                      </div>
                      <div class="col-md-12">
                          <label for="level_id" class="form-label">Nivel <span class="text-danger">*</span></label>
                          <select class="form-select {{ $errors->has('level_id') ? 'is-invalid' : '' }}" name="level_id" id="level_id" required>
                              <option value="" disabled>Selecciona un nivel</option>
                              @foreach ($levels as $level)
                                  <option value="{{ $level->uuid }}" {{ old('level_id', $exam->level_id) == $level->uuid ? 'selected' : '' }}>{{ $level->name }}</option>
                              @endforeach
                          </select>
                          <div class="invalid-feedback">
                              Por favor, selecciona un nivel válido.
                          </div>
                      </div>
                      <div class="col-12">
                          <button class="btn btn-primary" type="submit">Actualizar examen</button>
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
