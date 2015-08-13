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
		$(this).addClass('pl2');
	}else{
		$('#turno_jug').text($nplayer2);
		$(this).css('background', '#2085ac url(imgs/'+$splayer1+'.png) no-repeat center center');
		$(this).addClass('pl1');
	}
	$(this).addClass('activebox');
	$(this).attr('disabled', 'disabled');
	$countslt++;
	checkGame();
});

//Hover de los botones cuando entra
$('#boxes').on('mouseenter', 'button', function(){
		if($countslt%2==0){
			$(this).css('background', '#2085ac url(imgs/'+$splayer2+'.png) no-repeat center center');
		}else{
			$(this).css('background', '#2085ac url(imgs/'+$splayer1+'.png) no-repeat center center');
		}
})
// Hove de los Botones cuando sale
$('#boxes').on('mouseleave', 'button', function(){
		if($countslt%2==0){
			$(this).css('background', '#2085ac');
		}else{
			$(this).css('background', '#2085ac');
		}
})

function checkGame(){
	//Jugadas Ganadoras del Player 2--------------
	if($('button#box1').hasClass('pl2') && $('button#box2').hasClass('pl2') && $('button#box3').hasClass('pl2')){
		$('button#box1').css('background-color','green');
		$('button#box2').css('background-color','green');
		$('button#box3').css('background-color','green');
		$('span#playAgain').text("¿Volver a Jugar?");
		ganadorPlayer2();
		ganarJuego();
	}
	else if ($('button#box4').hasClass('pl2') && $('button#box5').hasClass('pl2') && $('button#box6').hasClass('pl2')){
		$('button#box4').css('background-color','green');
		$('button#box5').css('background-color','green');
		$('button#box6').css('background-color','green');
		$('span#playAgain').text("¿Volver a Jugar?");
		ganadorPlayer2();
		ganarJuego();
	}
	else if ($('button#box7').hasClass('pl2') && $('button#box8').hasClass('pl2') && $('button#box9').hasClass('pl2')){
		$('button#box7').css('background-color','green');
		$('button#box8').css('background-color','green');
		$('button#box9').css('background-color','green');
		alert('ha ganado');
		ganarJuego();
	}
	else if ($('button#box1').hasClass('pl2') && $('button#box4').hasClass('pl2') && $('button#box7').hasClass('pl2')){
		$('button#box1').css('background-color','green');
		$('button#box4').css('background-color','green');
		$('button#box7').css('background-color','green');
		$('span#playAgain').text("¿Volver a Jugar?");
		ganadorPlayer2();
		ganarJuego();
	}
	else if ($('button#box2').hasClass('pl2') && $('button#box5').hasClass('pl2') && $('button#box8').hasClass('pl2')){
		$('button#box2').css('background-color','green');
		$('button#box5').css('background-color','green');
		$('button#box8').css('background-color','green');
		$('span#playAgain').text("¿Volver a Jugar?");
		ganadorPlayer2();
		ganarJuego();
	}
	else if ($('button#box3').hasClass('pl2') && $('button#box6').hasClass('pl2') && $('button#box9').hasClass('pl2')){
		$('button#box3').css('background-color','green');
		$('button#box6').css('background-color','green');
		$('button#box9').css('background-color','green');
		$('span#playAgain').text("¿Volver a Jugar?");
		ganadorPlayer2();
		ganarJuego();
	}
	else if ($('button#box1').hasClass('pl2') && $('button#box5').hasClass('pl2') && $('button#box9').hasClass('pl2')){
		$('button#box1').css('background-color','green');
		$('button#box5').css('background-color','green');
		$('button#box9').css('background-color','green');
		$('span#playAgain').text("¿Volver a Jugar?");
		ganadorPlayer2();
		ganarJuego();
	}
	else if ($('button#box3').hasClass('pl2') && $('button#box5').hasClass('pl2') && $('button#box7').hasClass('pl2')){
		$('button#box3').css('background-color','green');
		$('button#box5').css('background-color','green');
		$('button#box7').css('background-color','green');
		$('span#playAgain').text("¿Volver a Jugar?");
		ganadorPlayer2();
		ganarJuego();
	}
//Jugadas Ganadoras del Player 1--------------
else if($('button#box1').hasClass('pl1') && $('button#box2').hasClass('pl1') && $('button#box3').hasClass('pl1')){
	$('button#box1').css('background-color','green');
	$('button#box2').css('background-color','green');
	$('button#box3').css('background-color','green');
	$('span#playAgain').text("¿Volver a Jugar?");
	ganadorPlayer1();
	ganarJuego();
}
else if ($('button#box4').hasClass('pl1') && $('button#box5').hasClass('pl1') && $('button#box6').hasClass('pl1')){
	$('button#box4').css('background-color','green');
	$('button#box5').css('background-color','green');
	$('button#box6').css('background-color','green');
	$('span#playAgain').text("¿Volver a Jugar?");
	ganadorPlayer1();
	ganarJuego();
}
else if ($('button#box7').hasClass('pl1') && $('button#box8').hasClass('pl1') && $('button#box9').hasClass('pl1')){
	$('button#box7').css('background-color','green');
	$('button#box8').css('background-color','green');
	$('button#box9').css('background-color','green');
	$('span#playAgain').text("¿Volver a Jugar?");
	ganadorPlayer1();
	ganarJuego();
}
else if ($('button#box1').hasClass('pl1') && $('button#box4').hasClass('pl1') && $('button#box7').hasClass('pl1')){
	$('button#box1').css('background-color','green');
	$('button#box4').css('background-color','green');
	$('button#box7').css('background-color','green');
	$('span#playAgain').text("¿Volver a Jugar?");
	ganadorPlayer1();
	ganarJuego();
}
else if ($('button#box2').hasClass('pl1') && $('button#box5').hasClass('pl1') && $('button#box8').hasClass('pl1')){
	$('button#box2').css('background-color','green');
	$('button#box5').css('background-color','green');
	$('button#box8').css('background-color','green');
	$('span#playAgain').text("¿Volver a Jugar?");
	ganadorPlayer1();
	ganarJuego();
}
else if ($('button#box3').hasClass('pl1') && $('button#box6').hasClass('pl1') && $('button#box9').hasClass('pl1')){
	$('button#box3').css('background-color','green');
	$('button#box6').css('background-color','green');
	$('button#box9').css('background-color','green');
	$('span#playAgain').text("¿Volver a Jugar?");
	ganadorPlayer1();
	ganarJuego();
}
else if ($('button#box1').hasClass('pl1') && $('button#box5').hasClass('pl1') && $('button#box9').hasClass('pl1')){
	$('button#box1').css('background-color','green');
	$('button#box5').css('background-color','green');
	$('button#box9').css('background-color','green');
	$('span#playAgain').text("¿Volver a Jugar?");
	ganadorPlayer1();
	ganarJuego();
}
else if ($('button#box3').hasClass('pl1') && $('button#box5').hasClass('pl1') && $('button#box7').hasClass('pl1')){
	$('button#box3').css('background-color','green');
	$('button#box5').css('background-color','green');
	$('button#box7').css('background-color','green');
	$('span#playAgain').text("¿Volver a Jugar?");
	ganadorPlayer1();
	ganarJuego();
}
};

