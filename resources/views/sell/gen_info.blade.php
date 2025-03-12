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
<body >
    <div class="flex flex-col items-center border border-white p-6 w-full m-8 rounded-lg">
        <div class="mb-8 w-full">
            <h2 class="text-2xl font-semibold mb-4">Basic Information</h2>
            
            <div class="mb-4">
                <label for="title" class="block text-white font-medium mb-2">Listing Title</label>
                <input type="text" name="title" id="title" class="w-full border bg-gray-700 border-gray-300 rounded-md p-2" required placeholder="e.g. 2020 Toyota Camry in Excellent Condition">
            </div>
            
            <div class="mb-4">
                <label for="description" class="block text-white font-medium mb-2">Description</label>
                <textarea name="description" id="description" rows="4" class="w-full border bg-gray-700 border-gray-300 rounded-md p-2" placeholder="Describe your car, its condition, and any special features"></textarea>
            </div>
            
        </div>

    </div>

<div class="flex flex-col items-center border border-white p-6 w-full m-8 rounded-lg">
    <h1 class="text-3xl font-bold mb-6">Car Details</h1>
        <div class="p-4 grid grid-cols-3 gap-10 w-10/12">
            <div>
                <label for="brand" class="block text-white/50 font-medium mb-2">Brand</label>
                <select name="brand" id="brand" required class="w-full border text-black border-gray-300 rounded-md p-2">
                    <option value="">Select a brand</option>
                    <option value="Toyota">Toyota</option>
                    <option value="Honda">Honda</option>
                    <option value="Ford">Ford</option>
                    <option value="Mitsubishi">Mitsubishi</option>
                    <option value="Nissan">Nissan</option>
                    <option value="Hyundai">Hyundai</option>
                    <option value="Kia">Kia</option>
                    <option value="Suzuki">Suzuki</option>
                    <option value="Other">Other</option>
                </select>
                <input type="text" name="brand_other" id="brand_other" placeholder="If other, please specify" class="mt-2 w-full border border-gray-300 rounded-md p-2 hidden">
            </div>

            <div>
                <label for="model" class="block text-white/50 font-medium mb-2">Model</label>
                <input type="text" name="model" id="model" placeholder="e.g 911 GT3 RS" class="w-full border text-black border-gray-300 rounded-md p-2">
            </div>
            
            <div>
                <label for="year" class="block text-white/50 font-medium mb-2">Year</label>
                <input type="number" name="year" id="year" required class="w-full border text-black border-gray-300 rounded-md p-2" min="1900" max="{{ date('Y') + 1 }}" placeholder="e.g. 2020">
            </div>
            
            <div>
                <label for="color" class="block text-white/50 font-medium mb-2">Color</label>
                <select name="color" id="color" required class="w-full border text-black border-gray-300 rounded-md p-2">
                    <option value="">Select a color</option>
                    <option value="Black">Black</option>
                    <option value="White">White</option>
                    <option value="Silver">Silver</option>
                    <option value="Gray">Gray</option>
                    <option value="Red">Red</option>
                    <option value="Blue">Blue</option>
                    <option value="Green">Green</option>
                    <option value="Yellow">Yellow</option>
                    <option value="Orange">Orange</option>
                    <option value="Brown">Brown</option>
                    <option value="Other">Other</option>
                </select>
                <input type="text" name="color_other" id="color_other" placeholder="If other, please specify" class="mt-2 w-full border border-gray-300 rounded-md p-2 hidden">
            </div>
            
            <div>
                <label for="body_type" class="block text-white/50 font-medium mb-2">Body Type</label>
                <select name="body_type" id="body_type" required class="w-full border text-black border-gray-300 rounded-md p-2">
                    <option value="">Select a body type</option>
                    <option value="Sedan">Sedan</option>
                    <option value="SUV">SUV</option>
                    <option value="Hatchback">Hatchback</option>
                    <option value="Pickup Truck">Pickup Truck</option>
                    <option value="Van">Van</option>
                    <option value="Coupe">Coupe</option>
                    <option value="Convertible">Convertible</option>
                    <option value="Wagon">Wagon</option>
                    <option value="Other">Other</option>
                </select>
                <input type="text" name="body_type_other" id="body_type_other" placeholder="If other, please specify" class="mt-2 w-full border border-gray-300 rounded-md p-2 hidden">
            </div>
            
            <div>
                <label for="transmission" class="block text-white/50 font-medium mb-2">Transmission</label>
                <select name="transmission" id="transmission" required class="w-full border border-gray-300 text-black rounded-md p-2">
                    <option value="">Select transmission type</option>
                    <option value="Automatic">Automatic</option>
                    <option value="Manual">Manual</option>
                    <option value="CVT">CVT</option>
                    <option value="Semi-automatic">Semi-automatic</option>
                    <option value="Other">Other</option>
                </select>
                <input type="text" name="transmission_other" id="transmission_other" placeholder="If other, please specify" class="mt-2 w-full border border-gray-300 rounded-md p-2 hidden">
            </div>
            
            <div>
                <label for="mileage" class="block text-white/50 font-medium mb-2">Mileage (km)</label>
                <input type="number" name="mileage" id="mileage" required class="w-full border text-black border-gray-300 rounded-md p-2" min="0" placeholder="e.g. 50000">
            </div>

            <div>
                <label for="build" class="block text-white/50 font-medium mb-2">Car Build</label>
                <select name="build" id="build" class="w-full border border-gray-300 text-black rounded-md p-2">
                    <option value="">Select Car Build type</option>
                    <option value="Stock">Stock</option>
                    <option value="Modified">Modified</option>
                </select>
            </div>
            
            <div>
                <label for="fuel_type" class="block text-white/50 font-medium mb-2">Fuel Type</label>
                <select name="fuel_type" id="fuel_type" class="w-full border text-black border-gray-300 rounded-md p-2">
                    <option value="">Select fuel type</option>
                    <option value="Gasoline">Gasoline</option>
                    <option value="Diesel">Diesel</option>
                    <option value="Electric">Electric</option>
                    <option value="Hybrid">Hybrid</option>
                    <option value="LPG">LPG</option>
                </select>
            </div>
            
            <div>
                <label for="engine_capacity" class="block text-white/50 font-medium mb-2">Engine Capacity (optional)</label>
                <input type="text" name="engine_capacity" id="engine_capacity" class="w-full text-black border border-gray-300 rounded-md p-2" placeholder="e.g. 1.5L, 2000cc">
            </div>
        </div>
    <script>
        // Get all selects on the page
        document.querySelectorAll('select').forEach(function(select) {
            select.addEventListener('change', function() {
                // Find the input that comes immediately after the select
                var otherInput = this.nextElementSibling;
                
                // Check if the option selected is "Other"
                if (this.value === 'Other') {
                    otherInput.classList.remove('hidden');
                    otherInput.setAttribute('required', 'required');
                } else {
                    otherInput.classList.add('hidden');
                    otherInput.removeAttribute('required');
                    otherInput.value = ''; // Clear input when hidden
                }
            });
        });
    </script>
</div>
</body>
</html>