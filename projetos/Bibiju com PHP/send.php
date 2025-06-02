<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])){
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'pedro.henrique514888@gmail.com';
    $mail->Password = 'syxr ybqk jqif onin';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('pedro.henrique514888@gmail.com');

    $mail->addAddress('pedro.henrique514888@gmail.com');

    $mail->isHTMl(true);

    $mail->subject = $_POST["subject"];
    $mail->Body = $_POST["message"];

    $mail->send();

    header('location:Contato.php');
}
?>