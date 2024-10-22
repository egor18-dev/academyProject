@extends('welcome')
@section('content')
  <header class="w-100 video-header" style="background: #2D2F31">
    <h5 class="pb-0">{{$class->title}}</h5>
    <span>
      <a href="#" class="d-flex align-items-center">Compartir <svg width="20px" height="20px" viewBox="-0.5 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M13.47 4.13998C12.74 4.35998 12.28 5.96 12.09 7.91C6.77997 7.91 2 13.4802 2 20.0802C4.19 14.0802 8.99995 12.45 12.14 12.45C12.34 14.21 12.79 15.6202 13.47 15.8202C15.57 16.4302 22 12.4401 22 9.98006C22 7.52006 15.57 3.52998 13.47 4.13998Z" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg></a>
    </span>
  </header>
  <div class="row w-100 min-vh-100 justify-content-end video-playlist">
      <div class="col-lg-10 video p-0">
        @if($class->video_stream)
          <video controls loop>
              <source src="{{ route('classes.stream', ['id' => $class->id]) }}" type="video/mp4">
              Tu navegador no soporta la reproducción de videos.
          </video>
          <h5>Descripción</h5>
          <div class="row w-100">
            <div class="col-lg-6">
              <p>
                {{$class->description}}
              </p>
            </div>
          </div>
        @endif
      </div>
      <div class="col-lg-2 all-videos p-0">
            @foreach ($levels as $index => $level) 
            <div class="accordion w-100 p-0" id="accordionPanelsStayOpenExample{{ $index }}">
                <div class="accordion-item w-100">
                    <h2 class="accordion-header p-0" id="panelsStayOpen-headingOne{{ $index }}">
                        <button class="accordion-button bg-primary text-white" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne{{ $index }}" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne{{ $index }}">
                            {{ $level->name }} - ({{count($level->classes)}})
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne{{ $index }}" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne{{ $index }}">
                          <ol >
                           @foreach($level->classes as $class)
                                  <li class="">
                                    <a href="{{ route('classes.view', ['uuid' => $class->uuid]) }}">{{ $class->title }}</a>
                                  </li>
                            
                            @endforeach
                          </ol>
                    </div>
                </div>
            </div>
            @endforeach
      </div>
    </div>
    
  </div>

@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

{{-- 
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
             --}}