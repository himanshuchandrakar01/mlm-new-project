<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <!-- <h1>
        <i class="fa fa-users"></i> User Management
        <small>Add / Edit User</small>
      </h1> -->
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
                 
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Reference Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <?php $this->load->helper("form"); ?>
                   
                        <div class="box-body">
                            <div class="row">
                                <?php $name=$_SESSION['rname'];

                                    $sname=str_replace(" ","%20",$name);?>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name">link</label>
                                       <input type="text" value="https://vikassamiti.org/membersignup?aid=<?=$_SESSION['userId']?>&aname=<?=$sname;?>&amobile=<?=$_SESSION['mobile'];?>" class="form-control" name="">
                                    </div>
                                </div>
                            </div>
                           
                        </div><!-- /.box-body -->
    
                    
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