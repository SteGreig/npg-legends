// function GlobalSetCookie(cname, cvalue, exdays) {
// 	"use strict";
// 	var d = new Date();
// 	d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
// 	var expires = "expires=" + d.toUTCString();
// 	document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
// }


// Video Modal
$('.modal-video').show();

$('.modal-video-trigger').click(function() {
	$(this).parents('.section').find('.modal-video').addClass('active');
	$(this).parents('.section').find('.section--hero__info-modal').addClass('active');
});

$('.modal-video__close').click(function() {
	$('.modal-video').removeClass('active');
	var iframe = $(this).parents('.modal-video').find('iframe')
	$(iframe).attr("src", $(iframe).attr("src"));
	$(iframe).attr("src", $(iframe).attr("data-src"));
});

$('.info-modal__close').click(function() {
	$(this).parent().removeClass('active');
});

$('.direct-video-link').click(function() {
	$(this).parents('.section').find('.section--hero__info-modal').addClass('active');
});


// Delay video link to YouTube on mobile (so we can display message beforehand)
function delay (URL) {
	setTimeout( function() { window.location = URL }, 2000 );
}