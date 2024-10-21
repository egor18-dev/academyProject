@extends('welcome')
@section('content')

    <div class="row w-100 min-vh-100 bg-white">
        <div class="col-lg-9 d-flex flex-column videos p-0 ">
            @if($class->video_stream)
                    <video controls loop class="rounded">
                        <source src="{{ route('classes.stream', ['id' => $class->id]) }}" type="video/mp4">
                        Tu navegador no soporta la reproducción de videos.
                    </video>
                    <div class="info">
                        <h5>{{$class->title}}</h5>
                        <p>
                            {{$class->description}}
                        </p>
                    </div>
                        <div class="container-fluid px-0 comments">
                          <div class="row d-flex justify-content-start">
                            <div class="col-md-12 col-lg-10 col-xl-8 p-0">
                              <div class="card">
                                <div class="card-body">
                                  <div class="d-flex flex-start align-items-center">
                                    <img class="rounded-circle shadow-1-strong me-3"
                                      src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQXA-Uu5DzOUC3DEEh789elx46nvfe-0s-7xg&s" alt="avatar" width="60"
                                      height="60" />
                                    <div>
                                      <h6 class="fw-bold text-primary mb-1">Egor Santamaria</h6>
                                      <p class="text-muted small mb-0">
                                        21/10/2024
                                      </p>
                                    </div>
                                  </div>
                      
                                  <p class="mt-3 mb-4 pb-2">
                                    ¡He aprendido muchísimo sobre trading y mercados financieros! Ahora entiendo mejor cómo funcionan y cómo operar diferentes tipos de activos. ¡Recomendado!
                                  </p>
                                </div>
                                <div class="card-footer border-0" style="background-color: #f8f9fa;">
                                  <div class="d-flex flex-start w-100">
                                    <img class="rounded-circle shadow-1-strong me-3"
                                      src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQXA-Uu5DzOUC3DEEh789elx46nvfe-0s-7xg&s" alt="avatar" width="40"
                                      height="40" />
                                    <div class="form-outline w-100">
                                      <textarea class="form-control" id="textAreaExample" rows="4"
                                        style="background: #fff;"></textarea>
                                      <label class="form-label" for="textAreaExample">Mensaje</label>
                                    </div>
                                  </div>
                                  <div class="float-end">
                                    <button type="button" class="btn btn-primary btn-sm">Comentar</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      
            @endif
        </div>
        <div class="col-lg-3 all-videos p-0">
            <h5>Contenido de la academia</h5>
            @foreach ($levels as $index => $level) <!-- Usamos $index para generar un ID único -->
            <div class="accordion w-100 p-0" id="accordionPanelsStayOpenExample{{ $index }}"> <!-- ID único por nivel -->
                <div class="accordion-item w-100">
                    <h2 class="accordion-header p-0" id="panelsStayOpen-headingOne{{ $index }}">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne{{ $index }}" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne{{ $index }}">
                            {{ $level->name }}
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne{{ $index }}" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne{{ $index }}">
                        <div class="accordion-body">
                            @foreach($level->classes as $class)
                            <div class="class-item">
                                <ul>
                                    <li>
                                        <a href="{{ route('classes.view', ['uuid' => $class->uuid]) }}">{{ $class->title }}</a>
                                    </li>
                                </ul>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
</div>

@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

