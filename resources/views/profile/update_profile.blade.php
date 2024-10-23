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
                        <div class="col-xl-12">
                            <div class="d-flex align-items-start flex-wrap gap-3">
                                <div>
                                    <span class="avatar avatar-xxl">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/b/bc/Unknown_person.jpg" alt="">
                                    </span>
                                </div>
                                <div>
                                    <span class="fw-medium d-block mb-2">Foto de perfil</span>
                                    <div class="btn-list mb-1">
                                        <button class="btn btn-sm btn-danger btn-wave"><i
                                                class="ri-delete-bin-line me-1"></i>Eliminar</button>
                                    </div>
                                    <span class="d-block fs-12 text-muted">Utiliza JPEG, PNG o GIF. El mejor tamaño es de 200x200 píxeles. Mantén el archivo por debajo de los 5 MB.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <label for="profile-user-name" class="form-label">Nombre de Usuario :</label>
                            <input type="text" class="form-control" id="profile-user-name" value=""
                                placeholder="Ingresa Nombre">
                        </div>
                        <div class="col-xl-6">
                            <label for="profile-email" class="form-label">Apellidos :</label>
                            <input type="text" class="form-control" id="profile-email" value=""
                                placeholder="Ingresa Apellidos">
                        </div>
                        <div class="col-xl-6">
                            <label for="profile-designation" class="form-label">Email :</label>
                            <input type="email" class="form-control" id="profile-designation" value=""
                                placeholder="Ingresa Email">
                        </div>
                    </div>
                </div>
            <div class="card-footer border-top-0">
                <div class="btn-list float-end">
                    <button class="btn btn-secondary btn-wave">Desactivar Cuenta</button>
                    <button class="btn btn-primary btn-wave">Guardar Cambios</button>
                </div>
            </div>
    </div>
</div>
</section>
@endsection
