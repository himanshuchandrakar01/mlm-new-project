<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $pageTitle; ?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="./assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- FontAwesome 4.3.0 -->
    <link href="./assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="./assets/bower_components/Ionicons/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="./assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="./assets/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <style>
    	.error{
    		color:red;
    		font-weight: normal;
    	}
    </style>
    <script src="./assets/bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript">
        var baseURL = "<?php echo base_url(); ?>";
    </script>
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo base_url(); ?>" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b></b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b><?php
                                            if (($_SESSION['rid']==14)) { ?>
                                             STATE PANEL
                                            <?php }
                                            ?>
                                            <?php
                                            if (($_SESSION['rid']==15)) { ?>
                                              DISTRICT PANEL
                                            <?php }
                                            ?>
                                            <?php
                                            if (($_SESSION['rid']==16)) { ?>
                                              ASSISTANT PANEL
                                            <?php }
                                            ?>
                                            <?php
                                            if (($_SESSION['rid']==17)) { ?>
                                              USER PANEL
                                            <?php }
                                            ?>
                                            <?php
                                            if (($_SESSION['rid']==1)) { ?>
                                             ADMIN PANEL
                                            <?php }
                                            ?>
                                            </b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown tasks-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                  <i class="fa fa-history"></i>
                </a>
                <ul class="dropdown-menu">
                  <li class="header"> Last Login : <i class="fa fa-clock-o"></i> <?= empty($last_login) ? "First Time Login" : $last_login; ?></li>
                </ul>
              </li>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="assets/dist/img/avatar.png" class="user-image" alt="User Image"/>
                  <span class="hidden-xs"><?php echo $name; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    
                    <img src="assets/dist/img/avatar.png" class="img-circle" alt="User Image" />
                    <p>
                      <?php echo $name; ?>
                      <small><?php echo $role_text; ?></small>
                    </p>
                    
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="<?php echo base_url(); ?>profile" class="btn btn-warning btn-flat"><i class="fa fa-user-circle"></i> Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo base_url(); ?>logout" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i> Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <?php if($_SESSION['payment_sts']=="pending"){?>
              <li >
              <a href="<?php echo base_url(); ?>userpayment-new" class="btn btn-success" style="margin:10px;">
               Active Now
              </a>
            </li>
            <li >
              <a href="<?php echo base_url(); ?>productlist" class="btn btn-primary" style="margin:10px;">
               Products list 
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
            <!-- <?php if ($_SESSION['rid']==17) {?>
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
          <?php } ?> -->
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

            <li >
              <a href="<?php echo base_url(); ?>productlist" class="btn btn-primary" style="margin:10px;">
               Products list 
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