<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!--ICONS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!--BOOTSTRAP-->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <!--JQUERY-->
</head>

<body>
    @yield('content')
</body>
</html>