<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassModel;
use App\Models\Level;
use Illuminate\Support\Facades\Validator;

class ClassesController extends Controller
{
    public function retrieveClasses(){
        $classes = ClassModel::paginate(10);
        return view('classes/view_classes', ['classes' => $classes]);
    }
    //display create class
    public function dashboardCreateClass(){
        $levels = Level::all();
        return view('classes/add_class', ['levels' => $levels]);
    }
    //create the class
    public function addClass(Request $request){
        $validator = Validator::make($request->all(),[
            'title' => 'required',
            'level' => 'required',
            'videoLink' => 'required|url',
        ], [
            'title.required' => 'El título es obligatorio.',
            'level.required' => 'El nivel es obligatorio.',
            'videoLink.required' => 'El vídeo es obligatorio.',
            'videoLink.url' => 'Debes ingresar una URL válida.',
        ]);

        if($validator->fails()){
            return back()->withInput()->withErrors($validator);
        }

        $levelParts = explode(' ', $request->level);
        $levelId = end($levelParts);

        ClassModel::create([
            'title'=> $request->title,
            'level_id'=> $levelId,
            'video_url'=> $request->videoLink
        ]);

        return redirect()->to('classes');
    }

    public function updateClass(){

    }

    public function retrieveClass(){

    }

}
