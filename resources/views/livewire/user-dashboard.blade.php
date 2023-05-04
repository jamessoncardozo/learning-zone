
<x-slot name="header">

  <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
    {{ __('Users Dashboard') }}
  </h2>

</x-slot>

<div class="py-4">

  <div class="flex-col space-y-2 max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div wire:loading.delay.short class="flex w-full"> 
      {{ __(' ') }} <!-- Necessário adicionar um espaço para que a progress bar seja exibida dentro dessa diretiva wire: loading
      Ela não funciona em um texto -->
      <x-progress-bar/>
    </div> 
    <div class="flex flex-wrap items-stretch md:flex-nowrap	px-2 md:p-2">

      <!-- Caixa de pesquisa que aguarda meio segundo para poder fazer o request. Ou seja, só busca próximo ao usuário terminar de digitar -->
      <x-input type="search" wire:model.debounce.500ms="search" class="mb-1 md:m-1 mx-1 p-3 w-full md:w-2/6" placeholder="Pesquise um usuário..."/>

      <!-- Botão Jetstream que exporta chamando a função exporting() e passa 'xls' como argumento para definir o tipo de arquivo à ser baixado.
      quando ele chama o método exporting, a diretiva Livewire wire:loaging.attr desabilita esse botão  -->

      <x-button type="button"
        wire:click="exporting('xlsx')"
        wire:loading.attr="disabled" 
        class="mb-1 md:m-1 mx-1 p-3 w-full md:w-1/6 bg-green-500 dark:bg-green-900 ring-green-800 text-center text-inline-flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 115.28 122.88" style="enable-background:new 0 0 115.28 122.88" xml:space="preserve" class="fill-white w-6 mr-2 -ml-1">
          <style type="text/css">.st0{fill-rule:evenodd;clip-rule:evenodd;}</style>
          <g>
            <path class="st0" d="M21.44,57h68.81V37.34H69.59c-2.17,0-5.19-1.17-6.62-2.6c-1.43-1.43-2.3-4.01-2.3-6.17V7.64l0,0H8.15 c-0.18,0-0.32,0.09-0.41,0.18C7.59,7.92,7.55,8.05,7.55,8.24v106.45c0,0.14,0.09,0.32,0.18,0.41c0.09,0.14,0.28,0.18,0.41,0.18 c22.78,0,58.09,0,81.51,0c0.18,0,0.17-0.09,0.27-0.18c0.14-0.09,0.33-0.28,0.33-0.41v-11.16H21.44c-4.14,0-7.56-3.4-7.56-7.56 V64.55C13.89,60.4,17.29,57,21.44,57L21.44,57z M25.26,70.46h6.69l3.48,6.04l3.38-6.04h6.61l-6.1,9.51l6.68,10.12h-6.83l-3.85-6.31 l-3.88,6.31h-6.77l6.77-10.23L25.26,70.46L25.26,70.46z M47.53,70.46h6.06v14.81h9.49v4.83H47.53V70.46L47.53,70.46z M64.37,83.6 l5.76-0.36c0.12,0.93,0.38,1.64,0.76,2.13c0.63,0.79,1.52,1.19,2.68,1.19c0.86,0,1.53-0.2,2-0.61c0.47-0.41,0.7-0.88,0.7-1.41 c0-0.51-0.22-0.96-0.66-1.37c-0.44-0.4-1.48-0.78-3.1-1.14c-2.66-0.59-4.55-1.39-5.68-2.38c-1.14-0.99-1.71-2.25-1.71-3.78 c0-1.01,0.29-1.96,0.88-2.85c0.58-0.9,1.46-1.6,2.64-2.12c1.17-0.51,2.78-0.77,4.83-0.77c2.51,0,4.42,0.47,5.74,1.4 c1.32,0.93,2.1,2.42,2.35,4.46l-5.7,0.34c-0.15-0.89-0.47-1.54-0.96-1.94c-0.49-0.41-1.16-0.61-2.02-0.61 c-0.7,0-1.24,0.15-1.59,0.45c-0.36,0.3-0.53,0.66-0.53,1.09c0,0.31,0.15,0.59,0.43,0.84c0.28,0.26,0.96,0.5,2.02,0.72 c2.65,0.57,4.55,1.15,5.69,1.74c1.15,0.59,1.98,1.31,2.5,2.18c0.52,0.86,0.78,1.83,0.78,2.91c0,1.26-0.35,2.42-1.04,3.48 c-0.7,1.06-1.67,1.87-2.92,2.42c-1.25,0.55-2.82,0.82-4.72,0.82c-3.34,0-5.65-0.64-6.93-1.93C65.26,87.21,64.53,85.58,64.37,83.6 L64.37,83.6z M83.46,70.46h6.69l3.48,6.04L97,70.46h6.61l-6.1,9.51l6.68,10.12h-6.83l-3.85-6.31l-3.88,6.31h-6.77l6.77-10.23 L83.46,70.46L83.46,70.46z M97.79,57h9.93c4.16,0,7.56,3.41,7.56,7.56v31.42c0,4.15-3.41,7.56-7.56,7.56h-9.93v13.55 c0,1.61-0.65,3.04-1.7,4.1c-1.06,1.06-2.49,1.7-4.1,1.7c-29.44,0-56.59,0-86.18,0c-1.61,0-3.04-0.64-4.1-1.7 c-1.06-1.06-1.7-2.49-1.7-4.1V5.85c0-1.61,0.65-3.04,1.7-4.1c1.06-1.06,2.53-1.7,4.1-1.7h58.72C64.66,0,64.8,0,64.94,0 c0.64,0,1.29,0.28,1.75,0.69h0.09c0.09,0.05,0.14,0.09,0.23,0.18l29.99,30.36c0.51,0.51,0.88,1.2,0.88,1.98 c0,0.23-0.05,0.41-0.09,0.65V57L97.79,57z M67.52,27.97V8.94l21.43,21.7H70.19c-0.74,0-1.38-0.32-1.89-0.78 C67.84,29.4,67.52,28.71,67.52,27.97L67.52,27.97z"/>
          </g>
        </svg>
        XLSX
      </x-button>

      <x-button type="button" wire:click="exporting('xls')" wire:loading.attr="disabled" class="mb-1 md:m-1 mx-1 p-3 w-full md:w-1/6 bg-lime-500 dark:bg-lime-900 ring-lime-800 text-center inline-flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 115.28 122.88" style="enable-background:new 0 0 115.28 122.88" xml:space="preserve" class="fill-white w-6 mr-2 -ml-1">
          <style type="text/css">.st0{fill-rule:evenodd;clip-rule:evenodd;}</style>
          <g>
            <path class="st0" d="M21.44,57h68.81V37.34H69.59c-2.17,0-5.19-1.17-6.62-2.6c-1.43-1.43-2.3-4.01-2.3-6.17V7.64l0,0H8.15 c-0.18,0-0.32,0.09-0.41,0.18C7.59,7.92,7.55,8.05,7.55,8.24v106.45c0,0.14,0.09,0.32,0.18,0.41c0.09,0.14,0.28,0.18,0.41,0.18 c22.78,0,58.09,0,81.51,0c0.18,0,0.17-0.09,0.27-0.18c0.14-0.09,0.33-0.28,0.33-0.41v-11.16H21.44c-4.14,0-7.56-3.4-7.56-7.56 V64.55C13.89,60.4,17.29,57,21.44,57L21.44,57z M25.26,70.46h6.69l3.48,6.04l3.38-6.04h6.61l-6.1,9.51l6.68,10.12h-6.83l-3.85-6.31 l-3.88,6.31h-6.77l6.77-10.23L25.26,70.46L25.26,70.46z M47.53,70.46h6.06v14.81h9.49v4.83H47.53V70.46L47.53,70.46z M64.37,83.6 l5.76-0.36c0.12,0.93,0.38,1.64,0.76,2.13c0.63,0.79,1.52,1.19,2.68,1.19c0.86,0,1.53-0.2,2-0.61c0.47-0.41,0.7-0.88,0.7-1.41 c0-0.51-0.22-0.96-0.66-1.37c-0.44-0.4-1.48-0.78-3.1-1.14c-2.66-0.59-4.55-1.39-5.68-2.38c-1.14-0.99-1.71-2.25-1.71-3.78 c0-1.01,0.29-1.96,0.88-2.85c0.58-0.9,1.46-1.6,2.64-2.12c1.17-0.51,2.78-0.77,4.83-0.77c2.51,0,4.42,0.47,5.74,1.4 c1.32,0.93,2.1,2.42,2.35,4.46l-5.7,0.34c-0.15-0.89-0.47-1.54-0.96-1.94c-0.49-0.41-1.16-0.61-2.02-0.61 c-0.7,0-1.24,0.15-1.59,0.45c-0.36,0.3-0.53,0.66-0.53,1.09c0,0.31,0.15,0.59,0.43,0.84c0.28,0.26,0.96,0.5,2.02,0.72 c2.65,0.57,4.55,1.15,5.69,1.74c1.15,0.59,1.98,1.31,2.5,2.18c0.52,0.86,0.78,1.83,0.78,2.91c0,1.26-0.35,2.42-1.04,3.48 c-0.7,1.06-1.67,1.87-2.92,2.42c-1.25,0.55-2.82,0.82-4.72,0.82c-3.34,0-5.65-0.64-6.93-1.93C65.26,87.21,64.53,85.58,64.37,83.6 L64.37,83.6z M83.46,70.46h6.69l3.48,6.04L97,70.46h6.61l-6.1,9.51l6.68,10.12h-6.83l-3.85-6.31l-3.88,6.31h-6.77l6.77-10.23 L83.46,70.46L83.46,70.46z M97.79,57h9.93c4.16,0,7.56,3.41,7.56,7.56v31.42c0,4.15-3.41,7.56-7.56,7.56h-9.93v13.55 c0,1.61-0.65,3.04-1.7,4.1c-1.06,1.06-2.49,1.7-4.1,1.7c-29.44,0-56.59,0-86.18,0c-1.61,0-3.04-0.64-4.1-1.7 c-1.06-1.06-1.7-2.49-1.7-4.1V5.85c0-1.61,0.65-3.04,1.7-4.1c1.06-1.06,2.53-1.7,4.1-1.7h58.72C64.66,0,64.8,0,64.94,0 c0.64,0,1.29,0.28,1.75,0.69h0.09c0.09,0.05,0.14,0.09,0.23,0.18l29.99,30.36c0.51,0.51,0.88,1.2,0.88,1.98 c0,0.23-0.05,0.41-0.09,0.65V57L97.79,57z M67.52,27.97V8.94l21.43,21.7H70.19c-0.74,0-1.38-0.32-1.89-0.78 C67.84,29.4,67.52,28.71,67.52,27.97L67.52,27.97z"/>
          </g>
        </svg>
        XLS
      </x-button>
      <x-button type="button" wire:click="exporting('csv')" wire:loading.attr="disabled" class="mb-1 md:m-1 mx-1 p-3 w-full md:w-1/6 bg-indigo-500 dark:bg-indigo-900 ring-indigo-800 text-center inline-flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 115.28 122.88" style="enable-background:new 0 0 115.28 122.88" xml:space="preserve" class="fill-white w-6 mr-2 -ml-1">
          <style type="text/css">.st0{fill-rule:evenodd;clip-rule:evenodd;}</style>
          <g>
            <path class="st0" d="M25.38,57h64.88V37.34H69.59c-2.17,0-5.19-1.17-6.62-2.6c-1.43-1.43-2.3-4.01-2.3-6.17V7.64l0,0H8.15 c-0.18,0-0.32,0.09-0.41,0.18C7.59,7.92,7.55,8.05,7.55,8.24v106.45c0,0.14,0.09,0.32,0.18,0.41c0.09,0.14,0.28,0.18,0.41,0.18 c22.78,0,58.09,0,81.51,0c0.18,0,0.17-0.09,0.27-0.18c0.14-0.09,0.33-0.28,0.33-0.41v-11.16H25.38c-4.14,0-7.56-3.4-7.56-7.56 V64.55C17.82,60.4,21.22,57,25.38,57L25.38,57z M45.88,82.35l6.29,1.9c-0.42,1.76-1.09,3.24-2,4.42c-0.91,1.18-2.03,2.08-3.38,2.68 c-1.35,0.6-3.06,0.9-5.14,0.9c-2.53,0-4.59-0.37-6.19-1.1c-1.6-0.74-2.98-2.03-4.14-3.87c-1.16-1.84-1.75-4.21-1.75-7.09 c0-3.84,1.02-6.79,3.06-8.85c2.05-2.06,4.94-3.09,8.68-3.09c2.92,0,5.23,0.59,6.9,1.77c1.67,1.18,2.92,3,3.73,5.45l-6.32,1.4 c-0.22-0.7-0.45-1.22-0.7-1.54c-0.41-0.55-0.9-0.97-1.48-1.26c-0.58-0.3-1.23-0.44-1.95-0.44c-1.63,0-2.88,0.65-3.75,1.96 c-0.65,0.97-0.98,2.49-0.98,4.56c0,2.57,0.39,4.33,1.17,5.29c0.78,0.95,1.88,1.43,3.3,1.43c1.37,0,2.41-0.38,3.11-1.16 C45.06,84.93,45.56,83.82,45.88,82.35L45.88,82.35z M54.47,84.17l6.81-0.43c0.15,1.1,0.45,1.95,0.9,2.52 c0.74,0.94,1.79,1.41,3.17,1.41c1.02,0,1.81-0.24,2.36-0.72c0.56-0.48,0.83-1.04,0.83-1.67c0-0.6-0.26-1.14-0.78-1.62 c-0.52-0.48-1.75-0.92-3.66-1.35c-3.15-0.7-5.38-1.64-6.72-2.82c-1.35-1.17-2.03-2.66-2.03-4.48c0-1.19,0.35-2.31,1.04-3.37 c0.69-1.06,1.73-1.9,3.12-2.5c1.39-0.61,3.29-0.91,5.71-0.91c2.97,0,5.23,0.55,6.78,1.66c1.56,1.1,2.48,2.86,2.78,5.27l-6.75,0.4 c-0.18-1.05-0.56-1.82-1.13-2.3c-0.58-0.48-1.37-0.72-2.38-0.72c-0.83,0-1.46,0.18-1.89,0.53c-0.42,0.35-0.63,0.78-0.63,1.29 c0,0.37,0.17,0.7,0.51,0.99c0.33,0.31,1.13,0.59,2.39,0.85c3.14,0.68,5.38,1.36,6.73,2.05c1.36,0.69,2.35,1.55,2.96,2.57 c0.62,1.02,0.92,2.17,0.92,3.44c0,1.49-0.41,2.86-1.23,4.12c-0.83,1.25-1.97,2.21-3.45,2.86c-1.48,0.65-3.34,0.97-5.58,0.97 c-3.95,0-6.68-0.76-8.2-2.28C55.53,88.44,54.67,86.51,54.47,84.17L54.47,84.17z M76.91,68.63h7.5l5.23,16.71l5.16-16.71h7.28 l-8.62,23.22h-7.77L76.91,68.63L76.91,68.63z M97.79,57h9.93c4.16,0,7.56,3.41,7.56,7.56v31.42c0,4.15-3.41,7.56-7.56,7.56h-9.93 v13.55c0,1.61-0.65,3.04-1.7,4.1c-1.06,1.06-2.49,1.7-4.1,1.7c-29.44,0-56.59,0-86.18,0c-1.61,0-3.04-0.64-4.1-1.7 c-1.06-1.06-1.7-2.49-1.7-4.1V5.85c0-1.61,0.65-3.04,1.7-4.1c1.06-1.06,2.53-1.7,4.1-1.7h58.72C64.66,0,64.8,0,64.94,0 c0.64,0,1.29,0.28,1.75,0.69h0.09c0.09,0.05,0.14,0.09,0.23,0.18l29.99,30.36c0.51,0.51,0.88,1.2,0.88,1.98 c0,0.23-0.05,0.41-0.09,0.65V57L97.79,57z M67.52,27.97V8.94l21.43,21.7H70.19c-0.74,0-1.38-0.32-1.89-0.78 C67.84,29.4,67.52,28.71,67.52,27.97L67.52,27.97z"/>
          </g>
        </svg>CSV
      </x-button>
      <x-button type="button" wire:click="exporting('PDF')" wire:loading.attr="disabled" class="mb-1 md:m-1 mx-1 p-3 w-full md:w-1/6 bg-red-500 dark:bg-red-900 ring-red-800 text-center inline-flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 115.28 122.88" style="enable-background:new 0 0 115.28 122.88" xml:space="preserve" class="fill-white w-6 mr-2 -ml-1">
          <style type="text/css">.st0{fill-rule:evenodd;clip-rule:evenodd;}</style>
          <g>
            <path class="st0" d="M25.38,57h64.88V37.34H69.59c-2.17,0-5.19-1.17-6.62-2.6c-1.43-1.43-2.3-4.01-2.3-6.17V7.64l0,0H8.15 c-0.18,0-0.32,0.09-0.41,0.18C7.59,7.92,7.55,8.05,7.55,8.24v106.45c0,0.14,0.09,0.32,0.18,0.41c0.09,0.14,0.28,0.18,0.41,0.18 c22.78,0,58.09,0,81.51,0c0.18,0,0.17-0.09,0.27-0.18c0.14-0.09,0.33-0.28,0.33-0.41v-11.16H25.38c-4.14,0-7.56-3.4-7.56-7.56 V64.55C17.82,60.4,21.22,57,25.38,57L25.38,57z M29.5,67.4h13.19c2.87,0,5.02,0.68,6.46,2.05c1.43,1.37,2.14,3.31,2.14,5.84 c0,2.59-0.78,4.62-2.34,6.08c-1.56,1.46-3.94,2.19-7.14,2.19h-4.35v9.49H29.5V67.4L29.5,67.4z M37.45,78.37h1.95 c1.54,0,2.62-0.27,3.24-0.8c0.62-0.53,0.93-1.21,0.93-2.04c0-0.81-0.27-1.49-0.81-2.05c-0.54-0.56-1.55-0.84-3.05-0.84h-2.27V78.37 L37.45,78.37z M54.99,67.4h11.78c2.32,0,4.2,0.32,5.63,0.94c1.43,0.63,2.61,1.53,3.55,2.71c0.93,1.18,1.61,2.55,2.02,4.11 c0.42,1.56,0.63,3.22,0.63,4.97c0,2.74-0.31,4.87-0.94,6.38c-0.62,1.51-1.49,2.78-2.6,3.8c-1.11,1.02-2.3,1.7-3.57,2.04 c-1.74,0.47-3.31,0.7-4.72,0.7H54.99V67.4L54.99,67.4z M62.9,73.21v14.01h1.95c1.66,0,2.84-0.19,3.55-0.55 c0.7-0.37,1.25-1.01,1.65-1.92c0.4-0.92,0.6-2.4,0.6-4.45c0-2.72-0.44-4.57-1.33-5.58c-0.89-1-2.36-1.5-4.42-1.5H62.9L62.9,73.21z M82.25,67.4h19.6v5.52H90.21v4.48h9.96v5.2h-9.96v10.46h-7.95V67.4L82.25,67.4z M97.79,57h9.93c4.16,0,7.56,3.41,7.56,7.56v31.42 c0,4.15-3.41,7.56-7.56,7.56h-9.93v13.55c0,1.61-0.65,3.04-1.7,4.1c-1.06,1.06-2.49,1.7-4.1,1.7c-29.44,0-56.59,0-86.18,0 c-1.61,0-3.04-0.64-4.1-1.7c-1.06-1.06-1.7-2.49-1.7-4.1V5.85c0-1.61,0.65-3.04,1.7-4.1c1.06-1.06,2.53-1.7,4.1-1.7h58.72 C64.66,0,64.8,0,64.94,0c0.64,0,1.29,0.28,1.75,0.69h0.09c0.09,0.05,0.14,0.09,0.23,0.18l29.99,30.36c0.51,0.51,0.88,1.2,0.88,1.98 c0,0.23-0.05,0.41-0.09,0.65V57L97.79,57z M67.52,27.97V8.94l21.43,21.7H70.19c-0.74,0-1.38-0.32-1.89-0.78 C67.84,29.4,67.52,28.71,67.52,27.97L67.52,27.97z"/>
          </g>
        </svg>
        PDF
      </x-button>
      <x-button type="button" wire:click="sendUsers" wire:loading.attr="disabled" class="mb-1 md:m-1 mx-1 p-3 w-full md:w-1/6 bg-pink-500 dark:bg-pink-900 ring-pink-800 text-center inline-flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 371.13" class="fill-white w-6 mr-2 -ml-1">
          <path d="M397 141.12c63.51 0 115 51.5 115 115.01 0 63.5-51.49 115-115 115s-115.02-51.5-115.02-115c0-63.51 51.51-115.01 115.02-115.01zM28.8 0h389.26c15.73 0 28.52 12.88 28.5 28.53l-.1 95.75c-7.58-2.84-15.46-5.04-23.59-6.55l.07-77.07-125.82 98.89 9.17 8.99c-3.04 2.56-5.94 5.24-8.75 8.04l-.09.1c-3.27 3.27-6.37 6.72-9.32 10.29l-10.89-10.69-42.14 35.87c-4.49 3.77-11.46 4.22-16.5.12l-44.24-36.1L39.45 282.69h219.27a140.08 140.08 0 0 0 6.71 23.6H28.49C12.74 306.29 0 293.42 0 277.76L.24 28.52C.27 12.84 13.05 0 28.8 0zm-5.19 261.9 130.45-122.08L23.82 41.69l-.21 220.21zM42.65 23.6l183.96 141.87L400.69 23.6H42.65zm358.01 180.04 49.96 51.69-51.52 53.32-16.07-15.44 25.81-26.71-65.47.07V244.3l65.53-.07-24.3-25.15 16.06-15.44z"/>
        </svg>
        E-MAIL
      </x-button>

      <!-- Botão Jetstream que exporta chamando a função exporting() e passa 'xls' como argumento para definir o tipo de arquivo à ser baixado.
      quando ele chama o método exporting, a diretiva Livewire wire:loaging.attr desabilita esse botão  -->

      <div class="mb-1 md:m-1 mx-1 bg-amber-500 dark:bg-orange-900 ring-amber-800 rounded-lg w-full md:w-1/6 flex justify-center">

        <div @click.away="openSort = false" class="relative w-full" x-data="{ openSort: false,sortType:'10' }">

          <button @click="openSort = !openSort" class="flex bg-gray-200 items-center justify-start w-full p-3 text-sm font-semibold text-left bg-transparent ">
            <x-input type="number" wire:model.debounce.500ms="paginate" class="w-full bg-transparent border-none shadow-none ring-none text-white" placeholder="{{ $paginate }}"/>
          </button>

          <div x-show="openSort"
                x-transition:enter="transition ease-out duration-100"
                x-transition:enter-start="transform opacity-0 scale-95"
                x-transition:enter-end="transform opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-75"
                x-transition:leave-start="transform opacity-100 scale-100"
                x-transition:leave-end="transform opacity-0 scale-95"
                class="absolute z-50 w-full origin-top-right">

            <div class="px-2 pt-2 pb-2 bg-white rounded-md shadow-lg dark-mode:bg-gray-700">
              <div class="flex flex-col">

                <x-button
                    @click="sortType='10',openSort=!openSort"
                    x-show="sortType != '10'"
                    wire:click="$set('paginate',10)"
                    class="right-0 block my-1 px-1 w-full bg-green-500 ring-green-800 text-xl">
                  {{ __('10') }}
                </x-button>
                    
                <x-button
                    @click="sortType='20',openSort=!openSort"
                    x-show="sortType != '20'"
                    wire:click="$set('paginate',20)"
                    class="block my-1 px-1 w-full bg-indigo-500 ring-indigo-800 text-white text-xl">
                  {{ __('20') }}
                </x-button>

                <x-button
                    @click="sortType='50',openSort=!openSort"
                    x-show="sortType != '50'"
                    wire:click="$set('paginate',50)"
                    class="right-0 block my-1 px-1 w-full bg-red-500 ring-red-800 text-xl">
                  {{ __('50') }}
                </x-button>

                <x-button
                    @click="sortType='100',openSort=!openSort"
                    x-show="sortType != '100'"
                    wire:click="$set('paginate',100)"
                    class="right-0 block my-1 px-1 w-full bg-emerald-500 ring-slate-800 text-xl border-none">
                  {{ __('100') }}
                </x-button>

              </div>

            </div>

          </div>

        </div> 

      </div>

      <script src="//unpkg.com/alpinejs" defer></script>

    </div>

    <div class="flex items-center bg-white overflow-hidden shadow-xl sm:rounded-lg m-1 md:my-2">

      <x-table class="grid grid-cols-4 md:grid-cols-none">

        <x-slot name="head" >

          <x-table.heading></x-table.heading>

          <x-table.heading sortable wire:click="sortBy('id')" :direction="$sortField === 'id' ? $sortDirection : null">#:</x-table.heading>

          <x-table.heading sortable wire:click="sortBy('name')" :direction="$sortField === 'name' ? $sortDirection : null">Nome: </x-table.heading>
          
          <x-table.heading sortable wire:click="sortBy('email')" :direction="$sortField === 'email' ? $sortDirection : null">E-mail: </x-table.heading>

          <x-table.heading sortable wire:click="sortBy('github_url')" :direction="$sortField === 'github_url' ? $sortDirection : null">Github: </x-table.heading>

          <x-table.heading sortable wire:click="sortBy('linkedin_url')" :direction="$sortField === 'email' ? $sortDirection : null">Linkedin: </x-table.heading>

          <x-table.heading>Card:</x-table.heading>

        </x-slot>

        <x-slot name="body">
        
          @forelse ($users as $user)
          
            <x-table.row class="transition-all hover:bg-gray-100 hover:shadow-lg">

              <x-table.cell>

                <input id="id" type="checkbox" class="form-checkbox h-5 w-5 text-green-600 rounded" wire:click="showName({{ $user->id }})" wire:model="selectedUsers.{{ $user->id }}" />  

              </x-table.cell>
              
              <x-table.cell>{{ $user->id}} </x-table.cell>

              <x-table.cell>{{ $user->name}} </x-table.cell>

              <x-table.cell>{{ $user->email}} </x-table.cell>

              <x-table.cell>{{ $user->github_url}} </x-table.cell>

              <x-table.cell>{{ $user->linkedin_url}} </x-table.cell>
          
              <x-table.cell>
                <div
                  class="ml-3 transition ease-in-out delay-150 hover:animate-pulse rounded-lg p-1 bg-slate-500 w-full"
                  onclick="window.location.href='{{ route('business-card', ['id' => $user->id,'showModal => true']) }}'">
                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><rect x="336" y="336" width="80" height="80" rx="8" ry="8"/><rect x="272" y="272" width="64" height="64" rx="8" ry="8"/><rect x="416" y="416" width="64" height="64" rx="8" ry="8"/><rect x="432" y="272" width="48" height="48" rx="8" ry="8"/><rect x="272" y="432" width="48" height="48" rx="8" ry="8"/><rect x="336" y="96" width="80" height="80" rx="8" ry="8"/><rect x="288" y="48" width="176" height="176" rx="16" ry="16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><rect x="96" y="96" width="80" height="80" rx="8" ry="8"/><rect x="48" y="48" width="176" height="176" rx="16" ry="16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><rect x="96" y="336" width="80" height="80" rx="8" ry="8"/><rect x="48" y="288" width="176" height="176" rx="16" ry="16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                </div>

              </x-table.cell>
            </x-table.row>

          @empty

          <x-table.row>

              <x-table.cell colspan="6">
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
