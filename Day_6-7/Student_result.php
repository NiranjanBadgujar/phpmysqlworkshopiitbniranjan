<?php
include('connect1.php');
session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,  initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

if(isset($_SESSION['email'])&& $_SESSION['type'] == "student")

{
    $email = $_SESSION['email'];
    $sql = "SELECT * FROM register WHERE email='$email';";
    $result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result)>0)
    {
        $st_marks = array();
        while($row = mysqli_fetch_assoc($result))
        {
            $db_email = $row['email']; 
            $db_username = $row['username'];
            $st_marks['php'] = $row['php'];
            $st_marks['mysql'] = $row['mysql'];
            $st_marks['html'] = $row['html'];
        }
        echo "Name:  ".$db_username."<br>";
        echo "email:  ".$db_email."<br>";
        
        if(isset($st_marks['php']) && isset($st_marks['mysql']) && isset($st_marks['html']))
        {
            $total_obtained =  $st_marks['php']  + $st_marks['mysql'] + $st_marks['html'];
            $percentage = $total_obtained/3;
        }
    }
    else
    {
        echo "0 results";
    }
    mysqli_close($conn);
}
else
{
    header("Location: student_login.php");
}

?>

   <table>
     <thead>
        <tr>
        <th>subject</th>
        <th>marks</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach($st_marks as $subject => $sub_marks )
        {
            echo "<tr><td>$subject</td><td>$sub_marks</td></tr>";
        }
        
        
        
        ?>
        </tbody>
        </table>
        <?php
        echo "total obtained:    $total_obtained<br> total_marks=300<br> percentage:   $percentage% <br>";
        if($percentage>60)
        {
            echo "congratulations!!<br>";
        }
        ?>



    <form action="Student_result.php" method="POST">
        <h3>Mail your marksheet</h3>
        <input type="email" name="email" placeholder="email" required>
        <button type="submit">Mail</button>
 </form>
 <?php
 if(isset($_POST['email']))
 {
     $body="";
     foreach($st_marks as $subject => $sub_marks )
     {
          $body .= "$subject = $sub_marks\n";
     }
          $body .= "total marks= $total_obtained \ntotal marks = 300 \npercentage=$percentage%";
          
          if(mail($_POST['email'], "Student marksheet", $body))
          {
              echo "sucessfully sent!<br>";
          }
          else
          {
              echo "error occured";
          }
          
 }
 ?>

</body>
</html>