<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-tachometer" aria-hidden="true"></i> Wallet Info
        <small>Control panel</small>
      </h1>
    </section>
     <section class="content">
      <div class="row">
        <div class="col-md-12">
           <?php if(isset($_REQUEST['success'])){?>
              <div class="alert alert-success alert-dismissible" role="alert">
        <strong>Success!</strong> Request successfully send.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php } ?>
        </div>
      </div>
        <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?php $mobile=$_SESSION['mobile'];
                  $wallet_from_t=$this->db->query("select * from wallet_transaction_history where sender_id='$mobile' or receiver_id='$mobile' order by transaction_id DESC limit 1")->result();
                  if (!empty($wallet_from_t)) {
                   foreach ($wallet_from_t as $wallet_from_t) {
                    $wallet_from_t1=$wallet_from_t->wallet_amount;
                    echo $wallet_from_t1;
                   }
                  }else{



                  		$rid=$_SESSION['rid'];
                  $query=$this->db->query("select sum(assistant_wallet_amount) as assistant_wallet_amount,sum(assistant_incentive_amount) as assistant_incentive_amount,sum(district_wallet_amount) as district_wallet_amount,sum(state_amount) as state_amount from wallet_transaction where assistant_id='$mobile' or district_id='$mobile' or state_id='$mobile'")->result();
                  foreach ($query as $query) {
                  	# code...
                  
                  if ($_SESSION['rid']==14) {
                    $state_wallet=$query->state_amount;
                  	echo $query->state_amount;
                  }
                  if ($_SESSION['rid']==15) {
                    $district_wallet=$query->district_wallet_amount;
                  	echo $query->district_wallet_amount;
                  }
                  if ($_SESSION['rid']==16) {
                   $assistant_wallet= $query->assistant_wallet_amount;
                  	echo $query->assistant_wallet_amount;
                  
                  }
                }
              }
                  ?></h3>
                  <p>Wallet Amount</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
               <!--  <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
              </div>

          <?php 
          if ($_SESSION['rid']==16) {
           	# code...
           

          ?>
              <div class="small-box bg-red">
                <div class="inner">
                  <h3> <?php 
                  $query1=$this->db->query("select sum(assistant_wallet_amount) as assistant_wallet_amount,sum(assistant_incentive_amount) as assistant_incentive_amount,sum(district_wallet_amount) as district_wallet_amount,sum(state_amount) as state_amount from wallet_transaction where assistant_id='$mobile' or district_id='$mobile' or state_id='$mobile'")->result();
                  foreach ($query1 as $query1) {
                  	echo $query1->assistant_incentive_amount;
                  }?>
                  	</h3>
                  <p> Incentive Amount</p>
                  <b>Note : After Connecting 50 users You can send request for this money.</b>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
               <!--  <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
              </div>

          <?php  } ?>
          <div class="small-box bg-yellow">
                <div class="inner">
                  <h3><?php $c_id =$_SESSION['userId'];?>
			      <?php $total_count=$this->db->query("select count(userId) as total_user from tbl_users where createdBy = '$c_id'")->result();
			      foreach ($total_count as $total_count) {
			          echo $total_count->total_user;
			      }

			      ?>
                  	</h3>
                  <p>Total Connection</p>
                 
                </div>
                <div class="icon">
                  <i class="ion ion-person"></i>
                </div>
               
              </div>
            </div>
            <div class="col-lg-9 col-xs-9">
            	
            
                <div class="box box-primary">
                 
                    <div class="box-header">
                        <h3 class="box-title">Bank Details</h3>
                        <?php if(isset($_REQUEST['wallet_amount_maintain'])){?>
              <div class="alert bg-warning alert-dismissible " role="alert">
        <strong>Unsuccess!</strong> Note : Maintain Rs 1000/- balance amount in wallet.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php } ?>
    
    <?php if(isset($_REQUEST['wallet_amount_less_than_1000'])){?>
              <div class="alert alert-warning alert-dismissible" role="alert">
        <strong>Unsuccess!</strong> Note : Minimum wallet amount is Rs 1000/- for send any wallet request.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php } ?>
    
    <?php if(isset($_REQUEST['wallet_amount_mnm_req'])){?>
              <div class="alert alert-warning alert-dismissible" role="alert">
        <strong>Unsuccess!</strong>Note: Minimun requesting amount is Rs 1000/- .
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php } ?>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <?php $this->load->helper("form"); ?>
                    <?php $mobile= $_SESSION['mobile'];
                     $userdata=$this->db->query("select * from bank_details where user_id='$mobile' ")->result();
                     foreach ($userdata as $userdata) {
                       # code...
                     
                     ?>
                    <form role="form" id="addUser" action="../wallet-trs" method="post" role="form" enctype="multipart/form-data">

                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="id">Id</label>
                                        <input type="text" class="form-control" value="<?php echo $_SESSION['mobile']; ?>" name="user_id" readonly>
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" value="<?php echo $_SESSION['name']; ?>" name="user_name" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="fname">Account No.</label>
                                        <input type="text" class="form-control" id="fname" name="account_no" value="<?=$userdata->account_no;?>"readonly>
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Bank Name</label>
                                        <input type="text" class="form-control" id="email"  name="bank_name" value="<?=$userdata->bank_name;?>"readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="dob">IFSC Code</label>
                                        <input type="text" class="form-control" name="ifsc_code"value="<?=$userdata->ifsc_code;?>"readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="address">Account Holder Name</label>
                                        <input type="text" class="form-control" name="holder_name" value="<?=$userdata->holder_name;?>"readonly>
                                    </div>
                                </div>
                                <!-- <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control" name="address">
                                    </div>
                                </div> -->
                            </div>
                            <div class="box-header">
                        <h3 class="box-title">KYC Details</h3>
                    </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mobile">Aadhar Number</label>
                                        <input type="text" class="form-control required digits" id="mobile"  name="aadhar_number" value="<?=$userdata->aadhar_no;?>" readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="role">PAN Number</label>
                                        <input type="text" class="form-control required digits" id="mobile"  name="pan_number" value="<?=$userdata->pan_no;?>" readonly>
                                    </div>
                                </div>    
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="isAdmin">Requested Amount</label>
                                       <input type="text" name="amount" class="form-control" required="">
                                       <input type="hidden" value="<?php
                                       if(!empty($wallet_from_t1)){
                                        echo($wallet_from_t1);
                                       }else{
                                       if ($_SESSION['rid']==14) {
                                 
                                  echo $state_wallet;
                                }
                                if ($_SESSION['rid']==15) {
                   
                                echo  $district_wallet;
                              }
                              if ($_SESSION['rid']==16) {
                               
                                echo $assistant_wallet;
                              
                              }}?>" name="wallet_amount">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Remark</label>
                                    <textarea name="remark" class="form-control" required=""></textarea>
                                </div>
                            </div> 
                        </div><!-- /.box-body -->
    
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Submit" />
                            <input type="reset" class="btn btn-default" value="Reset" />
                        </div>
                    </form>
                  <?php } ?>
               
            </div>
            </div>
        </div>
    </section>
     <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Transaction History </h3>
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>S.No.</th>
                                <th>Date</th>
                                <th>Type</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Amount</th>
                                <th>Bank Details</th>
                                <th>Remark</th>
                                <!-- <th>Date</th> -->
                            </tr>
                            <?php 
                            $id=$_SESSION['mobile'];
                            //$this->db->where("user_id=",$id);


                            $userdata=$this->db->query("select * from wallet_transaction_history where sender_id='$id' or receiver_id='$id' order by transaction_id DESC ")->result();
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

                                <!-- <td>
                                  <?php
                                  $user_name=$userdata->user_name;
                                   if($user_name=="admin"){?>
                                    ID:Admin
                                   <?php }else{ ?>

                                  ID : <?=$userdata->user_id;}?></td> -->
                                <td><?=$userdata->amount;?></td>
                                <td>Bank Name :<?=$userdata->bank_name
                                ;?><br>
                                  IFSC Code :<?=$userdata->ifsc_code
                                ;?><br>
                                  Account No. :<?=$userdata->account_no;?><br>
                              Ac Holder Name :<?=$userdata->holder_name;
                                ?><br>
                                <p>KYC INFO</p>
                                Aadhar No. : <?=$userdata->aadhar_number;
                                ?><br>
                                PAN No. : <?=$userdata->pan_number;
                                ?>


                              </td>
                                <td><?=$userdata->remark;?></td>
                               <!--  <td><?=$userdata->date;?></td> -->
                            </tr>
                            <?php $sn++;

                             } ?>
                        </table>
                    </div>
            </div>
        </div>
    </section>
</div>