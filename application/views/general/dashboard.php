<style type="text/css">
	/*#bank-details{
		margin-left: 2cm;
	}
	@media screen and (min-width: 480px){
		#bank-details{
		margin-left: 5cm;
	}
	}*/
</style>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard
        <small>Control panel</small>
      </h1>
    </section>
    <?php if($_SESSION['payment_sts']=="pending"){?>


    	
      <h4> Please take one more step for connecting with us</h4>
      <div class="container" id="bank-details" >
      
<div class="col-md-8 col-sm-6 col-6">
	<h3>Our Bank Details</h3>
      <table class="table "   >
      	<tr>
      		<td>Account name</td>
      		<td>- VIKAS SAMITI CHHINDAULI </td>
      	</tr>
      	<tr>
      		<td>A/C</td>
      		<td>- 50200081159914</td>
      	</tr>
      	<tr>
      		<td>IFSC</td>
      		<td>- HDFC0003123</td>
      	</tr>
      	<tr>
      		<td>Branch</td>
      		<td>- Bhoring Mahasamund</td>
      	</tr>
      </table>
      </div>
      <div class="col-md-4 col-sm-6 col-6">
      <H3 style="color: red;">Scan And Pay</H3>
       <img src="assets/images/qrcardn.jpeg" style="width: 200px; height: 200px;">
        
       	</div>
       	<br>
       <br>
       	
       </div>
       <h4>After payment please share payment screenshort with admin
       	<a href="<?php echo base_url(); ?>Payment/paymentnew" class="btn btn-success">Send</a></h4>
       <br>
       <br>

<?php } elseif($_SESSION['payment_sts']=="cancel"){?>

<h3><center>Your Registration is cancelled,For more information please contact to admin</center></h3>

      <?php } else if(($_SESSION['rid'] != 1)&&($_SESSION['rid'] != 17)){ ?>
    <section class="content">
        <div class="row">
          <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3><?php $userId=$_SESSION['userId'];
                  $total_user=$this->db->query("select count(userId) as users from tbl_users where createdBy='$userId'")->result();
                  foreach ($total_user as $total_user) {
                   echo $total_user->users;
                  }
                  ?></h3>
                  <p>Total User</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="<?php echo base_url(); ?>MemberList" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?php 
                  $total_user1=$this->db->query("select count(userId) as users from tbl_users where createdBy='$userId' and payment_sts='pending'")->result();
                  foreach ($total_user1 as $total_user1) {
                   echo $total_user1->users;
                  }
                  ?></h3>
                  <p>Pending Application</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="MemberList" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>₹
                    <?php 

                    $mobile=$_SESSION['mobile'];
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


                    ?>
                    <!-- <i style="font-size: 20px">Rs</i> --></h3>
                  <p>Wallet Amount</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="wallet-details" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            
          <!--   <div class="col-lg-3 col-xs-6">
             
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>65</h3>
                  <p>Wallet Request</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div> --><!-- ./col -->
          </div>
    </section>
  <?php }else if($_SESSION['rid']==1){ ?>
     <section class="content">
        <div class="row">
          <div class="col-md-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>
                    <?php 
                  $total_sts_user=$this->db->query("select count(userId) as users from tbl_users where roleId='14'")->result();
                  foreach ($total_sts_user as $total_sts_user) {
                   echo $total_sts_user->users;
                  }
                  ?>
                  </h3>
                  <p>Total State Co-ordinates</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="<?php echo base_url(); ?>userListing" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-md-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?php 
                  $total_district_user=$this->db->query("select count(userId) as users from tbl_users where roleId='15'")->result();
                  foreach ($total_district_user as $total_district_user) {
                   echo $total_district_user->users;
                  }
                  ?></h3>
                  <p>Total District Co-ordinates</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="Districtlist" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-md-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-primary">
                <div class="inner">
                  <h3><?php 
                  $total_assistant_user=$this->db->query("select count(userId) as users from tbl_users where roleId='16'")->result();
                  foreach ($total_assistant_user as $total_assistant_user) {
                   echo $total_assistant_user->users;
                  }
                  ?></h3>
                  <p>Total Assistant Co-ordinates</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <div class="col-md-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?php 
                  $total_assistant_user=$this->db->query("select count(userId) as users from tbl_users where roleId='17' and sending_payment_Amount='600'")->result();
                  foreach ($total_assistant_user as $total_assistant_user) {
                   echo $total_assistant_user->users;
                  }
                  ?></h3>
                  <p>Total Social <br>Activist</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
           <div class="col-md-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-orange">
                <div class="inner">
                  <h3><?php 
                  $total_assistant_user=$this->db->query("select count(userId) as users from tbl_users where roleId='17' and sending_payment_Amount='1100'")->result();
                  foreach ($total_assistant_user as $total_assistant_user) {
                   echo $total_assistant_user->users;
                  }
                  ?></h3>
                  <p>Total Shagun <br>Yojna</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            
            <div class="col-md-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3><?php 
                  $total_assistant_user=$this->db->query("select count(userId) as users from tbl_users where roleId !='1' and roleId !='13'")->result();
                  foreach ($total_assistant_user as $total_assistant_user) {
                   echo $total_assistant_user->users;
                  }
                  ?></h3>
                  <p>Total  <br>Member</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>

            <div class="col-md-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                
                 <?php 
                  $to=$this->db->query("select count(userId) as users from tbl_users where roleId='14' and payment_sts='pending'")->result();
                  foreach ($to as $to) {
                   $sp= $to->users;
                  }
                  ?>
                  <h3><?=$sp;?></h3>
                  <p>Total Pending State Co-ordinates :</p>
                  <?php 
                  $to=$this->db->query("select count(userId) as users from tbl_users where roleId='14' and payment_sts='approve'")->result();
                  foreach ($to as $to) {
                   $sp= $to->users;
                  }
                  ?>
                  <h3><?=$sp;?></h3>
                  <p>Total Approved State Co-ordinates :</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="<?php echo base_url(); ?>userListing" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>



            <div class="col-md-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <?php 
                  $to=$this->db->query("select count(userId) as users from tbl_users where roleId='15' and payment_sts='pending'")->result();
                  foreach ($to as $to) {
                   $sp= $to->users;
                  }
                  ?>
                  <h3><?=$sp;?></h3>
                  <p>Total Pending District Co-ordinates :</p>
                  <?php 
                  $to=$this->db->query("select count(userId) as users from tbl_users where roleId='15' and payment_sts='approve'")->result();
                  foreach ($to as $to) {
                   $sp= $to->users;
                  }
                  ?>
                  <h3><?=$sp;?></h3>
                  <p>Total Approved District Co-ordinates :</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>




          </div>

            <div class="row">
            <div class="col-md-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-primary">
                <div class="inner">
                  <?php 
                  $to=$this->db->query("select count(userId) as users from tbl_users where roleId='16' and payment_sts='pending'")->result();
                  foreach ($to as $to) {
                   $sp= $to->users;
                  }
                  ?>
                  <h3><?=$sp;?></h3>
                  <p>Total Pending Assistant  :</p>
                  <?php 
                  $to=$this->db->query("select count(userId) as users from tbl_users where roleId='16' and payment_sts='approve'")->result();
                  foreach ($to as $to) {
                   $sp= $to->users;
                  }
                  ?>
                  <h3><?=$sp;?></h3>
                  <p>Total Approved Assistant  :</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <div class="col-md-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <?php 
                  $to=$this->db->query("select count(userId) as users from tbl_users where roleId='17' and payment_sts='pending' and sending_payment_Amount='600'")->result();
                  foreach ($to as $to) {
                   $sp= $to->users;
                  }
                  ?>
                  <h3><?=$sp;?></h3>
                  <p>Total Pending Social
                    Activist  :</p>
                  <?php 
                  $to=$this->db->query("select count(userId) as users from tbl_users where roleId='17' and payment_sts='approve' and sending_payment_Amount='600'")->result();
                  foreach ($to as $to) {
                   $sp= $to->users;
                  }
                  ?>
                  <h3><?=$sp;?></h3>
                  <p>Total Approved Social
                    Activist</p>
                  
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
           <div class="col-md-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-orange">
                <div class="inner">
                  <?php 
                  $to=$this->db->query("select count(userId) as users from tbl_users where roleId='17' and payment_sts='pending' and sending_payment_Amount='1100'")->result();
                  foreach ($to as $to) {
                   $sp= $to->users;
                  }
                  ?>
                  <h3><?=$sp;?></h3>
                  <p>Total Pending Shagun
                    Yojna</p>
                  <?php 
                  $to=$this->db->query("select count(userId) as users from tbl_users where roleId='17' and payment_sts='approve' and sending_payment_Amount='1100'")->result();
                  foreach ($to as $to) {
                   $sp= $to->users;
                  }
                  ?>
                  <h3><?=$sp;?></h3>
                  <p>Total Approved Shagun Yojna</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            
            <div class="col-md-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3><?php 
                  $total_assistant_user=$this->db->query("select count(userId) as users from tbl_users where payment_sts='pending' and roleId !='1' and roleId !='13'")->result();
                  foreach ($total_assistant_user as $total_assistant_user) {
                   echo $total_assistant_user->users;
                  }
                  ?></h3>
                  <p>Total  <br>Pending</p>
                  <h3><?php 
                  $total_assistant_user=$this->db->query("select count(userId) as users from tbl_users where roleId !='1' and roleId !='13' and payment_sts='approve'")->result();
                  foreach ($total_assistant_user as $total_assistant_user) {
                   echo $total_assistant_user->users;
                  }
                  ?></h3>
                  <p>Total  <br>Approved</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
          </div>

  <div class="row">
    <div class="col-md-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                
                 <?php 
                  $to=$this->db->query("select count(userId) as users from tbl_users where roleId='14' and payment_sts='pending'")->result();
                  foreach ($to as $to) {
                   $sp= $to->users;
                  }
                  ?>
                  <h3><?=$sp;?></h3>
                  <p>Total Payment Pending(State Co-ordinates)</p>
                  <?php 
                  $to=$this->db->query("select count(userId) as users from tbl_users where roleId='14' and payment_sts='approve'")->result();
                  foreach ($to as $to) {
                   $sp= $to->users;
                  }
                  ?>
                  <h3><?=$sp;?></h3>
                  <p>Total Payment Approved(State Co-ordinates)</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="<?=base_url();?>payment/paymentListing" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-md-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <?php 
                  $to=$this->db->query("select count(userId) as users from tbl_users where roleId='15' and payment_sts='pending'")->result();
                  foreach ($to as $to) {
                   $sp= $to->users;
                  }
                  ?>
                  <h3><?=$sp;?></h3>
                  <p>Total Payment Pending(District Co-ordinates)</p>
                  <?php 
                  $to=$this->db->query("select count(userId) as users from tbl_users where roleId='15' and payment_sts='approve'")->result();
                  foreach ($to as $to) {
                   $sp= $to->users;
                  }
                  ?>
                  <h3><?=$sp;?></h3>
                  <p>Total Payment Approved(District Co-ordinates)</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="<?=base_url();?>payment/paymentListing" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-md-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-primary">
                <div class="inner">
                  <?php 
                  $to=$this->db->query("select count(userId) as users from tbl_users where roleId='16' and payment_sts='pending'")->result();
                  foreach ($to as $to) {
                   $sp= $to->users;
                  }
                  ?>
                  <h3><?=$sp;?></h3>
                  <p>Total Payment Pending (Assistant Co-ordinates)</p>
                  <?php 
                  $to=$this->db->query("select count(userId) as users from tbl_users where roleId='16' and payment_sts='approve'")->result();
                  foreach ($to as $to) {
                   $sp= $to->users;
                  }
                  ?>
                  <h3><?=$sp;?></h3>
                  <p>Total Payment Approved (Assistant Co-ordinates)</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="<?=base_url();?>payment/paymentListing" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <div class="col-md-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <?php 
                  $to=$this->db->query("select count(userId) as users from tbl_users where roleId='17' and payment_sts='pending' and sending_payment_Amount='600'")->result();
                  foreach ($to as $to) {
                   $sp= $to->users;
                  }
                  ?>
                  <h3><?=$sp;?></h3>
                  <p>Total Pending Payment(Social
                    Activist)</p>
                  <?php 
                  $to=$this->db->query("select count(userId) as users from tbl_users where roleId='17' and payment_sts='approve' and sending_payment_Amount='600'")->result();
                  foreach ($to as $to) {
                   $sp= $to->users;
                  }
                  ?>
                  <h3><?=$sp;?></h3>
                  <p>Total Approved Payment(Social
                    Activist)</p>
                  
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="<?=base_url();?>userpaymentListing" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
           <div class="col-md-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-orange">
                <div class="inner">
                  <?php 
                  $to=$this->db->query("select count(userId) as users from tbl_users where roleId='17' and payment_sts='pending' and sending_payment_Amount='1100'")->result();
                  foreach ($to as $to) {
                   $sp= $to->users;
                  }
                  ?>
                  <h3><?=$sp;?></h3>
                  <p>Total Pending Payment(Shagun
                    Yojna)</p>
                  <?php 
                  $to=$this->db->query("select count(userId) as users from tbl_users where roleId='17' and payment_sts='approve' and sending_payment_Amount='1100'")->result();
                  foreach ($to as $to) {
                   $sp= $to->users;
                  }
                  ?>
                  <h3><?=$sp;?></h3>
                  <p>Total Approved Payment(Shagun Yojna)</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="<?=base_url();?>userpaymentListing" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            
            <div class="col-md-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3><?php 
                  $total_assistant_user=$this->db->query("select count(userId) as users from tbl_users where payment_sts='pending' and roleId !='1' and roleId !='13'")->result();
                  foreach ($total_assistant_user as $total_assistant_user) {
                   echo $total_assistant_user->users;
                  }
                  ?></h3>
                  <p>Total Pending Payment</p><br>
                  <h3><?php 
                  $total_assistant_user=$this->db->query("select count(userId) as users from tbl_users where roleId !='1' and roleId !='13' and payment_sts='approve'")->result();
                  foreach ($total_assistant_user as $total_assistant_user) {
                   echo $total_assistant_user->users;
                  }
                  ?></h3>
                  <p>Total Approved Payment</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <br>
                <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
              </div>
            </div>
         </div>

    </section>

  <?php }else if($_SESSION['rid']==17){ ?>
     <section class="content">
        <div class="row">
          <div class="col-lg-6 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <h4 style="text-decoration: underline;"><center><b>Notice</b></center></h4>
                <div class="inner">

                  <ol style="list-style-type: upper-roman;">
                  <?php $notification=$this->db->query("select * from notification where user_type='Users'")->result();
                  foreach ($notification as $notification) {
                   echo "<li><p style='text-transform:capitalize;'>".$notification->notification_details."</p></li>";
                  }
                  ?>
                  </ol>
                </div>
               
              </div>
            </div><!-- ./col -->
            <!-- <div class="col-lg-3 col-xs-6">
             
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>150</h3>
                  <p>New Tasks</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div> --><!-- ./col -->
            <!-- <div class="col-lg-3 col-xs-6">
             
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>53<sup style="font-size: 20px">%</sup></h3>
                  <p>Completed Tasks</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div> --><!-- ./col -->
            
            <!-- <div class="col-lg-3 col-xs-6">
            
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>65</h3>
                  <p>Reopened Issue</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div> --><!-- ./col -->
          </div>
    </section>
  <?php } ?>
</div>