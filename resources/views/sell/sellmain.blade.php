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

    <div class="flex justify-start text-white text-3xl font-bold p-4 m-4">
        <header>Create a Listing to Sell your Car</header>
    </div>

    <div class="text-white m-8 rounded-lg p-8">
        <h2 class="text-4xl font-bold ml-4">Vehicle Information</h2>
        <h4 class="mb-4 ml-4">Provide accurate details about your car</h4>

        @include('sell.gen_info')
    </div>

    <div class="flex flex-col items-center border border-white p-6 w-full m-4 rounded-lg">
        <h1 class="text-2xl font-semibold mb-6">SAFETY FEATURES</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 w-full text-xl text-white">
            <div class="flex items-center">
                <input type="checkbox" id="airbags" class="mr-2">
                <label for="airbags" class="text-white-700">Driver and Passenger Airbags</label>
            </div>
            <div class="flex items-center">
                <input type="checkbox" id="brake_assist" class="mr-2">
                <label for="brake_assist" class="text-gray-700">Brake Assist</label>
            </div>
            <div class="flex items-center">
                <input type="checkbox" id="security_alarm" class="mr-2">
                <label for="security_alarm" class="text-gray-700">Security Alarm</label>
            </div>
            <div class="flex items-center">
                <input type="checkbox" id="traction_control" class="mr-2">
                <label for="traction_control" class="text-gray-700">Traction Control</label>
            </div>
            <div class="flex items-center">
                <input type="checkbox" id="central_locking" class="mr-2">
                <label for="central_locking" class="text-gray-700">Central Locking</label>
            </div>
            <div class="flex items-center">
                <input type="checkbox" id="immobilizer" class="mr-2">
                <label for="immobilizer" class="text-gray-700">Immobilizer</label>
            </div>
        </div>
    </div>

    <div class="flex flex-col items-center border border-white p-6 w-full m-4 rounded-lg"> 
        <h1 class="text-2xl font-semibold mb-4">Car Price</h1>
        <label for="price" class="text-gray-700">Price</label>
        <input type="text" name="price" id="price" required class="mt-2 p-2 border border-gray-300 rounded w-full max-w-xs">
    </div>

    <div class="flex flex-col items-center border border-white p-6 w-full m-4 rounded-lg">
    <div class="bg-black p-6 rounded-lg shadow-md w-full max-w-md">
        <h2 class="text-xl font-semibold mb-2">Photos</h2>
        <p class="text-gray-600 mb-4">Add photos of your car (minimum of 4 photos recommended)</p>
        <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center">
            <div class="flex flex-col items-center justify-center h-full">
                <i class="fas fa-cloud-upload-alt text-3xl text-gray-400 mb-2"></i>
                <p class="text-gray-600 mb-1">Click to upload or drag and drop</p>
                <p class="text-gray-400 text-sm">PNG, JPG or GIF (MAX. 5MB)</p>
                <p class="text-gray-400 text-sm mt-2">0/8 photos uploaded</p>
            </div>
        </div>
        <div class="mt-4 text-gray-500 flex items-center">
            <i class="fas fa-info-circle mr-2"></i>
            <p>4 more photos recommended</p>
        </div>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</div>

        <div class="flex flex-col items-center border border-white p-6 w-full m-4 rounded-lg">
    <h1 class="text-2xl font-semibold mb-4">Contact Information</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 w-full">
        <div>
            <label for="name" class="text-gray-700">Seller Name</label>
            <input type="text" name="name" id="name" required class="mt-2 p-2 border border-gray-300 rounded w-full">
        </div>

        <div>
            <label for="email" class="text-gray-700">Email</label>
            <input type="email" name="email" id="email" required class="mt-2 p-2 border border-gray-300 rounded w-full">
        </div>

        <div>
            <label for="city" class="text-gray-700">City</label>
            <input type="text" name="city" id="city" required class="mt-2 p-2 border border-gray-300 rounded w-full">
        </div>

        <div>
            <label for="phone" class="text-gray-700">Phone Number</label>
            <input type="text" name="phone" id="phone" required class="mt-2 p-2 border border-gray-300 rounded w-full">
        </div>

        <div>
            <label for="facebook" class="text-gray-700">Facebook Account</label>
            <input type="text" name="facebook" id="facebook" required class="mt-2 p-2 border border-gray-300 rounded w-full">
        </div>

        <div>
            <label for="address" class="text-gray-700">Address</label>
            <input type="text" name="address" id="address" required class="mt-2 p-2 border border-gray-300 rounded w-full">
        </div>
    </div>
</div>

<div class="flex justify-center mt-6">
    <button type="submit" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-700 transition duration-200">
        Submit Listing
    </button>
</div>
</body>
</html>