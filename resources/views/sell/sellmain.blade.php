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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Expanded:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body class="font-sans dark:bg-black dark:text-white/50 overflow-x-hidden">
    @include('partials.header')

    <div class="flex justify-start text-white text-3xl font-bold p-8">
        <header>Create a Listing to Sell your Car</header>
    </div>

    <!-- Vehicle Information Section -->
    <div class="text-white m-8 rounded-lg px-36">
        <h2 class="text-4xl font-bold ml-4">Vehicle Information</h2>
        <h4 class="mb-4 ml-4">Provide accurate details about your car</h4>

        @include('sell.gen_info')
        
    </div>

    <!-- Safety Features Section -->
    <div class="text-white m-8 rounded-lg px-36">
        <div class="flex flex-col items-center border border-white p-10 w-full m-8 rounded-lg">
            <h1 class="text-3xl font-bold mb-6">SAFETY FEATURES</h1>
            <div class="grid grid-cols-3 gap-4 w-10/12 text-xl text-white">
                <div class="flex items-center">
                    <input type="checkbox" id="airbags" class="mr-4">
                    <label for="airbags" class="text-white-700">Driver and Passenger Airbags</label>
                </div>
                <div class="flex items-center">
                    <input type="checkbox" id="brake_assist" class="mr-4">
                    <label for="brake_assist" class="text-white-700">Brake Assist</label>
                </div>
                <div class="flex items-center">
                    <input type="checkbox" id="security_alarm" class="mr-4">
                    <label for="security_alarm" class="text-white-700">Security Alarm</label>
                </div>
                <div class="flex items-center">
                    <input type="checkbox" id="traction_control" class="mr-4">
                    <label for="traction_control" class="text-white-700">Traction Control</label>
                </div>
                <div class="flex items-center">
                    <input type="checkbox" id="central_locking" class="mr-4">
                    <label for="central_locking" class="text-white-700">Central Locking</label>
                </div>
                <div class="flex items-center">
                    <input type="checkbox" id="immobilizer" class="mr-4">
                    <label for="immobilizer" class="text-white-700">Immobilizer</label>
                </div>
            </div>
        </div>

        <!-- Car Price Section -->
        <div class="flex flex-col items-center border border-white p-10 w-full m-8 rounded-lg shadow-md">
            <h1 class="text-3xl font-bold mb-4 flex items-center">
                Car Price
            </h1>
            <div class="relative w-full max-w-xs">
                <input type="text" name="price" id="price" required
                     class="mt-2 p-2 border border-gray-300 rounded w-full bg-gray-700 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-200 pl-10"
                    placeholder="Enter price">
                <span class="absolute left-3 top-2.5 text-gray-400">
                    <i class="fas fa-money-bill-wave mt-3 w-10 h-10"></i>
                </span>
            </div>
        </div>

        <!-- Upload Photos Section -->
        <div class="flex flex-col items-center border border-white p-10 w-full m-8 rounded-lg">
            <h2 class="text-3xl font-bold mb-2">Photos</h2>
            <div class="bg-black p-6 rounded-lg shadow-md w-full max-w-md">
                <p class="text-gray-600 mb-4">Add photos of your car (minimum of 4 photos recommended)</p>
                <div class="flex items-center justify-center w-full">
                    <label for="dropzone-file"
                        class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                            </svg>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">
                                <span class="font-semibold">Click to upload</span> or drag and drop
                            </p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                        </div>
                        <input id="dropzone-file" type="file" class="hidden" />
                    </label>
                </div>
            </div>
        </div>

        <!-- Upload OR/CR Section -->
        <div class="flex flex-col items-center border border-white p-10 w-full m-8 rounded-lg">
            <h1 class="text-3xl font-bold mb-4">Upload OR/CR</h1>
                <div class="flex items-center justify-center w-full max-w-md">
                    <label for="dropzone-file"
                        class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                            </svg>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">
                                <span class="font-semibold">Click to upload</span> or drag and drop
                            </p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                        </div>
                        <input id="dropzone-file" type="file" class="hidden" />
                    </label>
                </div>
        </div>

        <!-- Contact Information Section -->
        <div class="flex flex-col items-center border border-white p-10 w-full m-8 rounded-lg">
            <h1 class="text-3xl font-bold mb-4">Contact Information</h1>
            <div class="p-4 grid text-black grid-cols-2 gap-10 w-full max-w-5xl mx-auto">
                <input placeholder="Name">
                <input placeholder="Email">
                <input placeholder="City">
                <input placeholder="Phone Number">
            </div>
        </div>

        <div class="flex flex-col items-center border border-white p-10 w-full m-8 rounded-lg">
            <h1 class="text-3xl font-bold mb-4">Description</h1>
                <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your car's description here..."></textarea>
        </div>

        <!-- Submit Button -->
        <div class="flex justify-center mt-6">
            <button type="submit"
                class="bg-blue-500 font-bold py-2 px-4 rounded hover:bg-blue-700">
                Submit Listing
            </button>
        </div>
</body>
</html>
