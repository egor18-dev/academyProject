<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <style>

        header {
            position: fixed;
            width: 100%;
            z-index: 1000;
        }

        .main {
            height: 100vh;
            display: flex;
        }

        .section {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: transform 0.3s, background-color 0.3s;
            font-size: 2rem;
        }
        .section:hover {
            transform: scale(1.1);
        }
        .section1 { background-color: #f8d7da; }
        .section2 { background-color: #d1ecf1; }
        .section3 { background-color: #d4edda; }

        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            z-index: 1000;
        }
    </style>

    <!--BOOTSTRAP-->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    @yield('content')
</body>

</html>