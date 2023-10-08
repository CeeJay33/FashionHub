<?php 
session_start();
error_reporting(0); // Turn off error reporting
ini_set('display_errors', 0); // Turn off displaying errors
// Rest of your PHP code
include_once "config.php";
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if(!empty($email) && !empty($password)){
    $sql = mysqli_query($conn, "SELECT * FROM userc WHERE email = '{$email}' AND password = '{$password}'");
        if (mysqli_num_rows($sql) > 0) {
           $row = mysqli_fetch_assoc($sql);
           $_SESSION['unique_id'] = $row['unique_id'];
                echo "success"; // Send a success response to the client 
        }else{
                echo "Email or Password is incorrect";
            }
        }
    else{
        echo "All input fields are required";
    }

?>