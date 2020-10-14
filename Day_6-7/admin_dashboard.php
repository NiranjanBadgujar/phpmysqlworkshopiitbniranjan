<?php
session_start();

include('connect1.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_SESSION['email']) && $_SESSION['type'] == "admin")
    {
        echo "admin dashboard <a href='logout.php'>logout</a><br>";
        $email = $_SESSION['email'];
        $sql = "SELECT * FROM register";
        $st_data = array();
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                $st_data [$row['id']] ['username'] = $row['username'];
                $st_data [$row['id']] ['email'] = $row['email'];                
                $st_data [$row['id']] ['php'] = $row['php'];
                $st_data [$row['id']] ['mysql'] = $row['mysql'];
                $st_data [$row['id']] ['html'] = $row['html'];

            }
        }
        else{
            die("no students.");
        }

    }
    else{
        header("Location: admin_login.php");
    }
    mysqli_close($conn);
    ?>
  
    <h1> Student's result</h1> <br><br>
    <a href = 'add_Student.php'>add new student</a> <br><br>
    <table border= '3'>
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>email</th>
            <th>PHP</th>
            <th>MySQL</th>
            <th>HTML</th>
            <th>total_obtained</th>
            <th>total_marks</th>
            <th>percentage</th>
            <th>edit </th>
            <th>delete</th>
        </tr>
        </thead>
        <tbody>
        <?php
           foreach($st_data as $id => $data)
           {
            if(!isset($data['php']) && !isset($data['mysql']) && !isset($data['html']))
            {
                echo "<tr><td>" . $id . "</td><td>" . $data['username'] . "</td><td>" . $data['email'] . "</td><td></td><td></td><td></td><td></td><td>300</td><td></td><td><a href='edit.php?id=" . $id . "'>Edit</a></td><td><a href='delete.php?id=" . $id . "'>Delete</a></td></tr>";
            }
            else
            {
                $total_obtained = $data['php'] + $data['mysql'] + $data['html'];
                $percentage = $total_obtained/3;
                echo "<tr><td>" . $id . "</td><td>" . $data['username'] . "</td><td>" . $data['email'] . "</td><td>" . $data['php'] . "</td><td>" . $data['mysql'] . "</td><td>" . $data['html'] . "</td><td>" . $total_obtained . "</td><td>300</td><td>" . $percentage . "%</td><td><a href='edit.php?id=" . $id . "'>Edit</a></td><td><a href='delete.php?id=" . $id . "'>Delete</a></td></tr>";
            }
        }
    ?>
       </tbody>
  </table>
   </body>
</html>
