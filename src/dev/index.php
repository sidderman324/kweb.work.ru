<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700&amp;subset=cyrillic" rel="stylesheet">
	<link rel="stylesheet" href="/css/style.css?v=78654664">
	<link rel="icon" type="image/PNG" href="/favicon.png">
	<meta name="description" content="Дизайн и разработка сайтов, маркетинг, мобильные приложения, чат-боты, SEO, SMM" />
	<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter48742856 = new Ya.Metrika({
                    id:48742856,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/48742856" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
	<title>Дизайн и разработка сайтов, маркетинг, мобильные приложения, чат-боты, SEO, SMM</title>
</head>


<body>

	<div class="main-inner">

		<?php include ($_SERVER['DOCUMENT_ROOT'] . '/modules/header.php'); ?>

		<?php include ($_SERVER['DOCUMENT_ROOT'] . '/modules/paralax.php'); ?>

		<section class="main">
			<div class="container main__inner">
				<div class="main__block main__block--wide">
					<h1 class="main__title main__title--small">У Вас есть не реализованный интернет проект?<br>Оставьте заявку на реализацию веб услуг</h1>
					<form action="/php/feedback_script.php" method="post" class="feedback-form feedback-form--wide" id="form_send">
						<span class="feedback-form__input-wrapper">
							<span class="feedback-form__bgr"></span>
							<span class="feedback-form__marker"></span>
							<input type="text" class="feedback-form__input feedback-form__input--hidden" name="serviceType" placeholder="Выберите услуги из списка" required readonly >
							<ul class="feedback-form__list">
								<li class="feedback-form__item"> Дизайн сайтов</li>
								<li class="feedback-form__item"> Разработка сайтов</li>
								<li class="feedback-form__item"> Маркетинг</li>
								<li class="feedback-form__item"> Мобильные приложения</li>
								<li class="feedback-form__item"> Чат-боты</li>
								<li class="feedback-form__item"> SEO</li>
								<li class="feedback-form__item"> SMM</li>
							</ul>
						</span>
						<input type="text" class="feedback-form__input" name="yourName" placeholder="Ваше имя">
						<input type="email" class="feedback-form__input" name="yourMail" placeholder="Ваш e-mail" required>
						<p class="feedback-form__text">Заполняя данную форму Вы принимаете условия <a href="/privacy_policy/" class="">Политики конфиденциальности</a><br> в том числе в части обработки и использования персональных данных</p>
						<span class="main__btn"><input type="submit" class="feedback-form__submit main__btn" value="Отправить заявку"></span>
					</form>
				</div>

			</div>
		</section>

		<?php include ($_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'); ?>

	</body>
	</html>
