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

    <header class="p-1 bg-black fixed z-50 left-0 right-0 top-0 bg-opacity-90 backdrop-blur-sm shadow-sm">
        <div class="flex items-center justify-between container mx-auto">
            <div class="flex px-2 py-3">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>

                <h2 class="text-[#F2F2F2] font-encode text-3xl rounded-md font-future">Second Gear</h2>
            </div>


            <nav class="flex">
                <li class="flex px-4 py-4 space-x-6">
                    <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="bg-[#000080] text-white rounded-md px-4 py-2 transition hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300">
                        Log In
                    </button>

                    <Button data-modal-target="signup-modal" data-modal-toggle="signup-modal" class="bg-[#000080] text-white rounded-md px-4 py-2 transition hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-300">
                        Sign Up
                    </Button>
                </li>
            </nav>
        </div>
    </header>

    <main class="">
        <div id="intro" class="w-full relative pb-3 mx-auto bg-white-500 text-center z-10">
            <img id="background" class="absolute inset-0 w-full h-auto z-0" src="https://laravel.com/assets/img/welcome/background.svg" alt="Laravel background">
            <img id="porsche" src="picbank/landing page pic.png" alt="Red Porsche 911" class="relative mx-auto animate-[slideIn_0.5s_ease-out] z-10">
        </div>

        <div id="" class="font-future flex flex-col justify-center items-center relative bg-white-500 text-center z-30">
            <h1 class="text-white text-[50px] text-left w-[50%] leading-[0.65] absolute z-30 top-[160px] text-shadow-md">GET YOUR DREAM CAR HASSLE-FREE FROM TRUSTED SELLERS AT THE BEST DEALS!</h1>
            <img class="relative z-10 h-[50%]" src="picbank/Black Porsche Back.png" alt="">
            <h1 class="text-[130px] ml-9 absolute z-30 bottom-[250px]">SECOND GEAR</h1>
        </div>

        <div class="flex justify-between text-white relative z-10">
            <div class="ml-[30px]">
                <h1 class="text-[50px] font-future leading-[0.65]">AT SECOND GEAR, YOU <br>
                 CAN GUARANTEE</h1>
                <p class="font-exo text-[30px] leading-[1] mt-10 font-light">
                    we ensure trust and quality with <br> verified sellers, inspected vehicles, <br>
                    and secure transactions. Our cars <br> offer top performance, smooth <br>
                    handling, and durability—giving you <br> the best value and a hassle-free <br>
                    buying experience!
                </p>
            </div>
            <div class="text-[30px] flex gap-y-10 flex-col font-future">
                <div class="flex items-center">
                    <div class="relative w-20 h-20">
                        <img src="picbank/Ellipse 1.png" class="w-full h-full" alt="">
                        <img class="absolute inset-0 m-auto h-10 w-10 " src="picbank/shield.png" alt="">
                    </div>
                    <h1 class="ml-3 text-[35px]">RELIABILITY</h1>
                </div>
                <div class="flex items-center">
                    <div class="relative w-20 h-20">
                        <img src="picbank/Ellipse 1.png" class="w-full h-full" alt="">
                        <img class="absolute inset-0 m-auto h-10 w-10 " src="picbank/odometer.png" alt="">
                    </div>
                    <h1 class="ml-3 text-[35px]">PERFORMANCE</h1>
                </div>
                <div class="flex items-center">
                    <div class="relative w-20 h-20">
                        <img src="picbank/Ellipse 1.png" class="w-full h-full" alt="">
                        <img class="absolute inset-0 m-auto h-10 w-10 " src="picbank/guarantee.png" alt="">
                    </div>
                    <h1 class="ml-3 text-[35px]">QUALITY</h1>
                </div>
            </div>
            <div>
                <img class="w-[100%] h-[100%] mr-6" src="picbank/Red Porsche Headlight.png" alt="">
            
            </div>
        </div>
    </main>

    <style>
        ::-webkit-scrollbar {
            display: none;
        }

        /* Hide scrollbar for IE, Edge and Firefox */
        body {
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;  /* Firefox */
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

    @include('partials.footer')
    @include('modals.login')
    @include('modals.signup')

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>
</html>