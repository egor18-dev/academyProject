<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Level;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class LevelController extends Controller
{
    private function viewWithAuthName($view, $data = [])
    {
        return view($view, array_merge($data, ['name' => 'Egor']));
    }

    public function index()
    {
        if (!Auth::check() || !Auth::user()->hasAnyRole(['Administrador', 'Editor'])) {
            abort(403, 'No tienes permiso para acceder a esta página.');
        }

        $levels = Level::paginate(5);

        foreach ($levels as $level) {
            $level->description = Str::limit($level->description, 50, '...');
        }

        return $this->viewWithAuthName('levels.view_levels', [
            'levels' => $levels,
            'count' => $levels->count()
        ]);
    }

    public function create()
    {
        if (!Auth::check() || !Auth::user()->hasAnyRole(['Administrador', 'Editor'])) {
            abort(403, 'No tienes permiso para acceder a esta página.');
        }

        return $this->viewWithAuthName('levels.add_level');
    }

    public function store(Request $request)
    {
        if (!Auth::check() || !Auth::user()->hasAnyRole(['Administrador', 'Editor'])) {
            abort(403, 'No tienes permiso para acceder a esta página.');
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
        ], [
            'name.required' => 'El nombre es obligatorio.',
            'description.required' => 'La descripción es obligatoria.',
        ]);

        if ($validator->fails()) {
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
        if (!Auth::check() || !Auth::user()->hasAnyRole(['Administrador', 'Editor'])) {
            abort(403, 'No tienes permiso para acceder a esta página.');
        }

        $level = Level::where('uuid', $uuid)->first();
        if (!$level) {
            return redirect()->to('dashboard');
        }

        return $this->viewWithAuthName('levels.update_level', ['level' => $level]);
    }

    public function update(Request $request, $uuid)
    {
        if (!Auth::check() || !Auth::user()->hasAnyRole(['Administrador', 'Editor'])) {
            abort(403, 'No tienes permiso para acceder a esta página.');
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
        ], [
            'name.required' => 'El nombre es obligatorio.',
            'description.required' => 'La descripción es obligatoria.',
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }

        $level = Level::where('uuid', $uuid)->first();

        if (!$level) {
            return redirect()->to('levels')->withErrors(['error' => 'Nivel no encontrado']);
        }

        $level->fill($request->only(['name', 'description']));
        $level->save();

        return redirect()->to('levels')->with('success', 'Nivel actualizado con éxito.');
    }

    public function delete($uuid)
    {
        if (!Auth::check() || !Auth::user()->hasAnyRole(['Administrador', 'Editor'])) {
            abort(403, 'No tienes permiso para acceder a esta página.');
        }

        $level = Level::where('uuid', $uuid)->firstOrFail();

        if ($level) {
            $removedLevel = $level->delete();

            return $removedLevel
                ? redirect()->back()->with('success', "Nivel $level->name eliminado correctamente")
                : redirect()->back()->withErrors(['error' => 'Error al eliminar el nivel']);
        }

        return redirect()->back()->withErrors(['error' => 'Nivel no encontrado']);
    }
}
