//MOVIMIENTO EVENTOS
function movimientoEventos() {
  var lFollowX = 0,
    lFollowY = 0,
    x = 0,
    y = 0,
    friction = 1 / 30;

  function moveBackground() {
    x += (lFollowX - x) * friction;
    y += (lFollowY - y) * friction;
    
    translate = 'translate(' + x + 'px, ' + y + 'px) scale(1.1)';

    $('.bg-eventos').css({
      '-webit-transform': translate,
      '-moz-transform': translate,
      'transform': translate
    });

    window.requestAnimationFrame(moveBackground);
  }

  $(window).on('mousemove click', function(e) {

    var lMouseX = Math.max(-100, Math.min(100, $(window).width() / 2 - e.clientX));
    var lMouseY = Math.max(-100, Math.min(100, $(window).height() / 2 - e.clientY));
    lFollowX = (20 * lMouseX) / 100; // 100 : 12 = lMouxeX : lFollow
    lFollowY = (10 * lMouseY) / 100;

  });

  moveBackground();

}

function stickyHeader() {
    var altura = $('body').offset().top;

    $(window).on('scroll', function(){
        if ( $(window).scrollTop() > altura ){
            $('header').addClass('sticky'),
            $('.logo').addClass('sticky');
        } else {
            $('header').removeClass('sticky'),
            $('.logo').removeClass('sticky');                     
        }
    });
}

//MENU DESPLEGABLE MOBILE
function desplegableMobile() {
  var contador = 1;

  $('.hamburger').click(function() {
    if (contador == 1) {
      $('nav').addClass('active');
      $('.bar').addClass('active');
      contador = 0;
    } else {
      contador = 1;
      $('nav').removeClass('active');
      $('.bar').removeClass('active');
    }
  });

//CERRAR MENU DESPLEGABLE MOBILE
  $('nav ul li a').click(function() {
    if ($('nav').hasClass('active')){
      contador = 1;
      $('nav').removeClass('active');
      $('.bar').removeClass('active');
    }
  });
}

//ARRASTRE A SECCIONES
function arrastreSecciones() {
  jQuery(document).on('click', 'nav ul .anchor a', function(event){
    event.preventDefault();

    jQuery('html, body').animate({
        scrollTop: jQuery( jQuery.attr(this, 'href') ).offset().top
    }, 500),
    setTimeout(function() {
        $('.menu.sticky').slideUp("slow");
    }, 1000);
});
}

$(document).ready(function () {
    movimientoEventos();
    stickyHeader();
    desplegableMobile();
    arrastreSecciones();
});