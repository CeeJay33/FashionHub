<?php
session_start();
include "config.php";

    $unique_id = $_SESSION['uniqued'];
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image'])) {
    $targetDir = "profile/"; // Directory where uploaded images will be saved
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
                $sql = "UPDATE userd SET file_path = '$targetFilePath' WHERE uniqued = ' $unique_id'";
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
