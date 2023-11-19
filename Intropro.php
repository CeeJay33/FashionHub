<?php
session_start();
include_once "config.php"; // Include your database configuration

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve session and form data
    $unique_id = $_SESSION['unique_id'];
    // ... (Retrieve other form fields like myCountry, address, phone, cloth, bag)
        
    $Country = mysqli_real_escape_string($conn, $_POST['myCountry']);
    $Address = mysqli_real_escape_string($conn, $_POST['address']);
    $Phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $Experience = mysqli_real_escape_string($conn, $_POST['cloth']);
    $Bag = mysqli_real_escape_string($conn, $_POST['bag']);

    // Check if the required fields are not empty
    if (!empty($unique_id) && !empty($_POST['myCountry']) && !empty($_POST['address']) && !empty($_POST['phone']) && !empty($_POST['cloth']) && !empty($_POST['bag'])) {
        // Sanitize form data
        // ...

        // Prepare and execute SQL query to insert data into the database
        $query = "INSERT INTO userd (unique_id, country, address, phone, cloth_designs, bag_designs) VALUES ('$unique_id', '$myCountry', '$address', '$phone', '$cloth', '$bag')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            echo 'success'; // Send success message back to JavaScript
            exit(); // Stop further execution after successful insertion
        } else {
            echo "Error: " . mysqli_error($conn); // Handle insertion error
        }
    } else {
        echo "Please fill in all fields."; // Handle empty fields
    }
}
?>



$Country = mysqli_real_escape_string($conn, $_POST['myCountry']);
$Address = mysqli_real_escape_string($conn, $_POST['address']);
$Phone = mysqli_real_escape_string($conn, $_POST['phone']);
$Experience = mysqli_real_escape_string($conn, $_POST['cloth']);
$Bag = mysqli_real_escape_string($conn, $_POST['bag']);
