<x-mail::layout>
<<<<<<< HEAD
{{-- Header --}}
<x-slot:header>
<x-mail::header :url="config('app.url')">
{{ config('app.name') }}
</x-mail::header>
</x-slot:header>

{{-- Body --}}
{{ $slot }}

{{-- Subcopy --}}
@isset($subcopy)
<x-slot:subcopy>
<x-mail::subcopy>
{{ $subcopy }}
</x-mail::subcopy>
</x-slot:subcopy>
@endisset

{{-- Footer --}}
<x-slot:footer>
<x-mail::footer>
© {{ date('Y') }} {{ config('app.name') }}. @lang('Todos os direitos reservados.')
</x-mail::footer>
</x-slot:footer>
=======
  {{-- Header --}}
  <x-slot:header>
    <x-mail::header :url="config('app.url')">
    {{ config('app.name') }}
    </x-mail::header>
  </x-slot:header>

  {{-- Body --}}
  {{ $slot }}

  {{-- Subcopy --}}
  @isset($subcopy)
    <x-slot:subcopy>
      <x-mail::subcopy>
        {{ $subcopy }}
      </x-mail::subcopy>
    </x-slot:subcopy>
  @endisset

  {{-- Footer --}}
  <x-slot:footer>
    <x-mail::footer>
    © {{ date('Y') }} {{ config('app.name') }}. @lang('Todos os direitos reservados.')
    </x-mail::footer>
  </x-slot:footer>
>>>>>>> 7e91912cb809f8841388c30df8462a6d5c7017c6
</x-mail::layout>
