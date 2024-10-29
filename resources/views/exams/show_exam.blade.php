@extends('page')
@section('page')
<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-xl-12">
            <div class="card custom-card">
                <div class="card-header justify-content-between">
                    <div class="card-title">
                        Hacer Examen
                    </div>
                </div>
                <div class="card-body">
                    <div class="panel panel-understanding-check">
                        <form class="multipleChoice">
                            @foreach ($exam->questions as $key => $question)
                            <div class="form-group pt-2">
                                <label for="radio" class="fw-bold">({{$key + 1}}) {{$question->question}}</label>
                                @if ($question->type === "verdadero_falso")
                                <div class="radio py-2">
                                    <label>
                                        <input type="radio" data-question-number="{{$key}}" name="question-{{$key}}" id="bsr-radios-97468235242" data-alert-type="alert-danger" data-comment="<strong>Incorrect</strong><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit." value="Verdadero">
                                        Verdadero
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" data-question-number="{{$key}}" name="question-{{$key}}" id="bsr-radios-97468235243" data-alert-type="alert-success" data-comment="<strong>Correct</strong><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit." value="Falso">
                                        Falso
                                    </label>
                                </div>
                                @elseif($question->type === "opción_múltiple")
                                    @foreach ($question->allElements as $element)
                                    <div class="radio pt-3">
                                        <label>
                                            <!-- Asigna el texto de la opción como valor -->
                                            <input type="radio" data-question-number="{{$key}}" name="question-{{$key}}" id="bsr-radios-97468235243" data-alert-type="alert-success" data-comment="<strong>Correct</strong><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit." value="{{$element}}">
                                            {{$element}}
                                        </label>
                                    </div>
                                    @endforeach
                                @endif
                            </div>
                            @endforeach
                            <div class="pt-3">
                                <button type="submit" class="btn btn-primary btn-sm" class="mt-3">Corregir</button>
                            </div>
                        </form>
                        <div class="multiple-choice-alert alert hidden" id="87518975480" role="alert"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
    window.addEventListener('load', () => {
        const form = document.querySelector('form');

        form.addEventListener('submit', (e) => {
            e.preventDefault();

            const questions = @json($exam->questions);

            questions.forEach((element, index) => {
                const selectedOption = form.querySelector(`input[name="question-${index}"]:checked`);
                const val = selectedOption.value ? selectedOption.value : '';

                if(selectedOption.answer === val){
                    console.log("True");
                }
            });

        });
    });
</script>
