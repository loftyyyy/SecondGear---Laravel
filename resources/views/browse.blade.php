<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Second Gear</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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
    <link rel="icon" type="image/png" href="/picbank/2nd Gear Logo.svg" sizes="16x16">
</head>

<body class="font-sans dark:bg-black dark:text-white/50 overflow-x-hidden">   

<div class="grid grid-cols-12 gap-4 max-w-full">

    <div class="col-span-12 relative z-50 p-0 mb-20">
        <div class="top-0 right-0 py-0">
            @include('partials.header')
        </div>
    </div>

    @include('carsearch')

    <!-- Brand Box - Right Side -->
    <div class="col-span-10 col-start-3 mt-10 ml-20 mr-8">
        <h2 class="text-4xl font-bold text-white mb-6">PRE-LOVED CARS IN DAVAO CITY, DAVAO DEL SUR</h2> 
        <div class="w-full overflow-x-auto">
            <ul class="grid grid-cols-4 gap-4">
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
    <div class="col-span-10 col-start-3 ml-24">

        @if(session('success'))
        <div class="bg-green-100 text-green-700 p-3 rounded-lg mb-4">
            {{ session('success') }}
        </div>
        @endif

        <h2 class="text-4xl font-bold text-white mb-6">Find Your Dream Car</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 ml-4">
        @foreach ($cars as $car)
            <div class="h-full w-full">
                <div class="card-container bg-white rounded-lg shadow-md hover:shadow-xl transition-all h-full">
                    <div class="card-content p-4">
                        <div class="card-image mb-3">
                            <img
                                src="{{ asset('storage/' . $car->images->first()->image_path) }}"
                                alt="{{ $car->title }}"
                                class="w-full h-40 object-cover rounded-lg"
                            />
                        </div>

                        <div class="card-details space-y-2">
                            <!-- Title with brand highlighted -->
                            <div class="flex flex-col">
                                <span class="text-xs font-medium text-[#000080]">{{ $car->brand }}</span>
                                <h3 class="text-xl font-semibold text-gray-800 truncate">{{ $car->title }}</h3>
                            </div>

                            <!-- Tags section - made more compact -->
                            <div class="flex flex-wrap gap-1 text-xs">
                                @if ($car->build)
                                    <span class="border-2 border-[#000080] bg-[#000080] text-white rounded-md px-1.5 py-0.5">
                                        {{ $car->build }}
                                    </span>
                                @endif
                                <span class="border-2 border-white-800 rounded-md text-gray-700 px-1.5 py-0.5">
                                    {{ $car->year }}
                                </span>
                                <span class="border-2 border-white-800 rounded-md text-gray-700 px-1.5 py-0.5">
                                    {{ $car->transmission }}
                                </span>
                                <span class="border-2 border-white-800 rounded-md text-gray-700 px-1.5 py-0.5">
                                    {{ $car->mileage }} km
                                </span>
                            </div>

                            <!-- Additional details with icons -->
                            <div class="grid grid-cols-2 gap-1 text-xs">
                                <span class="flex items-center gap-1 truncate">
                                    <span class="w-3 h-3" style="background-color: {{ $car->color }}; border-radius: 50%;"></span>
                                    <span class=" text-gray-700">{{ ucfirst($car->color) }}</span>
                                </span>
                                <span class="flex items-center gap-1 truncate">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-3 w-3 text-gray-500 flex-shrink-0"
                                        viewBox="0 0 20 20"
                                        fill="currentColor"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                            clip-rule="evenodd"
                                        />
                                    </svg>
                                    <span class=" text-gray-700">{{ $car->city }}</span>
                                </span>
                                <span class="flex items-center gap-1 truncate">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-3 w-3 text-gray-500 flex-shrink-0"
                                        viewBox="0 0 20 20"
                                        fill="currentColor"
                                    >
                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                        <path
                                            fill-rule="evenodd"
                                            d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                            clip-rule="evenodd"
                                        />
                                    </svg>
                                    <span class="text-gray-700">{{ $car->views }} views</span>
                                </span>
                                <span class="flex items-center gap-1 truncate">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-3 w-3 text-gray-500 flex-shrink-0"
                                        viewBox="0 0 20 20"
                                        fill="currentColor"
                                    >
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                    </svg>
                                    <span class=" text-gray-700">{{ $car->contact_name }}</span>
                                </span>
                            </div>

                            <!-- Region -->
                            <h4 class="text-xs text-gray-600">{{ $car->region }}</h4>

                            <!-- Price -->
                            <div class="flex justify-between items-center">
                                <span class="text-lg font-bold text-[#000080]">₱{{ number_format($car->price, 2) }}</span>
                                <span class="text-xs text-gray-500">{{ $car->created_at->diffForHumans() }}</span>
                            </div>

                            <!-- Action buttons -->
                            <div class="flex space-x-2 w-full">
                                <a href="{{ route('cars.show', $car->id) }}" 
                                    class="border-2 border-[#000080] rounded-md py-1 px-2 text-[#000080] hover:bg-blue-800 hover:text-white transition duration-200 flex-1 text-xs">
                                    View Details
                                </a>
                                <button 
                                    class="bg-[#000080] text-white py-1 px-2 rounded-md flex-1 text-xs">
                                    Call Seller
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
</div>

    <div class="mt-4">
        {{ $cars->links() }}
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