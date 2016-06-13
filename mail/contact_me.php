<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['phone']) 		||
   empty($_POST['city']) 		||
   empty($_POST['message']))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$message = $_POST['message'];
	
// Create the email and send the message
$to = 'sherlockholmes4@yandex.ua'; // Email
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nPhone: $phone\n\nCity: $city\n\nMessage:\n$message";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
mail($to,$email_subject,$email_body,$headers);
return true;			
?>