<?php

if (isset($_POST['firstName'])) {$firstName = $_POST['firstName'];}
if (isset($_POST['lastName'])) {$lastName = $_POST['lastName'];}
if (isset($_POST['middleName'])) {$middleName = $_POST['middleName'];}
if (isset($_POST['email'])) {$email = $_POST['email'];}
if (isset($_POST['Specialization'])) {$Specialization = $_POST['Specialization'];}
if (isset($_POST['country'])) {$country = $_POST['country'];}
if (isset($_POST['state'])) {$state = $_POST['state'];}
$myaddres  = "daniil.shtokolov@yandex.ru"; 
$mes = "Request for cooperation\nFirst name: $firstName\nLast name: $lastName\nMiddle name: $middleName\nE-mail: $email\nSpecialization: $Specialization\nCountry: $country\nState: $state";
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