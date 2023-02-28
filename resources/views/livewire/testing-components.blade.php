<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Dashboard') }}
      </h2>
  </x-slot>


  <div class="py-4">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white dark:bg-indigo-800 overflow-hidden shadow-xl sm:rounded-lg">
            
          <div class="flex items-center shrink-0">

            Dark Mode: <span></span>


            <div x-data="{ label: 'Hello' }" x-effect="console.log(label)">
              <button @click="label += ' World!'">Change Message</button>
          </div>
          
            <a href="/" >
              <img id="logo" alt="Controle de Estoque" class="block w-auto h-72 py-4">
            </a>

            <script>
                  const mql = window.matchMedia('(prefers-color-scheme: dark)');

                  // Define a callback function for the event listener.
                  function handleDarkModeChange(mql) {
                    if (mql.matches) {
                      var img = document.getElementById('logo'); 
                      img.src = "/img/pms05.png"
                    } else {
                      var img = document.getElementById('logo'); 
                      img.src = "/img/pms07.png"

                    }                  
                  }

                  // Run the orientation change handler once.
                  handleDarkModeChange(mql);

                  // Add the callback function as a listener to the query list.
                  mql.addEventListener("change", handleDarkModeChange);


              /*if (localStorage.theme === 'theme' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                var img = document.getElementById('logo'); 
                img.src = "/img/pms05.png"
              }else{
                var img = document.getElementById('logo');
                img.src = "/img/pms07.png"
              };*/
                  
            </script>               
          </div>
      </div>
  </div>
</x-app-layout>
