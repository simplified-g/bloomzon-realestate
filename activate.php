<?php
$servername = "localhost";
$username = "gohomeng_db_user";
$password = "4T5RxsDOX1PeOX!f4a%8";
$db = "gohomeng_web_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$activation_code = $_GET['activation_code'];

if($conn->query("UPDATE agents SET is_activated = 1, activation_code = '' WHERE activation_code = '$activation_code'")) {
    header('Location: /index.php');
} else {
    echo 'Error activating your account, please try again';
}
?>
