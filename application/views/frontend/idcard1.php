<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from kodesolution.com/html/2016/echarity-html/demo/index-mp-layout1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Apr 2023 12:58:19 GMT -->
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="eCharity - Nonprofit, Crowdfunding & Charity HTML5 Template" />
<meta name="keywords" content="Charity,Nonprofit,Crowdfunding,Donation & Fundraising" />
<meta name="author" content="ThemeMascot" />

<!-- Page Title -->
<title>ngo</title>

<!-- Favicon and Touch Icons -->
<link href="webassets/images/favicon.png" rel="shortcut icon" type="image/png">
<link href="webassets/images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="webassets/images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="webassets/images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="webassets/images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="webassets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="webassets/css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="webassets/css/animate.css" rel="stylesheet" type="text/css">
<link href="webassets/css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="webassets/css/menuzord-skins/menuzord-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="webassets/css/style-main.css" rel="stylesheet" type="text/css">

<!-- CSS | Theme Color -->

<link href="webassets/css/colors/theme-skin-orange.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="webassets/css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="webassets/css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="webassets/css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="webassets/js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="webassets/js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="webassets/js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

<!-- external javascripts -->
<script src="webassets/js/jquery-2.2.4.min.js"></script>
<script src="webassets/js/jquery-ui.min.js"></script>
<script src="webassets/js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="webassets/js/jquery-plugin-collection.js"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="webassets/js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="webassets/js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
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
      font-size: 5px;
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
    font-size: 20px;
    font-family: emoji;
    margin-top: -17px;
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
<body class="">
  <?php
if (isset($_REQUEST['success'])) {
  ?>
<script type="text/javascript">
  alert("inserted successfully");
</script>
 <?php
}


  ?>
<div id="wrapper">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <i class="flaticon-charity-shelter font-60 text-theme-colored floating"></i>
      <h5 class="line-height-50 font-18">Loading...</h5>
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>

  <!-- Header -->
  <header class="header">
    
  </header>
  
  <!-- Start main-content -->
  <div class="main-content">

  <div class="id-card-holder" style="margin-top: 50px; margin-bottom: 30px;">
    <div class="id-card">
      <div class="row back">
        <div class="col-md-3 col-sm-3 logoback">
          <div class="header" style="width: 125px;margin-left: -40px;">
            <img src="webassets/images/about/logo.png" alt="" style="margin-top: 5px;margin-right: 5px;">
          </div>
        </div>
        <div class="col-md-9 col-sm-9" style="margin-top: -20px;width: 143px;">
            <label style="font-size: 5px;margin-right: -50px;">Govt. Reg. No. - <span>9876543210</span></label>
              <p class="headfont">VIKAS SAMITI</p>
              <p style="margin-top: -7px; color: black;">WWW.VIKASSAMITI.ORG</p>
              <p style="color: black;">EMAIL : VIKASSAMITI1415@GMAIL.COM</p>
              <P style="color: black;">CUSTOMER CARE : 8839244682</P>
        </div>
      </div>
      
      <div class="container idback"> 
        <div class="row">
          <img src="webassets/images/idcard/kids.jpg" style="width: 60px; height: 60px;">
          <h4 class="idname">AJAY SHARMA</h4>
          <h4 class="rolename">STATE CO-ORDINATOR</h4>
        </div>
      </div>
      <!-- <div class="photo">
        <img src="https://media.licdn.com/mpr/mpr/shrinknp_200_200/AAEAAQAAAAAAAAuXAAAAJDE2YjQzOGZkLTU5YzAtNGRkNC04NTUzLTM3Zjg0ZWVlMGQxZA.jpg">
      </div>
      <h2>Kiran Das DA</h2>
      <div class="qr-code">
        <img src="https://www.shopify.com/growth-tools-assets/qr-code/shopify-faae7065b7b351d28495b345ed76096c03de28bac346deb1e85db632862fd0e4.png">
      </div>
      <h3>www.onetikk.info</h3> -->
<style>
  .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    padding: 0px !important;
    line-height: 11px;
  }
</style>
      <table class="table table-bordered table-responsive">
        <tr>
          <td style="width: 70px;"><label style="font-size: 10px;">Opr. Area  :</label></td>
          <td><label style="font-size: 10px;">CHHATTISGARH</label></td>
        </tr>
        <tr>
          <td><label style="font-size: 10px;">Id No.:</label></td>
          <td><label style="font-size: 10px;">9876543210</label></td>
        </tr>
        <tr>
          <td><label style="font-size: 10px;">Valid upto :</label></td>
          <td><label style="font-size: 10px;">15/05/2023</label></td>
        </tr>
        <tr>
          <td><label style="font-size: 10px;">Address    :</label></td>
          <td><label style="font-size: 10px;">WARD NO. 19 DHAMTARI CHHATTISGARH (493773)</label></td>
        </tr>
      </table>
      <h2 class="bottom">NON TRANSABLE CARD</h2>
    </div>
  </div>

  </div>
  <!-- end main-content -->
  
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper --> 

<!-- Footer Scripts --> 
<!-- JS | Calendar Event Data --> 
<script src="webassets/js/calendar-events-data.js"></script> 
<!-- JS | Custom script for all pages --> 
<script src="webassets/js/custom.js"></script>
<script type="text/javascript" src="webassets/js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script> 
<script type="text/javascript" src="webassets/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script> 
<script type="text/javascript" src="webassets/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script> 
<script type="text/javascript" src="webassets/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script> 
<script type="text/javascript" src="webassets/js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script> 
<script type="text/javascript" src="webassets/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script> 
<script type="text/javascript" src="webassets/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script> 
<script type="text/javascript" src="webassets/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script> 
<script type="text/javascript" src="webassets/js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>

</body>
</html>