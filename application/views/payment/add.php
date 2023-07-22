<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-user-circle-o" aria-hidden="true"></i> Payment Management
        <!-- <small>Add / Edit Task</small> -->
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
                
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Payment Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <?php $this->load->helper("form"); ?>
                    <form role="form" id="addPayment" action="<?php base_url()?>paymentstore" method="post" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="taskTitle">Assistant Id</label>
                                       
                                        <input type="text" class="form-control" name="name" required />
                                    </div>
                                </div>
                                    <div class="col-md-6">    
                                    <div class="form-group">
                                        <label for="taskTitle">Payment Holder Name</label>
                                        <input type="text" class="form-control" name="holder_name" />
                                    </div>
                                </div>
                                    
                                </div>
                                <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label>Amount</label>
                                        <select name="amount" class="form-control" required>
                                            <option>Select amount</option>
                                            <option value="600">600</option>
                                            <option value="1100">1100</option>
                                        </select>
                                    <!-- <input type="number" name="amount" class="form-control"> -->
                                        
                                    </div>
                                </div>
                                    <div class="col-md-6">    
                                    <div class="form-group">
                                        <label>Payment Image Upload</label>
                                    <input type="file" name="payment_upload" class="form-control">
                                    </div>
                                </div>
                                    
                                </div>
                                
                            </div>

                        </div><!-- /.box-body -->
    
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Submit" />
                            <!-- <input type="reset" class="btn btn-default" value="Reset" /> -->
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

