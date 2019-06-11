<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Welcome to SSS Travels</title>
<link rel="stylesheet" type="text/css" href="xres/css/style.css" />
<link rel="icon" type="image/png" href="xres/images/favicon.png" />
<link type="text/css" href="css/styles.css" rel="stylesheet" media="all" />

<link rel="stylesheet" href="admin/febe/style.css" type="text/css" media="screen" charset="utf-8">
    <script src="admin/argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
    <script src="admin/js/application.js" type="text/javascript" charset="utf-8"></script>	
<!--sa poip up-->
<link href="admin/src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="admin/lib/jquery.js" type="text/javascript"></script>
<script src="admin/src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
</head>

<body>
<div id="wrapper">
	<div id="header">
    
        <ul id="mainnav">
			<li><a href="index.php">Home</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="routes.php">Routes</a></li>
      
            <li><a href="contact.php">Contact Us</a></li>
            <li class="current"><a href="main-course.php">Notice</a></li>
    	</ul>
	</div>
    <div id="content">
    	

					<table cellpadding="1" cellspacing="1" id="resultTable">
						<thead>
                                                    <tr>
								<th  style="border-left: 1px solid #C1DAD7"> Notice</th>
                                                                <th> Special Offer </th>
							</tr>
						</thead>
                                                            <tbody>
						<?php
							include('db.php');
							$result = mysql_query("SELECT * FROM notice");
							while($row = mysql_fetch_array($result))
								{
									echo '<tr class="record">';
									echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['notice'].'</td>';
									echo '<td><div align="right">'.$row['specialoffer'].'</div></td>';
					
									echo '</tr>';
                                                                        }
							?> 
						</tbody>
                                                 </table>
        				<div class="column-clear"></div>
			<div class="clearfix"></div>
        </div>


     
<div id="footer">
	<h4>+977 9843303885 &bull; <a href="contact-us.php">Kathmandu , Bhaktapur </a></h4>
	<p>Hours of Operation&nbsp;&nbsp;&bull;&nbsp;&nbsp;fri - Sat: 10:00 am - 5:00 pm</p>
	<a href="index.php"><img src="xres/images/footer-logo2.jpg" alt="" /></a>
	
</div>

</div>
</body>
</html>
           