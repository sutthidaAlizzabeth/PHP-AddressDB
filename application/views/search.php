<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view('layout/header') ?>
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
   	  <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
          <li>
            <a class="active-menu"  href="" ><i class="glyphicon glyphicon-search fa-3x"></i> Search</a>
          </li>
          <li>
            <a  href="insert.php"><i class="glyphicon glyphicon-plus fa-3x"></i> Insert</a>
          </li>
          <li>
            <a  href="tab-panel.html"><i class="glyphicon glyphicon-off fa-3x"></i> Login</a>
          </li>
        </ul>
      </div>

    </nav>  
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" style="background-color: #202020;">
      <!-- CONTENT -->
      <!-- Search By Name -->
      <div id="search_name">
        <form action="co_search.php" method="post">
          <table>
            <tr>
              <td width="25%">
                <h3 style="color:white;"> Search By Name </h3>
                <input type="hidden" name="type" value="name">
              </td>
              <td>
                <div class="col-lg-10">
                  <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="Search by name">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="submit">Search!</button>
                    </span>
                  </div><!-- /input-group -->
                </div><!-- /.col-lg-6 -->
              </td>
            </tr>
          </table>
        </form>
      </div>
        <!-- /Search By Name -->
      <br/>
        <!-- Search By Company -->
      <div id="search_company">
        <form action="co_search.php" method="post">
          <table>
            <tr>
              <td width="25%">
                <h3 style="color:white;"> Search By Company </h3>
                <input type="hidden" name="type" value="company">
              </td>
              <td>
                <div class="col-lg-10">
                  <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="Search by company">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="submit">Search!</button>
                    </span>
                  </div><!-- /input-group -->
                </div><!-- /.col-lg-6 -->
              </td>
            </tr>
          </table>
        </form>
      </div>
		  <!-- /. CONTENT --> 
		</div>
      <!-- /. PAGE WRAPPER  -->
    </div>
  <!-- /. WRAPPER  -->
<?php $this->load->view('layout/script_footer') ?>
</body>
</html>