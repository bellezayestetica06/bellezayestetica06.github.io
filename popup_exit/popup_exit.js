window.addEventListener ("load",function ()
{
	var veces = 0;
	
	//Cambia aqui el maximo de veces que va salir el popup
	var maximo = 1;
	
	
	jQuery("body").mouseleave(function(e)
	{
		if(e.clientY < 0 && veces < maximo && jQuery(".div_fondo").is(':hidden'))
		{
			jQuery(".div_fondo").show();
			
			veces++;
		}
	});
	
	var currentHash = window.location.hash;	

	if (window.history && window.history.pushState) 
	{
		window.history.pushState('', null, '');
		jQuery(window).on('popstate', function( event ) {
			
			
			if(veces < maximo && jQuery(".div_fondo").is(':hidden') && window.location.hash == currentHash )
			{
				jQuery(".div_fondo").show();
				
				veces++;
			}
			
			
			return false;
		});
	}	
	
	
	// botones PC
	
	jQuery(".boton2").click(function()
	{
		jQuery(".div_fondo").hide();
	});
	
	
	// botones Movil
	
	jQuery(".boton4").click(function()
	{
		jQuery(".div_fondo").hide();
	});
	
	
	jQuery(".boton_cerrar").click(function()
	{
		jQuery(".div_fondo").hide();
	});
});
