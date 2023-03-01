@props([

  'sortable' => null,
  'direction' => null,

  ])

<th 
  {{ $attributes->merge(['class' => 'px-6 py-3 bg-gray-50'])->only('class') }}>
  
  @unless ($sortable)

    <span class="text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"> {{ $slot }}</span>
    
  @else
    
    <button {{ $attributes->except('class') }} class="flex items-center space-x-1 text-left text-xs leading-4 font-medium">
      
      <span>{{ $slot }}</span>


      <span>

        @if ($direction === 'asc')
        
          <ion-icon name="chevron-up-outline"></ion-icon>

        @elseif ($direction ==='desc')

          <ion-icon name="chevron-down-outline"></ion-icon>

        @else

          <ion-icon name="swap-vertical-outline"></ion-icon>

        @endif

      </span>
    </button>
  @endif
</th>