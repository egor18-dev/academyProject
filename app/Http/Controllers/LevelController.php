<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Level;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LevelController extends Controller
{
    public function index() 
    {
        $levels = Level::paginate(5);
        return view('levels.view_levels', ['levels' => $levels, 'count' => $levels->count()]);
    }

    public function create()
    {
        return view('levels.add_level');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'description' => 'required',
        ], [
            'name.required' => 'El nombre es obligatorio.',
            'description.required' => 'La descripción son obligatorios.',
        ]);

        if($validator->fails()){
            return back()->withInput()->withErrors($validator);
        }

        $level = Level::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('levels.index');
    }

    public function show($uuid)
    {
        $level = Level::where('uuid', $uuid)->first();
        if (!$level) {
            return redirect()->to('dashboard');
        }
        
        return view('levels.update_level', ['level' => $level]);
    }

    public function update(Request $request, $uuid)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'description' => 'required',
        ], [
            'name.required' => 'El nombre es obligatorio.',
            'description.required' => 'La descripción son obligatorios.',
        ]);

        if($validator->fails()){
            return back()->withInput()->withErrors($validator);
        }

        $level = Level::where('uuid', $uuid)->first();

        if(!$level) {
            return redirect()->back()->withErrors(['error' => 'Nivel no encontrado']);
        }

        $level->fill($request->only(['name', 'description']));
        $level->save();

        return redirect()->back()->with('success', 'Nivel actualizado con éxito.');
    }

    public function delete($uuid)
    {
        $level = Level::where('uuid', $uuid)->firstOrFail();

        if($level){
            $removedLevel = $level->delete();

            return $removedLevel
            ? redirect()->back()->with('success', "Nivel $level->name eliminado correctamente") 
            : redirect()->back()->withErrors(['error' => 'Error al eliminar el nivel']);
        }
    
        return redirect()->back()->withErrors(['error' => 'Nivel no encontrado']);
    }
}
