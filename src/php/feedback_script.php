<?php

if (isset($_POST["yourName"])) { $person_name = $_POST["yourName"];}
if (isset($_POST["yourMail"])) { $person_mail = $_POST["yourMail"];}
if (isset($_POST["phoneNumber"])) { $person_phone = $_POST["phoneNumber"];}

$mail_to = "syd.phoenix@gmail.com";
$mail_from = "KWeb.ru" . "\n";
$mail_body = "Имя: " . $person_name . "\n" .
"E-mail: " . $person_mail . "\n" .
"Телефон: " . $person_phone;

$result = mail ($mail_to, $mail_from, $mail_body);

if (!$result) { echo "<p>Сообщение не отправлено</p><p>Попробовать еще раз: <a href='$previous_page'>Попробовать еще раз...</a></p>"; }
	else {
		// echo "<script>location.replace('/sgh/?param=thanks&good_id=".$item_id."');</script>";
		exit();
	}


	?>