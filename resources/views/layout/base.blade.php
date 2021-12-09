<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('pageTitle')


    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link
            rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
            integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"
            crossorigin="anonymous"
    />
    @yield('stylesheets')
</head>

<body>
@include('layout.navigation')

@yield('content')

<script src="{{asset('js/app.js')}}"></script>
@yield('scripts')
</body>
</html>