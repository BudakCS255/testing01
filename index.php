<?php
// Turn on error reporting for debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Database configuration
$dbHost = 'localhost'; // Database host
$dbUser = 'john'; // Database username
$dbPass = 'john_wick_77'; // Database password (empty for no password)
$dbName = 'images'; // Database name

// Attempt to connect to the database
$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

// Check the connection
if ($conn->connect_error) {
    die("Mission Failed: Connection failed: " . $conn->connect_error);
} else {
    echo "Mission Accomplished: Connected successfully to the database!";
}

// Close the database connection
$conn->close();
?>
