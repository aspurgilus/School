<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title','Title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<style>
    .link{
        margin-left:40px;
    }
    .link a:link,a:visited{
        color:#4c110f;

    }
    table{
        padding:20px;
        text-align:center;

    }
    table tr,td,th{
        border:1px solid black;
        padding:20px;
    }


</style>
<body>
<div id="app">
    <header>
        @include('layouts.header')
    </header>


        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
