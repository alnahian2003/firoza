  <!-- Navbar -->
  <header
      class="inset-x-0 top-0 z-50 bg-zinc-900/20 text-zinc-400 shadow-sm ring-1 ring-white/10 backdrop-blur lg:static lg:flex lg:overflow-y-visible">
      <div class="mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8">
          <div class="relative flex flex-row items-center justify-between gap-6 lg:gap-8">
              <!-- Logo -->
              <div class="flex items-center justify-start">
                  <div class="flex flex-shrink-0 items-center">
                      <a href="{{ route('blog.index') }}">
                          <img class="block h-10 w-auto"
                              src="https://tailwindui.com/img/logos/mark.svg?color=emerald&shade=600" alt="Logo" />
                      </a>
                  </div>
              </div>

              <!-- Search Box -->
              <div class="min-w-0 flex-grow px-0">
                  <div class="mx-auto flex items-center px-0 py-4">
                      <form class="w-full" action="{{ route('blog.index') }}" method="GET">
                          <label class="sr-only" for="search">Search</label>
                          <div class="relative">
                              <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                  <!-- Search Icon -->
                                  <svg class="h-5 w-5 text-zinc-400" viewBox="0 0 20 20" fill="currentColor"
                                      aria-hidden="true">
                                      <path fill-rule="evenodd"
                                          d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                                          clip-rule="evenodd" />
                                  </svg>
                              </div>
                              <input
                                  class="ui-not-focus-visible:outline-none block w-full rounded-full border-0 bg-white/5 py-3 pl-10 pr-3 text-lg text-zinc-400 ring-1 ring-inset ring-white/10 transition placeholder:text-zinc-400 hover:ring-white/20 focus:ring-2 focus:ring-inset focus:ring-emerald-600 sm:text-2xl sm:leading-6 lg:flex"
                                  id="search" name="query" placeholder="Search" type="search" />
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </header>
