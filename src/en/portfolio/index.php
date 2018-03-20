<?php include ($_SERVER['DOCUMENT_ROOT'] . '/php/functions.php'); ?>

<?php get_header(); ?>

<section class="portfolio__wrapper">
	<div class="container">
		<h1 class="portfolio__title">PORTFOLIO</h1>
		<div class="portfolio__tag-wrapper">
			<a href="/en/dev/websitedev.php" class="portfolio__tag">Website development</a>
			<a href="/en/dev/seo.php" class="portfolio__tag">SEO</a>
			<a href="/en/dev/smm.php" class="portfolio__tag">SMM</a>
			<a href="/en/dev/marketing.php" class="portfolio__tag">Web-marketing</a>
		</div>

		<div class="portfolio__item-wrapper">
			<a href="/portfolio/negabarite/" class="portfolio-card portfolio-card--wide portfolio-card--negabarit">
				<p class="portfolio-card__title">Road construction machinery</p>
			</a>
			<a href="http://lco.expert/" class="portfolio-card portfolio-card--ico_expert" target="_blank">
				<p class="portfolio-card__title">News and articles about crypto currency</p>
			</a>
			<a href="http://yri.st/" class="portfolio-card portfolio-card--uri" target="_blank">
				<p class="portfolio-card__title">Lawyer and accounting services</p>
			</a>

			<a href="/portfolio/merkata/" class="portfolio-card portfolio-card--merkata">
				<p class="portfolio-card__title"">Online cash-machine</p>
			</a>
			<a href="http://narod-hoz.ru/" class="portfolio-card portfolio-card--wide  portfolio-card--peregnoj" target="_blank">
				<p class="portfolio-card__title">How to sale non-internet product</p>
			</a>
			
		</div>
	</div>
</section>

<?php get_footer(); ?>
