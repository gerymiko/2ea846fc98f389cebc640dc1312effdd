<?php

	$db_handle = pg_connect("host=localhost dbname=sendmail user=postgres password=123");
	if ($db_handle) {
		echo 'Connection attempt succeeded.';
	} else {
		echo 'Connection attempt failed.';
	}

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
	
	$from = "iamsender@odeo.tech";
	$to = "iamreceiver@odeo.tech";

	$mail->setFrom($from);
	$mail->addAddress($to);
	$subjects = $mail->Subject = 'Thanks for choosing Me!';

	// $mail->isHTML(TRUE);
	$mails = $mail->Body = 'Lorem ipsum Dolor';

	$query = pg_query($db_handle, "INSERT  INTO tblmail(sender, receiver, body, subject) VALUES ('$from','$to','$mails','$subjects');");
	
	if ($query == true) {
		if(!$mail->send()){
		    echo 'Message could not be sent.';
		    echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
		    echo 'Message has been sent';
		}
	} else {
		echo "error";
	}
	pg_close($db_handle);