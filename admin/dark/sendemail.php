<?php
if(isset($_POST['sendemail'])){
    require  'phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;

    $mail->Host ='smtp.gmail.com';
    $mail->Port=587;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='tls';
    $mail->Username='booking@chromavisionsstudios.com';
    $mail->Password='Ilovefer@ri2019';

    $mail->setFrom('booking@chromavisionsstudios.com','Chroma Vision');
    $mail->addAddress($_POST['email']);
    $mail->addReplyTo('booking@chromavisionsstudios.com');

    $mail->isHTML(true);
    $mail->Subject='Chroma Vision Photography';
    $mail->Body = $_POST['message'];

    if(!$mail->send()){
        header('location:index.php?emailNotSent');
        exit();
    }else{
        header('location:index.php?emailsent');
        exit();

    }
}




?>