<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ClassModel;
use App\Models\Level;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ClassController extends Controller
{
    // Método privado que retorna la vista con el nombre del usuario autenticado
    private function viewWithAuthName($view, $data = [])
    {
        return view($view, array_merge($data, ['name' => auth()->user()->name]));
    }

    public function index() 
    {
        $classes = ClassModel::with('media')->get(); 
        $count = ClassModel::count();

        foreach ($classes as $class) {
            $videos = $class->getMedia('videos');
            $class->description = Str::limit($class->description, 50, '...');
            $class->videos = $videos;
        }
    
        return $this->viewWithAuthName('classes.view_classes', [
            'classes' => $classes,
            'count' => $count
        ]);
    }

    public function streamVideo($id)
    {
        $class = ClassModel::findOrFail($id);
        $video = $class->getFirstMedia('videos');

        if ($video) {
            return $video->toResponse(request());
        }

        abort(404, 'Video no encontrado');
    }

    public function view($uuid)
    {
        $class = ClassModel::with('media')->where('uuid', $uuid)->firstOrFail();

        $levels = Level::with(['classes' => function ($query) {
            $query->with('media');
        }])->orderBy('id', 'asc')->get();

        $video = $class->getFirstMedia('videos');
        $class->video_stream = $video ? $video->getUrl() : null;

        return $this->viewWithAuthName('classes.view_class', [
            'class' => $class,
            'levels' => $levels
        ]);
    }

    public function create()
    {
        $levels = Level::all();
        return $this->viewWithAuthName('classes.add_class', ['levels' => $levels]);
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

        $class = ClassModel::create([
            'level_id' => $request->level_id,
            'title' => $request->title,
            'description' => $request->description,
        ]);

        if ($request->hasFile('video')) {
            $class->addMediaFromRequest('video')->toMediaCollection('videos');
        }

        return redirect()->back()->with('success', 'Clase subida exitosamente!');
    }

    public function show($uuid)
    {
        // Implementar si es necesario
    }

    public function update(Request $request, $uuid)
    {
        // Implementar si es necesario
    }

    public function delete($uuid)
    {
        $class = ClassModel::where('uuid', $uuid)->firstOrFail();

        if ($class) {
            $removedClass = $class->delete();

            return $removedClass
                ? redirect()->back()->with('success', "Clase $class->name eliminada correctamente")
                : redirect()->back()->withErrors(['error' => 'Error al eliminar la clase']);
        }

        return redirect()->back()->withErrors(['error' => 'Clase no encontrada']);
    }
}
