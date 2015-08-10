$(document).ready(function(){

	// Variables Globales
	$nplayer1 = null;
	$nplayer2 = null;
	$splayer1 = null;
	$splayer2 = null;
	$countslt = 1;
	$winner = [[0,1,2],[3,4,5],[6,7,8],[0,3,6],[1,4,7],[2,5,8],[0,4,8],[2,4,6]]

// Animacion Inicial
	$('article#error').hide();
	$('section#screen2').hide();
	$('section#screen3').hide();
	$('section#screen3 h1').hide()
	$('section#screen1').animate({'left': '-1000px'},0)
						.animate({'left': '40px'},500)
						.animate({'left': '0px'},200);

	// Activar Simbolo Pantalla 1
	$('main').on('click', 'nav#symbols li:not(.selected)', function(event){
		event.preventDefault();
		$('nav#symbols li').removeClass('active');
		$(this).addClass('active');
	});

	//Validar Datos Pantalla 1
	$('footer').on('click', '#next1', function(event){
		event.preventDefault();
		if($('#screen1 #nickname').val().length > 0 && $('#screen1 nav#symbols li').hasClass('active')){
			$nplayer1 = $('#screen1 #nickname').val();
			$splayer1 = $('#screen1 nav#symbols li.active').attr('id');
			$('#screen1').animate({'left':'-1000px'},250).hide(250);
		setTimeout(function(){
		$('section#screen2').show().animate({'left': '-1000px'},0)
						   		   .animate({'left': '40px'},500)
								   .animate({'left': '0px'},200);
		$('#screen2 #'+$splayer1).addClass('selected');
	},500);
		}else{
			$('article#error').show();
		}
	});

//Validar datos pantalla 2
$('footer').on('click', '#next2', function(event){
	event.preventDefault();
	if($('#screen2 #nickname').val().length > 0 && $('#screen2 nav#symbols li').hasClass('active')){
		$nplayer2 = $('#screen2 #nickname').val();
		$splayer2 = $('#screen2 nav#symbols li.active').attr('id');
		$('#screen2').animate({'left':'-1000px'},250).hide(250);

	setTimeout(function(){
	$('section#screen3').show().animate({'left': '-1000px'},0)
									 					 .animate({'left': '40px'},500)
								 					 	 .animate({'left': '0px'},200);
														 $('#turno_jug').text($nplayer1);
		}, 500);
	}else{
		$('article#error').show();
	}
});

// Reiniciar el juego
$('footer').on('click', '#reset', function(){
	event.preventDefault();
	window.location.replace('');
})

// Cerrar alerta
$('section#alerts').on('click', 'article', function(event){
	event.preventDefault();
	$(this).fadeOut('slow');
})
$('section#alerts').on('click', 'a', function(event){
	event.preventDefault();
	$(this).parent().fadeOut('slow');
})
// Click en cajas
$('#boxes').on('click', 'button', function(){
	event.preventDefault();
	if($countslt%2==0){
		$('#turno_jug').text($nplayer1);
		$(this).css('background', '#2085ac url(imgs/'+$splayer2+'.png) no-repeat center center');
		$(this).addClass('p2');
	}else{
		$('#turno_jug').text($nplayer2);
		$(this).css('background', '#2085ac url(imgs/'+$splayer1+'.png) no-repeat center center');
		$(this).addClass('p1');
	}
	$(this).addClass('activebox');
	$(this).attr('disabled', 'disabled');
	$countslt++;

	checkGame();
});

function checkGame(p1, p2){
	for ($i = 0; $winner.length; $i++) {
		for ($j = 0; $j < 3; $j++) {
			console.log($winner[$i][$j]);
		}
	}
}

function ganarJuego(){
	$('nav#boxes button').attr('disabled', 'disabled');
}
});
