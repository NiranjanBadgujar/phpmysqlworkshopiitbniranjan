<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST">
     <input type="text" name="name" placeholder="Name">
     <br><br>
     <input type="email" name="email" placeholder="E-mail">
     <br><br>
     <textarea name="Feedback"  cols="40" rows="5" placeholder="Feedback"></textarea>
     <br><br>
     <button type="submit">Submit</button>

    </form>
    <?php
    if(isset($_POST['Feedback']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $feedback=$_POST['Feedback'];
        $thankyou = "thank you for your feedback";
        
        if(!mail($email,$thankyou,$feedback))
        {
            echo "failed to send mail!";
        }
        $admail= "administrator@office.com";
        $sub = "mail from $name";
        $mess = "feedback from $name\nemail:$email\nfeedback:$feedback";
        if(!mail($admail,$sub,$mess))
        {
            echo "failed to send mail";
        }
         
        

    }
    
    ?>
</body>
</html>