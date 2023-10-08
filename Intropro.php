<?php
include_once 'config.php';
session_start();
error_reporting(0); // Turn off error reporting
ini_set('display_errors', 0); // Turn off displaying errors
$Country = mysqli_real_escape_string($conn, $_POST['myCountry']);
$Address = mysqli_real_escape_string($conn, $_POST['address']);
$Phone = mysqli_real_escape_string($conn, $_POST['phone']);
$Experience = mysqli_real_escape_string($conn, $_POST['cloth']);
$Bag = mysqli_real_escape_string($conn, $_POST['bag']);


if(!empty($Country) && !empty($Address) && !empty($Phone) && !empty($Experience) && !empty($Bag)){
    $sql = mysqli_query($conn, "SELECT phone from userd WHERE phone = '{$Phone}'");
    if(mysqli_num_rows($sql) > 0){
        echo 'Phone number Already exist';
    }else{
        $sql2 = mysqli_query($conn, "INSERT INTO userd (address, phone, Country, Experience, Category1,) values ({$Address}, '{$Phone}', '{$Country}', '{$Experience}', '{$Bag}')");
    }
}




?>