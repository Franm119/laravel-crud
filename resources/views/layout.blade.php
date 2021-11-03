<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title', 'Home')</title>
        <!-- Styles -->
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
        <!-- Scripts -->
        <script src="{{ asset('/js/app.js') }}" defer></script>
    </head>
    <body>
        <div id="app" class="d-flex flex-column h-screen justify-content-between">
            <header>
                @include('personal.fragment.nav')
            </header>
            <main>
                @yield('content')
            </main>
            @include('personal.fragment.footer')
        </div>
    </body>
</html>