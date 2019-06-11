<?php
if(isset($_POST['submit']))
{
    require_once 'db.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass =$_POST['password'];
    $user = $_POST['username'];
$query ="SELECT * FROM users WHERE username='$user'";

$result1 = mysql_query($query) or die (mysql_error().$query);    
$count = mysql_num_rows($result1);

if ($count>0) {
echo 'Sorry! This Username already exists!';
echo '<br><br>';
echo '<a href="#" onclick="history.go(-1)">Go Back</a>';
}
 else {
    
   

    
    $sql= "INSERT INTO `users` (`id`,`name`,`email`,`phone`,`username`,`password`,`usertype`) VALUES (NULL,'$name','$email','$phone','$user','$pass',2)";
   $result=mysql_query($sql);
    if($result==TRUE)
    {
        echo "<script>alert('Registered Successfully')</script>";
        echo "<script>window.location='index.php'</script>";
    }else{
         echo "<script>alert('Not Registered please try again')</script>";
        echo "<script>window.location='register.php'</script>";
    }        
}

}