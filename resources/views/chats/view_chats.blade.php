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
                                <a href="javascript:void(0);"
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
                       <div class="tab-pane border-0 p-3 pt-0 chat-groups-tab" id="groups-tab-pane" role="tabpanel"
                           aria-labelledby="groups-tab" tabindex="0">
                           <ul class="list-unstyled border rounded mb-0">
                               <li class="pb-0">
                                   <p class="text-muted fs-11 fw-medium mb-1 op-7">MY CHAT GROUPS</p>
                               </li>
                               <li>
                                   <div class="d-flex align-items-center justify-content-between">
                                       <div>
                                           <p class="mb-0">1) Workplace Wizards</p>
                                           <p class="mb-0"><span class="badge bg-success-transparent">4
                                                   Online</span></p>
                                       </div>
                                       <div class="avatar-list-stacked my-auto">
                                           <span class="avatar avatar-sm avatar-rounded">
                                               <img src="../assets/images/faces/2.jpg" alt="img">
                                           </span>
                                           <span class="avatar avatar-sm avatar-rounded">
                                               <img src="../assets/images/faces/8.jpg" alt="img">
                                           </span>
                                           <span class="avatar avatar-sm avatar-rounded">
                                               <img src="../assets/images/faces/2.jpg" alt="img">
                                           </span>
                                           <span class="avatar avatar-sm avatar-rounded">
                                               <img src="../assets/images/faces/10.jpg" alt="img">
                                           </span>
                                           <a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded"
                                               href="javascript:void(0);">
                                               +19
                                           </a>
                                       </div>
                                   </div>
                               </li>
                               <li>
                                   <div class="d-flex align-items-center justify-content-between">
                                       <div>
                                           <p class="mb-0">2) ProgrammingPioneers </p>
                                           <p class="mb-0"><span class="badge bg-secondary-transparent">32
                                                   Online</span></p>
                                       </div>
                                       <div class="avatar-list-stacked my-auto">
                                           <span class="avatar avatar-sm avatar-rounded">
                                               <img src="../assets/images/faces/1.jpg" alt="img">
                                           </span>
                                           <span class="avatar avatar-sm avatar-rounded">
                                               <img src="../assets/images/faces/7.jpg" alt="img">
                                           </span>
                                           <span class="avatar avatar-sm avatar-rounded">
                                               <img src="../assets/images/faces/3.jpg" alt="img">
                                           </span>
                                           <span class="avatar avatar-sm avatar-rounded">
                                               <img src="../assets/images/faces/9.jpg" alt="img">
                                           </span>
                                           <span class="avatar avatar-sm avatar-rounded">
                                               <img src="../assets/images/faces/12.jpg" alt="img">
                                           </span>
                                           <a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded"
                                               href="javascript:void(0);">
                                               +123
                                           </a>
                                       </div>
                                   </div>
                               </li>
                               <li>
                                   <div class="d-flex align-items-center justify-content-between">
                                       <div>
                                           <p class="mb-0">3) GoodTimesGroup</p>
                                           <p class="mb-0"><span class="badge bg-warning-transparent">3
                                                   Online</span></p>
                                       </div>
                                       <div class="avatar-list-stacked my-auto">
                                           <span class="avatar avatar-sm avatar-rounded">
                                               <img src="../assets/images/faces/4.jpg" alt="img">
                                           </span>
                                           <span class="avatar avatar-sm avatar-rounded">
                                               <img src="../assets/images/faces/8.jpg" alt="img">
                                           </span>
                                           <span class="avatar avatar-sm avatar-rounded">
                                               <img src="../assets/images/faces/13.jpg" alt="img">
                                           </span>
                                           <a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded"
                                               href="javascript:void(0);">
                                               +15
                                           </a>
                                       </div>
                                   </div>
                               </li>
                               <li>
                                   <div class="d-flex align-items-center justify-content-between">
                                       <div>
                                           <p class="mb-0">4) The Hangout Haven</p>
                                           <p class="mb-0"><span class="badge bg-danger-transparent">5
                                                   Online</span></p>
                                       </div>
                                       <div class="avatar-list-stacked my-auto">
                                           <span class="avatar avatar-sm avatar-rounded">
                                               <img src="../assets/images/faces/1.jpg" alt="img">
                                           </span>
                                           <span class="avatar avatar-sm avatar-rounded">
                                               <img src="../assets/images/faces/7.jpg" alt="img">
                                           </span>
                                           <span class="avatar avatar-sm avatar-rounded">
                                               <img src="../assets/images/faces/14.jpg" alt="img">
                                           </span>
                                           <a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded"
                                               href="javascript:void(0);">
                                               +28
                                           </a>
                                       </div>
                                   </div>
                               </li>
                               <li>
                                   <div class="d-flex align-items-center justify-content-between">
                                       <div>
                                           <p class="mb-0">5) The Family Room</p>
                                           <p class="mb-0"><span class="badge bg-light text-dark">0 Online</span>
                                           </p>
                                       </div>
                                       <div class="avatar-list-stacked my-auto">
                                           <span class="avatar avatar-sm avatar-rounded">
                                               <img src="../assets/images/faces/5.jpg" alt="img">
                                           </span>
                                           <span class="avatar avatar-sm avatar-rounded">
                                               <img src="../assets/images/faces/6.jpg" alt="img">
                                           </span>
                                           <span class="avatar avatar-sm avatar-rounded">
                                               <img src="../assets/images/faces/12.jpg" alt="img">
                                           </span>
                                           <span class="avatar avatar-sm avatar-rounded">
                                               <img src="../assets/images/faces/3.jpg" alt="img">
                                           </span>
                                           <a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded"
                                               href="javascript:void(0);">
                                               +53
                                           </a>
                                       </div>
                                   </div>
                               </li>
                               <li class="pb-0">
                                   <p class="text-muted fs-11 fw-medium mb-1 op-7">GROUP CHATS</p>
                               </li>
                               <li class="checkforactive">
                                   <a href="javascript:void(0);"
                                       onclick="changeTheInfo(this,'BookLoversUnited &#128525;','17','online')">
                                       <div class="d-flex align-items-top">
                                           <div class="me-1 lh-1">
                                               <span class="avatar avatar-md online me-2 avatar-rounded">
                                                   <img src="../assets/images/faces/17.jpg" alt="img">
                                               </span>
                                           </div>
                                           <div class="flex-fill">
                                               <p class="mb-0 fw-medium">
                                                   BookLoversUnited &#128525; <span
                                                       class="float-end text-muted fw-normal fs-11">12:24PM</span>
                                               </p>
                                               <p class="fs-13 mb-0 chat-msg-typing ">
                                                   <span class="chat-msg text-truncate">Hira Typing...</span>
                                                   <span class="chat-read-icon float-end align-middle"><i
                                                           class="ri-check-double-fill"></i></span>
                                                   <span
                                                       class="badge bg-success-transparent rounded-circle float-end">2</span>
                                               </p>
                                           </div>
                                       </div>
                                   </a>
                               </li>
                               <li class="chat-msg-unread checkforactive">
                                   <a href="javascript:void(0);"
                                       onclick="changeTheInfo(this,'TogetherForever','18','online')">
                                       <div class="d-flex align-items-top">
                                           <div class="me-1 lh-1">
                                               <span class="avatar avatar-md online me-2 avatar-rounded">
                                                   <img src="../assets/images/faces/18.jpg" alt="img">
                                               </span>
                                           </div>
                                           <div class="flex-fill">
                                               <p class="mb-0 fw-medium">
                                                   TogetherForever <span
                                                       class="float-end text-muted fw-normal fs-11">1:16PM</span>
                                               </p>
                                               <p class="fs-13 mb-0">
                                                   <span class="chat-msg text-truncate"><span
                                                           class="group-indivudial">Rams:</span>Happy to be part of
                                                       this group</span>
                                                   <span class="chat-read-icon float-end align-middle"><i
                                                           class="ri-check-double-fill"></i></span>
                                               </p>
                                           </div>
                                       </div>
                                   </a>
                               </li>
                               <li class="chat-inactive checkforactive">
                                   <a href="javascript:void(0);"
                                       onclick="changeTheInfo(this,'The Idea Exchange Hub &#128526;','19','offline')">
                                       <div class="d-flex align-items-top">
                                           <div class="me-1 lh-1">
                                               <span class="avatar avatar-md offline me-2 avatar-rounded">
                                                   <img src="../assets/images/faces/19.jpg" alt="img">
                                               </span>
                                           </div>
                                           <div class="flex-fill">
                                               <p class="mb-0 fw-medium">
                                                   The Idea Exchange Hub &#128526; <span
                                                       class="float-end text-muted fw-normal fs-11">3 days
                                                       ago</span>
                                               </p>
                                               <p class="fs-13 mb-0">
                                                   <span
                                                       class="chat-msg text-truncate">Simon,Melissa,Amanda,Patrick,Siddique</span>
                                                   <span class="chat-read-icon float-end align-middle"><i
                                                           class="ri-check-double-fill"></i></span>
                                               </p>
                                           </div>
                                       </div>
                                   </a>
                               </li>
                               <li class="chat-inactive checkforactive">
                                   <a href="javascript:void(0);"
                                       onclick="changeTheInfo(this,'TechieTribe','20','offline')">
                                       <div class="d-flex align-items-top">
                                           <div class="me-1 lh-1">
                                               <span class="avatar avatar-md offline me-2 avatar-rounded">
                                                   <img src="../assets/images/faces/20.jpg" alt="img">
                                               </span>
                                           </div>
                                           <div class="flex-fill">
                                               <p class="mb-0 fw-medium">
                                                   TechieTribe <span
                                                       class="float-end text-muted fw-normal fs-11">5 days
                                                       ago</span>
                                               </p>
                                               <p class="fs-13 mb-0">
                                                   <span
                                                       class="chat-msg text-truncate">Kamalan,Subha,Ambrose,Kiara,Jackson</span>
                                                   <span class="chat-read-icon float-end align-middle"><i
                                                           class="ri-check-double-fill"></i></span>
                                               </p>
                                           </div>
                                       </div>
                                   </a>
                               </li>
                               <li class="chat-inactive checkforactive">
                                   <a href="javascript:void(0);"
                                       onclick="changeTheInfo(this,'The Chill Squad','21','offline')">
                                       <div class="d-flex align-items-top">
                                           <div class="me-1 lh-1">
                                               <span class="avatar avatar-md offline me-2 avatar-rounded">
                                                   <img src="../assets/images/faces/21.jpg" alt="img">
                                               </span>
                                           </div>
                                           <div class="flex-fill">
                                               <p class="mb-0 fw-medium">
                                                   The Chill Squad <span
                                                       class="float-end text-muted fw-normal fs-11">12 days
                                                       ago</span>
                                               </p>
                                               <p class="fs-13 mb-0">
                                                   <span
                                                       class="chat-msg text-truncate">Subman,Rajen,Kairo,Dibasha,Alexa</span>
                                                   <span class="chat-read-icon float-end align-middle"><i
                                                           class="ri-check-double-fill"></i></span>
                                               </p>
                                           </div>
                                       </div>
                                   </a>
                               </li>
                           </ul>
                       </div>
                       <div class="tab-pane border-0 p-3 pt-0 chat-contacts-tab" id="contacts-tab-pane"
                           role="tabpanel" aria-labelledby="contacts-tab" tabindex="0">
                           <div class="chat-contacts-tab1">
                               <ul class="list-unstyled border rounded mb-0 chat-contacts-tab">
                                   <li>
                                       <span class="text-default fw-semibold">A</span>
                                   </li>
                                   <li>
                                       <div class="d-flex align-items-center gap-3">
                                           <div class="lh-1">
                                               <span class="avatar avatar-rounded avatar-sm">
                                                   <img src="../assets/images/faces/5.jpg" alt="">
                                               </span>
                                           </div>
                                           <div class="flex-fill">
                                               <span class="d-block fw-semibold">
                                                   AmandaClark
                                               </span>
                                           </div>
                                           <div class="dropdown">
                                               <a aria-label="anchor" href="javascript:void(0);"
                                                   data-bs-toggle="dropdown"
                                                   class="btn btn-icon btn-sm btn-outline-light">
                                                   <i class="ri-more-2-fill"></i>
                                               </a>
                                               <ul class="dropdown-menu" role="menu">
                                                   <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                               class="ri-message-2-line me-2"></i>Chat</a></li>
                                                   <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                               class="ri-phone-line me-2"></i>Audio Call</a></li>
                                                   <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                               class="ri-live-line me-2"></i>Video Call</a></li>
                                                   <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                               class="ri-edit-line me-2"></i>Edit</a></li>
                                                   <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                               class="ri-spam-2-line me-2"></i>Block</a></li>
                                                   <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                               class="ri-delete-bin-line me-2"></i>Delete</a></li>
                                               </ul>
                                           </div>
                                       </div>
                                   </li>
                                   <li>
                                       <span class="text-default fw-semibold">B</span>
                                   </li>
                                   <li>
                                       <div class="d-flex align-items-center gap-3">
                                           <div class="lh-1">
                                               <span class="avatar avatar-rounded avatar-sm">
                                                   <img src="../assets/images/faces/12.jpg" alt="">
                                               </span>
                                           </div>
                                           <div class="flex-fill">
                                               <span class="d-block fw-semibold">
                                                   BenjaminAdams
                                               </span>
                                           </div>
                                           <div class="dropdown">
                                               <a aria-label="anchor" href="javascript:void(0);"
                                                   data-bs-toggle="dropdown"
                                                   class="btn btn-icon btn-sm btn-outline-light">
                                                   <i class="ri-more-2-fill"></i>
                                               </a>
                                               <ul class="dropdown-menu" role="menu">
                                                   <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                               class="ri-message-2-line me-2"></i>Chat</a></li>
                                                   <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                               class="ri-phone-line me-2"></i>Audio Call</a></li>
                                                   <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                               class="ri-live-line me-2"></i>Video Call</a></li>
                                                   <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                               class="ri-edit-line me-2"></i>Edit</a></li>
                                                   <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                               class="ri-spam-2-line me-2"></i>Block</a></li>
                                                   <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                               class="ri-delete-bin-line me-2"></i>Delete</a></li>
                                               </ul>
                                           </div>
                                       </div>
                                   </li>
                                   <li>
                                       <span class="text-default fw-semibold">C</span>
                                   </li>
                                   <li>
                                       <div class="d-flex align-items-center gap-3">
                                           <div class="lh-1">
                                               <span class="avatar avatar-rounded avatar-sm">
                                                   <img src="../assets/images/faces/14.jpg" alt="">
                                               </span>
                                           </div>
                                           <div class="flex-fill">
                                               <span class="d-block fw-semibold">
                                                   ChloeHarris
                                               </span>
                                           </div>
                                           <div class="dropdown">
                                               <a aria-label="anchor" href="javascript:void(0);"
                                                   data-bs-toggle="dropdown"
                                                   class="btn btn-icon btn-sm btn-outline-light">
                                                   <i class="ri-more-2-fill"></i>
                                               </a>
                                               <ul class="dropdown-menu" role="menu">
                                                   <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                               class="ri-message-2-line me-2"></i>Chat</a></li>
                                                   <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                               class="ri-phone-line me-2"></i>Audio Call</a></li>
                                                   <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                               class="ri-live-line me-2"></i>Video Call</a></li>
                                                   <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                               class="ri-edit-line me-2"></i>Edit</a></li>
                                                   <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                               class="ri-spam-2-line me-2"></i>Block</a></li>
                                                   <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                               class="ri-delete-bin-line me-2"></i>Delete</a></li>
                                               </ul>
                                           </div>
                                       </div>
                                   </li>
                                   <li>
                                       <span class="text-default fw-semibold">D</span>
                                   </li>
                                   <li>
                                       <div class="d-flex align-items-center gap-3">
                                           <div class="lh-1">
                                               <span class="avatar avatar-rounded avatar-sm bg-primary">
                                                   DS
                                               </span>
                                           </div>
                                           <div class="flex-fill">
                                               <span class="d-block fw-semibold">
                                                   DanielLewis
                                               </span>
                                           </div>
                                           <div class="dropdown">
                                               <a aria-label="anchor" href="javascript:void(0);"
                                                   data-bs-toggle="dropdown"
                                                   class="btn btn-icon btn-sm btn-outline-light">
                                                   <i class="ri-more-2-fill"></i>
                                               </a>
                                               <ul class="dropdown-menu" role="menu">
                                                   <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                               class="ri-message-2-line me-2"></i>Chat</a></li>
                                                   <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                               class="ri-phone-line me-2"></i>Audio Call</a></li>
                                                   <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                               class="ri-live-line me-2"></i>Video Call</a></li>
                                                   <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                               class="ri-edit-line me-2"></i>Edit</a></li>
                                                   <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                               class="ri-spam-2-line me-2"></i>Block</a></li>
                                                   <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                               class="ri-delete-bin-line me-2"></i>Delete</a></li>
                                               </ul>
                                           </div>
                                       </div>
                                   </li>
                                   <li>
                                       <span class="text-default fw-semibold">E</span>
                                   </li>
                                   <li>
                                       <div class="d-flex align-items-center gap-3">
                                           <div class="lh-1">
                                               <span class="avatar avatar-rounded avatar-sm">
                                                   <img src="../assets/images/faces/7.jpg" alt="">
                                               </span>
                                           </div>
                                           <div class="flex-fill">
                                               <span class="d-block fw-semibold">
                                                   DavidMiller
                                               </span>
                                           </div>
                                           <div class="dropdown">
                                               <a aria-label="anchor" href="javascript:void(0);"
                                                   data-bs-toggle="dropdown"
                                                   class="btn btn-icon btn-sm btn-outline-light">
                                                   <i class="ri-more-2-fill"></i>
                                               </a>
                                               <ul class="dropdown-menu" role="menu">
                                                   <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                               class="ri-message-2-line me-2"></i>Chat</a></li>
                                                   <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                               class="ri-phone-line me-2"></i>Audio Call</a></li>
                                                   <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                               class="ri-live-line me-2"></i>Video Call</a></li>
                                                   <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                               class="ri-edit-line me-2"></i>Edit</a></li>
                                                   <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                               class="ri-spam-2-line me-2"></i>Block</a></li>
                                                   <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                               class="ri-delete-bin-line me-2"></i>Delete</a></li>
                                               </ul>
                                           </div>
                                       </div>
                                   </li>
                                   <li>
                                       <span class="text-default fw-semibold">J</span>
                                   </li>
                                   <li>
                                       <div class="d-flex align-items-center gap-3">
                                           <div class="lh-1">
                                               <span class="avatar avatar-rounded avatar-sm">
                                                   <img src="../assets/images/faces/15.jpg" alt="">
                                               </span>
                                           </div>
                                           <div class="flex-fill">
                                               <span class="d-block fw-semibold">
                                                   JohnSmith
                                               </span>
                                           </div>
                                           <div class="dropdown">
                                               <a aria-label="anchor" href="javascript:void(0);"
                                                   data-bs-toggle="dropdown"
                                                   class="btn btn-icon btn-sm btn-outline-light">
                                                   <i class="ri-more-2-fill"></i>
                                               </a>
                                               <ul class="dropdown-menu" role="menu">
                                                   <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                               class="ri-message-2-line me-2"></i>Chat</a></li>
                                                   <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                               class="ri-phone-line me-2"></i>Audio Call</a></li>
                                                   <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                               class="ri-live-line me-2"></i>Video Call</a></li>
                                                   <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                               class="ri-edit-line me-2"></i>Edit</a></li>
                                                   <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                               class="ri-spam-2-line me-2"></i>Block</a></li>
                                                   <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                               class="ri-delete-bin-line me-2"></i>Delete</a></li>
                                               </ul>
                                           </div>
                                       </div>
                                   </li>
                                   <li>
                                       <span class="text-default fw-semibold">L</span>
                                   </li>
                                   <li>
                                       <div class="d-flex align-items-center gap-3">
                                           <div class="lh-1">
                                               <span class="avatar avatar-rounded avatar-sm bg-primary">
                                                   LP
                                               </span>
                                           </div>
                                           <div class="flex-fill">
                                               <span class="d-block fw-semibold">
                                                   LauraWilson
                                               </span>
                                           </div>
                                           <div class="dropdown">
                                               <a aria-label="anchor" href="javascript:void(0);"
                                                   data-bs-toggle="dropdown"
                                                   class="btn btn-icon btn-sm btn-outline-light">
                                                   <i class="ri-more-2-fill"></i>
                                               </a>
                                               <ul class="dropdown-menu" role="menu">
                                                   <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                               class="ri-message-2-line me-2"></i>Chat</a></li>
                                                   <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                               class="ri-phone-line me-2"></i>Audio Call</a></li>
                                                   <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                               class="ri-live-line me-2"></i>Video Call</a></li>
                                                   <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                               class="ri-edit-line me-2"></i>Edit</a></li>
                                                   <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                               class="ri-spam-2-line me-2"></i>Block</a></li>
                                                   <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                               class="ri-delete-bin-line me-2"></i>Delete</a></li>
                                               </ul>
                                           </div>
                                       </div>
                                   </li>
                                   <li>
                                       <div class="d-flex align-items-center gap-3">
                                           <div class="lh-1">
                                               <span class="avatar avatar-rounded avatar-sm">
                                                   <img src="../assets/images/faces/2.jpg" alt="">
                                               </span>
                                           </div>
                                           <div class="flex-fill">
                                               <span class="d-block fw-semibold">
                                                   LiamNelson
                                               </span>
                                           </div>
                                           <div class="dropdown">
                                               <a aria-label="anchor" href="javascript:void(0);"
                                                   data-bs-toggle="dropdown"
                                                   class="btn btn-icon btn-sm btn-outline-light">
                                                   <i class="ri-more-2-fill"></i>
                                               </a>
                                               <ul class="dropdown-menu" role="menu">
                                                   <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                               class="ri-message-2-line me-2"></i>Chat</a></li>
                                                   <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                               class="ri-phone-line me-2"></i>Audio Call</a></li>
                                                   <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                               class="ri-live-line me-2"></i>Video Call</a></li>
                                                   <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                               class="ri-edit-line me-2"></i>Edit</a></li>
                                                   <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                               class="ri-spam-2-line me-2"></i>Block</a></li>
                                                   <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                               class="ri-delete-bin-line me-2"></i>Delete</a></li>
                                               </ul>
                                           </div>
                                       </div>
                                   </li>
                                   <li>
                                       <span class="text-default fw-semibold">N</span>
                                   </li>
                                   <li>
                                       <div class="d-flex align-items-center gap-3">
                                           <div class="lh-1">
                                               <span class="avatar avatar-rounded avatar-sm">
                                                   <img src="../assets/images/faces/10.jpg" alt="">
                                               </span>
                                           </div>
                                           <div class="flex-fill">
                                               <span class="d-block fw-semibold">
                                                   Noah Russell
                                               </span>
                                           </div>
                                           <div class="dropdown">
                                               <a aria-label="anchor" href="javascript:void(0);"
                                                   data-bs-toggle="dropdown"
                                                   class="btn btn-icon btn-sm btn-outline-light">
                                                   <i class="ri-more-2-fill"></i>
                                               </a>
                                               <ul class="dropdown-menu" role="menu">
                                                   <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                               class="ri-message-2-line me-2"></i>Chat</a></li>
                                                   <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                               class="ri-phone-line me-2"></i>Audio Call</a></li>
                                                   <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                               class="ri-live-line me-2"></i>Video Call</a></li>
                                                   <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                               class="ri-edit-line me-2"></i>Edit</a></li>
                                                   <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                               class="ri-spam-2-line me-2"></i>Block</a></li>
                                                   <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                               class="ri-delete-bin-line me-2"></i>Delete</a></li>
                                               </ul>
                                           </div>
                                       </div>
                                   </li>
                                   <li>
                                       <span class="text-default fw-semibold">W</span>
                                   </li>
                                   <li>
                                       <div class="d-flex align-items-center gap-3">
                                           <div class="lh-1">
                                               <span class="avatar avatar-rounded avatar-sm">
                                                   <img src="../assets/images/faces/16.jpg" alt="">
                                               </span>
                                           </div>
                                           <div class="flex-fill">
                                               <span class="d-block fw-semibold">
                                                   Wyatt Thompson
                                               </span>
                                           </div>
                                           <div class="dropdown">
                                               <a aria-label="anchor" href="javascript:void(0);"
                                                   data-bs-toggle="dropdown"
                                                   class="btn btn-icon btn-sm btn-outline-light">
                                                   <i class="ri-more-2-fill"></i>
                                               </a>
                                               <ul class="dropdown-menu" role="menu">
                                                   <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                               class="ri-message-2-line me-2"></i>Chat</a></li>
                                                   <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                               class="ri-phone-line me-2"></i>Audio Call</a></li>
                                                   <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                               class="ri-live-line me-2"></i>Video Call</a></li>
                                                   <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                               class="ri-edit-line me-2"></i>Edit</a></li>
                                                   <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                               class="ri-spam-2-line me-2"></i>Block</a></li>
                                                   <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                               class="ri-delete-bin-line me-2"></i>Delete</a></li>
                                               </ul>
                                           </div>
                                       </div>
                                   </li>
                               </ul>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="main-chat-area border">
                   <div class="d-flex align-items-center main-chat-head flex-wrap">
                       <div class="me-2 lh-1">
                           <span class="avatar avatar-md online avatar-rounded chatstatusperson">
                               <img class="chatimageperson" src="../assets/images/faces/8.jpg" alt="img">
                           </span>
                       </div>
                       <div class="flex-fill">
                           <p class="mb-0 fw-medium fs-14 lh-1">
                               <a href="javascript:void(0);" data-bs-toggle="offcanvas"
                                   data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"
                                   class="chatnameperson responsive-userinfo-open">Aria Robinson</a>
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
                               <li class="chat-day-label">
                                   <span>Today</span>
                               </li>
                               <li class="chat-item-start">
                                   <div class="chat-list-inner">
                                       <div class="chat-user-profile">
                                           <span class="avatar avatar-md online avatar-rounded chatstatusperson">
                                               <img class="chatimageperson" src="../assets/images/faces/8.jpg"
                                                   alt="img">
                                           </span>
                                       </div>
                                       <div class="ms-3">
                                           <span class="chatting-user-info">
                                               <span class="chatnameperson">Aria Robinson</span> <span
                                                   class="msg-sent-time">11:48 PM</span>
                                           </span>
                                           <div class="main-chat-msg">
                                               <div>
                                                   <p class="mb-0">Hey there! &#128522; How's it going?</p>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </li>
                               <li class="chat-item-end">
                                   <div class="chat-list-inner">
                                       <div class="me-3">
                                           <span class="chatting-user-info">
                                               <span class="msg-sent-time"><span
                                                       class="chat-read-mark align-middle d-inline-flex"><i
                                                           class="ri-check-double-line"></i></span>11:50PM</span>
                                               You
                                           </span>
                                           <div class="main-chat-msg">
                                               <div>
                                                   <p class="mb-0">Hey! I'm good, thanks. Just finished some work.
                                                       How about you?</p>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="chat-user-profile">
                                           <span class="avatar avatar-md online avatar-rounded">
                                               <img src="../assets/images/faces/15.jpg" alt="img">
                                           </span>
                                       </div>
                                   </div>
                               </li>
                               <li class="chat-item-start">
                                   <div class="chat-list-inner">
                                       <div class="chat-user-profile">
                                           <span class="avatar avatar-md online avatar-rounded chatstatusperson">
                                               <img class="chatimageperson" src="../assets/images/faces/8.jpg"
                                                   alt="img">
                                           </span>
                                       </div>
                                       <div class="ms-3">
                                           <span class="chatting-user-info">
                                               <span class="chatnameperson">Aria Robinson</span> <span
                                                   class="msg-sent-time">11:51 PM</span>
                                           </span>
                                           <div class="main-chat-msg">
                                               <div>
                                                   <p class="mb-0">Not too bad, just chilling. Have any exciting
                                                       plans for the weekend?</p>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </li>
                               <li class="chat-item-end">
                                   <div class="chat-list-inner">
                                       <div class="me-3">
                                           <span class="chatting-user-info">
                                               <span class="msg-sent-time"><span
                                                       class="chat-read-mark align-middle d-inline-flex"><i
                                                           class="ri-check-double-line"></i></span>11:52 PM</span>
                                               You
                                           </span>
                                           <div class="main-chat-msg">
                                               <div>
                                                   <p class="mb-0">Not really, just relaxing. Maybe catch up on
                                                       some movies. You?</p>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="chat-user-profile">
                                           <span class="avatar avatar-md online avatar-rounded">
                                               <img src="../assets/images/faces/15.jpg" alt="img">
                                           </span>
                                       </div>
                                   </div>
                               </li>
                               <li class="chat-item-start">
                                   <div class="chat-list-inner">
                                       <div class="chat-user-profile">
                                           <span class="avatar avatar-md online avatar-rounded chatstatusperson">
                                               <img class="chatimageperson" src="../assets/images/faces/8.jpg"
                                                   alt="img">
                                           </span>
                                       </div>
                                       <div class="ms-3">
                                           <span class="chatting-user-info">
                                               <span class="chatnameperson">Aria Robinson</span> <span
                                                   class="msg-sent-time">11:55 PM</span>
                                           </span>
                                           <div class="main-chat-msg">
                                               <div>
                                                   <p class="mb-0">Same here. Thinking of trying out that new cafe
                                                       downtown. Heard they have amazing coffee.</p>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </li>
                               <li class="chat-item-end">
                                   <div class="chat-list-inner">
                                       <div class="me-3">
                                           <span class="chatting-user-info">
                                               <span class="msg-sent-time"><span
                                                       class="chat-read-mark align-middle d-inline-flex"><i
                                                           class="ri-check-double-line"></i></span>11:52 PM</span>
                                               You
                                           </span>
                                           <div class="main-chat-msg">
                                               <div class="">
                                                   <p class="mb-0">Oh, nice! Let me know how it is. I might check
                                                       it out too.</p>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="chat-user-profile">
                                           <span class="avatar avatar-md online avatar-rounded">
                                               <img src="../assets/images/faces/15.jpg" alt="img">
                                           </span>
                                       </div>
                                   </div>
                               </li>
                               <li class="chat-item-start">
                                   <div class="chat-list-inner">
                                       <div class="chat-user-profile">
                                           <span class="avatar avatar-md online avatar-rounded">
                                               <img class="chatimageperson" src="../assets/images/faces/8.jpg"
                                                   alt="img">
                                           </span>
                                       </div>
                                       <div class="ms-3">
                                           <span class="chatting-user-info chatnameperson">
                                               Aria Robinson <span class="msg-sent-time">11:45 PM</span>
                                           </span>
                                           <div class="main-chat-msg">
                                               <div>
                                                   <p class="mb-0">No spoilers, promise! Enjoy the binge-watching
                                                       session. &#128516;</p>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </li>
                           </ul>
                       </div>
                   </div>
                   <div class="chat-footer">
                       <a aria-label="anchor" class="btn btn-icon me-2 btn-success emoji-picker"
                           href="javascript:void(0)">
                           <i class="ri-emotion-line"></i>
                       </a>
                       <input class="form-control chat-message-space" placeholder="Type your message here..."
                           type="text">
                       <a aria-label="anchor" class="btn btn-primary ms-2 btn-icon btn-send"
                           href="javascript:void(0)">
                           <i class="ri-send-plane-2-line"></i>
                       </a>
                   </div>
               </div>
           </div>
       </div>
   </div>
</div>

@endsection
