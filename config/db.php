<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library_system"; // Must match your phpMyAdmin database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>