<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = "sjkim@jkrobotics.kr";
$subject = "Mail from website";

$headers = "From: ".$name. "\r\n" .
$txt = "You have received an email from ".$name ."\r\nEmail: " .$email ."\r\n
Message: ". $message;

if($email!=NULL) {
  mail($to, $subject, $txt, $headers);
}

header('Location: Thankyou.html');

?>