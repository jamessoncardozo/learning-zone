<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Ambiente de Teste e Criação') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        @livewireStyles

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>

    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
        <script>
          function takeScreenshot() {
            // Captura o elemento "captura" e converte em imagem
            html2canvas(document.getElementById("businesscard")).then(function(canvas) {
              // Cria um link para fazer o download da imagem
              var link = document.createElement("a");
              document.body.appendChild(link);
              link.download = "captura.png";
              link.href = canvas.toDataURL("image/png");
              link.click();
            });
          }
        </script>
        <!-- Livewire Scripts -->
        @livewireScripts
    </body>
</html>
