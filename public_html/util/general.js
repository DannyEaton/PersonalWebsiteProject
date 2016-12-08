/**
 * Created by Daniel Eaton on 12/6/2016.
 *
 */

$('#services-header').click(function() {
	window.scrollTo(0,$('#services-container').position().top)
	$('#service-image-1').addClass("animated fadeInLeft");
	$('#service-image-2').addClass("animated fadeInDown");
	$('#service-image-3').addClass("animated fadeInRight");
});


$('#design-header').click(function() {
	window.scrollTo(0,$('#design-container').position().top)
	$('#design1').delay(500).addClass("animated zoomIn");
	$('#design2').delay(500).addClass("animated zoomIn");
	$('#design3').delay(700).addClass("animated zoomIn");
	$('#design4').delay(700).addClass("animated zoomIn");
	$('#design5').delay(800).addClass("animated zoomIn");
	$('#design6').delay(800).addClass("animated zoomIn");
});

$('#form-header').click(function() {
	window.scrollTo(0,$('#form-container').position().top)
	$('form').addClass("animated flipInX");
});