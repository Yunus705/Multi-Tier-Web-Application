<?php
$host = "database-1.cjeyou8gsodg.ap-south-1.rds.amazonaws.com";
$username = "admin";
$password = "admin123";
$database = "webapp";

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else echo "Connected successfully!";
?>
