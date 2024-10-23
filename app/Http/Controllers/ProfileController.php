<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){

        $userData = auth()->user();

        return view("profile.view_profile", ['user' => $userData]);
    }
}
