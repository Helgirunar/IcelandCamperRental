<!--
  This example requires Tailwind CSS v2.0+

  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
<div class="bg-gray-100" id="contact">
  <div class="px-4 py-16 mx-auto max-w-7xl sm:py-24 sm:px-6 lg:px-8">
    <div class="relative bg-white rounded-lg shadow-xl">

      <div class="grid grid-cols-1">
        <!-- Contact information -->

        <!-- Contact form -->
        <p class="mt-2 text-3xl font-extrabold tracking-tight text-center text-gray-900 sm:text-4xl">Contact us</p>
        <div class="px-6 py-10 sm:px-10 lg:col-span-1 xl:p-12">
          <h3 class="text-lg font-medium text-gray-900">Send us a message</h3>
          <form action="#" method="POST" class="grid grid-cols-1 mt-6 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
            <div>
              <label for="first-name" class="block text-sm font-medium text-gray-900">Your name</label>
              <div class="mt-1">
                <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full px-4 py-3 text-gray-900 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
              </div>
            </div>
            <div>
              <label for="email" class="block text-sm font-medium text-gray-900">Email</label>
              <div class="mt-1">
                <input id="email" name="email" type="email" autocomplete="email" class="block w-full px-4 py-3 text-gray-900 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
              </div>
            </div>
            {{-- <div class="sm:col-span-2">
              <label for="subject" class="block text-sm font-medium text-gray-900">Subject</label>
              <div class="mt-1">
                <input type="text" name="subject" id="subject" class="block w-full px-4 py-3 text-gray-900 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
              </div>
            </div> --}}
            <div class="sm:col-span-2">
              <div class="flex justify-between">
                <label for="message" class="block text-sm font-medium text-gray-900">Message</label>
                <span id="message-max" class="text-sm text-gray-500">Max. 500 characters</span>
              </div>
              <div class="mt-1">
                <textarea id="message" name="message" rows="4" class="block w-full px-4 py-3 text-gray-900 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" aria-describedby="message-max"></textarea>
              </div>
            </div>
            <div class="sm:col-span-2 sm:flex sm:justify-end">
              <button type="submit" class="inline-flex items-center justify-center w-full px-6 py-3 mt-2 text-base font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:w-auto">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
