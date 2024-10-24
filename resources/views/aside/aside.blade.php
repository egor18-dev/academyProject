<aside class="app-sidebar sticky" id="sidebar">

    <!-- Start::main-sidebar -->
    <div class="main-sidebar w-100" id="sidebar-scroll">

        <!-- Start::nav -->
        <nav class="main-menu-container nav nav-pills flex-column sub-open w-100">
            <div class="slide-left" id="slide-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> 
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                </svg>
            </div>
            <ul class="main-menu">
                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">Dashboard</span></li>
                <!-- End::slide__category -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item {{ Route::is('home') ? 'active' : '' }}">
                        <i class="ri-arrow-right-s-line side-menu__angle"></i>
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M104,216V152h48v64h64V120a8,8,0,0,0-2.34-5.66l-80-80a8,8,0,0,0-11.32,0l-80,80A8,8,0,0,0,40,120v96Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                        <span class="side-menu__label">Inicio</span>
                    </a>
                </li>
                <!-- End::slide -->

                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">Usuarios</span></li>
                <!-- End::slide__category -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="{{ route('users.index') }}" class="side-menu__item {{ Route::is('users.*') ? 'active' : '' }}">
                        <svg width="64px" height="64px" class="side-menu__icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19 14C21.2091 14 23 16 23 17.5C23 18.3284 22.3284 19 21.5 19H21M17 11C18.6569 11 20 9.65685 20 8C20 6.34315 18.6569 5 17 5M5 14C2.79086 14 1 16 1 17.5C1 18.3284 1.67157 19 2.5 19H3M7 11C5.34315 11 4 9.65685 4 8C4 6.34315 5.34315 5 7 5M16.5 19H7.5C6.67157 19 6 18.3284 6 17.5C6 15 9 14 12 14C15 14 18 15 18 17.5C18 18.3284 17.3284 19 16.5 19ZM15 8C15 9.65685 13.6569 11 12 11C10.3431 11 9 9.65685 9 8C9 6.34315 10.3431 5 12 5C13.6569 5 15 6.34315 15 8Z" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        <span class="side-menu__label">Usuarios</span>
                        <i class="ri-arrow-right-s-line side-menu__angle"></i>
                    </a>
                </li>

                <li class="slide__category"><span class="category-name">Clases</span></li>
                <!-- End::slide__category -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="{{ route('classes.index') }}" class="side-menu__item {{ Route::is('classes.*') ? 'active' : '' }}">
                        <svg version="1.1" id="Uploaded to svgrepo.com" class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" xml:space="preserve" fill="#000000">
                            <path class="stone_een" d="M30,22v3c0,0.552-0.448,1-1,1h-1c-0.552,0-1-0.448-1-1v-3c0-0.552,0.448-1,1-1v-7.539l-11.198-0.896C16.621,12.822,16.337,13,16,13c-0.552,0-1-0.448-1-1c0-0.552,0.448-1,1-1c0.396,0,0.732,0.235,0.894,0.57l11.186,0.895c0.516,0.041,0.92,0.479,0.92,0.997V21C29.552,21,30,21.448,30,22z M16,19.725c-0.547,0-1.094-0.111-1.603-0.334L8,16.592v2.227c0,1.136,0.642,2.175,1.658,2.683l0,0C11.655,22.501,13.827,23,16,23s4.345-0.499,6.341-1.497l0,0C23.358,20.995,24,19.956,24,18.82v-2.227l-6.397,2.799C17.094,19.614,16.547,19.725,16,19.725z M29.906,11.084L17.202,5.526C16.819,5.358,16.41,5.275,16,5.275c-0.41,0-0.819,0.084-1.202,0.252L2.094,11.084c-0.799,0.35-0.799,1.483,0,1.832l12.703,5.559c0.765,0.334,1.641,0.334,2.405,0l9.416-4.121l-9.438-0.755C16.843,13.858,16.434,14,16,14c-1.103,0-2-0.897-2-2c0-1.103,0.897-2,2-2c0.552,0,1.062,0.224,1.431,0.609l10.729,0.858c0.842,0.067,1.525,0.666,1.751,1.445C30.704,12.561,30.703,11.433,29.906,11.084z"></path>
                        </svg>
                        <span class="side-menu__label">Clases</span>
                        <i class="ri-arrow-right-s-line side-menu__angle"></i>
                    </a>
                </li>

                <li class="slide__category"><span class="category-name">Niveles</span></li>
                <!-- End::slide__category -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="{{route('levels.index')}}" class="side-menu__item {{ Route::is('levels.*') ? 'active' : '' }}">
                        <svg fill="#fff" version="1.1" class="side-menu__icon" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve" stroke="#fff">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier">
                                <g>
                                    <rect x="16" y="4" width="2" height="16"></rect>
                                    <rect x="11" y="10" width="2" height="10"></rect>
                                    <rect x="6" y="14" width="2" height="6"></rect>
                                </g>
                            </g>
                        </svg>
                        <span class="side-menu__label">Niveles</span>
                        <i class="ri-arrow-right-s-line side-menu__angle"></i>
                    </a>
                </li>
                <li class="slide__category"><span class="category-name">Estudiar</span></li>
                <!-- End::slide__category -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="{{route('userClasses.videos')}}" class="side-menu__item {{ Route::is('userClasses*') ? 'active' : '' }}">
                        <svg version="1.1" id="Uploaded to svgrepo.com" class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .feather_een{fill:#ffff;} .st0{fill:#ff;} </style> <path class="feather_een" d="M27,21V7c0-0.552-0.448-1-1-1H6C5.448,6,5,6.448,5,7v14c0,0.552,0.448,1,1,1h20 C26.552,22,27,21.552,27,21z M6,7h20v14H6V7z M29,23V7c0-1.657-1.343-3-3-3H6C4.343,4,3,5.343,3,7v16c-1.105,0-2,0.895-2,2 c0,1.105,0.895,2,2,2h26c1.105,0,2-0.895,2-2C31,23.895,30.105,23,29,23z M4,7c0-1.103,0.897-2,2-2h20c1.103,0,2,0.897,2,2v16H4V7z M29,26H3c-0.551,0-1-0.449-1-1s0.449-1,1-1h10c0,0.552,0.448,1,1,1h4c0.552,0,1-0.448,1-1h10c0.551,0,1,0.449,1,1S29.551,26,29,26z "></path> </g></svg>
                        <span class="side-menu__label">Estudiar</span>
                        <i class="ri-arrow-right-s-line side-menu__angle"></i>
                    </a>
                </li>
                <li class="slide__category"><span class="category-name">Examenes</span></li>
                <!-- End::slide__category -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="{{route('exams.index')}}" class="side-menu__item {{ Route::is('exams.*') || Route::is('questions.*') ? 'active' : '' }}">
                        <svg fill="#fff" height="200px" class="side-menu__icon" width="200px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 204 204" xml:space="preserve" stroke="#fff">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier"> 
                                <path d="M139.185,157.339h25.175l-27.222,29.022v-26.974C137.137,158.257,138.056,157.339,139.185,157.339z M127.137,204H29.482 c-2.761,0-5-2.239-5-5V5c0-2.761,2.239-5,5-5h145.036c2.761,0,5,2.239,5,5v142.339h-40.333c-6.643,0-12.047,5.405-12.047,12.048V204 z M48.25,29c0,2.761,2.239,5,5,5h87.5c2.761,0,5-2.239,5-5s-2.239-5-5-5h-87.5C50.489,24,48.25,26.239,48.25,29z M48.25,59.5 c0,2.761,2.239,5,5,5h87.5c2.761,0,5-2.239,5-5s-2.239-5-5-5h-87.5C50.489,54.5,48.25,56.739,48.25,59.5z M48.25,90 c0,2.761,2.239,5,5,5h71.907c2.761,0,5-2.239,5-5s-2.239-5-5-5H53.25C50.489,85,48.25,87.239,48.25,90z M53.25,125.5h99.625 c2.761,0,5-2.239,5-5s-2.239-5-5-5H53.25c-2.761,0-5,2.239-5,5S50.489,125.5,53.25,125.5z"></path>
                            </g>
                        </svg>
                        <span class="side-menu__label">Exámenes</span>
                        <i class="ri-arrow-right-s-line side-menu__angle"></i>
                    </a>
                </li>
                

                <li class="slide__category"><span class="category-name">Perfil</span></li>
                <!-- End::slide__category -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="{{ route('profile.index') }}" class="side-menu__item {{ Route::is('profile.*') ? 'active' : '' }}">
                        <svg width="64px" height="64px" class="side-menu__icon" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                            <path d="M17.599 3.738v2.598l0.8 0.207c0.905 0.234 1.768 0.597 2.566 1.081l0.715 0.434 1.86-1.86 2.262 2.262-1.888 1.888 0.407 0.708c0.451 0.785 0.788 1.635 1.002 2.527l0.196 0.817h2.744v3.199h-2.806l-0.216 0.782c-0.233 0.844-0.583 1.654-1.04 2.406l-0.434 0.716 2.036 2.035-2.262 2.262-2.064-2.064-0.707 0.407c-0.734 0.422-1.531 0.745-2.368 0.961l-0.8 0.206v2.951h-3.199v-2.951l-0.8-0.206c-0.837-0.216-1.634-0.539-2.368-0.961l-0.708-0.407-2.064 2.064-2.262-2.262 2.036-2.035-0.434-0.716c-0.457-0.753-0.807-1.562-1.04-2.406l-0.216-0.782h-2.806v-3.199h2.744l0.196-0.817c0.213-0.891 0.551-1.742 1.002-2.527l0.407-0.708-1.888-1.888 2.262-2.262 1.86 1.86 0.715-0.434c0.798-0.484 1.661-0.848 2.566-1.081l0.8-0.207v-2.598h3.199zM16 20.799c2.646 0 4.798-2.153 4.798-4.799s-2.152-4.799-4.798-4.799-4.798 2.153-4.798 4.799c0 2.646 2.152 4.799 4.798 4.799zM18.666 2.672h-5.331v2.839c-1.018 0.263-1.975 0.67-2.852 1.202l-2.022-2.022-3.769 3.77 2.065 2.065c-0.498 0.867-0.875 1.81-1.114 2.809h-2.97v5.331h3.060c0.263 0.953 0.655 1.85 1.156 2.676l-2.198 2.198 3.769 3.77 2.241-2.241c0.816 0.469 1.7 0.828 2.633 1.069v3.191h5.331v-3.191c0.933-0.241 1.817-0.6 2.633-1.069l2.241 2.241 3.769-3.77-2.198-2.198c0.501-0.826 0.893-1.723 1.156-2.676h3.060v-5.331h-2.97c-0.239-0.999-0.616-1.941-1.114-2.809l2.065-2.065-3.769-3.77-2.022 2.022c-0.877-0.532-1.834-0.939-2.852-1.202v-2.839h-0zM16 19.733c-2.062 0-3.732-1.671-3.732-3.733s1.67-3.732 3.732-3.732 3.732 1.671 3.732 3.732c0 2.062-1.67 3.733-3.732 3.733v0z" fill="#fff"></path>
                        </svg>
                        <span class="side-menu__label">Configuración</span>
                        <i class="ri-arrow-right-s-line side-menu__angle"></i>
                    </a>
                </li>
            </ul>
            <div class="slide-right" id="slide-right">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                </svg>
            </div>
        </nav>
        <!-- End::nav -->

    </div>
    <!-- End::main-sidebar -->

</aside>
