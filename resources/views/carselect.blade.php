<!DOCTYPE html>
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
    <div class="relative z-50 p-0 mb-28">
        <div class="top-0 right-0 py-0">
            @include('partials.header')
        </div>
    </div>

    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
            <!-- Sidebar - Car Search -->
            <div class="md:col-span-3 lg:col-span-2">
                <h2 class="text-3xl md:text-4xl font-bold text-white text-center mb-4">Car Search</h2> 
                <div class="w-full mb-8"> 
                    <div class="p-4 md:p-6 bg-white border border-gray-200 rounded-xl shadow-sm bg-opacity-15"> 
                        <ul class="text-lg text-black">
                            <li class="flex justify-between text-white font-bold mb-3">
                                <label class="flex items-center"><input type="radio" name="car_type" value="stock" class="mr-2"> Stock</label>
                                <label class="flex items-center"><input type="radio" name="car_type" value="modified" class="mr-2"> Modified</label>
                            </li>
                            <li class="mb-2">
                                <select id="brand" class="w-full p-2 border border-gray-300 rounded-2xl">
                                    <option value="">Brand</option>
                                    <option value="brand1">Brand 1</option>
                                    <option value="brand2">Brand 2</option>
                                    <option value="brand3">Brand 3</option>
                                </select>
                            </li>
                            <li class="mb-2">
                                <select id="model" class="w-full p-2 border border-gray-300 rounded-2xl">
                                    <option value="">Model</option>
                                    <option value="model1">Model 1</option>
                                    <option value="model2">Model 2</option>
                                    <option value="model3">Model 3</option>
                                </select>
                            </li>
                            <li class="mb-2">
                                <select id="from_price" class="w-full p-2 border border-gray-300 rounded-2xl">
                                    <option value="">Price</option>
                                    <option value="1000">1000</option>
                                    <option value="5000">5000</option>
                                    <option value="10000">10000</option>
                                </select>
                            </li>
                            <li class="mb-2">
                                <select id="from_year" class="w-full p-2 border border-gray-300 rounded-2xl">
                                    <option value="">Year</option>
                                    <option value="2020">2020</option>
                                    <option value="2019">2019</option>
                                    <option value="2018">2018</option>
                                </select>
                            </li>
                            <li class="mb-2">    
                                <select id="city" class="w-full p-2 border border-gray-300 rounded-2xl">
                                    <option value="">City</option>
                                    <option value="city1">City 1</option>
                                    <option value="city2">City 2</option>
                                    <option value="city3">City 3</option>
                                </select>
                            </li>
                            <li class="mb-2">
                                <select id="transmission" class="w-full p-2 border border-gray-300 rounded-2xl">
                                    <option value="">Transmission</option>
                                    <option value="automatic">Automatic</option>
                                    <option value="manual">Manual</option>
                                </select>
                            </li>
                            <li class="mb-2">
                                <select id="color" class="w-full p-2 border border-gray-300 rounded-2xl">
                                    <option value="">Color</option>
                                    <option value="red">Red</option>
                                    <option value="blue">Blue</option>
                                    <option value="black">Black</option>
                                </select>
                            </li>
                            <li class="mb-2">
                                <select id="body_type" class="w-full p-2 border border-gray-300 rounded-2xl">
                                    <option value="">Body Type</option>
                                    <option value="sedan">Sedan</option>
                                    <option value="suv">SUV</option>
                                    <option value="hatchback">Hatchback</option>
                                    <option value="coupe">Coupe</option>
                                    <option value="convertible">Convertible</option>
                                </select>
                            </li>
                            <li>
                                <button class="bg-green-400 text-black p-2 rounded-2xl hover:bg-green-700 w-full mt-4">Search</button> 
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Cars For Sale -->
                <h2 class="text-3xl md:text-4xl font-bold text-white text-center mb-4">Car For Sale</h2> 
                <div class="w-full mb-8"> 
                    <div class="w-full p-3 bg-white border border-gray-200 shadow-sm rounded-xl"> 
                        <ul class="mt-2 text-lg text-black">
                            <li class="my-2"> <a href="" class="hover:text-blue-500">Toyota</a></li>
                            <li class="my-2"> <a href="" class="hover:text-blue-500">Ford</a></li>
                            <li class="my-2"> <a href="" class="hover:text-blue-500">Mitsubishi</a></li>
                            <li class="my-2"> <a href="" class="hover:text-blue-500">Hyundai</a></li>
                            <li class="my-2"> <a href="" class="hover:text-blue-500">Nissan</a></li>
                            <li class="my-2"> <a href="" class="hover:text-blue-500">Subaru</a></li>
                            <li class="my-2"> <a href="" class="hover:text-blue-500">Suzuki</a></li>
                            <li class="my-2"> <a href="" class="hover:text-blue-500">Mazda</a></li>
                            <hr class="my-2">
                            <li>
                                <button class="flex text-blue-600 p-2 rounded w-full justify-end items-center">
                                    Show More <i class="fa-solid fa-circle-arrow-right ml-2"></i>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="md:col-span-9 lg:col-span-7">
                <!-- Car Title and Date -->
                <div class="mb-4">
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white">{{$car->model}}</h2>
                    <h4 class="md:text-[15px] mt-10 text-white font-exo">Posted {{ $car->created_at->diffForHumans() }}</h4>
                </div>
                
                <!-- Car Images -->
                <div class="w-full mb-8"> 
                    <img src="{{ asset('storage/' . $car->images->first()->image_path) }}" id="mainImage" alt="Porsche" class="w-full h-auto mb-4 rounded-lg">
                    <div class="grid grid-cols-3 gap-4">
                        @foreach($car->images->skip(1)->take(3) as $image)

                        <div>
                            <img src="{{asset( 'storage/' . $image->image_path) }}" alt="Car Image" onclick="swapImage(this)" class="cursor-pointer w-full h-auto rounded-lg">
                        </div>

                        @endforeach
                    </div>
                </div>

                <!-- Description -->
                <div class="mb-8">
                    <h2 class="bg-blue-500 text-white text-2xl font-bold p-4 rounded-t-lg">Description</h2>
                    <div class="bg-white text-black text-base shadow-sm p-4 rounded-b-lg">
                        <p>{{$car->description}}</p>
                    </div>
                </div>


                <!-- Seller Information -->
                <div class="mb-8">
                    <h2 class="bg-blue-500 text-white text-2xl font-bold p-4 rounded-t-lg">Seller Information</h2>
                    <div class="bg-white rounded-b-lg">
                        <div class="p-4">
                            <div class="flex flex-col sm:flex-row gap-4 items-start sm:items-center">
                                <img class="w-14 h-14 rounded-full border-blue-800 border" src="{{ asset('storage/' . $car->user->profile_picture) }}" alt="{{ Auth::user()->name }}'s profile picture">
                                <div>
                                    <div class="flex flex-col sm:flex-row sm:items-center gap-1 sm:gap-2">
                                        <h3 class="text-xl sm:text-2xl text-blue-600 font-bold">{{$car->user->name}}</h3>
                                        <h4 class="text-lg sm:text-xl text-gray-500">| {{$car->city}}</h4>
                                    </div>
                                    <div class="flex flex-wrap gap-2 mt-2"> 
                                        <span class="px-3 py-1 text-sm text-blue-600 rounded-3xl border border-blue-300 font-semibold">Certified Seller</span>
                                        <span class="px-3 py-1 text-sm text-blue-600 rounded-3xl border border-blue-300 font-semibold">Verified Number</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="px-4 pb-2 text-gray-500 text-base sm:text-lg">
                            <p class="my-2"><i class="fa-solid fa-envelope mr-4"></i>{{$car->user->email}}</p>
                            <p class="my-2"><i class="fa-solid fa-location-dot mr-4"></i>{{$car->city}}</p>
                            <p class="my-2"><i class="fa-solid fa-phone mr-4"></i>{{$car->contact_phone}}</p>
                        </div>

                        <div class="p-4">
                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                                <button class="bg-blue-600 text-white p-2 rounded-sm hover:bg-blue-700">
                                    <i class="fa-solid fa-file mr-2"></i>Ask for Quote
                                </button>
                                <button class="bg-blue-600 text-white p-2 rounded-sm hover:bg-blue-700">
                                    <i class="fa-solid fa-phone mr-2"></i>Call Seller Now
                                </button>
                                <button class="bg-blue-600 text-white p-2 rounded-sm hover:bg-blue-700">
                                    <i class="fa-brands fa-facebook-messenger mr-2"></i>Chat with seller
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Market Overview -->
                <div class="mb-8">
                    <h2 class="bg-blue-500 text-white text-2xl font-bold p-4 rounded-t-lg">Market Overview</h2>
                    <div class="bg-white text-black p-5 text-base shadow-sm rounded-b-lg">
                        <p>
                            Car for sale Philippines in the past year, although affected by covid, are still quite active. Despite many difficulties in 2022, the Philippine market still consumes a large number of cars. The ranking of best-selling cars includes familiar faces from companies such as Honda, Hyundai, Ford, etc. In which, Toyota is still the car company that is most favored by customers with the Toyota Vios model.
                        </p>
                        <p class="mt-4">
                            For body types, 837 Suv, 010 Sedan, 327 Hatchback, 427 Mpv, and 267 Van are the choice of most drivers. 
                            Many people choose the lowest price segment is the 2020 Sentra (petrol manual model), which costs ₱70,000. While the highest one is the 2017 A3 Sedan (automatic petrol model), which costs ₱90 Million.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Price and Details Sidebar -->
            <div class="md:col-span-12 lg:col-span-3">
                <div class="bg-white rounded-lg shadow-lg p-4 mb-8 mt-4 lg:mt-0 sticky top-[90px]">
                    <div class="text-center mb-4">
                        <p class="text-green-500 font-bold text-3xl sm:text-4xl md:text-5xl">₱{{ number_format($car->price, 2) }}</p>
                    </div>
                    
                    <div class="text-black text-lg font-bold">
                        <div class="grid grid-cols-2 gap-4 py-3 border-b">
                            <span><i class="fa-solid fa-car mr-2"></i> Brand:</span>
                            <span class="text-gray-700">{{$car->brand}}</span>
                        </div>
                        <div class="grid grid-cols-2 gap-4 py-3 border-b">
                            <span><i class="fa-solid fa-calendar mr-2"></i> Year:</span>
                            <span class="text-gray-700">{{$car->year}}</span>
                        </div>
                        <div class="grid grid-cols-2 gap-4 py-3 border-b">
                            <span><i class="fa-solid fa-gear mr-2"></i> Build:</span>
                            <span class="text-gray-700">{{$car->build}}</span>
                        </div>
                        <div class="grid grid-cols-2 gap-4 py-3 border-b">
                            <span><i class="fa-solid fa-brush mr-2"></i> Color:</span>
                            <span class="text-gray-700">{{$car->color}}</span>
                        </div>
                        <div class="grid grid-cols-2 gap-4 py-3 border-b">
                            <span><i class="fa-solid fa-gears mr-2"></i> Transmission:</span>
                            <span class="text-gray-700">{{$car->transmission}}</span>
                        </div>
                        <div class="grid grid-cols-2 gap-4 py-3 border-b">
                            <span><i class="fa-solid fa-gauge-high mr-2"></i> Mileage:</span>
                            <span class="text-gray-700">{{$car->mileage}} km</span>
                        </div>
                        <div class="grid grid-cols-2 gap-4 py-3">
                            <span><i class="fa-solid fa-car mr-2"></i> Body Type:</span>
                            <span class="text-gray-700">{{$car->body_type}}</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>




<script>
    function swapImage(clickedImage) {
        let mainImage = document.getElementById('mainImage');

        let tempSrc = mainImage.src;
        mainImage.src = clickedImage.src;
        clickedImage.src = tempSrc;
    }
</script>



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
