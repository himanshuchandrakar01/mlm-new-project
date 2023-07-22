<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> User List
        <!-- <small>Add, Edit, Delete</small> -->
        <div style="text-align: right;" >
            Total User You Connected : 
       <?php $c_id =$_SESSION['userId'];?>
      <?php $total_count=$this->db->query("select count(userId) as total_user from tbl_users where createdBy = '$c_id'")->result();
      foreach ($total_count as $total_count) {
          echo $total_count->total_user;
      }

      ?>
      </div>
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
                         <?php if($_SESSION['rid']!= 16) {?>
                        <th class="text-center">Actions</th>
                    <?php } ?>
                    </tr>
                    <?php
                    $sn=1;
                     $id=$_SESSION['userId'];    
                    $datas= $this->user_model->userdataListing($id);


                    if(!empty($datas))
                    {
                        foreach($datas as $record)
                        {
                            // if //(($_SESSION['rid']=='14')||($record->roleId=='14')) {


                            ?>
                    <tr>
                        <td><?php echo $sn; ?></td>
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
                        <?php if($_SESSION['rid']!= 16) {?>
                        <td class="text-center">
                           <?php if($_SESSION['rid']== 14
                           ) {?> 
                         <a class="btn btn-sm btn-success" href="<?= base_url().'state-tree/'.$record->userId; ?>" title="Login history"><i class="fa fa-eye"></i></a> 
                     <?php } else{?>
                         <a class="btn btn-sm btn-success" href="<?= base_url().'district-tree?id='.$record->userId.'&name='.$record->name; ?>" title="Login history"><i class="fa fa-eye"></i></a> 
                     <?php } ?>
                            <!-- <a class="btn btn-sm btn-info" href="<?php echo base_url().'editOld/'.$record->userId; ?>" title="Edit"><i class="fa fa-pencil"></i></a>
                            <a class="btn btn-sm btn-danger deleteUser" href="#" data-userid="<?php echo $record->userId; ?>" title="Delete"><i class="fa fa-trash"></i></a> -->
                        </td><?php } ?>  
                    </tr>
                    <?php
               //}

                // else if// (($_SESSION['rid']==15)&&($record->roleId==15)) {


                            ?>
                    <!-- <tr>
                        <td><?php echo $record->name ?></td>
                        <td><?php echo $record->email ?></td>
                        <td><?php echo $record->mobile ?></td>
                        <td><?php echo $record->role; if($record->roleStatus == INACTIVE) { echo ' <span class="label label-warning">Inactive</span>'; } ?></td>
                        <td><?php echo date("d-m-Y", strtotime($record->createdDtm)) ?></td>
                        <td class="text-center">
                            <a class="btn btn-sm btn-primary" href="<?= base_url().'login-history/'.$record->userId; ?>" title="Login history"><i class="fa fa-history"></i></a> | 
                            <a class="btn btn-sm btn-info" href="<?php echo base_url().'editOld/'.$record->userId; ?>" title="Edit"><i class="fa fa-pencil"></i></a>
                            <a class="btn btn-sm btn-danger deleteUser" href="#" data-userid="<?php echo $record->userId; ?>" title="Delete"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr> -->
                    <?php
              // }
                    
                        $sn++;
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
