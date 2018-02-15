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
		function onOrientationChange(e) {
			var parX = Math.round(e.gamma);
			var parY = Math.round(e.beta);
			var x = 50 + parX / 6;
			var y = 80 + parY / 5;
			// jQuery('#click').text('parX: '+ x + 'parY: '+ parY);
			jQuery('.paralax').css('background-position', x + '% ' + y + '%');
		}
		window.addEventListener('deviceorientation', onOrientationChange);
	}


	jQuery('.page-header__burger-wrapper').on('click', function() {
		jQuery(this).find('.page-header__burger').toggleClass('page-header__burger--active');
		jQuery('.main-menu').slideToggle(300);
	});
	jQuery('.main').on('click',function(){
		jQuery('.page-header__burger--active').removeClass('page-header__burger--active');
		jQuery('.main-menu').fadeOut(300);
	})

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




