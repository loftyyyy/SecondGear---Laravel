<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title', 'home')</title>
    <link href="https://fonts.cdnfonts.com/css/future-forces" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/exo-3" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Expanded:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">  
</head>
<body class="font-sans dark:bg-black dark:text-white/50">
<div id="intro" class="w-full relative pb-3 mx-auto bg-white-500 text-center z-10">
            <img id="Team Hilux" src="picbank\Team Hilux.jpg" alt="Team Hilux" class="relative mx-auto animate-[slideIn_0.5s_ease-out] z-10">
        </div>
</body>
</html>


@include('partials.footer')