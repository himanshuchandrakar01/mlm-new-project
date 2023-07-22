<style>
  label{
    color: black;
  }


  body {
      background-color: #d7d6d3;
      font-family:'verdana';
    }
    .id-card-holder {
      width: 225px;
        padding: 4px;
        margin: 0 auto;
        background-color: #1f1f1f;
        border-radius: 5px;
        position: relative;
    }
    .id-card-holder:after {
        content: '';
        width: 7px;
        display: block;
        /*background-color: #0a0a0a;*/
        height: 100px;
        position: absolute;
        top: 105px;
        border-radius: 0 5px 5px 0;
    }
    .id-card-holder:before {
        content: '';
        width: 7px;
        display: block;
        /*background-color: #0a0a0a;*/
        height: 100px;
        position: absolute;
        top: 105px;
        left: 222px;
        border-radius: 5px 0 0 5px;
    }
    .id-card {
      
      background-color: #fff;
      padding: 10px;
      border-radius: 10px;
      text-align: center;
      box-shadow: 0 0 1.5px 0px #b9b9b9;
    }
    .id-card img {
      margin: 0 auto;
    }
    .header img {
      width: 115px;
        /*margin-top: 15px;*/
    }
    .photo img {
      width: 80px;
        margin-top: 15px;
    }
    h2 {
      font-size: 15px;
      margin: 5px 0;
    }
    h3 {
      font-size: 12px;
      margin: 2.5px 0;
      font-weight: 300;
    }
    .qr-code img {
      width: 50px;
    }
    p {
      font-size: 5.5px;
      margin: 1.5px;
      font-weight: bold;
    }
    .id-card-hook {
      background-color: #000;
        width: 70px;
        margin: 0 auto;
        height: 15px;
        border-radius: 5px 5px 0 0;
    }
    .id-card-hook:after {
      content: '';
        background-color: #d7d6d3;
        width: 47px;
        height: 6px;
        display: block;
        margin: 0px auto;
        position: relative;
        top: 6px;
        border-radius: 4px;
    }
    .id-card-tag-strip {
      width: 45px;
        height: 40px;
        background-color: #0950ef;
        margin: 0 auto;
        border-radius: 5px;
        position: relative;
        top: 9px;
        z-index: 1;
        border: 1px solid #0041ad;
    }
    .id-card-tag-strip:after {
      content: '';
        display: block;
        width: 100%;
        height: 1px;
        background-color: #c1c1c1;
        position: relative;
        top: 10px;
    }
    .id-card-tag {
      width: 0;
      height: 0;
      border-left: 100px solid transparent;
      border-right: 100px solid transparent;
      border-top: 100px solid #0958db;
      margin: -10px auto -30px auto;
    }
    .id-card-tag:after {
      content: '';
        display: block;
        width: 0;
        height: 0;
        border-left: 50px solid transparent;
        border-right: 50px solid transparent;
        border-top: 100px solid #d7d6d3;
        margin: -10px auto -30px auto;
        position: relative;
        top: -130px;
        left: -50px;
    }

    .headfont{
          color: white;
    font-size: 20px;
    font-family: emoji;
    margin-top: 2px;
    margin-left: -21px;
    margin-right: -17px;
    }

    .back{
            height: 80px;
            background: red;
    width: 218px;
    margin-left: -10px;
    margin-top: -10px;
    border-radius: 5px;
    }
    .logoback{

      background: white;
      width: 70px;
      margin-top: 5px;
      margin-bottom: 5px;
      border-radius: 10px;
      margin-left: 5px;
    }
    .idback{
      width: 65px;
    height: 80px;
    margin-top: 10px;
    background: red;
    padding-top: 10px;
    padding-bottom: 50px;
    border-radius: 15px;
    }
    .idname{
          font-size: 14px;
    width: 217px;
    margin-top: 15px;
    margin-left: -76px;
    background: red;
    height: 20px;
    color: white;
    }
    .rolename{
          margin-top: -10px;
    font-size: 11px;
    width: 150px;
    height: 20px;
    margin-left: -45px;
    color: #160fda;
    }
    .bottom{
      background: #FF0000;
    padding: 5px;
    width: 217px;
    margin-bottom: -10px;
    margin-left: -10px;
    border-radius: 10px;
    color: white;
    font-size: 8px;
    }
    .qrback{
      width: 65px;
    height: 80px;
    margin-top: 10px;
    background: #fdfafa;
    padding-top: 10px;
    padding-bottom: 50px;
    border-radius: 15px;
    }
    #img-id{
     width: 17cm;
    height: 13cm;
    background-image: url(assets/images/userId.jpg);
    background-size: cover;
    /* padding: 37px; */
    margin: 38px;
    }
    #img_div1{
      background-image: url('assets/images/user_id_front.jpg');
      background-size: cover;
     height: 12cm;
     width: 9cm;
     margin: 25px;
    }
     #img_div2{
      background-image: url('assets/images/user_id_back.jpg');
     height: 12cm;
     background-size: cover;
     width: 9cm;
     margin: 25px;
    }
    #number{
     margin-top: -155px;
    margin-left: 182px;
    font-size: 13px;
    } 
    #name{
    margin-top: -129px;
    margin-left: 146px;
    font-size: 13px;
    color: white;
    } 
    #apply_for{
    margin-top: 4px;
    margin-left: 135px;
    font-size: 16px;
    color: green;
    } 
    #father_husbandname{
     margin-top: -244px;
    margin-left: 182px;
    font-size: 13px;
    } 
    #dob,#address{
    
    margin-left: 182px;
    font-size: 13px;
    } 

    #adhar,#email{
    
    margin-left: 182px;
    font-size: 13px;
    }
    #profile{
    margin-top: -437px;
    height: 4.5cm;
    width: 4cm;
    border-radius: 18px;
    margin-left: 120px;
    }
    #qr{
    margin-top: -306px;
    height: 4cm;
    width: 4cm;
    border-radius: 18px;
    margin-left: 120px
    }

