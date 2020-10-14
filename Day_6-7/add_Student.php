<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
</head>
<body>
    <h2>Add Student</h2>
    <form action="add_student.php" method="POST">
        <input type="text" name="username" placeholder="Student Name" required><br>
        <input type="text" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <input type="number" name="php" placeholder="Marks in PHP"><br>
        <input type="number" name="mysql" placeholder="Marks in MySQL"><br>
        <input type="number" name="html" placeholder="Marks in HTML"><br>
        <button type="submit">Add</button>
    </form>
</body>
</html>




<?php

session_start();

if(!isset($_SESSION['email']) || $_SESSION['type'] != "admin")
{
    header("Location: admin_login.php");
}

if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']))
{
    include('connect1.php');
    $username=$_POST['username'];
    $email=$_POST['email'];
    $passwordenc= md5($_POST['password']);
    if(empty($_POST['php']) && empty($_POST['mysql']) && empty($_POST['html']))
    {
        $sql = "INSERT INTO register (username,email,password) VALUES ('$username','$email','$passwordenc')";
    }
    else
    {   
        $php=$_POST['php'];
        $mysql=$_POST['mysql'];
        $html=$_POST['html'];
        $sql="INSERT INTO register (username,email,password,php,mysql,html) VALUES('$username','$email','$passwordenc','$php','$mysql','$html')";
    }
    if (mysqli_query($conn,$sql))
    {
         echo " Data Added Successfully<br><a href='admin_dashboard.php'>Click here</a> to go back to Dashboard.";
    }
    else
    {
        die("Error Occured:".$sql."<br>" .mysqli_error($conn));
    }    
mysqli_close($conn);
}
?>

