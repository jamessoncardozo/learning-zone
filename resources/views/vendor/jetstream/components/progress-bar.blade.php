
<!-- component -->
<div class="h-1 relative rounded-full overflow-hidden shadow-2xl">
  <div class="w-full h-full bg-gray-200 dark:bg-gray-400 absolute"></div> 
  <div class='loading h-full w-[0%] bg-emerald-500 border-rose-700 border-r transition-all duration-100 absolute z-40 rounded-full shadow-2xl'></div>
</div>

<script>
	const loading = document.querySelector('.loading');
    
  let currentProgress = 0; //zera o progresso
  
  let itv = setInterval(function(){ //executa a função abaixo quando dentro do intervalo abaixo

    do{
      
      currentProgress++;

      setProgress(currentProgress);

      if(currentProgress > 100) currentProgress = 0;
      
    }while (currentProgress > 101);
    
  },50); // em 50 ms segundos ele executa a função acima;

  function setProgress(progress){

    loading.style.width = `${progress}%`;

  }
    
</script>