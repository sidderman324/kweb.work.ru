<?php
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
	"portfolio" => array(
		"title" => "Портфолио KWeb Studio",
		"description" => "Портфолио KWeb Studio",
		"h1" => ""
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
	),
	"en_portfolio" => array(
		"title" => "Portfolio KWeb Studio",
		"description" => "Portfolio KWeb Studio",
		"h1" => ""
	),
);

$cur_url = $_SERVER['REQUEST_URI'];

switch ($cur_url) {
	case '/': $page = "main"; break;
	case '/ico_service/': $page = "ico_service"; break;
	case '/web_service/': $page = "web_service"; break;
	case '/privacy_policy/': $page = "privacy_policy"; break;
	case '/portfolio/': $page = "portfolio"; break;
	case '/en/': $page = "en_main"; break;
	case '/en/ico_service/': $page = "en_ico_service"; break;
	case '/en/web_service/': $page = "en_web_service"; break;
	case '/en/privacy_policy/': $page = "en_privacy_policy"; break;
	case '/en/portfolio/': $page = "en_portfolio"; break;
	default: break;
}

?>