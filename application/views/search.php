<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view('layout/header') ?>
	<title>Search</title>
</head>
<body>
	<div id="wrapper">
    <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.html">Address Book</a> 
      </div>
  		<div style="color: white;padding: 15px 50px 5px 50px;float: right;font-size: 16px;">
  			<?php echo "<strong>Today</strong> ".date("d : m : Y"); ?>
  			&nbsp;
  		</div>
    </nav>   
    <!-- /. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
   	  <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
          <li>
            <a class="active-menu"  href="<?php echo base_url('co_address'); ?>" ><i class="glyphicon glyphicon-search fa-3x"></i> Search</a>
          </li>
          <li>
            <a  href="<?php echo base_url('co_address/view_insert'); ?>"><i class="glyphicon glyphicon-plus fa-3x"></i> Insert</a>
          </li>
          <li>
            <a  href="<?php echo base_url('co_admin/logout'); ?>"><i class="glyphicon glyphicon-off fa-3x"></i> Logout</a>
          </li>
        </ul>
      </div>
    </nav>  
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" style="background-color: #202020;">
      <!-- CONTENT -->
      <!-- Search By Name -->
      <div id="search_name">
        <form action="<?php echo base_url('co_address/search'); ?>" method="get">
          <table>
            <tr>
              <td width="20%">
                <h3 style="color:white;"> Search By </h3>
              </td>
              <td width="20%">
                  <select name="type" class="form-control" style="height:35px; width:100px;">
                    <option value="name">Name</option>
                    <option value="company">Company</option>
                    <option value="job">Job</option>
                  </select>
              </td>
              <td width="50%">
                  <div class="input-group">
                    <input type="text" name="key" class="form-control" placeholder="Enter key" autofocus required>
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="submit">Search!</button>
                    </span>
                  </div><!-- /input-group -->
              </td>
              <td>
                <a href="<?php echo base_url('co_address/searchAll'); ?>">
                  <div class="input-group">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="submit">See All</button>
                    </span>
                  </div> 
                </a>
              </td>
            </tr>
          </table>
        </form>
      </div>
      <br/>
      <br/>
      <!-- ./Search By Name -->
      <!-- SHOW RESULT OF SEARCHING -->
      <?php 
        if ($data != FALSE) 
        {
       ?>
      <div class="show_data_border">
        <table style="width: 100%;">
          <tr style="show_data_row">
            <th class="show_data_column row_header">Order</th>
            <th class="show_data_column row_header">First Name</th>
            <th class="show_data_column row_header">Last Name</th>
            <th class="show_data_column row_header">Company</th>
            <th class="show_data_column row_header">Job</th>
            <th class="show_data_column row_header">View</th>
            <th class="show_data_column row_header">Edit</th>
          </tr>
          <?php 
            $i = 0;
            foreach ($data as $row) {
              $i = $i+1;
          ?>
          <tr style="show_data_row">
            <td class="show_data_column row_data" style="text-align:center;"><?php echo $i ?></td>
            <td class="show_data_column row_data"><?php echo $row->firstname; ?></td>
            <td class="show_data_column row_data"><?php echo $row->lastname; ?></td>
            <td class="show_data_column row_data"><?php echo $row->company; ?></td>
            <td class="show_data_column row_data"><?php echo $row->job; ?></td>
            <td class="show_data_column row_data">
              <a href="<?php echo base_url('co_address/getSingleData/'.$row->id); ?>">
                <div class="glyphicon glyphicon-eye-open" style="margin-left:40%;"></div>
              </a>
            </td>
            <td class="show_data_column row_data">
              <a href="<?php echo base_url('co_address/view_edit/'.$row->id); ?>">
                <div class="glyphicon glyphicon-pencil" style="margin-left:40%;"></div>
              </a>
            </td>
          </tr>
          <?php
            }
           ?>
        </table>
      </div>
      <!-- ./SHOW RESULT OF SEARCHING -->
      <?php 
        }
        else 
        {
          if ($key != NULL) {
      ?>
      <!--WARNING SEARCHING-->
      <div class="alert alert-warning" role="alert">
        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
        <span class="sr-only">Error:</span>
        <?php echo '"'.$key.'"'; ?> does not exitst!!!
      </div>
      <!-- ./WARNING SEARCHING-->
      <?php
          }
        }
       ?>

		  <!-- /. CONTENT --> 
		</div>
      <!-- /. PAGE WRAPPER  -->
    </div>
  <!-- /. WRAPPER  -->
<?php $this->load->view('layout/script_footer') ?>
</body>
</html>