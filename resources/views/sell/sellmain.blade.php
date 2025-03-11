<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Second Gear | Sell Your Car</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Expanded:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Encode Sans Expanded', 'sans-serif'],
                    },
                    colors: {
                        'primary': '#3b82f6',
                        'primary-dark': '#2563eb',
                        'secondary': '#1e293b',
                    }
                }
            }
        }
    </script>
</head>

<body class="font-sans bg-slate-100 dark:bg-gray-900 dark:text-white/80 overflow-x-hidden min-h-screen">
    <div class="absolute">
    @include('partials.header')
    
    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    @if(session('warning'))
        <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 px-4 py-3 rounded relative mb-4" role="alert">
            <span class="block sm:inline">{{ session('warning') }}</span>
        </div>
    @endif

    @if(session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
            <span class="block sm:inline">{{ session('error') }}</span>
        </div>
    @endif


    </div>

    <!-- TODO: Implement a foreach in browse -->
    <main class="container mx-auto px-4 py-8">
        <div class="flex justify-start items-center mb-8">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 dark:text-white">
                <i class="fas fa-car-side mr-3 text-primary"></i>Create a Listing to Sell your Car
            </h1>
        </div>
        
        <form action="{{route('user.sell')}}" method="POST" enctype="multipart/form-data" class="space-y-8">
            @csrf

            <!-- Vehicle Information Section -->
            <section class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 transition-all duration-300">
                <div class="border-b border-gray-200 dark:border-gray-700 pb-4 mb-6">
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-800 dark:text-white flex items-center">
                        <i class="fas fa-info-circle text-primary mr-3"></i>Vehicle Information
                    </h2>
                    <p class="text-gray-600 dark:text-gray-400 mt-1">Provide accurate details about your car</p>
                </div>
                @include('sell.gen_info')
            </section>

            <!-- Safety Features Section -->
            <section class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 transition-all duration-300">
                <div class="border-b border-gray-200 dark:border-gray-700 pb-4 mb-6">
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-800 dark:text-white flex items-center">
                        <i class="fas fa-shield-alt text-primary mr-3"></i>Safety Features
                    </h2>
                    <p class="text-gray-600 dark:text-gray-400 mt-1">Select all safety features your vehicle has</p>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 text-gray-800 dark:text-gray-200">
    <div class="flex items-center p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
        <input type="hidden" name="driver_airbag" value="0">
        <input name="driver_airbag" type="checkbox" id="driver_airbag" class="w-5 h-5 text-primary rounded focus:ring-primary" value="1">
        <label for="driver_airbag" class="ml-3 text-sm font-medium">Driver Airbags</label>
    </div>
    
    <div class="flex items-center p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
        <input type="hidden" name="passenger_airbag" value="0">
        <input name="passenger_airbag" type="checkbox" id="passenger_airbag" class="w-5 h-5 text-primary rounded focus:ring-primary" value="1">
        <label for="passenger_airbag" class="ml-3 text-sm font-medium">Passenger Airbags</label>
    </div>
    
    <div class="flex items-center p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
        <input type="hidden" name="brake_assist" value="0">
        <input name="brake_assist" type="checkbox" id="brake_assist" class="w-5 h-5 text-primary rounded focus:ring-primary" value="1">
        <label for="brake_assist" class="ml-3 text-sm font-medium">Brake Assist</label>
    </div>
    
    <div class="flex items-center p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
        <input type="hidden" name="security_alarm" value="0">
        <input name="security_alarm" type="checkbox" id="security_alarm" class="w-5 h-5 text-primary rounded focus:ring-primary" value="1">
        <label for="security_alarm" class="ml-3 text-sm font-medium">Security Alarm</label>
    </div>
    
    <div class="flex items-center p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
        <input type="hidden" name="traction_control" value="0">
        <input name="traction_control" type="checkbox" id="traction_control" class="w-5 h-5 text-primary rounded focus:ring-primary" value="1">
        <label for="traction_control" class="ml-3 text-sm font-medium">Traction Control</label>
    </div>
    
    <div class="flex items-center p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
        <input type="hidden" name="central_locking" value="0">
        <input name="central_locking" type="checkbox" id="central_locking" class="w-5 h-5 text-primary rounded focus:ring-primary" value="1">
        <label for="central_locking" class="ml-3 text-sm font-medium">Central Locking</label>
    </div>
    
    <div class="flex items-center p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
        <input type="hidden" name="immobilizer" value="0">
        <input name="immobilizer" type="checkbox" id="immobilizer" class="w-5 h-5 text-primary rounded focus:ring-primary" value="1">
        <label for="immobilizer" class="ml-3 text-sm font-medium">Immobilizer</label>
    </div>
</div>

            </section>

            <!-- Car Price Section -->
            <section class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 transition-all duration-300">
                <div class="border-b border-gray-200 dark:border-gray-700 pb-4 mb-6">
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-800 dark:text-white flex items-center">
                        <i class="fas fa-tag text-primary mr-3"></i>Car Price
                    </h2>
                    <p class="text-gray-600 dark:text-gray-400 mt-1">Set a competitive price for your vehicle</p>
                </div>
                <div class="max-w-md mx-auto">
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <i class="fa-solid fa-peso-sign text-gray-500 dark:text-gray-400"></i>
                        </div>
                        <input type="number" name="price" id="price" required
                            class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-primary focus:border-primary dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                            placeholder="Enter price">
                    </div>
                    <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Enter the price in Philippine Peso (₱)</p>
                </div>
            </section>

            <!-- Upload Photos Section -->
            <section class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 transition-all duration-300">
                <div class="border-b border-gray-200 dark:border-gray-700 pb-4 mb-6">
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-800 dark:text-white flex items-center">
                        <i class="fas fa-camera text-primary mr-3"></i>Vehicle Photos
                    </h2>
                    <p class="text-gray-600 dark:text-gray-400 mt-1">Add multiple high-quality photos of your car (minimum 4 recommended)</p>
                </div>
                <div class="max-w-2xl mx-auto">
                    <label for="car-images" 
                        class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-700 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                            </svg>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">PNG, JPG or JPEG (MAX. 5MB per image)</p>
                        </div>
                        <input id="car-images" type="file" name="car_images[]" multiple accept="image/*" class="hidden" />
                    </label>
                    @error('car_images.*')<span class="text-red-500 text-sm mt-2 block">{{ $message }}</span>@enderror
                    
                    <div id="image-preview" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4 mt-6"></div>
                    
                    <div class="mt-4 p-4 bg-blue-50 dark:bg-blue-900/30 rounded-lg">
                        <h3 class="font-medium text-blue-700 dark:text-blue-300 flex items-center">
                            <i class="fas fa-lightbulb mr-2"></i>Photo Tips
                        </h3>
                        <ul class="mt-2 text-sm text-gray-700 dark:text-gray-300 list-disc list-inside space-y-1">
                            <li>Include exterior shots from all angles</li>
                            <li>Add interior photos showing dashboard and seats</li>
                            <li>Take photos in good lighting conditions</li>
                            <li>Include photos of any notable features or modifications</li>
                        </ul>
                    </div>
                </div>
            </section>

            <!-- Upload OR/CR Section -->
            <section class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 transition-all duration-300">
                <div class="border-b border-gray-200 dark:border-gray-700 pb-4 mb-6">
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-800 dark:text-white flex items-center">
                        <i class="fas fa-file-alt text-primary mr-3"></i>Vehicle Documents (OR/CR)
                    </h2>
                    <p class="text-gray-600 dark:text-gray-400 mt-1">Upload clear photos of your vehicle's Official Receipt and Certificate of Registration</p>
                </div>
                <div class="max-w-2xl mx-auto">
                    <label for="document-images" 
                        class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-700 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                            </svg>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">PNG, JPG or JPEG (MAX. 5MB per image)</p>
                        </div>
                        <input id="document-images" type="file" name="document_images[]" multiple accept="image/*" class="hidden" />
                    </label>
                    @error('document_images.*')<span class="text-red-500 text-sm mt-2 block">{{ $message }}</span>@enderror
                    
                    <div id="document-preview" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4 mt-6"></div>
                    
                    <div class="mt-4 p-4 bg-yellow-50 dark:bg-yellow-900/30 rounded-lg">
                        <h3 class="font-medium text-yellow-700 dark:text-yellow-300 flex items-center">
                            <i class="fas fa-exclamation-triangle mr-2"></i>Important
                        </h3>
                        <p class="mt-2 text-sm text-gray-700 dark:text-gray-300">
                            These documents help verify your vehicle's legal status. Your personal information will be protected and only shown to verified buyers.
                        </p>
                    </div>
                </div>
            </section>

            <!-- Contact Information Section -->
            <section class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 transition-all duration-300">
                <div class="border-b border-gray-200 dark:border-gray-700 pb-4 mb-6">
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-800 dark:text-white flex items-center">
                        <i class="fas fa-address-card text-primary mr-3"></i>Contact Information
                    </h2>
                    <p class="text-gray-600 dark:text-gray-400 mt-1">How potential buyers can reach you</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="contact_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Full Name</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <i class="fas fa-user text-gray-500 dark:text-gray-400"></i>
                            </div>
                            <input type="text" name="contact_name" id="contact_name" value="{{Auth::user()->name}}" required
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 pl-10 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Your name">
                        </div>
                    </div>
                    <div>
                        <label for="contact_email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email Address</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <i class="fas fa-envelope text-gray-500 dark:text-gray-400"></i>
                            </div>
                            <input type="email" name="contact_email" id="contact_email" value="{{Auth::user()->email}}" required
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 pl-10 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                                placeholder="your.email@example.com">
                        </div>
                    </div>
                    <div>
                        <label for="city" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">City</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <i class="fas fa-map-marker-alt text-gray-500 dark:text-gray-400"></i>
                            </div>
                            <input type="text" name="city" id="city" required
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 pl-10 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Your city">
                        </div>
                    </div>
                    <div>
                        <label for="contact_phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <i class="fas fa-phone text-gray-500 dark:text-gray-400"></i>
                            </div>
                            <input type="text" name="contact_phone" id="contact_phone" required
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 pl-10 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Your phone number">
                        </div>
                    </div>
                </div>
            </section>

            <!-- Submit Button -->
            <div class="flex justify-center mt-8">
                <button type="submit" 
                    class="text-white bg-primary hover:bg-primary-dark focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-lg px-8 py-3 transition-all duration-300 flex items-center">
                    <i class="fas fa-check-circle mr-2"></i>Submit Listing
                </button>
            </div>
        </form>
    </main>
        <script>
        // Preview images when selected
        document.getElementById('car-images').addEventListener('change', function(event) {
            const preview = document.getElementById('image-preview');
            preview.innerHTML = '';
            
            for (const file of event.target.files) {
                if (file.type.match('image.*')) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const div = document.createElement('div');
                        div.className = 'relative group';
                        div.innerHTML = `
                            <img src="${e.target.result}" class="h-32 w-full object-cover rounded-lg border border-gray-200 dark:border-gray-700">
                            <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 rounded-lg flex items-center justify-center transition-opacity duration-200">
                                <span class="text-white text-xs">${file.name}</span>
                            </div>
                        `;
                        preview.appendChild(div);
                    }
                    reader.readAsDataURL(file);
                }
            }
        });

        document.getElementById('document-images').addEventListener('change', function(event) {
            const preview = document.getElementById('document-preview');
            preview.innerHTML = '';
            
            for (const file of event.target.files) {
                if (file.type.match('image.*')) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const div = document.createElement('div');
                        div.className = 'relative group';
                        div.innerHTML = `
                            <img src="${e.target.result}" class="h-32 w-full object-cover rounded-lg border border-gray-200 dark:border-gray-700">
                            <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 rounded-lg flex items-center justify-center transition-opacity duration-200">
                                <span class="text-white text-xs">${file.name}</span>
                            </div>
                        `;
                        preview.appendChild(div);
                    }
                    reader.readAsDataURL(file);
                }
            }
        });
    </script>
</body>
</html>