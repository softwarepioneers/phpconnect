<?php
$servername = "localhost";
$username = "root";
$password = "0659000594";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
  mysqli_close($conn);
}
echo "Connected successfully";
mysqli_close($conn);
?>