<?php
$subject = ' AMGL Main Page Hero-Contact Form from ' . $_REQUEST['heroFname'] ; // Subject of your email




$to = 'tae@amajor.net';  //Recipient's or Your E-mail


$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= "From: " . $_REQUEST['heroEmail'] . "\r\n"; // Sender's E-mail
$headers .= 'Content-type: text/plain; charset=iso-8859-1' . "\r\n";

$message .= 'Name: ' . $_REQUEST['heroFname'] . '
';
$message .= 'Email Address: ' . $_REQUEST['heroEmail'] . '
';
$message .= 'Phone Number: ' . $_REQUEST['heroPhone'] . '
';
$message .= 'Message:
' . $_REQUEST['heroUsername'];

if (@mail($to, $subject, $message, $headers))
{
	// Transfer the value 'sent' to ajax function for showing success message.
	echo 'sent';
}
else
{
	// Transfer the value 'failed' to ajax function for showing error message.
	echo 'failed';
}
?>