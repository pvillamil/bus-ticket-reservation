
<?php

include('db.php');
session_start();

function createRandomPassword() {
	$chars = "abcdefghijkmnopqrstuvwxyz023456789";
	srand((double)microtime()*1000000);
	$i = 0;
	$pass = '' ;
	while ($i <= 7) {
		$num = rand() % 33;
		$tmp = substr($chars, $num, 1);
		$pass = $pass . $tmp;
		$i++;
	}
	return $pass;
}
$confirmation = createRandomPassword();
$b_username=$_SESSION['booker_username'];
$fname=$_SESSION['first_name'];
$lname=$_SESSION['last_name'];
$qty=$_SESSION['qty'];
$busnum=$_SESSION['route'];
$setnum= json_encode($_SESSION['sseat']);
$date=strtotime(date_format((date_create_from_format('d/m/Y',$_SESSION['date'])),"Y-m-d"));
$contact=$_SESSION['contact'];
$address=$_SESSION['address'];
$payable=$_SESSION['payable'];       
// check that name was entered


// Success

mysql_query("INSERT INTO customer (fname, lname, address, contact, bus, transactionum, payable, setnumber, booker)
VALUES ('$fname', '$lname', '$address', '$contact', '$busnum', '$confirmation','$payable','$setnum','$b_username')");
mysql_query("INSERT INTO reserve (date, bus, seat_reserve, transactionnum, seat)
VALUES ('$date', '$busnum', '$qty', '$confirmation','$setnum')");
//$insert = mysql_real_escape_string($query);


//$seatNumber = NULL;
//
//for($i=1; $i<50; $i++)
//{
//	$chparam = "ch" . strval($i);
//	$calcPNR = $date . "-" . strval($i);
//	if( !empty($_POST[$chparam]) )
//	{
//		$query = "INSERT INTO seat( number, PNR, date) VALUES ('" . intval($i) . "', '". $calcPNR ."', '". $date ."')";
////		$results = mysql_real_escape_string($query);
//		$results = mysql_query($query);
//		if (!$results)
//		{
//			die ("Could not update seat: <br />". mysql_error());
//		}
//		$seatNumber = $seatNumber .", ". "$i";
//	}
//}

header("location: print.php?id=$confirmation&setnum=$setnum");

?>
