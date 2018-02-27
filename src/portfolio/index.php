<?php include ($_SERVER['DOCUMENT_ROOT'] . '/php/functions.php'); ?>

<?php get_header(); ?>

<section class="portfolio">
	<div class="container">
		<h1 class="portfolio__title">Портфолио</h1>
		<div class="portfolio__tag-wrapper">
			<a href="#" class="portfolio__tag">Транспорт и логистика</a>
			<a href="#" class="portfolio__tag">Масс-медиа</a>
			<a href="#" class="portfolio__tag">Бухгалтерия</a>
			<a href="#" class="portfolio__tag">Юристы</a>
		</div>

		<div class="portfolio__item-wrapper">
			<a href="/portfolio/negabarite/" class="portfolio-card portfolio-card--wide portfolio-card--negabarit">
				<p class="portfolio-card__title">Сайт по аренде дорожно-строительной техники</p>
			</a>
			<a href="#" class="portfolio-card portfolio-card--ico_expert">
				<p class="portfolio-card__title">Медиа-сайт о криптовалюте</p>
			</a>
			<a href="#" class="portfolio-card portfolio-card--uri">
				<p class="portfolio-card__title">Сайт для юридических и бухгалтерских услуг</p>
			</a>
		</div>
	</div>
</section>

<?php get_footer(); ?>
