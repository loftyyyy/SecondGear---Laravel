<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Second Gear</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="fontawesome/js/brands.js"></script>
    <script defer src="fontawesome/js/solid.js"></script>
    <script defer src="fontawesome/js/fontawesome.js"></script>
    <script defer src="fontawesome/js/sharp-thin.js"></script>
    <script defer src="fontawesome/js/duotone-thin.js"></script>
    <script defer src="fontawesome/js/sharp-duotone-thin.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Expanded:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
</head>

<body class="font-sans dark:bg-black dark:text-white/50 overflow-x-hidden">   

<div class="grid grid-cols-12 gap-4 max-w-full">

    <!-- Header Section -->
    <div class="col-span-12 relative z-50 p-0 mb-0">
        <div class="top-0 right-0 py-0">
            @include('partials.header')
        </div>
    </div>

    @include('carsearch')

    <!-- Brand Box - Right Side -->
    <div class="col-span-10 col-start-3 mt-10 ml-24">
        <h2 class="text-4xl font-bold text-white mb-6">PRE-LOVED CARS IN DAVAO CITY, DAVAO DEL SUR</h2> 
        <div class="w-full overflow-x-auto">
            <ul class="grid grid-cols-5 gap-4">
                <li class="p-4 border border-gray-300 rounded-lg shadow-sm bg-white text-center">
                    <img src="https://i.pinimg.com/736x/5f/d7/54/5fd754ce796229170266b0a5f9ff008c.jpg" alt="Ford" class="h-40 w-auto mx-auto">
                </li>
                <li class="p-4 border border-gray-300 rounded-lg shadow-sm bg-white text-center">
                    <img src="https://i.pinimg.com/736x/28/de/bc/28debc1fb8adadc2346392696b59cf06.jpg" alt="Honda" class="h-40 w-auto mx-auto"> 
                </li>
                <li class="p-4 border border-gray-300 rounded-lg shadow-sm bg-white text-center">
                    <img src="https://i.pinimg.com/736x/35/5b/5d/355b5d54a7da4e61b0806d0273337cfc.jpg" alt="Kia" class="h-40 w-auto mx-auto"> 
                </li>
                <li class="p-4 border border-gray-300 rounded-lg shadow-sm bg-white text-center">
                    <img src="https://i.pinimg.com/736x/bf/1d/5d/bf1d5d3949d184d21e0886368cf9c27f.jpg" alt="Honda" class="h-40 w-auto mx-auto">
                </li>
                <li class="p-4 border border-gray-300 rounded-lg shadow-sm bg-white text-center">
                    <img src="https://i.pinimg.com/736x/1c/df/e6/1cdfe69ed9925a45aab3a6179425113c.jpg" alt="Audi" class="h-40 w-auto mx-auto">
                </li>
            </ul>
        </div>
    </div>

    <!-- Car Listings Section -->
    <div class="col-span-10 col-start-3 mt-10 ml-24">
        <h2 class="text-4xl font-bold text-white mb-6">Best Match</h2>
        <div>
            @include('cartest')
        </div>
        <div class="flex justify-center mt-4">
            <button id="loadMore" class="bg-blue-500 text-white font-bold py-2 px-4 rounded w-64 hover:bg-blue-600 hover:text-black">
                Load More
            </button>
        </div>
    </div>

    <!-- Market Overview Section -->
    <div class="col-span-10 col-start-3 mt-10 ml-24">
        <div class="bg-[#2193F0] text-white text-2xl font-bold p-4">
            Market Overview
        </div>
        <p class="bg-white text-black p-5 text-base shadow-sm">
            Car for sale Philippines in the past year, although affected by covid, are still quite active...
        </p>
    </div>

    <!-- Popular Cars Section -->
    <div class="col-span-10 col-start-3 mt-4 ml-24">
        <div class="bg-[#2193F0] text-white text-2xl font-bold p-4">
            Most Popular Cars in the Philippines
        </div>
        <p class="bg-white text-black p-5 text-base shadow-sm">
            Toyota, Mitsubishi, Nissan, Ford and Suzuki are the most popular car brands in the Philippines...
        </p>
    </div>

    <!-- Reputable Dealer Section -->
    <div class="col-span-10 col-start-3 mt-4 ml-24 mb-4">
        <div class="bg-[#2193F0] text-white text-2xl font-bold p-4">
            Reputable Dealer in the Philippines
        </div>
        <p class="bg-white text-black p-5 text-base shadow-sm">
            Toyota, Mitsubishi, Nissan, Ford and Suzuki are the most popular car brands in the Philippines...
        </p>
    </div>

</div>



@include('partials.footer')

<style>
    ::-webkit-scrollbar {
        display: none;
    }

    body {
        -ms-overflow-style: none;  
        scrollbar-width: none;  
    }
    @keyframes slideIn {
        from {
            transform: translateX(-100%);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }
    
</style>


</body>
</html>