</style>
<?php $mob=$_SESSION['mobile'];

$data=$this->db->query("select * from tbl_task where mobileno='$mob'")->result();
foreach ($data as $key ) {
 

?>

<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> User Id Card
        <button onclick="window.print()" class="btn btn-danger">Print</button> 
    </section>
      </h1>
     
     
<div id="wrapper">

  <header class="header">
    
  </header>
  
  <!-- Start main-content -->
  <div class="container">

    <div class="row">
      <div class="col-md-6 col-12 col-sm-6" >
        <img src="assets/images/user_id_front.jpg" id="img_div1">
        <p id="number"><?=$key->mobileno;?></p>
       
        <p id="adhar"><?=$key->aadharno;?></p>
        <p id="email"><?=$key->email;?></p>
        <img src="./uploads/<?=$key->profilepic;?>" id="profile">
         <p id="name"><?=$key->name;?></p>
         <p id="apply_for"><?=$key->apply_for;?></p>
        <p id="adhar" style="margin-top: 60px;"><?php
        $date=$key->created_at;

         echo date('d-m-Y',strtotime($date));?></p>
         <p id="adhar"><?php
        $date=$key->created_at;

         echo date('d-m-Y',strtotime($date.'+ 12 months'));?></p>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        

      </div>
      <div class="col-md-6 col-12 col-sm-6">
      <img src="assets/images/user_id_back.jpg" id="img_div1">
      <p id="father_husbandname"><?=$key->father_husbandname;?></p>
        <p id="dob"><?=$key->dob;?></p>
        <p id="address"><?=$key->address;?></p>
        <img src="./assets/images/qrcardn.jpeg" id="qr">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br><br>
        <br>
        <br>
      </div>
   
    
  </div>

</div>
</div>

</div>

  <?php } ?>
  