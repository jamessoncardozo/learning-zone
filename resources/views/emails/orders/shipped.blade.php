
@component('mail::message')
  <h1 class="text-3xl font-bold mb-4">Pedido de Items</h1>
  <h2 class="text-xl font-black mb-4">Pedido de Items</h2>

  <table class="min-w-full divide-y divide-gray-200">
      <thead class="bg-pink-50">
          <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nome</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">E-mail</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Desde</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Atualizado em</th>
          </tr>
      </thead>
      <tbody class="bg-white divide-y divide-gray-200">
          @forelse ($users as $user)
              <tr class="bg-white">
                  <td class="px-6 py-4 whitespace-normal">{{ $user->name }}</td>
                  <td class="px-6 py-4 whitespace-normal">{{ $user->email }}</td>
                  <td class="px-6 py-4 whitespace-normal">{{ $user->created_at->diffForHumans() }}</td>
                  <td class="px-6 py-4 whitespace-normal">{{ $user->updated_at->diffForHumans() }}</td>
              </tr>
          @empty
          <tr class="bg-white">
              <td class="px-6 py-4 whitespace-nowrap">{{ $user->name }}</td>
              <div class="flex justify-center items-center space-x-2">
                  <ion-icon name="file-tray-full-outline" class="h-8 w-8 text-gray-300"></ion-icon>
                  <span class="font-medium py-8 text-gray-500 text-xl">Não foi localizado nenhum usuário.</span>
                </div>
              </td>
            </tr>
  
          @endforelse
      </tbody>
  </table>
  <a href="$url" class="mt-4">Ver pedidos</a>
  <p class="mt-8">Obrigado,</p>
    {{ config('app.name') }}
@endcomponent
