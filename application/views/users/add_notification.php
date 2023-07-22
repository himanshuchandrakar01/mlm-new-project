<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Add Notification
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
                        <h3 class="box-title">Enter  Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <?php $this->load->helper("form"); ?>
                    <form role="form" id="addUser" action="<../addNotice" method="post" role="form">
                        <div class="box-body">
                            
                            
                            
                            <div class="row">
                                <?php
                                if (isset($_REQUEST["success"])) {
                                   echo $_REQUEST["success"];
                                }
                                if (isset($_REQUEST["unsuccess"])) {
                                   echo $_REQUEST["unsuccess"];
                                }

                                ?>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="role">Notice For</label>
                                        <select class="form-control required" id="role" name="notice_for">
                                            <option value="Users">Users</option>
                                            <option value="Members">Members</option>
                                           
                                        </select>
                                    </div>
                                </div>    
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="isAdmin">Notice Details</label>
                                       <textarea class="form-control" name="notice_dtls"></textarea>
                                    </div>
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