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

class UserController extends Controller
{
    private function viewWithAuthName($view, $data = [])
    {
        return view($view, array_merge($data, ['name' => 'Egor']));
    }

    public function index() 
    {
        if (!Auth::check() || !Auth::user()->hasAnyRole(['Administrador', 'Editor'])) {
            abort(403, 'No tienes permiso para acceder a esta página.');
        }

        $users = User::paginate(5);

        return $this->viewWithAuthName('users.view_users', [
            'users' => $users,
            'count' => User::count()
        ]);
    }

    public function create()
    {
        if (!Auth::check() || !Auth::user()->hasAnyRole(['Administrador', 'Editor'])) {
            abort(403, 'No tienes permiso para acceder a esta página.');
        }

        $roles = Role::all();
        return $this->viewWithAuthName('users.add_user', ['roles' => $roles]);
    }

    public function show($uuid)
    {
        if (!Auth::check() || !Auth::user()->hasAnyRole(['Administrador', 'Editor'])) {
            abort(403, 'No tienes permiso para acceder a esta página.');
        }

        $user = User::where('uuid', $uuid)->first();
        if (!$user) {
            return redirect()->to('users.enter');
        }

        $roles = Role::all();
        $actualUserRole = $user->getRoleNames()->isNotEmpty() ? implode(', ', $user->getRoleNames()->toArray()) : 'Estudiante';

        return $this->viewWithAuthName('users.update_user', [
            'user' => $user,
            'roles' => $roles,
            'actualUserRole' => $actualUserRole
        ]);
    }

    public function delete($uuid)
    {
        if (!Auth::check() || !Auth::user()->hasAnyRole(['Administrador', 'Editor'])) {
            abort(403, 'No tienes permiso para acceder a esta página.');
        }

        $user = User::where('uuid', $uuid)->firstOrFail();

        if ($user) {
            $removedUser = $user->delete();

            return $removedUser
                ? redirect()->back()->with('success', "Usuario $user->name eliminado correctamente")
                : redirect()->back()->withErrors(['error' => 'Error al eliminar el usuario']);
        }

        return redirect()->back()->withErrors(['error' => 'Usuario no encontrado']);
    }
}
