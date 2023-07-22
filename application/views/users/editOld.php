<?php
$userId = $userInfo->userId;
$name = $userInfo->name;
$email = $userInfo->email;
$mobile = $userInfo->mobile;
$roleId = $userInfo->roleId;
$isAdmin = $userInfo->isAdmin;
?>

 
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <?php if($_SESSION['payment_sts']=="pending"){?>
              <li >
              <a href="<?php echo base_url(); ?>Payment/paymentnew" class="btn btn-success" style="margin:10px;">
               Active Now
              </a>
            </li>
          <?php }elseif ($_SESSION['payment_sts']=="cancel") {
            ?>
            <li >
              <a href="<?php echo base_url(); ?>Payment/paymentnew" class="btn btn-success" style="margin:10px;">
                Active Now
              </a>
            </li>
            <?php
          } 


          elseif (($_SESSION['rid']!=1)&&($_SESSION['rid']!=17)) {
            ?>
          <li>
              <a href="<?php echo base_url(); ?>dashboard">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span></i>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>MemberList">
                <i class="fa fa-tasks"></i> <span>Members List</span></i>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>wallet-details">
                <i class="fa fa-tasks"></i> <span>Wallet</span></i>
              </a>
            </li>
           <!--  <li>
              <a href="<?php echo base_url(); ?>user_wallet">
                <i class="fa fa-tasks"></i> <span>Wallet</span></i>
              </a>
            </li> -->
            <?php if ($_SESSION['rid']==17) {?>
            <li>
              <a href="<?php echo base_url(); ?>generaluserids">
                <i class="fa fa-users"></i> <span>ID Card Section</span></i>
              </a>
            </li>
            
          <?php } else{ ?>
            <li>
              <a href="<?php echo base_url(); ?>userIds">
                <i class="fa fa-users"></i> <span>ID Card Section</span></i>
              </a>
            </li>
          <?php } ?>
            <li>
              <a href="<?php echo base_url(); ?>dashboard">
                <i class="fa fa-users"></i> <span>Edit Profile</span></i>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>bank-details">
                <i class="fa fa-tasks"></i> <span>Bank & KYC Details</span></i>
              </a>
            </li>
            <?php if ($_SESSION['rid']==16) {?>
            <li>
              <a href="<?=base_url();?>addtaskuser">
                <i class="fa fa-tasks"></i> <span>Add Member</span></i>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>refer-link">
                <i class="fa fa-users"></i> <span>Refer link</span></i>
              </a>
            </li>
            <?php } else{ ?>
              <li>
              <a href="<?php echo base_url(); ?>addNewMember">
                <i class="fa fa-tasks"></i> <span>Add Member</span></i>
              </a>
            </li>
          <?php } ?>

         <?php }
         elseif($_SESSION['rid']==17){ ?>

          <li>
              <a href="<?php echo base_url(); ?>dashboard">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span></i>
              </a>
            </li>
 <li>
              <a href="<?php echo base_url(); ?>generaluserids">
                <i class="fa fa-users"></i> <span>ID Card Section</span></i>
              </a>
            </li>
 <li>
              <a href="<?php echo base_url(); ?>user-profile">
                <i class="fa fa-users"></i> <span> Profile</span></i>
              </a>
            </li>
<li>
              <a href="<?php echo base_url(); ?>payment-receipt">
                <i class="fa fa-tasks"></i> <span>Payment Receipt</span></i>
              </a>
            </li>
         <?php } else { ?>
            <li>
              <a href="<?php echo base_url(); ?>dashboard">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span></i>
              </a>
            </li>

            <!-- <li class="treeview">
              <a href="#">
                <i class="fa fa-share"></i> <span>Multilevel</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                <li class="treeview">
                  <a href="#"><i class="fa fa-circle-o"></i> Level One
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                    <li class="treeview">
                      <a href="#"><i class="fa fa-circle-o"></i> Level Two
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                      </a>
                      <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
              </ul>
            </li> -->
            <?php
            if($is_admin == 1)
            {
            ?>
             <li>
              <a href="<?php echo base_url(); ?>userListing">
                <i class="fa fa-users"></i>
                <span>All Users</span>
              </a>
            </li>
            <!-- <li>
              <a href="<?php echo base_url(); ?>StateList">
                <i class="fa fa-users"></i>
                <span>State Users</span>
              </a>
            </li> -->
            <!-- <li>
              <a href="<?php echo base_url(); ?>All-StateList">
                <i class="fa fa-users"></i>
                <span>State Users</span>
              </a>
            </li> -->
            <li>
              <a href="<?php echo base_url(); ?>Districtlist">
                <i class="fa fa-users"></i>
                <span>District Users</span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>AssistantList">
                <i class="fa fa-users"></i>
                <span>Assistant Users</span>
              </a>
            </li>
           <!--  <li>
              <a href="<?php echo base_url(); ?>roles/roleListing">
                <i class="fa fa-user-circle-o " aria-hidden="true"></i>
                <span>Roles</span>
              </a>
            </li> -->
            <?php
            }
            ?>
            <?php
            // if($is_admin == 1 ||
            //     (array_key_exists('Booking', $access_info) 
            //     && ($access_info['Booking']['list'] == 1 || $access_info['Booking']['total_access'] == 1)))
            //{
              ?>
            <!-- <li>
              <a href="<?php echo base_url(); ?>booking">
                <i class="fa fa-anchor"></i>
                <span>Booking</span>
              </a>
            </li> -->
              <?php
            //}
            ?>
            <?php
            if($is_admin == 1 ||
                (array_key_exists('Task', $access_info) 
                && ($access_info['Task']['list'] == 1 || $access_info['Task']['total_access'] == 1)))
            {
              ?>
            <li>
              <a href="<?php echo base_url(); ?>member-list">
                <i class="fa fa-tasks"></i>
                <span>Member list</span>
              </a>
            </li>
            <?php } ?>


            <?php
            if($is_admin == 1 ||
                (array_key_exists('Generaluser', $access_info) 
                && ($access_info['Generaluser']['list'] == 1 || $access_info['Generaluser']['total_access'] == 1)))
            {
              ?>
            <li>
              <a href="<?php echo base_url(); ?>generallist">
                <i class="fa fa-tasks"></i>
                <span>General user list</span>
              </a>
            </li>
            <?php } ?>

            <?php
            if($is_admin == 1 ||
                (array_key_exists('Wallet', $access_info) 
                && ($access_info['Wallet']['list'] == 1 || $access_info['Wallet']['total_access'] == 1)))
            {
              ?>
            <li>
              <a href="<?php echo base_url(); ?>wallet">
                <i class="fa fa-tasks"></i>
                <span>Wallet</span>
              </a>
            </li>
            <?php } ?>

            <?php
            if($is_admin == 1 ||
                (array_key_exists('Payment', $access_info) 
                && ($access_info['Payment']['list'] == 1 || $access_info['Payment']['total_access'] == 1)))
            {
              ?>
            <li>
              <a href="<?php echo base_url(); ?>member-payment">
                <i class="fa fa-tasks"></i>
                <span>Member Payments</span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>member-bank-details">
                <i class="fa fa-tasks"></i>
                <span>Member Bank Details</span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>userpaymentListing">
                <i class="fa fa-tasks"></i>
                <span>User Payments</span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>add-notice">
                <i class="fa fa-tasks"></i>
                <span>Add Notification</span>
              </a>
            </li>
            <?php } ?>


            <li>
              <a href="<?php echo base_url(); ?>membersignup">
                <!-- <i class="fa fa-tasks"></i> -->
                <!-- <span>Member Signup</span> -->
              </a>
            </li>
          <?php } ?>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
