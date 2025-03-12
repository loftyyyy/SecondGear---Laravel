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

    #TH_pic {
        height:100vh ;

    }
</style>
 
</head>
<<<<<<< HEAD
<body class="font-sans dark:bg-black dark:text-white/50">

@include('partials.header')
=======
<body class="dark:bg-black dark:text-white/50">
>>>>>>> f3c258736d382211773f0fe7119e32a77e82340a
    

<div class="text-center max-w-auto relative">

    <img id="TH_pic" src="picbank/Team Hilux.jpg" alt="Team Hilux Picture" class="w-full h-full object-cover">
    
    <div class="absolute top-0 inset-x-0 flex flex-col items-center justify-center text-white p-6">
        <h6 class="text-2xl text-white font-exo " >Welcome  to</h6>
        <h1 class="text-6xl text-blue-800 font-future text-shadow-4px" >Second Gear</h1>
    </div>

</div>

<div class="text-center max-w-auto relative">

    <img src="picbank/dotted_worldmap.jpg" alt="World Map" class="mx-auto opacity-[25%] w-[75%] " >

    <div class="absolute top-[10%] inset-x-0 flex flex-col items-center justify-center text-white p-6">
        <div class="font-exo flex space-x-2">
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
    
    <div class="profilepic absolute top-[55%] inset-x-0 flex flex-col items-center justify-center text-white p-6 ">
        <div class="flex space-x-4 justify-center">
            <img src="picbank/profilepicture.png" alt="" class="h-full w-full ">
        </div> 
        <h4 class="text-2xl font-bold text-gray-500 mb-20">OUR TEAM</h4>
    </div>
</div>

<div class="items-center p-10">

    <hr>
    
    <div class="flex flex-col items-center p-10">

        <div class="flex items-center justify-center space-x-4 ml-40">
            <div class="text-center">
                <div class="font-exo flex justify-center space-x-2 mt-10" >
                    <p class="text-3xl font-bold text-left mb-2">Value for every individual</p> 
                    <p class="text-3xl font-bold text-left text-blue-800 ">Buyers</p> 
                </div>
                <p class="text-left text-white text-lg "><strong class="text-2xl">Second Gear</strong> is a website designed to help <br> you find your next car in a more <br>convenient and safe manner. Our goal is to provide <br> an online platform where individuals can easily search <br>for pre-loved cars for sale, all through a user-friendly <br>interface.</p>
            </div>
        <img src="picbank/abus1.png" alt="abus1" class="w-1/3 h-1/3">
        </div>
    
        <div class="flex items-center justify-center space-x-4 mr-40">
        <img src="picbank/abus2.png" alt="abus2" class="w-1/3 h-1/3">
            <div class="halamang text-center">
                <div class="font-exo flex justify-center space-x-2 mt-10" >
                    <p class="text-3xl font-bold text-left mb-2">Value for every individual</p> 
                    <p class="text-3xl font-bold text-left text-blue-800 ">Sellers</p> 
                </div>
                <p class="text-left text-white text-lg "> <strong class="text-2xl">Second Gear</strong> also caters to individuals looking to sell their <br>cars online. Our platform provides access to a broad <br> audience of potential customers. Registered used car  <br>sellers can manage their listings through a user-friendly <br>interface and enjoy additional exclusive perks. <br> In contrast, Second Gear allows unregistered used car <br>sellers to post listings on its website as well.</p>
            </div>
        
        </div>

    </div>

<div>


    <hr>
    
 <div class="font-exo flex justify-center space-x-2 mt-10">
    <h3 class="text-4xl font-bold text-gray-500 ">Who</h3> 
    <h3 class="text-4xl font-bold text-blue-800 m-0">are our team</h3>
    <p></p>
     </div>

     <div class="cards flex flex-wrap justify-center space-x-4 p-10  ">

     <a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 ">
    <p class="font-exo text-xl text-gray-700 dark:text-gray-400 mb-10 ">"Porsche 911 in mah mind"</p>
        <div class="flex items-center space-x-4 ">
            <img src="picbank/Cha Profile.png" alt="" class="w-20 h-20 rounded-full">
       
     <div>
        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white ">Charisse C. Priego</h5>
        <h6 class="mb-2 text-l tracking-tight text-gray-900 dark:text-white">Frontend Developer</h6>
        </div>
       
     </div>

  
    </a>

    <a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 ">
    <p class="font-exo text-xl text-gray-700 dark:text-gray-400 mb-10 ">"I want to ride. I want to ride"</p>
        <div class="flex items-center space-x-4 ">
            <img src="picbank/Rho Profile.png" alt="" class="w-20 h-20 rounded-full">
       
     <div>
        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Rho Alphonce E. Jornadal</h5>
        <h6 class="mb-2 text-l tracking-tight text-gray-900 dark:text-white">Backend Developer</h6>
        </div>
       
     </div>

  
    </a>
    
    <a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 ">
    <p class="font-exo text-xl text-gray-700 dark:text-gray-400 mb-10 ">"Driven by passion, fueled by speed"</p>
        <div class="flex items-center space-x-4 ">
            <img src="picbank/Jons Profile.png" alt="" class="w-20 h-20 rounded-full">
       
     <div>
        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white ">Jonathan G. Sindo</h5>
        <h6 class="mb-2 text-l tracking-tight text-gray-900 dark:text-white">Designer</h6>
        </div>
       
     </div>

  
    </a>
    

</div>



</body>

</html>

@include('partials.footer')