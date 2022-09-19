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
    </head>

    <body>
        <main class="container d-flex align-items-center justify-content-center text-center h-100">
            @yield('content')
        </main>
    </body>

</html>
