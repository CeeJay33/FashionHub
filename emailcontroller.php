<?php
    require_once 'vendor/autoload.php';
    require_once 'config.php';

    // Create the Transport
    $transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
      ->setUsername(EMAIL)
      ->setPassword(PASSWORD);
    
    // Create the Mailer using your created Transport
    $mailer = new Swift_Mailer($transport);
    
   
    function sendVerificationEmail($email){
         // Create a message
         global $mailer;

         $body = "<!DOCTYPE html>
        <html lang=\"en\">
        <head>
            <meta charset=\"UTF-8\">
            <title>Email</title>
        </head>
        <body>
<div class=\"wrapper\">
    <p>
        Dear Valid Customer, Your OTP code is: {$_SESSION['otp']};
        Thank You for Choosing Fashconn!
    </p>
</div>
</body>
</html>";

    $message = (new Swift_Message('Email Verification'))
    ->setFrom([EMAIL])
    ->setTo([$email])
    ->setBody($body, 'text/html');
  
  // Send the message
  $result = $mailer->send($message);
    }
?>