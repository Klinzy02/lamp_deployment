<?php
$servername = "localhost";
$username = "app";
$password = "password";
$dbname = "crud_app";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

