<?php
require('connect1.php');

session_start();
if(isset($_SESSION['email']) && $_SESSION['type']=="admin")
{
    $id = $_GET['id'];
    $sql = "DELETE FROM register WHERE id = '$id';";
    if (mysqli_query($conn,$sql))
    {
        echo "<br> record deleted succesfully<br><br>";
    }
    else{
        echo "Error:" . $sql ."<br>" .mysqli_error($conn);                    
    }

    echo "<a href='admin_dashboard.php'>Click here</a> go to admin dashboard";
}

    mysqli_close($conn);



?>