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
				<li class="main-menu__item <?php echo $service; ?>"><a class="main-menu__link main-menu__link--hidden">Services</a>
					<ul class="submenu">
						<li class="submenu__item"><a href="/en/ico_service/" class="submenu__link">ICO consulting services</a></li>
						<li class="submenu__item"><a href="/en/web_service/" class="submenu__link">Web services</a></li>
					</ul>
				</li>
				<li class="main-menu__item <?php echo $dev; ?>"><a class="main-menu__link main-menu__link--hidden">Web development</a>
					<ul class="submenu">
						<li class="submenu__item"><a href="/en/dev/websitedev/" class="submenu__link">Website creation and development</a></li>
						<li class="submenu__item"><a href="/en/dev/seo/" class="submenu__link">Website promotion</a></li>
						<li class="submenu__item"><a href="/en/dev/smm/" class="submenu__link">SMM и SMO</a></li>
						<li class="submenu__item"><a href="/en/dev/marketing/" class="submenu__link">Internet Marketing</a></li>
					</ul>
				</li>
				<li class="main-menu__item <?php echo $portfolio; ?>"><a href="/en/portfolio/" class="main-menu__link">Portfolio</a>
				</li>
				<li class="main-menu__item <?php echo $team; ?>"><a href="/en/team/" class="main-menu__link">About us</a></li>
				<li class="main-menu__item <?php echo $contacts; ?>"><a href="/en/contacts/" class="main-menu__link">Contact</a></li>
			</ul>
		</nav>

		<a href="tel:+79002538787" class="page-header__phone">8 900 253 87 87</a>

		<a href="/" class="page-header__lang-select page-header__lang-select--rus">Русский </a>
		<!-- <a href="/ch/" class="page-header__lang-select page-header__lang-select--ch">中文</a> -->

		<div class="page-header__burger-wrapper">
			<span class="page-header__burger"></span>
		</div>

		<span class="page-header__strip"></span>
	</div>
</header>
