$(document).ready(function(){

	$("#phone").mask("+7 (999) 999-9999");

	jQuery('body').mousemove(function(e){
		var x = (0.5 + e.pageX / jQuery(window).width() * 5) - 168;
		var y = (100 + e.pageY / jQuery(window).height() * 20);
		jQuery(this).find('.paralax_layer0').css('background-position-x', x + 'px');

		var x = (0.5 + e.pageX / jQuery(window).width() * 30) - 168;
		var y = (0.5 + e.pageY / jQuery(window).height() * 10) - 117;
		jQuery(this).find('.paralax_layer1').css('background-position-x', x + 'px');

		var x = (0.5 + e.pageX / jQuery(window).width() * 60) - 168;
		var y = (0.5 + e.pageY / jQuery(window).height() * 5) - 117;
		jQuery(this).find('.paralax_layer2').css('background-position-x', x + 'px');

		var x = (e.pageX / jQuery(window).width() * 120 - 20) - 100;
		var y = (0.5 + e.pageY / jQuery(window).height() * 20) - 50;
		jQuery(this).find('.paralax_layer3').css('background-position-x', x + 'px');
	});

	if (jQuery(window).width() < 740) {
		function onOrientationChange(e) {
			var parX = Math.round(e.gamma);
			var parY = Math.round(e.beta);
			var x = 50 + parX / 25;
			var y = 80 + parY / 15;
			// jQuery('#click').text('parX: '+ x + 'parY: '+ parY);
			jQuery('.paralax').css('background-position', x + '% ' + y + '%');
		}
		window.addEventListener('deviceorientation', onOrientationChange);
	}


	jQuery('.page-header__burger-wrapper').on('click', function() {
		jQuery(this).find('.page-header__burger').toggleClass('page-header__burger--active');
		jQuery('body').toggleClass('fixed');
		jQuery('.main-menu').slideToggle(300);
	});


	function menuHideShow() {
		var windowsWidth = jQuery(window).width();
		if (windowsWidth > 740) {
			jQuery('.main-menu').fadeIn(300);
			jQuery('.page-header__burger').removeClass('page-header__burger--active');
			jQuery('.page-header__strip').fadeIn(200);
			var activePos = ((jQuery('.main-menu').position().left + jQuery('.active').position().left + jQuery('.active').width()) - parseInt(jQuery('.page-header__strip').css('left')));
			jQuery('.page-header__strip').css('width', activePos);
			if(jQuery('.main-inner').hasClass('main-portfolio')){
				jQuery('.case__strip').css('width', '53px');
				var borderPos = jQuery('.case__strip:last').offset().top - jQuery('.page-header').height() - 47;
				jQuery('.case__border').css('height', borderPos);
			}
		} if (windowsWidth < 740) {
			jQuery('.main').on('click',function(){
				jQuery('.page-header__burger--active').removeClass('page-header__burger--active');
				jQuery('.main-menu').fadeOut(300);
			});
			jQuery('.page-header__strip').fadeOut(200);
		}
	};

	jQuery(document).ready(menuHideShow);
	jQuery(document).scroll(menuHideShow);
	jQuery(window).resize(menuHideShow);

	// jQuery('.feedback-form__input-wrapper').on('click', function(){
	// 	jQuery('.feedback-form__list').fadeIn(200);
	// 	jQuery('.feedback-form__marker').addClass('feedback-form__marker--active');
	// });

	function service_check() {
		var serviceList = [];
		jQuery('.feedback-form__item--active').each(function(indx, element){
			serviceList.push($(element).text());
		});
		jQuery('.feedback-form__input--hidden').attr('value', serviceList);
		console.log(serviceList);
	};

	jQuery('.feedback-form__input--hidden').on('click', function(){
		jQuery('.feedback-form__list').slideToggle(200);
		jQuery('.feedback-form__marker').toggleClass('feedback-form__marker--active');
		jQuery('.feedback-form__bgr').slideToggle(200);
		service_check();
	});
	jQuery('.feedback-form__bgr').on('click', function(){
		jQuery('.feedback-form__bgr').fadeOut(200);
		jQuery('.feedback-form__list').fadeOut(200);
		jQuery('.feedback-form__marker').removeClass('feedback-form__marker--active');
		service_check();
	});
	jQuery('.feedback-form__item').on('click', function(){
		jQuery(this).toggleClass('feedback-form__item--active');
		service_check();
	});

	$(function(){
		$('#form_send').submit(function(e){
			/* отменяем стандартное действие при отправке формы */
			e.preventDefault();
			/* берем из формы метод передачи данных */
			var m_method=$(this).attr('method');
			/* получаем адрес скрипта на сервере, куда нужно отправить форму */
			var m_action=$(this).attr('action');
			/* получаем данные, введенные пользователем в формате input1=value1&input2=value2..., */
			/* то есть в стандартном формате передачи данных формы */
			var m_data=$(this).serialize();
			$.ajax({
				type: m_method,
				url: m_action,
				data: m_data,
				success: function(){
					jQuery('.feedback-form__result').fadeIn(200);
					jQuery('.feedback-form__result-text').text('Ваша заявка принята, с Вами свяжется наш менеджер');
					jQuery('.feedback-form__marker').removeClass('feedback-form__marker--active');
					document.getElementById('form_send').reset();
				},
				error: function(){
					jQuery('.feedback-form__result').fadeIn(200);
					jQuery('.feedback-form__result-text').text('Ваша заявка не отправлена - попробуйте снова');
					document.getElementById('form_send').reset();
				}
			});
		});
	});

	jQuery('.feedback-form__close').on('click', function(){
		jQuery('.feedback-form__result').fadeOut(200);
	});
	jQuery('.main').on('click', function(){
		jQuery('.feedback-form__result').fadeOut(200);
	});




});
