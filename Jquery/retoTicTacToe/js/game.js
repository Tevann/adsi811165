$(document).ready(function(){

	// Variables Globales
	$nplayer1 = null;
	$nplayer2 = null;
	$splayer1 = null;
	$splayer2 = null;
	$countslt = 1;
	// $winner = [[0,1,2],[3,4,5],[6,7,8],[0,3,6],[1,4,7],[2,5,8],[0,4,8],[2,4,6]]

// Animacion Inicial
	$('section#screen2').hide();
	$('section#screen3').hide();
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
			alert('Ingresa un nombre de Usuario,\nseleccione un simbolo.');
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
		alert('Ingresa un nombre de Usuario,\nseleccione un simbolo.');
	}
});

// Reiniciar el juego
$('footer').on('click', '#reset', function(){
	event.preventDefault();
	window.location.replace('');
})
// Click en cajas
$('#boxes').on('click', 'button', function(){
	event.preventDefault();
	$('#turno_jug').text($nplayer1);
	if($countslt%2==0){
		$('#turno_jug').text($nplayer2);
		$(this).css('background', '#2085ac url(imgs/'+$splayer2+'.png) no-repeat center center');
		$(this).addClass('player2');
	}else{
		$('#turno_jug').text($nplayer1);
		$(this).css('background', '#2085ac url(imgs/'+$splayer1+'.png) no-repeat center center');
		$(this).addClass('player1');
	}
	$(this).addClass('activebox');
	$(this).attr('disabled', 'disabled');
	$countslt++;

	if(($('button#box1').hasClass('player2') && $('button#box2').hasClass('player2') && $('button#box3').hasClass('player2'))||
		($('button#box4').hasClass('player2') && $('button#box5').hasClass('player2') && $('button#box6').hasClass('player2')) ||
		($('button#box7').hasClass('player2') && $('button#box8').hasClass('player2') && $('button#box9').hasClass('player2')) ||
		($('button#box1').hasClass('player2') && $('button#box4').hasClass('player2') && $('button#box7').hasClass('player2')) ||
		($('button#box2').hasClass('player2') && $('button#box5').hasClass('player2') && $('button#box8').hasClass('player2')) ||
		($('button#box3').hasClass('player2') && $('button#box6').hasClass('player2') && $('button#box9').hasClass('player2')) ||
		($('button#box1').hasClass('player2') && $('button#box5').hasClass('player2') && $('button#box9').hasClass('player2')) ||
		($('button#box3').hasClass('player2') && $('button#box5').hasClass('player2') && $('button#box7').hasClass('player2'))	){
		alert('Ha ganado '+$nplayer2);
		ganarJuego();
		// window.location.replace('');
	}
	else if(($('button#box1').hasClass('player2') && $('button#box2').hasClass('player2') && $('button#box3').hasClass('player2'))||
		($('button#box4').hasClass('player1') && $('button#box5').hasClass('player1') && $('button#box6').hasClass('player1')) ||
		($('button#box7').hasClass('player1') && $('button#box8').hasClass('player1') && $('button#box9').hasClass('player1')) ||
		($('button#box1').hasClass('player1') && $('button#box4').hasClass('player1') && $('button#box7').hasClass('player1')) ||
		($('button#box2').hasClass('player1') && $('button#box5').hasClass('player1') && $('button#box8').hasClass('player1')) ||
		($('button#box3').hasClass('player1') && $('button#box6').hasClass('player1') && $('button#box9').hasClass('player1')) ||
		($('button#box1').hasClass('player1') && $('button#box5').hasClass('player1') && $('button#box9').hasClass('player1')) ||
		($('button#box3').hasClass('player1') && $('button#box5').hasClass('player1') && $('button#box7').hasClass('player1')) ){
		alert('Ha ganado '+$nplayer1);
		ganarJuego();
	}
});

function ganarJuego(){
	$('nav#boxes button').attr('disabled', 'disabled');
}
});
