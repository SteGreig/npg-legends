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
});

$('.modal-video__close').click(function() {
	$('.modal-video').removeClass('active');
});