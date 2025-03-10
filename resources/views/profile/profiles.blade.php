<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('Profile', 'Second Gear')</title>
    <link href="https://fonts.cdnfonts.com/css/future-forces" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/exo-3" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Expanded:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">  
    <link href="https://fonts.googleapis.com/css2?family=Exo+3:wght@400;600;800&display=swap" rel="stylesheet">
</head>
<body>
    @include('partials.profile-header')





    <div class="grid grid-cols-5 grid-rows-5 gap-4">
        <div class="col-span-2 row-span-3">
            <h1 class="">Profile Picture</h1>

        </div>
        <div class="col-span-3 row-span-2 col-start-3">
            <!-- @include('') -->

        </div>
        <div class="col-span-3 row-span-2 col-start-3 row-start-3">
            <!-- @include('') -->

        </div>
        <div class="col-span-3 col-start-3 row-start-5">

        </div>
    </div>
    
    
    
    

    @include('partials.footer')
    
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>
</html>