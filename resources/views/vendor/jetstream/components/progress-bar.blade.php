
<!-- component -->
<<<<<<< HEAD
<div class="h-1 relative rounded-full overflow-hidden top-0">
  <div class="w-full h-full bg-gray-200 absolute"></div> 
  <div class='loading h-full w-[0%] bg-red-500 transition-all duration-100 absolute z-40 rounded-full'></div>
=======
<div class="h-1 relative rounded-full overflow-hidden shadow-2xl">
  <div class="w-full h-full bg-gray-200 dark:bg-gray-400 absolute"></div> 
  <div class='loading h-full w-[0%] bg-emerald-500 border-rose-700 border-r transition-all duration-100 absolute z-40 rounded-full shadow-2xl'></div>
>>>>>>> 7e91912cb809f8841388c30df8462a6d5c7017c6
</div>

<script>
	const loading = document.querySelector('.loading');
    
  let currentProgress = 0; //zera o progresso
  
  let itv = setInterval(function(){ //executa a função abaixo quando dentro do intervalo abaixo

<<<<<<< HEAD
      do{
        
        currentProgress++;

        setProgress(currentProgress);

        if(currentProgress > 100) currentProgress = 0;
        
      }while (currentProgress > 101);
      
    },50); // em 50 ms segundos ele executa a função acima;

  function setProgress(progress){
      loading.style.width = `${progress}%`;
=======
    do{
      
      currentProgress++;

      setProgress(currentProgress);

      if(currentProgress > 100) currentProgress = 0;
      
    }while (currentProgress > 101);
    
  },50); // em 50 ms segundos ele executa a função acima;

  function setProgress(progress){

    loading.style.width = `${progress}%`;

>>>>>>> 7e91912cb809f8841388c30df8462a6d5c7017c6
  }
    
</script>