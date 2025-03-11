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
    <script defer src="fontawesome/js/sharp-thin.js"></script>
    <script defer src="fontawesome/js/duotone-thin.js"></script>
    <script defer src="fontawesome/js/sharp-duotone-thin.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Expanded:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body class="font-sans dark:bg-black dark:text-white/50 overflow-x-hidden">   



<div class="col-span-2 row-span-2 row-start-2 relative p-4 mb-4 w-96">
    <h2 class="flex text-4xl font-bold text-white justify-center mt-6">Car Search</h2> 
    <div class="flex justify-between mx-10 py-6 flex-wrap"> 
        <div class="w-full p-6 bg-white border border-gray-200 rounded-xl shadow-sm bg-opacity-15"> 
            <ul class="mt-4 text-lg text-black">
                <li class=" flex justify-between text-white font-bold">
                    <label><input type="radio" name="stock" value="stock"> Stock</label>
                    <label><input type="radio" name="modified" value="modified"> Modified</label>
                </li>
                <li>
                    <select id="brand" class="w-full p-2 border border-gray-300 rounded-2xl my-3">
                        <option value="">Brand</option>
                        <option value="brand1">Brand 1</option>
                        <option value="brand2">Brand 2</option>
                        <option value="brand3">Brand 3</option>
                    </select>
                </li>
                <li>
                    
                    <select id="model" class="w-full p-2 border border-gray-300 rounded-2xl my-2">
                        <option value=""> Model</option>
                        <option value="model1">Model 1</option>
                        <option value="model2">Model 2</option>
                        <option value="model3">Model 3</option>
                    </select>
                </li>
                <li>
                    
                    <select id="from_price" class="w-full p-2 border border-gray-300 rounded-2xl my-2">
                        <option value="">Price</option>
                        <option value="1000">1000</option>
                        <option value="5000">5000</option>
                        <option value="10000">10000</option>
                    </select>
                </li>
                <li>
                    
                    <select id="from_year" class="w-full p-2 border border-gray-300 rounded-2xl my-2">
                        <option value="">Year</option>
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                    </select>
                </li>
                <li>
                   
                    <select id="region" class="w-full p-2 border border-gray-300 rounded-2xl my-2">
                        <option value="">Region</option>
                        <option value="region1">Region 1</option>
                        <option value="region2">Region 2</option>
                        <option value="region3">Region 3</option>
                    </select>
                </li>
                <li>
                    
                    <select id="city" class="w-full p-2 border border-gray-300 rounded-2xl my-2">
                        <option value="">City</option>
                        <option value="city1">City 1</option>
                        <option value="city2">City 2</option>
                        <option value="city3">City 3</option>
                    </select>
                </li>
                <li>
                    
                    <select id="transmission" class="w-full p-2 border border-gray-300 rounded-2xl my-2">
                        <option value="">Transmission</option>
                        <option value="automatic">Automatic</option>
                        <option value="manual">Manual</option>
                    </select>
                </li>
                <li>
                   
                    <select id="color" class="w-full p-2 border border-gray-300 rounded-2xl my-2">
                        <option value="">Color</option>
                        <option value="red">Red</option>
                        <option value="blue">Blue</option>
                        <option value="black">Black</option>
                    </select>
                </li>
                <li>
                   
                    <select id="body_type" class="w-full p-2 border border-gray-300 rounded-2xl my-2">
                        <option value="">Body Type</option>
                                                <option value="sedan">Sedan</option>
                        <option value="suv">SUV</option>
                        <option value="hatchback">Hatchback</option>
                        <option value="coupe">Coupe</option>
                        <option value="convertible">Convertible</option>
                    </select>
                </li>
                
                <li>
                    <button class="bg-green-400 text-black p-2 rounded-2xl hover:bg-green-700 w-full mt-4">Search</button> 
                </li>
            </ul>
        </div>
    </div>

    <h2 class="text-4xl font-bold text-white justify-center flex mt-8 col-span-12">Car For Sale</h2> 
    <div class="flex justify-between mx-10 py-6 flex-wrap col-span-12"> 
        <div class="w-full p-3 bg-white border border-gray-200 shadow-sm "> 
            <ul class="mt-4 text-lg text-black">
                <li class="my-2"> <a href="">Toyota</a></li>
                <li class="my-2"> <a href="">Ford</a></li>
                <li class="my-2"> <a href="">Mitsubishi</a></li>
                <li class="my-2"> <a href="">Hyundai</a></li>
                <li class="my-2"> <a href="">Nissan</a></li>
                <li class="my-2"> <a href="">Subaru</a></li>
                <li class="my-2"> <a href="">Suzuki</a></li>
                <li class="my-2"> <a href="">Mazda</a></li>
                <li class="my-2"> <a href=""></a></li>
                <hr>
                <li>
                    <button class="flex text-[#2070D2] p-2 rounded w-full mt-0 justify-end ">Show More <i class="fa-solid fa-circle-arrow-right ml-2 mt-1"></i></button>
                </li>
            </ul>
        </div>
    </div>

</div>