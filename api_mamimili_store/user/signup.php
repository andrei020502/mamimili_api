<?php
$db = mysqli_connect('localhost', 'root', '', 'db_pos');
if (!$db) {
    echo "Database connection failed";
    exit();
}

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT user_name FROM users_table WHERE user_name = '$username'";
$result = mysqli_query($db, $sql);
$count = mysqli_num_rows($result);

if ($count > 0) {
    echo json_encode(array("message" => "Username already exists"));
} else {
    $insert = "INSERT INTO users_table (user_name, user_email, user_password) 
               VALUES ('$username', '$email', '$password')";
    $query = mysqli_query($db, $insert);

    if ($query) {
        echo json_encode(array("message" => "Success"));
    } else {
        echo json_encode(array("message" => "Error"));
    }
}
?>

