<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>K-WD Dashboard | Blank Page</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('assets/backend/build/css/tailwind.css') }}" />
    <script src="https://cdn.jsdelivr.net/gh/alpine-collective/alpine-magic-helpers@0.5.x/dist/component.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
  </head>
  <body>
    <div x-data="setup()" x-init="$refs.loading.classList.add('hidden'); setColors(color);" :class="{ 'dark': isDark}">
      <div class="flex h-screen antialiased text-gray-900 bg-gray-100 dark:bg-dark dark:text-light">
        <!-- Loading screen -->
        <div
          x-ref="loading"
          class="fixed inset-0 z-50 flex items-center justify-center text-2xl font-semibold text-white bg-primary-darker"
        >
          Loading.....
        </div>

        <!-- Sidebar -->
        @include('backend.common.sidebar')

        <div class="flex flex-col flex-1 min-h-screen overflow-x-hidden overflow-y-auto">
          <!-- Navbar -->
            @include('backend.common.header')

          <!-- Main content -->
          <div class="xl:max-w-2xl flex items-center justify-center flex-1 h-full p-4">
            <main>
              <div class="w-full px-4 py-6 space-y-6 bg-white rounded-md dark:bg-darker">
                <h1 class="text-xl font-semibold text-center">Register</h1>
                <form action="#" class="space-y-6">
                  <input
                    class="w-full px-4 py-2 border rounded-md dark:bg-darker dark:border-gray-700 focus:outline-none focus:ring focus:ring-primary-100 dark:focus:ring-primary-darker"
                    type="text"
                    name="username"
                    placeholder="Username"
                    required
                  />
                  <input
                    class="w-full px-4 py-2 border rounded-md dark:bg-darker dark:border-gray-700 focus:outline-none focus:ring focus:ring-primary-100 dark:focus:ring-primary-darker"
                    type="email"
                    name="email"
                    placeholder="Email address"
                    required
                  />
                  <input
                    class="w-full px-4 py-2 border rounded-md dark:bg-darker dark:border-gray-700 focus:outline-none focus:ring focus:ring-primary-100 dark:focus:ring-primary-darker"
                    type="password"
                    name="password"
                    placeholder="Password"
                    required
                  />
                  <input
                    class="w-full px-4 py-2 border rounded-md dark:bg-darker dark:border-gray-700 focus:outline-none focus:ring focus:ring-primary-100 dark:focus:ring-primary-darker"
                    type="password"
                    name="password_confirmation"
                    placeholder="Confirm Password"
                    required
                  />
                  <div class="flex items-center justify-between">
                    <!-- Remember me toggle -->
                    <label class="flex items-center">
                      <div class="relative inline-flex items-center">
                        <input
                          type="checkbox"
                          name="accept_terms"
                          class="w-10 h-4 transition bg-gray-200 border-none rounded-full shadow-inner outline-none appearance-none toggle checked:bg-primary-light disabled:bg-gray-200 focus:outline-none"
                        />
                        <span
                          class="absolute top-0 left-0 w-4 h-4 transition-all transform scale-150 bg-white rounded-full shadow-sm"
                        ></span>
                      </div>
                    </label>
                  </div>
                  <div>
                    <button
                      type="submit"
                      class="w-full px-4 py-2 font-medium text-center text-white transition-colors duration-200 rounded-md bg-primary hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-1 dark:focus:ring-offset-darker"
                    >
                      {{__('Save')}}
                    </button>
                  </div>
                </form>
              </div>
            </main>
          </div>
        </div>

        <!-- Panels -->

        <!-- Settings Panel -->
      @include('backend.common.setting')
@include('backend.common.footer')