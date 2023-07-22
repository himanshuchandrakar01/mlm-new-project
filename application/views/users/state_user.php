<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> User List
        <!-- <small>Add, Edit, Delete</small> -->
      </h1>
    </section>
    <?php //echo $_SESSION['rid'];?>
    <section class="content">
        <div class="row">
            <!-- <div class="col-xs-12 text-right">
                <div class="form-group">
                    <a class="btn btn-primary" href="<?php echo base_url(); ?>addNew"><i class="fa fa-plus"></i> Add New</a>
                </div>
            </div> -->
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
                    <h3 class="box-title">Users List</h3>
                    <div class="box-tools">
                        <form action="<?php echo base_url() ?>userListing" method="POST" id="searchList">
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
                        <th>S.no.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>

                        <th>Role</th>
                        <th>Status</th>
                        <th>Created On</th>
                        <th class="text-center">Actions</th>
                    </tr>
                    <?php
                    $sn=1;
                     //$id=$_SESSION['userId'];    
                    $datas= $this->db->get("tbl_users")->result();


                    if(!empty($datas))
                    {
                        foreach($datas as $record)
                        {
                            $rid=$record->roleId;
                             if (($rid=='14')) {


                            ?>
                    <tr>
                        <td></td>
                        <td><?php echo $record->name ?></td>
                        <td><?php echo $record->email ?></td>
                        <td><?php echo $record->mobile ?></td>
                        <td><?php  $roleIds= $record->roleId; if($roleIds == 14) { echo ' <span class="label label-warning">State</span>'; } 
                        if($roleIds == 15) { echo ' <span class="label label-warning">District</span>'; }
                        if($roleIds == 16) { echo ' <span class="label label-warning">Assistant</span>'; }
                        if($roleIds == 17) { echo ' <span class="label label-warning">User</span>'; }

                        ?></td>
                        <td><?php echo $record->payment_sts; ?></td>
                        <td><?php echo date("d-m-Y", strtotime($record->createdDtm)) ?></td>
                        <td ><button  data-target="#data<?php echo $record->userId ?>" data-toggle="collapse" class="btn btn-success">View</button> </td>

                    </tr>
                    
                    <?php
                        $assist_id=$record->userId;
                        // print_r($assist_id);exit();
                        $data_assists=$this->db->query("select * from tbl_users where createdBy='$assist_id'")->result();
                       print_r($data_assists);
                        foreach($data_assists as $data_assist)
                        {

                        ?>
                    <tr id="data<?php echo $record->userId ?>" class="collapse">
                        <td></td>
                        <td><?php echo $data_assist->name ?></td>
                        <td><?php echo $data_assist->email ?></td>
                        <td><?php echo $data_assist->mobile ?></td>
                        <td><?php  $roleIds= $data_assist->roleId; if($roleIds == 14) { echo ' <span class="label label-warning">State</span>'; } 
                        if($roleIds == 15) { echo ' <span class="label label-warning">District</span>'; }
                        if($roleIds == 16) { echo ' <span class="label label-warning">Assistant</span>'; }
                        if($roleIds == 17) { echo ' <span class="label label-warning">User</span>'; }

                        ?></td>
                        <td><?php echo $data_assist->payment_sts; ?></td>
                        <td><?php echo date("d-m-Y", strtotime($data_assist->createdDtm)) ?></td>
                        <td >View</td>
                   
                    </tr>
                     <?php } ?>
              
                    <?php

                }
              //}
                    
                       
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
            jQuery("#searchList").attr("action", baseURL + "userListing/" + value);
            jQuery("#searchList").submit();
        });
    });
</script>
