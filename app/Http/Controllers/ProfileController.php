<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){

        $userData = auth()->user();

        return view('profile.view_profile', ['user' => $userData]);
    }

    public function show ($uuid)
    {
        $userData = auth()->user();

        if(auth()->user()->uuid == $uuid){
            return view('profile.update_profile', ['user' => $userData]);
        }
        
        abort(403);
    }
}
