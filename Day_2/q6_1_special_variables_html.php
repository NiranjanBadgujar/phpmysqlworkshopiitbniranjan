<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="q6_2_special_variables_html.php" method="GET" >
    <label>enter the value of side1 </label>
    <input type="text" name="s1" placeholder="value" required>
   <br><br>
    <label>enter the value of side2</label>
    <input type="text" name="s2" placeholder="value" required>
   <br><br>
   <label>enter the value of side3</label>
   <input type="text" name="s3" placeholder="value" required>
   <br><br>
   <?php
   $a1=$_GET['s1'];
   $a2=$_GET['s2']; 
   $a3=$_GET['s3'];

   if($a1**2==$a2**2+$a3**2 ||$a2**2==$a1**2+$a3**2 || $a3**2==$a2**2+$a1**2)
   {
   echo "Right angled Triangle";}
   else if($a1==$a2 && $a2==$a3)
     {echo "equilateral  triangle";}
    else if($a1==$a2 || $a1==$a2 || $a1==$a2) 
        {echo "isoceles triangle";}
    else
        {echo "scalene triangle";}
        
       
   
   ?>
    
</body>
</html>