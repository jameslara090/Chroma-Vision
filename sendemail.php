<?php
    $msg = "";
	use PHPMailer\PHPMailer\PHPMailer;
	include_once "PHPMailer/PHPMailer.php";
	include_once "PHPMailer/Exception.php";
	include_once "PHPMailer/SMTP.php";

	if (isset($_POST['sendemail'])) {
		//$subject = $_POST['subject'];
		$email = $_POST['email'];
		$message = $_POST['message'];

		

		$mail = new PHPMailer();

		//if we want to send via SMTP
		$mail->Host = "smtp.gmail.com";
		//$mail->isSMTP();
		$mail->SMTPAuth = true;
		$mail->Username = "james.lee.lara@gmail.com";
		$mail->Password = "informationtechnology";
		$mail->SMTPSecure = "ssl"; //TLS
		$mail->Port =80;// 465; //587

		$mail->addAddress('Chroma Vision Photography');
		$mail->setFrom($email);
//$mail->Subject = $subject;
		$mail->isHTML(true);
		$mail->Body = $message;
		$mail->addAttachment($file);

		if ($mail->send()){
			
			$msg = "Your email has been sent, thank you!";
		}
		   
		else{
			$msg = "Please try again!";

		}
		   

		unlink($file);
	}
	
?>







