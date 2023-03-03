  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Users Dashboard') }}
    </h2>
  </x-slot>

  <div class="py-4">

    <div class="flex-col space-y-4 max-w-7xl mx-auto sm:px-6 lg:px-8">

      <div class="flex p-2 sm:py-4 justify-items-end">

        <x-jet-input type="search" wire:model="search" class="block w-full sm:w-1/5" placeholder="Pesquise um usuário..."/>

        <x-jet-input type="button" wire:click="exportXLSX" class="block w-full ml-4 mr-2 bg-green-500 ring-green-800 sm:w-1/5" value="Exportar para XLSX..."/>
        <x-jet-input type="button" wire:click="exportCSV" class="block w-full mx-2 bg-indigo-500 ring-indigo-800 sm:w-1/5" value="Exportar para CSV..."/>
        <x-jet-input type="button" wire:click="exportPDF" class="block w-full mx-2 bg-red-500 ring-red-800 sm:w-1/5" value="Exportar para PDF..."/>

        <div class="bg-amber-500 ring-amber-800 mx-2 rounded-lg w-full sm:w-1/5 flex justify-center">

          <div @click.away="openSort = false" class="relative w-full" x-data="{ openSort: false,sortType:'10' }">

            <button @click="openSort = !openSort" class="flex text-white bg-gray-200 items-center justify-start w-full  py-2 px-3 text-sm font-semibold text-left bg-transparent rounded-lg ">
              <x-jet-input type="number" wire:model="paginate" class="bg-transparent border-none shadow-none text-black " placeholder="{{ $paginate }}"/>
            </button>

            <div x-show="openSort"
                  x-transition:enter="transition ease-out duration-100"
                  x-transition:enter-start="transform opacity-0 scale-95"
                  x-transition:enter-end="transform opacity-100 scale-100"
                  x-transition:leave="transition ease-in duration-75"
                  x-transition:leave-start="transform opacity-100 scale-100"
                  x-transition:leave-end="transform opacity-0 scale-95"
                  class="absolute z-50 w-full origin-top-right">

              <div class="px-2 pt-2 pb-2 bg-white rounded-md shadow-lg dark-mode:bg-gray-700">
                <div class="flex flex-col ">

                  <x-jet-button
                      @click="sortType='10',openSort=!openSort"
                      x-show="sortType != '10'"
                      wire:click="$set('paginate',10)"
                      class="right-0 block my-1 px-1 w-full bg-green-500 ring-green-800 text-xl">
                    {{ __('10') }}
                  </x-jet-button>
                     
                  <x-jet-button
                      @click="sortType='20',openSort=!openSort"
                      x-show="sortType != '20'"
                      wire:click="$set('paginate',20)"
                      class="block my-1 px-1 w-full bg-indigo-500 ring-indigo-800 text-white text-xl">
                    {{ __('20') }}
                  </x-jet-button>

                  <x-jet-button
                      @click="sortType='50',openSort=!openSort"
                      x-show="sortType != '50'"
                      wire:click="$set('paginate',50)"
                      class="right-0 block my-1 px-1 w-full bg-red-500 ring-red-800 text-xl">
                    {{ __('50') }}
                  </x-jet-button>

                  <x-jet-button
                      @click="sortType='100',openSort=!openSort"
                      x-show="sortType != '100'"
                      wire:click="$set('paginate',100)"
                      class="right-0 block my-1 px-1 w-full bg-red-500 ring-red-800 text-xl">
                    {{ __('100') }}
                  </x-jet-button>

                </div>

              </div>

            </div>

          </div> 

        </div>

        <script src="//unpkg.com/alpinejs" defer></script>

      </div>

    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg m-2 md:my-4">
      <x-table>

        <x-slot name="head">

          <x-table.heading sortable wire:click="sortBy('name')" :direction="$sortField === 'name' ? $sortDirection : null">Nome: </x-table.heading>
          
          <x-table.heading sortable wire:click="sortBy('email')" :direction="$sortField === 'email' ? $sortDirection : null">E-mail: </x-table.heading>

          <x-table.heading sortable wire:click="sortBy('created_at')" :direction="$sortField === 'created_at' ? $sortDirection : null">Desde: </x-table.heading>

          <x-table.heading sortable wire:click="sortBy('updated_at')" :direction="$sortField === 'updated_at' ? $sortDirection : null">Atualizado em: </x-table.heading>

        </x-slot>

        <x-slot name="body">
        
          @forelse ($users as $user)
            
            <x-table.row>

              <x-table.cell>{{ $user->name}} </x-table.cell>

              <x-table.cell>{{ $user->email}} </x-table.cell>
              
              <x-table.cell>{{ $user->created_at->diffForHumans()}} </x-table.cell>
              
              <x-table.cell>{{ $user->updated_at->diffForHumans()}} </x-table.cell>

            </x-table.row>

          @empty

            <x-table.row>

              <x-table.cell colspan="4">
                <div class="flex justify-center items-center space-x-2">
                  <ion-icon name="file-tray-full-outline" class="h-8 w-8 text-gray-300"></ion-icon>
                  <span class="font-medium py-8 text-gray-500 text-xl">Não foi localizado nenhum usuário.</span>
                </div>
              </x-table.cell>         
            </x-table.row>

          @endforelse

        </x-slot>

      </x-table>
      
    </div>

    <div>
      {{ $users->links() }}
    </div>

  </div>
</div>
