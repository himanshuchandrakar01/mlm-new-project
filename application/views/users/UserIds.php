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
        background-color: #0a0a0a;
        height: 100px;
        position: absolute;
        top: 105px;
        border-radius: 0 5px 5px 0;
    }
    .id-card-holder:before {
        content: '';
        width: 7px;
        display: block;
       
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
    }*/
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
    #addresss{
      margin-top: -59px;
    margin-left: 182px;
    font-size: 12px;
    } 
    #add{
      margin-top: 75px;
    margin-left: 182px;
    font-size: 12px;

    width: 44%;
    word-break: break-word;
    } 

   
#name{
    margin-left: 136px;
    font-size: 9px;
    margin-top: -80px;
    text-transform: uppercase;
    color: white;
}
    #adhar,#email{
   margin-left: 182px;
    font-size: 13px;
    margin-top: 21px
    }
    #profile{
    margin-top: -435px;
    height: 4.5cm;
    width: 3.9cm;
    border-radius: 30px;
    margin-left: 124px;
    
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

$data=$this->db->query("select * from tbl_users where mobile='$mob'")->result();
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
        <img src="assets/images/memberId.jpg" id="img_div1">
        <p id="number"><?=$key->op_area;?></p>
       
        <p id="adhar"><?php
        $date_time = $key->createdDtm;
        $new_date = date("d-m-Y",strtotime($date_time));
        $newDate = date('d-m-Y', strtotime($new_date. ' + 3 months'));
        //$new_date1=$new_date+$d3;



        echo $newDate;?></p>
       
       
        
       
        <img src="./uploads/<?=$key->profile;?>" id="profile">
        <div style="word-wrap: break-word;">
          <p id="addresss" ><?=$key->mobile;?></p>
          </div>
          <p id="name"><?=$key->name;?>
            <br> <b style="color: yellow"><?php
                                            if (($_SESSION['rid']==14)) { ?>
                                             STATE
                                            <?php }
                                            ?>
                                            <?php
                                            if (($_SESSION['rid']==15)) { ?>
                                              DISTRICT
                                            <?php }
                                            ?>
                                            <?php
                                            if (($_SESSION['rid']==16)) { ?>
                                              ASSISTANT
                                            <?php }
                                            ?>
                                            
                                             CO-ORDINATOR</b>
          </p>

       <p id="add"><?=$key->address;?></p>
       <!--  <p id="adhar"><?php
        $date=$key->created_at;

         echo date('d-m-Y',strtotime($date));?></p>
         <p id="adhar"><?php
        $date=$key->created_at;

         echo date('d-m-Y',strtotime($date.'+ months'));?></p> -->
        
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        

      </div>
      
   
    
  </div>

</div>
</div>

</div>

  <?php } ?>
  




<!-- <style>
  label{
    color: black;
  }


  body {
      background-color: #d7d6d3;
      font-family:'verdana';
    }
    .id-card-holder {
      width: 359px;
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
      width: 176px;
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
      font-size: 8px;
      margin: 2px;
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
    font-size: 26px;
    font-family: emoji;
    margin-top: -7px;
    margin-left: -21px;
    margin-right: -17px;
    }

    .back{
            height: 101px;
            background: red;
    width: 351px;
    margin-left: -10px;
    margin-top: -10px;
    border-radius: 5px;
    }
    .logoback{
    background: white;
    width: 93px;
    height: 95px;
    margin-bottom: 110px;
    border-radius: 10px;
    margin-left: 5px;
    margin-top: 4px;
    }
    .idback{
      width: 150px;
    height: 125px;
    margin-top: 10px;
    background: red;
    padding-top: 15px;
    padding-bottom: 50px;
    border-radius: 15px;
    }
    .idname{
      font-size: 14px;
    width: 150px;
    height: 20px;
    color: white;
    }
    .rolename{
      margin-top: -10px;
      font-size: 11px;
    width: 150px;
    height: 20px;
    color: #160fda;
    }
    .bottom{
      background: #FF0000;
    padding: 5px;
    border-radius: 10px;
    color: #0411a8;
    }


</style>



