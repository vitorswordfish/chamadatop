$(function () {
  $(document).scroll(function () {
  	  var $place = $(".texto_capa2");
	  var $nav = $(".fixed-top");
	  var $nav_logo = $(".logomarca");
	  var $nav_toggle = $(".navbar-toggler-icon");
	  var $nav_elemento = $(".navbar-toggler-icon");
	  var $nav_nav = $(".navbar-yea");
	  $nav.toggleClass('scrolled', $(this).scrollTop() > $place.height());
	  $nav_logo.toggleClass('scrolled', $(this).scrollTop() > $place.height());
	  $nav_toggle.toggleClass('scrolled', $(this).scrollTop() > $place.height());
	  $nav_elemento.toggleClass('scrolled', $(this).scrollTop() > $place.height());
	  $nav_nav.toggleClass('scrolled', $(this).scrollTop() > $place.height());
	});
});