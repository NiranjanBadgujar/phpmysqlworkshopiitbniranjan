<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="q6_2_special_variables_html.php" method="POST" >
    <label>Name of Student:</label>
    <input type="text" name="s1" placeholder="Name" required>
   <br><br>
    <label>Marks in each subject </label>
    <br><br>
    <label>subject 1: </label>
    <input type="text" placeholder="marks" required name="m1"> 
   <br><br>
    <label>subject 2: </label>
    <input type="text" placeholder="marks" required name="m2"> 
   <br><br>
    <label>subject 3: </label>
    <input type="text" placeholder="marks" required name="m3"> 
   <br><br>
    <label>subject 4:</label>
    <input type="text" placeholder="marks" required name="m4"> 
   <br><br>
    <label>subject 5: </label>
    <input type="text" placeholder="marks" required name="m5"> 
   <br><br>
   <button type= "submit" method="post" name="s"> Submit </button>
   <br>

    <label>Total Marks obtained:  </label >
    <?php
    if(isset($_POST['s']))
    {
        $a=$_POST['s1'];
        $a1=$_POST['m1'];
        $a2=$_POST['m2']; 
        $a3=$_POST['m3']; 
        $a4=$_POST['m4']; 
        $a5=$_POST['m5'];
        $sum=$a1+$a2+$a3+$a4+$a5;
        echo $sum;
        echo "<br>";
        echo "<br>";
    }
    ?>
     
    <label>Total marks:500 </label>
    <br><br>
    <php?>
    
    <label> Percentage:
        <?php
    $per=$sum/5;
    echo $per;
    
    ?> </label>
    </form>
</body>
</html>