function ganadorPlayer2(){
	$('article#error').show();
	$('article#error').css('background-image','url(imgs/winner.png)');
	$('article#error h1').text('El ganador es: '+' '+$nplayer2);
	$('article#error h2').text('');
	$('article#error').css({'background-image':'url(imgs/winner.png)','background-color':'rgba(255,255,255, 0.8)'});
	$('article#error h1').css('margin','290px auto');
	$('article#error h2').css({
		'background': '#176381 url(imgs/'+$splayer2+'.png) no-repeat center center',
		'width':'90px',
		'height':'90px',
		'position':'relative',
		'top':'-250px',
		'left':'640px',
});
}
function ganadorPlayer1(){
	$('article#error').show();
	$('article#error h1').text('El ganador es: '+' '+$nplayer1);
	$('article#error h2').text('');
	$('article#error').css({'background-image':'url(imgs/winner.png)','background-color':'rgba(255,255,255, 0.8)'});
	$('article#error h1').css('margin','290px auto');
	$('article#error h2').css({
		'background': '#176381 url(imgs/'+$splayer1+'.png) no-repeat center center',
		'width':'90px',
		'height':'90px',
		'position':'relative',
		'top':'-250px',
		'left':'640px',
});
}
function ganarJuego(){
	$('nav#boxes button').attr('disabled', 'disabled');
}
});
