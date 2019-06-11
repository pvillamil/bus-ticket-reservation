<?php
include('../db.php');
if($_GET['id'])
{
$id=$_GET['id'];
 $sql = "delete from users where id='$id'";
 mysql_query("delete from users where id='$id'");
 mysql_query( $sql);
}

?>