<section>
    <div class="">
        <img class="w-32 h-32 mx-auto rounded-full" src="https://placehold.co/32x32" alt="Rounded avatar">

        <div class="flex mt-3">
            <h1 class="text-sm font-medium text-gray-900 dark:text-white mb-5">Name:&nbsp</h1>
            <h1 class="text-sm text-gray-600 dark:text-gray-400">{{$user->name}}</h1>
        </div>
        <div class="flex">
            <h1 class="text-sm font-medium text-gray-900 dark:text-white mb-5">Email:&nbsp</h1>
            <h1 class="text-sm text-gray-600 dark:text-gray-400">{{$user->email}}</h1>
        </div>

        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file">
        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, OR JPG (MAX. 32x32px).</p>

    </div>
</section>