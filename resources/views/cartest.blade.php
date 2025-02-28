<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="container my-0">
    <div class="flex flex-wrap gap-2 space-around"> <!-- Apply gap here -->
        <div class="used-car-listing w-full max-w-sm mb-4">
            <div class="card-container bg-white rounded-lg shadow-md hover:shadow-xl transition-all">
                <div class="card-content p-6">
                    <div class="card-image mb-4">
                        <img 
                            src="https://images.unsplash.com/photo-1550355291-bbee04a92027?auto=format&fit=crop&q=80&w=400&h=300" 
                            alt="Car" 
                            class="w-full h-48 object-cover rounded-lg"
                        >
                    </div>
                    <div class="card-details space-y-3">
                        <h3 class="text-3xl font-semibold text-gray-800">Honda Accord LX</h3>
                        <div class="flex items-center gap-4 text-white-600">
                            <span class="border-2 border-[#000080] bg-[#000080] text-white rounded-md px-2 py-1">Modified</span>
                            <span class="border-2 border-white-800 rounded-md px-2 py-1">2009</span>
                            <span class="border-2 border-white-800 rounded-md px-2 py-1">Manual</span>
                            <span class="border-2 border-white-800 rounded-md px-2 py-1">150 km</span>
                        </div>
                        <h4>Davao Del Sur</h4>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-[#000080]">$27,999</span>
                        </div>
                        <div class="flex space-x-4 w-full max-w-md">
                            <button class="border-2 border-[#000080] rounded-md p-2 text-[#000080] hover:bg-blue-200 transition duration-200 flex-1">
                                <span class="text-sm">Make an Offer</span>
                            </button>
                            <button class="bg-[#000080] text-white p-2 rounded-md flex-1">
                                <span class="text-sm">Call Seller</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Repeat the above block for additional car listings -->
        <div class="used-car-listing w-full max-w-sm mb-4">
            <div class="card-container bg-white rounded-lg shadow-md hover:shadow-xl transition-all">
                <div class="card-content p-6">
                    <div class="card-image mb-4">
                        <img 
                            src="https://images.unsplash.com/photo-1550355291-bbee04a92027?auto=format&fit=crop&q=80&w=400&h=300" 
                            alt="Car" 
                            class="w-full h-48 object-cover rounded-lg"
                        >
                    </div>
                    <div class="card-details space-y-3">
                        <h3 class="text-3xl font-semibold text-gray-800">Honda Accord LX</h3>
                        <div class="flex items-center gap-4 text-white-600">
                            <span class="border-2 border-[#000080] bg-[#000080] text-white rounded-md px-2 py-1">Modified</span>
                            <span class="border-2 border-white-800 rounded-md px-2 py-1">2009</span>
                            <span class="border-2 border-white-800 rounded-md px-2 py-1">Manual</span>
                            <span class="border-2 border-white-800 rounded-md px-2 py-1">150 km</span>
                        </div>
                        <h4>Davao Del Sur</h4>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-[#000080]">$27,999</span>
                        </div>
                        <div class="flex space-x-4 w-full max-w-md">
                            <button class="border-2 border-[#000080] rounded-md p-2 text-[#000080] hover:bg-blue-200 transition duration-200 flex-1">
                                <span class="text-sm">Make an Offer</span>
                            </button>
                            <button class="bg-[#000080] text-white p-2 rounded-md flex-1">
                                <span class="text-sm">Call Seller</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="used-car-listing w-full max-w-sm mb-4">
            <div class="card-container bg-white rounded-lg shadow-md hover:shadow-xl transition-all">
                <div class="card-content p-6">
                    <div class="card-image mb-4">
                        <img 
                            src="https://images.unsplash.com/photo-1550355291-bbee04a92027?auto=format&fit=crop&q=80&w=400&h=300" 
                            alt="Car" 
                            class="w-full h-48 object-cover rounded-lg"
                        >
                    </div>
                    <div class="card-details space-y-3">
                        <h3 class="text-3xl font-semibold text-gray-800">Honda Accord LX</h3>
                        <div class="flex items-center gap-4 text-white-600">
                            <span class="border-2 border-[#000080] bg-[#000080] text-white rounded-md px-2 py-1">Modified</span>
                            <span class="border-2 border-white-800 rounded-md px-2 py-1">2009</span>
                            <span class="border-2 border-white-800 rounded-md px-2 py-1">Manual</span>
                            <span class="border-2 border-white-800 rounded-md px-2 py-1">150 km</span>
                        </div>
                        <h4>Davao Del Sur</h4>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-[#000080]">$27,999</span>
                        </div>
                        <div class="flex space-x-4 w-full max-w-md">
                            <button class="border-2 border-[#000080] rounded-md p-2 text-[#000080] hover:bg-blue-200 transition duration-200 flex-1">
                                <span class="text-sm">Make an Offer</span>
                            </button>
                            <button class="bg-[#000080] text-white p-2 rounded-md flex-1">
                                <span class="text-sm">Call Seller</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="used-car-listing w-full max-w-sm mb-4">
            <div class="card-container bg-white rounded-lg shadow-md hover:shadow-xl transition-all">
                <div class="card-content p-6">
                    <div class="card-image mb-4">
                        <img 
                            src="https://images.unsplash.com/photo-1550355291-bbee04a92027?auto=format&fit=crop&q=80&w=400&h=300" 
                            alt="Car" 
                            class="w-full h-48 object-cover rounded-lg"
                        >
                    </div>
                    <div class="card-details space-y-3">
                        <h3 class="text-3xl font-semibold text-gray-800">Honda Accord LX</h3>
                        <div class="flex items-center gap-4 text-white-600">
                            <span class="border-2 border-[#000080] bg-[#000080] text-white rounded-md px-2 py-1">Modified</span>
                            <span class="border-2 border-white-800 rounded-md px-2 py-1">2009</span>
                            <span class="border-2 border-white-800 rounded-md px-2 py-1">Manual</span>
                            <span class="border-2 border-white-800 rounded-md px-2 py-1">150 km</span>
                        </div>
                        <h4>Davao Del Sur</h4>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-[#000080]">$27,999</span>
                        </div>
                        <div class="flex space-x-4 w-full max-w-md">
                            <button class="border-2 border-[#000080] rounded-md p-2 text-[#000080] hover:bg-blue-200 transition duration-200 flex-1">
                                <span class="text-sm">Make an Offer</span>
                            </button>
                            <button class="bg-[#000080] text-white p-2 rounded-md flex-1">
                                <span class="text-sm">Call Seller</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="used-car-listing w-full max-w-sm mb-4">
            <div class="card-container bg-white rounded-lg shadow-md hover:shadow-xl transition-all">
                <div class="card-content p-6">
                    <div class="card-image mb-4">
                        <img 
                            src="https://images.unsplash.com/photo-1550355291-bbee04a92027?auto=format&fit=crop&q=80&w=400&h=300" 
                            alt="Car" 
                            class="w-full h-48 object-cover rounded-lg"
                        >
                    </div>
                    <div class="card-details space-y-3">
                        <h3 class="text-3xl font-semibold text-gray-800">Honda Accord LX</h3>
                        <div class="flex items-center gap-4 text-white-600">
                            <span class="border-2 border-[#000080] bg-[#000080] text-white rounded-md px-2 py-1">Modified</span>
                            <span class="border-2 border-white-800 rounded-md px-2 py-1">2009</span>
                            <span class="border-2 border-white-800 rounded-md px-2 py-1">Manual</span>
                            <span class="border-2 border-white-800 rounded-md px-2 py-1">150 km</span>
                        </div>
                        <h4>Davao Del Sur</h4>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-[#000080]">$27,999</span>
                        </div>
                        <div class="flex space-x-4 w-full max-w-md">
                            <button class="border-2 border-[#000080] rounded-md p-2 text-[#000080] hover:bg-blue-200 transition duration-200 flex-1">
                                <span class="text-sm">Make an Offer</span>
                            </button>
                            <button class="bg-[#000080] text-white p-2 rounded-md flex-1">
                                <span class="text-sm">Call Seller</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="used-car-listing w-full max-w-sm mb-4">
            <div class="card-container bg-white rounded-lg shadow-md hover:shadow-xl transition-all">
                <div class="card-content p-6">
                    <div class="card-image mb-4">
                        <img 
                            src="https://images.unsplash.com/photo-1550355291-bbee04a92027?auto=format&fit=crop&q=80&w=400&h=300" 
                            alt="Car" 
                            class="w-full h-48 object-cover rounded-lg"
                        >
                    </div>
                    <div class="card-details space-y-3">
                        <h3 class="text-3xl font-semibold text-gray-800">Honda Accord LX</h3>
                        <div class="flex items-center gap-4 text-white-600">
                            <span class="border-2 border-[#000080] bg-[#000080] text-white rounded-md px-2 py-1">Modified</span>
                            <span class="border-2 border-white-800 rounded-md px-2 py-1">2009</span>
                            <span class="border-2 border-white-800 rounded-md px-2 py-1">Manual</span>
                            <span class="border-2 border-white-800 rounded-md px-2 py-1">150 km</span>
                        </div>
                        <h4>Davao Del Sur</h4>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-[#000080]">$27,999</span>
                        </div>
                        <div class="flex space-x-4 w-full max-w-md">
                            <button class="border-2 border-[#000080] rounded-md p-2 text-[#000080] hover:bg-blue-200 transition duration-200 flex-1">
                                <span class="text-sm">Make an Offer</span>
                            </button>
                            <button class="bg-[#000080] text-white p-2 rounded-md flex-1">
                                <span class="text-sm">Call Seller</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>