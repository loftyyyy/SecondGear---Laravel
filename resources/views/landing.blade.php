<!DOCTYPE html>
<html lang="en">
<head>
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
</head>
<body class="font-sans dark:bg-black dark:text-white/50">    
    <!-- <header class="p-1">
        <nav class="flex" >
            <h2 class="ml-36 font-encode text-2xl rounded-md px-3 py-2 text-white ">Second Gear</h2>
            <li class="flex ml-auto mr-96">
                <ul class="mx-6 rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"><a href="{{ route('login') }}">Log In</a></ul>
                <ul class="mr-3 rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"><a href="{{ route("register") }}">Sign Up</a></ul>
            </li>
        </nav>
    </header> -->

    <header class="p-1 bg-black fixed z-50 left-0 right-0 top-0 bg-opacity-90 backdrop-blur-sm shadow-sm">
        <div class="flex items-center justify-between container mx-auto">
            <div class="flex px-2 py-3">
                <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-white w-8 h-8 mr-2 mt-1.75"> -->
                <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>

                <h2 class=" text-[#F2F2F2] font-encode text-3xl rounded-md font-future">Second Gear</h2>
            </div>

            

            <div class="hidden md:flex">
                <li class="flex space-x-6">
                    <ul><a href="">How it works</a></ul>
                    <ul><a href="#features">Features</a></ul>
                    <ul><a href="#testimony">Testimonials</a></ul>
                    

                </li>

            </div>

            <nav class="flex">
            <li class="flex px-4 py-4 space-x-6">
            <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="bg-[#000080] text-white rounded-md px-4 py-2 transition hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300">
                Log In
        </button>

            <a href="/register" class="bg-[#000080] text-white rounded-md px-4 py-2 transition hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-300">
                Sign Up
</a>
</li>
        </div>
        
    </header>


        <!-- <div id="intro" class="w-full mt-[64px] pt-20 pb-3 mx-auto bg-green-500 text-center z-10">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-5">Shift Your Car Search into Second Gear</h1>
            <p class="text-xl text-white mb-5">Connecting car buyers and sellers for a smoother ride</p>
            <p class="text-lg text-white mb-5">100% for everyone</p>
            <button class="bg-blue-500 mb-5 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Start Your Search
            </button>
            <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8">
                <img src="https://fakeimg.pl/400x300" alt="" class="mx-auto rounded-lg shadow-lg">
                <img src="https://fakeimg.pl/400x300" alt="" class="mx-auto rounded-lg shadow-lg">
                <img src="https://fakeimg.pl/400x300" alt="" class="mx-auto rounded-lg shadow-lg">
            </div>
        </div> -->

        
        <div id="intro" class="w-full relative pb-3 mx-auto bg-white-500 text-center z-10">
            <img id="background" class="absolute inset-0 w-full h-auto z-0" src="https://laravel.com/assets/img/welcome/background.svg" alt="Laravel background">

            <img id="porsche" src="picbank/landing page pic.png" alt="Red Porsche 911" class="relative mx-auto animate-[slideIn_0.5s_ease-out] z-10">
        </div>

        
        <div class="font-future flex flex-direction-col justify-center items-center bg-white-500 text-center z-30">
            <h1 class="text-white text-[50px] text-left w-[50%] leading-[0.65] relative z-10 text-shadow-md">GET YOUR DREAM CAR HASSLE-FREE FROM TRUSTED SELLERS AT THE BEST DEALS!</h1>
        </div>

        <div class="flex ">
            <div>
                <h1>AT SECOND GEAR, YOU CAN GUARANTEE</h1>
                <p class="mt-5 w-[30%]">We ensure trust and quality with verified sellers, inspected vehicles, and secure transactions. Our cars offer top performance, smooth handling, and durability—giving you the best value and a hassle-free buying experience!</p>
            </div>
            <div>
                <div>
                    <h1>RELIABILITY</h1>
                </div>
                <div>
                    <h1>PERFORMANCE</h1>
                </div>
                <div>
                    <h1>QUALITY</h1>
                </div>

            </div>

            


        </div>

    </main>
    <style>
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

    @include('partials.footer')
    @include('modals.login')

    
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

</body>
</html>