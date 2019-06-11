<?php
if(isset($_POST['Submit']))
{
    require_once '../db.php';
    $notice = $_POST['notice'];
    $specialoffer = $_POST['specialoffer'];
    
    $sql= "INSERT INTO `notice` (`id`,`notice`,`specialoffer`) VALUES (NULL,'$notice','$specialoffer')";
   $result=mysql_query($sql);
    if($result==TRUE)
    {
        echo "<script>alert('notice saved')</script>";
        echo "<script>window.location='notice.php'</script>";
    }else{
         echo "<script>alert('please try again')</script>";
        echo "<script>window.location='notice.php'</script>";
    }        
}
