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
    <div class="max-w-3xl mx-auto p-6 mt-24 mb-20">
        <h1 class="font-future text-4xl md:text-5xl text-gray-900 dark:text-white mb-4 flex justify-center">Help Desk</h1>
        
        <h2 class="text-2xl font-semibold mb-4">Frequently Asked Questions</h2>
        <div class="space-y-4">
            <div class="bg-gray-800 p-4 rounded-lg">
                <div class="faq-question font-bold cursor-pointer">How do I sell my car on Second Gear?</div>
                <div class="faq-answer hidden mt-2">To sell your car, click on the 'Sell Car' button in the navigation bar and follow the steps to list your vehicle.</div>
            </div>
            <div class="bg-gray-800 p-4 rounded-lg">
                <div class="faq-question font-bold cursor-pointer">How do I contact customer support?</div>
                <div class="faq-answer hidden mt-2">You can reach our support team via email at support@secondgear.com or by filling out the contact form below.</div>
            </div>
        </div>

        <form id="support-form" class="space-y-6 mt-10">
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
    <script>
        document.querySelectorAll('.faq-question').forEach(item => {
            item.addEventListener('click', () => {
                const answer = item.nextElementSibling;
                answer.classList.toggle('hidden');
            });
        });
    </script>

@include('partials.footer')  
</body>
</html>