<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.validate.js"></script>
         <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"> 
      
     <script type="text/javascript">
               $().ready(function() {
                $("#register").validate({
                rules: {
                        
                        "email":{
                            required:true,
                            email:true
                        },
                        "phone": "required",
                       
            </script>   
    </head>
    <body id="app-layouts">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">
                        <img src="">
                    </a>
                    <div class="collapse navbar-collapse" id="app-navbar-collapse">
                        <!-- Left Side Of Navbar -->
                        <ul class="nav navbar-nav">
                        </ul>

                        <!-- Right Side Of Navbar -->
                       

                                
                    </div>
                </div> 
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                   <div class="panel-heading"><h4>Forget Password</h4></div>
                        <div class="panel-body">                         
                            <form name="forget password" id="register" method="post" action="getpassword.php">
                                
                                 Email: <input class="form-control" type="text" id="email" name="email"><br>
                                Phone: <input class="form-control" type="text" id="phone" name="phone"><br>
                                Username: <input class="form-control" type="text" id="username" name="username"><br>
           
                                <input class="btn-default" type="submit" name="submit" value="Submit">
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </body>
</html>
