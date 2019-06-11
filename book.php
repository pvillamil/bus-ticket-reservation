<?php if (isset($_POST['submit2'])) { ?>

    <HTML>

        <HEAD>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Boot the ticket</title>
            <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
            <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
        </HEAD>

        <BODY>

            <br>
            <div class="container">
                <div class="page-header">
                    <h1>Book the tickets</h1>
                </div>			
                <?php
                session_start();
                include('db.php');
//            $_SESSION['route'] = $_SESSION['route'];
//            $_SESSION['date'] = $_SESSION['date'];
//            $_SESSION['qty'] = $_POST['qty'];
               $qty=$_SESSION['qty'];
$busnum=$_SESSION['route'];
$result = mysql_query("SELECT * FROM route WHERE id='$busnum'");
while($row = mysql_fetch_array($result))
	{
	$price=$row['price'];
	}
        list($r,$p)= explode('.',$price);
	$payable=(int)$qty*(int)$p;   
        $_SESSION['payable'] = $payable;
        
                if (!empty($_POST['sseat'])) {
                    unset($_SESSION['sseat']);
                    $t = 0;
                    foreach ($_POST['sseat'] as $check) {
                        $_SESSION['sseat'][$t] = $check;
                        $t++;
                    }
                }
                if (empty($b_username))
                    $error = 'You must enter your first name.';
     
                if (empty($fname))
                    $error = 'You must enter your first name.';

// check that user id was entered
                if (empty($lname))
                    $error = 'You must enter your last name.';

// check that mobile number was entered
                if (empty($contact))
                    $error = 'You must enter your contact number.';

// check that address was entered
                if (empty($address))
                    $error = 'You must enter your address.';
                ?>
                <form name="contactForm" action="payment.php" method="POST" class="form-horizontal">
                    <div class='control-group'>
                        <label class='control-label' for='input1'>Seat Numbers</label>
                        <div class='controls'>
                            <?php
                            if (!empty($_POST['sseat'])) {
                                foreach ($_POST['sseat'] as $check) {
                                    echo $check;
                                    echo ',';
                                }
                            }
                            ?>


                        </div>
                    </div>

                    <?php
                    if (isset($_POST['date'])) {
                        echo "<div class='control-group'>";
                        echo "<label class='control-label' for='input1'>Date of Journey</label>";
                        echo "<div class='controls'>";
                        echo "<input type='text' name='journey_date' id='input1' class='span3' value=" . $_POST['date'] . " readonly />";
                        echo "</div>";
                        echo "</div>";
                    }
                    ?>
                    <div class="control-group">
                        <label class="control-label" for="input1">Booker Username</label>
                        <div class="controls">
                            <input type="text" name="booker_username" id="input1" placeholder="Type your username" class="span3" pattern="[A-z ]{3,}" title="Please enter a valid name." required>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="input1">First Name</label>
                        <div class="controls">
                            <input type="text" name="first_name" id="input1" placeholder="Type your name" class="span3" pattern="[A-z ]{3,}" title="Please enter a valid name." required>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="input1">Last Name</label>
                        <div class="controls">
                            <input type="text" name="last_name" id="input1" placeholder="Type your name" class="span3" pattern="[A-z ]{3,}" title="Please enter a valid name." required>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="input3">Contact(only 10 digits)</label>
                        <div class="controls">
                            <input type="text" name="contact" pattern=".{10}" title="Please enter 10 digit no." class="span3" placeholder="Type your mobile number" maxlength="10" required/>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="input2">Address</label>
                        <div class="controls">
                            <input type="text" name="address" id="input2" placeholder="Type your address" class="span3" required>
                        </div>
                    </div>

                    <div class="form-actions">
                        <input type="hidden" name="save" value="contact">
                        <button type="submit" name="submit3" class="btn btn-info">
                            <i class="icon-ok icon-white"></i> Book
                        </button>
                        <button type="reset" class="btn">
                            <i class="icon-refresh icon-black"></i> Clear
                        </button>
                    </div>

                </form>
            </div>

            <script src="http://code.jquery.com/jquery-latest.min.js"></script>
            <script>window.jQuery || document.write('<script src="js/jquery-latest.min.js">\x3C/script>')</script>
            <script type="text/javascript" src="js/bootstrap.js"></script>
        </BODY>
    </HTML>
<?php
} else {
    header('location:seat.php');
}