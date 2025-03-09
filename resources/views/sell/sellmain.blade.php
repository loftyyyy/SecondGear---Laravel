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

    <div class="text-white m-8 rounded-lg px-36">
        <h2 class="text-4xl font-bold ml-4">Vehicle Information</h2>
        <h4 class="mb-4 ml-4">Provide accurate details about your car</h4>

        @include('sell.gen_info')
    </div>

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

    <div class="flex flex-col items-center border border-white p-10 w-full m-8 rounded-lg  shadow-md">
    <h1 class="text-3xl font-bold mb-4 flex items-center">
    <i class="fa-solid fa-peso-sign m-2"></i>Car Price
    </h1>
    <div class="relative w-full max-w-xs">
        <input type="text" name="price" id="price" required class="mt-2 p-2 border border-gray-300 rounded w-full bg-gray-700 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-200 pl-10" placeholder="Enter price">
        <span class="absolute left-3 top-2.5 text-gray-400">
            <i class="fas fa-money-bill-wave mt-3 w-10 h-10"></i>
        </span>
    </div>
</div>
 
    <div class="flex flex-col items-center border border-white p-10 w-full m-8 rounded-lg">
    <div class="bg-black p-6 rounded-lg shadow-md w-full max-w-md">
        <h2 class="text-3xl font-bold mb-2">Photos</h2>
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
</div>


<div class="flex flex-col items-center border border-white p-10 w-full m-8 rounded-lg">
                <h1 class="text-3xl font-bold mb-4">Upload OR/CR</h1>
                <div class="bg-black p-6 rounded-lg shadow-md w-full max-w-md">
                    <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center">
                        <div class="flex flex-col items-center justify-center h-full">
                            <i class="fas fa-cloud-upload-alt text-3xl text-gray-400 mb-2"></i>
                            <p class="text-gray-600 mb-1">Click to upload or drag and drop</p>
                            <p class="text-gray-400 text-sm">PNG, JPG or PDF (MAX. 5MB)</p>
                        </div>
                    </div>
                    <div class="mt-4 text-gray-500 flex items-center">
                        <i class="fas fa-info-circle mr-2"></i>
                        <p>Upload your OR/CR document</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-white m-8 rounded-lg px-36">
        <div class="flex flex-col items-center border border-white p-10 w-full m-8 rounded-lg">
    <h1 class="text-3xl font-bold mb-4">Contact Information</h1>

    <div class="p-4 grid grid-cols-2 gap-10 w-full max-w-5xl mx-auto font-medium text-white">
        <div>
            <label for="name" class="text-white-700">Seller Name</label>
            <input type="text" name="name" id="name" required class="mt-2 p-2 border border-gray-300 text-black rounded w-full">
        </div>

        <div>
            <label for="email" class="text-white-700">Email</label>
            <input type="email" name="email" id="email" required class="mt-2 p-2 border border-gray-300 text-black rounded w-full">
        </div>

        <div>
            <label for="city" class="text-white-700">City</label>
            <input type="text" name="city" id="city" required class="mt-2 p-2 border border-gray-300 text-black rounded w-full">
        </div>

        <div>
            <label for="phone" class="text-white-700">Phone Number</label>
            <input type="text" name="phone" id="phone" required class="mt-2 p-2 border border-gray-300 text-black rounded w-full">
        </div>

        <div>
            <label for="facebook" class="text-white-700">Facebook Account</label>
            <input type="text" name="facebook" id="facebook" required class="mt-2 p-2 border border-gray-300 text-black rounded w-full">
        </div>

        <div>
            <label for="address" class="text-white-700">Address</label>
            <input type="text" name="address" id="address" required class="mt-2 p-2 border border-gray-300 text-black rounded w-full">
        </div>
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