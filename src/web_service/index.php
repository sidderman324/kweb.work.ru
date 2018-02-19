<?php include ($_SERVER['DOCUMENT_ROOT'] . '/php/functions.php'); ?>

<?php get_header(); ?>

<section class="main">
	<div class="container main__inner">
		<div class="main__block">
			<h1 class="main__title main__title--small">У Вас есть проект,  которому нужны  инвестиции?<br>Оставьте заявку на проведение ICO</h1>
			<form action="/php/feedback_script.php" method="post" class="feedback-form">
				<span class="feedback-form__input-wrapper">
					<span class="feedback-form__bgr"></span>
					<span class="feedback-form__marker"></span>
					<input type="text" class="feedback-form__input feedback-form__input--hidden" name="serviceType" placeholder="Выберите услуги из списка">
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
				<input type="text" class="feedback-form__input" name="yourMail" placeholder="Ваш e-mail" required>
				<p class="feedback-form__text">Заполняя данную форму Вы принимаете условия <a href="/privacy_policy/" class="">Политики конфиденциальности</a><br> в том числе в части обработки и использования персональных данных</p>
				<span class="main__btn"><input type="submit" class="feedback-form__submit main__btn" value="Отправить заявку"></span>
			</form>
		</div>

	</div>
</section>

<?php get_footer(); ?>
