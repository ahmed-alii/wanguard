<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
// Load Composer's autoloader
require 'vendor/autoload.php';

include_once "../serverside/functions.php";

$func=new Functions();

//$settings=$func->getSettings();

function sendemailsmtp($to="",$msg="",$subject=""){


    $mail = new PHPMailer(true);
    try {

        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;               // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP

        $mail->Host       = 'smtp.hostinger.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'test@shahab01.com';                     // SMTP username
        $mail->Password   = 'Testing123!';                       // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 465;
        // $mail->Port       = 587;


        $mail->CharSet = 'UTF-8';

//        $mail->setFrom($settings[0]['email'], $settings[0]['site_name']);
        $mail->setFrom('test@shahab01.com', 'Test notification');
        //Recipients

        $mail->addAddress($to);

        $mail->isHTML(true);                                  // Set email format to
        $mail->Subject = $subject;
        $mail->Body    = $msg;

        $mail->send();

    } catch (Exception $e) {
//        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }


}

//sendemailsmtp();


?>