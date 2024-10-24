@extends('page')
@section('page')
<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-xl-12">
            <div class="card custom-card">
                <div class="card-header justify-content-between">
                    <div class="card-title">
                        Preguntas para: <strong>{{ $exam->title }}</strong>
                    </div>
                    <div class="d-flex flex-wrap gap-2">
                        <a class="btn btn-primary btn-sm" href="{{ route('questions.create', ['examUuid' => $exam->uuid]) }}">Añadir Pregunta</a>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <th scope="col">Pregunta</th>
                                    <th scope="col">Tipo</th>
                                    <th scope="col">Respuesta Correcta</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($questions as $question)
                                    <tr class="crm-contact">
                                        <td>
                                            <span class="d-block fw-medium">{{ $question->question }}</span>
                                        </td>
                                        <td>
                                            <span class="d-block">{{ $question->type }}</span>
                                        </td>
                                        <td>
                                            <span class="d-block">{{ $question->answer }}</span>
                                        </td>
                                        <td>
                                            <div class="btn-list">
                                                <a href="{{ route('questions.show', ['examUuid' => $exam->uuid, 'questionUuid' => $question->uuid]) }}" class="btn btn-sm btn-warning">
                                                    Editar
                                                </a>
                                                <button class="btn btn-sm btn-danger removeBtn" onclick="removeQuestion('{{ $question->uuid }}', '{{ $question->question }}')">
                                                    Eliminar
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if(session('success'))
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-xl-12">
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            </div>
        </div>
    </div>
    @endif

    @if ($errors->has('error'))
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-xl-12">
                <div class="alert alert-danger" role="alert">
                    {{ $errors->first('error') }}
                </div>
            </div>
        </div>
    </div>
    @endif
</div>

@endsection
