<?php
include "config.php";

// Check if the 'uniqued' parameter is set in the URL
if(isset($_GET['uniqued'])) {
    $user_id = $_GET['uniqued'];

    // Get user details based on the user ID
    $user_query = "SELECT fname, lname, file_path, phone_number, experience, category FROM userd WHERE uniqued = '$user_id'";
    $user_result = $conn->query($user_query);

    if ($user_result->num_rows > 0) {
        $user = $user_result->fetch_assoc();
        $user_name = $user['fname'] . ' ' . $user['lname'];
        $file_path = $user['file_path'];
        $Phone = $user['phone_number'];
        $Experience = $user['experience'];
        $Category = $user['category'];

        // Display user information and images
        echo '<div class="lay_color">';
        echo '<div class="chip">';
        echo '<img src="' . $file_path . '" loading="lazy" width="96" height="96">';
        echo '<span style="opacity: 0.7;"><strong>' . $user_name . ', Posted</strong></span>';
        echo '</div>';
        echo '<div class="stories">';
        echo '<ul class="des">';
        echo '<li><strong>Category: </strong>' . $Category .'</li>';
        echo '<li><strong>Experience: </strong>' . $Experience .'</li>';
        echo '</ul>';
        echo '<div class="images">';

        // Fetch and display all images for the current user ID
        $image_query = "SELECT file_path FROM images WHERE user_id = '$user_id'";
        $image_result = $conn->query($image_query);

        while ($image_row = $image_result->fetch_assoc()) {
            echo '<div class="image">';
            echo '<img src="' . $image_row['file_path'] . '" alt="">';
            echo '</div>';
        }

        echo '</div>'; // Close images div
        echo '<hr noshade width="100%" size="1px">';
        echo '<div class="social">';
        echo 
        "<div class='Message'>
            <p><a href='https://wa.me/$Phone' target='_blank'>WhatsApp</a></p>
        </div>
        <div class='call'>
            <p><a href='tel:$Phone'>Phone Number</a></p>
        </div>";
        echo '</div>'; // Close social div
        echo '</div>'; // Close stories div
        echo '</div>';


    } else {
        echo "User not found";
    }
} else {
    echo "No user ID provided";
}
?>
