$(document).ready(function(){

	// Variables Globales
	$nplayer1 = null;
	$nplayer2 = null;
	$splayer1 = null;
	$splayer2 = null;

// Animacion Inicial
	$('section#screen2').hide();
	$('section#screen1').animate({'left': '-1000px'},0)
						.animate({'left': '40px'},500)	
						.animate({'left': '0px'},200);		

	// Activar Simbolo
	$('main').on('click', 'nav#symbols li', function(event){
		event.preventDefault();
		$('nav#symbols li').removeClass('active');
		$(this).addClass('active');
	});

	//Validar Datos
	$('footer').on('click', '#next1', function(event){
		event.preventDefault();
		if($('#nickname').val().length > 0 && $('nav#symbols li').hasClass('active')){
			$nplayer1 = $('#nickname').val();
			$splayer1 = $('nav#symbols li.active').attr('id');
			$('#screen1').animate({'left':'-1000px'},500).hide(500);
		setTimeout(function(){
		$('section#screen2').show().animate({'left': '-1000px'},0)
						   		   .animate({'left': '40px'},500)	
								   .animate({'left': '0px'},200);
			}, 1000);
		}else{
			alert('Ingresa un nombre de Usuario,\nseleccione un simbolo.');
		}
	})

})