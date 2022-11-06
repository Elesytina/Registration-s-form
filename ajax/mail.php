<?php
$email=$_POST['email'];
$name=$_POST['name'];
$lastName=$_POST['lastName'];

$subject="=?utf-8?B?".base64_encode("Message from syte")."?=";
$headers="From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8";
$success=mail("e.sytina@ya.ru", $subject, $name, $headers);
echo $success;
?>
