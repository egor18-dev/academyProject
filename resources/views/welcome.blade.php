<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Academia</title>
    <meta name="description" content="Eselmind es una academia especializada en formación de trading, donde enseñamos a dominar los mercados financieros con estrategias efectivas y herramientas avanzadas. Únete a nosotros y transforma tu futuro financiero.">
    <meta name="keywords" content="Academia de Trading, Eselmind, formación en trading, cursos de trading, mercados financieros, estrategias de trading">
    <meta name="author" content="Eselmind">
    <!-- ICONS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- BOOTSTRAP -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        .egma {
            background: #fff;
            position: fixed;
            bottom: 0;
            left: 0;
            z-index: 99999 !important;
            padding: 10px;
            margin: 20px;
            border: 1px solid #18191A;
        }

    </style>
</head>

<body>
    @yield('content')
</body>

</html>
