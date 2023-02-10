<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "goodwill");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>