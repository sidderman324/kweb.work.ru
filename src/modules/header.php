<?php

$service = "";
$portfolio = "";
$team = "";
$contacts = "";

$cur_url = $_SERVER['REQUEST_URI'];
$urls = explode('/', $cur_url);

switch ($urls[1]) {
	case '': {$page = "main";} break;
	case 'ico_service': {$page = "ico_service"; $service = "active"; } break;
	case 'web_service': {$page = "web_service"; $service = "active"; } break;
	case 'privacy_policy': {$page = "privacy_policy";} break;
	case 'portfolio': {$page = "portfolio"; $portfolio = "active"; } break;
	case 'team': {$page = "team"; $team = "active"; } break;
	case 'dev': {$page = "dev"; $dev = "active"; } break;
	case 'contacts': {$page = "contacts"; $contacts = "active"; } break;
	default: break;
}
?>

<header class="page-header">
	<div class="container page-header__inner">

		<a href="/" class="logo">
			<img src="/img/kweb_logo_black.png" alt="" class="logo__img">
		</a>

		<nav class="main-menu">
			<ul class="main-menu__list">
				<li class="main-menu__item <?php echo $service; ?>"><a class="main-menu__link main-menu__link--hidden">Услуги</a>
					<ul class="submenu">
						<li class="submenu__item"><a href="/ico_service/" class="submenu__link">Организация ICO</a></li>
						<li class="submenu__item"><a href="/web_service/" class="submenu__link">Веб-услуги</a></li>
					</ul>
				</li>
				<li class="main-menu__item <?php echo $dev; ?>"><a class="main-menu__link main-menu__link--hidden">Веб разработка</a>
					<ul class="submenu">
						<li class="submenu__item"><a href="/dev/websitedev/" class="submenu__link">Разработка сайтов и сервисов</a></li>
						<li class="submenu__item"><a href="/dev/landingpage/" class="submenu__link">Создание продающего лендинга</a></li>
						<li class="submenu__item"><a href="/dev/seo/" class="submenu__link">SEO продвижение сайтов</a></li>
						<li class="submenu__item"><a href="/dev/smm/" class="submenu__link">SMM и SMO</a></li>
						<li class="submenu__item"><a href="/dev/marketing/" class="submenu__link">Интернет маркетинг</a></li>
					</ul>
				</li>
				<li class="main-menu__item <?php echo $portfolio; ?>"><a href="/portfolio/" class="main-menu__link">Портфолио</a>
				</li>
				<li class="main-menu__item <?php echo $team; ?>"><a href="/team/" class="main-menu__link">Команда</a></li>
				<li class="main-menu__item <?php echo $contacts; ?>"><a href="/contacts/" class="main-menu__link">Контакты</a></li>
			</ul>
		</nav>

		<a href="tel:+79002538787" class="page-header__phone">8 900 253 87 87</a>

		<a href="/en/" class="page-header__lang-select page-header__lang-select--eng">English </a>
		<!-- <a href="/ch/" class="page-header__lang-select page-header__lang-select--ch">中文</a> -->

		<div class="page-header__burger-wrapper">
			<span class="page-header__burger"></span>
		</div>

		<span class="page-header__strip"></span>
	</div>
</header>
