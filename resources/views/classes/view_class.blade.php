@extends('page')
@section('page')
<section class="container-fluid pt-3">
         <div class="row">
             <div class="col-xxl-8">
                 <div class="row">
                     <div class="col-xl-12 all-videos">
                         <div class="card custom-card">
                             <div class="card-body pb-0">
                                  <video controls data-class-id="{{ $class->uuid }}" data-user-id="{{ $user->uuid }}">
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
                                    Comentarios   
                                 </div>
                             </div>
                             <div class="card-body p-0">
                                 <ul class="list-group list-group-flush" id="blog-details-comment-list">
                                    @foreach ($comments as $comment)
                                        <li class="list-group-item border-0 border-bottom">
                                            <div class="d-flex align-items-start gap-3 flex-wrap">
                                                <div>
                                                    <span class="avatar avatar-lg avatar-rounded  p-1 bg-light borde">
                                                        <img src="{{ route('profile.image', ['uuid' => $user->uuid]) }}" alt="img profile {{$comment->user->name}}">
                                                    </span>
                                                </div>
                                                <div class="flex-fill w-50">
                                                    <div class="p-3 bg-light border rounded">
                                                        <span class="fw-medium d-block mb-1">{{$comment->user->name}}</span>
                                                        <span class="d-block mb-3 text-muted">{{$comment->description}}</span>
                                                        {{-- <div class="btn-list">
                                                            <button class="btn btn-sm btn-primary-light btn-wave">Reply<i class="ri-reply-line ms-1"></i></button>
                                                            <button class="btn btn-sm btn-secondary-light btn-wave">Report<i class="ri-error-warning-line ms-1"></i></button>
                                                        </div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                     @endforeach
                                 </ul>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-xxl-4">
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
         <!--End::row-1 -->

         <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header">
                        <div class="card-title">
                            Envia un comentario
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Inicia el formulario -->
                        <form action="{{ route('comments.store') }}" method="POST">
                            @csrf
        
                            <input type="hidden" name="user_id" value="{{ $user->uuid }}">
        
                            <input type="hidden" name="class_id" value="{{ $class->uuid }}">
        
                            <div class="row gy-3">
                                <div class="col-xl-12">
                                    <label for="blog-comment" class="form-label">Escribe un comentario</label>
                                    <textarea class="form-control" id="blog-comment" name="description" rows="5" required></textarea>
                                </div>
                            </div>
        
                            <div class="card-footer">
                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary-light">Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
     </div>
 </div>
</section>
@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
   $(document).ready(function() {
        $('video').on('ended', function() {
            const $video = $(this);

            const classUuid = $video.data('class-id');
            const userUuid  = $video.data('user-id');

            const ajaxUrl = "{{ route('classes.mark', ['userUuid' => 'USER_UUID', 'classUuid' => 'CLASS_UUID']) }}"
                .replace('USER_UUID', userUuid)
                .replace('CLASS_UUID', classUuid);

            $.ajax({
                url: ajaxUrl,
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                success: function(response) {
                    const tempUuid = response.uuid;

                    if(tempUuid){
                        
                    }
                },
                error: function(err) {
                    console.error(err);
                }
            });
        });
   });
</script>
