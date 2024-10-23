<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ClassModel;
use App\Models\Comments;
use App\Models\Level;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use FFMpeg\FFMpeg;

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

    public function serveImage($uuid)
    {   
        $classModel = ClassModel::where('uuid', $uuid)->first();

        if($classModel && auth()->check()){
            
            $image = $classModel->getFirstMedia('video_img');

            if($image && auth()->check()){
                return response()->file($image->getPath(), [
                    'Content-Type' => $image->mime_type,
                ]);
            }
        }

        abort(403);
    }

    public function videos ()
    {
        $classes = ClassModel::with('media:id,model_id,collection_name')->get();
        $count = $classes->count();

        foreach ($classes as $class) {
            $class->description = Str::limit($class->description, 50, '...');
        }

        return $this->viewWithAuthName('classes.videos', compact('classes', 'count'));
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
        $user = auth()->user();

        $class = ClassModel::with('media')->where('uuid', $uuid)->firstOrFail();

        $levels = Level::with(['classes' => function ($query) {
            $query->with('media');
        }])->orderBy('id', 'asc')->get();


        $comments = Comments::where('class_id', $class->uuid)->with('user')->get();

        return view('classes.view_class', ['class' => $class, 'levels' => $levels, 'user' => $user, 'comments' => $comments]);
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
            'video_img' => 'nullable|image|max:2048',
            'video' => 'required|mimes:mp4,mov,avi|max:20000'
        ], [
            'level_id.required' => 'El nivel es obligatorio.',
            'title.required' => 'El título es obligatorio.',
            'description.required' => 'La descripción es obligatoria.',
            'video_img.image' => 'El archivo debe ser una imagen.',
            'video_img.max' => 'El tamaño de la imagen no debe exceder los 2MB.',
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
                $class->addMediaFromRequest('video')->toMediaCollection('videos', 'media');
            }

            if($request->hasFile('video_img')){
                $class->addMediaFromRequest('video_img')->toMediaCollection('video_img', 'media');
            }

            return redirect()->to('classes')->with('success', 'Clase subida exitosamente!');
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
