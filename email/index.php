<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once 'vendor/autoload.php';

$mail = new PHPMailer(true);

try{

    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host       ='smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'karinaarciniega49@gmail.com';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Password   = 'hfbqgrzgjctqbgru';
    $mail->Port = '587';

    $mail->setFrom('karinaarciniega49@gmail.com', 'ENVIANDO');
    $mail->addAddress('kasanchez3@outlook.com', 'HOLA'  );
    // $mail->addCC('karina@gmail.com');
    $mail->isHTML(true);
    $mail ->Subject = 'Esta es una prueba';
    $mail->Body    = '<h1>Prueba de correo 2</h>';
    $mail->send();
}
catch(Exception $e)
  {
    echo $mail->ErrorInfo;
  }
