<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Second Gear</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Expanded:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body class="py-16">
<header class="p-1 bg-black fixed z-50 left-0 right-0 top-0 bg-opacity-90 backdrop-blur-sm shadow-sm">
    <div class="flex items-center justify-between container mx-4">
        <div class="flex py-3">
            <h2 class="font-bold font-encode text-2xl rounded-md text-white">Second Gear</h2>
        </div>
        <div id="user"></div>
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

<div class="flex justify-between mx-10 py-10 flex-wrap"> 
    <!-- Search Box - Left Side -->
    <div class="w-1/4 p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-900 dark:border-gray-800"> 
        <h2 class="text-lg font-bold">Car Search</h2> 
        <ul class="mt-4">
            <li>Stock/Modifies</li>
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

    <!-- Brand Box - Right Side -->
    <div class="w-3/4 flex justify-center items-start p-5 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-900 dark:border-gray-800"> 
        <ul class="flex flex-wrap space-x-4">
            <li class="p-4 border border-gray-300 rounded-lg shadow-sm dark:bg-gray-900 dark:border-gray-800 w-60 h-52 text-center">Ford</li>
            <li class="p-4 border border-gray-300 rounded-lg shadow-sm dark:bg-gray-900 dark:border-gray-800 w-60 h-52 text-center">Honda</li>
            <li class="p-4 border border-gray-300 rounded-lg shadow-sm dark:bg-gray-900 dark:border-gray-800 w-60 h-52 text-center">Toyota</li>
            <li class="p-4 border border-gray-300 rounded-lg shadow-sm dark:bg-gray-900 dark:border-gray-800 w-60 h-52 text-center">Nissan</li>
            <li class="p-4 border border-gray-300 rounded-lg shadow-sm dark:bg-gray-900 dark:border-gray-800 w-60 h-52 text-center">Kia</li>
            <!-- <li class="p-4 border border-gray-300 rounded-lg shadow-sm dark:bg-gray-900 dark:border-gray-800 w-60 text-center">Subaru</li>
            <li class="p-4 border border-gray-300 rounded-lg shadow-sm dark:bg-gray-900 dark:border-gray-800 w-60  text-center">Hyundai</li> -->
        </ul>
    </div>
</div>

<div class="used-car-listing">
    <div class="card-container">
        <div class="card-content">
            <div class="card-image">
            </div>
        </div>
    </div>  
</div>


    



</body>
</html>