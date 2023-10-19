<?php
$serverHost = "localhost";
$username = "root";
$password = ""; // No password
$database = "db_pos";

// Create a connection
$connection = new mysqli($serverHost, $username, $password, $database);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} else {
    echo "Connected successfully";
}
?>
