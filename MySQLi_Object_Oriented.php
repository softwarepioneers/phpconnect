<?php
#broken code and repair
$servername = "localhost";
$username = "root";
$password = "0659000594";
$database= "mydb";
// Create connection
$conn = new mysqli($servername,$database, $username, $password);
// Check connection #broken code 
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);


// Check connection # repair code
if (mysqli_connect_error($conn)) {
  die("Connection failed: " . mysqli_connect_error());
  $conn->close();
}
echo "Connected successfully";
$conn->close();


// Check connection
/* if (mysqli_connect_error()) {
     die("Database connection failed: " . mysqli_connect_error());
   }
*/

?>