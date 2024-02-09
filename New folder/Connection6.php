

<?php
 #MySQLi Procedural
$servername = "localhost";
$username = "root";
$password = "0659000594";
 
// Connection
$conn = mysqli_connect($servername, 
               $username, $password);
 
// Check if connection is 
// Successful or not
if (!$conn) {
  die("Connection failed: ". mysqli_connect_error());
}
echo "Connected successfully";
?>