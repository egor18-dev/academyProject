@extends('page')
@section('page')
<section class="container-fluid p-3">
    <div class="card custom-card profile-card">
        <div class="card-body pb-0">
            <div class="profile-banner-img">
                <img src="https://academia.tradimo.com/img/mobile.jpg" class="rounded w-100" style="height: 30vh">
            </div>
            <span class="avatar avatar-xxl avatar-rounded bg-light">
                <img src="{{ route('profile.image', ['uuid' => $user->uuid]) }}" alt="img-profile">
            </span>
            <div
                class="mt-4 mb-0 p-4 d-flex align-items-center flex-wrap gap-3 justify-content-between">
                <div class="">
                <h5 class="fw-semibold m-0">{{$user->name}}</h5>
                <span class="d-block fw-medium text-muted mb-1 pt-0">{{$user->surnames}}</span>
                <a href="{{ route('profile.show', ['uuid' => $user->uuid]) }}" class="btn btn-primary btn-sm mt-3">Editar perfil</a>
                </div> 
                <div class="d-flex mb-0 flex-wrap gap-4">
                    <div
                        class="py-2 ps-2 pe-3 rounded-pill d-flex align-items-center border gap-3">
                        <div class="main-card-icon primary">
                            <div
                                class="avatar avatar-md avatar-rounded bg-primary-transparent svg-primary border border-primary border-opacity-25">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32"
                                    height="32" fill="#000000" viewBox="0 0 256 256">
                                    <path
                                        d="M224,118.31V200a8,8,0,0,1-8,8H40a8,8,0,0,1-8-8V118.31h0A191.14,191.14,0,0,0,128,144,191.08,191.08,0,0,0,224,118.31Z"
                                        opacity="0.2"></path>
                                    <path
                                        d="M104,112a8,8,0,0,1,8-8h32a8,8,0,0,1,0,16H112A8,8,0,0,1,104,112ZM232,72V200a16,16,0,0,1-16,16H40a16,16,0,0,1-16-16V72A16,16,0,0,1,40,56H80V48a24,24,0,0,1,24-24h48a24,24,0,0,1,24,24v8h40A16,16,0,0,1,232,72ZM96,56h64V48a8,8,0,0,0-8-8H104a8,8,0,0,0-8,8ZM40,72v41.62A184.07,184.07,0,0,0,128,136a184,184,0,0,0,88-22.39V72ZM216,200V131.63A200.25,200.25,0,0,1,128,152a200.19,200.19,0,0,1-88-20.36V200H216Z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <div>
                            <p class="fw-semibold h6 mb-0">{{$totalClasses - $userVideoProgress}}</p>
                            <p class="mb-0 fs-12 text-muted fw-medium">Clases restantes</p>
                        </div>
                    </div>
                    <div
                        class="py-2 ps-2 pe-3 rounded-pill d-flex align-items-center border  gap-3">
                        <div class="main-card-icon secondary">
                            <div
                                class="avatar avatar-rounded avatar-md bg-secondary-transparent svg-secondary border border-secondary border-opacity-25">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32"
                                    height="32" fill="#000000" viewBox="0 0 256 256">
                                    <path
                                        d="M136,108A52,52,0,1,1,84,56,52,52,0,0,1,136,108Z"
                                        opacity="0.2"></path>
                                    <path
                                        d="M117.25,157.92a60,60,0,1,0-66.5,0A95.83,95.83,0,0,0,3.53,195.63a8,8,0,1,0,13.4,8.74,80,80,0,0,1,134.14,0,8,8,0,0,0,13.4-8.74A95.83,95.83,0,0,0,117.25,157.92ZM40,108a44,44,0,1,1,44,44A44.05,44.05,0,0,1,40,108Zm210.14,98.7a8,8,0,0,1-11.07-2.33A79.83,79.83,0,0,0,172,168a8,8,0,0,1,0-16,44,44,0,1,0-16.34-84.87,8,8,0,1,1-5.94-14.85,60,60,0,0,1,55.53,105.64,95.83,95.83,0,0,1,47.22,37.71A8,8,0,0,1,250.14,206.7Z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <div>
                            <p class="fw-semibold h6 mb-0">{{$userVideoProgress}}</p>
                            <p class="mb-0 fs-12 text-muted fw-medium">Clases terminadas</p>
                        </div>
                    </div>
                    </div>
                </div>
                <hr>
                <div class="col-xl-12">
                    <div class="card custom-card">
                        <div class="card-body p-0">
                            <div class="tab-content" id="profile-tabs">
                                <div class="tab-pane show active p-0 border-0" id="profile-about-tab-pane"
                                    role="tabpanel" aria-labelledby="profile-about-tab" tabindex="0">
                                    <div class="card custom-card overflow-hidden shadow-none mb-0">
                                        <div class="card-body p-0">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item p-4">
                                                    <span class="fw-medium fs-15 d-block mb-3"><span
                                                            class="me-1"></span>Secciones terminadas :</span>
                                                    <ul class="list-unstyled profile-timeline">
                                                        @foreach ($levels as $key => $level)
                                                            @if ($level->finished)
                                                                <li>
                                                                    <div> <span
                                                                            class="avatar avatar-md bg-primary-transparent avatar-rounded profile-timeline-avatar">
                                                                            <span class="avatar avatar-sm bg-primary avatar-rounded">{{$key + 1}}</span>
                                                                            </span>
                                                                        <div class="p-3 bg-light rounded">
                                                                        <h6 class="fw-semibold mb-0">{{$level->name}}</h6>
                                                                        <p class="mb-0 text-muted">{{$level->description}}</p>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            @endif
                                                        @endforeach
                                                       
                                                    </ul>

                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                <div class="progress mb-2">
                    <div class="progress-bar" role="progressbar" style="width: {{ $progressPercentage }}%;" aria-valuenow="{{ $progressPercentage }}" aria-valuemin="0" aria-valuemax="100">{{ round($progressPercentage) }}%</div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection
