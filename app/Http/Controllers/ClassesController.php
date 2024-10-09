<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassModel;
use App\Models\Level;

class ClassesController extends Controller
{
    public function retrieveClasses(){
        $classes = ClassModel::paginate(10);
        return view('classes/view_classes', ['classes' => $classes]);
    }

    public function updateClass(){

    }

    public function retrieveClass(){

    }

    public function dashboardCreateClass(){
        $levels = Level::all();
        return view('classes/add_class', ['levels' => $levels]);
    }
}
