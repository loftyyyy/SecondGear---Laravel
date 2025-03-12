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
    <link rel="icon" type="image/png" href="/picbank/2nd Gear Logo.svg" sizes="16x16">
</head>

<body class="font-sans dark:bg-black dark:text-white/50 overflow-x-hidden">   

<div class="grid grid-cols-12 grid-rows-none gap-0 max-w-full">

    <div class="col-span-12 relative z-50 p-0 mb-0">
        <div class="top-0 right-0 py-0">
            @include('partials.header')
        </div>
    </div>

    <div class="col-span-2 row-span-2 row-start-2 relative mt-14 p-4 mb-40 w-96 ">
        <div class="flex justify-between mx-10 py-6 flex-wrap"> 
            <div class="w-full p-6"> 
            <ul class="mt-44 text-white text-[34px] ">
                <li class="my-2"><a href="">All Cars</a></li>
                <li class="my-2"><a href="">Sedan</a></li>
                <li class="my-2"><a href="">SUV's</a></li>
                <li class="my-2"><a href="">Hatchback</a></li>
                <li class="my-2"><a href="">Sports Cars</a></li>
                <li class="my-2"><a href="">Trucks</a></li>
                <li class="my-2"><a href="">Vans</a></li>
                <li class="my-2"><a href="">Classic Cars</a></li>

            </ul>
            </div>
        </div>
    </div>

    
    <div class="col-span-6 row-span-1 col-start-3 row-start-2 mt-80 ml-24 bg-[#000080] h-[40vh]"> 
        <div class="w-full p-5 shadow-sm"> 
            <img src="/picbank/porsche navyblue 2.png" alt="Porsche" class="w-[1200px] h-[480px] mb-4">
            <div class="absolute top-36 -ml-96 text-white text-[70px] -mt-6 font-exo">
            <p>Quality Pre-owned</p>
            <p class="-mt-6">Cars, Trusted Deals</p>
        </div>
        </div>
    </div>



        <div class="col-span-3 row-span-2 col-start-9 row-start-2 relative p-2 mb-4 w-full mt-40 ml-20">
            <!-- <div class="border bg-blue-200 border-black w-full h-[60vh]"> -->
            <ul class=" text-lg text-white justify-center ml-2">
                <li class="text-semibold text-[40px] ml-10 mt-12 font-exo flex justify-center mr-10 -mb-10">New Arrivals</li>
                <div class="text-black bg-white m-8 w-96  text-[20px] font-bold h-[200px]">
                    <img src="/picbank/home1.png" alt="" class="w-full h-auto bg-black">   
                </div>
                <div class="text-black bg-white m-8 w-96  text-[20px] font-bold h-[200px]">
                <img src="/picbank/home2.png" alt="" class="w-full h-auto bg-black ">   
                    
                </div>
            </ul>
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

    <div class="h-[30vh]">
    @include('partials.footer')
    </div>
</body>
</html>