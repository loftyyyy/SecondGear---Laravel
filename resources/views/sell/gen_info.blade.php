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
<body>
<div class="flex flex-col items-center border border-white p-6 w-full m-4 rounded-lg">
        <h1 class="text-2xl font-semibold mb-6">GENERAL INFORMATION</h1>
        <form action="/sellcar" method="POST" class="p-4 grid grid-cols-2 md:grid-cols-2 gap-2 w-10/12 ">
            @csrf
            <div>
                <label for="brand" class="block text-white-700 font-medium">Brand</label>
                <select name="brand" id="brand" required class="mt-1 block w-6/12 border border-gray-300 rounded-md p-2 text-black">
                    <option value="">Select a brand</option>
                    <option value="Toyota">Toyota</option>
                    <option value="Honda">Honda</option>
                    <option value="Ford">Ford</option>
                    <option value="Other">Other</option>
                </select>
            <input type="text" name="brand_other" id="brand_other" placeholder="If other, please specify" class="mt-1 block w-full border border-gray-300 rounded-md p-2 hidden">
        </div>

        <div>
            <label for="model" class="block text-white-700 font-medium">Model</label>
            <select name="model" id="model" required class="mt-1 block w-6/12 border border-gray-300 rounded-md p-2 text-black">
                <option value="">Select a model</option>
                <option value="Sedan">Sedan</option>
                <option value="SUV">SUV</option>
                <option value="Truck">Truck</option>
                <option value="Other">Other</option>
            </select>
            <input type="text" name="model_other" id="model_other" placeholder="If other, please specify" class="mt-1 block w-full border border-gray-300 rounded-md p-2 hidden">
        </div>

        <div>
            <label for="color" class="block text-white-700 font-medium">Color</label>
            <select name="color" id="color" required class="mt-1 block w-6/12 border border-gray-300 rounded-md p-2 text-black">
                <option value="">Select a color</option>
                <option value="Red">Red</option>
                <option value="Blue">Blue</option>
                <option value="Black">Black</option>
                <option value="Other">Other</option>
            </select>
            <input type="text" name="color_other" id="color_other" placeholder="If other, please specify" class="mt-1 block w-full border border-gray-300 rounded-md p-2 hidden">
        </div>

        <div>
            <label for="bodytype" class="block text-white-700 font-medium">Bodytype</label>
            <select name="bodytype" id="bodytype" required class="mt-1 block w-6/12 border border-gray-300 rounded-md p-2 text-black">
                <option value="">Select a body type</option>
                <option value="Coupe">Coupe</option>
                <option value="Hatchback">Hatchback</option>
                <option value="Convertible">Convertible</option>
                <option value="Other">Other</option>
            </select>
            <input type="text" name="bodytype_other" id="bodytype_other" placeholder="If other, please specify" class="mt-1 block w-full border border-gray-300 rounded-md p-2 hidden">
        </div>

        <div>
            <label for="year" class="block text-white-700 font-medium">Year</label>
            <input type="number" name="year" id="year" required class="mt-1 block w-6/12 border border-gray-300 rounded-md p-2 text-black">
        </div>

        <div>
            <label for="mileage" class="block text-white-700 font-medium">Mileage</label>
            <input type="number" name="mileage" id="mileage" required class="mt-1 block w-6/12 border border-gray-300 rounded-md p-2 text-black">
        </div>

        <div>
        <label for="transmission" class="block text-white-700 font-medium">Transmission</label>
            <select name="transmission" id="transmission" required class="mt-1 block w-6/12 border border-gray-300 rounded-md p-2 text-black">
                <option value="">Select transmission type</option>
                <option value="Automatic">Automatic</option>
                <option value="Manual">Manual</option>
                <option value="Other">Other</option>
            </select>
            <input type="text" name="transmission_other" id="transmission_other" placeholder="If other, please specify" class="mt-1 w-6/12 border border-gray-300 rounded-md p-2 hidden text-black">
        </div>

       
    </form>
</body>
</html>