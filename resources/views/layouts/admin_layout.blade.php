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
<body>
    <div id="app admin">
        <div class="container mx-auto text-right relative">
            <nav id="admin-nav">
                <ul class="menu-box flex">
                    <li>
                        <a class="menu-item mr-6" href="/admin">Dashboard</a>
                    </li>
                    <li>
                        <a class="menu-item mr-6" href="/admin/upload">+ Add Image</a>
                    </li>
                    <li>
                        <a class="menu-item mr-6" href="/admin/upload">+ Add Video</a>
                    </li>
                    <li>
                        <a class="menu-item " href="/logout">
                            Logout
                        </a>
                    </li>
                </ul>
            </nav>
            <h1 class="text-left pt-4">Admin</h1>

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
    </div>
    <script
            src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
            crossorigin="anonymous"></script>
    <script src="/js/scripts.js"></script>
</body>
</html>