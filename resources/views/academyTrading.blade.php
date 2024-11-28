@extends('welcome')
@section('content')
@include('layouts/whatsapp')
<section class="container-fluid min-vh-100 d-flex flex-column align-items-center top d-flex align-items-center">
    <a href="{{ route('main') }}" style="position: fixed; top: 0; left: 0; z-index: 9999 !important; margin: 35px;"><svg fill="#fff" height="30px" width="30px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" stroke="#fff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M320,112H192V48h-32L0,208l160,160h32v-64h160c88.365,0,112,71.635,112,160h48V304C512,197.962,426.038,112,320,112z"></path> </g> </g> </g></svg></a>
    <div class="row w-100 align-items-center justify-content-center text-center">
        <div class="col-lg-6">
            <h2 class="h1 text-p">Introducción al <strong class="text-primary">Mundo del Trading</strong> y Guía para <strong class="text-primary">Iniciar</strong> tu Formación <strong class="text-primary">Profesional</strong></h2>
            <p class="h5 mt-3">
                Aprender es el primer paso para nuevas oportunidades. Agenda una llamada informativa y descubre cómo nuestra formación puede ayudarte a desarrollar habilidades clave y alcanzar tus objetivos. ¡Invierte en tu crecimiento!
            </p>
            <ul class="mt-5">
                <li class="h5">
                    <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM16.0303 8.96967C16.3232 9.26256 16.3232 9.73744 16.0303 10.0303L11.0303 15.0303C10.7374 15.3232 10.2626 15.3232 9.96967 15.0303L7.96967 13.0303C7.67678 12.7374 7.67678 12.2626 7.96967 11.9697C8.26256 11.6768 8.73744 11.6768 9.03033 11.9697L10.5 13.4393L12.7348 11.2045L14.9697 8.96967C15.2626 8.67678 15.7374 8.67678 16.0303 8.96967Z" fill="#66be1e"></path> </g></svg> 
                    <span>Estrategias para tomar decisiones financieras inteligentes.</span>
                </li>
                <li class="h5 mt-4">
                    <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM16.0303 8.96967C16.3232 9.26256 16.3232 9.73744 16.0303 10.0303L11.0303 15.0303C10.7374 15.3232 10.2626 15.3232 9.96967 15.0303L7.96967 13.0303C7.67678 12.7374 7.67678 12.2626 7.96967 11.9697C8.26256 11.6768 8.73744 11.6768 9.03033 11.9697L10.5 13.4393L12.7348 11.2045L14.9697 8.96967C15.2626 8.67678 15.7374 8.67678 16.0303 8.96967Z" fill="#66be1e"></path> </g></svg> 
                    <span>Gestión efectiva de riesgos en los mercados.</span>
                </li>
                <li class="h5 mt-4">
                    <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM16.0303 8.96967C16.3232 9.26256 16.3232 9.73744 16.0303 10.0303L11.0303 15.0303C10.7374 15.3232 10.2626 15.3232 9.96967 15.0303L7.96967 13.0303C7.67678 12.7374 7.67678 12.2626 7.96967 11.9697C8.26256 11.6768 8.73744 11.6768 9.03033 11.9697L10.5 13.4393L12.7348 11.2045L14.9697 8.96967C15.2626 8.67678 15.7374 8.67678 16.0303 8.96967Z" fill="#66be1e"></path> </g></svg> 
                    <span>Análisis técnico y fundamental de activos.</span>
                </li>
                <li class="h5 mt-4 mb-5">
                    <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM16.0303 8.96967C16.3232 9.26256 16.3232 9.73744 16.0303 10.0303L11.0303 15.0303C10.7374 15.3232 10.2626 15.3232 9.96967 15.0303L7.96967 13.0303C7.67678 12.7374 7.67678 12.2626 7.96967 11.9697C8.26256 11.6768 8.73744 11.6768 9.03033 11.9697L10.5 13.4393L12.7348 11.2045L14.9697 8.96967C15.2626 8.67678 15.7374 8.67678 16.0303 8.96967Z" fill="#66be1e"></path> </g></svg> 
                    <span>Planificación y ejecución de operaciones con confianza.</span>
                </li>
            </ul>
            <div class="calendly-inline-widget" data-url="https://calendly.com/eselmindformacion" class="w-100" style="width: 100%; height:700px;"></div>
<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
        </div>
    </div>
</section>
@endsection
   <style>
 .top{
            background: linear-gradient(hsla(0, 0%, 0%, 0.800), hsla(0, 0%, 0%, 0.800)),url('{{ asset('images/classes/img1.jpg') }}');
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            padding: 100px 0;
            overflow-y: auto;
            background-attachment: fixed;
            
            h2{
                color: #fff;
                text-transform: uppercase;
                font-weight: 800;
            }

            p{
                color: #dadada;
                font-weight: 300;
            }

            ul{

                li{
                    color: #fff;
                    list-style: none;
                    text-align: start;
                    font-weight: normal;
                }
            }
        }
   </style>
