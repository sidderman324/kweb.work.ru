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

		<a href="/ch/" class="logo">
			<img src="/img/kweb_logo_black.png" alt="" class="logo__img">
		</a>

		<nav class="main-menu">
			<ul class="main-menu__list">
				<li class="main-menu__item <?php echo $service; ?>"><a class="main-menu__link main-menu__link--hidden">服务</a>
					<ul class="submenu">
						<li class="submenu__item"><a href="/ch/ico_service/" class="submenu__link">ICO 咨询服务</a></li>
						<li class="submenu__item"><a href="/ch/web_service/" class="submenu__link">网页服务</a></li>
					</ul>
				</li>
				<li class="main-menu__item <?php echo $dev; ?>"><a class="main-menu__link main-menu__link--hidden">网站开发</a>
					<ul class="submenu">
						<li class="submenu__item"><a href="/ch/dev/websitedev/" class="submenu__link">网站开发</a></li>
						<li class="submenu__item"><a href="/ch/dev/seo/" class="submenu__link">SEO 网站推广</a></li>
						<li class="submenu__item"><a href="/ch/dev/smm/" class="submenu__link">SMM и SMO</a></li>
						<li class="submenu__item"><a href="/ch/dev/marketing/" class="submenu__link">网络营销</a></li>
					</ul>
				</li>
				<li class="main-menu__item <?php echo $portfolio; ?>"><a href="/ch/portfolio/" class="main-menu__link">案例展示</a>
				</li>
				<li class="main-menu__item <?php echo $team; ?>"><a href="/ch/team/" class="main-menu__link">关于我们</a></li>
				<li class="main-menu__item <?php echo $contacts; ?>"><a href="/ch/contacts/" class="main-menu__link">联系方式</a></li>
			</ul>
		</nav>

		<a href="tel:+79002538787" class="page-header__phone">8 900 253 87 87</a>

		<a href="/en/" class="page-header__lang-select page-header__lang-select--eng">English / </a>
		<a href="/" class="page-header__lang-select page-header__lang-select--rus">Русский</a>

		<div class="page-header__burger-wrapper">
			<span class="page-header__burger"></span>
		</div>

		<span class="page-header__strip"></span>
	</div>
</header>
