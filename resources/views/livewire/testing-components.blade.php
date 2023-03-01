  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Painel dos Usuários') }}
      </h2>
  </x-slot>


  <div class="py-12">

    <div class="flex-col space-y-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="py-4">
        <x-jet-input  type="search" wire:model="search" class="w-1/4" placeholder="Pesquise um usuário..."/>
        
      </div>
      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <x-table>

        <x-slot name="head">

          <x-table.heading sortable>Nome: </x-table.heading>
          
          <x-table.heading sortable>E-mail: </x-table.heading>

          <x-table.heading sortable>Desde: </x-table.heading>

        </x-slot>

        <x-slot name="body">
        
          @foreach ($users as $user)
            
            <x-table.row>

              <x-table.cell>{{ $user->name}} </x-table.cell>

              <x-table.cell>{{ $user->email}} </x-table.cell>
              
              <x-table.cell>{{ $user->created_at}} </x-table.cell>

            </x-table.row>

          @endforeach

        </x-slot>

        </x-table>
        
      </div>
      <div>
        {{ $users->links() }}
      </div>
    </div>
  </div>
