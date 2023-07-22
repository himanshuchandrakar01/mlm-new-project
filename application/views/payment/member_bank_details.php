<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Add Bank Details
        <!-- <small>Add / Edit User</small> -->
      </h1>
    </section>
    <?php  $id1=$_SESSION['mobile'];
                            //$this->db->where("user_id=",$id);


                            $userdata1=$this->db->query("select * from bank_details where user_id='$id1' ")->result();
                            // print_r(array_count_values($userdata1));
                            //  exit();
                            if (empty($userdata1)) {
                                # code...
                            

                             ?>
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
                 
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Bank Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <?php $this->load->helper("form"); ?>
                    
                    <form role="form" id="addUser" action="../addBankDetails_db" method="post" role="form" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="id">Id</label>
                                        <input type="text" class="form-control" value="<?php echo $_SESSION['mobile']; ?>" name="id" readonly>
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" value="<?php echo $_SESSION['name']; ?>" name="user_name" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="fname">Account No.</label>
                                        <input type="text" class="form-control" id="fname" name="account_no" maxlength="128">
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Bank Name</label>
                                        <input type="text" class="form-control" id="email"  name="bank_name" maxlength="128">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="dob">IFSC Code</label>
                                        <input type="text" class="form-control" name="ifsc_code">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="address">Account Holder Name</label>
                                        <input type="text" class="form-control" name="holder_name">
                                    </div>
                                </div>
                                <!-- <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control" name="address">
                                    </div>
                                </div> -->
                            </div>
                            <div class="box-header">
                        <h3 class="box-title">KYC Details</h3>
                    </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mobile">Aadhar Number</label>
                                        <input type="text" class="form-control required digits" id="mobile"  name="aadhar_no" maxlength="10">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="role">PAN Number</label>
                                        <input type="text" class="form-control required digits" id="mobile" value="<?php echo set_value('mobile'); ?>" name="pan_no" maxlength="10">
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
    <?php } ?>
     <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Bank Details</h3>
                        <table class="table ">
                            <tr>
                                <th>S.No.</th>
                                <th>Account Holder Name</th>
                                <th>Account No.</th>
                                <th>Bank Name</th>
                                <th>Aadhar No.</th>
                                <th>PAN No.</th>
                                <th>Status</th>
                                <th>Date</th>
                            </tr>
                            <?php 
                            $id=$_SESSION['mobile'];
                            //$this->db->where("user_id=",$id);


                            $userdata=$this->db->query("select * from bank_details where user_id='$id' ")->result();
                            $sn=1;
                            
                            foreach ($userdata as $userdata) {
                              
                            ?>
                            <tr>
                                <td><?=$sn;?></td>
                                <td><?=$userdata->holder_name;?></td>
                                <td><?=$userdata->account_no;?></td>
                                <td><?=$userdata->bank_name;?></td>
                                <td><?=$userdata->aadhar_no;?></td>
                                <td><?=$userdata->pan_no;?></td>
                                <td><?=$userdata->status;?></td>
                                <td><?=$userdata->date;?></td>
                            </tr>
                            <?php $sn++;

                             } ?>
                        </table>
                    </div>
            </div>
        </div>
    </section>
    
</div>
<script src="<?php echo base_url(); ?>assets/js/addUser.js" type="text/javascript"></script>