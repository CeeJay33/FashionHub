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

$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$Cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);
$Check = mysqli_real_escape_string($conn, $_POST['check']);
$Verification_status = '0';

if (!empty($fname) && !empty($lname) && !empty($email) && !empty($password) && !empty($Cpassword) && !empty($Check)) {
    if ($password == $Cpassword) {
        $sql = mysqli_query($conn, "SELECT email FROM userc WHERE email = '{$email}'");
        if (mysqli_num_rows($sql) > 0) {
            echo "$email ~ Already Exists";
        } else {
            $rand_id = rand(time(), 10000000);
            $otp = mt_rand(1111, 9999);
            $sql2 = mysqli_query($conn, "INSERT INTO userc (unique_id, fname, lname, email, password, otp) VALUES ({$rand_id}, '{$fname}', '{$lname}', '{$email}', '{$password}', '{$otp }')");
            if ($sql2) {
                
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
                    $mail->Subject = 'OTP Verification';
                    $mail->Body = 'Dear Valid Customer Your OTP code is: ' . $otp;

                    $mail->send();

                    $sql3 = mysqli_query($conn, "SELECT * FROM userc WHERE email = '{$email}'");
                    if (mysqli_num_rows($sql3) > 0) {
                        $row = mysqli_fetch_assoc($sql3);
                        $_SESSION['unique_id'] = $row['unique_id'];
                        $_SESSION['otp'] = $row['otp'];
                        echo "success";
                    } else {
                        echo "Something went wrong";
                    }
                } catch (Exception $e) {
                    echo "Email could not be sent. Error: {$mail->ErrorInfo}";
                }
            }
        }

    } else {
        echo "Confirm Password and password does not match";
    }
} else {
    echo "All input fields are required";
}



?>
