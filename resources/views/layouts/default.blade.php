<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title', 'home')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Expanded:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <header class="p-1">
        <nav class="flex">
            <h2 class="ml-36 font-encode text-2xl rounded-md px-3 py-2 text-white">Second Gear</h2>
            <li class="flex ml-auto mr-96">
                <ul class="mx-6 rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"><a href="{{ route('login') }}">Log In</a></ul>
                <ul class="mr-3 rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"><a href="{{ route("register") }}">Sign Up</a></ul>
            </li>
        </nav>
    </header>

    <main>
        @yield('main-content')
    </main>

    <footer>
        <h1 class="bg-gray-500">
            I am a footer
        </h1>
    </footer>
    
</body>
</html>