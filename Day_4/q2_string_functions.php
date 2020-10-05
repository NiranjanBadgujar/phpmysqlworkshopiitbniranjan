<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action= "#" method="POST">
<label> Enter a String:</label>
<input type ="text" name="String" placeholder="valid string" required>
<br><br>
<button type= "submit" > Submit</button>
<br><br>
    
</body>
</html>
<?php
if(isset($_POST['String']))
{
    $string = $_POST['String'];
    echo "string :    ". $string."<br><br>";
    echo "No of charcters in string are:  ". strlen($string)."<br><br>";
    echo "Breaking down in a array:   " ;
    
    $exp = explode(" ", $string);
    echo $exp['3']."<br><br>";
    echo "reverse a string:   ". strrev($string)."<br><br>";
    echo "To lowercase:   ". strtolower($string)."<br><br>";
    echo "To uppercase:   ". strtoupper($string)."<br><br>";
    echo "substring replace:   ". substr_replace($string, "niranjan badgujar.", 11,17)."<br><br>";




}


?>