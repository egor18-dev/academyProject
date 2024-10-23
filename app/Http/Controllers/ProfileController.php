<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index(){

        $userData = auth()->user();

        return view('profile.view_profile', ['user' => $userData]);
    }

    public function serveImage($uuid)
    {   
        $user = auth()->user();
        if($uuid === $user->uuid){

            $image = $user->getFirstMedia('profile_image');

            if($image && auth()->check()){
                return response()->file($image->getPath(), [
                    'Content-Type' => $image->mime_type,
                ]);
            }
        }

        abort(403);
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
