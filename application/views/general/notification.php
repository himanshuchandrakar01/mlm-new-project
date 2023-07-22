<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Add Member
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
                        <h3 class="box-title">Add Notification</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <?php $this->load->helper("form"); ?>
                    <form role="form" id="addUser" action="../addNewUsers" method="post" role="form" >
                        <div class="box-body">
                     
                    
                           
                            <div class="row">
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="role">Notice For</label>
                                        <select class="form-control required" id="role" name="notice_for">
                                            <option value="0">Select</option>
                                           
                                           
                                              <option value="co-ordinates">Member</option>
                                            
                                              <option value="17">User</option>
                                            
                                            
                                        </select>
                                    </div>
                                </div>    
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="isAdmin">Notice Details</label>
                                        <textarea class="form-control" name="notice_dtl"></textarea> 
                                        <!-- <select class="form-control required" id="isAdmin" name="isAdmin">
                                            <option value="<?= REGULAR_USER ?>">Regular User</option>
                                            <option value="<?= SYSTEM_ADMIN ?>">System Administrator</option>
                                        </select> -->
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Candidate File(option)</label>
                                    <input type="file" name="profile" class="form-control">
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
<script src="<?php echo base_url(); ?>assets/js/addUser.js" type="text/javascript"></script>