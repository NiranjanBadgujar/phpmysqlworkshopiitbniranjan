<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action= "#" method="POST">
    <label>Name:</label>
    <input type="text" name="name" placholder="name">
    <br><br>
    <label>Subject1:</label>
    <input type="text" name="m1" placholder="marks">
    <br><br>
    <label>Subject2:</label>
    <input type="text" name="m2" placholder="marks">
    <br><br>
    <label>Subject3:</label>
    <input type="text" name="m3" placholder="marks">
    <br><br>
    <label>Subject4:</label>
    <input type="text" name="m4" placholder="marks">
    <br><br>
    <label>Subject5:</label>
    <input type="text" name="m5" placholder="mmarks">
    <br><br>
    <button type ="submit"> Submit</button>

</form>
<?php
require "connect.php";
echo "<br>";
if(isset($_POST['name']) && isset($_POST['m1']) && isset($_POST['m2']) && isset($_POST['m3']) && isset($_POST['m4']) && isset($_POST['m5']))
    {
        $name=$_POST['name'];
        $m1=$_POST['m1'];
        $m2=$_POST['m2'];
        $m3=$_POST['m3'];
        $m4=$_POST['m4'];
        $m5=$_POST['m5'];
        $total=$m1 + $m2 + $m3 + $m4 + $m5;
        $total_marks=500;
        $percentage=$total/5;
        echo "Name of Student: " . $name . "<br>";
        echo "Marks in each subject<br>";
        echo "Subject 1: " . $m1 . "<br>";
        echo "Subject 2: " . $m2 . "<br>";
        echo "Subject 3: " . $m3 . "<br>";
        echo "Subject 4: " . $m4 . "<br>";
        echo "Subject 5: " . $m5 . "<br>";
        echo "Total Marks Obtained: " . $total . "<br>";
        echo "Total Marks: 500<br>";
        echo "Percentage: " . $percentage . "%<br>";

        $sql = "INSERT INTO class1" . " (name,sub1,sub2,sub3,sub4,sub5,total_obtained,total_marks,percentage)" . " VALUES " ."('$name','$m1','$m2','$m3','$m4','$m5','$total','$total_marks','$percentage')";
        if (mysqli_query($conn,$sql))
        {
            echo "new record created succesfully";
        }
        else{
            echo "Error:" . $sql ."<br>" .mysqli_error($conn);                    
        }
    }

        mysqli_close($conn);
 ?>
</body>
</html>