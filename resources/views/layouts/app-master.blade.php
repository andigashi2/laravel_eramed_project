<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="DN">
        <meta name="generator" content="Hugo 0.87.0">
        <title>Era Med</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
        <!-- MD Bootstrap CSS -->
        <link href="{{ asset('css/mdbootstrap.css') }}" rel="stylesheet">
    </head>

    <body>
        @auth
            @include('layouts.partials.navbar')
        @endauth

        <main class="container">
            @yield('content')
            @auth
                @include('layouts.partials.copy')
            @endauth
        </main>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
