<?php
if(isset($_POST['Submit']))
{
    require_once 'db.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message =$_POST['message'];

    $sql= "INSERT INTO `message` (`id`,`name`,`email`,`subject`,`message`) VALUES (NULL,'$name','$email','$subject','$message')";
   $result=mysql_query($sql);
    if($result==TRUE)
    {
        echo "<script>alert('Message Sent')</script>";
        echo "<script>window.location='contact.php'</script>";
    }else{
         echo "<script>alert('please try again')</script>";
        echo "<script>window.location='contact.php'</script>";
    }        
}