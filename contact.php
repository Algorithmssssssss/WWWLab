<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['text'];
$formcontent="From: $name \n Message: $message";
$recipient = "alex_kim46@yahoo.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>