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

          <x-table.heading sortable wire:click="sortBy('name')">Nome: </x-table.heading>
          
          <x-table.heading sortable wire:click="sortBy('email')">E-mail: </x-table.heading>

          <x-table.heading sortable wire:click="sortBy('created_at')">Desde: </x-table.heading>

        </x-slot>

        <x-slot name="body">
        
          @forelse ($users as $user)
            
            <x-table.row>

              <x-table.cell>{{ $user->name}} </x-table.cell>

              <x-table.cell>{{ $user->email}} </x-table.cell>
              
              <x-table.cell>{{ $user->created_at}} </x-table.cell>

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
