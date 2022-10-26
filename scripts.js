const presupuesto=document.querySelector('.presupuesto');
	const menu=document.querySelector('form');
	const absolute=document.querySelector('.header');

	absolute.classList.remove('absolute');
	
	presupuesto.addEventListener('click', function(open){
   	 	menu.classList.remove('pedir-presupuesto');
    	absolute.classList.add('absolute');
    })

    const cerrar=document.querySelector('.fa-close');
    cerrar.addEventListener('click', function(close){
    	menu.classList.add('pedir-presupuesto'); 
    	absolute.classList.remove('absolute');	
	})

	const cancel=document.querySelector('.cancelar');
    cancel.addEventListener('click', function(close){
        menu.classList.add('pedir-presupuesto');
        absolute.classList.remove('absolute');
    })