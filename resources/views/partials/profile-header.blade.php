<div class=" relative z-[100]">
    <header class="p-1 bg-white dark:bg-gray-900 left-0 right-0 top-0 bg-opacity-90 backdrop-blur-sm shadow-sm">
        <div class="flex items-center justify-between mx-4">
            <div class="flex">
                <a href="{{route('browse')}}" class="">
                    <span class="font-future text-[35px] rounded-md text-white">Second Gear</span>
                </a>
                <!-- <h2 class="font-future text-[35px] rounded-md text-white">Second Gear</h2> -->
            </div>
            
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
    </header>
</div>