<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('Profile', 'Second Gear')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.cdnfonts.com/css/future-forces" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/exo-3" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Expanded:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo+3:wght@400;600;800&display=swap" rel="stylesheet">
    
    <!-- Additional CSS -->
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
</head>

<body class="bg-gray-100 dark:bg-black">
    @include('partials.profile-header')
    
    <div class="relative overflow-hidden mt-20">
        <!-- SVG Background -->
        <svg xmlns="http://www.w3.org/2000/svg" class="absolute inset-0 w-full h-auto z-0" fill="none" viewBox="0 0 877 968">
            <g clip-path="url(#a)">
                <circle cx="391" cy="391" r="390.5" stroke="#FF2D20" transform="matrix(-1 0 0 1 416 -56)"/>
                <circle cx="468" cy="468" r="467.5" stroke="#FF2D20" opacity=".3" transform="matrix(-1 0 0 1 493 -133)"/>
                <circle cx="558" cy="558" r="557.5" stroke="#FF2D20" opacity=".1" transform="matrix(-1 0 0 1 583 -223)"/>
                <g filter="url(#b)">
                    <ellipse cx="583" cy="229.5" fill="#FF2D20" rx="583" ry="229.5" transform="matrix(-1 0 0 1 621 -9)"/>
                </g>
                <g filter="url(#c)">
                    <ellipse cx="262" cy="184.5" fill="#fff" rx="262" ry="184.5" transform="matrix(-1 0 0 1 99 42)"/>
                </g>
            </g>
            <defs>
                <filter id="b" width="1614" height="907" x="-769" y="-233" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                    <feBlend in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                    <feGaussianBlur result="effect1_foregroundBlur_3089_39042" stdDeviation="112"/>
                </filter>
                <filter id="c" width="972" height="817" x="-649" y="-182" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                    <feBlend in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                    <feGaussianBlur result="effect1_foregroundBlur_3089_39042" stdDeviation="112"/>
                </filter>
                <clipPath id="a">
                    <path fill="#fff" d="M877 0H0v968h877z"/>
                </clipPath>
            </defs>
        </svg>

        <!-- Profile Content Grid -->
        <div class="grid grid-cols-3 gap-4 p-8 relative z-10">
            <!-- Left Column - Profile Information -->
            <div class="row-span-5">
                <!-- Profile Update Form -->
                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.update-profile-form')
                    </div>
                </div>
                
                <!-- Additional Profile Section -->
                <div class="mt-6 p-6 sm:p-10 bg-white dark:bg-gray-800 shadow-lg rounded-lg">
                    <div class="max-w-xl">
                        <h2 class="text-3xl font-semibold text-gray-900 dark:text-gray-100 flex items-center gap-3 mb-8">
                            <i class="fa-solid fa-car text-white text-4xl"></i> My Car Listings
                        </h2>
                        
                        @if(session('car_deleted'))
                            <div class="mb-4 p-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
                                {{ session('car_deleted') }}
                            </div>
                        @endif
                        
                        @if($cars->isEmpty())
                            <div class="text-center py-8 bg-gray-100 dark:bg-gray-700 rounded-lg">
                                <p class="text-gray-600 dark:text-gray-300">You haven't listed any cars yet.</p>
                                <a href="{{ route('user.sell') }}" class="mt-4 inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                    <i class="fa-solid fa-plus mr-2"></i> List a Car
                                </a>
                            </div>
                        @else
                            <div class="space-y-4">
                                @foreach ($cars as $car)
                                    <div class="bg-gray-100 dark:bg-gray-700 p-4 rounded-lg shadow-md hover:shadow-lg transition duration-300 border">
                                        <div class="flex justify-between items-start">
                                            <div>
                                                <h3>
                                                    <a href="{{ route('cars.show', $car->id) }}" 
                                                    class="text-xl sm:text-2xl font-bold text-gray-900 dark:text-gray-100 hover:text-blue-500 dark:hover:text-blue-400 transition duration-300">
                                                    {{$car->title}}
                                                    </a>
                                                </h3>
                                                <p class="text-gray-600 dark:text-gray-300 text-sm mt-1">
                                                    <i class="fa-solid fa-calendar-days mr-2"></i>Listed on {{ \Carbon\Carbon::parse($car->created_at)->format('F j, Y') }}
                                                </p>
                                                <p class="text-gray-600 dark:text-gray-300 text-sm mt-1">
                                                    <i class="fa-solid fa-tag mr-2"></i>Price: ₱{{ number_format($car->price, 2) }}
                                                </p>
                                                <p class="text-gray-600 dark:text-gray-300 text-sm mt-1">
                                                    <i class="fa-solid fa-eye mr-2"></i>Views: {{ $car->views }}
                                                </p>
                                            </div>
                                            
                                            <div class="flex space-x-2">
                                
                                                <!-- <a href="{{ route('cars.edit', $car->id) }}" class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                    <span class="sr-only">Edit</span>
                                                </a> -->
                                                
                                                <button 
                                                    type="button" 
                                                    onclick="confirmDelete({{ $car->id }}, '{{ addslashes($car->title) }}')"
                                                    class="text-red-600 hover:text-red-800 dark:text-red-400 dark:hover:text-red-300">
                                                    <i class="fa-solid fa-trash"></i>
                                                    <span class="sr-only">Delete</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>

                </div>
            
            <!-- Right Column - User Information -->
            <div class="col-span-2 row-span-2">
                <!-- Profile Information Form -->
                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>
            </div>
            
            <!-- Right Column - Password Update -->
            <div class="col-span-2 row-span-2">
                <!-- Password Update Form -->
                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>
            </div>
            
            <!-- Right Column - Account Deletion -->
            <div class="col-span-2">
                <!-- Account Deletion Form -->
                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @include('modals.toast.confirm')
    @include('partials.footer')
    
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Function to confirm car deletion
            window.confirmDelete = function(carId, carTitle) {
                console.log("Confirming delete for car:", carId, carTitle);
                
                // Update the form action
                const form = document.getElementById('delete-car-form');
                if (!form) {
                    console.error("Delete form not found!");
                    return;
                }
                
                form.action = `/cars/${carId}`;
                
                // Update the modal content with car name
                const nameElement = document.getElementById('delete-car-name');
                if (nameElement) {
                    nameElement.textContent = `"${carTitle}"`;
                }
                
                // Show the modal using Flowbite's API
                const modal = document.getElementById('delete-car-modal');
                if (!modal) {
                    console.error("Delete modal not found!");
                    return;
                }
                
                // Using Flowbite 3.x API
                if (typeof flowbite !== 'undefined') {
                    const modalElement = flowbite.initModal(modal);
                    modalElement.show();
                } else {
                    // Fallback if Flowbite isn't loaded properly
                    console.warn("Flowbite not loaded, using fallback.");
                    modal.classList.remove('hidden');
                    modal.setAttribute('aria-hidden', 'false');
                    document.body.classList.add('overflow-hidden');
                }
            };

            // Event listeners for modal close buttons
            const closeButtons = document.querySelectorAll('[data-modal-hide="delete-car-modal"]');
            const modal = document.getElementById('delete-car-modal');

            if (closeButtons && modal) {
                closeButtons.forEach(button => {
                    button.addEventListener('click', () => {
                        console.log("Closing modal");
                        modal.classList.add('hidden');
                        modal.setAttribute('aria-hidden', 'true');
                        document.body.classList.remove('overflow-hidden');
                    });
                });
            }
            
            // Log if we found the necessary elements
            console.log("Delete modal found:", !!document.getElementById('delete-car-modal'));
            console.log("Delete form found:", !!document.getElementById('delete-car-form'));
            console.log("Delete buttons found:", document.querySelectorAll('.text-red-600').length);
        });
    </script>
</body>
</html>