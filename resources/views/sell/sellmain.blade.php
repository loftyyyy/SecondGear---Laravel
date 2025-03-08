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
<a href="{{ route('sell/sellmain') }}"></a>

    @include('partials.header')

    <div class="flex justify-start text-white text-3xl font-bold p-4 m-4">
        <header>Create a Listing to Sell your Car</header>
    </div>

    <div class="border border-white text-white m-8 rounded-lg p-8">
        <h2 class="text-2xl font-bold ">Vehicle Information</h2>
        <h4 class="mb-4" >Provide accurate details about your car</h4>

        @include('sell.gen_info')
      
    
    </div>
    <div class="flex flex-col items-center border border-white p-6 w-full m-4 rounded-lg">
    <h1 class="text-2xl font-semibold mb-6">SAFETY FEATURE</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 w-full">
        <div class="flex items-center">
            <input type="checkbox" id="airbags" class="mr-2">
            <label for="airbags" class="text-gray-700">Driver and Passenger Airbags</label>
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

        <div>
            <h1>Car Price</h1>

            <label for="price">Price</label>
            <input type="text" name="price" id="price" required>
        </div>

        <div>
            <h1>Photos</h1>
            <p>Add photos of your car (minimum of 4 photos recommended)</p>

            <input type="file">
        </div>

        <div>
            <h1>Contact Information</h1>

            <label for="name">Seller Name</label>
            <input type="text" name="name" id="name" required><br>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" required><br>

            <label for="city">City</label>
            <input type="text" name="city" id="city" required><br>

            <label for="phone">Phone Number</label>
            <input type="text" name="phone" id="phone" required><br>

            <label for="facebook">Facebook Account</label>
            <input type="text" name="facebook" id="facebook" required><br>

            <label for="address">Address</label>
            <input type="text" name="address" id="address" required>


        </div>
    </div>
    </div> 
</body>
</html>