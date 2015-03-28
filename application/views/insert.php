<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view('layout/header') ?>
	<title>Insert</title>
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
            <a  href="<?php echo base_url('co_address'); ?>" ><i class="glyphicon glyphicon-search fa-3x"></i> Search</a>
          </li>
          <li>
            <a class="active-menu"  href="<?php echo base_url('co_address/view_insert'); ?>"><i class="glyphicon glyphicon-plus fa-3x"></i> Insert</a>
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
      <div><h5 style="color:red;">* = จำเป็นต้องกรอก</h5></div>
      <form method="post" action="<?php echo base_url('co_insert/insert'); ?>">
        <table>
          <!--first name input-->
          <tr>
            <div>
              <td width="100px">
                <h4 class="label_insert">First Name</h4>
              </td>
            </div>
            <div>
              <td class="input_insert">
                <input type="text" name="first_name" class="form-control" />
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
                <input type="text" name="last_name" class="form-control" />
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
                <input type="text" name="job" class="form-control" />
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
                <textarea name="job_description" rows="4" cols="100"></textarea>
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
                <input type="text" name="company" class="form-control" />
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
                <input type="text" name="url_company" class="form-control" />
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
                <textarea name="address" rows="4" cols="100"></textarea>
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
                <input type="text" name="post_code" class="form-control" require />
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
                <input type="text" name="tel" class="form-control" />
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
                <input type="text" name="mobile" class="form-control" />
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
                <input type="text" name="fax" class="form-control" />
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
                <input type="email" name="email" class="form-control" />
              </td>
            </div>
            <td class="asterisk">
              <font color="red"></font>
            </td>
          </tr>
          <!--name card input-->
          <tr>
            <div>
              <td width="100px">
                <h4 class="label_insert">Name Card</h4>
              </td>
            </div>
            <div>
              <td class="input_insert">
                <input type="text" name="namecard" class="form-control" />
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
                <input type="text" name="history" class="form-control" />
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
                <select name="level" class="form-control" style=" width:100px;" required>
                    <option value="5">5</option>
                    <option value="4">4</option>
                    <option value="3">3</option>
                    <option value="2">2</option>
                    <option value="1">1</option>
                  </select>
              </td>
            </div>
            <td class="asterisk">
              <font color="red">*</font>
            </td>
          </tr>
        </table>
        <br/><br/>
        <div style="padding-left:80%">
          <input type="submit" class="btn btn-default" value="Add Information">
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