<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    @livewireStyles
    <link href="css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <style>
        .active{
            background-color: aqua;
            color:blue;
            font-weight: bold;
        }
    </style>

</head>
<body class="container mx-auto mt-5">

    <!--navBar-->
    @include('layouts.partials.header')

    @yield('content')

    @livewireScripts
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>