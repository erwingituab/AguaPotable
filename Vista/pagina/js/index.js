$(document).ready(function(){
	$('.menu2 li:has(ul)').click(function(e){
		e.preventDefault();
		if($(this).hasClass('activado')){
			$(this).removeClass('activado');
			$(this).children('ul').slideUp();
		}else{
			$('.menu2 li ul').slideUp();
			$('.menu2 li').removeClass('activado');
			$(this).addClass('activado');
			$(this).children('ul').slideDown();
		}
	});
	$('.btn-menu').click(function(){
		$('.contenedor-menu .menu').slideToggle();
	});
	$(window).resize(function(){
		if($(document).width() > 480){
			$('.contenedor-menu .menu').css({'display':'block'});
		}
		if($(document).width() < 480){
			$('.contenedor-menu .menu').css({'display':'none'});
			$('.menu li ul').slideUp();
			$('.menu li').removeClass('activado');
		}
	});
	$('.bt-menu').click(function(e){
		e.preventDefault();
		if($(this).hasClass('activado')){
			$('.contenedor-menu .menu').slideUp();
			$(this).removeClass('activado');
		}else{
			$('.contenedor-menu .menu').slideDown();
			$(this).addClass('activado');
		}
		
	});
});