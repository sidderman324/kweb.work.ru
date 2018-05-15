<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700&amp;subset=cyrillic" rel="stylesheet">
	<link rel="stylesheet" href="/css/style.css?v=78654664">
	<link rel="icon" type="image/PNG" href="/favicon.png">
	<meta name="description" content="Design and development of sites, marketing, mobile applications, chat-bots, SEO, SMM" />
	<title>Design and development of sites, marketing, mobile applications, chat-bots, SEO, SMM</title>
</head>


<body>

	<div class="main-inner main-inner--paralax">

		<?php include ($_SERVER['DOCUMENT_ROOT'] . '/modules/header-ch.php'); ?>

		<?php include ($_SERVER['DOCUMENT_ROOT'] . '/modules/paralax.php'); ?>

		<section class="main">
			<div class="container main__inner">
				<div class="main__block main__block--wide">
					<h1 class="main__title main__title--small">网络工作室 有需要完成的项目吗？<br>请填写下面的表格与我们联系</h1>
					<form action="/php/feedback_script.php" method="post" class="feedback-form feedback-form--wide" id="form_send">
						<span class="feedback-form__input-wrapper">
							<span class="feedback-form__bgr"></span>
							<span class="feedback-form__marker"></span>
							<input type="text" class="feedback-form__input feedback-form__input--hidden" name="serviceType" placeholder="列表中请选择服务" required readonly >
							<ul class="feedback-form__list">
								<li class="feedback-form__item"> 网站设计</li>
								<li class="feedback-form__item"> 网站开发</li>
								<li class="feedback-form__item"> 网络营销</li>
								<li class="feedback-form__item"> iOS/Android App</li>
								<li class="feedback-form__item"> 聊天机器人</li>
								<li class="feedback-form__item"> SEO</li>
								<li class="feedback-form__item"> SMM</li>
							</ul>
						</span>
						<input type="text" class="feedback-form__input" name="yourName" placeholder="姓名">
						<input type="email" class="feedback-form__input" name="yourMail" placeholder="邮箱" required>
						<p class="feedback-form__text">通过提交此表格，您将自动接受我们的隐私政策<br>您也同意您的个人资料可能会转移并存储在不属于欧盟成员国或欧洲经济区的国家。</p>
						<span class="main__btn"><input type="submit" class="feedback-form__submit main__btn" value="提交"></span>
					</form>
				</div>

			</div>
		</section>

		<?php include ($_SERVER['DOCUMENT_ROOT'] . '/modules/footer-ch.php'); ?>

	</body>
	</html>
