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

    <!-- Brand Box - Right Side -->

    <div class="w-3/4 flex justify-center items-start p-0 "> 
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


<!-- Car Listed -->

<div class="container mx-auto">
   
    <div class="flex flex-wrap justify-center gap-4">
        <!-- Car Listing 1 -->
        <div class="used-car-listing w-3/12 max-w-sm">
            <div class="card-container bg-white rounded-lg shadow-md hover:shadow-xl transition-all">
                <div class="card-content p-4">
                    <div class="card-image mb-4">
                        <img 
                            src="https://images.unsplash.com/photo-1550355291-bbee04a92027?auto=format&fit=crop&q=80&w=400&h=300" 
                            alt="Car" 
                            class="w-full h-48 object-cover rounded-lg"
                        >
                    </div>
                    <div class="card-details space-y-3">
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-blue-600">$25,999</span>
                            <span class="text-gray-600 font-semibold">2023</span>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800">Toyota Camry SE</h3>
                        <div class="flex items-center gap-4 text-gray-600">
                            <span>45,000 mi</span>
                            <span>•</span>
                            <span>Automatic</span>
                            <span>•</span>
                            <span>Petrol</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Car Listing 2 -->
        <div class="used-car-listing w-full max-w-sm">
            <div class="card-container bg-white rounded-lg shadow-md hover:shadow-xl transition-all">
                <div class="card-content p-4">
                    <div class="card-image mb-4">
                        <img 
                            src="https://images.unsplash.com/photo-1550355291-bbee04a92027?auto=format&fit=crop&q=80&w=400&h=300" 
                            alt="Car" 
                            class="w-full h-48 object-cover rounded-lg"
                        >
                    </div>
                    <div class="card-details space-y-3">
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-blue-600">$27,999</span>
                            <span class="text-gray-600 font-semibold">2022</span>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800">Honda Accord LX</h3>
                        <div class="flex items-center gap-4 text-gray-600">
                            <span>30,000 mi</span>
                            <span>•</span>
                            <span>Automatic</span>
                            <span>•</span>
                            <span>Petrol</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Car Listing 3 -->
        <div class="used-car-listing w-full max-w-sm">
            <div class="card-container bg-white rounded-lg shadow-md hover:shadow-xl transition-all">
                <div class="card-content p-4">
                    <div class="card-image mb-4">
                        <img 
                            src="https://images.unsplash.com/photo-1550355291-bbee04a92027?auto=format&fit=crop&q=80&w=400&h=300" 
                            alt="Car" 
                            class="w-full h-48 object-cover rounded-lg"
                        >
                    </div>
                    <div class="card-details space-y-3">
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-blue-600">$22,999</span>
                            <span class="text-gray-600 font-semibold">2021</span>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800">Nissan Altima</h3>
                        <div class="flex items-center gap-4 text-gray-600">
                            <span>25,000 mi</span>
                            <span>•</span>
                            <span>Automatic</span>
                            <span>•</span>
                            <span>Petrol</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Car Listing 4 -->
        <div class="used-car-listing w-full max-w-sm">
            <div class="card-container bg-white rounded-lg shadow-md hover:shadow-xl transition-all">
                <div class="card-content p-4">
                    <div class="card-image mb-4">
                        <img 
                            src="https://images.unsplash.com/photo-1550355291-bbee04a92027?auto=format&fit=crop&q=80&w=400&h=300" 
                            alt="Car" 
                            class="w-full h-48 object-cover rounded-lg"
                        >
                    </div>
                    <div class="card-details space-y-3">
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-blue-600">$19,999</span>
                            <span class="text-gray-600 font-semibold">2020</span>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800">Kia Optima</h3>
                        <div class="flex items-center gap-4 text-gray-600">
                            <span>40,000 mi</span>

    



</body>
</html>