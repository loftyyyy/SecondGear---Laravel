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
@if(isset($car))
    @include('modals.quote')
    @include('modals.call-seller')
@endif

@include('modals.toast.notification')

<body class="font-sans dark:bg-black dark:text-white/50 overflow-x-hidden">   
    <div class="relative z-50 p-0 mb-28">
        <div class="top-0 right-0 py-0">
            @include('partials.header')
        </div>
    </div>

    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-10 gap-6">
            <!-- Sidebar - Car Search -->


            <!-- Main Content -->
            <div class="md:col-span-9 lg:col-span-7">
                <!-- Car Title and Date -->
                <div class="mb-4">
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white">{{$car->title}}</h2>
                    <h4 class="md:text-[15px] mt-10 text-white font-exo">Posted {{ $car->created_at->diffForHumans() }}</h4>
                </div>
                
                <!-- Car Images -->
            <!-- Car Images Section -->
            <div class="w-full mb-8"> 
                <!-- Main Image with Navigation Arrows -->
                <div class="relative">
                    <img src="{{ asset('storage/' . $car->images->first()->image_path) }}" id="mainImage" alt="{{ $car->model }}" class="w-full h-auto mb-4 rounded-lg">
                    
                    <!-- Previous Arrow -->
                    <button id="prevButton" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-2 rounded-l hover:bg-opacity-70">
                        <i class="fa-solid fa-chevron-left"></i>
                    </button>
                    
                    <!-- Next Arrow -->
                    <button id="nextButton" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-2 rounded-r hover:bg-opacity-70">
                        <i class="fa-solid fa-chevron-right"></i>
                    </button>
                </div>
                
                <!-- Thumbnails Gallery -->
                <div class="grid grid-cols-5 gap-2">
                    <!-- First thumbnail (same as main image) -->
                    <div>
                        <img src="{{ asset('storage/' . $car->images->first()->image_path) }}" 
                            alt="{{ $car->model }}" 
                            onclick="swapImage(this)" 
                            class="cursor-pointer w-full h-20 object-cover rounded-lg border-2 border-blue-500">
                    </div>
                    
                    <!-- Remaining thumbnails -->
                    @foreach($car->images->skip(1) as $image)
                    <div>
                        <img src="{{ asset('storage/' . $image->image_path) }}" 
                            alt="Car Image" 
                            onclick="swapImage(this)" 
                            class="cursor-pointer w-full h-20 object-cover rounded-lg opacity-70 hover:opacity-100 transition-opacity">
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
                                <img class="w-14 h-14 rounded-full object-cover border-blue-800 border" src="{{ asset('storage/' . $car->user->profile_picture) }}" alt="{{ Auth::user()->name }}'s profile picture">
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
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                <button type="button" data-modal-target="get-quote" data-modal-toggle="get-quote" class="bg-blue-600 text-white p-2 rounded-sm hover:bg-blue-700">
                                    <i class="fa-solid fa-file mr-2"></i>Ask for Quote
                                </button>
                                <button data-modal-target="call-seller" data-modal-toggle="call-seller" class="bg-blue-600 text-white p-2 rounded-sm hover:bg-blue-700">
                                    <i class="fa-solid fa-phone mr-2"></i>Contact Seller Now
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
    @if(config('app.debug'))
        <div class="fixed bottom-4 right-4 bg-white dark:bg-gray-800 p-4 rounded shadow-lg z-50 max-w-sm opacity-75 hover:opacity-100 transition-opacity text-xs">
            <h4 class="font-bold mb-2">Debug Info:</h4>
            <p>Session has 'success': {{ session()->has('success') ? 'Yes' : 'No' }}</p>
            <p>Success message: {{ session('success') ?? 'None' }}</p>
            <p>Session has 'error': {{ session()->has('error') ? 'Yes' : 'No' }}</p>
        </div>
    @endif



    <script>

    // Enhanced car image carousel with thumbnail navigation and arrow controls
document.addEventListener('DOMContentLoaded', function() {
    // Get all carousel elements
    const mainImage = document.getElementById('mainImage');
    const thumbnails = document.querySelectorAll('[onclick="swapImage(this)"]');
    const prevButton = document.getElementById('prevButton');
    const nextButton = document.getElementById('nextButton');
    
    // Store all image sources in an array for easy navigation
    let imageSources = [];
    let currentIndex = 0;
    
    // Initialize the carousel
    function initCarousel() {
        // Add main image to sources array
        imageSources.push(mainImage.src);
        
        // Add all thumbnail images to sources array
        thumbnails.forEach(thumb => {
            imageSources.push(thumb.src);
        });
        
        // Remove duplicates if any
        imageSources = [...new Set(imageSources)];
        
        // Set up event listeners for navigation buttons
        if (prevButton) {
            prevButton.addEventListener('click', showPreviousImage);
        }
        
        if (nextButton) {
            nextButton.addEventListener('click', showNextImage);
        }
        
        // Set up keyboard navigation
        document.addEventListener('keydown', function(e) {
            if (e.key === 'ArrowLeft') {
                showPreviousImage();
            } else if (e.key === 'ArrowRight') {
                showNextImage();
            }
        });
        
        // Initialize first image
        updateCarousel();
    }
    
    // Update the carousel display
    function updateCarousel() {
        // Update main image
        mainImage.src = imageSources[currentIndex];
        
        // Update active state on thumbnails
        thumbnails.forEach((thumb, index) => {
            if (thumb.src === imageSources[currentIndex]) {
                thumb.classList.add('border-2', 'border-blue-500', 'opacity-100');
            } else {
                thumb.classList.remove('border-2', 'border-blue-500', 'opacity-100');
                thumb.classList.add('opacity-70');
            }
        });
    }
    
    // Navigate to previous image
    function showPreviousImage() {
        currentIndex = (currentIndex - 1 + imageSources.length) % imageSources.length;
        updateCarousel();
    }
    
    // Navigate to next image
    function showNextImage() {
        currentIndex = (currentIndex + 1) % imageSources.length;
        updateCarousel();
    }
    
    // Handle thumbnail click
    window.swapImage = function(clickedImage) {
        // Find the index of the clicked image
        const clickedIndex = imageSources.findIndex(src => src === clickedImage.src);
        
        if (clickedIndex !== -1) {
            currentIndex = clickedIndex;
            updateCarousel();
        }
    };
    
    // Initialize the carousel
    initCarousel();
});
</script>


<style>
    ::-webkit-scrollbar {
        display: none;
    }

    body {
        -ms-overflow-style: none;  
        scrollbar-width: none;  
    }

        /* Add these styles to your existing <style> section */

    /* Thumbnail hover effects */
    .carousel-thumbnail {
        transition: all 0.3s ease;
    }

    .carousel-thumbnail:hover {
        transform: scale(1.05);
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    /* Main image transition */
    #mainImage {
        transition: opacity 0.3s ease;
    }

    /* Navigation buttons */
    .nav-button {
        opacity: 0.7;
        transition: opacity 0.3s ease, transform 0.2s ease;
    }

    .nav-button:hover {
        opacity: 1;
        transform: scale(1.1) translateY(-50%);
    }

    /* Image counter */
    .image-counter {
        background-color: rgba(0, 0, 0, 0.6);
        color: white;
        padding: 4px 8px;
        border-radius: 12px;
        font-size: 12px;
        font-weight: bold;
    }

    /* Mobile responsiveness enhancements */
    @media (max-width: 640px) {
        .nav-button {
            padding: 8px;
        }
        
        .carousel-thumbnails {
            grid-template-columns: repeat(4, 1fr);
        }
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
