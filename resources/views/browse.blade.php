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

<div class="grid grid-cols-12 gap-0 max-w-full">

    <div class="col-span-12 relative z-50 p-0 mb-0">
        <div class="top-0 right-0 py-0">
            @include('partials.header')
        </div>
    </div>

    @include('carsearch')

    <!-- Brand Box - Right Side -->
    <div class="col-span-10 row-span-2 col-start-3 row-start-2 mt-10 ml-24">
        <h2 class="flex text-4xl font-bold text-white justify-start ml-10 mb-6">PRE-LOVED CARS IN DAVAO CITY, DAVAO DEL SUR</h2> 
        <div class="w-full overflow-x-auto px-6"> 
            <ul class="flex flex-wrap gap-14 pb-4 ml-2">
                <li class="p-4 border border-gray-300 rounded-lg shadow-sm bg-white w-60 h-52 text-center flex-shrink-0"> 
                    <img src="https://i.pinimg.com/736x/5f/d7/54/5fd754ce796229170266b0a5f9ff008c.jpg" alt="Ford" class="h-full w-auto mx-auto">
                </li>
                <li class="p-4 border border-gray-300 rounded-lg shadow-sm bg-white w-60 h-52 text-center flex-shrink-0"> 
                    <img src="https://i.pinimg.com/736x/28/de/bc/28debc1fb8adadc2346392696b59cf06.jpg" alt="Honda" class="h-full w-auto mx-auto"> 
                </li>
                <li class="p-4 border border-gray-300 rounded-lg shadow-sm bg-white w-60 h-52 text-center flex-shrink-0"> 
                    <img src="https://i.pinimg.com/736x/35/5b/5d/355b5d54a7da4e61b0806d0273337cfc.jpg" alt="Kia" class="h-full w-auto mx-auto"> 
                </li>
                <li class="p-4 border border-gray-300 rounded-lg shadow-sm bg-white w-60 h-52 text-center flex-shrink-0"> 
                    <img src="https://i.pinimg.com/736x/bf/1d/5d/bf1d5d3949d184d21e0886368cf9c27f.jpg" alt="Honda" class="h-full w-auto mx-auto">
                </li>
                <li class="p-4 border border-gray-300 rounded-lg shadow-sm bg-white w-60 h-52 text-center flex-shrink-0"> 
                    <img src="https://i.pinimg.com/736x/1c/df/e6/1cdfe69ed9925a45aab3a6179425113c.jpg" alt="Audi" class="h-full w-auto mx-auto">
                </li>
               
            </ul>
        </div>
    </div>

    <!-- Car Listed -->
    
    <div class="col-span-10 row-span-6 col-start-3 row-start-3 relative -mt-72 p-2 ml-24">
    <h2 class="flex text-4xl font-bold text-white justify-start ml-4 mb-6 -mt-18">Best Match</h2>
        <div class="absolute top-0 left-0 right-0 px-2 py-1 text-xs rounded-bl-lg">
            @include('cartest')
            <div class="grid col-span-2 row-span-6 col-start-2 row-start-3 relative ">
            <div class="flex justify-center mt-4 text-2xl mr-10">
                <button id="loadMore" class="bg-blue-500 text-white font-bold text-64px py-2 px-4 rounded w-64 hover:bg-blue-700 h-24">
                Load More
                </button>
            </div>
        </div>
        </div>
    </div>

    
    <div class="col-span-10 row-span-8 col-start-3 row-start-10 relative p-2 ml-24 mt-36">
    <div class="px-2 py-1 text-xs rounded-bl-lg">
        <h2 class="bg-[#2193F0] text-white text-2xl font-bold p-4 ">Market Overview</h2>
        <div>
            <p class="bg-white text-black p-5 text-base shadow-sm">
            Car for sale Philippines in the past year, although affected by covid, are still quite active. Despite many difficulties in 2022, the Philippine market still consumes a large number of cars. The ranking of best-selling cars includes familiar faces from companies such as Honda, Hyundai, Ford, etc. In which, Toyota is still the car company that is most favored by customers with the Toyota Vios model.

            For body types, 837 Suv, 010 Sedan, 327 Hatchback, 427 Mpv, and 267 Van are the choice of most drivers. 
            Many people choose the lowest price segment is the 2020 Sentra (petrol manual model), which costs ₱70,000. While the highest one is the 2017 A3 Sedan (automatic petrol model), which costs ₱90 Million.
            </p>
        </div>
    </div>

    <div class="px-2 py-1 text-xs rounded-bl-lg mt-4">
        <h2 class="bg-[#2193F0] text-white text-2xl font-bold p-4 ">Most Popular Cars in the Philippines</h2>
        <div>
            <p class="bg-white text-black p-5 text-base shadow-sm">
            Toyota, Mitsubishi, Nissan, Ford and Suzuki are the most popular car brands in the Philippines. There are 1023
            Toyota cars, 430 Ford cars, 345 Mitsubishi cars, 187 Nissan cars, 94 Suzuki cars present on Philkotse. This
            number of vehicles includes both new and used cars for sale in Philippines.
            </p>
        </div>
    </div>

    <div class="px-2 py-1 text-xs rounded-bl-lg mt-4">
        <h2 class="bg-[#2193F0] text-white text-2xl font-bold p-4 ">Reputable Dealer in the Philippines</h2>
        <div>
            <p class="bg-white text-black p-5 text-base shadow-sm">
            Toyota, Mitsubishi, Nissan, Ford and Suzuki are the most popular car brands in the Philippines. There are 1023
            Toyota cars, 430 Ford cars, 345 Mitsubishi cars, 187 Nissan cars, 94 Suzuki cars present on Philkotse. This
            number of vehicles includes both new and used cars for sale in Philippines.
            </p>
        </div>
    </div>

   

</div>



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