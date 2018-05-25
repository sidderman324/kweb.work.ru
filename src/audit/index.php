<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>Заявка</title>

    

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700&amp;subset=cyrillic" rel="stylesheet">

	<link rel="stylesheet" href="/css/style.css?v=78654664">



</head>

<body>

   <?php

    

    $email = $_GET['email'];

    date_default_timezone_set('Europe/Moscow');

    $data = date("Y-m-d H:i:s");

    $timestamp = time();



    // Подключение к базе данных

    $link = mysqli_connect("127.0.0.1", "root", "Ftb49aAfbKVfXNA", "kweb");

    

    if(isset($_GET['email'])){

        $query ="INSERT INTO `audit`(`email`, `unix_time`, `data`) VALUES ('$email','$timestamp','$data')";

        $res = mysqli_query($link, $query);

    }

    

    if(isset($_POST['phone']) && isset($_POST['email'])){

    $phone = $_POST['phone'];

    $email = $_POST['email'];

    $query ="UPDATE `audit` SET `cell`= '$phone' WHERE `email`='$email'";

    $res = mysqli_query($link, $query);



    }

    

    mysqli_close($link);

    ?>



	<div class="main-inner main-inner--paralax">



		<?php include ($_SERVER['DOCUMENT_ROOT'] . '/modules/header.php'); ?>



		<?php include ($_SERVER['DOCUMENT_ROOT'] . '/modules/paralax.php'); ?>



		<section class="main">

			<div class="container main__inner">

				<div class="main__block main__block--wide">

					<h1 class="main__title main__title--small">Мы приняли вашу заявку на аудит!</h1>

					<p>Наш менеджер свяжется с вами.</p>

					<p>Для быстрой обработки заявки оставьте телефон для связи</p>

					

					<form action="https://kweb.studio/audit/" method="post" class="feedback-form feedback-form--wide" id="form_send">

						<input type="text" class="feedback-form__input" name="phone" placeholder="Ваш контактный телефон" id="phone" required>

						<input type="hidden" name="email" value="<?=$email?>">
                        <input type="hidden" name="mark" value="audit">

						<p class="feedback-form__text">Заполняя данную форму Вы принимаете условия <a href="/privacy_policy/" class="">Политики конфиденциальности</a><br> в том числе в части обработки и использования персональных данных</p>

						<span class="main__btn"><input type="submit" class="feedback-form__submit main__btn" value="Спасибо"></span>

					</form>

				</div>



			</div>

		</section>



		<?php include ($_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'); ?>



    

</body>

</html>  