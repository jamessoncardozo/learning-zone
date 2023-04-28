@props(['on'])

<div x-data="{ shown: false, timeout: null }"
<<<<<<< HEAD
    x-init="@this.on('{{ $on }}', () => { clearTimeout(timeout); shown = true; timeout = setTimeout(() => { shown = false }, 2000);  })"
    x-show.transition.out.opacity.duration.1500ms="shown"
    x-transition:leave.opacity.duration.1500ms
    style="display: none;"
    {{ $attributes->merge(['class' => 'text-sm text-gray-600']) }}>
    {{ $slot->isEmpty() ? 'Saved.' : $slot }}
</div>
=======
    x-init="@this.on('{{ $on }}', () => { clearTimeout(timeout); shown = true; timeout = setTimeout(() => { shown = false }, 6000);  })"
    x-show.transition.out.opacity.duration.5000ms="shown"
    x-transition:leave.opacity.duration.5000ms
    style="display: none;"
    {{ $attributes->merge(['class' => 'text-sm text-gray-600']) }}>
    {{ $slot->isEmpty() ? 'Salvo.' : $slot }}
</div>
>>>>>>> 7e91912cb809f8841388c30df8462a6d5c7017c6
