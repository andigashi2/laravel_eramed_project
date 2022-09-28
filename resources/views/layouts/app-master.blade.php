<!doctype html>
<html lang="en">
    @include('layouts.partials.head')
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
