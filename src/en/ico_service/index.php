<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700&amp;subset=cyrillic" rel="stylesheet">
	<link rel="stylesheet" href="/css/style.css?v=78654664">
	<link rel="icon" type="image/PNG" href="/favicon.png">
	<meta name="description" content="Realization of ICO, investments" />
	<title>Realization of ICO, investments</title>
</head>


<body>

	<div class="main-inner main-inner--paralax">

		<?php include ($_SERVER['DOCUMENT_ROOT'] . '/modules/header-en.php'); ?>

		<?php include ($_SERVER['DOCUMENT_ROOT'] . '/modules/paralax.php'); ?>

		<section class="main">
			<div class="container main__inner">
				<div class="main__block main__block--wide">
					<h1 class="main__title main__title--small">Do you have a project that needs investments?<br>Welcome to leave a request for an ICO</h1>
					<form action="/php/feedback_script.php" method="post" class="feedback-form feedback-form--wide" id="form_send">
						<input type="text" class="feedback-form__input" name="yourName" placeholder="Name" size="30" maxlength="50">
						<input type="email" class="feedback-form__input" name="yourMail" placeholder="E-mail" size="30" maxlength="50" required>
						<input type="text" class="feedback-form__input" name="phoneNumber" placeholder="Contact number" id="phone" required>
						<p class="feedback-form__text">By submitting this form you automatically accept our <a href="/privacy_policy/" class="">confidentiality policy</a><br> You also agree that your personal data may be transferred to and stored in a country that is not a member of the European Union or part of the European Economic Area.</p>
						<span class="main__btn"><input type="submit" class="feedback-form__submit main__btn" value="Submit form"></span>
					</form>
				</div>

			</div>
		</section>

		<?php include ($_SERVER['DOCUMENT_ROOT'] . '/modules/footer-en.php'); ?>

	</body>
	</html>
