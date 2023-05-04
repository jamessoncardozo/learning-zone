  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Teams Dashboard') }}
      </h2>
  </x-slot>


  <div class="py-4">

    <div class="flex-col space-y-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="p-2 sm:py-4">
        <x-input  type="search" wire:model="search" class="block w-full sm:w-1/3" placeholder="Pesquise um usuário..."/>
      </div>
      
      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg m-2 md:my-4">

        <x-table>

          <x-slot name="head">

            <x-table.heading sortable wire:click="sortBy('name')" :direction="$sortField === 'name' ? $sortDirection : null">Nome: </x-table.heading>
            
            <x-table.heading sortable wire:click="sortBy('personal_team')" :direction="$sortField === 'personal_team' ? $sortDirection : null">Status: </x-table.heading>

            <x-table.heading sortable wire:click="sortBy('created_at')" :direction="$sortField === 'created_at' ? $sortDirection : null">Desde: </x-table.heading>
            
            <x-table.heading sortable wire:click="sortBy('updated_at')" :direction="$sortField === 'updated_at' ? $sortDirection : null">Atualizado: </x-table.heading>

          </x-slot>

          <x-slot name="body">
          
            @forelse ($teams as $team)
              
              <x-table.row>

                <x-table.cell>{{ $team->name}} </x-table.cell>

                <x-table.cell>
                    @if ($team->personal_team)
                      <span class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-semibold text-green-600">
                        <span class="h-1.5 w-1.5 rounded-full bg-green-600"></span>Sim
                      </span>
                    @else
                    <div>
                      <span class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-semibold text-red-600">
                        <span class="h-1.5 w-1.5 rounded-full bg-red-600"></span>Não
                      </span>
                    @endif

                  </div>
                </x-table.cell>
                <x-table.cell>{{ $team->created_at->format('D, d/m/Y ')}} </x-table.cell>

                <x-table.cell>{{ $team->created_at->diffForHumans()}} </x-table.cell>

              </x-table.row>
            @empty
              <x-table.row>
                <x-table.cell colspan="4">
                  <div class="flex justify-center items-center space-x-2">
                    <ion-icon name="file-tray-full-outline" class="h-8 w-8 text-gray-300"></ion-icon>
                    <span class="font-medium py-8 text-gray-500 text-xl">Não foi localizada nenhuma equipe.</span>
                  </div>
                </x-table.cell>

              </x-table.row>
            @endforelse

          </x-slot>

        </x-table>
      </div>
      <div>
        {{ $teams->links() }}
      </div>    
    </div>
  </div>
