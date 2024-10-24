@extends('page')
@section('page')
<div class="container-fluid mt-3">
  <div class="row">
      <div class="col-xl-12">
          <div class="card custom-card">
              <div class="card-header justify-content-between">
                  <div class="card-title">
                      Añadir Pregunta al Examen: {{ $exam->title }}
                  </div>
              </div>
              <div class="card-body">
                  <form action="{{ route('questions.store', ['examUuid' => $exam->uuid]) }}" method="POST" class="row g-3 needs-validation" novalidate>
                      @csrf 
                      <div class="col-md-12">
                          <label for="question" class="form-label">Pregunta <span class="text-danger">*</span></label>
                          <input type="text" class="form-control {{ $errors->has('question') ? 'is-invalid' : '' }}" name="question" id="question" value="{{ old('question') }}" placeholder="Texto de la pregunta" required>
                          <div class="invalid-feedback">
                              Por favor, proporciona una pregunta válida.
                          </div>
                      </div>
                      <div class="col-md-12">
                          <label for="type" class="form-label">Tipo de Pregunta <span class="text-danger">*</span></label>
                          <select class="form-select {{ $errors->has('type') ? 'is-invalid' : '' }}" name="type" id="type" required>
                              <option value="" disabled selected>Selecciona el tipo de pregunta</option>
                              <option value="opción_múltiple" {{ old('type') == 'opción_múltiple' ? 'selected' : '' }}>Opción Múltiple</option>
                              <option value="verdadero_falso" {{ old('type') == 'verdadero_falso' ? 'selected' : '' }}>Verdadero/Falso</option>
                              <option value="respuesta_corta" {{ old('type') == 'respuesta_corta' ? 'selected' : '' }}>Respuesta Corta</option>
                          </select>
                          <div class="invalid-feedback">
                              Por favor, selecciona un tipo válido.
                          </div>
                      </div>
                      <div class="col-md-12">
                          <label for="options" class="form-label">Opciones <small class="text-muted">(solo para opción múltiple)</small></label>
                          <textarea class="form-control {{ $errors->has('options') ? 'is-invalid' : '' }}" name="options" id="options" placeholder="Escribe las opciones en formato JSON, por ejemplo: ['Opción 1', 'Opción 2']">{{ old('options') }}</textarea>
                          <div class="invalid-feedback">
                              Por favor, proporciona opciones válidas en formato JSON si es una pregunta de opción múltiple.
                          </div>
                      </div>
                      <div class="col-md-12">
                          <label for="answer" class="form-label">Respuesta Correcta <span class="text-danger">*</span></label>
                          <input type="text" class="form-control {{ $errors->has('answer') ? 'is-invalid' : '' }}" name="answer" id="answer" value="{{ old('answer') }}" placeholder="Respuesta correcta" required>
                          <div class="invalid-feedback">
                              Por favor, proporciona una respuesta válida.
                          </div>
                      </div>
                      <div class="col-12">
                          <button class="btn btn-primary" type="submit">Añadir Pregunta</button>
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

  @if ($errors->has('error'))
  <div class="container-fluid mt-3">
      <div class="row">
          <div class="col-xl-12">
              <div class="alert alert-danger" role="alert">
                  {{ $errors->first('error') }}
              </div>
          </div>
      </div>
  </div>
  @endif
</div>
@endsection
