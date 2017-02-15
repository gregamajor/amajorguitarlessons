<?php

include __DIR__ . "/KcMoVars.php";

$subject = ' AMGL/'. $city . ' Email Only Contact Form'; // Subject of your email
$to = 'tae@amajor.net';  //Recipient's or Your E-mail


$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= "From: " . $_REQUEST['email'] . "\r\n"; // Sender's E-mail
$headers .= 'Content-type: text/plain; charset=iso-8859-1' . "\r\n";

$message .= 'Email:
' . $_REQUEST['email'];

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
