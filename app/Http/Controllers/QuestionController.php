<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\Exam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class QuestionController extends Controller
{
    private function viewWithAuthName($view, $data = [])
    {
        return view($view, array_merge($data, ['name' => 'Egor']));
    }

    public function index($examUuid)
    {
        // Verificación de permisos
        if (!auth()->user()->hasAnyRole(['Administrador', 'Editor'])) {
            abort(403, 'No tienes permisos para acceder a esta sección.');
        }

        $exam = Exam::where('uuid', $examUuid)->firstOrFail();
        $questions = $exam->questions()->paginate(5);

        return $this->viewWithAuthName('questions.view_questions', [
            'questions' => $questions,
            'exam' => $exam,
            'count' => $questions->count()
        ]);
    }

    public function create($examUuid)
    {
        if (!auth()->user()->hasAnyRole(['Administrador', 'Editor'])) {
            abort(403, 'No tienes permisos para crear preguntas.');
        }

        $exam = Exam::where('uuid', $examUuid)->firstOrFail();
        return $this->viewWithAuthName('questions.add_question', ['exam' => $exam]);
    }

    public function store(Request $request, $examUuid)
    {
        if (!auth()->user()->hasAnyRole(['Administrador', 'Editor'])) {
            abort(403, 'No tienes permisos para almacenar preguntas.');
        }

        $exam = Exam::where('uuid', $examUuid)->firstOrFail();

        $validator = Validator::make($request->all(), [
            'question' => 'required',
            'type' => 'required',
            'options' => 'nullable|json',
            'answer' => 'required',
        ], [
            'question.required' => 'La pregunta es obligatoria.',
            'type.required' => 'El tipo de pregunta es obligatorio.',
            'answer.required' => 'La respuesta correcta es obligatoria.',
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }

        Question::create([
            'exam_id' => $exam->uuid,
            'question' => $request->question,
            'type' => $request->type,
            'options' => $request->options,
            'answer' => $request->answer,
        ]);

        return redirect()->route('questions.index', ['examUuid' => $examUuid]);
    }

    public function show($examUuid, $questionUuid)
    {
        if (!auth()->user()->hasAnyRole(['Administrador', 'Editor'])) {
            abort(403, 'No tienes permisos para ver esta pregunta.');
        }

        $exam = Exam::where('uuid', $examUuid)->firstOrFail();
        $question = Question::where('uuid', $questionUuid)->firstOrFail();

        return $this->viewWithAuthName('questions.update_question', [
            'question' => $question,
            'exam' => $exam
        ]);
    }

    public function update(Request $request, $examUuid, $questionUuid)
    {
        if (!auth()->user()->hasAnyRole(['Administrador', 'Editor'])) {
            abort(403, 'No tienes permisos para actualizar esta pregunta.');
        }

        $exam = Exam::where('uuid', $examUuid)->firstOrFail();
        $question = Question::where('uuid', $questionUuid)->firstOrFail();

        $validator = Validator::make($request->all(), [
            'question' => 'required',
            'type' => 'required',
            'options' => 'nullable|json',
            'answer' => 'required',
        ], [
            'question.required' => 'La pregunta es obligatoria.',
            'type.required' => 'El tipo de pregunta es obligatorio.',
            'answer.required' => 'La respuesta correcta es obligatoria.',
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }

        $question->fill($request->only(['question', 'type', 'options', 'answer']));
        $question->save();

        return redirect()->route('questions.index', ['examUuid' => $examUuid])->with('success', 'Pregunta actualizada con éxito.');
    }

    public function delete($examUuid, $questionUuid)
    {
        if (!auth()->user()->hasAnyRole(['Administrador', 'Editor'])) {
            abort(403, 'No tienes permisos para eliminar esta pregunta.');
        }

        $exam = Exam::where('uuid', $examUuid)->firstOrFail();
        $question = Question::where('uuid', $questionUuid)->firstOrFail();

        if ($question) {
            $removedQuestion = $question->delete();

            return $removedQuestion
                ? redirect()->back()->with('success', "Pregunta eliminada correctamente")
                : redirect()->back()->withErrors(['error' => 'Error al eliminar la pregunta']);
        }

        return redirect()->back()->withErrors(['error' => 'Pregunta no encontrada']);
    }
}
