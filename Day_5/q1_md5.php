<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST">
        <input type="text" name="name" placeholder="Enter a name">
        <br>
        <input type="password" name="password" placeholder="Enter password">
        <br>
        <button type="submit">Submit</button>
    </form>
    <?php  
     require('connect1.php');
    if(isset($_POST['name']) && isset($_POST['password']))
    {
        $name = $_POST['name'];
        $pass = md5($_POST['password']);
        $sql = "INSERT INTO db_1". "(name,password)". "VALUES" ."('$name' , '$pass')";
        if(mysqli_query($conn,$sql))
        {
            echo "new record added successfully";
        }
        else{
            echo "error".$sql. "<br>". mysqli_error($conn);
        }
    } 
    else
    {
    die("please enter name and password");
    }
    mysqli_close($conn);
    ?>
</body>
</html>
