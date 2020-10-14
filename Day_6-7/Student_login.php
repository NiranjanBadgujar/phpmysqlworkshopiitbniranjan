<?php
include('connect1.php');
session_start();

if (isset($_SESSION['email'])  &&  $_SESSION['type'] == "student") {
    header("Location: Student_result.php");
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
    <form action="Student_login.php" method="POST">
        <input type="text" name="email" placeholder="email">
        <br><br>
        <input type="password" name="password" placeholder="password">
        <br><br>
        <button type="submit">Log In</button>

    </form>
    <?php


    if(isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM register WHERE email = '$email';";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) == 0) {
            echo "Student does not exist<br> <a href='register.php'>click here</a> to register";
            die();
        }
        while ($row = mysqli_fetch_assoc($result)) {
            $db_email = $row['email'];
            $db_passwordenc = $row['password'];
        }
        echo "$password";
        if (md5($password) != $db_passwordenc) {
            echo "incorrect password";
        } else {
            $_SESSION['email'] = $email;
            $_SESSION['type'] = "student";
            header("Location: Student_result.php");
        }
        mysqli_close($conn);
    }

    ?>
</body>

</html>