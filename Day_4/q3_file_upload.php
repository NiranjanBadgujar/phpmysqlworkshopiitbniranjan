<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action ="#" method="POST" enctype="multipart/form-data">
    <input type="file" name="MyFile"><br><br>
    <button type="submit">Upload file</button>
</form>
<?php
if (isset($_FILES['MyFile']))
{
    $file =  $_FILES['MyFile'];
    echo "properties of files are:   ";
    echo "name:   " . $file['name']."<br><br>";
    echo "type:   " . $file['type']."<br><br>";
    echo "size:   " . $file['size']."<br><br>";
    
}

?>
    
</body>
</html>