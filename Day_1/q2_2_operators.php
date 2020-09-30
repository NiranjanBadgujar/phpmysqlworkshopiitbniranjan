<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 
$name = "Niranjan";
$age = 20;
echo "My name is $name <br> my age is $age <br><br>";

$password = "abc";
if($password ="def")
	echo "access granted";
else
	echo "access denied ";

switch ("Niranjan")
{
	case "nir":
	echo "wrong";
	break;

	case "Niranjan":
	echo "<br> <br>right<br><br>";
	break;

	default:"not sure";
}
  
    $num1 = 10;
	$num2 = 5;
	echo $num1 + $num2;
	echo "<br>";
	echo $num1 - $num2;
	echo "<br>";
	echo $num1 * $num2;
	echo "<br>";
	echo $num1 / $num2;
	echo "<br>";

	$date = array (1,2,3,4,6);
	$month = array ("Jan","Feb","Mar","Apr","May");
    $year = array (2010,2011,2013,2020);

    echo "today is          ".$date[2].$month[3].$year[3];
    echo "<br>";
    $pos = 2;
    $nir = array
    (
      "123" => array (1,2,3,4),
      "ABC" => array ("N","B","S","D"),
  );
      echo $nir ["ABC"][3].["123"][2];
      echo "<br>";
      echo "letter".  $nir["ABC"][$pos]."is in position".  $nir["123"][$pos];


      $x = 10;
      if ($x == "10")
      	echo "true";
      else 
      	echo "false";
 ?>
</body>
</html>