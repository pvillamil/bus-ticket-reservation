<!--

<Ticket-Booking>
Copyright (C) <2013>  
<Abhijeet Ashok Muneshwar>
<openingknots@gmail.com>

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
 any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.

-->

<!DOCTYPE HTML>

<?php
if (isset($_POST['submit1'])) {
    include('db.php');
    session_start();
    $_SESSION['route'] = $_POST['route'];
    $_SESSION['date'] = $_POST['date'];
    $_SESSION['qty'] = $_POST['qty'];
    ?>

    <HTML>

        <HEAD>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Bus Ticket Booking</title>
            <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
            <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
        </HEAD>

        <BODY>
            <br /><br /><br />
            <div class="container">
                <div class="row well">
                    <div class="span10">
                        <form action="book.php" method="POST" onsubmit="return validateCheckBox(<?php echo $_POST['qty']; ?>)">
                            <ul class="thumbnails">

                                <?php
                                $busnum = $_POST['route'];
                                $date = strtotime(date_format((date_create_from_format('d/m/Y',$_POST['date'])),"Y-m-d"));
                                
                                $result1 = mysql_query("SELECT * FROM route WHERE id='$busnum'");
                                $row1 = mysql_fetch_object($result1);
                                $numofseats = $row1->numseats;
                                $query = "select * from reserve where date = '$date' AND bus='$busnum'";
                                $result = mysql_query($query);
                                $N = $numofseats + 1;
                                if (mysql_num_rows($result) > 0) {
                                    $bookseat = Array();
                                    $i = 0;
                                    while ($row = mysql_fetch_array($result)) {
                                        foreach (json_decode($row['seat']) as $bs) {
                                            $bookseat[$i] = $bs;
                                            $i++;
                                        }
                                    }
                                    for ($i = 1; $i < $N; $i++) {
                                        $flag = 0;
                                        foreach ($bookseat as $pbs) {
                                            if ($i == $pbs) {
                                                $flag = 1;
                                                break;
                                            }
                                        }
                                        if ($flag == 1) {
                                            echo "<li class='span1'>";
                                            echo "<a href='#' class='thumbnail' title='Not Available'>";
                                            echo "<img src='img/available.png' alt='Not Available'/>";
                                            echo "<label class='checkbox'>";
                                            echo "<input type='checkbox' name='booksseat[]' value='$i' disabled/>Seat" . $i;
                                            echo "</label>";
                                            echo "</a>";
                                            echo "</li>";
                                        } else {
                                            echo "<li class='span1'>";
                                            echo "<a href='#' class='thumbnail' title='Available'>";
                                            echo "<img src='img/available.png' alt='Available Seat'/>";
                                            echo "<label class='checkbox'>";
                                            echo "<input type='checkbox' name='sseat[]' value='$i'/>Seat" . $i;
                                            echo "</label>";
                                            echo "</a>";
                                            echo "</li>";
                                        }
                                    }
                                } else {
                                    for ($i = 1; $i < $N; $i++) {

                                        echo "<li class='span1'>";
                                        echo "<a href='#' class='thumbnail' title='Available'>";
                                        echo "<img src='img/available.png' alt='Available Seat'/>";
                                        echo "<label class='checkbox'>";
                                        echo "<input type='checkbox' name='sseat[]' value='$i'/>Seat" . $i;
                                        echo "</label>";
                                        echo "</a>";
                                        echo "</li>";
                                    }
                                }
                                ?>
                            </ul>
                            <center>
                                <label>Date of Journey</label>
                                <?php
                                echo "<input type='text' class='span2' name='date' value='" . date("Y-m-d", $date) . "' readonly/>";
                                ?>
                                <br><br>
                                <button type="submit" name="submit2" class="btn btn-info">
                                    <i class="icon-ok icon-white"></i> Submit
                                </button>
                                <button type="reset" class="btn">
                                    <i class="icon-refresh icon-black"></i> Clear
                                </button>
                                <a href="index1.php" class="btn btn-danger"><i class="icon-arrow-left icon-white"></i> Back </a>
                            </center>
                        </form>
                    </div>
                </div>
            </div>
    <?php
} else {
    header('location:index1.php');
}
?>
        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-latest.min.js">\x3C/script>')</script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript">
                            function validateCheckBox(total)
                            {
                                var c = document.getElementsByTagName('input');
                                var count = 0;
                                for (var i = 0; i < c.length; i++)
                                {
                                    if (c[i].type == 'checkbox')
                                    {
                                        if (c[i].checked)
                                        {
                                            count++;
                                        }
                                    }
                                }
                                if(count<=0){
                                alert('Please select at least '+total+' Seat.');
                                return false;
                            }else if(count>total)
                                {
                                    alert('Total Passenger= '+total+' But You have selected more seat');
                                    return false;
                                }else if(count<total)
                                {
                                    alert('Total Passenger= '+total+' But You have selected less seat');
                                    return false;
                                }
                                else if(count==total){
                                    return true;
                                }
                                alert('Please select at least'+total+' Seat.');
                                return false;
                            }
        </script>
    </BODY>
</HTML>