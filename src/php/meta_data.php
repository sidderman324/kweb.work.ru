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
	"team" => array(
		"title" => "Команда специалистов KWeb Studio",
		"description" => "Команда специалистов KWeb Studio",
		"h1" => ""
	),
	"contacts" => array(
		"title" => "Контактная информация и адрес KWeb Studio",
		"description" => "Команда специалистов KWeb Studio",
		"h1" => ""
	),
	

	"dev_marketing" => array(
		"title" => "Услуги по маркетингу KWeb Studio",
		"description" => "Команда специалистов KWeb Studio",
		"h1" => ""
	),
	"dev_seo" => array(
		"title" => "Услуги по SEO и продвижению сайтов KWeb Studio",
		"description" => "Команда специалистов KWeb Studio",
		"h1" => ""
	),
	"dev_smm" => array(
		"title" => "Услуги по ведению SMM KWeb Studio",
		"description" => "Команда специалистов KWeb Studio",
		"h1" => ""
	),
	"dev_websitedev" => array(
		"title" => "Услуги по разработке сайтов ",
		"description" => "Команда специалистов KWeb Studio",
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
	"en_team" => array(
		"title" => "Team KWeb Studio",
		"description" => "Team KWeb Studio",
		"h1" => ""
	),
	"en_contacts" => array(
		"title" => "Contact info KWeb Studio",
		"description" => "Team KWeb Studio",
		"h1" => ""
	),
);

$service = "";
$portfolio = "";
$team = "";
$contacts = "";

$cur_url = $_SERVER['REQUEST_URI'];
$urls = explode('/', $cur_url);
// echo $cur_url;

switch ($urls[1]) {
	case '': {$page = "main";} break;
	case 'ico_service': {$page = "ico_service"; $service = "active"; } break;
	case 'web_service': {$page = "web_service"; $service = "active"; } break;
	case 'privacy_policy': {$page = "privacy_policy";} break;
	case 'portfolio': {$page = "portfolio"; $portfolio = "active"; } break;
	case 'team': {$page = "team"; $team = "active"; } break;
	case 'contacts': {$page = "contacts"; $contacts = "active"; } break;
	default: break;	
}
switch ($cur_url) {
	case '/en/': {$page = "main";} break;
	case '/en/ico_service/': {$page = "en_ico_service"; $service = "active"; } break;
	case '/en/web_service/': {$page = "en_web_service"; $service = "active"; } break;
	case '/en/privacy_policy/': {$page = "en_privacy_policy";} break;
	case '/en/portfolio/': {$page = "en_portfolio"; $portfolio = "active"; } break;
	case '/en/team/': {$page = "en_team"; $team = "active"; } break;
	case '/en/contacts/': {$page = "en_contacts"; $contacts = "active"; } break;
	default: break;	
}
switch ($cur_url) {
	case '/dev/': {$dev = "dev";} break;
	case '/en/ico_service/': {$page = "dev"; $dev = "active"; } break;

	default: break;	
}

?>