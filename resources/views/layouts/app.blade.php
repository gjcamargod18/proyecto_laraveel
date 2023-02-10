<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('assets/dist/css/bootstrap.css')}}">
    @yield('css')
    <title>@yield('title')</title>
</head>
<body>
        @extends('layouts.layout')
        @section('content') 

        <div class="container">
            @yield('contenido')
        </div>

        @endsection
    <script type="text/javascript" src="{{url('assets/dist/js/bootstrap.bundle.js')}}"></script>
    @yield('js')
</body>
</html>