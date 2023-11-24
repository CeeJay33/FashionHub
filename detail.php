<!-- detail.php -->
<?php
include "config.php";

// Check if the 'id' parameter is set in the URL
if (isset($_GET['uniqued'])) {
    // Get the user ID from the URL
    $userId = $_GET['uniqued'];

    // Prepare and execute a parameterized query to fetch user details
    $query = "SELECT * FROM userd WHERE uniqued = ?";
    $stmt = $conn->prepare($query);

    // Bind the user ID parameter
    $stmt->bind_param('i', $userId); // Assuming user ID is an integer

    // Execute the query
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();

    // Check if the user exists and display details
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        ?>
        <h2><?php echo $user['fname'] . ' ' . $user['lname']; ?></h2>
        <p>Email: <?php echo $user['email']; ?></p>
        <p>Phone: <?php echo $user['phone_number']; ?></p>
        <!-- Add more details to display -->
        <?php
    } else {
        echo "User not found.";
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
} else {
    echo "User ID not provided.";
}
?>
