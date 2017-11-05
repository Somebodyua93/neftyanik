<?php

$recepient = "somebodyua93@gmail.com";
//$recepient = "vladimir.babenko@list.ru";
//$recepient = "qwrtp111@gmail.com";

$sitename = "жк-нефтяник-тюмень";

$name = trim($_GET["name"]);
$email = trim($_GET["email"]);
$tel = trim($_GET["tel"]);
$age = trim($_GET["age"]);
$job = trim($_GET["job"]);
$position = trim($_GET["position"]);
$maritalstatus = trim($_GET["maritalstatus"]);
$contribution = trim($_GET["contribution"]);
$income = trim($_GET["income"]);

$pagetitle = "Новая заявка с сайта \"$sitename\"";
$message = "Имя: $name \nПочта: $email \nТелефон: $tel \nВозраст: $age \nМесто работы: $job \nДолжность: $position \nСемейное положение: $maritalstatus \nРазрем взноса: $contribution \nСреднемесячный доход: $income";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");



?>