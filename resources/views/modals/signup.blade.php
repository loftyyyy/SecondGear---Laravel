<div id="signup-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 right-0 left-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-x-hidden overflow-y-auto md:inset-0">
    <div class="relative max-h-full w-full max-w-md p-4">
        <div class="relative rounded-lg bg-white shadow-sm dark:bg-gray-700">
            <div class="flex items-center justify-between rounded-t border-gray-200 p-4 md:p-5 dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white font-future font-normal text-[55px] mx-auto">SG</h3>
            </div>
            <hr class="w-[70%] h-[0.5px] mx-auto bg-gray-100 border-0 rounded"/>
            <div class="p-4 md:p-5">
                <form class="space-y-4" action="#">
                    @csrf

                    <div class="mb-6">
                        <h2 class="text-white font-exo text-[40px] font-bold">Get Started!</h2>
                        <span class="text-white font-exo font-regular text-[15px]">Please enter your details</span>

                    </div>
                    
                    <div>
                        <label for="email" class="block mb-2 text-sm font-exo text-gray-900 dark:text-white">Your email</label>
                        <input type="email" name="email" id="email" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400" placeholder="name@company.com" required>
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-exo text-gray-900 dark:text-white">Password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400" required>
                    </div>
                    <div>
                        <label for="confirm-password" class="block mb-2 text-sm font-exo text-gray-900 dark:text-white">Confirm password</label>
                        <input type="password" name="confirm-password" id="confirm-password" placeholder="••••••••" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400" required>
                    </div>
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="terms" aria-describedby="terms" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" required>
                        </div>
                        <div class="ml-3 text-sm">
                            <label for="terms" class="font-light  text-gray-500 dark:text-gray-300">I accept the <a class="font-exo text-primary-600 hover:underline dark:text-primary-500" href="#">Terms and Conditions</a></label>
                        </div>
                    </div>
                    <button type="submit" class="w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-exo text-white hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create an account</button>
                    <p class="text-sm font-light font-exo text-gray-500 dark:text-gray-400">
                        Already have an account? <a href="javascript:void(0)" data-modal-hide="signup-modal" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="font-exo text-blue-700 hover:underline font-exo dark:text-blue-500">Login here</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>
