<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body id="admin">

<nav id="nav" class="container mx-auto pb-2 mt-10 pb-2 mb-4">
    <div class="logo inline-block max-w-xs p-1">
        <a href="/admin">
            <img class="w-full" src="{{url('/media/logo/admin_logo.svg')}}" alt="">
        </a>
    </div>

@if(Auth::check())
        <div id="nav-menu" class="pt-2 pr-2">
            <a href="{{url('admin')}}" class="home-btn inline-block"><img src="{{url('/media/icons/home_btn.svg')}}" alt="" class="w-full"></a>
            <a href="/" target="_blank">Site</a>
            <a href="" target="_blank">Analytics</a>
            <a href="/logout" class="">Logout</a>
        </div>
@endif


</nav>


<div id="app admin">
    {{--<h1 class="text-left pt-4">Admin</h1>--}}

    {{--<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm hidden">--}}
    {{--<div class="container">--}}

    {{--<a class="navbar-brand" href="{{ url('/') }}">--}}
    {{--{{ config('app.name', 'Laravel') }}--}}
    {{--</a>--}}
    {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
    {{--<span class="navbar-toggler-icon"></span>--}}
    {{--</button>--}}

    {{--<div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
    {{--<!-- Left Side Of Navbar -->--}}
    {{--<ul class="navbar-nav mr-auto">--}}

    {{--</ul>--}}

    {{--<!-- Right Side Of Navbar -->--}}
    {{--<ul class="navbar-nav ml-auto">--}}
    {{--<!-- Authentication Links -->--}}
    {{--@guest--}}
    {{--<li class="nav-item">--}}
    {{--<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
    {{--</li>--}}
    {{--@if (Route::has('register'))--}}
    {{--<li class="nav-item">--}}
    {{--<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
    {{--</li>--}}
    {{--@endif--}}
    {{--@else--}}
    {{--<li class="nav-item dropdown">--}}
    {{--<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
    {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
    {{--</a>--}}

    {{--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
    {{--<a class="dropdown-item" href="{{ route('logout') }}"--}}
    {{--onclick="event.preventDefault();--}}
    {{--document.getElementById('logout-form').submit();">--}}
    {{--{{ __('Logout') }}--}}
    {{--</a>--}}

    {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
    {{--@csrf--}}
    {{--</form>--}}
    {{--</div>--}}
    {{--</li>--}}
    {{--@endguest--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</nav>--}}
</div>

<div class="mb-2"></div>

<main class="py-4">
    @yield('content')
</main>

<script
        src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sz–πha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
        crossorigin="anonymous"></script>

<script src="{{ asset('js/admin.js') }}"></script>
</body>
</html>
