<?php
// Ensure the session is started and any required configurations are included
session_start();
// Check if the request is a POST request and an image file is uploaded
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image'])) {
    // Include database configuration
    include "config.php";

    $unique_id = $_SESSION['unique_id'];
    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];

    // Directory where uploaded images will be saved
    $targetDir = "uploads/";

    // Get information about the image file
    $file = $_FILES['image'];
    $fileName = basename($file['name']);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    // Check if the file is an actual image or a fake image
    $check = getimagesize($file['tmp_name']);
    if ($check !== false) {
        // Allow certain file formats
        $allowedTypes = array('jpg', 'jpeg', 'png', 'gif');
        if (in_array($fileType, $allowedTypes)) {
            // Upload file to the server
            if (move_uploaded_file($file['tmp_name'], $targetFilePath)) {
                // Insert image file path into the database
                $sql = "INSERT INTO images (fname, lname, user_id, file_path) VALUES ('$fname', '$lname','$unique_id' ,'$targetFilePath')";
                if ($conn->query($sql) === TRUE) {
                    echo "Image uploaded successfully.";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        } else {
            echo "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
        }
    } else {
        echo "File is not an image.";
    }
} else {
    echo "Invalid request.";
}
?>
