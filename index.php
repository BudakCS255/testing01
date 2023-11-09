<?php
// Database configuration
$dbHost = '188.166.220.38'; // Change to the actual database host if it's not on the same server
$dbUser = 'root'; // Replace with your MySQL username
$dbPass = ''; // Replace with your MySQL password
$dbName = 'mywebsite_images'; // Replace with your MySQL database name

// Attempt to connect to the database
$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

// Check the connection
if ($conn->connect_error) {
    echo "Mission Failed: Connection failed: " . $conn->connect_error;
} else {
    echo "Mission Accomplished: Connected successfully to the database!";
}

$conn->close();
?>
