var main =function(){
	$('.refacciones').click(function(){
			
			$('.descripcionrefacciones').hide(350);
			$('.descripcionrefacciones').hide("fast");
			 
			$(this).children('.descripcionrefacciones').show(350);
			$(this).show("slow");
	});
	
}
$(document).ready(main);