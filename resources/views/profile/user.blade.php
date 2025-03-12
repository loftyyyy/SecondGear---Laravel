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
                        <div class="space-y-4">
                            @foreach ($cars as $car)
                                <div class="bg-gray-100 dark:bg-gray-700 p-4 rounded-lg shadow-md hover:shadow-lg transition duration-300 border">
                                    <h3>
                                        <a href="{{ route('cars.show', $car->id) }}" 
                                        class="text-xl sm:text-2xl font-bold text-gray-900 dark:text-gray-100 hover:text-blue-500 dark:hover:text-blue-400 transition duration-300">
                                        {{$car->title}}
                                        </a>
                                    </h3>
                                    <p class="text-gray-600 dark:text-gray-300 text-sm mt-1">
                                    <i class="fa-solid fa-calendar-days mr-2"></i>Listed on {{ \Carbon\Carbon::parse($car->created_at)->format('F j, Y') }}
                                    </p>
                                </div>
                            @endforeach
                        </div>
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

    @include('partials.footer')
    
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>
</html>