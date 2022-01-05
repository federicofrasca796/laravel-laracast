<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laracasts @yield('page-title', '')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400&display=swap" rel="stylesheet">
        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    </head>
    <body>
        @include('partials.header')
        
        <main id="site_main">
            @yield('main-content')
        </main>

        @include('partials.footer')
    </body>
</html>
