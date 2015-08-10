var bdy            = document.getElementById('bdy');
var hero           = document.getElementById('hero');
var sky            = document.getElementById('sky');
var gplay          = document.getElementById('gplay');
var men            = document.getElementById('men');
var sky            = document.getElementById('sky');
var right          = document.getElementById('right');
var personaje      = document.getElementById('personaje');
var tit            = document.getElementById('tit');
var big_tit        = document.getElementById('big_tit');
var sup_1          = document.getElementById('sup_1');
var sup_2          = document.getElementById('sup_2');
var salud          = document.getElementById('salud');
var salud1         = document.getElementById('salud1');
var salud2         = document.getElementById('salud2');
var salud4         = document.getElementById('salud4');
var mn             = document.getElementById('mn');
var indica_level   = document.getElementById('indica_level');
var sonido_fondo   = document.getElementById('sonido_fondo');
var level          = document.getElementById('level');

var pl1   = document.getElementById('pl1');
var pl2   = document.getElementById('pl2');
var pl3   = document.getElementById('pl3');
var pl4   = document.getElementById('pl4');
var pl5   = document.getElementById('pl5');
var pl6   = document.getElementById('pl6');
var cont  = 0;

var lifetime = document.getElementById('lifetime');
var second   = document.getElementById('second');


var pos1  = -160;
var pos2  = -160;
var pos3  = -160;
var pos4  =  960;
var pos5  =  960;
var pos6  =  960;
var pos7  =  600;
var post;
var posl;
var level_sig = new Number();

var tcr1;
var tcr2;
var tcr3;
var tcr4;
var tcr5;
var tcr6;

var cr1 = Math.floor(Math.random() * 5) + 1;
var cr2 = Math.floor(Math.random() * 5) + 1;
var cr3 = Math.floor(Math.random() * 5) + 1;
var cr4 = Math.floor(Math.random() * 5) + 1;
var cr5 = Math.floor(Math.random() * 5) + 1;
var cr6 = Math.floor(Math.random() * 5) + 1;

men.style.display = 'block';
sky.style.display = 'none';
right.style.display = 'none';
tit.style.display = 'none';
salud4.style.display = 'none';
level = 1;

mn.onclick = function(){
  men.style.display = 'block';
  sky.style.display = 'none';
  stopGame();
  sound_menu();
  Over();
}
gplay.onclick = function() {
  men.style.display = 'none';
  sky.style.display = 'block';
  sky.style.opacity = '1';
  initGame();
  // sound_menu();
}
personaje.onclick = function(){
  right.style.display = 'block';
  tit.style.display = 'block';
  big_tit.style.display = 'none';
  sound_menu();
}

sup_1.onclick = function(){
  hero.classList.add('hero_2');
  salud.classList.add('log_2');
  salud1.classList.add('log_2');
  salud2.classList.add('log_2');
  salud4.classList.add('log_2');
  sup_1.classList.add('he1');
  sup_2.classList.remove('he2');
  sup_1.style.zIndex = '3';
  sup_2.style.zIndex = '2';
  sky.classList.add('sky_2');
  mn.style.backgroundColor = 'gray';
}
sup_2.onclick = function(){
  hero.classList.add('hero_1');
  salud.classList.add('log_1');
  salud1.classList.add('log_1');
  salud2.classList.add('log_1');
  salud4.classList.add('log_1');
  sup_2.classList.add('he2');
  sup_1.classList.remove('he1');
  sup_2.style.zIndex = '3';
  sup_1.style.zIndex = '2';
  sky.classList.add('sky_1');
}

function initGame() {
  moveSuper();
  planeRandom1();
  planeRandom2();
  planeRandom3();
  //
  planeRandom4();
  planeRandom5();
  planeRandom6();
  activarClock();
  sound();
}
function moveSuper() {
  post = 590;
  posl = 450;
  bdy.onkeyup = function(e) {
      var kcod = e.keyCode;
      if (kcod == 37) {
          if (posl > 40) {
            posl -= 70;
            hero.style.left = posl+'px';
          }
      }
      if (kcod == 38) {
        if (post > 40) {
          post -= 74;
          hero.style.top = post+'px';
          level_sig++;
          // console.log(level);
          }
      }
      if (kcod == 39) {
        if (posl < 860) {
          posl += 70;
          hero.style.left = posl+'px';
        }
      }
      if (kcod == 40) {
        if (post < 590) {
          post += 74;
          hero.style.top = post+'px';
          level_sig--;
          // console.log(level);
        }
      }
      if(level_sig == 8){
        nextLevel();
        level = 2;
      }
      if(level == 2){
        if(hero.offsetTop == 294 && hero.offsetLeft == 800){ // left=730 left=870
          salud4.style.display = 'none';
      }
    }
  }

}

function checkCollision(pl) {
    herotop    = hero.offsetTop;
    heroleft   = hero.offsetLeft;
    heroright  = Number(hero.offsetLeft) + Number(hero.offsetWidth);
    herobottom = Number(hero.offsetTop)  + Number(hero.offsetHeight);

    pltop    = pl.offsetTop;
    plleft   = pl.offsetLeft;
    plright  = Number(pl.offsetLeft) + Number(pl.offsetWidth);
    plbottom = Number(pl.offsetTop)  + Number(pl.offsetHeight);

    if (heroright  > plleft   &&
        heroleft   < plright  &&
        herotop    < plbottom &&
        herobottom > pltop ) {
        dieSuper();
        reset_move();
        }
}

