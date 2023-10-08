<?php
session_start();
include_once "config.php"; // Include your database configuration
$unique_id = $_SESSION['unique_id'];
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["role"])) {
        $role = $conn->real_escape_string($_POST["role"]);
        

        // Perform database update here
        // Example using mysqli:
        $sql = "UPDATE users SET role = '$role' WHERE unique_id = '$unique_id'";

        if ($conn->query($sql) === TRUE) {
            echo "success";
        } else {
            echo "error";
        }
    } else {
        echo "error";
    }
}
?>