<?php include ($_SERVER['DOCUMENT_ROOT'] . '/php/functions.php'); ?>

<?php get_header(); ?>

	<section class="main">
		<div class="container main__inner">
			<div class="main__block">
				<h1 class="main__title main__title--small">У Вас есть проект,  которому нужны  инвестиции?<br>Оставьте заявку на проведение ICO</h1>
				<form action="/php/feedback_script.php" method="post" class="feedback-form">
					<input type="text" class="feedback-form__input" name="yourName" placeholder="Ваше имя" size="30" maxlength="50">
					<input type="text" class="feedback-form__input" name="yourMail" placeholder="Ваш e-mail" size="30" maxlength="50" required>
					<input type="text" class="feedback-form__input" name="phoneNumber" placeholder="Ваш контактный телефон" id="phone" required>
					<p class="feedback-form__text">Заполняя данную форму Вы принимаете условия <a href="/privacy_policy/" class="">Политики конфиденциальности</a><br> в том числе в части обработки и использования персональных данных</p>
					<span class="main__btn"><input type="submit" class="feedback-form__submit main__btn" value="Отправить заявку"></span>
				</form>
			</div>

		</div>
	</section>

<?php get_footer(); ?>
