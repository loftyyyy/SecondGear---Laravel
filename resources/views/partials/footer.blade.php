<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="fontawesome/js/brands.js"></script>
    <script defer src="fontawesome/js/solid.js"></script>
    <script defer src="fontawesome/js/fontawesome.js"></script>
    <script defer src="fontawesome/js/sharp-thin.js"></script>
    <script defer src="fontawesome/js/duotone-thin.js"></script>
    <script defer src="fontawesome/js/sharp-duotone-thin.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Footer</title>
</head>
<body class="font-robota">

<div id="footer" class="w-full bg-[#001C80] text-white flex justify-between items-center p-4">
    <div id="menu-left" class="hidden md:flex bg-[#001C80] text-white">
        <ul class="flex space-x-6">
            <li><a href="/contents/aboutus">About Us</a></li>
            <li><a href="/contents/termsOfServices">Terms and Services</a></li>
            <li><a href="/contents/privacyPolicy">Privacy Policy</a></li> 
            <li><a href="/contents/supportRequest">Support</a></li> 
            <li><a href="/contents/beOurPartner">Be our partner</a></li> 
            <li><a href="/contents/carListingTips">Car listing tips</a></li> 
        </ul>
    </div>

    <div id="socials" class="flex space-x-6 mr-10">
        <a href="https://www.facebook.com/JonathanGonzalesSindo/" class="flex items-center  w-10 h-10 -mr-2"><i class="fab fa-facebook"></i></a>
        <a href="https://www.instagram.com/rhoyourboaat/" class="flex items-center justify-center w-10 h-10"><i class="fab fa-instagram"></i></a>
        <a href="https://x.com/PriegoChar63719" class="flex items-center justify-center w-10 h-10"><i class="fab fa-twitter"></i></a>
    </div>
</div>


<main class="md:flex bg-[#223D68] text-white p-4 items-center justify-center ">
    <div class="">
        <img src="/picbank/2nd Gear Logo (White).svg" alt="footer image" class="w-[300px] h-[300px]" class="ml-50">
    </div>
    
    <div class="text-left">
        <h3 class="text-4xl font-bold mb-2">SECOND GEAR INC.</h3>
        <p class="text-base"><i class="fa-solid fa-location-dot"></i> Purok 5, Manuel Guianga, Tugbok, Davao City, Philippines</p>
        <p class="text-base"><i class="fa-solid fa-phone"></i> 09380369397 (SMART) - 09283765341 (GLOBE)</p>
        <p class="text-base"><i class="fa-solid fa-envelope"></i> SecondGear@gmail.com</p>
    </div>
</main>

<div class="md:flex flex-col bg-[#223D68] p-2 items-center text-white">
    <hr class="border-white w-full my-2"> 
    <h3 class="text-center">Copyright © 2025 SecondGear.com. All rights reserved</h3>
</div>

</body>
</html>
