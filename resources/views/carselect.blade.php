<!DOCTYPE html>
<html lang="en">
<head>
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

<body class="py-16">
    @include('partials.header')

    <div class="flex justify-between mx-10 py-10 flex-wrap"> 
    <!-- Search Box - Left Side -->
    <div class="w-1/4 p-5 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-900 dark:border-gray-800 "> 
        <h2 class="text-2xl font-bold">Car Search</h2> 
        <ul class="mt-4 text-lg">
            <li >Stock/Modifies</li>
            <li>Brand</li>
            <li>Model</li>
            <li>From Price</li>
            <li>From Year</li>
            <li>Region</li>
            <li>City</li>
            <li>Transmission</li>
            <li>Color</li>
            <li>Body Type</li>
            <li>
                <button class="bg-green-400 text-black p-2 rounded hover:bg-green-700 w-full mt-4">Search</button> 
            </li>
        </ul>
    </div>
    
    
</body>
</html>