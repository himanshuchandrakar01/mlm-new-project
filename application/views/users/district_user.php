<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> District Management
        <!-- <small>Add, Edit, Delete</small> -->
      </h1>
      Total District Member : <?php   $count=$this->db->query("select count(userId) as count_district from tbl_users where roleId='15'")->result();
      foreach ($count as $count) {
                   echo $count->count_district;
               }

      ?>
    </section>
   
    <section class="content">
        <div class="row">
            <div class="col-xs-12 text-right">
                <div class="form-group">
                    <a class="btn btn-primary" href="<?php echo base_url(); ?>addNew"><i class="fa fa-plus"></i> Add New</a>
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
                      <th>S.No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Role</th>
                        <th>Created On</th>
                        <th class="text-center">Actions</th>
                    </tr>
                    <?php
                    $sn=1;
                    $userRe=$this->db->query("select * from tbl_users where roleId= '15' ")->result();
                    if(!empty($userRe))
                    {
                        foreach($userRe as $record)
                        {
                            $roid=$record->roleId;
                            // if (($roid=='15')) {


                            ?>
                    <tr>
                      <td><?php echo $sn; ?></td>
                        <td data-target="#data<?php echo $record->userId ?>" data-toggle="collapse"><?php echo $record->name ?></td>
                        <td><?php echo $record->email ?></td>
                        <td><?php echo $record->mobile ?></td>
                        <td><?php  $roleIds= $record->roleId; if($roleIds == 14) { echo ' <span class="label label-warning">State</span>'; } 
                        if(($roleIds == 15)||($roleIds == '15')) { echo ' <span class="label label-warning">District</span>'; }
                        if($roleIds == 16) { echo ' <span class="label label-warning">Assistant</span>'; }
                        if($roleIds == 17) { echo ' <span class="label label-warning">User</span>'; }

                        ?></td>
                       <!--  <td><?php echo $record->roleId ?></td> -->
                        <td><?php echo date("d-m-Y", strtotime($record->createdDtm)) ?></td>
                        <td class="text-center">
                           <!--  <a class="btn btn-sm btn-primary" href="<?= base_url().'login-history/'.$record->userId; ?>" title="Login history"><i class="fa fa-history"></i></a> |  -->

                            <a class="btn btn-sm btn-info" href="<?php echo base_url().'editOld/'.$record->userId; ?>" title="Edit"><i class="fa fa-pencil"></i></a>

                           <!--  <a class="btn btn-sm btn-danger deleteUser" href="#" data-userid="<?php echo $record->userId; ?>" title="Delete"><i class="fa fa-trash"></i></a> -->
                             <a class="btn btn-sm btn-success" href="<?= base_url().'admin-district-tree?id='.$record->userId.'&name='.$record->name; ?>" title="Edit"><i class="fa fa-eye"></i></a>
                             <div class="modal fade" id="exampleModalCenter<?php echo $record->userId; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="width: auto;">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Listing</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <center>District Co-ordinate -> <?php echo $record->name; ?></center>
       <br>
       <div class="row">
        <!-- <div class="col-md-2"><?php echo $record->name; ?></div> -->
        <div class="col-md-12">
            <table class="table table-bordered">
       <?php
       $did=$record->userId;
        $assistant=$this->db->query("select * from tbl_users where createdBy ='$did'")->result();
        foreach ($assistant as $key1) { ?>
            <!-- <div class="col-md-2">
                <p>Assistant Co-ordinate</p><br>
                <p>Name : <?php echo $key1->name;?></p>

            </div> -->
            <tr>
                <th>Assistant Co-ordinate</th>
                <td><p>Id : <?php echo $key1->mobile;?></p></td>
                <td><p>Name : <?php echo $key1->name;?></p></td>
                <td><button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample<?php echo $key1->userId;?>" aria-expanded="false" aria-controls="collapseExample">
   view
  </button>

</td>
<td><div class="collapse" id="collapseExample<?php echo $key1->userId;?>">
    <?php
       $aid=$key1->userId;
        $user=$this->db->query("select * from tbl_task where assistant_id ='$aid'")->result();
        foreach ($user as $key2) { ?>
  <div class="card card-body">
    <table class="table">
        <tr>
            <td>Id</td>
            <td><?php echo $key2->mobileno;?></td>
        </tr>
        <tr><td>Name</td>
            <td><?php echo $key2->name;?></td></tr>
            <tr><td>Apply for</td>
            <td><?php echo $key2->apply_for;?></td></tr>
    </table>
  </div>
<?php } ?>
</div></td>
   </tr>    
            
      
             
                
           
            
      <?php  }
        ?>
        </table>
         </div>
         <!-- <div class="col-md-4">
             
         </div> -->
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
                        </td>

                    </tr>
                   
                    <?php
                    $sn++;
               }

              // }
                  
               
                      //  }
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
