<?php

function get_header() {
	?>
	<!DOCTYPE html>
	<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700&amp;subset=cyrillic" rel="stylesheet">
		<link rel="stylesheet" href="/css/style.css?<?php echo date(U);?>">
		<title>Студия KWeb - дизайн и разработка сайтов, маркетинг, мобильные приложения, чат-боты, SEO, SMM</title>
	</head>
	<body>
		<?php include ($_SERVER['DOCUMENT_ROOT'] . '/modules/header.php'); ?>
		<?php include ($_SERVER['DOCUMENT_ROOT'] . '/modules/paralax.php'); ?>
		<?php
	}

	function get_footer() {
		?>
		<footer class="page-footer">
			<div class="container page-footer__inner">
				<a href="#" class="page-footer__text">info@kweb.studio</a>
				<div class="page-footer__copyright">
					<a href="/privacy_policy/" class="page-footer__link">Политика конфиденциальности</a>
					<p class="page-footer__text">© 2018 KWEB. Все права защищены</p>
				</div>
			</div>
		</footer>

		<script src='/js/script.min.js?<?php echo date(U);?>'></script>
	</body>
	</html>
	<?php
}