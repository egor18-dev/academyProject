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
        $request->validate([
            'level_id' => 'required',
            'title' => 'required',
            'description' => 'required',
            'video' => 'required|mimes:mp4,mov,avi|max:20000'
        ], [
            'level_id.required' => 'El nivel es obligatorio.',
            'title.required' => 'El título es obligatorio.',
            'description.required' => 'La descripción es obligatoria.',
            'video.required' => 'El video es obligatorio.',
            'video.mimes' => 'El video debe ser un archivo de tipo: mp4, mov, avi.',
            'video.max' => 'El video no debe exceder los 20MB.'
        ]);

        $classes = ClassModel::create([
            'level_id' => $request->level_id,
            'title' => $request->title,
            'description' => $request->description,
        ]);
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
