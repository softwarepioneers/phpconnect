<?php  
$host = 'localhost:3306';  
$user = 'root';  
$pass = '0659000594';  
$conn = mysqli_connect($host, $user, $pass);  
if(! $conn )  
{  
  die('Could not connect: ' . mysqli_error());  
}  
echo 'Connected successfully';  
mysqli_close($conn);  
?>  