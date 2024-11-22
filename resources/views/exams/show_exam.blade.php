@extends('page')
@section('page')
<div class="container-fluid mt-3 top-exam">
    <div class="row">
        <div class="col-xl-12">
            <div class="card custom-card">
                <div class="card-header justify-content-between">
                    <div class="card-title">
                        {{$exam->title}}
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
<div class="container-fluid mt-3 bottom-exam" style="display: none">
    <div class="row">
        <div class="col-xl-12">
            <div class="card custom-card">
                <div class="card-header justify-content-between">
                    <div class="card-title">
                        <h5 class="exam-name"></h5>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row w-100 align-items-start justify-content-between">
                        <div class="col-lg-8">
                            <div class="left">
                                <h6 class="text-muted fw-normal points">
                                    Puntos: 8 / 10
                                </h6>
                                <p class="text-muted fw-normal duration">
                                    Duración: 7min 39s
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="wrapper">
                                <div class="circular-bar">
                                    <div class="percent">0%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn btn-primary btn-sm">Volver</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        const form = $('form');
        let formChecked = false;
        let time = 0;

        const formatDuration = (seconds) => `${Math.floor(seconds / 60)}min ${seconds % 60}s`;

        const timeInterval = setInterval(() => time++, 1000);

        form.on('submit', function (e) {
            e.preventDefault();
            clearInterval(timeInterval);

            if (!formChecked) {
                const user_id = @json($user->uuid);
                const questions = @json($exam->questions);
                const level_id = @json($exam->level_id);
                const userName = @json($user->name);
                let correctAnswers = 0;

                $.each(questions, function (index, element) {
                    const selectedOption = $(`input[name="question-${index}"]:checked`);
                    if (selectedOption.length) {
                        const isCorrect = element.answer === selectedOption.val();
                        selectedOption.closest('label').css('color', isCorrect ? 'green' : 'red');
                        if (isCorrect) correctAnswers++;
                    }
                });

                const percentMark = (correctAnswers / questions.length) * 100;
                const percentCircle = Math.max((correctAnswers / questions.length) * 360, 10);

                const colors = ["#FF4C4C", "#FFD966", "#4CAF50"];
                const color = percentMark < 50 ? colors[0] : (percentMark <= 59 ? colors[1] : colors[2]);

                $('.circular-bar .percent').text(`${percentMark}%`);
                $('.points').text(`Puntos: ${correctAnswers} / ${questions.length}`);
                $('.duration').text(formatDuration(time));
                $('.exam-name').text(userName);

                let initialTime = 0;
                const speed = 3;
                const timer = setInterval(() => {
                    initialTime++;
                    $('.circular-bar').css('background', `conic-gradient(${color} ${initialTime}deg, #fff 0deg)`);
                    if (initialTime >= percentCircle) clearInterval(timer);
                }, speed);

                $('.bottom-exam').fadeIn(400);
                formChecked = true;

                if(percentMark >= 50){
                    $.ajax({
                    url: "/exams/completeExam", 
                    type: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        user_id: user_id,
                        level_id: level_id
                    },
                    success: function(response) {
                        console.log("Respuesta del servidor:", response);
                    },
                    error: function(xhr, status, error) {
                        console.error("Error en la petición:", status, error);
                    }
                });
                }

            }
        });
    });
</script>

