<?php
$servername = "localhost";
$username = "root"; // Default username for XAMPP
$password = "Jamjam@16"; // Default password for XAMPP
$dbname = "jpts loginss"; // Ensure this matches your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>