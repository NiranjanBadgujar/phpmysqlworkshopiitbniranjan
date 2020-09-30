<?php
echo "hii<br>";
$num1 =1;
while ($num1<=10)
{
echo "lop". $num1."<br>";
$num1++;
}

$num = 1;
$name = "abc";


for ($v=1 ;$v<=5; $v++)
{
    echo $v."<br>";
}

$arr =  array (1,2,3,4,5);
foreach ($arr as $value)
{
    echo $value."is 2 times". ($value * 2)."<br>";
}



function calc($n1, $n2, $op)
{
    switch($op)
    {
        case "+":
            $total= $n1 + $n2;
            return $total;
            break;

        default:
         echo "unknown operator";

    }
}

echo calc (10,10,"%");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input type = "text" name ="name" value="<?php  echo "hii";   ?>"


</body>
</html>


<?php
$name1 ="niranj";
if($name1=="niranjan")
{
    echo "hii niranjan";
}
else
{
?>
youare not niranjan please enter your namespace
<form method="post">
    <input type ="text" name="name" >
    <input type ="submit" value="submit">
</form>
<?php
}

?>