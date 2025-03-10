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


<div id="footer" class="w-full bg-[#001C80] text-white flex justify-between items-center p-4 ">
    <div id="menu-left" class="hidden md:flex bg-[#001C80] text-white mx-10">
        <ul class="flex space-x-6 p-4 gap-5">
            <li><a href="aboutus">About Us</a></li>
            <li><a href="">Terms and Services</a></li>
            <li><a href="">Privacy Policy</a></li> 
            <li><a href="">Site map</a></li> 
            <li><a href="">Support</a></li> 
            <li><a href="">Help Desk</a></li> 
            <li><a href="">Be our partner</a></li> 
            <li><a href="">Car listing tips</a></li> 

        </ul>
    </div>

    
    <!-- TODO: To be fixed, overlapping when changing different screen size -->
    <div id="socials" class="flex space-x-6 gap-6 mx-10">
        <ul><a href="https://www.simplilearn.com/tutorials/css-tutorial/how-to-align-center-work-css"></a><i class="fab fa-facebook"></i></ul>
        <ul><a href=""></a><i class="fab fa-instagram"></i></ul>
        <ul><a href=""></a><i class="fab fa-twitter"></i></ul>
    </div>
</div>



<!-- <link rel="icon" type="image/x-icon" href="picbank/2nd Gear Logo.svg">   -->
<main class="md:flex bg-[#223D68] text-white p-4 h-full items-center justify-center">
    <div class="flex-shrink-0 w-1/3"> <!-- Set a fixed width on the div -->
        <img src="picbank/2nd Gear Logo (White).svg" alt="footer image" class="w-full mt-1000px"> <!-70- Make the image take the full width of the div -->
    </div>
    
    <div class="text-left ml-0 p-0 .mt-20"> <!-- Added negative margin-top -->
        <h3 class="text-4xl font-bold mb-4">SECOND GEAR INC.</h3> <!-- Reduced margin-bottom -->
        <p class="text-base mb-4"><i class="fa-solid fa-location-dot"></i>  Purok 5, Manuel Guianga, Tugbok <br>
        Davao City, Philippines</p>
        <p class="text-base mb-4"><i class="fa-solid fa-phone"></i>  09380369397 (SMART) - 09283765341 (GLOBE)</p>
        <p class="text-base mb-4"><i class="fa-solid fa-envelope"></i>  SecondGear@gmail.com</p> <!-- Set margin-bottom to 0 -->
    </div>
</main>

<div class="md:flex flex-col bg-[#223D68] p-4 h-40 items-center justify-center text-white">
    <hr class="border-white w-full my-4"> 
    <h3 class="text-center">Copyright © 2025 SecondGear.com. All rights reserved</h3>
</div>
</div>


</body>
</html>