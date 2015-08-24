$(document).ready(function(){

	// Variables Globales
	$nplayer1 = null;
	$nplayer2 = null;
	$splayer1 = null;
	$splayer2 = null;
	$countslt = 1;
	$btnsbox = $('nav#boxes button');
	$winner = [[0,1,2],[3,4,5],[6,7,8],[0,3,6],[1,4,7],[2,5,8],[0,4,8],[2,4,6]]

// Animacion Inicial
	$('article#error').hide();
	$('section#screen1').hide();
	$('section#screen2').hide();
	$('section#screen3').hide();
	$('section#screen0').animate({'top': '-1000px'},0)
						.animate({'top': '40px'},500)
						.animate({'top': '0px'},200);

	// Activar Simbolo Pantalla 1
	$('main').on('click', 'nav#symbols li:not(.selected)', function(event){
		event.preventDefault();
		$('nav#symbols li').removeClass('active');
		$(this).addClass('active');
	});

	// Activar Modo de juego
	$('main').on('click', 'nav#gamemenu li', function(event){
		event.preventDefault();
		$('nav#gamemenu li').removeClass('activemode1 activemode2');
		if($(this).attr('id') == 'mode1'){
			$(this).addClass('activemode1');
		}else{
			$(this).addClass('activemode2');
		}
	});

	//Validar Datos Pantalla 0
	$('footer').on('click', '#next0', function(event){
		event.preventDefault();
		if($('#screen0 nav#gamemenu li').hasClass('activemode1') || $('#screen0 nav#gamemenu li').hasClass('activemode2')) {

			$('#screen0').animate({'top':'-1000px'},250).hide(250);
		setTimeout(function(){
		$('section#screen1').show().animate({'top': '-1000px'},0)
						   		   .animate({'top': '40px'},500)
								   .animate({'top': '0px'},200);
		$('#screen2 #'+$splayer1).addClass('selected');
	},500);
		}else{
			$('article#error h1').text('Please! select a game mode');
			$('article#error').show();
		}
	});

	//Validar Datos Pantalla 1
	$('footer').on('click', '#next1', function(event){
		event.preventDefault();
		if($('#screen1 #nickname').val().length > 0 && $('#screen1 nav#symbols li').hasClass('active')){
			$nplayer1 = $('#screen1 #nickname').val();
			$splayer1 = $('#screen1 nav#symbols li.active').attr('id');
			$('#screen1').animate({'top':'-1000px'},250).hide(250);
		setTimeout(function(){
		$('section#screen2').show().animate({'top': '-1000px'},0)
						   		   .animate({'top': '40px'},500)
								   .animate({'top': '0px'},200);
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
		$('#screen2').animate({'top':'-1000px'},250).hide(250);

	setTimeout(function(){
	$('section#screen3').show().animate({'top': '-1000px'},0)
									 					 .animate({'top': '40px'},500)
								 					 	 .animate({'top': '0px'},200);
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
		// $(this).css('background', '#2085ac url(imgs/'+$splayer2+'.png) no-repeat center center');
		$(this).css({'background': '#400000 url(imgs/'+$splayer2+'.png) no-repeat center center',
									'background-size': 'contain'});
		$(this).addClass('p2');
		checkGame('p2', $nplayer2);
	}else{
		$('#turno_jug').text($nplayer2);
		//$(this).css('background', '#2085ac url(imgs/'+$splayer1+'.png) no-repeat center center');
		$(this).css({'background': '#400000 url(imgs/'+$splayer1+'.png) no-repeat center center',
									'background-size': 'contain'});
		$(this).addClass('p1');
		checkGame('p1', $nplayer2);
	}
	$(this).addClass('activebox');
	$(this).attr('disabled', 'disabled');
	$countslt++;
});

//Hover de los botones cuando entra
$('#boxes').on('mouseenter', 'button', function(){
		if($countslt%2==0){
			$(this).css({'background': '#400000 url(imgs/'+$splayer2+'.png) no-repeat center center',
										'background-size': 'contain'});
		}else{
			$(this).css({'background': '#400000 url(imgs/'+$splayer1+'.png) no-repeat center center',
										'background-size': 'contain'});
		}
})
// Hover de los Botones cuando sale
$('#boxes').on('mouseleave', 'button', function(){
		if($countslt%2==0){
			$(this).css('background', '#400000');
		}else{
			$(this).css('background', '#400000');
		}
})

function checkGame(sp, np){
	for (var i = 0; i < $winner.length; i++) {
					a = $winner[i][0]
					b = $winner[i][1]
					c = $winner[i][2]

				if($($btnsbox[a]).hasClass(sp) && $($btnsbox[b]).hasClass(sp)){
							if($($btnsbox[b]).hasClass(sp) && $($btnsbox[c]).hasClass(sp)){
								$($btnsbox[a]).css('background-color', '#63121D');
								$($btnsbox[b]).css('background-color', '#63121D');
								$($btnsbox[c]).css('background-color', '#63121D');
								$('article#error h1').text('The winner is: '+' '+np);
								// $('article#winner').show();
								ganadorPlayer(np, sp);
								ganarGame();
			}
		}
	}
}

function ganarGame(){
	$('nav#boxes button').attr('disabled', 'disabled');
}

function ganadorPlayer(np, sp){
	$('article#error').show();
	$('article#error').css('background-image','url(imgs/mount.png)');
	$('article#error h2').text('');
	$('article#error').css({'background-image':'url(imgs/mount.png)','background-color':'rgba(255,255,255, 0.8)'});
	$('article#error h1').css('margin','400px auto');
	$('article#error h2').text('');
}
});
