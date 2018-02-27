<?php

function get_header() {
	include ($_SERVER['DOCUMENT_ROOT'] . '/php/meta_data.php');

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
		<link rel="stylesheet" href="/css/style.css">
		<link rel="icon" type="image/PNG" href="/favicon.png">
		<meta name="description" content="<?php echo $meta_info[$page]['description']; ?>" />
		<title><?php echo $meta_info[$page]['title']; ?></title>
	</head>
	<?php 
	$urls = explode('/', $cur_url);
	$type = ""; 
	if (($page == 'portfolio') or ($page == 'en_portfolio')) { $type = 'main-portfolio'; echo '<body>'; } 
	else { echo '<body style="overflow: hidden; ">'; } 
		if($urls[2] != "") { $case_name = $urls[2]; }
		?>
		
		<div class="main-inner <?php echo $type; ?> <?php echo $case_name;?>">
			<?php 
			
			switch ($urls[1]) {
				case 'en':include ($_SERVER['DOCUMENT_ROOT'] . '/modules/header-en.php');break;
				default:include ($_SERVER['DOCUMENT_ROOT'] . '/modules/header.php');break;
			}
			if ($page == 'portfolio') { } else { include ($_SERVER['DOCUMENT_ROOT'] . '/modules/paralax.php'); }
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
			<!-- Yandex.Metrika counter -->
			<script type="text/javascript" >
				(function (d, w, c) {
					(w[c] = w[c] || []).push(function() {
						try {
							w.yaCounter47769340 = new Ya.Metrika({
								id:47769340,
								clickmap:true,
								trackLinks:true,
								accurateTrackBounce:true,
								webvisor:true
							});
						} catch(e) { }
					});

					var n = d.getElementsByTagName("script")[0],
					s = d.createElement("script"),
					f = function () { n.parentNode.insertBefore(s, n); };
					s.type = "text/javascript";
					s.async = true;
					s.src = "https://mc.yandex.ru/metrika/watch.js";

					if (w.opera == "[object Opera]") {
						d.addEventListener("DOMContentLoaded", f, false);
					} else { f(); }
				})(document, window, "yandex_metrika_callbacks");
			</script>
			<noscript><div><img src="https://mc.yandex.ru/watch/47769340" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
			<!-- /Yandex.Metrika counter -->
		</div>
	</body>
	</html>
	<?php
}