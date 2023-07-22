<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-user-circle-o" aria-hidden="true"></i> Wallet Management 
        
      </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12 text-right">
                <!-- <div class="form-group">
                    <a class="btn btn-primary" href="<?php echo base_url(); ?>wallet/add"><i class="fa fa-plus"></i> Add Wallet</a>
                </div> -->
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
                <?php
                if (isset($_REQUEST['wsuccess'])) {
                    ?>
                    <div class="alert alert-success alert-dismissible" role="alert">
        <strong>Success!</strong>  successfully send.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div><?php
                }
                 if (isset($_REQUEST['error'])) {
                   ?>
                    <div class="alert alert-danger alert-dismissible" role="alert">
        <strong>Unsuccess!</strong> falled sending,try again.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

                   <?php
                }


                ?>
                <div class="box-header">
                    <h3 class="box-title">Wallet List</h3>
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
                <!-- <p class="display-6">600=-->
                <?php 
                //$datas =$this->Wallet_model->count_member();
              //   foreach($datas as $ke){
              //    $ar=array($ke->paymentid);
              //   $rr= print_r(($ar));
              // }
              // print_r(count($rr));
              

              


            ?></p>
                <div class="box-body table-responsive no-padding">
                 <!--  <table class="table table-hover">
                    <tr>
                        <th>SNo.</th>
                        <th>Date</th>
                        <th>Type</th>
                        <th>State</th>
                        <th>District</th>
                        <th>Assistant</th>
                        <th>Created On</th>
                     
                        <th class="text-center">Actions</th>
                 
                    </tr>
                    <?php $sl=1;
                    if(!empty($records))
                    {
                        foreach($records as $record)
                        {
                    ?>
                    <tr>
                        <td><?php echo $sl++; ?></td>
                        <td><?php echo $record->total_rupees ?></td>
                        <td><?php echo $record->admin_rupees ?></td>
                        <td><?php echo $record->state_rupees ?></td>
                        <td><?php echo $record->district_rupees ?></td>
                        <td><?php echo $record->assistant_rupees ?></td>
                        <td><?php echo $record->created_at ?></td>
                        <?php  if($_SESSION['rname']=="System Administrator"){ ?>
                        <td class="text-center">
                           <a class="btn btn-sm btn-info" href="<?php echo base_url().'wallet/edit/'.$record->walletid; ?>" title="Edit"><i class="fa fa-pencil"></i></a>
                            <a class="btn btn-sm btn-danger deletewallet" href="#" data-taskid="<?php echo $record->walletid; ?>" title="Delete"><i class="fa fa-trash"></i></a>
                        </td>
                    <?php } ?>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                  </table> -->
                  <table class="table table-striped table-bordered">
                            <tr>
                                <th>S.No.</th>
                                <th>Date</th>
                                <th>Type</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Request Amount</th>
                                <th>Wallet Amount</th>
                                <th>Bank Details</th>
                                <th>Remark</th>
                                <th>Action</th>
                                <!-- <th>Date</th> -->
                            </tr>
                            <?php 
                            //$id=$_SESSION['mobile'];
                            //$this->db->where("user_id=",$id);


                            $userdata=$this->db->query("select * from wallet_transaction_history order by transaction_id DESC")->result();
                            $sn=1;
                            
                            foreach ($userdata as $userdata) {
                              
                            ?>
                            <tr>
                                <td><?=$sn;?></td>
                                <td><?=$userdata->transaction_date;?></td>
                                <td><?=$userdata->type;?></td>
                                <td>Id : <?=$userdata->sender_id;?><br><br>
                                    Name : <?=$userdata->sender_name;?>
                                </td>
                                <td>Id : <?=$userdata->receiver_id;?><br><br>
                                  Name : <?=$userdata->receiver_name;?>
                                  
                                </td>
                                <td><?=$userdata->amount;?></td>
                                <td><?=$userdata->wallet_amount;?></td>

                                <td>Bank Name :<?=$userdata->bank_name
                                ;?><br>
                                  IFSC Code :<?=$userdata->ifsc_code
                                ;?><br>
                                  Account No. :<?=$userdata->account_no;?><br>
                              Ac Holder Name :<?=$userdata->holder_name;
                                ?><br>
                                <p>KYC INFO</p>
                                Aadhar No. : <?=$userdata->aadhar_number;
                                ?>
                                PAN No. : <?=$userdata->pan_number;
                                ?>


                              </td>
                                <td><?=$userdata->remark;?></td>
                              <td><a href="" class="btn btn-primary"  data-toggle="modal" data-target="#exampleModal<?=$userdata->transaction_id;?>">response</a>
                                <div class="modal fade" id="exampleModal<?=$userdata->transaction_id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Response</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form action="wallet_response" method="post">
                                <input type="hidden" value="<?=$userdata->account_no;?>" name="account_no">
                                <input type="hidden" value="<?=$userdata->sender_name;?>" name="receiver_name">
                                <input type="hidden" value="<?=$userdata->bank_name;?>" name="bank_name">
                                <input type="hidden" value="<?=$userdata->ifsc_code;?>" name="ifsc_code">
                                <input type="hidden" value="<?=$userdata->holder_name;?>" name="holder_name">
                                <input type="hidden" value="<?=$userdata->aadhar_number;?>" name="aadhar_number">
                                <input type="hidden" value="<?=$userdata->pan_number;?>" name="pan_number">
                            User ID<input type="text" value="<?=$userdata->sender_id;?>" name="user_id" class="form-control">
                            Type<select class="form-control" name="type">
                                <option>panding</option>
                                <option>credit</option>
                                <option>Reject</option>
                            </select>
                            <input type="hidden" value="<?=$userdata->wallet_amount;?>" name="wallet_amount" class="form-control">
                            Req Amount<input type="text" value="<?=$userdata->amount;?>" name="req_amount" class="form-control">
                            Send Amount<input type="text" value="<?=$userdata->amount;?>" name="send_amount" class="form-control">

                            Remark<input type="text" name="remark" class="form-control">

                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            </form>
                          </div>

                        </div>
                      </div>
                    </div></td>
                            </tr>
                            <?php $sn++;

                             } ?>
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
            jQuery("#searchList").attr("action", baseURL + "wallet/walletListing/" + value);
            jQuery("#searchList").submit();
        });
    });
</script>
