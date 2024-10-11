
@extends('page')
@section('page')
    <main class="container-fluid mt-3">
      <div class="row w-100">
        <div class="col-12 col-md-11 col-lg-8 col-xl-7 col-xxl-12">
          <div class="bg-white p-4 p-md-5 shadow-sm">
            <div class="row w-100">
              <div class="col-12">
                <div class="mb-5">
                  <h2 class="h3">Crear clase</h2>
                  <h3 class="fs-6 fw-normal text-secondary m-0">Introduce toda la información</h3>
                </div>
              </div>
            </div>  
            <form action="{{ route('add-class') }}" method="POST">
              @csrf 
              <div class="row gy-3 gy-md-4 overflow-hidden">
                <div class="col-12">
                  <label for="title" class="form-label">Título <span class="text-danger">*</span></label>
                  <input type="text" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" name="title" id="title" value="{{ old('title') }}" placeholder="Título de la clase">
                </div>
        
                <div class="col-12">
                  <label for="level" class="form-label">Nivel <span class="text-danger">*</span></label>
                  <select class="form-select" name="level" id="level">
                        @foreach ($levels as $level)
                            <option value="{{ $level->name }}">{{ $level->name }}</option>
                        @endforeach
                  </select>
                </div>

                <div class="col-12">
                  <label for="videoLink" class="form-label">Enlace del vídeo <span class="text-danger">*</span></label>
                  <input type="text" class="form-control {{ $errors->has('videoLink') ? 'is-invalid' : ''  }}" name="videoLink" id="videoLink" value="{{ old('videoLink') }}">
                </div>
                
                <div class="col-12">
                  <div class="d-grid">
                    <button class="principalBtn" type="submit">Crear clase</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
      </div>
  </div>
    </main>
@endsection
