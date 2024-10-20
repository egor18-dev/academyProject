<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ClassModel;
use App\Models\Level;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClassController extends Controller
{
    public function index() 
    {
        $classes = ClassModel::paginate(5);
        return view('classes.view_classes', ['classes' => $classes, 'count' => $classes->count()]);
    }

    public function create()
    {
        $levels = Level::all();

        return view('classes.add_class', ['levels' => $levels]);
    }


    public function store(Request $request)
    {

    }

    public function show($uuid)
    {

    }

    public function update(Request $request, $uuid)
    {

    }

    public function delete($uuid)
    {

    }
}
