@extends('page')
@section('page')

       <div class="container-fluid pt-3">

           <div class="main-chart-wrapper gap-lg-2 gap-0 mb-2 d-lg-flex">
               <div class="chat-info border">
                   <div class="chat-search p-3 border-bottom">
                       <div class="input-group"> <input type="text" class="form-control bg-light border-0"
                               placeholder="Buscar chat" aria-describedby="button-addon8"> <button
                               aria-label="button" class="btn btn-light" type="button" id="button-addon8"><i
                                   class="ri-search-line text-muted"></i></button> </div>
                   </div>
                   <div class="tab-content" id="myTabContent">
                       <div class="tab-pane show active border-0 p-3 pt-0 chat-users-tab" id="users-tab-pane"
                           role="tabpanel" aria-labelledby="users-tab" tabindex="0">
                           <ul class="list-unstyled border rounded mb-0 chat-users-tab" id="chat-msg-scroll">
                               <li class="pb-0">
                                   <p class="text-muted fs-11 fw-medium mb-2 op-7">Chats activos</p>
                               </li>
                               @foreach ($users as $user)
                               <li class="checkforactive">
                                <a href="{{ route('chats.show', ['uuid' => $user->uuid]) }}">
                                    <div class="d-flex align-items-top">
                                        <div class="me-1 lh-1">
                                            <span class="avatar avatar-md online me-2 avatar-rounded">
                                                <img src="{{ route('profile.image', ['uuid' => $user->uuid]) }}" alt="img-profile">
                                            </span>
                                        </div>
                                        <div class="flex-fill">
                                            <p class="mb-0 fw-medium">
                                                {{$user->name}} <span
                                                    class="float-end text-muted fw-normal fs-11">1:32PM</span>
                                            </p>
                                            <p class="fs-13 mb-0">
                                                <span class="chat-msg text-truncate"> Hi there! How's your day
                                                    going? &#128522;</span>
                                                <span class="chat-read-icon float-end align-middle"><i
                                                        class="ri-check-double-fill"></i></span>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                               @endforeach
                           </ul>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
</div>

@endsection
