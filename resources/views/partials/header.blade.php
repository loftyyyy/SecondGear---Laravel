<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title', 'Landing Page')</title>
    <link href="https://fonts.cdnfonts.com/css/future-forces" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/exo-3" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Expanded:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">  
</head>
<body>
<header class="p-1 bg-black left-0 right-0 top-0 bg-opacity-90 backdrop-blur-sm shadow-sm">
    <div class="flex items-center justify-between mx-4">
        <div class="flex">
            <h2 class="font-future text-[35px] rounded-md text-white">Second Gear</h2>
        </div>


        
        <div id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start" class="z-50 relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
            <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
        </div>
    
        

        <div id="userDropdown" class="z-50 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700 dark:divide-gray-600">
            <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
            <div>{{Auth::user()->name}}</div>
            <div class="font-medium truncate">{{Auth::user()->email}}</div>
            </div>
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="avatarButton">
            <!-- <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
            </li> -->
            <li>
                <a href="{{url('profile')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profile</a>
            </li>
            </ul>
            <div class="py-1">
            <a href="{{Auth::logout()}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
            </div>
        </div>


    </div>
</header>

<nav class="flex items-center justify-between bg-[#001C80]"> 
    <div id="menu-left" class="text-xl hidden md:flex text-white w-full">
        <ul class="flex space-x-6 p-4 gap-5">
            <li><a href="/browse">Home</a></li>
            <li><a href="/sell">Browse Cars</a></li>
            <li><a href="/login">About us</a></li>
            <li><a href="/register">Contact us</a></li>
        </ul>
    </div>

    <div id="menu-right" class="flex items-center space-x-2 gap-4 mx-10"> 
        <button class="bg-green-500 text-white rounded-md hover:bg-blue-600 text-1xl w-32">Sell my Car</button> 
        <div class="flex items-center"> 
            <input type="text" placeholder="Search..." class="border border-gray-300 rounded-l-md p-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm" />

            <button class="bg-blue-500 text-white rounded-r-md p-2 hover:bg-blue-600 text-sm flex items-center"> 
                <i class="fa-solid fa-magnifying-glass mr-1"></i> Search
            </button>
        </div>
    </div>
</nav>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>
</html>