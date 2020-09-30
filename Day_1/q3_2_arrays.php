<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$a =array (
    array (3,2),
    array (4,4)
);
$b = array (
     array(5,6),
     array(3,2)
);
$c =array();
for($i=0;$i<2;$i++)
{
    for($j=0;$j<2;$j++)
    {
    $c = $a[$i][$j] + $b[$i][$j];
    }
}

for($i=0;$i<2;$i++)
{
    for($j=0;$j<2;$j++)
    {
      echo  $c = $a[$i][$j] + $b[$i][$j].   " ";
    }
    echo "<br>";
}
?>
    

    

    </body>
</html>