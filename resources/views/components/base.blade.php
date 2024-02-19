<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
</head>

<body>
    <header class="sticky top-0 overflow-hidden">
        @include('components.nav')
    </header>

    <main>
        @yield('main')
    </main>

    <footer>
        @include('components.footer')
    </footer>

</body>

</html>