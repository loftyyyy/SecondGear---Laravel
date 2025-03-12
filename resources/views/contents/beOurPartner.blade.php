<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Second Gear - Be our partner</title>
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

<section class="w-full py-20 px-4 md:px-6 lg:px-8 dark:bg-black text-white mt-24 mb-20">
  <div class="max-w-screen-xl mx-auto">
    <!-- Header -->
    <div class="text-center mb-12">
      <h2 class="font-['Exo'] text-4xl md:text-5xl lg:text-6xl font-bold mb-4 text-white">Be Our Partner</h2>
      <p class="font-['Exo'] text-lg md:text-xl text-gray-300 max-w-3xl mx-auto">
        Join forces with Second Gear and accelerate your automotive business. We're looking for dealerships and
        service providers who share our passion for quality vehicles.
      </p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
      <!-- Benefits -->
      <div class="space-y-8">
        <h3 class="font-['Exo'] text-3xl font-semibold text-white mb-6">Why Partner With Us</h3>

        <div class="space-y-6">
          <div class="flex p-6 bg-gray-800 rounded-lg border border-gray-700">
            <div class="mr-4 flex-shrink-0">
              <svg class="w-8 h-8 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
              </svg>
            </div>
            <div>
              <h4 class="text-lg font-medium text-white font-['Exo']">Expanded Reach</h4>
              <p class="text-gray-300 font-['Exo']">
                Connect with our growing community of car enthusiasts and serious buyers looking for quality
                vehicles.
              </p>
            </div>
          </div>

          <div class="flex p-6 bg-gray-800 rounded-lg border border-gray-700">
            <div class="mr-4 flex-shrink-0">
              <svg class="w-8 h-8 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
              </svg>
            </div>
            <div>
              <h4 class="text-lg font-medium text-white font-['Exo']">Trusted Network</h4>
              <p class="text-gray-300 font-['Exo']">
                Join our vetted network of automotive professionals and build credibility with our established user
                base.
              </p>
            </div>
          </div>

          <div class="flex p-6 bg-gray-800 rounded-lg border border-gray-700">
            <div class="mr-4 flex-shrink-0">
              <svg class="w-8 h-8 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                ></path>
              </svg>
            </div>
            <div>
              <h4 class="text-lg font-medium text-white font-['Exo']">Revenue Growth</h4>
              <p class="text-gray-300 font-['Exo']">
                Increase your sales potential with our commission-based partnership model and targeted marketing.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Form -->
      <div class="bg-gray-800 p-8 rounded-lg border border-gray-700">
        <h3 class="text-2xl font-semibold text-white mb-6 font-['Exo']">Get in Touch</h3>
        <form action="#" method="POST" class="space-y-5">
          <div>
            <label for="name" class="block text-sm font-medium text-gray-300 mb-1 font-['Exo']">
              Full Name
            </label>
            <input type="text" id="name" name="name" class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Your name" required/>
          </div>

          <div>
            <label for="email" class="block text-sm font-medium text-gray-300 mb-1 font-['Exo']">
              Email Address
            </label>
            <input type="email" id="email" name="email" class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="you@company.com" required/>
          </div>

          <div>
            <label for="company" class="block text-sm font-medium text-gray-300 mb-1 font-['Exo']">
              Company Name
            </label>
            <input type="text" id="company" name="company" class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Your company" required/>
          </div>

          <div>
            <label for="message" class="block text-sm font-medium text-gray-300 mb-1 font-['Exo']">
              How can we collaborate?
            </label>
            <textarea id="message" name="message" rows="4" class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Tell us about your partnership ideas..." required>
            </textarea>
          </div>

          <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-500 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center font-['Exo']">
            Submit Partnership Request
          </button>

          <p class="text-xs text-gray-400 text-center mt-4 font-['Exo']">
            By submitting this form, you agree to our privacy policy and terms of service.
          </p>
        </form>
      </div>
    </div>

    <!-- Partnership Types -->
    <div class="mt-20">
      <h3 class="text-3xl font-semibold text-white text-center mb-10 font-['Exo']">
        Partnership Opportunities
      </h3>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-gray-800 border border-gray-700 rounded-lg p-6">
          <div class="flex items-center justify-center w-12 h-12 rounded-md bg-blue-600 text-white mb-4">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
            </path>
            </svg>
          </div>
          <h4 class="text-xl font-medium text-white mb-3 font-['Exo']">Dealership Partners</h4>
          <p class="text-gray-300 mb-5 font-['Exo']">
          List your inventory on our platform to expand your reach and connect with a broader audience of highly buyers, boosting your sales potential.
          </p>

          <ul class="space-y-2 mb-6">
            <li class="flex items-center text-gray-300 font-['Exo']">
              <svg
                class="w-4 h-4 mr-2 text-green-500"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                  clip-rule="evenodd"
                ></path>
              </svg>
              Dedicated dealer dashboard
            </li>
            <li class="flex items-center text-gray-300 font-['Exo']">
              <svg class="w-4 h-4 mr-2 text-green-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd">
                </path>
              </svg>
              Bulk listing tools
            </li>
            <li class="flex items-center text-gray-300 font-['Exo']">
              <svg class="w-4 h-4 mr-2 text-green-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd">
                </path>
              </svg>
              Featured placement options
            </li>
          </ul>

          <a href="#" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center w-full block font-['Exo']">
            Learn More
          </a>
        </div>

        <div class="bg-gray-800 border border-gray-700 rounded-lg p-6">
          <div class="flex items-center justify-center w-12 h-12 rounded-md bg-blue-600 text-white mb-4">
            <svg
              class="w-6 h-6"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"
              ></path>
            </svg>
          </div>
          <h4 class="text-xl font-medium text-white mb-3 font-['Exo']">Service Providers</h4>
          <p class="text-gray-300 mb-5 font-['Exo']">
            Connect with car owners looking for maintenance, repairs, and upgrades for their vehicles.
          </p>

          <ul class="space-y-2 mb-6">
            <li class="flex items-center text-gray-300 font-['Exo']">
              <svg
                class="w-4 h-4 mr-2 text-green-500"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                  clip-rule="evenodd"
                ></path>
              </svg>
              Service booking integration
            </li>
            <li class="flex items-center text-gray-300 font-['Exo']">
              <svg
                class="w-4 h-4 mr-2 text-green-500"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                  clip-rule="evenodd"
                ></path>
              </svg>
              Customer reviews system
            </li>
            <li class="flex items-center text-gray-300 font-['Exo']">
              <svg
                class="w-4 h-4 mr-2 text-green-500"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                  clip-rule="evenodd"
                ></path>
              </svg>
              Targeted promotions
            </li>
          </ul>

          <a href="#" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center w-full block font-['Exo']">
            Learn More
          </a>
        </div>

        <div class="bg-gray-800 border border-gray-700 rounded-lg p-6">
          <div class="flex items-center justify-center w-12 h-12 rounded-md bg-blue-600 text-white mb-4">
            <svg
              class="w-6 h-6"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z"
              ></path>
            </svg>
          </div>
          <h4 class="text-xl font-medium text-white mb-3 font-['Exo']">Affiliate Partners</h4>
          <p class="text-gray-300 mb-5 font-['Exo']">
            Earn commissions by referring customers to Second Gear through your website or social media.
          </p>

          <ul class="space-y-2 mb-6">
            <li class="flex items-center text-gray-300 font-['Exo']">
              <svg
                class="w-4 h-4 mr-2 text-green-500"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                  clip-rule="evenodd"
                ></path>
              </svg>
              Custom tracking links
            </li>
            <li class="flex items-center text-gray-300 font-['Exo']">
              <svg
                class="w-4 h-4 mr-2 text-green-500"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                  clip-rule="evenodd"
                ></path>
              </svg>
              Competitive commission rates
            </li>
            <li class="flex items-center text-gray-300 font-['Exo']">
              <svg
                class="w-4 h-4 mr-2 text-green-500"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                  clip-rule="evenodd"
                ></path>
              </svg>
              Marketing materials provided
            </li>
          </ul>

          <a href="#" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center w-full block font-['Exo']">
            Learn More
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

@include('partials.footer')
    
</body>
</html>