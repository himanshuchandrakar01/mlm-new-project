<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Assistant Tree
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

               <center><h4>
                  <?php  foreach ($user as $key) {
                $did=$key->userId;
                $dmobile=$key->mobile;
              //  echo $aid;
                  echo "Assistant Co-ordinator  : ".$key->name;
                //print_r($key);
               ;?><br><hr>
                <?php
               $level2=$this->db->query("select * from tbl_users where userId='$lid'")->result();
               foreach ($level2 as $level2) {
                   $ids=$level2->createdBy;
               }
               $level3=$this->db->query("select * from tbl_users where userId='$ids'")->result();
               foreach ($level3 as $level3) {
                   $id3=$level3->name;
               }


                echo "District Co-ordinator  : ". $id3;?><br><hr>

                <?php
               $x=$this->db->query("select * from tbl_users where userId='$ids'")->result();
               foreach ($x as $x) {
                   $y=$x->createdBy;
               }
               $z=$this->db->query("select * from tbl_users where userId='$y'")->result();
               foreach ($z as $z) {
                   $a=$z->name;
               }


                echo "State Co-ordinator  : ". $a;?><br><hr>




             </h4></center>
                <table class="w-100"border="2" style="border-style: solid;border-collapse: collapse;border-color: green;width: 100%">
                	<tr>
                		<th>S.No.</th>
                		<th>Category</th>
                		<!-- <th>Applied for</th> -->
                		<th>Details</th>
                	</tr>
                    <?php } $district=$this->db->query("select * from tbl_task where assistant_id='$mobile' or assistant_id='$lid'")->result();?>
                    <?php $sn=1;

                    if (!empty($district)) {
                    	# code...
                    


                     foreach ($district as $key1) { ?>

                    <tr>
                    	<td><?php echo $sn;?></td>
                        <td >User</td>
                        <!-- <td><b><?php echo $key1->apply_for;?></b></td> -->
                        <td><b>Id  :<?php echo $key1->mobileno;?><br>Name  :<?php echo $key1->name;?><br>
                          Apply for  :<?php echo $key1->apply_for;?></b>
                        
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