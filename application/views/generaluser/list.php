<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-user-circle-o" aria-hidden="true"></i> General user Management
        <?php //echo $_SESSION['rname']; ?>
      </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12 text-right">
                <div class="form-group">
                   <!--  <a class="btn btn-primary" href="<?php echo base_url(); ?>task/add"><i class="fa fa-plus"></i> Add New task</a> -->
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
                    <h3 class="box-title">General user List</h3>
                    <div class="box-tools">
                        <form action="<?php echo base_url() ?>general/generalListing" method="POST" id="searchList">
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
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Image</th>
                        <th>Created On</th>
                        <?php if($_SESSION['rname']=="System Administrator"){ ?>
                        <th class="text-center">Actions</th>
                    <?php } ?>
                    </tr>
                    <?php
                     $generaluser = $this->db->query('select * from general_user')->result();
                    if(!empty($generaluser))
                    {
                        foreach($generaluser as $record)
                        {
                    ?>
                    <?php //print_r($record);exit();?>
                    <tr>
                        <td><?php echo $record->user_name ?></td>
                        <td><?php echo $record->user_email ?></td>
                        <td><?php echo $record->user_password ?></td>
                        <td><img style="width: 120px;" src="../userimage/<?php echo $record->user_image ?>"></td>
                        <td><?php echo $record->created_at ?></td>
                         <?php  if($_SESSION['rname']=="System Administrator"){ ?>
                        <td class="text-center">
                         
                            <a class="btn btn-sm btn-danger deletetask" href="#" data-taskid="<?php echo $record->id; ?>" title="Delete"><i class="fa fa-trash"></i></a>
                        </td>
                         <?php  } ?>
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
            jQuery("#searchList").attr("action", baseURL + "general/generalListing/" + value);
            jQuery("#searchList").submit();
        });
    });
</script>
