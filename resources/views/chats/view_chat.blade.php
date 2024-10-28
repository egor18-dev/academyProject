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
                               <li class="checkforactive {{$user->uuid === $userInfo->uuid ? 'active' : ''}}">
                                <a href="{{ route('chats.show', ['uuid' => $user->uuid]) }}"
                                    onclick="changeTheInfo(this,'JaneDoe','5','online')">
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
               <div class="main-chat-area border">
                   <div class="d-flex align-items-center main-chat-head flex-wrap">
                       <div class="me-2 lh-1">
                           <span class="avatar avatar-md online avatar-rounded chatstatusperson">
                               <img class="chatimageperson" src="{{ route('profile.image', ['uuid' => $userInfo->uuid]) }}" alt="img-profile">
                           </span>
                       </div>
                       <div class="flex-fill">
                           <p class="mb-0 fw-medium fs-14 lh-1">
                               <a data-bs-toggle="offcanvas"
                                   data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"
                                   class="chatnameperson responsive-userinfo-open">{{$userInfo->name}}</a>
                           </p>
                           <p class="text-muted mb-0 chatpersonstatus">online</p>
                       </div>
                       <div class="d-flex flex-wrap rightIcons">
                           <button aria-label="button" type="button"
                               class="btn btn-icon btn-outline-light my-1 ms-2 responsive-chat-close btn-sm">
                               <i class="ri-close-line"></i>
                           </button>
                       </div>
                   </div>
                   <div class="p-3 pt-0">
                       <div class="chat-content border p-3 bg-light rounded" id="main-chat-content">
                            
                           <ul class="list-unstyled">
                                @foreach ($chats as $chat)
                                <li class="{{$chat->from_user_id !== $userInfo->uuid ? 'chat-item-end' : 'chat-item-start'}} ">
                                    <div class="chat-list-inner">
                                        <div class="chat-user-profile">
                                            <span class="avatar avatar-md online avatar-rounded chatstatusperson">
                                                <img class="chatimageperson" src="{{ route('profile.image', ['uuid' => $chat->fromUser->uuid]) }}"
                                                    alt="img-profile">
                                            </span>
                                        </div>
                                        <div class="ms-3">
                                            <span class="chatting-user-info">
                                                <span class="chatnameperson">{{$chat->fromUser->name}}</span> <span
                                                    class="msg-sent-time">{{ $chat->created_at->format('d/m/Y H:i') }}</span>
                                            </span>
                                            <div class="main-chat-msg">
                                                <div>
                                                    <p class="mb-0">{{$chat->message}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                           </ul>
                       </div>
                   </div>
                   <div class="chat-footer">
                    {{-- <form method="POST" action="{{ route('chats.store') }}">
                        @csrf
                        <div class="chat-footer">
                            <a aria-label="anchor" class="btn btn-icon me-2 btn-success emoji-picker" href="javascript:void(0)">
                                <i class="ri-emotion-line"></i>
                            </a>
                            <input class="form-control chat-message-space" name="mensaje" placeholder="Type your message here..." type="text">
                            
                            <input type="hidden" name="from_user_id" value="{{}}">
                            <input type="hidden" name="campo_oculto_2" value="valor2">
                    
                            <a aria-label="anchor" class="btn btn-primary ms-2 btn-icon btn-send" href="javascript:void(0)" onclick="this.closest('form').submit()">
                                <i class="ri-send-plane-2-line"></i>
                            </a>
                        </div>
                    </form> --}}
                    
                   </div>
               </div>
           </div>
       </div>
   </div>
</div>

@endsection
