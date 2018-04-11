<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700&amp;subset=cyrillic" rel="stylesheet">
	<link rel="stylesheet" href="/css/style.css?v=78654664">
	<link rel="icon" type="image/PNG" href="/favicon.png">
	<meta name="description" content="Design and development of sites, marketing, mobile applications, chat-bots, SEO, SMM" />
	<title>Design and development of sites, marketing, mobile applications, chat-bots, SEO, SMM</title>
</head>


<body>

	<div class="main-inner">

		<?php include ($_SERVER['DOCUMENT_ROOT'] . '/modules/header-en.php'); ?>

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

		<?php include ($_SERVER['DOCUMENT_ROOT'] . '/modules/footer-en.php'); ?>

	</body>
	</html>