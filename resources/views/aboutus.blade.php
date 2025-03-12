<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title', 'home')</title>
    <link href="https://fonts.cdnfonts.com/css/future-forces" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/exo-3" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Expanded:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 
    <link rel="icon" type="image/png" href="/picbank/2nd Gear Logo.svg" sizes="16x16">
    <style>

    ::-webkit-scrollbar {
        display: none;
    }

    html {
        scrollbar-width: none;
    }

    body {
        -ms-overflow-style: none;
    }
</style>
 
</head>
<body class="font-sans dark:bg-black dark:text-white/50">

@include('partials.header')
    

<div class="text-center max-w-auto relative">

    <img src="picbank/Team Hilux.jpg" alt="Team Hilux Picture" class="w-full h-full object-cover">
    
    <div class="absolute top-0 inset-x-0 flex flex-col items-center justify-center text-white p-6">
        <h6 class="text-2xl text-white font-exo " >Welcome  to</h6>
        <h1 class="text-6xl font-bold text-blue-800 font-future" >Second Gear</h1>
    </div>

</div>

<div class="text-center max-w-auto relative">

    <img src="picbank/dotted_worldmap.jpg" alt="World Map" class="mx-auto opacity-[25%] w-[75%] " >

    <div class="absolute top-0 inset-x-0 flex flex-col items-center justify-center text-white p-6">
        <div class="font-exo flex items-center space-x-2">
            <h3 class="text-4xl font-bold text-gray-500 m-0">Our</h3> 
            <h3 class="text-4xl font-bold text-blue-800 m-0">mission</h3>
        </div>
       
        <div class=" top-5 inset-x-0 flex items-center justify-center text-white w-20 h-20 mx-auto z-10">
            <img src="picbank/below_mission.png" alt="">
         </div>
          
            <div class="leading-tight">
            <p class="text-lg text-white font-exo ">To provide a trusted and seamless platform for buying and selling pre-loved cars, <br> ensuring verified listings, secure transactions, and a transparent ownership history. <br> Through advanced search filters and user reviews, we empower buyers <br>and sellers with confidence and convenience</p>
           
            </div>
    </div> 
    
    <div class="profilepics w-full h-full flex flex-col items-center mt-[-100px] ">
        <div class="flex space-x-4 justify-center">
            <img src="picbank/placeholder profile.png" alt="" class="h-12 w-18">
            <img src="picbank/placeholder profile.png" alt="" class="h-12 w-18">
            <img src="picbank/placeholder profile.png" alt="" class="h-12 w-18">
        </div> 

        <h4 class="text-2xl font-bold text-gray-500">OUR TEAM</h4>
    </div>
       
       
    
    

</div>



</body>
</html>

@include('partials.footer')