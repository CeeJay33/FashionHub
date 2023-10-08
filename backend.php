<?php
include_once "config.php";
session_start();

$unique_id = $_SESSION['unique_id'];


$response = array();

if (isset($_FILES["image1"]) && $_FILES["image1"]["error"] === 0) {
    $targetDir = "clothes/";
    $imageName = basename($_FILES["image1"]["name"]);
    $targetPath = $targetDir . $imageName;

    if (move_uploaded_file($_FILES["image1"]["tmp_name"], $targetPath)) {
        $unique_id = $_POST["unique_id1"];
        $insertQuery = "INSERT INTO images (name, imageUrl, user_id) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($insertQuery);
        $stmt->bind_param("ssi", $imageName, $targetPath, $unique_id);

        if ($stmt->execute()) {
            $response["status"] = "success";
        } else {
            $response["status"] = "error";
            $response["message"] = "Error uploading image to database.";
        }

        $stmt->close();
    } else {
        $response["status"] = "error";
        $response["message"] = "Error moving uploaded image.";
    }
} else {
    $response["status"] = "error";
    $response["message"] = "Error uploading image.";
}

echo json_encode($response);
?>
