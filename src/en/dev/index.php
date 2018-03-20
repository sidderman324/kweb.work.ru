<?php include ($_SERVER['DOCUMENT_ROOT'] . '/php/functions.php'); ?>

<?php get_header(); ?>

<?php include ($_SERVER['DOCUMENT_ROOT'] . '/modules/paralax.php'); ?>

<section class="main">
	<div class="container main__inner">
		<div class="main__block main__block--wide">
			<h1 class="main__title main__title--small">Do you have some project that you want to be done?<br>Just contact us by form below</h1>
			<form action="/php/feedback_script.php" method="post" class="feedback-form feedback-form--wide" id="form_send">
				<span class="feedback-form__input-wrapper">
					<span class="feedback-form__bgr"></span>
					<span class="feedback-form__marker"></span>
					<input type="text" class="feedback-form__input feedback-form__input--hidden" name="serviceType" placeholder="Check service from list" required readonly >
					<ul class="feedback-form__list">
						<li class="feedback-form__item"> Website Design</li>
						<li class="feedback-form__item"> Website Development</li>
						<li class="feedback-form__item"> Internet Marketing</li>
						<li class="feedback-form__item"> iOS/Android App</li>
						<li class="feedback-form__item"> Chat-bots</li>
						<li class="feedback-form__item"> SEO</li>
						<li class="feedback-form__item"> SMM</li>
					</ul>
				</span>
				<input type="text" class="feedback-form__input" name="yourName" placeholder="your Name">
				<input type="email" class="feedback-form__input" name="yourMail" placeholder="your e-mail" required>
				<p class="feedback-form__text">By submitting that form you automatically accept <a href="/privacy_policy/" class="">confidentiality policy</a><br> You also agree to that your personal data may be transferred to and stored in a country that is not a member of the European Union or part of the European Economic Area</p>
				<span class="main__btn"><input type="submit" class="feedback-form__submit main__btn" value="Submit form"></span>
			</form>
		</div>

	</div>
</section>

<?php get_footer(); ?>
