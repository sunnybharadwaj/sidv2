<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <title>Siddharth Bajpai</title>
</head>
<body>

@if(Session::has('message'))
    <div id="session-message">
        <p class="alert">{{ Session::get('message') }}</p>
    </div>

@endif
    @include ('partials.loadscreen')

    @yield('content')

    {{--<script--}}
    {{--src="https://code.jquery.com/jquery-3.4.1.slim.js"--}}
    {{--integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI="--}}
    {{--crossorigin="anonymous"></script>--}}
    <script src="{{url('/js/app.js')}}"></script>
</body>
</html>