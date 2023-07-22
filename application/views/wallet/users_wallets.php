<style type="text/css">
    h4,h5{
        padding-left: 10px;
    }
</style>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> User Wallet Amount Sending
        <!-- <small>Add / Edit User</small> -->
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
                 
                <div class="box box-primary">
                    <div class="box-header">
                        <h4 class="box-title">Enter User Details</h4>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <?php $this->load->helper("form"); ?>
                    <form role="form" id="addUser" action="../users_wallets_db" method="post" role="form" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="row">
                                <h4 class="box-title">User Info</h4>
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="id">Id</label>
                                        <input type="text" class="form-control" value="<?php echo $userid; ?>" name="user_id" readonly>
                                    </div>
                                    
                                </div>
                                <?php $userinfo=$this->db->query("select * from tbl_users where mobile='$userid'")->result();
                                    foreach ($userinfo as $userinfo) {
                                     $get_createdby_id=$userinfo->createdBy;
                                     $get_name=$userinfo->name;
                                      $amount=$userinfo->sending_payment_Amount; 
                                 }
                                     ?>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" value="<?php echo $get_name; ?>" name="user_name" readonly>
                                        <br>
                                        <label for="name">Amount</label>
                                        <input type="text" class="form-control" value="<?php echo $amount; ?>" name="user_sending_amount" id="amount" readonly onload="wallet();">
                                    </div>
                                </div>
                            </div>
                            <?php $userinfo=$this->db->query("select * from tbl_users where userId='$get_createdby_id'")->result();
                                    foreach ($userinfo as $userinfo) {
                                     $get_assistant_createdby_id=$userinfo->createdBy;
                                     $get_assistant_name=$userinfo->name;
                                     $get_assistant_mobile=$userinfo->mobile;
                                     // $get_createdby_id=$userinfo->createdBy; 
                                 }
                                     ?>
                                      <?php $a_per_amount=$amount*(17/100);
                                            $a_per_inc_amount=$amount*(8/100);
                                            $district_per_amount=$amount*(5/100);
                                            $state_per_amount=$amount*(3.5/100);
                                            ?>
                            <div class="row">
                                <h4 class="box-title">Assistant Info</h4>
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="fname">Assitant Id</label>
                                        <input type="text" class="form-control" value="<?php echo $get_assistant_mobile; ?>" id="fname" name="assistant_id" readonly>
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Assistant Name</label>
                                        <input type="text" class="form-control" id="email" value="<?php echo $get_assistant_name; ?>" name="assistant_name" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                       
                                           
                                        <label for="email"> Assistant Amount(%)</label>
                                        <input type="text" class="form-control" id="aamount" value="<?=$a_per_amount;?>" name="assistant_wallet_amount" readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email"> Assistant Incentive Amount(%)</label>
                                        <input type="text" class="form-control" id="aamount" value="<?=$a_per_inc_amount;?>" name="assistant_incentive_amount"readonly>
                                    </div>
                                </div>
                            </div>

                                    
                    <!-- 
                                    </div>
                                </div>
                            </div> -->
                             <?php $district_user=$this->db->query("select * from tbl_users where userId='$get_assistant_createdby_id'")->result();
                                    foreach ($district_user as $district_user) {
                                     $get_district_createdby_id=$district_user->createdBy;
                                     $get_district_name=$district_user->name;
                                     $get_district_mobile=$district_user->mobile;
                                     // $get_createdby_id=$userinfo->createdBy; 
                                 }
                                     ?>
                            <div class="row">
                                <h4 class="box-title">District Info</h4>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="dob">District Member Id</label>
                                        <input type="text" class="form-control" value="<?= $get_district_mobile;?>" name="district_id" readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="address">District Member Name</label>
                                        <input type="text" class="form-control" value="<?= $get_district_name;?>" name="district_name"readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="address">District Member Amount</label>
                                        <input type="text" class="form-control" value="<?= $district_per_amount;?>" name="district_wallet_amount" readonly>
                                    </div>
                                </div>
                                <!-- <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control" name="address">
                                    </div>
                                </div> -->
                            </div>
                     <?php $state_user=$this->db->query("select * from tbl_users where userId='$get_district_createdby_id'")->result();

                                    foreach ($state_user as $state_user) {


                                     $get_state_createdby_id=$state_user->createdBy;
                                     //echo $get_state_createdby_id;
                                     $get_state_name=$state_user->name;
                                     $get_state_mobile=$state_user->mobile;
                                     // $get_createdby_id=$userinfo->createdBy; 
                                 }
                                     ?>
                            <div class="row">
                                <h4 class="box-title">State User Info</h4>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mobile">State User Id</label>
                                        <input type="text" class="form-control required digits" id="mobile" value="<?php echo $get_state_mobile; ?>" name="state_id" readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="role">State User Name</label>
                                        <input type="text" class="form-control required digits" id="mobile" value="<?php echo $get_state_name; ?>" name="state_name" readonly>
                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="role">State User Amount</label>
                                        <input type="text" class="form-control required digits" id="mobile" value="<?php echo $state_per_amount; ?>" name="state_amount" readonly>
                                        
                                    </div>
                                </div>    
                            </div>
                           <!--  <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="isAdmin">Op. Area</label>
                                       <input type="text" name="area" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Candidate Image</label>
                                    <input type="file" name="profile" class="form-control">
                                </div>
                            </div> --> 
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
<script src="<?php echo base_url(); ?>assets/js/addUser.js" type="text/javascript"></script>
<script type="text/javascript">
     function wallet() {
        var amount=getElementById('amount').value;
        var amount1=parseInt(amount)*(25/100);
        getElementById('aamount').value=""+amount1;
    }
</script>