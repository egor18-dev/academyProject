<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() 
    {
        $users = User::paginate(5);
        return view('users.view_users', ['users' => $users]);
    }

    public function create()
    {
        $roles = Role::all();
        return view('users.add_user', ['roles' => $roles]);
    }

    public function showSignUp()
    {
        return view('auth.sign_up');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
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
            'password.min' => 'La contraseña debe tener al menos :min caracteres.', 
        ]);

        if($validator->fails()){
            return back()->withInput()->withErrors($validator);
        }

        $user = User::create([
            'name' => $request->name,
            'surnames' => $request->surnames,
            'email' => $request->email,
            'password' => Hash::make($request->password, ['rounds' => 12])
        ]);

        $user->assignRole($request->role ?: 'Estudiante');

        return redirect()->route('users.index');
    }

    public function show($uuid)
    {
        $user = User::where('uuid', $uuid)->first();
        if (!$user) {
            return redirect()->to('dashboard');
        }
        
        $roles = Role::all();
        $actualUserRole = $user->getRoleNames()->isNotEmpty() ? implode(', ', $user->getRoleNames()->toArray()) : 'Estudiante';

        return view('users.update_user', ['user' => $user, 'roles' => $roles, 'actualUserRole' => $actualUserRole]);
    }

    public function update(Request $request, $uuid)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'surnames' => 'required',
            'email' => 'required|email',
        ], [
            'name.required' => 'El nombre es obligatorio.',
            'surnames.required' => 'Los apellidos son obligatorios.',
            'email.required' => 'El correo electrónico es obligatorio.',
            'email.email' => 'Debes ingresar un correo electrónico válido.',
        ]);

        if($validator->fails()){
            return back()->withInput()->withErrors($validator);
        }

        $user = User::where('uuid', $uuid)->first();

        if(!$user){
            return redirect()->back()->withErrors(['user' => 'Usuario no encontrado']);
        }

        $user->fill($request->only(['name', 'surnames', 'email']));
        $user->save();

        if ($request->role) {
            $user->syncRoles([$request->role]);
        }

        return redirect()->back()->with('success', 'Usuario actualizado con éxito.');
    }

    public function delete($uuid)
    {
        $user = User::where('uuid', $uuid)->firstOrFail();

        if($user){
            $removedUser = $user->delete();

            return $removedUser === true ? redirect()->back()->with('success', 'Usuario eliminado correctamente') : redirect()->back()->withErrors(['error' => 'Error al eliminar el usuario']);
        }

        return redirect()->to('users');
    }
}
