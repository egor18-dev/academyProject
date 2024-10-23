@extends('page')
@section('page')
<section class="container-fluid pt-3">
         <div class="row">
             <div class="col-xxl-8">
                 <div class="row">
                     <div class="col-xl-12 all-videos">
                         <div class="card custom-card">
                             <div class="card-body pb-0">
                                  <video controls loop>
                                    <source src="{{ route('classes.stream', ['id' => $class->id]) }}" type="video/mp4">
                                    Tu navegador no soporta la reproducción de videos.
                                </video>
                                 <div class="d-flex align-items-center justify-content-between mb-3 mt-3 flex-wrap gap-2">
                                     <p class="h5 fw-semibold mb-0">{{$class->title}}</p>
                                     <div class="d-flex align-items-center">
                                         {{-- <span class="avatar avatar-sm avatar-rounded me-2 p-1 bg-gray-300">
                                             <img src="../assets/images/faces/12.jpg" alt="">
                                         </span> --}}
                                         <div>
                                             <p class="mb-0 fw-medium">EgmaSolutions - <span class="fs-12 text-muted fw-normal">{{$class->created_at}}</span></p>
                                             <p class="mb-0 text-muted"></p>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="card-body p-4 pt-0">
                                 <h6 class="fw-semibold">
                                     Descripción
                                 </h6>
                                 <p class="mb-4">
                                  {{$class->description}}
                                </p>
                                 <blockquote class="blockquote custom-blockquote blog-blockquote primary mb-4 text-center">
                                     <h6 class="lh-base">Tendrás que sacrificar algo para llegar al siguiente nivel. El éxito es costoso, y si no estás dispuesto a pagar el precio, no lo conseguirás</h6>
                                     <footer class="blockquote-footer mt-3 fs-14 text-muted mb-0"><cite title="Source Title">Eric Thomas</cite></footer>
                                     <span class="quote-icon"><i class="ri-chat-quote-fill"></i></span>
                                 </blockquote>
                                 <p class="mb-0">
                                  El trading no es solo una actividad financiera, es un viaje personal lleno de desafíos, aprendizaje constante y crecimiento. Cada gráfico, cada vela, y cada operación representa una oportunidad, no solo para ganar dinero, sino para aprender más sobre ti mismo, tu disciplina, y tu capacidad para enfrentar la incertidumbre.
                                </p>
                             </div>
                         </div>
                     </div>
                     <div class="col-xl-12">
                         <div class="card custom-card overflow-hidden">
                             <div class="card-header">
                                 <div class="card-title">
                                     Comments
                                 </div>
                             </div>
                             <div class="card-body p-0">
                                 <ul class="list-group list-group-flush" id="blog-details-comment-list">
                                     <li class="list-group-item border-0 border-bottom">
                                         <div class="d-flex align-items-start gap-3 flex-wrap">
                                             <div>
                                                 <span class="avatar avatar-lg avatar-rounded  p-1 bg-light borde">
                                                     <img src="../assets/images/faces/3.jpg" alt="">
                                                 </span>
                                             </div>
                                             <div class="flex-fill w-50">
                                                 <div class="p-3 bg-light border rounded">
                                                     <span class="fw-medium d-block mb-1">TechEnthusiast21</span>
                                                     <span class="d-block mb-3 text-muted">Wow, these 3D images are mind-blowing! The depth and realism are incredible. It's like stepping into another dimension.</span>
                                                     <div class="btn-list">
                                                         <button class="btn btn-sm btn-primary-light btn-wave">Reply<i class="ri-reply-line ms-1"></i></button>
                                                         <button class="btn btn-sm btn-secondary-light btn-wave">Report<i class="ri-error-warning-line ms-1"></i></button>
                                                     </div>
                                                 </div>
                                                 <div class="list-group-item border-0 pe-0 pb-0">
                                                     <div class="d-flex align-items-start gap-3 flex-wrap">
                                                         <div>
                                                             <span class="avatar avatar-lg avatar-rounded p-1 bg-light border">
                                                                 <img src="../assets/images/faces/4.jpg" alt="">
                                                             </span>
                                                         </div>
                                                         <div class="flex-fill w-50">
                                                             <div class="p-3 bg-light border rounded">
                                                                 <span class="fw-medium d-block mb-1">Karnakaran463</span>
                                                                 <span class="d-block mb-3 text-muted">Great job on showcasing the power of 3D technology!</span>
                                                                 <div class="btn-list">
                                                                     <button class="btn btn-sm btn-primary-light btn-wave">Reply<i class="ri-reply-line ms-1"></i></button>
                                                                     <button class="btn btn-sm btn-secondary-light btn-wave">Report<i class="ri-error-warning-line ms-1"></i></button>
                                                                 </div>
                                                             </div>
                                                             
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </li>
                                     <li class="list-group-item border-0 border-bottom">
                                         <div class="d-flex align-items-start gap-3 flex-wrap">
                                             <div>
                                                 <span class="avatar avatar-lg avatar-rounded  p-1 bg-light borde">
                                                     <img src="../assets/images/faces/13.jpg" alt="">
                                                 </span>
                                             </div>
                                             <div class="flex-fill w-50">
                                                 <div class="p-3 bg-light border rounded">
                                                     <span class="fw-medium d-block mb-1">ArtsyExplorer</span>
                                                     <span class="d-block mb-3 text-muted">The 3D images on your blog are a visual feast! I love how they bring a new level of engagement and interactivity. It's like art coming to life. Can't wait to see more creative uses of 3D in the future!</span>
                                                     <div class="btn-list">
                                                         <button class="btn btn-sm btn-primary-light btn-wave">Reply<i class="ri-reply-line ms-1"></i></button>
                                                         <button class="btn btn-sm btn-secondary-light btn-wave">Report<i class="ri-error-warning-line ms-1"></i></button>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-xxl-4">
                 <div class="row">
                     <div class="col-xl-12">
                        @foreach ($levels as $level)
                        <div class="card custom-card overflow-hidden">
                          <div class="card-header justify-content-between">
                              <div class="card-title">
                                  Siguientes videos
                              </div>
                              <a class="fs-12 text-muted">{{$class->count() - 1}} videos<i class="ti ti-arrow-narrow-right ms-1"></i> </a>
                          </div>
                          <div class="card-body p-0">
                              @if ($level->classes->isNotEmpty())
                                @foreach ($level->classes as $futureClass)
                                  @if ($class->uuid !== $futureClass->uuid)
                                    <ul class="list-group list-group-flush">
                                      <li class="list-group-item">
                                          <div class="d-flex gap-3 flex-wrap align-items-center">
                                              <span class="avatar avatar-xl">
                                                  <img src="{{ route('userClasses.image', ['uuid' => $futureClass->uuid]) }}" class="img-fluid" alt="img-class-{{$class->title}}">
                                              </span>
                                              <div class="flex-fill">
                                                  <a href="javascript:void(0);" class="mb-0 badge bg-primary-transparent">{{$level->name}}</a>
                                                  <p class="mb-1 popular-blog-content text-truncate fw-medium">
                                                    {{$futureClass->title}}
                                                  </p>
                                                  <span class="text-muted fs-12">{{$futureClass->created_at}}</span>
                                              </div>
                                              <div>
                                          <a href="javascript:void(0);" class="text-primary text-decoration-underline">Ver
                                                          ahora</a>
                                              </div>
                                          </div>
                                      </li>
                                  </ul>
                                  @endif
                                @endforeach
                              @endif
                          </div>
                      </div>
                        @endforeach
                     </div>
                     <div class="col-xl-12">
                      <div class="card custom-card p-3">
                        <div class="card-body p-4 bg-light border">
                            <div class="text-center">
                                <label class="form-check-label mb-3">
                                    Suscríbete para recibir actualizaciones sobre las últimas noticias y publicaciones
                                </label>
                                <div class="input-group">
                                    <input type="text" class="form-control shadow-none" placeholder="Correo electrónico aquí" aria-label="blog-email" aria-describedby="blog-subscribe">
                                    <button class="btn btn-primary btn-wave" type="button" id="blog-subscribe">Suscribirse</button>
                                </div>
                            </div>
                        </div>
                     </div>
                 </div>
             </div>
         </div>
         <!--End::row-1 -->

         <div class="row">
             <div class="col-xl-12">
                 <div class="card custom-card">
                     <div class="card-header">
                         <div class="card-title">
                             Leave a comment
                         </div>
                     </div>
                     <div class="card-body">
                         <div class="row gy-3">
                             <div class="col-xl-6">
                                 <label for="blog-first-name" class="form-label">First Name</label>
                                 <input type="text" class="form-control" id="blog-first-name" placeholder="Enter Name">
                             </div>
                             <div class="col-xl-6">
                                 <label for="blog-last-name" class="form-label">Last Name</label>
                                 <input type="text" class="form-control" id="blog-last-name" placeholder="Enter Name">
                             </div>
                             <div class="col-xl-12"> 
                                 <label for="blog-email" class="form-label">Email ID</label>
                                 <input type="text" class="form-control" id="blog-email" placeholder="Enter Email">
                             </div>
                             <div class="col-xl-12">
                                 <label for="blog-comment" class="form-label">Write Comment</label>
                                 <textarea class="form-control" id="blog-comment" rows="5"></textarea>
                             </div>
                         </div>
                     </div>
                     <div class="card-footer">
                         <div class="text-end">
                             <button class="btn btn-primary-light">Post Comment</button>
                         </div>
                     </div>

     </div>
 </div>
</section>
@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>