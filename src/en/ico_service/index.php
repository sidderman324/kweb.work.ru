<?php include ($_SERVER['DOCUMENT_ROOT'] . '/php/functions.php'); ?>

<?php get_header(); ?>

<?php include ($_SERVER['DOCUMENT_ROOT'] . '/modules/paralax.php'); ?>

	<section class="main">
		<div class="container main__inner">
			<div class="main__block main__block--wide">
				<h1 class="main__title main__title--small">Do you have a project that needs investments?<br>Be welcome to leave a request for ICO</h1>
				<form action="/php/feedback_script.php" method="post" class="feedback-form feedback-form--wide" id="form_send">
					<input type="text" class="feedback-form__input" name="yourName" placeholder="your Name" size="30" maxlength="50">
					<input type="email" class="feedback-form__input" name="yourMail" placeholder="your e-mail" size="30" maxlength="50" required>
					<input type="text" class="feedback-form__input" name="phoneNumber" placeholder="your contact phone" id="phone" required>
					<p class="feedback-form__text">By submitting that form you automatically accept <a href="/privacy_policy/" class="">confidentiality policy</a><br> You also agree to that your personal data may be transferred to and stored in a country that is not a member of the European Union or part of the European Economic Area</p>
					<span class="main__btn"><input type="submit" class="feedback-form__submit main__btn" value="Submit form"></span>
				</form>
			</div>

		</div>
	</section>

<?php get_footer(); ?>
