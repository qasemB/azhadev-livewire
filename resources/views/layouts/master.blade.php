<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:site_name" content="asanDev" />
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:site" content="@asandev" />
        <meta name="description" content="وبسایت ارائه مقالات با موضوع معرفی و ارائه راهنمایی در مسیر یادگیری برنامه نویسی" />
        <meta name="keywords" content="آموزش برنامه نویسی , راهنمای مسیر برنامه نویسی, مقاله برنامه نویسی" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="راهنمای برنامه نویسی" />
        <meta property="og:description" content="وبسایت ارائه مقالات با موضوع معرفی و ارائه راهنمایی در مسیر یادگیری برنامه نویسی" />
        <meta property="og:image" content={{App\Models\Thing::where('title' , 'webAddress')->first()->val.'/images/logo/pngLogo.png'}} />
        <meta name="twitter:title" content="راهنمای برنامه نویسی" />
        <meta name="twitter:description" content="وبسایت ارائه مقالات با موضوع معرفی و ارائه راهنمایی در مسیر یادگیری برنامه نویسی" />
        <meta name="twitter:image" content={{App\Models\Thing::where('title' , 'webAddress')->first()->val.'/images/logo/pngLogo.png'}} />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @yield('metas')
        <link rel="stylesheet" href="/css/bootstrap/bootstrap.min.css" />
        <link rel="stylesheet" href="/fontawesome/css/all.min.css" />
        <link rel="stylesheet" href="/css/animate.min.css" />
        @yield('livewireCss')
        <link rel="stylesheet" href="/css/grid.css" />
        <link rel="stylesheet" href="/css/style.css" />
        @yield('pagecss')
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>

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
