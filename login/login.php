<?php
$servername = "localhost";
$username = "admin";
$password = "admin";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Login tidak berhasil : " . $conn->connect_error);
}
echo "Berhasil Login!";
?>