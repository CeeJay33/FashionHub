<?php
include_once "config.php"; // Include your database connection config

if (isset($_FILES["image"]) && $_FILES["image"]["error"] === 0) {
    $targetDir = "clothes/";
    $imageName = basename($_FILES["image"]["name"]);
    $targetPath = $targetDir . $imageName;
    $imagePath = $targetPath;
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetPath)) {
        // Insert image path into the database (replace "users" with your table name)
        $insertQuery = "INSERT INTO users (image_name) VALUES ('$imageName')";
        if ($conn->query($insertQuery) === TRUE) {
            echo $imageName; // Return the image name to update the image source on the page
        } else {
            echo "error";
        }
    } else {
        echo "error";
    }
}
?>
