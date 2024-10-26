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
        $user = auth()->user();

        return $this->viewWithAuthName('users.view_users', [
            'users' => $users,
            'user' => $user,
            'user' => $user,
            'count' => User::count()
        ]);
    }

    public function enter(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ], [
            'email.required' => 'El campo de correo electrónico es obligatorio.',
            'email.email' => 'Por favor, introduce un correo electrónico válido.',
            'password.required' => 'El campo de contraseña es obligatorio.',
            'password.min' => 'La contraseña debe tener al menos 8 caracteres.',
        ]);

        $credentials = $request->only(['email', 'password']);

        if (Auth::attempt($credentials, $request->has('remember'))) {
            return redirect()->route('profile.index');
        }

        return redirect()->back()->withErrors(['error' => 'Las credenciales no coinciden con nuestros registros.']);
    }

    public function create()
    {
        if (!Auth::check() || !Auth::user()->hasAnyRole(['Administrador', 'Editor'])) {
            abort(403, 'No tienes permiso para acceder a esta página.');
        }

        $roles = Role::all();
        return $this->viewWithAuthName('users.add_user', ['roles' => $roles]);
    }

    public function showEnterForm()
    {
        return view('auth.sign_in');
    }

    public function showCreateForm()
    {
        return view('auth.sign_up');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'surnames' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8'
        ], [
            'name.required' => 'El nombre es obligatorio.',
            'surnames.required' => 'Los apellidos son obligatorios.',
            'email.required' => 'El correo electrónico es obligatorio.',
            'email.email' => 'Debes ingresar un correo electrónico válido.',
            'password.required' => 'La contraseña es obligatoria.',
            'password.min' => 'La contraseña debe tener al menos :min caracteres.'
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }

        $roleName = $request->role;

        if ($roleName === 'Administrador') {
            if (!auth()->user()->hasRole('Administrador')) {
                return redirect()->route('users.index')->withErrors(['error' => 'No tienes permiso para asignar el rol de Administrador.']);
            }
        }

        $user = User::create([
            'name' => $request->name,
            'surnames' => $request->surnames,
            'email' => $request->email,
            'password' => Hash::make($request->password, ['rounds' => 12])
        ]);

        $role = $roleName ? Role::where('name', $roleName)->first() : null;
        $user->assignRole($role ? $role->name : 'Estudiante');

        return redirect()->route('users.showEnterForm');
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

    public function update(Request $request, $uuid)
    {
        if (!Auth::check()) {
            abort(403, 'No tienes permiso para acceder a esta página.');
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'surnames' => 'required',
            'email' => 'required|email',
            'profile_image' => 'nullable|image|max:2048'
        ], [
            'name.required' => 'El nombre es obligatorio.',
            'surnames.required' => 'Los apellidos son obligatorios.',
            'email.required' => 'El correo electrónico es obligatorio.',
            'email.email' => 'Debes ingresar un correo electrónico válido.',
            'profile_image.image' => 'El archivo debe ser una imagen.',
            'profile_image.max' => 'El tamaño de la imagen no debe exceder los 2MB.',
        ]);

        $firstPart = explode('.', $request->route()->getName())[0];

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }

        $user = User::where('uuid', $uuid)->first();

        if (!$user) {
            return redirect()->to('users')->withErrors(['error' => 'Usuario no encontrado']);
        }

        $user->fill($request->only(['name', 'surnames', 'email']));
        $user->save();

        if ($request->role) {
            $user->syncRoles([$request->role]);
        }

        if($request->hasFile('profile_image')){
            if($user->hasMedia('profile_image')){
                $user->clearMediaCollection('profile_image');
            }

            $user->addMediaFromRequest('profile_image')->toMediaCollection('profile_image', 'media');
        }

        return redirect()->to($firstPart)->with('success', 'Usuario actualizado con éxito.');
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
