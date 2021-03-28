<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @yield('metas')
        <link rel="stylesheet" href="/css/bootstrap/bootstrap.min.css" />
        <link rel="stylesheet" href="/fontawesome/css/all.min.css" />
        <link rel="stylesheet" href="/css/animate.min.css" />
        @yield('livewireCss')
        <link rel="stylesheet" href="/css/grid.css" />
        <link rel="stylesheet" href="/css/style.css" />
        @yield('pagecss')

        <title>@yield('title' , 'azhadev')</title>
    </head>
    <body class="font-sans antialiased">

        @section('header')
        <livewire:header />
        @show



        <main style="margin-top: 2rem">
            @yield('content')
        </main>




        @section('footer')
        <livewire:footer />
        @show


        <script src="/js/jquery-3.5.1.min.js"></script>
        <script src="/js/popper.js"></script>
        <script src="/js/bootstrap/bootstrap.min.js"></script>
        <script src="/js/grid.js"></script>
        @yield('livewireJs')
        @yield('pagejs')
    </body>
</html>
