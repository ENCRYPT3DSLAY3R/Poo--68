<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "tienda";

// create connection
$conn = new mysqli($host, $user, $password, $database);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
