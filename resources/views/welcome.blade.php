<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible"
              content="IE=edge" />
        <meta name="viewport"
              content="width=device-width, initial-scale=1.0" />
        <title>CodeF</title>

            <!-- Styles -->
            <link rel="stylesheet" href="{{ mix('css/app.css') }}">
            <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
      
    </head>

    <!-- hide elements while page load -->
    <style>
        [x-cloak] {
            display: none;
        }

    </style>

    <body>

<!-- MOBILE NAV OPEN -->
<div class="md:relative md:w-auto md:h-auto md:bg-opacity-0 fixed top-0 left-0 z-20 flex flex-col items-center justify-center w-full h-full overflow-y-auto bg-black"
     x-show="isMobileNavOpen"
     @click.away="isMobileNavOpen = false"
     x-transition:enter="transition ease-linear duration-200 transform"
     x-transition:enter-start="-translate-x-full"
     x-transition:enter-end="translate-x-0"
     x-transition:leave="transition ease-out duration-200 transform"
     x-transition:leave-start="translate-x-0"
     x-transition:leave-end="-translate-x-full">
  <button @click.prevent="isMobileNavOpen = !isMobileNavOpen"
          class="hover:text-white hover:bg-gray-700 focus:outline-none focus:bg-gray-700 focus:text-white absolute top-0 right-0 z-50 inline-flex items-center justify-center p-2 m-4 text-gray-300 transition duration-200 ease-in-out rounded-sm"
          x-bind:aria-label="'Close main menu'"
          aria-label="Main menu"
          x-bind:aria-expanded="isMobileNavOpen">
  </button>
  <div class="flex flex-col items-center w-full h-full p-12">
    <div class="pt-8 mb-6">
      <a class="flex items-center"
         href="/"
         aria-label="Home">
        {{ settings:site_logo }}
          {{ imgix:image_tag
            path="{{ path }}"
            class="w-12 h-12"
            :alt="alt"
          }}
        {{ /settings:site_logo }}
        <p class="font-display text-brand-500 ml-2 text-xl font-bold leading-normal">
          {{ settings:site_name }}
        </p>
      </a>
    </div>

    {{ partial:components/search location_a11y="header_mobile" }}

    <div class="flex-grow w-full max-w-lg">
      <ul class="grid grid-cols-12 gap-2 py-8">
        {{ nav:main_header }}
        <li class="inline-flex items-center justify-center col-span-12">
          {{ partial:components/link 
              class="link--gray link--lg mx-3 mt-3 mb-6 text-4xl font-bold tracking-tight" 
              :text="title"
              :href="url"
            }}
        </li>
        {{ /nav:main_header }}
      </ul>
    </div>

    <div class="flex flex-col justify-center w-3/4">
      <div class="flex justify-center my-6 space-x-8">
        {{ social_media_links:social_media_links }}
        <a href="{{ link }}"
           target="_blank"
           class="hover:rotate-12 transition-transform duration-100 ease-linear transform"
           aria-label="{{ name }} link">
           {{ icon }}
            {{ imgix:image_tag
              path="{{ path }}"
              class="h-5 text-white fill-current"
              :alt="alt"
            }}
           {{ /icon }}
        </a>
        {{ /social_media_links:social_media_links }}
      </div>
      <ul class="flex items-center justify-center space-x-12">
        {{ nav:secondary_header }}
        <li>
          {{ partial:components/link 
            class="link--gray font-display text-sm tracking-wider uppercase" 
            :href="url"
            :text="title" 
          }}
          {{ /nav:secondary_header }}
        </li>
      </ul>
    </div>
  </div>
</div>
    </body>

</html>