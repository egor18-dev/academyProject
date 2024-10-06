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

    public function retrieveUsers () 
    {
        $users = User::all();

        return view('users/view_users', ['users' => $users]);
    }

    public function dashboardCreateUser ()
    {
        $roles = Role::all();
        return view('users/add_user', ['roles' => $roles]);
    }

    public function signUp ()
    {
        return view('auth/sign_up');
    }

    public function addUser (Request $request)
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
            'name' =>$request->name,
            'surnames' => $request->surnames,
            'email' => $request->email,
            'password' => Hash::make($request->password, ['rounds' => 12])
        ]);

        $user->assignRole($request->role ? $request->role : 'Estudiante');

        return redirect()->to('users');

    }

    public function viewUser (Request $request, $uuid)
    {
        $user = User::where('uuid', $uuid)->first();

        if(!$user) return redirect()->to('dashboard');

        return view('users/view_user', ['user' => $user]);
    }
}
