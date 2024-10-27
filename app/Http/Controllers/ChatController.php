<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ChatController extends Controller
{
    private function viewWithAuthName($view, $data = [])
    {
        // Método para devolver una vista con datos y el nombre de usuario autenticado
    }

    public function index()
    {
        $user = auth()->user();

        $users = collect();

        if ($user->hasRole('Estudiante')) {
            $users = User::role('Editor')->get();
        } elseif ($user->hasRole('Editor')) {
            $users = User::role('Estudiante')->get();
        } elseif ($user->hasRole('Administrador')) {
            $users = User::role(['Editor', 'Estudiante'])->get();
        }

        return view('chats.view_chats', compact('users'));
    }

    public function enter(Request $request)
    {
        // Método para iniciar sesión con validación de credenciales
    }

    public function create()
    {
        // Método para mostrar el formulario de creación de usuario y verificar permisos
    }

    public function showEnterForm()
    {
        // Método para mostrar el formulario de inicio de sesión
    }

    public function showCreateForm()
    {
        // Método para mostrar el formulario de registro de usuario
    }

    public function store(Request $request)
    {
        // Método para almacenar un nuevo usuario en la base de datos con validación
    }

    public function show($uuid)
    {
        // Método para mostrar el perfil de un usuario específico y verificar permisos
    }

    public function update(Request $request, $uuid)
    {
        // Método para actualizar la información de un usuario con validación
    }

    public function delete($uuid)
    {
        // Método para eliminar un usuario específico y verificar permisos
    }
}
