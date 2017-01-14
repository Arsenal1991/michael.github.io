<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$call = $_POST['call'];
$message = $_POST['message'];


$formcontent=" From: $name \n Phone: $phone \n Call Back: $call \n Message: $message";
$recipient = "michaelrdonnelly@hotmail.com@here.com";
$subject = "SnackShack contact Form";
$mailheader = "From: $email \r\n";


mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";

?>