<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('layout/header') ?>
	<title>Login</title>
</head>
<body style="height:1000px;">
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
        <div>
          <h1 style="color:red;"><?php echo $this->session->flashdata('mgs'); ?></h1>
        </div>
        <!-- LOGIN -->
        	<div id="login-border">
	     <form action="<?php echo base_url('co_admin/login'); ?>" method="POST" role="login" id="login">
	 			 	<div class="">
	   					<input name="username" type="text" class="login-form-width form-control" placeholder="Username">
	   					<br/>
	   					<input name="password" type="text" class="form-control" placeholder="Password">
              <br/><br/>
	   					<button type="submit" class="btn btn-primary" style="width:100%;">Login</button>
	 				</div>
				</form>
			</div> 
		<!-- /. LOGIN --> 
		</div>
         <!-- /. PAGE WRAPPER  -->
    </div>
     <!-- /. WRAPPER  -->
<?php $this->load->view('layout/script_footer') ?>
</body>
</html>