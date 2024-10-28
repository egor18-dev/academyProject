<aside class="app-sidebar sticky" id="sidebar">

    <button class="close-btn" onclick="toggleSidebar()">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <line x1="18" y1="6" x2="6" y2="18"></line>
            <line x1="6" y1="6" x2="18" y2="18"></line>
        </svg>
    </button>

    <div class="main-sidebar w-100" id="sidebar-scroll">

        <nav class="main-menu-container nav nav-pills flex-column sub-open w-100">
            <ul class="main-menu">

                <li class="slide__category"><span class="category-name">Dashboard</span></li>

                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item {{ Route::is('home') ? 'active' : '' }}">
                        <i class="ri-arrow-right-s-line side-menu__angle"></i>
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M104,216V152h48v64h64V120a8,8,0,0,0-2.34-5.66l-80-80a8,8,0,0,0-11.32,0l-80,80A8,8,0,0,0,40,120v96Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                        <span class="side-menu__label">Inicio</span>
                    </a>
                </li>

                @role('Administrador|Editor')
                    <li class="slide__category"><span class="category-name">Usuarios</span></li>
                    <li class="slide has-sub">
                        <a href="{{ route('users.index') }}" class="side-menu__item {{ Route::is('users.*') ? 'active' : '' }}">
                            <svg width="64px" height="64px" class="side-menu__icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19 14C21.2091 14 23 16 23 17.5C23 18.3284 22.3284 19 21.5 19H21M17 11C18.6569 11 20 9.65685 20 8C20 6.34315 18.6569 5 17 5M5 14C2.79086 14 1 16 1 17.5C1 18.3284 1.67157 19 2.5 19H3M7 11C5.34315 11 4 9.65685 4 8C4 6.34315 5.34315 5 7 5M16.5 19H7.5C6.67157 19 6 18.3284 6 17.5C6 15 9 14 12 14C15 14 18 15 18 17.5C18 18.3284 17.3284 19 16.5 19ZM15 8C15 9.65685 13.6569 11 12 11C10.3431 11 9 9.65685 9 8C9 6.34315 10.3431 5 12 5C13.6569 5 15 6.34315 15 8Z" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span class="side-menu__label">Usuarios</span>
                            <i class="ri-arrow-right-s-line side-menu__angle"></i>
                        </a>
                    </li>
                @endrole

                @role('Administrador|Editor')
                <li class="slide__category"><span class="category-name">Clases</span></li>
                <li class="slide has-sub">
                    <a href="{{ route('classes.index') }}" class="side-menu__item {{ Route::is('classes.*') ? 'active' : '' }}">
                        <svg version="1.1" id="Uploaded to svgrepo.com" class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" xml:space="preserve" fill="#000000">
                            <path class="stone_een" d="M30,22v3c0,0.552-0.448,1-1,1h-1c-0.552,0-1-0.448-1-1v-3c0-0.552,0.448-1,1-1v-7.539l-11.198-0.896C16.621,12.822,16.337,13,16,13c-0.552,0-1-0.448-1-1c0-0.552,0.448-1,1-1c0.396,0,0.732,0.235,0.894,0.57l11.186,0.895c0.516,0.041,0.92,0.479,0.92,0.997V21C29.552,21,30,21.448,30,22z M16,19.725c-0.547,0-1.094-0.111-1.603-0.334L8,16.592v2.227c0,1.136,0.642,2.175,1.658,2.683l0,0C11.655,22.501,13.827,23,16,23s4.345-0.499,6.341-1.497l0,0C23.358,20.995,24,19.956,24,18.82v-2.227l-6.397,2.799C17.094,19.614,16.547,19.725,16,19.725z M29.906,11.084L17.202,5.526C16.819,5.358,16.41,5.275,16,5.275c-0.41,0-0.819,0.084-1.202,0.252L2.094,11.084c-0.799,0.35-0.799,1.483,0,1.832l12.703,5.559c0.765,0.334,1.641,0.334,2.405,0l9.416-4.121l-9.438-0.755C16.843,13.858,16.434,14,16,14c-1.103,0-2-0.897-2-2c0-1.103,0.897-2,2-2c0.552,0,1.062,0.224,1.431,0.609l10.729,0.858c0.842,0.067,1.525,0.666,1.751,1.445C30.704,12.561,30.703,11.433,29.906,11.084z"></path>
                        </svg>
                        <span class="side-menu__label">Clases</span>
                        <i class="ri-arrow-right-s-line side-menu__angle"></i>
                    </a>
                </li>
                @endrole

                @role('Administrador|Editor')
                    <li class="slide__category"><span class="category-name">Niveles</span></li>
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
                @endrole

                @role('Administrador|Editor')
                    <li class="slide__category"><span class="category-name">Examenes</span></li>
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
                @endrole
                
                <li class="slide__category"><span class="category-name">Estudiar</span></li>
                <li class="slide has-sub">
                    <a href="{{route('userClasses.videos')}}" class="side-menu__item {{ Route::is('userClasses*') ? 'active' : '' }}">
                        <svg version="1.1" id="Uploaded to svgrepo.com" class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .feather_een{fill:#ffff;} .st0{fill:#ff;} </style> <path class="feather_een" d="M27,21V7c0-0.552-0.448-1-1-1H6C5.448,6,5,6.448,5,7v14c0,0.552,0.448,1,1,1h20 C26.552,22,27,21.552,27,21z M6,7h20v14H6V7z M29,23V7c0-1.657-1.343-3-3-3H6C4.343,4,3,5.343,3,7v16c-1.105,0-2,0.895-2,2 c0,1.105,0.895,2,2,2h26c1.105,0,2-0.895,2-2C31,23.895,30.105,23,29,23z M4,7c0-1.103,0.897-2,2-2h20c1.103,0,2,0.897,2,2v16H4V7z M29,26H3c-0.551,0-1-0.449-1-1s0.449-1,1-1h10c0,0.552,0.448,1,1,1h4c0.552,0,1-0.448,1-1h10c0.551,0,1,0.449,1,1S29.551,26,29,26z "></path> </g></svg>
                        <span class="side-menu__label">Estudiar</span>
                        <i class="ri-arrow-right-s-line side-menu__angle"></i>
                    </a>
                </li>  
                
                <li class="slide__category"><span class="category-name">Ayuda</span></li>
                <li class="slide has-sub">
                    <a href="{{route('chats.index')}}" class="side-menu__item {{ Route::is('chats*') ? 'active' : '' }}">
                        <svg width="64px" height="64px" class="side-menu__icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#fff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M17 3.33782C15.5291 2.48697 13.8214 2 12 2C6.47715 2 2 6.47715 2 12C2 13.5997 2.37562 15.1116 3.04346 16.4525C3.22094 16.8088 3.28001 17.2161 3.17712 17.6006L2.58151 19.8267C2.32295 20.793 3.20701 21.677 4.17335 21.4185L6.39939 20.8229C6.78393 20.72 7.19121 20.7791 7.54753 20.9565C8.88837 21.6244 10.4003 22 12 22C17.5228 22 22 17.5228 22 12C22 10.1786 21.513 8.47087 20.6622 7" stroke="#fff" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
                        <span class="side-menu__label">Chat</span>
                        <i class="ri-arrow-right-s-line side-menu__angle"></i>
                    </a>
                </li>  
                
                <li class="slide__category"><span class="category-name">Perfil</span></li>
                <li class="slide has-sub">
                    <a href="{{ route('profile.index') }}" class="side-menu__item {{ Route::is('profile.*') ? 'active' : '' }}">
                        <svg width="64px" height="64px" class="side-menu__icon" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                            <path d="M17.599 3.738v2.598l0.8 0.207c0.905 0.234 1.768 0.597 2.566 1.081l0.715 0.434 1.86-1.86 2.262 2.262-1.888 1.888 0.407 0.708c0.451 0.785 0.788 1.635 1.002 2.527l0.196 0.817h2.744v3.199h-2.806l-0.216 0.782c-0.233 0.844-0.583 1.654-1.04 2.406l-0.434 0.716 2.036 2.035-2.262 2.262-2.064-2.064-0.707 0.407c-0.734 0.422-1.531 0.745-2.368 0.961l-0.8 0.206v2.951h-3.199v-2.951l-0.8-0.206c-0.837-0.216-1.634-0.539-2.368-0.961l-0.708-0.407-2.064 2.064-2.262-2.262 2.036-2.035-0.434-0.716c-0.457-0.753-0.807-1.562-1.04-2.406l-0.216-0.782h-2.806v-3.199h2.744l0.196-0.817c0.213-0.891 0.551-1.742 1.002-2.527l0.407-0.708-1.888-1.888 2.262-2.262 1.86 1.86 0.715-0.434c0.798-0.484 1.661-0.848 2.566-1.081l0.8-0.207v-2.598h3.199zM16 20.799c2.646 0 4.798-2.153 4.798-4.799s-2.152-4.799-4.798-4.799-4.798 2.153-4.798 4.799c0 2.646 2.152 4.799 4.798 4.799zM18.666 2.672h-5.331v2.839c-1.018 0.263-1.975 0.67-2.852 1.202l-2.022-2.022-3.769 3.77 2.065 2.065c-0.498 0.867-0.875 1.81-1.114 2.809h-2.97v5.331h3.060c0.263 0.953 0.655 1.85 1.156 2.676l-2.198 2.198 3.769 3.77 2.241-2.241c0.816 0.469 1.7 0.828 2.633 1.069v3.191h5.331v-3.191c0.933-0.241 1.817-0.6 2.633-1.069l2.241 2.241 3.769-3.77-2.198-2.198c0.501-0.826 0.893-1.723 1.156-2.676h3.060v-5.331h-2.97c-0.239-0.999-0.616-1.941-1.114-2.809l2.065-2.065-3.769-3.77-2.022 2.022c-0.877-0.532-1.834-0.939-2.852-1.202v-2.839h-0zM16 19.733c-2.062 0-3.732-1.671-3.732-3.733s1.67-3.732 3.732-3.732 3.732 1.671 3.732 3.732c0 2.062-1.67 3.733-3.732 3.733v0z" fill="#fff"></path>
                        </svg>
                        <span class="side-menu__label">Configuración</span>
                        <i class="ri-arrow-right-s-line side-menu__angle"></i>
                    </a>
                </li>

                <li class="slide__category"><span class="category-name">Legal</span></li>
                <li class="slide has-sub">
                    <a href="{{route('terms')}}" class="side-menu__item {{ Route::is('terms*') ? 'active' : '' }}">
                        <svg fill="#fff" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" xmlns:xlink="http://www.w3.org/1999/xlink" width="64px" height="64px" viewBox="0 0 420 420" xml:space="preserve" stroke="#fff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M252.877,92.823h53.791l0.005,62.757l27.271-42.343V77.743c0-2.168-0.863-4.247-2.396-5.787L261.984,2.395 C260.451,0.863,258.371,0,256.199,0H41.113C27.579,0,16.566,11.008,16.566,24.543v370.914c0,13.534,11.012,24.543,24.547,24.543 h268.283c13.533,0,24.545-11.009,24.545-24.543V290.15l-27.264,41.721l0.004,60.854H43.84V27.274h198.906v55.417 C242.746,88.29,247.281,92.823,252.877,92.823z"></path> <path d="M364.398,195.123l-11.271-7.364c-1.84-1.201-4.303-0.686-5.506,1.154l-60.688,92.866l-11.67-7.625l60.688-92.867 c1.203-1.841,0.687-4.304-1.153-5.506l-11.271-7.365c-1.84-1.202-4.305-0.686-5.506,1.154l-90.869,139.053 c-0.386,0.591-0.607,1.274-0.643,1.979l-2.375,48.258c-0.069,1.409,0.614,2.754,1.797,3.523c1.183,0.773,2.688,0.86,3.949,0.231 l43.243-21.553c0.634-0.313,1.17-0.793,1.558-1.385l90.867-139.052C366.754,198.79,366.236,196.326,364.398,195.123z"></path> <path d="M401.631,138.145l-40.869-26.708c-1.838-1.201-4.304-0.685-5.506,1.154l-27.563,42.179 c-1.201,1.84-0.686,4.306,1.154,5.508l40.869,26.706c1.838,1.202,4.305,0.686,5.506-1.154l27.562-42.178 C403.988,141.812,403.471,139.347,401.631,138.145z"></path> <path d="M83.563,87.462h78c5.523,0,10-4.478,10-10s-4.477-10-10-10h-78c-5.523,0-10,4.478-10,10S78.042,87.462,83.563,87.462z"></path> <path d="M231.563,127.462c0-5.522-4.479-10-10-10h-138c-5.523,0-10,4.478-10,10s4.477,10,10,10h138 C227.086,137.462,231.563,132.984,231.563,127.462z"></path> <path d="M83.563,187.462h78c5.523,0,10-4.478,10-10s-4.477-10-10-10h-78c-5.523,0-10,4.478-10,10S78.042,187.462,83.563,187.462z "></path> <path d="M83.563,237.462h78c5.523,0,10-4.478,10-10c0-5.521-4.477-10-10-10h-78c-5.523,0-10,4.479-10,10 C73.563,232.984,78.042,237.462,83.563,237.462z"></path> <path d="M87.796,366.694c-1.947,2.516,1.565,6.082,3.536,3.533c6.213-8.026,11.344-16.671,15.629-25.795 c2.674,1.679,6.185,1.343,9.065,0.205c4.151-1.637,7.67-4.796,11.021-7.655c1.981-1.69,4.287-4.481,7.029-4.748 c2.094-0.201,4.922,1.485,7.015,1.844c5.469,0.932,11.857-0.651,17.137-1.956c5.011-1.237,10.879-3.194,13.828-7.731 c1.763-2.712-2.568-5.216-4.317-2.521c-2.361,3.632-8.126,4.764-12.022,5.726c-4.573,1.131-9.879,2.246-14.592,1.442 c-3.552-0.604-6.425-2.752-10.077-1.125c-4.892,2.18-8.629,6.761-12.949,9.854c-1.933,1.384-4.142,2.714-6.56,2.901 c-0.995,0.077-1.806-0.288-2.48-0.896c0.532-1.234,1.06-2.474,1.563-3.725c4.876-12.104,7.081-24.396,9.344-37.146 c1.15-6.479,3.063-16.688-6.223-17.311c-8.205-0.548-15.296,11.287-17.918,17.524c-2.345,5.578-2.606,12.058-2.427,18.014 c0.111,3.712,1.447,7.566,2.432,11.404c-7.874,1.263-14.814,9.216-13.598,17.1c1.197,7.758,10.898,3.752,14.521,0.881 c3.667-2.905,4.854-6.534,4.893-10.448c0.731,1.205,1.342,2.65,1.974,4.002C99.395,349.544,94.098,358.552,87.796,366.694z M96.56,338.393c-0.74,3.298-4.913,6.554-8.199,6.858c-2.585,0.24-1.008-4.377-0.497-5.409c1.604-3.242,5.578-5.358,8.919-6.27 C96.939,335.199,96.914,336.811,96.56,338.393z M100.736,328.712c-0.851-3.976-2.032-7.969-2.338-11.583 c-0.592-6.975,0.647-14.284,4.106-20.384c2.161-3.812,6.566-9.654,11.239-10.154c4.173-0.444,1.628,9.705,1.267,11.744 c-1.117,6.294-1.914,12.541-3.471,18.763c-1.446,5.778-3.278,11.5-5.469,17.095C104.905,331.294,103.388,329.438,100.736,328.712 z"></path> </g> </g> </g> </g></svg>
                        <span class="side-menu__label">Términos y condiciones</span>
                        <i class="ri-arrow-right-s-line side-menu__angle"></i>
                    </a>
                    <a href="{{route('privacy')}}" class="side-menu__item {{ Route::is('privacy*') ? 'active' : '' }}">
                        <svg fill="#fff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" stroke="#fff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M12,22A17.5,17.5,0,0,0,21,6.7V6L12,2,3,6v.7A17.5,17.5,0,0,0,12,22ZM11,6h2V8H11Zm0,4h2v8H11Z"></path></g></svg>
                        <span class="side-menu__label">Politica de privacidad</span>
                        <i class="ri-arrow-right-s-line side-menu__angle"></i>
                    </a>
                    <a href="{{route('legal')}}" class="side-menu__item {{ Route::is('legal*') ? 'active' : '' }}">
                        <svg fill="#fff" height="200px" width="200px" class="side-menu__icon" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 483.668 483.668" xml:space="preserve" stroke="#fff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M464.885,267.229l-190.808-64.75l21.489-63.297l11.471,3.887c9.606,3.286,20.099-1.864,23.354-11.503 c3.253-9.669-1.866-20.13-11.535-23.385L158.48,53.733c-9.638-3.286-20.099,1.896-23.354,11.535 c-3.286,9.638,1.864,20.098,11.502,23.384l11.472,3.887L98.849,267.072l-11.44-3.856c-9.638-3.286-20.13,1.864-23.384,11.503 c-3.287,9.638,1.864,20.099,11.535,23.384l160.343,54.45c9.67,3.253,20.13-1.896,23.384-11.535 c3.288-9.638-1.896-20.098-11.534-23.385l-11.439-3.888l20.003-58.904l190.808,64.752c14.442,4.928,30.148-2.814,35.078-17.287 C487.1,287.835,479.325,272.16,464.885,267.229z"></path> </g> <g> <path d="M256.316,380.931H25.028C11.219,380.931,0,392.118,0,405.927c0,13.81,11.219,24.996,25.028,24.996h231.288 c13.809,0,24.998-11.187,24.998-24.996C281.314,392.118,270.125,380.931,256.316,380.931z"></path> </g> </g> </g></svg>
                        <span class="side-menu__label">Aviso legal</span>
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
