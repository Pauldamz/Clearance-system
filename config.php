<?php
$servername = "localhost";
$username = "root";
$password = "Jamjam@16";
$dbname = "jpts loginss";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>