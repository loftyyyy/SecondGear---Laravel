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

    
    <div class="col-span-6 row-span-8 col-start-3 row-start-2 mt-8 ml-24"> 
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
    <div class="col-span-3 row-span-4 col-start-9 row-start-2 relative p-2 mb-4 w-full mt-24 ml-20">
        <ul class="mt-4 text-lg text-white">
            <li class="text-bold text-green-400 font-bold text-[50px] p-10">₱668,000</li>
            <div class="bg-white h-[40px] flex justify-center items-center w-96 ml-8">
                <li class="m-2 text-orange-400 text-[20px] font-bold rounded-lg">Price Drop Alert</li>
            </div>
            <div class="text-black bg-white rounded-lg p-4 m-8 w-96  text-[20px] font-bold">
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
            </div>
        </ul>
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