@extends('page')
@section('page')
    <div class="container-fluid users mt-3 p-0 d-flex flex-column users">
        <a href="{{ route('add-user') }}" class="add-user mb-3">Añadir usuario</a>
        <table class="table align-middle mb-0 p-0 bg-white mx-3 w-100">
            <thead class="bg-light">
                <tr>
                    <th>Nombre</th>
                    <th>Posición</th>
                    <th>Suscripción</th> <!-- Nueva columna para Suscripción -->
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
                            <div class="ms-3 d-flex flex-column p-0 info">
                                <h5 class="h6">{{$user->name}}</h5>
                                <p class="text-muted">{{$user->email}}</p>
                            </div>
                        </div>
                    </td>
                    @if($user->getRoleNames()->isNotEmpty())
                        <td class="role">{{ implode(', ', $user->getRoleNames()->toArray()) }}</td>
                    @endif
                    <td class="subscription"><span>Activa</span></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
