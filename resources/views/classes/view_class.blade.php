@extends('welcome')
@section('content')
<div class="row w-100 p-3">
    <div class="col-lg-9">
        @if($class->video_stream)
                <video controls loop class="rounded">
                    <source src="{{ route('classes.stream', ['id' => $class->id]) }}" type="video/mp4">
                    Tu navegador no soporta la reproducción de videos.
                </video>
                <h5>{{$class->title}}</h5>
        @endif
    </div>
</div>
@endsection
