@extends('page')
@section('page')
<section class="container-fluid p-3">
    <div class="card custom-card">
        <div class="p-3 border-bottom border-top border-block-end-dashed tab-content">
            <div class="tab-pane show active overflow-hidden p-0 border-0" id="account-pane"
                role="tabpanel" aria-labelledby="account" tabindex="0">
                <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-1">
                    <div class="fw-semibold d-block fs-15">Configuración de la Cuenta :</div>
                </div>
                <div class="row gy-3">
                    <form action="{{ route('profile.update', ['uuid' => $user->uuid]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row w-100">
                            <div class="col-xl-6">
                                <label for="profile-user-name" class="form-label">Nombre de Usuario :</label>
                                <input type="text" class="form-control" id="profile-user-name" name="name" value="{{ $user->name }}"
                                    placeholder="Ingresa Nombre">
                            </div>
                            <div class="col-xl-6">
                                <label for="profile-email" class="form-label">Apellidos :</label>
                                <input type="text" class="form-control" id="profile-email" name="surnames" value="{{ $user->surnames }}"
                                    placeholder="Ingresa Apellidos">
                            </div>
                            <div class="col-xl-12 mt-2">
                                <label for="profile-designation" class="form-label">Email :</label>
                                <input type="email" class="form-control" id="profile-designation" name="email" value="{{ $user->email }}"
                                    placeholder="Ingresa Email">
                            </div>
                        </div>
                        <div class="card-footer border-top-0">
                            <div class="btn-list float-end">
                                <button class="btn btn-secondary btn-wave" type="button">Desactivar Cuenta</button>
                                <button class="btn btn-primary btn-wave" type="submit">Guardar Cambios</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </div>
</div>
</section>
@endsection
