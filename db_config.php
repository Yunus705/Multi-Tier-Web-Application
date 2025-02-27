<?php
$servername = "your-db-endpoint"; // Replace with your RDS endpoint
$username = "admin"; // Replace with your DB username
$password = "password"; // Replace with your DB password
$dbname = "webapp"; // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
