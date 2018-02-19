<?php

if (isset($_POST["yourName"])) { $person_name = $_POST["yourName"];}
if (isset($_POST["yourMail"])) { $person_mail = $_POST["yourMail"];}
if (isset($_POST["phoneNumber"])) { $person_phone = $_POST["phoneNumber"];}
if (isset($_POST["serviceType"])) { $service_type = $_POST["serviceType"];}


$mail_to = "syd.phoenix@gmail.com";
$mail_from = "KWeb.ru" . "\n";
if($person_phone != "") {
	$mail_body = "Имя: " . $person_name . "\n" .
	"E-mail: " . $person_mail . "\n" .
	"Телефон: " . $person_phone;
} else {
	$mail_body = "Имя: " . $person_name . "\n" .
	"E-mail: " . $person_mail . "\n" .
	"Список услуг: " . $service_type;
}

$result = mail ($mail_to, $mail_from, $mail_body);

// if (!$result) { echo "<p>Сообщение не отправлено</p>"; }
// else {
// 	echo "<script>location.replace('/');</script>";
// 	exit();
// }


?>