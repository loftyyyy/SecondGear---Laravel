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

<div class="grid grid-cols-12 grid-rows-none gap-0 max-w-full">

    <div class="col-span-12 relative z-50 p-0 mb-0">
        <div class="top-0 right-0 py-0">
            @include('partials.header')
        </div>
    </div>

    @include('carsearch')

    
    <div class="col-span-6 row-span-4 col-start-3 row-start-2 mt-8 ml-24"> 
        <h2 class="flex justify-start ml-6 text-white text-[42px] font-bold">Porsche 911 </h2>
        <h4 class="flex justify-start ml-6 text-white text-[24px] font-semibold">Posted on 09/11/2025</h4>
        <h4 class="flex justify-start ml-6 text-white text-[24px] font-semibold">Product: </h4>
        <div class="w-full p-5 shadow-sm"> 
            <img src="https://i.pinimg.com/736x/f6/9e/22/f69e2200243aceb5fe5be5776c76c4fe.jpg" alt="Porsche" class="w-[1200px] h-[480px] mb-4">
            <div class="flex">
                <img src="photos/porsche_one.png" alt="" class="w-[260px] h-[160px] mr-4">
                <img src="photos/porsche_two.png" alt="" class="w-[260px] h-[160px] mx-4">
                <img src="photos/porsche_three.png" alt="" class="w-[260px] h-[160px] mx-4">
            </div>
        </div>
    </div>

    <!-- Car Listed -->
    <div class="col-span-2 row-span-2 col-start-9 row-start-2 relative p-2 mb-4 w-full mt-24 ml-20">
        <ul class="mt-4 text-lg text-white">
            <li class="text-bold text-green-400 font-bold text-[50px] p-10">₱668,000</li>
            <div class="bg-white h-[40px] flex justify-center items-center w-96 ml-8">
                <li class="m-2 text-orange-400 text-[20px] font-bold rounded-lg">Price Drop Alert</li>
            </div>
            <div class="text-black bg-white rounded-lg p-4 m-8 w-96  text-[20px] font-bold h-[480px]">
                <li class="my-4" > <i class="fa-solid fa-car mx-2"></i> Porsche</li>
                <hr>
                <li class="my-4"> <i class="fa-solid fa-calendar mx-2"></i> 2016</li>
                <hr>
                <li class="my-4"> <i class="fa-solid fa-car mx-2"></i>  Used</li>
                <hr>
                <li class="my-4"> <i class="fa-solid fa-brush mx-2"></i> White</li>
                <hr>
                <li class="my-4"> <i class="fa-solid fa-gears mx-2"></i> Automatic</li>
                <hr>
                <li class="my-4"> <i class="fa-solid fa-gauge-high mx-2"></i> 6,700km</li>
                <hr>
                <li class="my-4"> <i class="fa-solid fa-car mx-2"></i> Coupe</li>
                <hr>
            </div>
        </ul>
    </div>

    
    <div class="col-span-10 row-span-10 col-start-3 row-start-3 relative p-2 ml-24 mt-48">
        <div class="px-2 py-1 text-xs rounded-bl-lg">
            <h2 class="bg-[#2193F0] text-white text-2xl font-bold p-4 ">Market Overview</h2>
            <div>
                <p class="bg-white text-black p-5 text-base shadow-sm">
                Car for sale Philippines in the past year, although affected by covid, are still quite active. Despite many difficulties in 2022, the Philippine market still consumes a large number of cars. The ranking of best-selling cars includes familiar faces from companies such as Honda, Hyundai, Ford, etc. In which, Toyota is still the car company that is most favored by customers with the Toyota Vios model.

                For body types, 837 Suv, 010 Sedan, 327 Hatchback, 427 Mpv, and 267 Van are the choice of most drivers. 
                Many people choose the lowest price segment is the 2020 Sentra (petrol manual model), which costs ₱70,000. While the highest one is the 2017 A3 Sedan (automatic petrol model), which costs ₱90 Million.
                </p>
            </div>
        </div>

        <div class="px-2 py-1 text-xs rounded-bl-lg mt-4 w-full h-56">
            <h2 class="bg-[#2193F0] text-white text-2xl font-bold p-4 ">Seller Information</h2>
                <div class="bg-white    ">
                    <div class="flex p-4 gap-4 justify-start ml-6">
                        <img class="relative w-14 h-14 rounded-full border-blue-800 border" src="https://i.pinimg.com/736x/01/b1/86/01b1865f2610479884fb6327ca449a08.jpg" alt="User  Profile">
                    <div>
                    <div class="flex items-center gap-2">
                        <h3 class="text-2xl text-[#2070D2] font-bold">Jonathan Sindo</h3>
                        <h4 class="text-xl text-gray-500">| Davao City</h4>
                    </div>
                        <div class="flex gap-2 mt-2 text-[#2070D2] text-sm"> 
                            <h5 class="flex w-32 rounded-3xl border border-blue-300 justify-center font-semibold">Certified Seller</h5>
                            <h5 class="flex w-32 rounded-3xl border border-blue-300 justify-center font-semibold">Verified Number</h5>
                        </div>
                    </div>
                </div>
                    <div class="text-gray-500 text-lg p-4 ml-10 font-semibold">
                        <h6 class="my-2"><i class="fa-solid fa-envelope mr-4"></i>jonathansindo@gmail.com</h6>
                        <h6 class="my-2"><i class="fa-solid fa-location-pin mr-4"></i>Location sa balay nila</h6>
                        <h6 class="my-2"><i class="fa-solid fa-clock mr-4"></i>Last Log in: 2mins ago</h6>
                    </div>

                <div class="text-black text-lg p-4">
                    <button class="bg-[#2070D2] text-white p-2 rounded-sm w-52 ml-10">
                        <i class="fa-solid fa-file mr-4"></i>Ask for Qoute
                    </button>

                    <button class="bg-[#2070D2] text-white p-2 rounded-sm w-52 ml-10">
                        <i class="fa-solid fa-phone mr-4"></i>Call Seller Now
                    </button>

                    <button class="bg-[#2070D2] text-white p-2 rounded-sm w-52 ml-10">
                    <i class="fa-brands fa-facebook-messenger mr-4"></i>Chat with seller
                    </button>

                </div>
            </div>

            <div class=" py-1 text-xs rounded-bl-lg mt-4 w-full h-56">
            <h2 class="bg-[#2193F0] text-white text-2xl font-bold p-4 ">Description</h2>
            <div>
                <pre class="bg-white text-black  text-base shadow-sm">
                New Unit 

                
                Porsche 911  EX Automatic Gas
                156K ALL IN DP

                1st Owned
                Casa Maintained
                Fresh in and out
                42k Mileage
                Plate Ending 8
                Apple Carplay / Android
                Toucscreen Display
                Steering Wheel Controls
                Reverse Camera
                All Power
                All Original
                All Stock
                Verified clean papers
                Mechanic Inspected
                Spare key
                Complete set of Tools, Jack & Spare Tire
                MV
                </pre>


            </div>
        </div>

            
        </div>

        
    </div>
</div>






<style>
    ::-webkit-scrollbar {
        display: none;
    }

    body {
        -ms-overflow-style: none;  
        scrollbar-width: none;  
    }
    @keyframes slideIn {
        from {
            transform: translateX(-100%);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }
</style>

</body>
</html>