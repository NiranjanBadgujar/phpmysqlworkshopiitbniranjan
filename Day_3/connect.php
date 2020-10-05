<?php
$conn = mysqli_connect("localhost","root", "", "result");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>

