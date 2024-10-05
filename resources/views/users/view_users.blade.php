@extends('page')
@section('page')
    <main class="container-fluid">
    
    <div class="container-fluid users mt-3 p-0">
        <table class="table align-middle mb-0 p-0 bg-white mx-3 w-100">
            <thead class="bg-light">
                <tr>
                    <th>Nombre</th>
                    <th>Posición</th>
                    <th>Suscripción</th> <!-- Nueva columna para Suscripción -->
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <img
                                src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png"
                                alt=""
                                style="width: 45px; height: 45px"
                                class="rounded-circle"
                            />
                            <div class="ms-3">
                                <p class="fw-bold mb-1">{{$user->name}}</p>
                                <p class="text-muted mb-0">{{$user->email}}</p>
                            </div>
                        </div>
                    </td>
                    <td class="role">Administrador</td>
                    <td class="subscription"><span>Activa</span></td> <!-- Estado de suscripción -->
                    <td>
                        <a href="#">Editar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </main>
@endsection
