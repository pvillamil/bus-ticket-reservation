<?php
include('db.php');

$email=$_POST['email'];
$phone=$_POST['phone'];
$username=$_POST['username'];


$result = mysql_query("SELECT * FROM users WHERE phone='$phone' AND username='$username' AND email='$email' AND usertype=2");
while($row = mysql_fetch_array($result))
	{
		
		echo 'Name: '.$row['name'].'<br>';
                echo 'email: '.$row['email'].'<br>';
                echo 'Contact: '.$row['phone'].'<br>';
		echo 'Username: '.$row['username'].'<br>';
		echo 'Password: '.$row['password'].'<br>';
                
 
	}
        
        
       
       ?>
<br>
<a href="index.php"><input type="button" class="medium gray button" value="homepage"  /><br><br></a>