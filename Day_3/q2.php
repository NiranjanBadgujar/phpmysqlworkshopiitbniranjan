<?php
require ("connect.php");
echo "<br><br>";
$name = 'rohan';
$new_sub5 = 90;
$old_total = 0;
$old_sub5 = 0;
$new_sql = ("SELECT * FROM class1 WHERE name = 'rohan'");
$new_result = $conn ->query($new_sql);
if(mysqli_num_rows($new_result)>0)
{
    while ($row = mysqli_fetch_array($new_result))
    {
        $old_sub5 = $row['sub5'];
        $old_total = $row['total_obtained'];

    }
}

$total_obt = ($old_total - $old_sub5) + $new_sub5;
$new_percentage = $total_obt/5;
$sql = "UPDATE class1 SET total_obtained = $total_obt , percentage = $new_percentage, sub5= $new_sub5 WHERE name='$name'";
$result = $conn->query($sql);
if(!$result)
{
echo "Updation failed";
echo "<br>";
}
else
{
echo "sucessfully updated ";
}
?>