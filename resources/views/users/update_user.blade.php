
@extends('page')
@section('page')
    <main class="container-fluid mt-3">
      <div class="row w-100">
        <div class="col-12 col-md-11 col-lg-8 col-xl-7 col-xxl-12">
          <div class="bg-white p-4 p-md-5 shadow-sm">
            <div class="row w-100">
              <div class="col-12">
                <div class="mb-5">
                  <h2 class="h3">Actualizar usuario</h2>
                  <h3 class="fs-6 fw-normal text-secondary m-0">Introduce toda la información</h3>
                </div>
              </div>
            </div>
            <form action="{{ route('update-user', ['uuid' => $user->uuid]) }}" method="POST">
              @csrf 
              @method('PUT')
              <div class="row gy-3 gy-md-4 overflow-hidden">
                <div class="col-12">
                  <label for="name" class="form-label">Nombre <span class="text-danger">*</span></label>
                  <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" id="name" value="{{ old('name') ? old('name') : $user->name }}" placeholder="Nombre del usuario">
                </div>
                <div class="col-12">
                  <label for="surnames" class="form-label">Apellidos <span class="text-danger">*</span></label>
                  <input type="text" class="form-control {{ $errors->has('surnames') ? 'is-invalid' : '' }}" name="surnames" id="surnames" value="{{ old('surnames') ? old('surnames') : $user->surnames }}" placeholder="Apellido del usuario">
                </div>
                <div class="col-12">
                  <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                  <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" id="email" placeholder="name@example.com" value=" {{old('email') ? old('email') : $user->email}} ">
                </div>
                <div class="col-12">
                    <label for="role" class="form-label">Función <span class="text-danger">*</span></label>
                    <select class="form-select" name="role" id="role">
                          @foreach ($roles as $role)
                            @if ($role->name === $actualUserRole)
                              <option selected value="{{ $role->name }}">{{ $role->name }}</option>
                            @else
                              <option value="{{ $role->name }}">{{ $role->name }}</option>
                            @endif                            
                          @endforeach
                    </select>
                  </div>
                <div class="col-12">
                  <label for="password" class="form-label">Contraseña <span class="text-danger">*</span></label>
                  <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : ''  }}" name="password" id="password" value="{{ old('password') }}">
                </div>
                <div class="col-12">
                  <div class="d-grid">
                    <button class="principalBtn" type="submit">Actualizar cuenta</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
      </div>
  </div>
    </main>
@endsection
