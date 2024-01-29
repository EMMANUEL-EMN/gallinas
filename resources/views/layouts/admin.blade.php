<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

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
    <script src="{{ url('storage/js/admin.js') }}"></script>
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
<body class="max-h-full bg-slate-800 m-0">
    <div id="top_nav" class="m-0 sticky">
        @include('layouts.top_nav')
    </div>
    <div class="flex flex-row justify-between mr-2 gap-2">
        <div id="side_nav" class="shadow-md bg-slate-900 w-1/4 h-full px-2 rounded sticky">
            @include('layouts.side_nav')
        </div>
        <div class="main_area w-full">
            <div id="content_area">
                @yield('content')
            </div>
            <div class="text-center p-2 bg-slate-900 text-slate-50 rounded-md shadow-md">
                <footer>
                    &copy; Emmanuel Mbuyu Nyamawi 2024.
                </footer>
            </div>
        </div>
    </div>
</body>
</html>
