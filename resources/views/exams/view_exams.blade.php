@extends('page')
@section('page')
<div class="container-fluid min-vh-100 confirmationMenu">
    <div class="modal fade show" id="modaldemo8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: block;">
        <div class="modal-dialog modal-dialog-centered text-center" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Confirmación de Eliminación</h6>
                    <button aria-label="Close" class="btn-close closeBtn"></button>
                </div>
                <div class="modal-body text-start">
                    <h6>¿Estás seguro de que quieres eliminar <strong class='removeText'></strong>?</h6>
                    <p class="text-muted mb-0">Una vez eliminado, no se podrá utilizar nuevamente. Esta acción es irreversible.</p>
                </div>
                <div class="modal-footer">
                    <form method="post" id="deleteExamForm" action="">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-primary">Eliminar</button>
                    </form>
                    <button class="btn btn-light closeBtn">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="container-fluid p-3">
        <!-- Start::row-1 -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header d-flex align-items-center justify-content-between flex-wrap gap-3">
                        <div class="card-title">
                            Exámenes<span class="badge bg-light text-default rounded ms-1 fs-12 align-middle">{{$count}}</span>
                        </div>
                        <div class="d-flex flex-wrap gap-2">
                            <a class="btn btn-primary btn-sm" href="{{ route('exams.create') }}">Crear examen</a>
                            <button class="btn btn-success-light btn-sm">Exportar como CSV</button>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table text-nowrap">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
                                        </th>
                                        <th scope="col">Examen</th>
                                        <th scope="col">Descripción</th>
                                        <th scope="col">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($exams as $exam)
                                        <tr class="crm-contact">
                                            <td>
                                                <input class="form-check-input" type="checkbox" id="checkboxNoLabel1" value="" aria-label="...">
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <div>
                                                        <a data-bs-toggle="offcanvas" href="#offcanvasExample"
                                                        role="button" aria-controls="offcanvasExample"><span class="d-block fw-medium">{{$exam->title}}</span></a>
                                                        <span class="d-block text-muted fs-11" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" title="Last Contacted"><i class="ri-account-circle-line me-1 fs-13 align-middle"></i>{{$exam->updated_at}}</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <span class="d-block mb-1"><i class="ri-mail-line me-2 align-middle fs-14 text-muted"></i>{{$exam->description}}</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-list">
                                                    <a data-bs-toggle="offcanvas"
                                                    role="button" aria-controls="offcanvasExample" class="btn btn-success btn-sm" href="{{ route('questions.index', ['examUuid' => $exam->uuid]) }}">
                                                        <svg width="15px" height="15px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M15.0007 12C15.0007 13.6569 13.6576 15 12.0007 15C10.3439 15 9.00073 13.6569 9.00073 12C9.00073 10.3431 10.3439 9 12.0007 9C13.6576 9 15.0007 10.3431 15.0007 12Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M12.0012 5C7.52354 5 3.73326 7.94288 2.45898 12C3.73324 16.0571 7.52354 19 12.0012 19C16.4788 19 20.2691 16.0571 21.5434 12C20.2691 7.94291 16.4788 5 12.0012 5Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                                    </a>
                                                    <a data-bs-toggle="offcanvas"
                                                    role="button" aria-controls="offcanvasExample" class="btn btn-sm btn-warning" href="{{ route('exams.show', ['uuid' => $exam->uuid]) }}">
                                                        <svg width="15px" height="15px" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#fff">
                                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                            <g id="SVGRepo_iconCarrier"> 
                                                                <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.8 12.963L2 18l4.8-.63L18.11 6.58a2.612 2.612 0 00-3.601-3.785L3.8 12.963z"></path> 
                                                            </g>
                                                        </svg>
                                                    </a>
                                                    <button class="btn btn-sm btn-danger removeBtn" onclick="removeExam('{{$exam->uuid}}', '{{$exam->title}}')">
                                                        <svg fill="#fff" width="15px" height="15px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" stroke="#fff">
                                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                            <g id="SVGRepo_iconCarrier"> 
                                                                <path d="M0 14.545L1.455 16 8 9.455 14.545 16 16 14.545 9.455 8 16 1.455 14.545 0 8 6.545 1.455 0 0 1.455 6.545 8z" fill-rule="evenodd"></path> 
                                                            </g>
                                                        </svg>
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
        @if (session()->has('success'))
            <div class="alert alert-success d-flex align-items-center" role="alert">
                <svg style="fill: #0CC763" class="flex-shrink-0 me-2 svg-success" xmlns="http://www.w3.org/2000/svg" height="1.5rem" viewBox="0 0 24 24" width="1.5rem" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16.59 7.58L10 14.17l-3.59-3.58L5 12l5 5 8-8zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"/></svg>
                <div>
                    {{session()->get('success')}}
                </div>
            </div>
        @endif
        @if ($errors->has('error'))
            <div class="alert alert-danger d-flex align-items-center" role="alert">
                <svg style="fill: #FF383C" class="flex-shrink-0 me-2 svg-danger" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="1.5rem" viewBox="0 0 24 24" width="1.5rem" fill="#000000"><g><rect fill="none" height="24" width="24"/></g><g><g><g><path d="M15.73,3H8.27L3,8.27v7.46L8.27,21h7.46L21,15.73V8.27L15.73,3z M19,14.9L14.9,19H9.1L5,14.9V9.1L9.1,5h5.8L19,9.1V14.9z"/><rect height="6" width="2" x="11" y="7"/><rect height="2" width="2" x="11" y="15"/></g></g></g></svg>
                <div>
                    {{ $errors->first('error') }}
                </div>
            </div>
        @endif
        
    </div>
@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

    const removeExam = (uuid, title) => {
        const form = $('form');
        $('.removeText').text(title);

        if(form){
            form.attr('action', `{{ url('exams') }}/${uuid}`);
        }
    }

    $(document).ready(() => {

        $('.removeBtn').click(() => {
            $('.confirmationMenu').show();
        });

        $('.closeBtn').click(() => {
            $('.confirmationMenu').hide();
            $('.removeText').text("");
        }); 
    });
</script>
