<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title', 'Second Gear')</title>
    <link href="https://fonts.cdnfonts.com/css/future-forces" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/exo-3" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Expanded:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">  
    <link href="https://fonts.googleapis.com/css2?family=Exo+3:wght@400;600;800&display=swap" rel="stylesheet">
</head>

<body>
    <div class="relative z-[100]">
        <header class="p-1 bg-black left-0 right-0 top-0 bg-opacity-90 backdrop-blur-sm shadow-sm">
            <div class="flex items-center justify-between mx-4">
                <div class="flex">
                    <h2 class="text-[35px] rounded-md text-white font-future">Second Gear</h2>
                </div>
                
                <div id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start" class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600 cursor-pointer">
                    @if(Auth::check() && Auth::user()->profile_picture)
                        <img class="absolute w-full h-full object-cover" src="{{ asset('storage/' . Auth::user()->profile_picture) }}" alt="{{ Auth::user()->name }}'s profile picture">
                    @else
                        <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                        </svg>
                    @endif
                </div>
                
                <div id="userDropdown" class="z-[1000] hidden bg-white divide-y divide-gray-100 rounded-lg shadow-lg w-44 dark:bg-gray-700 dark:divide-gray-600 absolute right-4">
                    @if(Auth::check())
                        <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                            <div>{{Auth::user()->name}}</div>
                            <div class="font-medium truncate">{{Auth::user()->email}}</div>
                        </div>
                    @endif
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="avatarButton">
                        <li>
                            <a href="{{ route('show.profile')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profile</a>
                        </li>
                    </ul>
                    <div class="py-1">
                        <a href="{{ route('users.logout') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
                    </div>
                </div>
            </div>
        </header>
    </div>

    <div class="relative z-[50]">
        <nav class="flex items-center justify-between bg-[#001C80]"> 
            <div id="menu-left" class="text-xl hidden md:flex text-white w-full">
                <ul class="flex font-exo w-full p-4">
                    <li class="mr-8 {{request()->is('home') ? 'underline font-bold' : ''}}">
                        <a href="/browse">Home</a>
                    </li>
                    <li class="mr-8 {{request()->is('browse') ? 'underline font-bold' : ''}}">
                        <a href="/browse">Browse Cars</a>
                    </li>
                    <li class="mr-8 {{request()->is('about') ? 'underline font-bold' : ''}}">
                        <a href="/login">About us</a>
                    </li>
                    <li class="mr-8 {{request()->is('contact') ? 'underline font-bold' : ''}}">
                        <a href="#footer">Contact us</a>
                    </li>
                </ul>
            </div>

            <div id="menu-right" class="flex space-x-2 gap-4 mx-10"> 
                <a href="{{ route('user.store') }}" class="bg-green-500 text-white {{ request()->is('sell/sellmain') ? 'hidden' : '' }} rounded-md hover:bg-blue-600 text-1xl w-32 flex items-center justify-center py-2 px-4">
                    Sell my Car
                </a>

                <div class="flex items-center"> 
                    <form class="w-96 mx-auto">   
                        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                </svg>
                            </div>
                            <input type="search" id="default-search" class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Cars" required />
                            <button type="submit" class="text-white absolute end-[5px] top-[5px] bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-1 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </nav>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>