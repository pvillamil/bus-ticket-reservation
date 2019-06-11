<?php
                session_start();
                include('db.php');
                $site_url="http://localhost/busreservation/";
                $success_url=$site_url."register_1.php";
                $failure_url=$site_url."failure.php";
                $payable=$_SESSION['payable'];
                $b_username=$_POST['booker_username'];
$fname=$_POST['first_name'];
$lname=$_POST['last_name'];
$qty=$_SESSION['qty'];
$busnum=$_SESSION['route'];
$setnum= json_encode($_SESSION['sseat']);
$date=strtotime(date_format((date_create_from_format('d/m/Y',$_SESSION['date'])),"Y-m-d"));
$contact=$_POST['contact'];
$address=$_POST['address'];
             $_SESSION['booker_username'] = $b_username;
          $_SESSION['first_name'] = $fname;
           $_SESSION['last_name'] = $lname;
            $_SESSION['address'] = $address;
             $_SESSION['contact'] = $contact;    
                
                ?>

<p>Once Booked, booking cancellation can't be done</p>
<p>No refund also</p>
<form action = "http://10.0.3.200/epay" method="GET">
<input value="<?php echo $payable; ?>" name="tAmt" type="hidden">
<input value="<?php echo $fname; ?>" name="fname" type="hidden">
<input value="<?php echo $lname; ?>" name="lname" type="hidden">
<input value="<?php echo $qty; ?>" name="qty" type="hidden">
<input value="<?php echo $busnum; ?>" name="busnum" type="hidden">
<input value="<?php echo $setnum; ?>" name="setnum" type="hidden">
<input value="<?php echo $date; ?>" name="date" type="hidden">
<input value="<?php echo $contact; ?>" name="contact" type="hidden">
<input value="<?php echo $address; ?>" name="address" type="hidden">
<input value="0" name="txAmt" type="hidden">
<input value="0" name="psc" type="hidden">
<input value="0" name="pdc" type="hidden">
<input value="<?php echo $qty; ?>" name="pid" type="hidden">

<input value="<?php echo $success_url; ?>" type="hidden" name="su">
<input value="<?php echo $failure_url; ?>" type="hidden" name="fu">
<input value="Pay Now" type="submit">
</form>