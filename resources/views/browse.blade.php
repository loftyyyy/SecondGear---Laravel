<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Second Gear</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Expanded:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body class="font-sans dark:bg-black dark:text-white/50 overflow-x-hidden">   

<div class="grid grid-cols-5 grid-rows-none gap-0 max-w-full">

    <div class="col-span-5 relative z-50 p-0 mb-0">
        <div class="top-0 right-0 py-0">
            @include('partials.header')
        </div>
    </div>

    <!-- Search Box - Left Side -->
    <div class="row-span-4 row-start-2 relative p-4 mb-4">
        <h2 class="flex text-4xl font-bold text-white justify-start mt-8 ml-10">Car Search</h2> 
        <div class="flex justify-between mx-10 py-6 flex-wrap"> 
            <div class="w-full p-5 bg-white border border-gray-200 rounded-lg shadow-sm"> 
                <ul class="mt-4 text-lg text-black">
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
        </div>
    </div>

    <!-- Brand Box - Right Side -->
    <div class="col-span-4 row-start-2 relative mt-10">
        <h2 class="flex text-4xl font-bold text-white justify-start ml-10 mb-6">PRE-LOVED CARS IN DAVAO CITY, DAVAO DEL SUR</h2> 
        <div class="w-full overflow-x-auto px-6"> 
            <ul class="flex flex-wrap gap-6 pb-4">
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
    <div class="col-span-4 row-span-3 col-start-2 row-start-3 relative p-4 mt-10">
        <div class="px-2 py-1 text-xs rounded-bl-lg">
            @include('cartest')
        </div>
    </div>

</div>
</body>
</html>
