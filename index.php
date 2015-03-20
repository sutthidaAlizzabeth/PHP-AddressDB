<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="assets/css/custom_change.css" rel="stylesheet" />
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
	<title>Login</title>
</head>
<body>
	<div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html">Address Book</a> 
            </div>
  			<div style="color: white;padding: 15px 50px 5px 50px;float: right;font-size: 16px;">
  				<?php 
  					echo "<strong>Today</strong> ".date("d : m : Y");
  				?>
  				&nbsp;
  				<!--
  				<a href="#" class="btn btn-danger square-btn-adjust">Logout</a>
  				-->
  			</div>
        </nav>   
           <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
   			<!-- HERE!!! FOR MAIN MENU -->           
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" style="background-color: #202020;">
        <!-- LOGIN -->
        	<div id="login-border">
	       		<form class="navbar-form navbar-left" role="login" id="login">
	 			 	<div class="form-group">
	   					<input type="text" class="form-control" placeholder="Username">
	   					<br/><br/>
	   					<input type="text" class="form-control" placeholder="Password">
	   					<button type="submit" class="btn btn-primary">Login</button>
	 				</div>
				</form>
			</div> 
		<!-- /. LOGIN --> 
		</div>
         <!-- /. PAGE WRAPPER  -->
    </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>

</body>
</html>