<div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> User Management
        <small>Add / Edit User</small>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
                
                
                
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter User Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    
                    <form role="form" action="../editUser" method="post" id="editUser">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="fname">Full Name</label>
                                        <input type="text" class="form-control" id="fname" placeholder="Full Name" name="fname" value="<?php echo $name; ?>" maxlength="128">
                                        <input type="hidden" value="<?php echo $userId; ?>" name="userId" id="userId" />    
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $email; ?>" maxlength="128">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" placeholder="Password" name="password" maxlength="20">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cpassword">Confirm Password</label>
                                        <input type="password" class="form-control" id="cpassword" placeholder="Confirm Password" name="cpassword" maxlength="20">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mobile">Mobile Number</label>
                                        <input type="text" class="form-control" id="mobile" placeholder="Mobile Number" name="mobile" value="<?php echo $mobile; ?>" maxlength="10">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="role">Role</label>
                                        <select class="form-control" id="role" name="role">
                                            <option value="0">Select Role</option>
                                            <?php
                                            if(!empty($roles))
                                            {
                                                foreach ($roles as $rl)
                                                {
                                                    $roleText = $rl->role;
                                                    $roleClass = false;
                                                    if ($rl->roleStatus == INACTIVE) {
                                                        $roleText = $rl->role . ' (Inactive)';
                                                        $roleClass = true;
                                                    }
                                                    ?>
                                                    <option value="<?php echo $rl->roleId; ?>" <?php if ($roleClass) { echo "class=text-warning"; } ?>  <?php if($rl->roleId == $roleId) { echo "selected=selected";} ?>><?= $roleText ?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="isAdmin">User Type</label>
                                        <select class="form-control required" id="isAdmin" name="isAdmin">
                                            <option value="<?= REGULAR_USER ?>" <?php if($isAdmin == REGULAR_USER) {echo "selected=selected";} ?>>Regular User</option>
                                            <option value="<?= SYSTEM_ADMIN ?>" <?php if($isAdmin == SYSTEM_ADMIN) {echo "selected=selected";} ?>>System Administrator</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                </div>
                            </div> 
                        </div><!-- /.box-body -->
    
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Submit" />
                            <input type="reset" class="btn btn-default" value="Reset" />
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <?php
                    $this->load->helper('form');
                    $error = $this->session->flashdata('error');
                    if($error)
                    {
                ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('error'); ?>                    
                </div>
                <?php } ?>
                <?php  
                    $success = $this->session->flashdata('success');
                    if($success)
                    {
                ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php } ?>
                
                <div class="row">
                    <div class="col-md-12">
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                    </div>
                </div>
            </div>
        </div>    
    </section>
</div>

<script src="<?php echo base_url(); ?>assets/js/editUser.js" type="text/javascript"></script>