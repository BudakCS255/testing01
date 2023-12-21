<?php
// Database configuration
$dbHost = 'localhost'; // Database host
$dbUser = 'root'; // Database username
$dbPass = ''; // Database password (empty for no password)
$dbName = 'images'; // Database name

// Attempt to connect to the database
$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

// Check the connection
if ($conn->connect_error) {
    die("Mission Failed: Connection failed: " . $conn->connect_error);
} else {
    echo "Mission Accomplished: Connected successfully to the database!";
}

$conn->close();
?>
