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
			X = event.accelerationIncludingGravity.x.toFixed(0);  
			Y = event.accelerationIncludingGravity.y.toFixed(0);
			var parX = Number(X) / 15 + 50;
			var parY = Number(Y) + 90;
				// jQuery('.click').delay(300).text('X: '+parX+'  Y: '+parY);
				jQuery('.paralax').css({"background-position-x": parX + "%", "background-position-y": parY + "%"})
			}


		}


	});