<div class="content-wrapper">
    
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> User Id Card
        
      </h1>
      <button type="button" class="btn btn-primary" onclick="PrintElem('#mydiv')">print</button> 
    </section>
<div id="wrapper">
  
  

  
  <header class="header">
    
  </header>

  
  <div class="main-content">
<?php $id=$_SESSION['userId'];

$data=$this->db->query("select * from tbl_users where userId='$id'")->result();
//print_r($data);

foreach ($data as $key) {
  # code...




?>
  <div class="id-card-holder" style="margin-top: 50px; margin-bottom: 30px;">
    <div class="id-card" id="mydiv">
      <div class="row back">
        <div class="col-md-3 col-sm-3 logoback">
          <div class="header" style="width: 125px;margin-left: -62px;">
            <img src="webassets/images/about/logo.png" alt="" style="margin-top: 5px;margin-right: 5px;">
          </div>
        </div>
        <div class="col-md-9 col-sm-9" style="margin-top: 7px;width: 247px;">
            <label style="font-size: 11px;margin-right: 7px;">Govt. Reg. No. - <span>9876543210</span></label>
              <p class="headfont">VIKAS SAMITI</p>
              <p style="margin-top: -7px; color: black;">WWW.VIKASSAMITI.ORG</p>
              <p style="color: black;">EMAIL : VIKASSAMITI1415@GMAIL.COM</p>
              <P style="color: black;">CUSTOMER CARE : 8839244682</P>
        </div>
      </div>
      
      <div class="container idback"> 
        <div class="row">
          <img src="webassets/images/idcard/kids.jpg" style="width: 60px; height: 60px;">
          <h4 class="idname"><?=$_SESSION['rname']?></h4>
          <b><h4 class="rolename"><?php
                                            if (($_SESSION['rid']==14)) { ?>
                                             STATE
                                            <?php }
                                            ?>
                                            <?php
                                            if (($_SESSION['rid']==15)) { ?>
                                              DISTRICT
                                            <?php }
                                            ?>
                                            <?php
                                            if (($_SESSION['rid']==16)) { ?>
                                              ASSISTANT
                                            <?php }
                                            ?>
                                            
                                             CO-ORDINATOR</h4></b>
        </div>
      </div>
     

<?php } ?>

<style>
  .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    padding: 0px !important;
    line-height: 11px;
  }
</style>
      <table class="table table-bordered table-responsive" style="height: 157px;margin-top: 41px;">
        <tr>
          <td style="width: 70px;"><label style="font-size: 10px;">Opr. Area  :</label></td>
          <td><label style="font-size: 10px;">CHHATTISGARH</label></td>
        </tr>
        <tr>
          <td><label style="font-size: 10px;">Id No.:</label></td>
          <td><label style="font-size: 10px;"><?=$_SESSION['mobile']?></label></td>
        </tr>
        <tr>
          <td><label style="font-size: 10px;">Valid upto :</label></td>
          <td><label style="font-size: 10px;">15/05/2023</label></td>
        </tr>
        <tr>
          <td><label style="font-size: 10px;">Address    :</label></td>
          <td><label style="font-size: 10px;"><?=$key->address?></label></td>
        </tr>
      </table>
      <h2 class="bottom">NON TRANSABLE CARD</h2>
    </div>
  </div>

  </div>
  
  <br>
  <br>
 
</div>
</div>
<script type="text/javascript">
    function printDiv() {
        var divName = "printArea";
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        // document.body.style.marginTop="-45px";
        window.print();
        document.body.innerHTML = originalContents;
    }


    function PrintElem(elem)
{
      Popup($('<div/>').append($(elem).clone()).html());
}

function Popup(data) 
{
    var mywindow = window.open('', 'my div', 'height=400,width=600');
    mywindow.document.write('<html><head><title>my div</title>');
     mywindow.document.write('<link rel="stylesheet" href="http://www.dynamicdrive.com/ddincludes/mainstyle.css" type="text/css" />');
    mywindow.document.write('</head><body >');
    mywindow.document.write(data);
    mywindow.document.write('</body></html>');

    mywindow.print();
 

    return true;
}
</script> -->