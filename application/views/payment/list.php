<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-user-circle-o" aria-hidden="true"></i> Member Payment Management
        
      </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12 text-right">
                <div class="form-group">
                    <a class="btn btn-primary" href="<?php echo base_url(); ?>add-payment"><i class="fa fa-plus"></i> Add Payment</a>
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
                    <h3 class="box-title">Payment List</h3>
                    <div class="box-tools">
                        <form action="<?php echo base_url() ?>payment-member" method="POST" id="searchList">
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
                  <table class="table table-hover" id="myTable">
                    <tr tr id="1">
                        <th>SNo.</th>
                        <!-- <th>Name</th> -->
                        <th>Payment Holder Name</th>
                        <th>Amount</th>
                        <th>Image</th>
                        

                        <th>Created On</th>
                        <th>Activation Status</th>
                        <?php  if($_SESSION['rname']=="System Administrator"){ ?>
                        <th class="text-center">Actions</th>
                    <?php } ?>
                    </tr>
                    <?php $sl=1;
                    if(!empty($records))
                    {
                        foreach($records as $record)
                        {
                    ?>
                    <tr>
                        <td><?php echo $sl++; ?></td>
                       <!--  <td><?php echo $record->name ?></td> -->
                        <td><?php echo $record->holder_name ?></td>
                        <td><?php echo $record->amount ?></td>
                        <td><a href="<?=base_url();?>../payment/<?php echo $record->payment_upload ?>"><img width="100px;" src="<?=base_url();?>./payment/<?php echo $record->payment_upload ?>"></a></td>
                        <td><?php echo $record->created_at ?></td>
                        <td><?php echo $record->payment_sts; ?></td>
                        <?php  if($_SESSION['rname']=="System Administrator"){ ?>
                        <td class="text-center">
                          <!-- <a class="btn btn-sm btn-info" href="<?php echo base_url().'wallet/edit/'.$record->walletid; ?>" title="Edit"><i class="fa fa-pencil"></i></a> -->
                          <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal<?php echo $record->name ?>" onclick="wallet_cal();"><i class="fa fa-pencil"></i></button>

<!-- Modal -->
<div id="myModal<?php echo $record->name ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" >&times;</button>
        <h4 class="modal-title">Change User Access Permission</h4>
      </div>
       <form action="<?php base_url()?>change_sts" method="post">
      <div class="modal-body">
       
            <label>User Name</label>
            <input type="hidden" value="<?php echo $record->name; ?>" name="id">
             <label>Mail To</label>
            <input type="text" value="<?php echo $record->email; ?>" name="email"class="form-control">
            <input type="" name="" value="<?php echo $record->holder_name ?>" class="form-control">
            <label>Claim Amount</label>
            <input type="text" name="amount" value="<?php echo $record->amount ?>" class="form-control" readonly>
            <label>Received Amount</label>
            <input type="text" name="receive_amount"  class="form-control"  oninput="wallet_cal();" id="receive_amount" value="<?php echo $record->amount ;?>">
            <label>Created By</label>
            <input type="text" name="c_id" value="<?php echo $record->createdBy ?>" class="form-control" readonly>
            <label>Creator Wallet Amount</label>
            <input type="" name="wallet_amount"  class="form-control" id="wallet_amount">
            <label>Access Status</label>
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
                            <a class="btn btn-sm btn-danger" href="<?php echo base_url(); ?>paymentdelete/<?php echo $record->paymentid; ?>" title="Delete"><i class="fa fa-trash"></i></a>
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
<!-- <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script> -->
<script type="text/javascript">
    // jQuery(document).ready(function(){
    //     jQuery('ul.pagination li a').click(function (e) {
    //         e.preventDefault();            
    //         var link = jQuery(this).get(0).href;            
    //         var value = link.substring(link.lastIndexOf('/') + 1);
    //         jQuery("#searchList").attr("action", baseURL + "wallet/walletListing/" + value);
    //         jQuery("#searchList").submit();
    //     });
    // });

    function wallet_cal() {
      var receive_amount,result;
      receive_amount=parseInt(document.getElementById('receive_amount').value);
      result=receive_amount*(10/100);
      document.getElementById('wallet_amount').value=""+result;

    }
 
                  
</script>
