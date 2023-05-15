<!-- component -->
<!-- This is an example component -->
<div class='flex items-center justify-center min-h-screen from-gray-700 via-gray-800 to-gray-900 bg-gradient-to-br'>
  <div class="relative w-full group max-w-md min-w-0 mx-auto mt-6 mb-6 break-words bg-white border shadow-2xl dark:bg-gray-800 dark:border-gray-700 md:max-w-sm rounded-xl">
      <div class="pb-6">
          <div class="flex flex-wrap justify-center">
              <div class="flex justify-center w-full">
                  <div class="relative">
                      <img src="img/profile.jpeg class="dark:shadow-xl border-white dark:border-gray-800 rounded-full align-middle border-8 absolute -m-16 -ml-18 lg:-ml-16 max-w-[150px]" />
                  </div>
              </div>
          </div>
          <div class="mt-20 text-center">
              <h3 class="mb-1 text-2xl font-bold leading-normal text-gray-700 dark:text-gray-300">{{ $user->name }}</h3>
              <div class="flex flex-row justify-center w-full mx-auto space-x-2 text-center">

                <div class="font-bold tracking-wide text-gray-600 dark:text-gray-300 font-mono text-xl">Scan Me</div>


              </div>
          </div>
          <div class="pt-6 mx-6 mt-6 text-center border-t border-gray-200 dark:border-gray-700/50">
              <div class="grid grid-cols-1 grid-flow-row gap-4 justify-items-center">
                <div class="animate-bounce font-bold tracking-wide w-6 h-6 text-gray-600 dark:text-gray-300 font-mono text-xl">
                  <svg class=" overflow-visible fill-current" alt="" aria-hidden="true" viewBox="0 0 250 250">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M112 268l144 144 144-144M256 392V100"/>
                  </svg>
                </div>
                <div class="">
                  <img class="bg-fixed h-48 w-48" src="/img/qrcodes/{{ $user->user_name }}.png" alt="{{ $user->name }}" alt=""/>
                </div>
                <div class="w-full px-6">
                    <p class="mb-4 font-light leading-relaxed text-gray-600 dark:text-gray-400">
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin turpis orci, maximus sed purus a, cursus scelerisque purus. Morbi molestie, odio at sagittis rhoncus, felis massa iaculis mi, quis molestie erat ipsum vel risus.
                    </p>
                </div>
              </div>
          </div>
          <div class="relative h-6 overflow-hidden translate-y-6 rounded-b-xl">
              <div class="absolute flex -space-x-12 rounded-b-2xl">
                  <div class="w-36 h-8 transition-colors duration-200 delay-75 transform skew-x-[35deg] bg-amber-400/90 group-hover:bg-amber-600/90 z-10"></div>
                  <div class="w-28 h-8 transition-colors duration-200 delay-100 transform skew-x-[35deg] bg-amber-300/90 group-hover:bg-amber-500/90 z-20"></div>
                  <div class="w-28 h-8 transition-colors duration-200 delay-150 transform skew-x-[35deg] bg-amber-200/90 group-hover:bg-amber-400/90 z-30"></div>
                  <div class="w-28 h-8 transition-colors duration-200 delay-200 transform skew-x-[35deg] bg-amber-100/90 group-hover:bg-amber-300/90 z-40"></div>
                  <div class="w-28 h-8 transition-colors duration-200 delay-300 transform skew-x-[35deg] bg-amber-50/90 group-hover:bg-amber-200/90 z-50"></div>
              </div>
          </div>
      </div>
  </div>
  
  </div>