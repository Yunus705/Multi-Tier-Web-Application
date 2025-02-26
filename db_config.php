<?php
$host = "your-rds-endpoint";
$username = "admin";
$password = "your-db-password";
$database = "webapp";

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
