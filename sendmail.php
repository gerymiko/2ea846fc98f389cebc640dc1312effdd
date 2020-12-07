<?php

	use PHPMailer\PHPMailer\PHPMailer;
	require_once './vendor/autoload.php';

	$mail = new PHPMailer();

	$mail->isSMTP();
	$mail->Host = 'smtp.mailtrap.io';
	$mail->SMTPAuth = true;
	$mail->Username = '49c4e7d9ca4610';
	$mail->Password = '45f1cbf019d706';
	$mail->SMTPSecure = 'tls';
	$mail->Port = 2525;

	$mail->setFrom('hahaha@odeo.tech', 'Your Company');
	$mail->addAddress('me@gmail.com', 'Me');
	$mail->Subject = 'Thanks for choosing Me!';

	$mail->isHTML(TRUE);
	$mail->Body = '<html>Lorem <br>ipsum.</br> Dolor.</html>';
	$mail->AltBody = 'Sit amet.';

	if(!$mail->send()){
	    echo 'Message could not be sent.';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
	    echo 'Message has been sent';
	}