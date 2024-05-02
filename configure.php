<?php
$host = "localhost";
$userName = "fyrhp";
$password = "RTDE";
$dbName = "fyrhp";
$conn = new mysqli($host, $userName, $password, $dbName);

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>