<?php
require('connect1.php');
session_start();
if (isset($_SESSION['email']) && $_SESSION['type'] = "student") {
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
    <form action="register.php" method="POST">
        <input type="text" name="username" placeholder="Username">
        <br><br>
        <input type="email" name="email" placeholder="E-mail">
        <br><br>
        <input type="password" name="password" placeholder="password">
        <br><br>
        <button type="submit">Register Now</button>
    </form>

    <?php
    if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $sql = "SELECT * FROM register WHERE email = '$email';";
        $result = mysqli_query($conn, $sql);
        if (mysqli_query($conn, $sql)) {
            if (mysqli_num_rows($result) > 0) {
                echo "student exist already<br> <a href='Student_login.php'>login</a>";
            } else {
                $username = $_POST['username'];
                $passwordenc = md5($_POST['password']);
                $sql = "INSERT INTO register (username,email,password) VALUES ('$username', '$email', '$passwordenc')";
                if (mysqli_query($conn, $sql)) {
                    echo "successfully registered <a href='Student_login.php'>click here</a>to go to login page";
                } else {
                    echo "Error:" . $sql . "<br>" . mysqli_error($conn);
                }
            }
        }
    } else {
        echo "error123:" . mysqli_error($conn);
    }
    mysqli_close($conn);

    ?>


</body>

</html>