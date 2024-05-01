<?php
$servername = "localhost"; // Change this to your MySQL server hostname or IP address
// $username = "noboit_website"; // Change this to your MySQL username
$username = "root"; // Change this to your MySQL username
// $password = "Z%*4WSCo]xQ."; // Change this to your MySQL password
$password = ""; // Change this to your MySQL password
$database = "noboit_website"; // Change this to your MySQL database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>