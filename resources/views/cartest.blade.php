<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 ml-4">
        <div class="h-full w-full">
            <div class="card-container bg-white rounded-lg shadow-md hover:shadow-xl transition-all h-full">
                <div class="card-content p-4">
                    <div class="card-image mb-3">
                        <img
                            src="https://images.unsplash.com/photo-1550355291-bbee04a92027?auto=format&fit=crop&q=80&w=400&h=300"
                            alt="Honda Accord LX"
                            class="w-full h-40 object-cover rounded-lg"
                        />
                    </div>

                    <div class="card-details space-y-2">
                        <!-- Title with brand highlighted -->
                        <div class="flex flex-col">
                            <span class="text-xs font-medium text-[#000080]">Honda</span>
                            <h3 class="text-xl font-semibold text-gray-800 truncate">Accord LX</h3>
                        </div>

                        <!-- Tags section - made more compact -->
                        <div class="flex flex-wrap gap-1 text-xs">
                            <span class="border-2 border-[#000080] bg-[#000080] text-white rounded-md px-1.5 py-0.5">
                                Modified
                            </span>
                            <span class="border-2 border-white-800 rounded-md text-gray-700 px-1.5 py-0.5">2009</span>
                            <span class="border-2 border-white-800 rounded-md text-gray-700 px-1.5 py-0.5">Manual</span>
                            <span class="border-2 border-white-800 rounded-md text-gray-700 px-1.5 py-0.5">150 km</span>
                        </div>

                        <!-- Additional details with icons -->
                        <div class="grid grid-cols-2 gap-1 text-xs">
                            <span class="flex items-center gap-1 truncate">
                                <span class="w-3 h-3 bg-red-500 rounded-full flex-shrink-0"></span>
                                <span class=" text-gray-700">Red</span>
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
                                <span class=" text-gray-700">Davao City</span>
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
                                <span class="text-gray-700">18,500 views</span>
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
                                <span class=" text-gray-700">John Smith</span>
                            </span>
                        </div>

                        <!-- Region -->
                        <h4 class="text-xs text-gray-600">Davao Del Sur</h4>

                        <!-- Price -->
                        <div class="flex justify-between items-center">
                            <span class="text-lg font-bold text-[#000080]">$27,999</span>
                            <span class="text-xs text-gray-500">2d ago</span>
                        </div>

                        <!-- Action buttons -->
                        <div class="flex space-x-2 w-full">
                            <button class="border-2 border-[#000080] rounded-md py-1 px-2 text-[#000080] hover:bg-blue-800 hover:text-white transition duration-200 flex-1 text-xs">
                                Make an Offer
                            </button>
                            <button class="bg-[#000080] text-white py-1 px-2 rounded-md flex-1 text-xs">
                                Call Seller
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</body>
</html>
