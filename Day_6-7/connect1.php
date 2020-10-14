<?php
$conn = mysqli_connect("localhost","root", "", "Student_result");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully<br>";
?>

