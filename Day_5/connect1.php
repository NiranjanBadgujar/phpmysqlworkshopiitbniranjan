<?php
$conn = mysqli_connect("localhost","root", "", "data_1");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>

