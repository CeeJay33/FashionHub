<?php
session_start();
include "config.php";
$unique_id = $_SESSION['uniqued'];

// Retrieve form data
$experience = $_POST['input1'];
$phoneNumber = $_POST['input2'];
$category = $_POST['input3'];
$address = $_POST['input4'];

// Perform database query to insert data (use prepared statements for security)

// Example query (you need to replace this with your actual database insertion logic)
$sql = "UPDATE userd SET experience = '$experience', phone_number = '$phoneNumber', category = '$category', address = '$address' WHERE uniqued = '$unique_id'";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
