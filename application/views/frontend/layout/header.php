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
<title>Vikas samiti</title>

<!-- Favicon and Touch Icons -->
<link href="<?base_url;()?>./webassets/images/favicon.png" rel="shortcut icon" type="image/png">
<link href="<?base_url;()?>./webassets/images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="<?base_url;()?>./webassets/images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="<?base_url;()?>./webassets/images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="<?base_url;()?>./webassets/images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="<?base_url;()?>./webassets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?base_url;()?>./webassets/css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="<?base_url;()?>./webassets/css/animate.css" rel="stylesheet" type="text/css">
<link href="<?base_url;()?>./webassets/css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="<?base_url;()<!-- CSS | Main style file -->
<link href="<?base_url;()?>./webassets/css/style-main.css" rel="stylesheet" type="text/css">

<!-- CSS | Theme Color -->

<link href="<?base_url;()?>./webassets/css/colors/theme-skin-orange.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="<?base_url;()?>./webassets/css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="<?base_url;()?>./webassets/css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="<?base_url;()?>./webassets/css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="<?base_url;()?>./webassets/js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="<?base_url;()?>./webassets/js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="<?base_url;()?>./webassets/js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

<!-- external javascripts -->
<script src="<?base_url;()?>./webassets/js/jquery-2.2.4.min.js"></script>
<script src="<?base_url;()?>./webassets/js/jquery-ui.min.js"></script>
<script src="<?base_url;()?>./webassets/js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src=".<?base_url;()?>/webassets/js/jquery-plugin-collection.js"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="<?base_url;()?>./webassets/js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="<?base_url;()?>./webassets/js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

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
  .horse-gallery .gallery-item .thumb{
    width: 283px;
    height: 155px;
  }

  .lead{
    color: black;
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
    <div class="header-top bg-theme-colored sm-text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <div class="widget no-border m-0">
              <ul class="styled-icons icon-dark icon-theme-colored icon-sm sm-text-center">
                <li><a href="https://www.facebook.com/profile.php?id=100091732670803"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://youtube.com/@vikassamitiorganization"><i class="fa fa-youtube"></i></a></li>
                <li><a href="https://www.instagram.com/vikassamiti1415/"><i class="fa fa-instagram"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-8">
            <div class="widget no-border m-0">
              <ul class="list-inline pull-right flip sm-pull-none sm-text-center mt-5" style="margin-right: 10px;">
                
                 <!-- <li class="text-white m-0 pl-10 pr-10"><a class="text-white" href="https://vikassamiti.org/loginMe"><button style="color:black; border: none; font-size: 12px;">Login</button></a> </li> -->
                <!-- <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-white"></i> <a class="text-white" href="#">contact@yourdomain.com</a> </li> -->
              </ul>
            </div>
          </div>
          <div class="col-md-2">
            <div class="widget no-border m-0">
              <ul class="list-inline pull-right flip sm-pull-none sm-text-center mt-5 mt">
                 <li class="mt-sm-10 mb-sm-10">
                  <a class="btn btn-default btn-flat btn-xs bg-light p-5 font-11 pl-10 pr-10" href="https://vikassamiti.org/loginMe">Login</a>
                </li>
                
                <li class="mt-sm-10 mb-sm-10">
                  <a class="btn btn-default btn-flat btn-xs bg-light p-5 font-11 pl-10 pr-10" href="membersignup">Member Signup</a>
                </li>
                <li class="mt-sm-10 mb-sm-10">
                   <button type="button" class="btn btn-default btn-flat btn-xs bg-light p-5 font-11 pl-10 pr-10" data-toggle="modal" data-target="#userModal">User Signup</button>
                  <!-- <a class="btn btn-default btn-flat btn-xs bg-light p-5 font-11 pl-10 pr-10 ajaxload-popup" href="./webassets/ajax-load/user-form.php">User Signup</a> -->
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
<!-- member registration form -->
     <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Member Registration Form</h4>
        </div>
        <div class="modal-body">
          <form action="memberstore" method="post" enctype="multipart/form-data"> 
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Name <small>*</small></label>
                  <input name="name" type="text" placeholder="Enter Name" required="" class="form-control">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Email <small>*</small></label>
                  <input name="email" class="form-control required email" type="email" placeholder="Enter Email">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Password <small>*</small></label>
                  <input name="password" type="password"  required="" class="form-control">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Confirm Password<small>*</small></label>
                  <input name="confirm_password" class="form-control required" type="password">
                </div>
              </div>
            </div>
            <div class="row">               
              <div class="col-sm-6">
                <div class="form-group">
                  <div class="form-group col-md-6 col-sm-6">
    <label for="inputState">State</label>
    <select class="form-control" id="inputState" name="state">
                        <option value="SelectState">Select State</option>
                        <option value="Andra Pradesh">Andra Pradesh</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himanchal Pradesh">Himanchal Pradesh</option>
                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Orissa">Orissa</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Telangana">Telangana</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttaranchal">Uttaranchal</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="West Bengal">West Bengal</option>
                        <option disabled style="background-color:#aaa; color:#fff">UNION Territories</option>
                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                        <option value="Chandigarh">Chandigarh</option>
                        <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                        <option value="Daman and Diu">Daman and Diu</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Lakshadeep">Lakshadeep</option>
                        <option value="Pondicherry">Pondicherry</option>
                      </select>
                  </div>
                 
                  <!-- <label for="form_sex">State <small>*</small></label>
                  <select id="form_sex" name="form_sex" class="form-control required">
                    <option value="Male">Chhattisgarh</option>
                    <option value="Female">Odisha</option>
                    <option value="Female">Madhya Pradesh</option>
                    <option value="Female">Andhra Pradesh</option>
                    <option value="Female">Bihar</option>

                  </select>
 -->                </div>
              </div>

                <div class="form-group col-md-4">
    <label for="inputDistrict">District</label>
    <input type="text" name="district" class="form-control">
  </div>

  <main>
  <form>

    <select onchange="set_country(this,country,city_state)" id="region" class="form-control">
      <option value="" selected="selected">SELECT STATE</option>
    </select>
  
    <select class="form-control" name="country" disabled="disabled" onchange="set_city_state(this,city_state)"></select>
    
    <select style="display: none;" name="city_state" disabled="disabled" onchange="print_city_state(country,this)"></select>
    
  </form>
</main>
              <!-- <div class="col-sm-6">
                <div class="form-group">
                  <label for="form_branch">District<small>*</small></label>
                  <input type="text" name="district" class="form-control" required>
                 
                </div>
              </div> -->
            </div>
            <!-- <div class="form-group">
              <label>Message <small>*</small></label>
              <textarea name="form_message" class="form-control required" rows="5" placeholder="Your cover letter/message sent to the employer"></textarea>
            </div> -->
            <div class="form-group">
              <label for="form_attachment">Image Upload</label>
              <input id="form_attachment" name="attach_doc" class="file" type="file" multiple data-show-upload="false" data-show-caption="true">
              <small>Maximum upload file size: 2 MB</small>
            </div>
            <div class="form-group">
              <input name="form_botcheck" class="form-control" type="hidden" value="" />
              <button type="submit" class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10" data-loading-text="Please wait...">Apply Now</button>
            </div>
          </form>
        </div>
      </div>
      
    </div>
  </div>

  <!-- user registration form -->
   <div class="modal fade" id="userModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">User Registration form</h4>
        </div>
        <div class="modal-body">
         <form action="userstore" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Name <small>*</small></label>
                  <input name="user_name" type="text" placeholder="Enter Name" required="" class="form-control">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Email <small>*</small></label>
                  <input name="user_email" class="form-control required email" type="email" placeholder="Enter Email">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Password <small>*</small></label>
                  <input name="user_password" type="password" class="form-control">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Confirm Password<small>*</small></label>
                  <input name="user_confirm_password" class="form-control" type="password">
                </div>
              </div>
            </div>
            
            <div class="form-group">
              <label for="form_attachment">Image Upload</label>
              <input name="user_image" class="file" type="file" multiple data-show-upload="false" data-show-caption="true">
              <small>Maximum upload file size: 2 MB</small>
            </div>
            <div class="form-group">
              <input name="form_botcheck" class="form-control" type="hidden" value="" />
              <button type="submit" class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10" data-loading-text="Please wait...">Apply Now</button>
            </div>
          </form>
        </div>
      </div>
      
    </div>
  </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
        <div class="container">
          <nav id="menuzord-right" class="menuzord green no-bg">
            <a class="menuzord-brand pull-left flip" href="/"><img src="./webassets/images/about/logo.png" class="pd" alt="" style="margin-top: -18px;"></a>
            <ul class="menuzord-menu">
              <li class="active"><a href="/">Home</a>
              </li>
              <li><a href="#">Who We Are</a>
                <ul class="dropdown">
                  <li><a href="about">About Us</a>
                  </li>
                  <li><a href="vision-mission-goal">Vision, Mission & Goal</a>
                  </li>
                  <li><a href="leadership-board">Leadership Board</a>
                  </li>
                  <li><a href="#">Partenrs</a>
                  </li>
                  <li><a href="#">Meet Our Team</a>
                  </li>
                </ul>
              </li>
              <li><a href="#">Event</a>
              </li>
              <li><a href="#">Work With Us</a>
                <ul class="dropdown">
                  <li><a href="#">Co-ordinate Join</a>
                  </li>
                  <li><a href="#">Assistant</a>
                  </li>
                  <li><a href="#">Volentier</a>
                  </li>
                  <li><a href="#">Mentor Ship</a>
                  </li>
                  <li><a href="#">Career</a>
                  </li>
                  
                </ul>
              </li>
              
              <li><a href="javascript:void(0)">Contacts</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>