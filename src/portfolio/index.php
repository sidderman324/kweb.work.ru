<?php include ($_SERVER['DOCUMENT_ROOT'] . '/php/functions.php'); ?>

<?php get_header(); ?>

<section class="portfolio__wrapper">
	<div class="container">
		<h1 class="portfolio__title">Портфолио</h1>
		<div class="portfolio__tag-wrapper">
			<a href="/dev/websitedev.php" class="portfolio__tag">Разработка сайтов</a>
			<a href="/dev/seo.php" class="portfolio__tag">SEO продвижение сайтов</a>
			<a href="/dev/smm.php" class="portfolio__tag">SMM</a>
			<a href="/dev/marketing.php" class="portfolio__tag">Интернет-маркетинг</a>
		</div>

		<div class="portfolio__item-wrapper">
			<a href="/portfolio/negabarite/" class="portfolio-card portfolio-card--wide portfolio-card--negabarit">
				<p class="portfolio-card__title">Сайт по аренде дорожно-строительной техники</p>
			</a>
			<a href="http://lco.expert/" class="portfolio-card portfolio-card--ico_expert" target="_blank">
				<p class="portfolio-card__title">Медиа-сайт о криптовалюте</p>
			</a>
			<a href="#" class="portfolio-card portfolio-card--uri" target="_blank">
				<p class="portfolio-card__title">Сайт для юридических и бухгалтерских услуг</p>
			</a>

			<a href="/portfolio/merkata/" class="portfolio-card portfolio-card--merkata">
				<p class="portfolio-card__title"">Онлайн касса для Вашего бизнеса</p>
			</a>
			<a href="http://narod-hoz.ru/" class="portfolio-card portfolio-card--wide  portfolio-card--peregnoj" target="_blank">
				<p class="portfolio-card__title">Как продавать перегной в интернете?</p>
			</a>
			
		</div>
	</div>
</section>

<?php get_footer(); ?>
