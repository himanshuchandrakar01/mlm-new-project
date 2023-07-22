<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-user-circle-o" aria-hidden="true"></i> Member Management
        
      </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12 text-right">
                <div class="form-group">
                   <a class="btn btn-primary" href="<?php echo base_url(); ?>add-new-member"><i class="fa fa-plus"></i> Add New Member</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
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
        <div class="row">
            <div class="col-xs-12"> 
              <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Member List</h3>
                    <div class="box-tools">
                        <form action="<?php echo base_url() ?>task/taskListing" method="POST" id="searchList">
                            <div class="input-group">
                              <input type="text" name="searchText" value="<?php echo $searchText; ?>" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                              <div class="input-group-btn">
                                <button class="btn btn-sm btn-default searchList"><i class="fa fa-search"></i></button>
                              </div>
                            </div>
                        </form>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                        <th>SNo.</th>
                        <th>Wallet</th>
                        <th>Payment Status</th>
                        <th>Apply for</th>
                        <th>Assistant Id</th>
                        <th>Assistant Name</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>DOB</th>
                        <th>Father/Husband Name</th>
                        <th>Profession</th>
                        <th>Blood group</th>
                        <th>State</th>
                        <th>District</th>
                        <th>Mobile no</th>
                        <th>Aadhar no</th>
                        <th>Address</th>
                        <th>Pincode</th>
                        <th>Email</th>
                        <th>Idcard</th>
                        <th>Profile pic</th>
                        <th>Front card</th>
                        <th>Back card</th>
                        <th>Other document</th>
                        <th>Created On</th>
                        <?php  if($_SESSION['rname']=="System Administrator"){ ?>
                        <th class="text-center">Action</th>
                    <?php } ?>
                    </tr>
                    <?php
                    $sl=1;
                    if(!empty($records))
                    {
                        foreach($records as $record)
                        {
                    ?>
                    <tr>
                        <td><?php echo $sl++;?></td>
                        <td>
                            <?php
                            $umobile=$record->mobileno;

                             $status=$this->db->query("select * from wallet_transaction where user_id='$umobile'")->result();
                                if (empty($status)) {
                                    ?>
                                <a href="<?=base_url();?>Wallet/users_wallets?id=<?php echo $record->mobileno; ?>" class="btn btn-primary"> distribute money</a>
                                    <?php
                                }else{
                                    ?>
                                
                            <button type="button" class="btn btn-success"> money sended</button>
                        <?php } ?>

                    </td>
                        <td><?php echo $record->payment_sts; ?></td>
                        <td><?php echo $record->apply_for ?></td>
                        <td><?php echo $record->assistant_id ?></td>
                        <td><?php echo $record->assistant_name ?></td>
                        <td><?php echo $record->name ?></td>
                        <td><?php echo $record->gender ?></td>
                        <td><?php echo $record->dob ?></td>
                        <td><?php echo $record->father_husbandname ?></td>
                        <td><?php echo $record->profession ?></td>
                        <td><?php echo $record->blood_group ?></td>
                        <td><?php echo $record->state ?></td>
                        <td><?php echo $record->country ?></td>
                        <td><?php echo $record->mobileno ?></td>
                        <td><?php echo $record->aadharno ?></td>
                        <td><?php echo $record->address ?></td>
                        <td><?php echo $record->pincode ?></td>
                        <td><?php echo $record->email ?></td>
                        <td><?php echo $record->idcard ?></td>
                        <td><img style="width: 120px;" src="./uploads/<?php echo $record->profilepic ?>"></td>
                        <td><img style="width: 120px;" src="./uploads/<?php echo $record->frontcard ?>"></td>
                        <td><img style="width: 120px;" src="./uploads/<?php echo $record->backcard ?>"></td>
                        <td><img style="width: 120px;" src="./uploads/<?php echo $record->otherdoc  ?>"></td>
                        <td><?php echo $record->created_at ?></td>
                        <?php  if($_SESSION['rname']=="System Administrator"){ ?>
                        <td class="text-center">
                            <a class="btn btn-sm btn-danger" href="<?php echo base_url(); ?>memberdelete/<?php echo $record->taskId; ?>" title="Delete"><i class="fa fa-trash"></i></a>
                        </td>
                    <?php } ?>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                  </table>
                  
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                    <?php echo $this->pagination->create_links(); ?>
                </div>
              </div><!-- /.box -->
            </div>
        </div>
    </section>
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/common.js" charset="utf-8"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('ul.pagination li a').click(function (e) {
            e.preventDefault();            
            var link = jQuery(this).get(0).href;            
            var value = link.substring(link.lastIndexOf('/') + 1);
            jQuery("#searchList").attr("action", baseURL + "task/taskListing/" + value);
            jQuery("#searchList").submit();
        });
    });

   
</script>
