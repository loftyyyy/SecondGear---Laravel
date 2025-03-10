<section>
    <div class="">

        <form action="{{route('profile.updateProfilePicture')}}" method="post" class="" enctype="multipart/form-data">
            @csrf
            @method('patch')

            @if(Auth::check()) 
                <img id="image-preview" class="w-32 h-32 object-cover mx-auto rounded-full" src="{{$user->profile_picture ? asset('storage/' . $user->profile_picture) : 'https://placehold.co/32x32'}}" alt="{{Auth::user()->name}}'s profile picture">
            @endif

            <div class="flex mt-3">
                <h1 class="text-sm font-medium text-gray-900 dark:text-white mb-5">Name:&nbsp</h1>
                <h1 class="text-sm text-gray-600 dark:text-gray-400">{{$user->name}}</h1>
            </div>
            <div class="flex">
                <h1 class="text-sm font-medium text-gray-900 dark:text-white mb-5">Email:&nbsp</h1>
                <h1 class="text-sm text-gray-600 dark:text-gray-400">{{$user->email}}</h1>
            </div>

            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
            <input id="profile_picture" name="profile_picture" type="file" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file">
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, OR JPG (MAX. 32x32px).</p>
            <x-input-error class="mt-2" :messages="$errors->get('profile_picture')" />


            <div class="flex items-center gap-4 mt-4">
                <button type="submit" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 rounded-md text-white transition-colors duration-200">
                    Save Profile Picture
                </button>
                
                @if (session('status') === 'profile-image-updated')
                    <p class="text-sm text-green-600">
                        Profile updated successfully!
                    </p>
                @endif
            </div>
        </form>

    </div>

    <!-- TODO: Implement Browse and Search -->

    <script>
        document.getElementById('profile_picture').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const preview = document.getElementById('image-preview');
                    preview.src = e.target.result;    
                };
                reader.readAsDataURL(file);
            }
        });
    </script>
</section>