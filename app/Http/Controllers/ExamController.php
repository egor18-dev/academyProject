<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Exam;
use App\Models\Level;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ExamController extends Controller
{
    private function viewWithAuthName($view, $data = [])
    {
        return view($view, array_merge($data, ['name' => 'Egor']));
    }

    public function index()
    {
        $exams = Exam::paginate(5);

        foreach($exams as $exam)
        {
            $exam->description = Str::limit($exam->description, 50, '...');
        }

        return $this->viewWithAuthName('exams.view_exams', [
            'exams' => $exams,
            'count' => $exams->count()
        ]);
    }

    public function create()
    {
        $levels = Level::all(); // Obtener todos los niveles para que el usuario pueda seleccionar uno
        return $this->viewWithAuthName('exams.add_exam', ['levels' => $levels]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'level_id' => 'required|exists:levels,uuid',
        ], [
            'title.required' => 'El título es obligatorio.',
            'description.required' => 'La descripción es obligatoria.',
            'level_id.required' => 'El nivel es obligatorio.',
            'level_id.exists' => 'El nivel seleccionado no es válido.',
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }

        $exam = Exam::create([
            'title' => $request->title,
            'description' => $request->description,
            'level_id' => $request->level_id,
        ]);

        return redirect()->route('exams.index');
    }

    public function show($uuid)
    {
        $exam = Exam::where('uuid', $uuid)->first();
        if (!$exam) {
            return redirect()->to('dashboard');
        }

        $levels = Level::all();
        return $this->viewWithAuthName('exams.update_exam', ['exam' => $exam, 'levels' => $levels]);
    }

    public function update(Request $request, $uuid)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'level_id' => 'required|exists:levels,uuid',
        ], [
            'title.required' => 'El título es obligatorio.',
            'description.required' => 'La descripción es obligatoria.',
            'level_id.required' => 'El nivel es obligatorio.',
            'level_id.exists' => 'El nivel seleccionado no es válido.',
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }

        $exam = Exam::where('uuid', $uuid)->first();

        if (!$exam) {
            return redirect()->to('exams')->withErrors(['error' => 'Examen no encontrado']);
        }

        $exam->fill($request->only(['title', 'description', 'level_id']));
        $exam->save();

        return redirect()->to('exams')->with('success', 'Examen actualizado con éxito.');
    }

    public function delete($uuid)
    {
        $exam = Exam::where('uuid', $uuid)->firstOrFail();

        if ($exam) {
            $removedExam = $exam->delete();

            return $removedExam
                ? redirect()->back()->with('success', "Examen {$exam->title} eliminado correctamente")
                : redirect()->back()->withErrors(['error' => 'Error al eliminar el examen']);
        }

        return redirect()->back()->withErrors(['error' => 'Examen no encontrado']);
    }

    public function showExam($uuid)
    {
       
    }
}
