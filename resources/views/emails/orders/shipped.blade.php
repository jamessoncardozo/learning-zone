<x-mail::message>
# Pedido de Items
 
Segue a solicitação do usuário:
 
<x-mail::button :url="$url">
Ver pedidos
</x-mail::button>
 
Obrigado,<br>
{{ config('app.name') }}
</x-mail::message>