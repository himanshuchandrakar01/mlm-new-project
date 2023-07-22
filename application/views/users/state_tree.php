<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> User Tree
        <!-- <small>Add, Edit, Delete</small> -->
      </h1>
    </section>
   
    <section class="content">
        <div class="row">
            <div class="col-xs-12 text-right">
                <div class="form-group">
                    <!-- <a class="btn btn-primary" href="<?php echo base_url(); ?>addNew"><i class="fa fa-plus"></i> Add New</a> -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
               <div class="box">

               <center><h4><?php echo "State Co-ordinator  : ". $_SESSION['rname'];?><br><hr><?php  foreach ($user as $key) {
                $did=$key->userId;
                $dmobile=$key->mobile;
              //  echo $aid;
                  echo "District Co-ordinator  : ".$key->name;
                //print_r($key);
               ;?></h4></center>
                <table class="table table-bordered table-striped">
                	<tr>
                		<th>S.No.</th>
                		<th>Category</th>
                		<!-- <th>Applied for</th> -->
                		<th>Details</th>
                	</tr>
                    <?php } $district=$this->db->query("select * from tbl_users where CreatedBy='$did'")->result();?>
                    <?php $sn=1;

                    if (!empty($district)) {
                    	# code...
                    


                     foreach ($district as $key1) { ?>

                    <tr>
                    	<td><?php echo $sn;?></td>
                        <td >Assistant Co-ordinate</td>
                        <!-- <td><b><?php echo $key1->apply_for;?></b></td> -->
                        <td>Id  :<?php echo $key1->mobile;?><br>Name  :<?php echo $key1->name;?>
                        <table class="table table-bordered">
                            <tr>
                                <th>S.No.</th>
                                <th>Category</th>
                       
                        <th>Details</th>
                            </tr>
                        
                        <?php $aid= $key1->userId;

                         $amobile=$key1->mobile;
                         $user=$this->db->query("select * from tbl_task where assistant_id='$aid' or assistant_id='$amobile'")->result();
                          $sn3=1;
                          foreach ($user as $user) { 
                        ?>
                        <tr>
                        <td><?php echo $sn3;?></td>
                        <td >User</td>
                        <!-- <td><b><?php echo $key1->apply_for;?></b></td> -->
                        <td>Id  :<?php echo $user->mobileno;?><br>Name  :<?php echo $user->name;?>
                    </td></tr>
                    <?php $sn3++;} ?>
                    </table>
                    </td>
                    </tr>
                   
                <?php $sn++; } }else{?>
                	<td colspan="4"><center>data not found</center></td>

                <?php } ?>
                </table>
            
                </div> 
            </div>
        </div>

    </section>
</div>