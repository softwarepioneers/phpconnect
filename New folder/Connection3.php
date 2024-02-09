<?php
#Check connection # repair code
$servername = "localhost";
$username = "root";
$password = "0659000594";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
  }
echo "Connected successfully";



?>