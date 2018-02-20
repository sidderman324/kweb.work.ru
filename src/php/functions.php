<?php

function get_header() {
	$meta_info = array(
		"main" => array(
			"title" => "Студия KWeb - дизайн и разработка сайтов, маркетинг, мобильные приложения, чат-боты, SEO, SMM",
			"description" => "Дизайн и разработка сайтов, маркетинг, мобильные приложения, чат-боты, SEO, SMM",
			"head_title" => "Дизайн и разработка сайтов, маркетинг, мобильные приложения, чат-боты, SEO, SMM"
		),
		"ico_service" => array(
			"title" => "Реализация ICO, инвестиции",
			"description" => "Реализация ICO, инвестиции",
			"h1" => ""
		),
		"web_service" => array(
			"title" => "Дизайн и разработка сайтов, маркетинг, мобильные приложения, чат-боты, SEO, SMM",
			"description" => "Оставьте заявку на реализацию веб услуг",
			"h1" => ""
		),
		"privacy_policy" => array(
			"title" => "Политика конфиденциальности",
			"description" => "Политика конфиденциальности",
			"h1" => "Политика конфиденциальности"
		),
		"en_main" => array(
			"title" => "KWeb Studio - website design and development, marketing, mobile applications, chat-bots, SEO, SMM",
			"description" => "KWeb Studio - website design and development, marketing, mobile applications, chat-bots, SEO, SMM",
			"h1" => ""
		),
		"en_ico_service" => array(
			"title" => "Realization of ICO, investments",
			"description" => "Realization of ICO, investments",
			"h1" => ""
		),
		"en_web_service" => array(
			"title" => "Design and development of sites, marketing, mobile applications, chat-bots, SEO, SMM",
			"description" => "Design and development of sites, marketing, mobile applications, chat-bots, SEO, SMM",
			"h1" => ""
		),
		"en_privacy_policy" => array(
			"title" => "Privacy policy",
			"description" => "Privacy policy",
			"h1" => ""
		)
	);
	$cur_url = $_SERVER['REQUEST_URI'];
	
	switch ($cur_url) {
		case '/': $page = "main"; break;
		case '/ico_service/': $page = "ico_service"; break;
		case '/web_service/': $page = "web_service"; break;
		case '/privacy_policy/': $page = "privacy_policy"; break;
		case '/en/': $page = "en_main"; break;
		case '/en/ico_service/': $page = "en_ico_service"; break;
		case '/en/web_service/': $page = "en_web_service"; break;
		case '/en/privacy_policy/': $page = "en_privacy_policy"; break;
		default: break;
	}
	// echo $cur_url;
	// echo $meta_info['main']['title'];;
	?>
	<!DOCTYPE html>
	<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700&amp;subset=cyrillic" rel="stylesheet">
		<link rel="stylesheet" href="/css/style.min.css">
		<meta name="description" content="<?php echo $meta_info[$page]['description']; ?>" />
		<title><?php echo $meta_info[$page]['title']; ?></title>
	</head>
	<body>
		<?php 
		$urls = explode('/', $cur_url);
		switch ($urls[1]) {
			case 'en':include ($_SERVER['DOCUMENT_ROOT'] . '/modules/header-en.php');break;
			default:include ($_SERVER['DOCUMENT_ROOT'] . '/modules/header.php');break;
		}
		include ($_SERVER['DOCUMENT_ROOT'] . '/modules/paralax.php'); ?>
		<?php
	}

	function get_footer() {
		$cur_url = $_SERVER['REQUEST_URI'];
		$urls = explode('/', $cur_url);
		switch ($urls[1]) {
			case 'en':include ($_SERVER['DOCUMENT_ROOT'] . '/modules/footer-en.php');break;
			default:include ($_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php');break;
		}
		?>
		<div class="feedback-form__result">
			<span class="feedback-form__close"></span>
			<p class="feedback-form__result-text">Ваша заявка принята, с Вами свяжется наш менеджер</p>
		</div>

		<script src='/js/script.min.js'></script>
	</body>
	</html>
	<?php
}