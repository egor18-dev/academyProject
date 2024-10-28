<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ChatController extends Controller
{
    private function viewWithAuthName($view, $data = [])
    {
        // Método para devolver una vista con datos y el nombre de usuario autenticado
    }

    private function getUserRoleChatTargets()
    {
        $user = auth()->user();

        if ($user->hasRole('Estudiante')) {
            return User::role('Editor')->get();
        }

        if ($user->hasRole('Editor')) {
            return User::role('Estudiante')->get();
        }

        if ($user->hasRole('Administrador')) {
            return User::role(['Editor', 'Estudiante'])->get();
        }

        return collect();
    }

    public function index()
    {
        $users = $this->getUserRoleChatTargets();
        return view('chats.view_chats', compact('users'));
    }

    public function show($uuid)
    {
        $user = auth()->user();
        $userInfo = User::where('uuid', $uuid)->firstOrFail();

        $chats = Chat::where(function ($query) use ($uuid, $user) {
            $query->where(function ($q) use ($uuid, $user) {
                $q->where('from_user_id', $uuid)
                  ->where('to_user_id', $user->uuid);
            })->orWhere(function ($q) use ($uuid, $user) {
                $q->where('from_user_id', $user->uuid)
                  ->where('to_user_id', $uuid);
            });
        })->with(['fromUser', 'toUser'])->get();

        $users = $this->getUserRoleChatTargets();

        return view('chats.view_chat', compact('users', 'userInfo', 'chats'));
    }

    public function store(Request $request)
    {

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
