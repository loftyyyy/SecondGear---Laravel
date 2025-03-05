<div id="signup-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 right-0 left-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-x-hidden overflow-y-auto md:inset-0">
    <div class="relative max-h-full w-full max-w-md p-4">
        <div class="relative rounded-lg bg-white shadow-sm dark:bg-gray-700">
            <div class="flex items-center justify-between rounded-t">
                <h3 class="text-gray-900 dark:text-white font-future font-normal text-[55px] mx-auto">SG</h3>
            </div>
            <hr class="w-[70%] h-[0.5px] mx-auto bg-gray-100 border-0 rounded"/>
            <div class="p-4 md:p-5">

                <div id="signup-error-message" class="hidden p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                </div>
                <div id="signup-success-message" class="hidden p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                </div>
                
                <form id="signup-form" class="space-y-4">
                    @csrf

                    <div class="mb-6">
                        <h2 class="text-white font-exo text-[40px] font-bold">Get Started!</h2>
                        <span class="text-white font-exo font-regular text-[15px]">Please enter your details</span>
                    </div>
                    <div>
                        <label for="fullname" class="block mb-2 text-sm font-exo text-gray-900 dark:text-white">Your Full Name</label>
                        <div class="fullname-error text-red-500 text-sm font-exo hidden"></div>
                        <input type="text" name="fullname" id="fullname" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400" placeholder="John Doe" required>
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-exo text-gray-900 dark:text-white">Your email</label>
                        <div class="email-error text-red-500 text-sm font-exo hidden"></div>
                        <input type="email" name="email" id="email" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400" placeholder="name@company.com" required>
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-exo text-gray-900 dark:text-white">Password</label>
                        <div class="password-error text-red-500 text-sm font-exo hidden"></div>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400" required>
                    </div>
                    <div>
                        <label for="password_confirmation" class="block mb-2 text-sm font-exo text-gray-900 dark:text-white">Confirm password</label>
                        <div class="password_confirmation-error text-red-500 text-sm font-exo hidden"></div>
                        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="••••••••" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400" required>
                    </div>
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="terms" name="terms" aria-describedby="terms" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" required>
                        </div>
                        <div class="ml-3 text-sm">
                            <label for="terms" class="font-light text-gray-500 dark:text-gray-300">I accept the <a class="font-exo text-primary-600 hover:underline dark:text-primary-500" href="#">Terms and Conditions</a></label>
                        </div>
                    </div>
                    <button type="submit" id="signup-button" class="w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-exo text-white hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Create an account
                    </button>
                    <p class="text-sm font-light font-exo text-gray-500 dark:text-gray-400">
                        Already have an account? <a href="javascript:void(0)" data-modal-hide="signup-modal" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="font-exo text-blue-700 hover:underline font-exo dark:text-blue-500">Login here</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('signup-form');
    const errorAlert = document.getElementById('signup-error-message');
    const successAlert = document.getElementById('signup-success-message');
    const submitButton = document.getElementById('signup-button');
    
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Reset errors
            errorAlert.classList.add('hidden');
            document.querySelectorAll('.text-red-500').forEach(el => el.classList.add('hidden'));
            document.querySelectorAll('.text-red-500').forEach(el => el.textContent = '');
            
            // Change button text to loading
            const originalButtonText = submitButton.innerHTML;
            submitButton.innerHTML = '<svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white inline" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg> Processing...';
            submitButton.disabled = true;
            
            // Get form data
            const formData = new FormData(form);
            
            // Make AJAX request
            fetch('{{ route("users.register") }}', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json'
                },
                credentials: 'same-origin'
            })
            .then(response => {
                if (!response.ok) {
                    if (response.status === 422) {
                        // Validation error - continue to get JSON response
                        return response.json();
                    } else if (response.status === 409) {
                        // Conflict - email already exists
                        throw new Error('Email already exists');
                    } else {
                        throw new Error('Server error');
                    }
                }
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    // Registration successful - redirect
                    window.location.href = data.redirect;

                    // successAlert.textContent = 'Registration successful.';
                    // successAlert.classList.remove('hidden');

                    // document.querySelectorAll('input, textarea, select').forEach(field => {
                    //     if (field.type === 'checkbox' || field.type === 'radio') {
                    //         field.checked = false; 
                    //     } else if (field.tagName === 'SELECT') {
                    //         field.selectedIndex = 0; 
                    //     } else {
                    //         field.value = ''; 
                    //     }
                    // });

                    // submitButton.innerHTML = originalButtonText;
                    // submitButton.disabled = false;
                } else {
                    // Show errors
                    if (data.message) {
                        errorAlert.textContent = data.message;
                        errorAlert.classList.remove('hidden');
                    }
                    
                    // Display field errors
                    if (data.errors) {
                        Object.keys(data.errors).forEach(field => {
                            const errorElement = document.querySelector(`.${field}-error`);
                            if (errorElement) {
                                errorElement.textContent = data.errors[field][0];
                                errorElement.classList.remove('hidden');
                            }
                        });
                    }
                    
                    // Reset button
                    submitButton.innerHTML = originalButtonText;
                    submitButton.disabled = false;
                }
            })
            .catch(async error => {
    console.error('Error:', error);
    
    if (error.message === 'Email already exists') {
        // Handle duplicate email case
        const emailError = document.querySelector('.email-error');
        if (emailError) {
            emailError.textContent = 'This email is already registered. Please try logging in.';
            emailError.classList.remove('hidden');
        }
        errorAlert.textContent = 'Account already exists. Please log in instead.';
        errorAlert.classList.remove('hidden');
    } else if (error.status === 422) {
        // If it's a validation error, extract JSON response
        try {
            const errorData = await error.json();
            if (errorData.errors) {
                Object.keys(errorData.errors).forEach(field => {
                    const errorElement = document.querySelector(`.${field}-error`);
                    if (errorElement) {
                        errorElement.textContent = errorData.errors[field][0];
                        errorElement.classList.remove('hidden');
                    }
                });
            }
        } catch (jsonError) {
            errorAlert.textContent = 'Validation failed. Please check your information.';
            errorAlert.classList.remove('hidden');
        }
    } else {
        // Generic error message for other types of errors
        errorAlert.textContent = 'An unexpected error occurred. Please try again.';
        errorAlert.classList.remove('hidden');
    }

    // Reset button state
    submitButton.innerHTML = originalButtonText;
    submitButton.disabled = false;
});

        });
    }
});
</script>