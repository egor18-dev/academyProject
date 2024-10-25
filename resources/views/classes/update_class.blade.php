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
                          <input type="text" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" name="title" id="title" value="{{ old('title', $class->title) }}" placeholder="Título de la clase">
                          @if ($errors->has('title'))
                              <div class="text-danger">
                                  {{ $errors->first('title') }}
                              </div>
                          @endif
                        </div>
                        <div class="col-lg-6">
                            <label for="level_id" class="form-label">Nivel <span class="text-danger">*</span></label>
                            <select class="form-select {{ $errors->has('level_id') ? 'is-invalid' : '' }}" name="level_id" id="level_id" required>
                                <option value="" selected disabled>Selecciona un nivel...</option>
                                @foreach ($levels as $level)
                                    <option value="{{ $level->uuid }}" {{ old('level_id', $class->level_id) == $level->uuid ? 'selected' : '' }}>{{ $level->name }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('level_id'))
                                <div class="text-danger">
                                    {{ $errors->first('level_id') }}
                                </div>
                            @endif
                        </div>
                        <div class="col-md-12">
                          <label for="description" class="form-label">Descripción <span class="text-danger">*</span></label>
                          <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description" placeholder="Descripción del nivel" required>{{ old('description', $class->description) }}</textarea>
                          @if ($errors->has('description'))
                              <div class="text-danger">
                                  {{ $errors->first('description') }}
                              </div>
                          @endif
                      </div>
                      <div class="col-xl-12">
                          <label for="video_img" class="form-label">Miniatura video <span class="text-danger">*</span></label>
                          <input class="form-control {{ $errors->has('video_img') ? 'is-invalid' : '' }}" type="file" id="video_img" name="video_img" accept="image/*">
                          @if ($errors->has('video_img'))
                              <div class="text-danger">
                                  {{ $errors->first('video_img') }}
                              </div>
                          @endif
                      </div>
                      <div class="col-xl-12">
                          <label for="video" class="form-label">Sube un video <span class="text-danger">*</span></label>
                          <input class="form-control {{ $errors->has('video') ? 'is-invalid' : '' }}" type="file" id="video" name="video" accept="video/*">
                          @if ($errors->has('video'))
                              <div class="text-danger">
                                  {{ $errors->first('video') }}
                              </div>
                          @endif
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
