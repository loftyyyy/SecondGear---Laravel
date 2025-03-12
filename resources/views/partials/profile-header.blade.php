<nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">

            <a href="{{route('browse')}}" class="space-x-3 rtl:space-x-reverse">
                <span class="font-future text-[35px] rounded-md text-white">Second Gear</span>
            </a>
            <div class="flex md:order-2 space-x-1 md:space-x-0 rtl:space-x-reverse">
               
                <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1 ml" id="navbar-sticky">
            <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-6 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
            <li>
                <a href="/home" class="block py-2 px-3 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:p-0 
                {{ request()->is('home') ? 'text-blue-500 underline' : 'text-gray-900 dark:text-white' }}" 
                aria-current="page">
                Home
                </a>
            </li>
            <li>
                <a href="/browse" class="block py-2 px-3 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:p-0 
                {{ request()->is('browse') ? 'text-blue-500 underline' : 'text-gray-900 dark:text-white' }}">
                Browse Cars
                </a>
            </li>
            <li>
                <a href="/aboutus" class="block py-2 px-3 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:p-0 
                {{ request()->is('aboutus') ? 'text-blue-500 underline' : 'text-gray-900 dark:text-white' }}">
                About Us
                </a>
            </li>
            <li>
                <a href="#footer" class="block py-2 px-3 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:p-0 
                {{ request()->is('footer') ? 'text-blue-500 underline' : 'text-gray-900 dark:text-white' }}">
                Contact Us
                </a>
            </li>
        </ul>

             
           
                <div class="flex ml-20 right-96">       
                <div id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start" class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600 cursor-pointer">
                    @if(Auth::check() && Auth::user()->profile_picture)
                    <img class="object-cover w-full h-full absolute" src="{{ asset('storage/' . Auth::user()->profile_picture) }}" alt="{{ Auth::user()->name }}'s profile picture"> 
                    @else
                    <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                    @endif
            </div>
                
                  <div id="userDropdown" class="hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700 dark:divide-gray-600">
                @if(Auth::check())
                <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                <div>{{Auth::user()->name}}</div>
                <div class="font-medium truncate">{{Auth::user()->email}}</div>
                </div>
                @endif
                <div class="py-1">
                <a href="{{ route('users.logout') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
                </div>
            </div>
        </div> 
          
        </div>
    </nav>
            
    </header>
</div>