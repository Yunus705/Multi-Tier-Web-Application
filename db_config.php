<<<<<<< HEAD
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
=======
<?php
$servername = "database-1.cjeyou8gsodg.ap-south-1.rds.amazonaws.com"; // Replace with your RDS endpoint
$username = "admin"; // Replace with your DB username
$password = "admin123"; // Replace with your DB password
$dbname = "webapp"; // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
>>>>>>> 58a94f8b040d090459b79ed267ad4daac6083904
