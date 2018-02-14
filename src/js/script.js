$(document).ready(function(){

	jQuery('body').mousemove(function(e){
		var x = (0.5 + e.pageX / jQuery(window).width() * 5) - 168;
		var y = (100 + e.pageY / jQuery(window).height() * 20);
		jQuery(this).find('.paralax_layer0').css('background-position-x', x + 'px');

		var x = (0.5 + e.pageX / jQuery(window).width() * 30) - 168;
		var y = (0.5 + e.pageY / jQuery(window).height() * 10) - 117;
		jQuery(this).find('.paralax_layer1').css('background-position-x', x + 'px');

		var x = (0.5 + e.pageX / jQuery(window).width() * 60) - 168;
		var y = (0.5 + e.pageY / jQuery(window).height() * 5) - 117;
		jQuery(this).find('.paralax_layer2').css('background-position', x + 'px ' + y + 'px');

		var x = (e.pageX / jQuery(window).width() * 120 - 20) - 100;
		var y = (0.5 + e.pageY / jQuery(window).height() * 20) - 50;
		jQuery(this).find('.paralax_layer3').css('background-position', x + 'px ' + y + 'px');


	});

	if (jQuery(window).width() < 768) {
		
		window.ondevicemotion = function(event) {
			X = event.accelerationIncludingGravity.x;  
			Y = event.accelerationIncludingGravity.y;
			var parX = Number(X) / 15 + 50;
			var parY = Number(Y) + 90;
			jQuery('.paralax').css({"background-position-x": parX + "%", "background-position-y": parY + "%"})
		}
	}
	jQuery('.page-header__burger-wrapper').on('click', function() {
		jQuery(this).find('.page-header__burger').toggleClass('page-header__burger--active');
		jQuery('.main-menu').slideToggle(300);
		jQuery('.submenu').fadeOut(300);
		jQuery('.main-menu__marker').removeClass('main-menu__marker--active');
	});

	jQuery('.main-menu__marker').on('click', function() {
		jQuery(this).siblings('.submenu').slideToggle(300);
		jQuery(this).toggleClass('main-menu__marker--active');
	});

	function menuHideShow() {
		var windowsWidth = jQuery(window).width();
		if (windowsWidth > 768) {
			jQuery('.main-menu').fadeIn(300);
			jQuery('.page-header__burger').removeClass('page-header__burger--active');
		}
	};

	jQuery(document).ready(menuHideShow);
	jQuery(document).scroll(menuHideShow);
	jQuery(window).resize(menuHideShow);
});




