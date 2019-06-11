<?php
//connecting to srever
	$con=mysql_connect("localhost","root","");
       
	if(!$con)
	{
		echo "<script>alert('couldnot connect to server');</script>";
		die();
	}
	
	
	
        $db=mysql_select_db("ticket");
	if(!$db)
	{
		echo "<script> alert('couldnot connect to database');</script>";
		die();
	}
	?>