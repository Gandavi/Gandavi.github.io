<?php

if (isset($_POST['firstName'])) {$firstName = $_POST['firstName'];}
if (isset($_POST['lastName'])) {$lastName = $_POST['lastName'];}
if (isset($_POST['email'])) {$email = $_POST['email'];}
if (isset($_POST['Address'])) {$Address = $_POST['Address'];}
if (isset($_POST['Address_two'])) {$Address_two = $_POST['Address_two'];}
if (isset($_POST['country'])) {$country = $_POST['country'];}
if (isset($_POST['state'])) {$state = $_POST['state'];}
if (isset($_POST['state_1'])) {$state_1 = $_POST['state_1'];}
if (isset($_POST['state_2'])) {$state_2 = $_POST['state_2'];}
if (isset($_POST['state_3'])) {$state_3 = $_POST['state_3'];}
if (isset($_POST['state_4'])) {$state_4 = $_POST['state_4'];}
$myaddres  = "daniil.shtokolov@yandex.ru"; 

$mes = "Заказ обратного письма\nИмя: $firstName\nФамилия: $lastName\nЭлектронная почта: $email\nПервый физический адрес: $Address\nВторой физический адрес: $Address_two\nСтрана: $country\nОбласть,Штат: $state\nThe first service: $state_1\nThe second service: $state_2\nThe third service: $state_3\nThe fourth service: $state_4";
$sub='Заказ';
$email='StudioBellino';
$send = mail ($myaddres,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");
ini_set('short_open_tag', 'On');
header('Refresh: 3; URL=index.html');
?>
<!--Only demo tag--><!DOCTYPE html><!--/Only demo tag-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="css/registration.css">
<div class="container-fluid">
<div class="offset-md-4 col-md-4 offset-sm-3 col-sm-6">
<div class="form-container">
<h2 class="title">Thank you for leaving a request</h2>
<p>We will contact you as soon as possible</p>
<script type="text/javascript">
setTimeout('location.replace("/index.html")', 5000);
</script> 
</div>
</div>
</div>