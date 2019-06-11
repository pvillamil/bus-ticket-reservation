<?php
	require_once('auth.php');
?>
<html>
<head>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<script src="argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>	
<!--sa poip up-->
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
   <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
  <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.validate.js"></script>
         <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"> 
      
     <script type="text/javascript">
               $().ready(function() {
                $("#register").validate({
                rules: {
                        "name": "required",
                        "email":{
                            required:true,
                            email:true
                        },
                        "phone": "required",
                        "password": "required",
                        "cnfpassword": 
                                {
                                    required:true,
                                    equalTo: "#password"
                                }
            },
                messages: {
                        "name": "<p style='color:red'>This Field is required</p>",
                        "email": {
                           required:"<p style='color:red'>This Field is required</p>",
                           email:"<p style='color:red'>Please Enter valid email</p>"
                            },
                        "phone": "<p style='color:red'>This Field is required</p>",
                        "password": "<p style='color:red'>This Field is required</p>",
                        "cnfpassword": 
                                {
                                    required:"<p style='color:red'>This Field is required</p>",
                                    equalTo: "<p style='color:red'>Password do not match</p>"
                                }
                        }
                    });   
                });
            </script>   
</head>
<body>
	<div id="container">
		<div id="adminbar-outer" class="radius-bottom">
			<div id="adminbar" class="radius-bottom">
				<a id="logo" href="dashboard.php"></a>
				<div id="details">
					<a class="avatar" href="javascript: void(0)">
					<img width="36" height="36" alt="avatar" src="img/avatar.jpg">
					</a>
					<div class="tcenter">
					Hello
					<strong><?php echo $_SESSION['SESS_FIRST_NAME']; ?></strong>
					!
					<br>
					<a class="alightred" href="../index.php">Logout</a>
					</div>
				</div>
			</div>
		</div>
		<div id="panel-outer" class="radius" style="opacity: 1;">
			<div id="panel" class="radius">
				<ul class="radius-top clearfix" id="main-menu">
					<li>
						<a href="dashboard.php">
							<img alt="Dashboard" src="img/m-dashboard.png">
							<span>Dashboard</span>
						</a>
					</li>
					
					<li>
						<a href="route.php">
                                                    <img alt="Statistics" src="img/bbbbb.jpg">
							<span>Bus</span>
						</a>
					</li>
					<li>
						<a href="setinventory.php">
							<img alt="Statistics" src="img/m-statistics.png">
							<span>Seat Inventory</span>
						</a>
					</li>
                                        <li>
                                            <a href="users.php">
                                                <img alt="Statistics" src="img/m-files.png">
							<span>Customers</span>
						</a>
					</li>
                                        <li>
                                            <a href="message.php">
                                                <img alt="Statistics" src="img/m-newsletter.png">
							<span>Messages</span>
						</a>
					</li>
                                         <li>
                                            <a href="notice.php">
                                                <img alt="Statistics" src="img/m-settings.png">
							<span>Notice</span>
						</a>
					</li>
                                        <li>
                                            <a class="active" href="newadmin.php">
                                                <img alt="Statistics" src="img/avatar.jpg">
							<span>New Admin</span>
						</a>
					</li>
					<div class="clearfix"></div>
				</ul>
				<div id="content" class="clearfix">
					<nav class="navbar navbar-default navbar-static-top">
            <div class="container">
               
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                   <div class="panel-heading"><h4>Register admin</h4></div>
                        <div class="panel-body">                         
                            <form name="register" id="register" method="post" action="newadmin_save.php">
                                Name: <input class="form-control" type="text" id="name" name="name"><br><br>
                                 Email: <input class="form-control" type="text" id="email" name="email"><br><br>
                                Phone: <input class="form-control" type="text" id="phone" name="phone"><br><br>
                                Username: <input class="form-control" type="text" id="username" name="username"><br><br>
                                Password: <input class="form-control" type="password" id="password" name="password"><br><br>
                                Confirm Password: <input class="form-control" type="password" id="cnfpassword" name="cnfpassword"><br><br>
                                <input class="btn-default" type="submit" name="submit" value="Submit">
                            </form>
                        </div>
                    </div>
            </div>
        </div>
                                </div>