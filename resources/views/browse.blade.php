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

<body class="py-16">

<div class="grid grid-cols-5 grid-rows-5 gap-1">

    <div class="col-span-5 relative p-0 mb-0">
        <div class=" top-0 right-0  py-0">
            @include('partials.header')
        </div>
       
    </div>

    <!-- Search Box - Left Side -->
    <div class="row-span-4 row-start-2 relativep-4 mb-4">
        <!-- <div class="absolute top-0 right-0 bg-pink-500 text-white px-2 py-1 text-xs rounded-bl-lg">X</div> -->
        <!-- <div class="absolute bottom-0 right-0 bg-black text-white px-2 py-1 text-xs rounded-tl-lg">J</div> -->
        <div class="flex justify-between mx-10 py-10 flex-wrap"> 
            <div class="w-full p-5 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-900 dark:border-gray-800"> 
                <h2 class="text-2xl font-bold">Car Search</h2> 
                <ul class="mt-4 text-lg">
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
    <div class="col-span-4 row-start-2 relative bg-blue-300 p-4 mb-4">
        <!-- <div class="absolute top-0 right-0 bg-pink-500 text-white px-2 py-1 text-xs rounded-bl-lg">X</div> -->
        <div class="w-full flex justify-center items-start p-0"> 
            <ul class="flex flex-wrap space-x-4">
                <li class="p-4 border border-gray-300 rounded-lg shadow-sm dark:bg-gray-900 dark:border-gray-800 w-60 h-52 text-center"> <img src="https://i.pinimg.com/736x/5f/d7/54/5fd754ce796229170266b0a5f9ff008c.jpg" alt="Ford"></li>
                <li class="p-4 border border-gray-300 rounded-lg shadow-sm dark:bg-gray-900 dark:border-gray-800 w-60 h-52 text-center"> <img src="https://i.pinimg.com/736x/28/de/bc/28debc1fb8adadc2346392696b59cf06.jpg" alt="Honda"> </li>
                <li class="p-4 border border-gray-300 rounded-lg shadow-sm dark:bg-gray-900 dark:border-gray-800 w-60 h-52 text-center"> <img src="https://i.pinimg.com/736x/35/5b/5d/355b5d54a7da4e61b0806d0273337cfc.jpg" alt="Kia"> </li>
                <li class="p-4 border border-gray-300 rounded-lg shadow-sm dark:bg-gray-900 dark:border-gray-800 w-60 h-52 text-center"> <img src="https://i.pinimg.com/736x/bf/1d/5d/bf1d5d3949d184d21e0886368cf9c27f.jpg" alt="Honda"></li>
                <li class="p-4 border border-gray-300 rounded-lg shadow-sm dark:bg-gray-900 dark:border-gray-800 w-60 h-52 text-center"> <img src="https://i.pinimg.com/736x/1c/df/e6/1cdfe69ed9925a45aab3a6179425113c.jpg" alt="Audi"></li>
            </ul>
        </div>
    </div>

    <!-- Car Listed -->
    <div class="col-span-4 row-span-3 col-start-2 row-start-3 relative bg-blue-300 p-4">
        <div class="absolute top-0 right-0 px-2 py-1 text-xs rounded-bl-lg">
            <!-- <div class="ml-0"> -->
                    @include('cartest')
                </div>
            </div>
        </div>
    </div>

</div>
</body>
</html>