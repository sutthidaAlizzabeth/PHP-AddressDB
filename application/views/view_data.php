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
            <a href="<?php echo base_url('co_address'); ?>" >
              <i class="glyphicon glyphicon-search fa-3x"></i>
               Search
            </a>
          </li>
          <li>
            <a  href="<?php echo base_url('co_address/view_insert'); ?>">
              <i class="glyphicon glyphicon-plus fa-3x"></i>
               Insert
            </a>
          </li>
          <li>
            <a  href="<?php echo base_url('co_admin/logout'); ?>">
              <i class="glyphicon glyphicon-off fa-3x"></i>
               Logout
               </a>
          </li>
        </ul>
      </div>
    </nav>  
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" style="background-color: #202020; padding-top:20px;">
      <!-- CONTENT -->
      <table style="width: 100%;">
        <tr>
          <td>
            <font color="white">
              <h3>INFORMATION</h3>
            </font>
          </td>
          <!--CHECK STAR LEVEL-->
          <td style="float:right">
            <?php 
            for ($i=0; $i < $row->level; $i++) { 
            ?>
            <div class="glyphicon glyphicon-star " style="color:yellow;"></div>
            <?php
            }
            ?>
          </td>
          <!-- ./CHECK STAR LEVEL-->
        </tr>
      </table>
      <div class="show_data_border">
        <table style="width: 100%;">
          <tr style="show_data_row">
            <th class="show_data_column row_header">First Name</th>
            <td class="show_data_column row_data"><?php echo $row->firstname; ?></td>
          </tr>
          <tr>
            <th class="show_data_column row_header">Last Name</th>
            <td class="show_data_column row_data"><?php echo $row->lastname; ?></td>
          </tr>
          <tr>
            <th class="show_data_column row_header">Job</th>
            <td class="show_data_column row_data"><?php echo $row->job; ?></td>
          </tr>
          <tr>
            <th class="show_data_column row_header">Job Description</th>
            <td class="show_data_column row_data"><?php echo $row->job_description; ?></td>
          </tr>
          <tr>
            <th class="show_data_column row_header">Company</th>
            <td class="show_data_column row_data"><?php echo $row->company; ?></td>
          </tr>
          <tr>
            <th class="show_data_column row_header">Company Website</th>
            <td class="show_data_column row_data"><?php echo $row->url_company; ?></td>
          </tr>
          <tr>
            <th class="show_data_column row_header">Address</th>
            <td class="show_data_column row_data"><?php echo $row->address.' รหัสไปรษณีย์'.$row->postcode; ?></td>
          </tr>
          <tr>
            <th class="show_data_column row_header">Telephone</th>
            <td class="show_data_column row_data"><?php echo $row->tel; ?></td>
          </tr>
          <tr>
            <th class="show_data_column row_header">Mobile</th>
            <td class="show_data_column row_data"><?php echo $row->mobile; ?></td>
          </tr>
          <tr>
            <th class="show_data_column row_header">Fax</th>
            <td class="show_data_column row_data"><?php echo $row->fax; ?></td>
          </tr>
          <tr>
            <th class="show_data_column row_header">Email</th>
            <td class="show_data_column row_data"><?php echo $row->email; ?></td>
          </tr>
          <tr>
            <th class="show_data_column row_header">Name Card</th>
            <td class="show_data_column row_data"><?php echo $row->namecard; ?></td>
          </tr>
          <tr>
            <th class="show_data_column row_header">History</th>
            <td class="show_data_column row_data"><?php echo $row->history; ?></td>
          </tr>
        </table>
      </div>
      <br/><br/>
        <table style="width: 100%;">
          <tr>
            <td colspan="2" style="float:right">
              <a class="btn btn-default" href="<?php echo base_url('co_address/view_edit/'.$row->id); ?>" role="button">Edit</a>
            </td>
          </tr>
        </table>
      </div>
		  <!-- /. CONTENT --> 
		</div>
      <!-- /. PAGE WRAPPER  -->
    </div>
  <!-- /. WRAPPER  -->
<?php $this->load->view('layout/script_footer') ?>
</body>
</html>