@extends('page')
@section('page')
<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-xl-12">
            <div class="card custom-card">
                <div class="card-header justify-content-between">
                    <div class="card-title">
                        Actualizar Clase
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('classes.update', ['uuid' => $class->uuid]) }}" method="POST" class="row g-3 needs-validation" novalidate enctype="multipart/form-data">
                        @csrf 
                        @method('PUT')
                        <div class="col-lg-6">
                          <label for="title" class="form-label">Título <span class="text-danger">*</span></label>
                          <input type="text" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" name="title" id="title" value="{{$class->title}}" placeholder="Título de la clase">
                        </div>
                        <div class="col-lg-6">
                            <label for="role" class="form-label">Nivel <span class="text-danger">*</span></label>
                            <select class="form-select {{ $errors->has('role') ? 'is-invalid' : '' }}" name="level_id" id="level_id" required>
                                <option value="" selected disabled>Selecciona un nivel...</option>
                                @foreach ($levels as $level)
                                    @if ($level->uuid === $class->level_id)
                                        <option selected value="{{ $level->uuid }}">{{ $level->name }}</option>
                                    @else
                                        <option value="{{ $level->uuid }}">{{ $level->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                            <div class="invalid-feedback">
                                Por favor, selecciona una función.
                            </div>
                        </div>
                        <div class="col-md-12">
                          <label for="description" class="form-label">Descripción <span class="text-danger">*</span></label>
                          <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description" placeholder="Descripción del nivel" required>{{ $class->description }}</textarea>
                          <div class="invalid-feedback">
                              Por favor, proporciona una descripción válida.
                          </div>
                      </div>
                      <div class="col-xl-12">
                          <label for="video_img" class="form-label">Miniatura video</label>
                          <input class="form-control" type="file" id="video_img" name="video_img" accept="image/*">
                      </div>
                      <div class="col-xl-12">
                          <label for="video" class="form-label">Sube un video <span class="text-danger">*</span></label>
                          <input class="form-control" type="file" id="video" name="video" accept="video/*">
                      </div>
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Actualizar video</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection