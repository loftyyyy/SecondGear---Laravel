<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('default', 'home')</title>
</head>
<body>
    <header>
        @yield('header-content')
    </header>

    <main>
        @yield('main-content')
    </main>

    <footer>
        <h1 class="bg-gray-500">
            I am a header
        </h1>
    </footer>
    
</body>
</html>