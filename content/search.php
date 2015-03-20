<!DOCTYPE html>
<html>
<head>
  <?php include '../layout/header.html'; ?>
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
  		  <a href="#" class="btn btn-danger square-btn-adjust">Logout</a>
  		</div>
    </nav>   
    <!-- /. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
   		<?php include '../layout/main-menu.php'; ?>
    </nav>  
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" style="background-color: #202020;">
      <!-- CONTENT -->
		  <!-- /. CONTENT --> 
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