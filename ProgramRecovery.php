<?php
    session_start();
    error_reporting(0); // Turn off error reporting
    ini_set('display_errors', 0); // Turn off displaying errors
    // Rest of your PHP code
    include_once "config.php";
    require 'vendor/autoload.php'; 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

    $email = mysqli_real_escape_string($conn, $_POST['email']);

    if(!empty($email)){
        $sql = mysqli_query($conn, "SELECT * FROM userc WHERE email = '{$email}'");
        if (mysqli_num_rows($sql) > 0) {
           $row = mysqli_fetch_assoc($sql);
           $_SESSION['unique_id'] = $row['unique_id'];
           
           if ($sql) {
                
            $mail = new PHPMailer(true);
            try {
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com'; 
                $mail->SMTPAuth = true;
                $mail->Username = 'Chrismiracle911@gmail.com'; 
                $mail->Password = 'yszvmhdiyrrujllc'; 
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;

                $mail->setFrom('Chrismiracle911@gmail.com', 'Jay');
                $mail->addAddress($email, $fname . ' ' . $lname);
                $mail->Subject = 'Link to For Password reset';
                $mail->Body = "Dear Valid Customer, please click the link to create a new password: <a href='https://www.example.com/wapm64/www/Finalpp/newpass.php'>Create new password</a>";


                $mail->send();

                $sql3 = mysqli_query($conn, "SELECT * FROM userc WHERE email = '{$email}'");
                if (mysqli_num_rows($sql3) > 0) {
                    $row = mysqli_fetch_assoc($sql3);
                    echo "success";
                } else {
                    echo "Something went wrong";
                }
            } catch (Exception $e) {
                echo "Email could not be sent. Error: {$mail->ErrorInfo}";
            }
        }
        }else{
                echo "Email does not Exist";
            }
    
    }else{
        echo "input fields required";
    }
?>