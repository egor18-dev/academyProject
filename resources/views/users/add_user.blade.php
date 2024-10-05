
@extends('page')
@section('page')
    <main class="container-fluid mt-3">
      <div class="row w-100">
        <div class="col-12 col-md-11 col-lg-8 col-xl-7 col-xxl-6">
          <div class="bg-white p-4 p-md-5 shadow-sm">
            <div class="row w-100">
              <div class="col-12">
                <div class="mb-5">
                  <h2 class="h3">Crear usuario</h2>
                  <h3 class="fs-6 fw-normal text-secondary m-0">Introduce toda la información</h3>
                </div>
              </div>
            </div>
            <form action="{{ route('add-user') }}" method="POST">
              @csrf 
              <div class="row gy-3 gy-md-4 overflow-hidden">
                <div class="col-12">
                  <label for="name" class="form-label">Nombre <span class="text-danger">*</span></label>
                  <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" id="name" value="{{ old('name') }}" placeholder="Nombre del usuario">
                </div>
                <div class="col-12">
                  <label for="surnames" class="form-label">Apellidos <span class="text-danger">*</span></label>
                  <input type="text" class="form-control {{ $errors->has('surnames') ? 'is-invalid' : '' }}" name="surnames" id="surnames" value="{{ old('surnames') }}" placeholder="Apellido del usuario">
                </div>
                <div class="col-12">
                  <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                  <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" id="email" placeholder="name@example.com" value=" {{old('email')}} ">
                </div>
                <div class="col-12">
                  <label for="function" class="form-label">Función <span class="text-danger">*</span></label>
                  <select class="form-select" name="function" id="function" aria-label="Default select example">
                        @foreach ($roles as $role)
                            <option value="1">{{ $role->name }}</option>
                        @endforeach
                  </select>
                </div>
                <div class="col-12">
                  <label for="password" class="form-label">Contraseña <span class="text-danger">*</span></label>
                  <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : ''  }}" name="password" id="password" value="{{ old('password') }}">
                </div>
                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" name="iAgree" id="iAgree" required>
                    <label class="form-check-label text-secondary" for="iAgree">
                      Yo acepto los <a href="#!" class="link-primary text-decoration-none">terminos y condiciones</a>
                    </label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="d-grid">
                    <button class="principalBtn" type="submit">Crear cuenta</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
      </div>
  </div>
    </main>
@endsection
