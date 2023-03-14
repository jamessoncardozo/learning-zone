@props([

  'sortable' => null,
  'direction' => null,

  ])

<th 
  {{ $attributes->merge(['class' => 'px-6 py-3 bg-gray-50'])->only('class') }}>
  
  @unless ($sortable)

    <span class="text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"> {{ $slot }}</span>
    
  @else
    
    <button {{ $attributes->except('class') }} class="flex items-center space-x-1 text-left text-xs leading-4 font-medium focus:font-extrabold">
      
      <span>{{ $slot }}</span>


      <span>

        @if ($direction === 'asc')
        
          <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2 text-gray-600 fill-blue-600" viewBox="0 0 512 512">
            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M112 328l144-144 144 144"/>
          </svg>

        @elseif ($direction ==='desc')

          <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2 text-gray-600 fill-blue-600" viewBox="0 0 512 512">
            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M112 184l144 144 144-144"/>
          </svg>

        @else

          <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2 text-gray-600 fill-blue-600" viewBox="0 0 512 512">
            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M464 208L352 96 240 208M352 113.13V416M48 304l112 112 112-112M160 398V96"/>
          </svg>

        @endif

      </span>
    </button>
  @endif
</th>