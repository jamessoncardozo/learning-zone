  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Teste') }}
      </h2>
  </x-slot>


  <div class="py-12">
    <div class="flex-col space-y-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="py-4">
        <x-jet-input  type="search" wire:model="search" class="w-1/4" placeholder="Pesquise uma equipe..."/>
        
      </div>
      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

        <x-table>

          <x-slot name="head">

            <x-table.heading sortable>Nome: </x-table.heading>
            
            <x-table.heading sortable>Status: </x-table.heading>

            <x-table.heading sortable>Desde: </x-table.heading>
            
            <x-table.heading sortable>Atualizado: </x-table.heading>

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
                <x-table.cell colspan="3">
                  <div class="text-center">Não foi localizado nenhum usuário.</div>
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
