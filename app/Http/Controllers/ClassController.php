<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ClassModel;
use App\Models\Level;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ClassController extends Controller
{
    private function viewWithAuthName($view, $data = [])
    {
        return view($view, array_merge($data, ['name' => 'Egor']));
    }

    private function getCachedLevels()
    {
        return Cache::remember('levels', 60, function () {
            return Level::with(['classes' => function ($query) {
                $query->with('media:id,model_id,collection_name');
            }])->orderBy('id', 'asc')->get();
        });
    }

    public function index()
    {
        $classes = ClassModel::with('media:id,model_id,collection_name')->get();
        $count = $classes->count();

        foreach ($classes as $class) {
            $videos = $class->getMedia('videos');
            $class->description = Str::limit($class->description, 50, '...');
            $class->videos = $videos;
        }

        return $this->viewWithAuthName('classes.view_classes', compact('classes', 'count'));
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
        $class = ClassModel::with('media:id,model_id,collection_name')->where('uuid', $uuid)->firstOrFail();
        $levels = $this->getCachedLevels();
        $video = $class->getFirstMedia('videos');
        $class->video_stream = $video ? $video->getUrl() : '';

        return $this->viewWithAuthName('classes.view_class', compact('class', 'levels'));
    }

    public function create()
    {
        $levels = $this->getCachedLevels();
        return $this->viewWithAuthName('classes.add_class', compact('levels'));
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

        try {
            if ($request->hasFile('video')) {
                $class->addMediaFromRequest('video')->toMediaCollection('videos');
                return redirect()->to('classes')->with('success', 'Clase subida exitosamente!');
            }
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Error al subir el video: ' . $e->getMessage()]);
        }
    }

    public function delete($uuid)
    {
        $class = ClassModel::where('uuid', $uuid)->firstOrFail();
        $removedClass = $class->delete();

        return $removedClass
            ? redirect()->back()->with('success', "Clase $class->name eliminada correctamente")
            : redirect()->back()->withErrors(['error' => 'Error al eliminar la clase']);
    }
}