function planeRandom1() {
  pl1.classList.add('plane'+cr1);
  tcr1 = setInterval(animPlane1, 10);
}
function planeRandom2() {
  pl2.classList.add('plane'+cr2);
  tcr2 = setInterval(animPlane2, 20);
}
function planeRandom3() {
  pl3.classList.add('plane'+cr3);
  tcr3 = setInterval(animPlane3, 30);
}
function planeRandom4() {
  pl4.classList.add('plane'+cr4);
  tcr4 = setInterval(animPlane4, 20);
}
function planeRandom5() {
  pl5.classList.add('plane'+cr5);
  tcr5 = setInterval(animPlane5, 15);
}
function planeRandom6() {
  pl6.classList.add('plane'+cr6);
  tcr6 = setInterval(animPlane6, 10);
}

function activarClock(){

  hour = setInterval(clock,1000);
}

function animPlane1() {
  if (pos1 < 960) {
   pos1 += 10;
   pl1.style.left = pos1+'px';
   checkCollision(pl1);
  } else {
    //clearInterval(tcr1);
    pl1.classList.remove('plane1','plane2','plane3','plane4','plane5');
    cr1 = Math.floor(Math.random() * 5) + 1;
    pl1.classList.add('plane'+cr1);
    pos1 = -160;
  }
}
function animPlane2() {
  if (pos2 < 960) {
   pos2 += 10;
   pl2.style.left = pos2+'px';
   checkCollision(pl2);
  } else {
    //clearInterval(tcr2);
    pl2.classList.remove('plane1','plane2','plane3','plane4','plane5');
    cr2 = Math.floor(Math.random() * 5) + 1;
    pl2.classList.add('plane'+cr2);
    pos2 = -160;
  }
}
function animPlane3() {
  if (pos3 < 960) {
   pos3 += 10;
   pl3.style.left = pos3+'px';
   checkCollision(pl3);
  } else {
    //clearInterval(tcr3);
    pl3.classList.remove('plane1','plane2','plane3','plane4','plane5');
    cr3 = Math.floor(Math.random() * 5) + 1;
    pl3.classList.add('plane'+cr3);
    pos3 = -160;
  }
}

function animPlane4() {
  if (pos4 > -160) {
   pos4 -= 10;
   pl4.style.left = pos4+'px';
   checkCollision(pl4);
  } else {
    //clearInterval(tcr4);
    pl4.classList.remove('plane1','plane2','plane3','plane4','plane5');
    cr4 = Math.floor(Math.random() * 5) + 1;
    pl4.classList.add('plane'+cr4);
    pos4 = 960;
  }
}
function animPlane5() {
  if (pos5 > -160) {
   pos5 -= 10;
   pl5.style.left = pos5+'px';
   checkCollision(pl5);
  } else {
    //clearInterval(tcr5);
    pl5.classList.remove('plane1','plane2','plane3','plane4','plane5');
    cr5 = Math.floor(Math.random() * 5) + 1;
    pl5.classList.add('plane'+cr5);
    pos5 = 960;
  }
}
function animPlane6() {
  if (pos6 > -160) {
   pos6 -= 10;
   pl6.style.left = pos6+'px';
   checkCollision(pl6);
  } else {
    //clearInterval(tcr6);
    pl6.classList.remove('plane1','plane2','plane3','plane4','plane5');
    cr6 = Math.floor(Math.random() * 5) + 1;
    pl6.classList.add('plane'+cr6);
    pos6 = 960;
  }
}

function dieSuper(){
  var nhearts  = document.querySelectorAll('li.heart');
  var nh = nhearts.length;
  nh--;
  for (var i = 0; i < nhearts.length; i++) {
    lifetime.removeChild(lifetime.childNodes[0]);
    stopGame();
  }
  if(level === 2 && nh === 1){
    // alert('queda una vida!');
    salud4.style.display = 'block';
  }
  if(nh < 1){
    console.log('Game Over');
    stopGame();
    resetGame();
    var respuesta = prompt('Introduce tu nombre');
  }
}

function stopGame(){
  pos1  = -160;
  pos2  = -160;
  pos3  = -160;
  pos4  =  960;
  pos5  =  960;
  pos6  =  960;

  hero.style.left = "450px";
  hero.style.top  = "590px";

  post = 590;
  posl = 450;
}

function nextLevel(){
  alert('Level 2');
  indica_level.innerHTML = '2';
  stopGame();
  reset_move();
  sound();
}

function resetGame(){
  alert('Game Over');
  window.location.replace('');
}
function reset_move(){
  level_sig = 0;
}
function clock(){
  cont++;
  second.innerHTML = cont+"s";
}
function Over(){
  window.location.replace('');
}
function sound(){
  sonido_fondo.innerHTML = "<audio src='sound/sound_1.mp3' autoplay loop></audio>";
}
function sound_menu(){
  sonido_fondo.innerHTML = "<audio src='sound/sound_menu.mp3' autoplay></audio>";
}
