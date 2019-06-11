<?php
//Start session
session_start();

//Unset the variables stored in session
unset($_SESSION['SESS_MEMBER_ID']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Welcome to SSS Travels</title>
        <link rel="stylesheet" type="text/css" href="xres/css/style.css" />
        <link rel="icon" type="image/png" href="xres/images/favicon.png" />
        <!--[if IE 6]><style type="text/css"> * html img { behavior: url("xres/iepngfix.htc") }</style><![endif]-->
        <script type="text/javascript" src="xres/js/saslideshow.js"></script>
        <script type="text/javascript" src="xres/js/slideshow.js"></script>
        <script src="js/jquery-1.5.min.js" type="text/javascript" charset="utf-8"></script>
        <script src="vallenato/vallenato.js" type="text/javascript" charset="utf-8"></script>
        <link rel="stylesheet" href="vallenato/vallenato.css" type="text/css" media="screen" charset="utf-8">

            <script type="text/javascript">
                $("#slideshow > div:gt(0)").hide();

                setInterval(function () {
                    $('#slideshow > div:first')
                            .fadeOut(1000)
                            .next()
                            .fadeIn(1000)
                            .end()
                            .appendTo('#slideshow');
                }, 3000);
            </script>


    </head>

    <body>
        <div id="wrapper">
            <div id="header">
                <ul id="mainnav">
                    <li class="current"><a href="index.php">Home</a></li>
                    <li><a href="gallery.php">Gallery</a></li>

                    <li><a href="routes.php">Routes</a></li>

                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="main-course.php">Notice</a></li>
                </ul>
            </div>
            <div id="content">
                <div id="rotator">
                    <ul>
                        <li><img src="xres/images/jb2/c.jpg" width="861" height="379"  alt="" /></li>
                        <li><img src="xres/images/jb2/ddd.jpg" width="861" height="379"  alt="" /></li>
                        <li><img src="xres/images/jb2/dd.jpg" width="861" height="379"  alt="" /></li>
                        <li><img src="xres/images/jb2/aaa.jpg" width="861" height="379"  alt="" /></li>
                    </ul>

                    <div id="logo" style="left: 600px; height: auto; top: 23px; width: 260px; position: absolute; z-index:4;">


                        <h2 class="accordion-header" style="height: 18px; margin-bottom: 15px; color: rgb(255, 255, 255); background: none repeat scroll 0px 0px rgb(53, 48, 48);"> Login Page</h2>
                        <div class="accordion-content" style="margin-bottom: 15px;">
                            <form action="login1.php" method="post" style="margin-bottom:none;">
                                <span style="margin-right: 11px;">Username: <input type="text" name="username" style="width: 165px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;"/></span><br>
                                    <span style="margin-right: 11px;">Password: <input type="password" name="password" style="width: 165px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;"/></span><br><br>
                                            <input type="submit" name="submit" id="submit" class="medium gray button" value="Login" style="height: 34px; margin-left: 15px; width: 191px; padding: 5px; border: 3px double rgb(204, 204, 204);" /><br><br>
                                                    </form>
                                                    <a href="register.php"><input type="button" class="medium gray button" value="User Register" style="height: 34px; margin-left: 15px; width: 191px; padding: 5px; border: 3px double rgb(204, 204, 204);" /><br><br></a>
                                                                <a href="forget.php"><input type="button" value="forget password!"></a>
                                                                </div>	
                                                                </div>

                                                                </div>
                                                                <br>        <br>
                                                                        <br>

                                                                            <div id="featured">
                                                                                <div id="items">
                                                                                    <div class="item"> <a href="main-course.php"><img src="xres/images/bbbb.jpg" alt="" /></a>
                                                                                        <h3><a href="main-course.php">Specials Offers</a></h3>
                                                                                        <p><a href="#"><strong>Aircon Bus</strong><br />
                                                                                                Come in and experience<br /> Our
                                                                                                new Bus Type<br /> specials today!</a></p>  
                                                                                    </div>

                                                                                </div>

                                                                                <div id="footer">
                                                                                    <h4>+977 9843303885 &bull; <a href="contact-us.php">Kathmandu , Bhaktapur </a></h4>
                                                                                    <p>Hours of Operation&nbsp;&nbsp;&bull;&nbsp;&nbsp;fri - Sat: 10:00 am - 5:00 pm</p>
                                                                                    <a href="index.php"><img src="xres/images/footer-logo2.jpg" alt="" /></a>
                                                                                    <p>&copy; Copyright 2017 SSS Bus | All Rights Reserved <br /></p>
                                                                                </div>
                                                                            </div>
                                                                            </body>
                                                                            </html>
