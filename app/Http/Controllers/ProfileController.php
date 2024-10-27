<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\ClassModel;
use App\Models\UserVideoProgress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index(){

        $userData = auth()->user();
        $totalClasses = ClassModel::count();
        $userVideoProgress = UserVideoProgress::where("user_id", $userData->uuid)->count();

        return view('profile.view_profile', ['user' => $userData, 'totalClasses' => $totalClasses, 'userVideoProgress' => $userVideoProgress]);
    }

    public function serveImage($uuid)
    {   

        if($uuid){

            $user = User::where('uuid', $uuid)->first();

            $image = $user->getFirstMedia('profile_image');

            if($image && auth()->check()){
                return response()->file($image->getPath(), [
                    'Content-Type' => $image->mime_type,
                    'Cache-Control' => 'no-store, no-cache, must-revalidate',
                    'Pragma' => 'no-cache',
                    'Expires' => '0',
                ]);
            }
        }

        return redirect('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQXA-Uu5DzOUC3DEEh789elx46nvfe-0s-7xg&s');
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
