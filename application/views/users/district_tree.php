<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> District Tree
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
               <center><h4><?php foreach ($user as $key) {
                $aid=$key->userId;
                $amobile=$key->mobile;
              //  echo $aid;
                  echo "Assistant Co-ordinator  = ".$names;
                //print_r($key);
               ;?></h4></center>
                <table class="table table-bordered">
                	<tr>
                		<th>S.No.</th>
                		<th>Category</th>
                		<th>Applied for</th>
                		<th>Details</th>
                	</tr>
                    <?php } $assistant=$this->db->query("select * from tbl_task where assistant_id='$aid' or assistant_id='$amobile'")->result();?>
                    <?php $sn=1;

                    if (!empty($assistant)) {
                    	# code...
                    


                     foreach ($assistant as $key1) { ?>

                    <tr>
                    	<td><?php echo $sn;?></td>
                        <td >User</td>
                        <td><b><?php echo $key1->apply_for;?></b></td>
                        <td>Id  :<?php echo $key1->mobileno;?><br>Name  :<?php echo $key1->name;?></td>
                        
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