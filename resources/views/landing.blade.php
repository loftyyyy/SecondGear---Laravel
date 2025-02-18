<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title', 'home')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Expanded:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body class="font-sans dark:bg-black dark:text-white/50">
    
    <!-- <header class="p-1">
        <nav class="flex">
            <h2 class="ml-36 font-encode text-2xl rounded-md px-3 py-2 text-white">Second Gear</h2>
            <li class="flex ml-auto mr-96">
                <ul class="mx-6 rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"><a href="{{ route('login') }}">Log In</a></ul>
                <ul class="mr-3 rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"><a href="{{ route("register") }}">Sign Up</a></ul>
            </li>
        </nav>
    </header> -->
    <header class="p-1 bg-black fixed z-50 left-0 right-0 top-0 bg-opacity-90 backdrop-blur-sm shadow-sm">
        <div class="flex items-center justify-between container mx-auto">
            <div class="flex px-2 py-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-white w-8 h-8 mr-2 mt-1.75">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>

                <h2 class="font-bold font-encode text-2xl rounded-md text-blue-600">Second Gear</h2>
            </div>

            <div class="hidden md:flex">
                <li class="flex space-x-6">
                    <ul><a href="#features">Features</a></ul>
                    <ul><a href="">Testimonials</a></ul>
                    <ul><a href="">How it works</a></ul>

                </li>

            </div>

            <nav class="flex">
                <li class="flex px-4 py-4 space-x-6">
                    <ul class="rounded-md text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                        <a href="/login">Log In</a>
                    </ul>
                    <ul class="rounded-md text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                        <a href="/register">Sign Up</a>
                    </ul>
                </li>
            </nav>
        </div>
        
    </header>

    <main class="pt-2">

        <div id="intro" class="w-full mt-[64px] pt-20 pb-3 mx-auto bg-green-500 text-center z-10">
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
        </div>

        <div id="features" class="bg-blue-500 mx-auto text-center ">
            <h1 class="text-white font-sans pb-6 text-3xl font-bold pt-20">Why Choose Second Gear?</h1>

            <div class="mt-12 grid grid-cols-2 md:grid-cols-4 gap-4 pb-20">

                <div class="mx-auto flex flex-col items-center justify-center">
                    <svg class="h-9  w-9 mb-3 text-black"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="7" cy="17" r="2" />  <circle cx="17" cy="17" r="2" />  <path d="M5 17h-2v-6l2-5h9l4 5h1a2 2 0 0 1 2 2v4h-2m-4 0h-6m-6 -6h15m-6 0v-5" /></svg>
                    <h2 class="text-black font-bold text-2xl mb-2">Wide Selection</h2>
                    <p class="text-white">Browse thousands of cars from sellers across the country</p> 
                </div>

                <div class="mx-auto flex flex-col items-center justify-center">
                    <svg class="h-9 w-9 text-black"  fill="none" viewBox="0 0 24 24" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/> </svg>
                    <h2 class="text-black font-bold text-2xl mb-2">Secure Transactions</h2>
                    <p class="text-white">Our platform ensures safe and secure transactions for both buyers and sellers.</p> 
                </div>

                <div class="mx-auto flex flex-col items-center justify-center">
                    <svg class="h-9 w-9 mb-3 text-black"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2" /></svg>
                    <h2 class="text-black font-bold text-2xl mb-2">Fast & Easy</h2>
                    <p class="text-white">Find and purchase your dream car in just a few clicks.</p> 
                </div>

                <div class="mx-auto flex flex-col items-center justify-center">
                    <svg class="h-9 w-9 text-black"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="12" cy="12" r="9" />  <path d="M14.8 9a2 2 0 0 0 -1.8 -1h-2a2 2 0 0 0 0 4h2a2 2 0 0 1 0 4h-2a2 2 0 0 1 -1.8 -1" />  <path d="M12 6v2m0 8v2" /></svg>
                    <h2 class="text-black font-bold text-2xl mb-2">Completely Free</h2>
                    <p class="text-white">No hidden fees or charges. Our platform is 100% free for all users.</p> 
                </div>

            </div>



        </div>

        <div id="testimony" class="bg-pink-500 mx-auto">
            <h1 class="text-white font-sans pb-6 text-3xl font-bold pt-20">What Our Users Say</h1>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mr-8 ml-8 mt-12 pb-3">
                <div class="mx-auto bg-white rounded-lg shadow-lg p-6">
                    <p class="text-gray-600 mb-4">"Second Gear made finding my dream car a breeze, and it didn't cost me a dime!"</p>
                    <p class="font-bold text-black text-left">- Sarah Johnson</p>
                </div>

                <div class="mx-auto bg-white rounded-lg shadow-lg p-6">
                    <p class="text-gray-600 mb-4">"As a seller, I was impressed by how quickly I could connect with potential buyers."</p>
                    <p class="font-bold text-black text-left">- Mike Thompson</p>
                </div>

                <div class="mx-auto bg-white rounded-lg shadow-lg p-6">
                    <p class="text-gray-600 mb-4">"The best free car marketplace I've ever used. Simple, fast, and reliable."</p>
                    <p class="font-bold text-black text-left">- Emily Chen</p>
                </div>
            </div>


        </div>

    </main>
    
</body>
</html>