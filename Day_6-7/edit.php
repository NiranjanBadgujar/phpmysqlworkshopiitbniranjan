<?php

session_start();

if(!isset($_SESSION['email']) || $_SESSION['type'] != "admin")
{
    header("Location: admin_login.php");
}

include('connect1.php');
$id = $_GET['id'];
$sql = "SELECT * FROM register WHERE id ='$id';";
if(mysqli_query($conn,$sql))
{
    $result = mysqli_query($conn,$sql);
    $st_data = array();
    if(mysqli_num_rows($result)>0)
    {
        while ($row = mysqli_fetch_assoc($result))
        {
            $st_data['username'] = $row['username'];
            $st_data['email'] = $row['email'];
            $st_data['password'] = $row['password'];
            $st_data['php'] = $row['php'];
            $st_data['mysql'] = $row['mysql'];
            $st_data['html'] = $row['html'];
        }
    }
    else
    {
        die("error");
    }
}
else{
    echo "Error:" . $sql ."<br>" .mysqli_error($conn);                    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
</head>
<body>
    <h2>Edit Student</h2>
    <form action="edit.php?id=<?php echo $id ?>" method="POST">
        <label>Name</label><br>
        <input type="text" name="username" placeholder="Student Name" value=<?php echo $st_data['username'] ?> required><br>
        <label>Email</label><br>
        <input type="text" name="email" placeholder="Email" value=<?php echo $st_data['email'] ?> required><br>
        <label>PHP</label><br>
        <input type="number" name="php" placeholder="PHP" value=<?php if($st_data['php'])echo $st_data['php'] ?> ><br>
        <label>MySQL</label><br>
        <input type="number" name="mysql" placeholder="MySQL" value=<?php if($st_data['mysql'])echo $st_data['mysql'] ?> ><br>
        <label>HTML</label><br>
        <input type="number" name="html" placeholder="HTML" value=<?php if($st_data['html'])echo $st_data['html'] ?> ><br>
        <button type="submit">Edit</button>
    </form>

    <?php
    if(isset($_POST['username'])  &&  isset($_POST['email']))
    {
        $username = $_POST['username'];
        $email = $_POST['email'];

        if(empty($_POST['php']) && empty($_POST['mysql']) && empty($_POST['html']))
        {
            $sql = "UPDATE register SET username ='$username', email ='$email' WHERE id = '$id';";

        }
        else
        {
            $php = $_POST['php'];
            $mysql = $_POST['mysql'];
            $html = $_POST['html'];
            $sql = "UPDATE register SET username='$username', email='$email', php='$php', mysql='$mysql', html='$html' WHERE id ='$id';";

        }
        if(mysqli_query($conn,$sql))
        {
            echo "successfully edited<br>";
        }
        else
        {
            echo "Error:" . $sql ."<br>" .mysqli_error($conn);
        }
    }
    echo "<a href ='admin_dashboard.php'>Click here</a>to go to Dashboard";
    mysqli_close($conn);
    ?>

