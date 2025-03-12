<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Second Gear - Terms of Service</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="fontawesome/js/brands.js"></script>
    <script defer src="fontawesome/js/solid.js"></script>
    <script defer src="fontawesome/js/fontawesome.js"></script>
    <script defer src="fontawesome/js/sharp-thin.js"></script>
    <script defer src="fontawesome/js/duotone-thin.js"></script>
    <script defer src="fontawesome/js/sharp-duotone-thin.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Expanded:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="/picbank/2nd Gear Logo.svg" sizes="16x16">
</head>

<body class="font-sans dark:bg-black dark:text-white/50 overflow-x-hidden">   
    @include('partials.header')

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 mt-28 mb-20">
        <div class="text-center mb-10">
            <h1 class="font-future text-4xl md:text-5xl text-gray-900 dark:text-white mb-4">
                Customer Support
            </h1>
            <p class="text-lg text-gray-600 dark:text-white/70 font-exo">
                Need help with your purchase or have questions about our services? 
                Fill out the form below and our team will get back to you as soon as possible.
            </p>
        </div>
        
        <div class="bg-white dark:bg-gray-900 rounded-lg shadow-lg p-6 md:p-8">
            <!-- Message container - will be populated dynamically -->
            <div id="message-container"></div>
            
            <form id="support-form" class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 dark:text-white/70 mb-1">
                            Full Name
                        </label>
                        <input
                            type="text"
                            id="name"
                            name="name"
                            required
                            class="block w-full p-3 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:placeholder-gray-400/50 dark:text-white/80"
                            placeholder="Enter your full name"
                        />
                    </div>
                    
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 dark:text-white/70 mb-1">
                            Email Address
                        </label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            required
                            class="block w-full p-3 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:placeholder-gray-400/50 dark:text-white/80"
                            placeholder="your.email@example.com"
                        />
                    </div>
                </div>
                
                <div>
                    <label for="subject" class="block text-sm font-medium text-gray-700 dark:text-white/70 mb-1">
                        Subject
                    </label>
                    <input
                        type="text"
                        id="subject"
                        name="subject"
                        required
                        class="block w-full p-3 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:placeholder-gray-400/50 dark:text-white/80"
                        placeholder="Brief description of your issue"
                    />
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="orderNumber" class="block text-sm font-medium text-gray-700 dark:text-white/70 mb-1">
                            Order Number (if applicable)
                        </label>
                        <input
                            type="text"
                            id="orderNumber"
                            name="orderNumber"
                            class="block w-full p-3 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:placeholder-gray-400/50 dark:text-white/80"
                            placeholder="e.g. SG-12345"
                        />
                    </div>
                    
                    <div>
                        <label for="category" class="block text-sm font-medium text-gray-700 dark:text-white/70 mb-1">
                            Request Category
                        </label>
                        <select
                            id="category"
                            name="category"
                            required
                            class="block w-full p-3 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-white/80"
                        >
                            <option value="general">General Inquiry</option>
                            <option value="purchase">Purchase Issue</option>
                            <option value="technical">Technical Support</option>
                            <option value="account">Account Help</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                </div>
                
                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700 dark:text-white/70 mb-1">
                        Message
                    </label>
                    <textarea
                        id="message"
                        name="message"
                        required
                        rows="6"
                        class="block w-full p-3 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:placeholder-gray-400/50 dark:text-white/80"
                        placeholder="Please describe your issue in detail..."
                    ></textarea>
                </div>
                
                <div class="flex justify-end">
                    <button
                        type="submit"
                        id="submit-button"
                        class="inline-flex items-center px-6 py-3 text-white bg-blue-700 hover:bg-blue-500 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-base transition-colors disabled:opacity-70"
                    >
                        <span class="submit-button-text">Submit Request</span>
                        <span class="loading-spinner inline-flex items-center">
                            <svg class="animate-spin -ml-1 mr-2 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                            Submitting...
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Dark mode toggle functionality
        const themeToggleBtn = document.getElementById('theme-toggle');
        
        // Set dark mode as default
        localStorage.setItem('color-theme', 'dark');
        
        // Toggle theme when button is clicked
        themeToggleBtn.addEventListener('click', function() {
            // Toggle dark class on html element
            document.documentElement.classList.toggle('dark');
            
            // Update localStorage
            if (document.documentElement.classList.contains('dark')) {
                localStorage.setItem('color-theme', 'dark');
            } else {
                localStorage.setItem('color-theme', 'light');
            }
        });
        
        // Form submission handling
        const form = document.getElementById('support-form');
        const messageContainer = document.getElementById('message-container');
        
        // Function to create success message
        function createSuccessMessage() {
            const successMessage = document.createElement('div');
            successMessage.className = 'mb-6 p-4 bg-green-50 dark:bg-green-900/20 border border-green-200 dark:border-green-800/50 rounded-lg flex items-start';
            
            successMessage.innerHTML = `
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 dark:text-green-400 mt-0.5 mr-3 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
                <div>
                    <h3 class="font-semibold text-green-800 dark:text-green-400">Support Request Submitted</h3>
                    <p class="text-green-700 dark:text-green-300/80 text-sm mt-1">
                        Thank you for contacting us. Our team will review your request and get back to you shortly.
                    </p>
                </div>
            `;
            
            return successMessage;
        }
        
        // Function to create error message
        function createErrorMessage() {
            const errorMessage = document.createElement('div');
            errorMessage.className = 'mb-6 p-4 bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-800/50 rounded-lg flex items-start';
            
            errorMessage.innerHTML = `
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500 dark:text-red-400 mt-0.5 mr-3 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                </svg>
                <div>
                    <h3 class="font-semibold text-red-800 dark:text-red-400">Submission Failed</h3>
                    <p class="text-red-700 dark:text-red-300/80 text-sm mt-1">
                        There was an error submitting your request. Please try again or contact us directly.
                    </p>
                </div>
            `;
            
            return errorMessage;
        }
        
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Show loading state
            form.classList.add('form-submitting');
            
            // Clear any existing messages
            messageContainer.innerHTML = '';
            
            // Simulate form submission with a delay
            setTimeout(function() {
                // Get form data
                const formData = new FormData(form);
                const formDataObj = {};
                formData.forEach((value, key) => {
                    formDataObj[key] = value;
                });
                
                // For demonstration, we'll just log the data and show success
                console.log('Form data:', formDataObj);
                
                // Simulate successful submission (90% success rate for demo)
                const isSuccess = Math.random() < 0.9;
                
                if (isSuccess) {
                    // Show success message
                    messageContainer.appendChild(createSuccessMessage());
                    
                    // Reset form
                    form.reset();
                } else {
                    // Show error message
                    messageContainer.appendChild(createErrorMessage());
                }
                
                // Remove loading state
                form.classList.remove('form-submitting');
                
                // In a real implementation, you would send the data to your server:
                /*
                fetch('/api/support', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(formDataObj),
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    messageContainer.appendChild(createSuccessMessage());
                    form.reset();
                })
                .catch(error => {
                    messageContainer.appendChild(createErrorMessage());
                    console.error('Error:', error);
                })
                .finally(() => {
                    form.classList.remove('form-submitting');
                });
                */
                
            }, 1500); // Simulate network delay
        });
    </script>
    
    @include('partials.footer')

</body>

</html>