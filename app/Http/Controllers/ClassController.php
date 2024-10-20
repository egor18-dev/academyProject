<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ClassModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClassController extends Controller
{
    public function index() 
    {
        $classes = ClassModel::paginate(5);
        return view('levels.view_levels', ['levels' => $classes, 'count' => $classes->count()]);
    }

    public function create()
    {
        return view('classes.add_level');
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
