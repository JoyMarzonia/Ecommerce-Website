<?php

use PHPMailer\PHPMailer\PHPMailer; //actual phpmailer lib
use PHPMailer\PHPMailer\Exception; //for error handling

require '../vendor/autoload.php'; //loads the dependencies you downloaded

//Sender
$email_sender = 'oggayInk@gmail.com'; //this should an existing email acct.
$email_password = 'oggayInk27'; //password of your email_sender
$from_email = "oggayInk@gmail.com"; //alias of sender
$from_name = "Oggay Ink"; //name of sender

//Receiver
$to_email = "jeffrey.ang111@gmail.com";
$to_name = "Jeffrey";
$mail_subject = "Oggay Ink Order#1234";
$mail_body = '<p>Your order has been received and is being processed.</p>';

//Sending the email part
$mail = new PHPMailer(true);
try {
	//Settings
	$mail->SMTPDebug = 4; //level of debug messaging 4 is lowest, 1 is highest
	$mail->isSMTP(); //make sures to use SMTP to mail. (Simple Mail Transfer Protocol)
	$mail->SMTPOptions = array( //custom connection options 
		'ssl' => array(
			'verify_peer' => false,
			'verify_peer_name' => false,
			'allow_self_signed' => true
		)
	);
	$mail->SMTPAuth = true; //if you going to use SMTP authentication
	$mail->SMTPSecure = 'tls'; //Enables TLS (transport layer security) encryption, 'ssl' is also accepted here
	$mail->Host = 'smtp.gmail.com'; //smtp host of gmail
	$mail->Port = 587; //This is the default mail submission port.

	//Sender
	$mail->Username = $email_sender;
	$mail->Password = $email_password;
	$mail->setFrom($from_email, $from_name); //sets the alias of sender

	//Receiver
	$mail->addAddress($to_email, $to_name); //sets the receiver mail and how to call receiver

	//Actual email
	$mail->isHTML(true); //reads the html syntax
	$mail->Subject = $mail_subject;
	$mail->Body = $mail_body;

	//Sending email
	$mail->send();

} catch (Exception $error){
	echo 'Message couldnt be sent. Mailer Error: ' . $mail->ErrorInfo;
}