<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view('layout/header') ?>
  <title>Edit</title>
</head>
<body>
  <div id="wrapper">
    <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
      <div class="navbar-header">
        <a class="navbar-brand" href="<?php echo base_url('co_address/index'); ?>">Address Book</a> 
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
            <a  href="<?php echo base_url('co_address'); ?>" ><i class="glyphicon glyphicon-search fa-3x"></i> Search</a>
          </li>
          <li>
            <a href="<?php echo base_url('co_address/view_insert'); ?>"><i class="glyphicon glyphicon-plus fa-3x"></i> Insert</a>
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
      <!-- UPLOAD NAMECARD PICTURE -->
      <div style="height:220px;" class="col-md-4">
        <img style="width:300px; height:215px;" src="<?php echo base_url($row->namecard); ?>">
      </div>
        <div class="col-md-8" style="height:220px;">
          <font color="white">Upload Name Card</font>
          <br /><br />
          <form action="<?php echo base_url('co_upload/upload'); ?>" accept-charset="utf-8" method="post" enctype="multipart/form-data">
            <input type="file" name="namecard" size="20" />
            <input type="hidden" name="id" value="<?php echo $row->id; ?>">
            <br/>
            <input type="submit" value="upload" />
          </form>
          <?php 
          if ($error != FALSE) {
          ?>
            <font color="red"><?php echo $error; ?></font>
          <?php
          }
           ?>
        </div>
      
      <br/>
      <div style="height:20px;"></div>
      <!-- ./UPLOAD NAMECARD PICTURE -->
        
      <div><h5 style="color:red;">* = จำเป็นต้องกรอก</h5></div>
      <form method="post" action="<?php echo base_url('co_address/edit'); ?>">
        <table>
          <tr>
            <div>
              <td width="100px">
                <h4 class="label_insert">ID</h4>
              </td>
            </div>
            <div>
              <td class="input_insert">
                <input type="text" name="id" class="form-control" value="<?php echo $row->id; ?>" readonly/>
              </td>
            </div>
            <td class="asterisk">
              <font color="red"></font>
            </td>
          </tr>
          <!--first name input-->
          <tr>
            <div>
              <td width="100px">
                <h4 class="label_insert">First Name</h4>
              </td>
            </div>
            <div>
              <td class="input_insert">
                <input type="text" name="first_name" class="form-control" value="<?php echo $row->firstname; ?>" />
              </td>
            </div>
            <td class="asterisk">
              <font color="red"></font>
            </td>
          </tr>
          <!--lastname name input-->
          <tr>
            <div>
              <td width="100px">
                <h4 class="label_insert">Last Name</h4>
              </td>
            </div>
            <div>
              <td class="input_insert">
                <input type="text" name="last_name" class="form-control" value="<?php echo $row->lastname; ?>" />
              </td>
            </div>
            <td class="asterisk">
              <font color="red"></font>
            </td>
          </tr>
          <!--job input-->
          <tr>
            <div>
              <td width="100px">
                <h4 class="label_insert">Job</h4>
              </td>
            </div>
            <div>
              <td class="input_insert">
                <input type="text" name="job" class="form-control" value="<?php echo $row->job; ?>" />
              </td>
            </div>
            <td class="asterisk">
              <font color="red"></font>
            </td>
          </tr>
          <!--job description input-->
          <tr>
            <div>
              <td width="100px">
                <h4 class="label_insert">Job Description</h4>
              </td>
            </div>
            <div>
              <td class="input_insert">
                <textarea name="job_description" rows="4" cols="100" value="<?php echo $row->job_description; ?>"></textarea>
              </td>
            </div>
            <td class="asterisk">
              <font color="red"></font>
            </td>
          </tr>
          <!--company input-->
          <tr>
            <div>
              <td width="100px">
                <h4 class="label_insert">Company</h4>
              </td>
            </div>
            <div>
              <td class="input_insert">
                <input type="text" name="company" class="form-control" value="<?php echo $row->company; ?>" />
              </td>
            </div>
            <td class="asterisk">
              <font color="red"></font>
            </td>
          </tr>
          <!--Company url input-->
          <tr>
            <div>
              <td width="100px">
                <h4 class="label_insert">Web</h4>
              </td>
            </div>
            <div>
              <td class="input_insert">
                <input type="text" name="url_company" class="form-control" value="<?php echo $row->url_company; ?>" />
              </td>
            </div>
            <td class="asterisk">
              <font color="red"></font>
            </td>
          </tr>
          <!--address input-->
          <tr>
            <div>
              <td width="100px">
                <h4 class="label_insert">Address</h4>
              </td>
            </div>
            <div>
              <td class="input_insert">
                <textarea name="address" rows="4" cols="100" value="<?php echo $row->address; ?>"></textarea>
              </td>
            </div>
            <td class="asterisk">
              <font color="red"></font>
            </td>
          </tr>
          <!--postcode input-->
          <tr>
            <div>
              <td width="100px">
                <h4 class="label_insert">Post Code</h4>
              </td>
            </div>
            <div>
              <td class="input_insert">
                <input type="text" name="post_code" class="form-control" value="<?php echo $row->postcode; ?>" require />
              </td>
            </div>
            <td class="asterisk">
              <font color="red">*</font>
            </td>
          </tr>
          <!--telephone input-->
          <tr>
            <div>
              <td width="100px">
                <h4 class="label_insert">Telephone</h4>
              </td>
            </div>
            <div>
              <td class="input_insert">
                <input type="text" name="tel" class="form-control" value="<?php echo $row->tel; ?>" />
              </td>
            </div>
            <td class="asterisk">
              <font color="red"></font>
            </td>
          </tr>
          <!--mobile phone input-->
          <tr>
            <div>
              <td width="100px">
                <h4 class="label_insert">Mobile</h4>
              </td>
            </div>
            <div>
              <td class="input_insert">
                <input type="text" name="mobile" class="form-control" value="<?php echo $row->mobile; ?>" />
              </td>
            </div>
            <td class="asterisk">
              <font color="red"></font>
            </td>
          </tr>
          <!--fax input-->
          <tr>
            <div>
              <td width="100px">
                <h4 class="label_insert">Fax</h4>
              </td>
            </div>
            <div>
              <td class="input_insert">
                <input type="text" name="fax" class="form-control" value="<?php echo $row->fax; ?>" />
              </td>
            </div>
            <td class="asterisk">
              <font color="red"></font>
            </td>
          </tr>
          <!--email input-->
          <tr>
            <div>
              <td width="100px">
                <h4 class="label_insert">Email</h4>
              </td>
            </div>
            <div>
              <td class="input_insert">
                <input type="email" name="email" class="form-control" value="<?php echo $row->email; ?>" />
              </td>
            </div>
            <td class="asterisk">
              <font color="red"></font>
            </td>
          </tr>
          <!--history input-->
          <tr>
            <div>
              <td width="100px">
                <h4 class="label_insert">History</h4>
              </td>
            </div>
            <div>
              <td class="input_insert">
                <input type="text" name="history" class="form-control" value="<?php echo $row->history; ?>" />
              </td>
            </div>
            <td class="asterisk">
              <font color="red"></font>
            </td>
          </tr>
          <!--remark input-->
          <tr>
            <div>
              <td width="100px">
                <h4 class="label_insert">Remark</h4>
              </td>
            </div>
            <div>
              <td class="input_insert">
                <input type="text" name="remark" class="form-control" value="<?php echo $row->remark; ?>" />
              </td>
            </div>
            <td class="asterisk">
              <font color="red"></font>
            </td>
          </tr>
          <!--level input-->
          <tr>
            <div>
              <td width="100px">
                <h4 class="label_insert">Level</h4>
              </td>
            </div>
            <div>
              <td class="input_insert">
                <select name="level" class="form-control" style=" width:100px;">
                    <option value="5" <?php if ($row->level == 5) {
                      echo 'selected';
                    } ?>>
                      5
                    </option>
                    <option value="4" <?php if ($row->level == 4) {
                      echo 'selected';
                    } ?>>
                      4
                    </option>
                    <option value="3" <?php if ($row->level == 3) {
                      echo 'selected';
                    } ?>>
                      3
                    </option>
                    <option value="2" <?php if ($row->level == 2) {
                      echo 'selected';
                    } ?>>
                      2
                    </option>
                    <option value="1" <?php if ($row->level == 1) {
                      echo 'selected';
                    } ?>>
                      1
                    </option>
                  </select>
              </td>
            </div>
            <td class="asterisk">
              <font color="red"></font>
            </td>
          </tr>
        </table>
        <br/><br/>
        <div style="padding-left:85%">
          <input type="submit" class="btn btn-default" value="Update">
        </div>
      </form>
      <!-- /. CONTENT --> 
    </div>
      <!-- /. PAGE WRAPPER  -->
    </div>
  <!-- /. WRAPPER  -->
<?php $this->load->view('layout/script_footer') ?>
</body>
</html>