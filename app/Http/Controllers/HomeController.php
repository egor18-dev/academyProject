<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ClassModel;

class HomeController extends Controller
{
    public function index ()
    {
        $classes = ClassModel::with('media')->get(); 
        $count = ClassModel::count();

        foreach ($classes as $class) {
            $videos = $class->getMedia('videos');
            $class->videos = $videos;
        }
    
        return view('home.view_home', ['classes' => $classes, 'count' => $count]);
    }
}
