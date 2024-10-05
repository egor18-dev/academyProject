<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function dashboardCreateUser ()
    {
        $roles = Role::all();
        return view('users/add_user', ['roles' => $roles]);
    }
}
