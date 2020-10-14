<?php

require('connect1.php');

session_start();
if(isset($_SESSION['email']) && $_SESSION['type'] == "admin")
{
    header("Location: admin_dashboard.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="admin_login.php" method="POST">
        <input type="email" name="email" placeholder="Email" ><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit">Log In</button>
    </form>

    <?php
    if(isset($_POST['email']) && isset($_POST['password']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql= "SELECT * FROM admin_login WHERE email='$email';";
        if (mysqli_query($conn,$sql))
        {
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result) == 0)
            {
                die(failed);
 
            }
          
            while($row = (mysqli_fetch_assoc($result)))
            {
                $ad_email = $row['email'];
                $ad_passwordenc = $row['password'];

            }
            if(md5($password) != $ad_passwordenc)
            {
                echo "Incorrect password";
            }
            else{
                $_SESSION['email'] =$email;
                $_SESSION['type'] = "admin";
                header("Location: admin_dashboard.php");
            }


            
        }
        else{
            echo "Error:" . $sql ."<br>" .mysqli_error($conn);                    
        }
    

        mysqli_close($conn);
    }

?>
</body>
</html>
