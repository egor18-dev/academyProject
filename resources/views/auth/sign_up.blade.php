<style>
 
    .left{
        background-image: linear-gradient(hsla(0, 0%, 0%, 0.500
        ), hsla(0, 0%, 0%, 0.500)),url('https://image.cnbcfm.com/api/v1/image/106918576-1627532474886-gettyimages-871203832-pi-1589476.jpeg?v=1627532520');
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        display: flex;
        flex-direction: column;
        padding: 50px !important;
    }

    label{
        font-weight: 300;
    }

    button[type="submit"]
    {
        color: #fff;
        border: none;
        outline: none;
        padding: 7px 15px;
        background: #7247f0 !important;
    }

</style>

@extends('welcome')
@section('content')
    <section class="container-fluid min-vh-100 d-flex align-items-center justify-content-center">
        <div class="row w-100 justify-content-center">
            <div class="col-lg-3 left"></div>
            <div class="col-lg-4 bg-white p-5">
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
                          <button type="submit">Crear cuenta</button>
                        </div>
                      </div>
                    </div>
                  </form>
            </div>
        </div>
    </section>
@endsection