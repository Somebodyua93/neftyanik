<?php

$recepient = "somebodyua93@gmail.com";
//$recepient = "vladimir.babenko@list.ru";
//$recepient = "qwrtp111@gmail.com";

$sitename = "жк-нефтяник-тюмень";

$name = trim($_GET["name"]);
$email = trim($_GET["email"]);
$tel = trim($_GET["tel"]);

$pagetitle = "Новая заявка с сайта \"$sitename\"";
$message = "Имя: $name \nПочта: $email \nTel: $tel";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");



?>