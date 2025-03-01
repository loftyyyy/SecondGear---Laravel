<div id="authentication-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 right-0 left-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-x-hidden overflow-y-auto md:inset-0">
  <div class="relative max-h-full w-full max-w-md p-4">
    <!-- Modal content -->
    <div class="relative rounded-lg bg-white shadow-sm dark:bg-gray-700">
      <!-- Modal header -->
      <div class="flex items-center justify-between rounded-t">
        <h3 class="text-gray-900 dark:text-white font-future font-normal text-[55px] mx-auto">SG</h3>
      </div>
      <hr class="w-[70%] h-[0.5px] mx-auto bg-gray-100 border-0 rounded"/>
      <!-- Modal body -->
      <div class="p-4 md:p-5">

        <div id="login-error-message" class="hidden p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
        </div>
        <form id="login-form" class="space-y-4" action="{{ route('users.login') }}" method="POST">

          @csrf

          <div class="mb-6">
            <h2 class="text-white font-exo text-[40px] font-bold">Welcome Back!</h2>
            <span class="text-white font-exo font-regular text-[15px]">Please enter your details</span>
          </div>
          <div>
            @if($errors->has('email'))
              <div class="text-red-500 text-sm font-exo">{{ $errors->first('email') }}</div>
            @endif
            <label for="email" class="mb-2 block text-sm font-exo text-gray-900 dark:text-white">Your email</label>
            <input :value="" type="email" name="email" id="email" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400" placeholder="name@company.com" required autofocus />
          </div>
          <div>
            @if($errors->has('password'))
              <div class="text-red-500 text-sm font-exo">{{ $errors->first('email') }}</div>
            @endif
            <label for="password" class="mb-2 block text-sm font-exo text-gray-900 dark:text-white">Your password</label>
            <input type="password" name="password" id="password" placeholder="••••••••" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400" required />
          </div>
          <div class="flex justify-between">
            <div class="flex items-start">
              <div class="flex h-5 items-center">
                <input id="remember" type="checkbox" value="" class="h-4 w-4 rounded-sm border border-gray-300 bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-800 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-800" required />
              </div>
              <label for="remember" class="ms-2 text-sm font-exo text-gray-900 dark:text-gray-300">Remember me</label>
            </div>
            <a href="#" class="text-sm text-blue-700 hover:underline text-exo dark:text-blue-500">Lost Password?</a>
          </div>
          <button id="login-button" type="submit" class="w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-exo text-white hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login to your account</button>
          <div class="text-sm font-exo text-gray-500 dark:text-gray-300">Not registered? <a href="javascript:void(0)" data-modal-hide="authentication-modal" data-modal-target="signup-modal" data-modal-toggle="signup-modal" class="text-blue-700 hover:underline font-exo dark:text-blue-500">Create account</a></div>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const loginForm = document.getElementById("login-form");
    const loginButton = document.getElementById("login-button");
    const loginErrorMessage = document.getElementById("login-error-message");

    loginForm.addEventListener("submit", async function (event) {
        event.preventDefault();

        // Disable button and show loading text
        const originalButtonText = loginButton.innerHTML;
        loginButton.innerHTML = '<svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white inline" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg> Logging in...';
        loginButton.disabled = true;

        // Clear previous error messages
        loginErrorMessage.classList.add("hidden");
        loginErrorMessage.innerHTML = "";

        // Collect form data
        const formData = new FormData(loginForm);

        try {
            const response = await fetch(loginForm.action, {
                method: "POST",
                body: formData,
                headers: {
                    "X-Requested-With": "XMLHttpRequest",
                    "Accept": "application/json",
                },
            });

            if (!response.ok) {
                const errorData = await response.json();
                if (errorData.errors) {
                    Object.keys(errorData.errors).forEach((field) => {
                        loginErrorMessage.innerHTML += `<p>${errorData.errors[field][0]}</p>`;
                    });
                    loginErrorMessage.classList.remove("hidden");
                }
                throw new Error("Validation failed");
            }

            const data = await response.json();
            if (data.success) {
                window.location.href = data.redirect; // Redirect to dashboard
            }
        } catch (error) {
            console.error("Login error:", error);
        } finally {
            // Restore button state
            loginButton.innerHTML = originalButtonText;
            loginButton.disabled = false;
        }
    });
});

</script>