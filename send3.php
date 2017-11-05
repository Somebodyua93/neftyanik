<?php

$recepient = "somebodyua93@gmail.com";
//$recepient = "vladimir.babenko@list.ru";
//$recepient = "qwrtp111@gmail.com";

$sitename = "жк-нефтяник-тюмень";

$name = trim($_GET["name"]);
$tel = trim($_GET["tel"]);

$pagetitle = "Новая заявка с сайта \"$sitename\"";
$message = "Имя: $name \nTel: $tel";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");





?>