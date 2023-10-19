<?php
include '../connection.php';

$userEmail = $_POST['user_email'];

// Prepare and execute a SELECT query
$sqlQuery = "SELECT * FROM users_table WHERE user_email = '$userEmail'";
$resultOfQuery = $connection->query($sqlQuery);

if ($resultOfQuery) {
    if ($resultOfQuery->num_rows > 0) {
        // User with the provided email exists
        echo json_encode(array("success" => true));
    } else {
        // No user found with the provided email
        echo json_encode(array("success" => false));
    }
} else {
    // Error occurred while executing the query
    echo json_encode(array("success" => false, "error" => $connection->error));
}

// Close the database connection
$connection->close();
?>
