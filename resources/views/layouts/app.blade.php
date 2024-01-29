<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    {{-- links --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="icon" href="{{ url('storage/images/logo.png') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Scripts -->
    <script src="{{ url('storage/js/main.js') }}"></script>
    @vite('resources/css/app.css')
    <style>
        @media only screen and (max-width: 768px){
            #desk_menu{
                display: none;
            }
        }
        @media only screen and (min-width: 769px){
            #mob_menu{
                display: none;
            }
        }
    </style>
</head>
<body class="max-h-full bg-slate-100 m-0">
    <header>
        <div class="2xl:hidden" id="desk_menu">
            @include('layouts.nav_desktop')
        </div>
        <div class="xl:hidden" id="mob_menu">
            @include('layouts.nav_mobile')
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        @include('layouts.footer')
    </footer>
</body>
</html>
