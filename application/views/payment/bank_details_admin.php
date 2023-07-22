<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
    </section>
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
                                <th>Status</th>
                                <th>Account Holder Name</th>
                                <th>Account No.</th>
                                <th>Bank Name</th>
                                <th>Aadhar No.</th>
                                <th>PAN No.</th>
                                <th>Date</th>
                                <th>User Id</th>
                                <th>User Name</th>
                                <th>Action</th>
                            </tr>
                            <?php 
                            //$id=$_SESSION['mobile'];
                            //$this->db->where("user_id=",$id);


                            $userdata=$this->db->query("select * from bank_details join tbl_users on tbl_users.mobile=bank_details.user_id")->result();
                            $sn=1;
                            
                            foreach ($userdata as $userdata) {
                              
                            ?>
                            <tr>
                                <td><?=$sn;?></td>
                                <td><?=$userdata->status;?></td>
                                <td><?=$userdata->holder_name;?></td>
                                <td><?=$userdata->account_no;?></td>
                                <td><?=$userdata->bank_name;?></td>
                                <td><?=$userdata->aadhar_no;?></td>
                                <td><?=$userdata->pan_no;?></td>
                                <td><?=$userdata->date;?></td>
                                <td><?=$userdata->user_id;?></td>
                                <td><?=$userdata->user_name;?></td>
                                   <td class="text-center">
                          <!-- <a class="btn btn-sm btn-info" href="<?php echo base_url().'wallet/edit/'.$record->walletid; ?>" title="Edit"><i class="fa fa-pencil"></i></a> -->
                          <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal<?php echo $userdata->id ?>"><i class="fa fa-pencil"></i></button>

<!-- Modal -->
<div id="myModal<?php echo $userdata->id ?>" class="modal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Change User Bank Permission</h4>
      </div>
      <form action="<?php base_url()?>bank_approve" method="post">
      <div class="modal-body">
      	 <input type="hidden" value="<?php echo $userdata->id; ?>" name="id">
      	<select class="form-control" name="change_sts">
                <option>pending</option>
                <option>approve</option>
                <option>cancel</option>
            </select>
      </div>

      <div class="modal-footer">
      	<button type="submit" class="btn btn-default">change</button>
      	
      </div>
       </form>
    </div>

  </div>
</div>
                            <!-- <a class="btn btn-sm btn-danger" href="<?php echo base_url(); ?>paymentdelete/<?php echo $userdata->paymentid; ?>" title="Delete"><i class="fa fa-trash"></i></a> -->
                        </td>
          
                            </tr>
                            <?php $sn++;

                             } ?>
                        </table>
                    </div>
            </div>
        </div>
    </section>
</div>
</section>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/common.js" charset="utf-8"></script>