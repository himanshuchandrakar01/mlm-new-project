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
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- Page Title -->
<title>Vikas samiti</title>

<!-- Favicon and Touch Icons -->
<link href="./webassets/images/favicon.png" rel="shortcut icon" type="image/png">
<link href="./webassets/images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="./webassets/images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="./webassets/images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="./webassets/images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="./webassets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="./webassets/css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="./webassets/css/animate.css" rel="stylesheet" type="text/css">
<link href="./webassets/css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="./webassets/css/menuzord-skins/menuzord-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="./webassets/css/style-main.css" rel="stylesheet" type="text/css">

<!-- CSS | Theme Color -->

<link href="./webassets/css/colors/theme-skin-orange.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="./webassets/css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="./webassets/css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="./webassets/css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="./webassets/js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="./webassets/js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="./webassets/js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

<!-- external javascripts -->
<script src="./webassets/js/jquery-2.2.4.min.js"></script>
<script src="./webassets/js/jquery-ui.min.js"></script>
<script src="./webassets/js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="./webassets/js/jquery-plugin-collection.js"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="./webassets/js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="./webassets/js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

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

  .lead2{
    line-height: 0px;
  }

  @media only screen and (max-width: 600px) {

    .mt{
      margin-left: 0px;
    }

    .pd{
          padding-top: 20px;
    }
  }

  .carousel {
  position: relative;
  width: 100%;
  overflow: hidden;
}

.carousel-inner {
  display: flex;
  transition: transform 0.5s ease;
}

.slide {
  flex: 0 0 100%;
}

/* img {
  width: 100%;
} */

.carousel-prev,
.carousel-next {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  width: 30px;
  height: 30px;
  background-color: #ccc;
  color: #fff;
  text-align: center;
  line-height: 30px;
  font-size: 20px;
  text-decoration: none;
}

.carousel-prev {
  left: 10px;
}

.carousel-next {
  right: 10px;
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
              <li><a href="events">Event</a>
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
                  <li><a href="career">Career</a>
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
  
  <!-- Start main-content -->
  <div class="main-content">

    <!-- Section: home -->
    <section id="home">
      <div class="container-fluid p-0">
        
        <!-- Slider Revolution Start -->
        <div class="rev_slider_wrapper">
          <div class="rev_slider" data-version="5.0">
            <ul>

	             <!-- SLIDE 1 -->
	            <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="./webassets/images/bg/bg13.jpeg" data-rotate="0" data-saveperformance="off" data-title="Slide 1" data-description="">
	                <!-- MAIN IMAGE -->
	                <img src="./webassets/images/bg/bg13.jpeg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
	                <!-- LAYERS -->

	                <!-- LAYER NR. 1 -->
	                <div class="tp-caption tp-resizeme text-uppercase  bg-dark-transparent text-white font-raleway pl-30 pr-30"
	                  id="rs-1-layer-1"
	                
	                  data-x="['center']"
	                  data-hoffset="['0']"
	                  data-y="['middle']"
	                  data-voffset="['-90']" 
	                  data-fontsize="['28']"
	                  data-lineheight="['54']"
	                  data-width="none"
	                  data-height="none"
	                  data-whitespace="nowrap"
	                  data-transform_idle="o:1;s:500"
	                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
	                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
	                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
	                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
	                  data-start="1000" 
	                  data-splitin="none" 
	                  data-splitout="none" 
	                  data-responsive_offset="on"
	                  style="z-index: 7; white-space: nowrap; font-weight:400; border-radius: 30px;">For the poor children 
	                </div>

	                <!-- LAYER NR. 2 -->
	                <div class="tp-caption tp-resizeme text-uppercase bg-theme-colored-transparent text-white font-raleway pl-30 pr-30"
	                  id="rs-1-layer-2"

	                  data-x="['center']"
	                  data-hoffset="['0']"
	                  data-y="['middle']"
	                  data-voffset="['-20']"
	                  data-fontsize="['48']"
	                  data-lineheight="['70']"
	                  data-width="none"
	                  data-height="none"
	                  data-whitespace="nowrap"
	                  data-transform_idle="o:1;s:500"
	                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
	                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
	                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
	                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
	                  data-start="1000" 
	                  data-splitin="none" 
	                  data-splitout="none" 
	                  data-responsive_offset="on"
	                  style="z-index: 7; white-space: nowrap; font-weight:700; border-radius: 30px;">raise your helping hand 
	                </div>

	                <!-- LAYER NR. 3 -->
	                <div class="tp-caption tp-resizeme text-white text-center" 
	                  id="rs-1-layer-3"

	                  data-x="['center']"
	                  data-hoffset="['0']"
	                  data-y="['middle']"
	                  data-voffset="['50']"
	                  data-fontsize="['16']"
	                  data-lineheight="['28']"
	                  data-width="none"
	                  data-height="none"
	                  data-whitespace="nowrap"
	                  data-transform_idle="o:1;s:500"
	                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
	                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
	                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
	                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
	                  data-start="1400" 
	                  data-splitin="none" 
	                  data-splitout="none" 
	                  data-responsive_offset="on"
	                  style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">Every day we bring hope to millions of children in the world's<br>  hardest places as a sign of God's unconditional love.
	                </div>

	                <!-- LAYER NR. 4 -->
	                <div class="tp-caption tp-resizeme" 
	                  id="rs-1-layer-4"

	                  data-x="['center']"
	                  data-hoffset="['0']"
	                  data-y="['middle']"
	                  data-voffset="['115']"
	                  data-width="none"
	                  data-height="none"
	                  data-whitespace="nowrap"
	                  data-transform_idle="o:1;"
	                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
	                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
	                  data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
	                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
	                  data-start="1400" 
	                  data-splitin="none" 
	                  data-splitout="none" 
	                  data-responsive_offset="on"
	                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;">
                    <!-- <a class="btn btn-default btn-circled btn-transparent pl-20 pr-20" href="#">Donate Now</a> --> 
	                </div>
	            </li>

	             <!-- SLIDE 2 -->
	            <li data-index="rs-2" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="./webassets/images/bg/bg14.jpeg" data-rotate="0" data-saveperformance="off" data-title="Slide 2" data-description="">
	                <!-- MAIN IMAGE -->
	                <img src="./webassets/images/bg/bg14.jpeg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
	                <!-- LAYERS -->

	                <!-- LAYER NR. 1 -->
	                <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway"
	                  id="rs-2-layer-1"

	                  data-x="['left']"
	                  data-hoffset="['30']"
	                  data-y="['middle']"
	                  data-voffset="['-110']" 
	                  data-fontsize="['110']"
	                  data-lineheight="['120']"
	                  data-width="none"
	                  data-height="none"
	                  data-whitespace="nowrap"
	                  data-transform_idle="o:1;s:500"
	                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
	                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
	                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
	                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
	                  data-start="1000" 
	                  data-splitin="none" 
	                  data-splitout="none" 
	                  data-responsive_offset="on"
	                  style="z-index: 7; white-space: nowrap; font-weight:700;">Donate
	                </div>

	                <!-- LAYER NR. 2 -->
	                <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent pl-20 pr-20"
	                  id="rs-2-layer-2"

	                  data-x="['left']"
	                  data-hoffset="['35']"
	                  data-y="['middle']"
	                  data-voffset="['-25']" 
	                  data-fontsize="['35']"
	                  data-lineheight="['54']"
	                  data-width="none"
	                  data-height="none"
	                  data-whitespace="nowrap"
	                  data-transform_idle="o:1;s:500"
	                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
	                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
	                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
	                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
	                  data-start="1000" 
	                  data-splitin="none" 
	                  data-splitout="none" 
	                  data-responsive_offset="on"
	                  style="z-index: 7; white-space: nowrap; font-weight:600; border-radius: 30px;">For the poor children 
	                </div>

	                <!-- LAYER NR. 3 -->
	                <div class="tp-caption tp-resizeme text-white" 
	                  id="rs-2-layer-3"

	                  data-x="['left']"
	                  data-hoffset="['35']"
	                  data-y="['middle']"
	                  data-voffset="['30']"
	                  data-fontsize="['16']"
	                  data-lineheight="['28']"
	                  data-width="none"
	                  data-height="none"
	                  data-whitespace="nowrap"
	                  data-transform_idle="o:1;s:500"
	                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
	                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
	                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
	                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
	                  data-start="1400" 
	                  data-splitin="none" 
	                  data-splitout="none" 
	                  data-responsive_offset="on"
	                  style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">Every day we bring hope to millions of children in the world's<br>  hardest places as a sign of God's unconditional love.
	                </div>

	                <!-- LAYER NR. 4 -->
	                <div class="tp-caption tp-resizeme" 
	                  id="rs-2-layer-4"

	                  data-x="['left']"
	                  data-hoffset="['35']"
	                  data-y="['middle']"
	                  data-voffset="['95']"
	                  data-width="none"
	                  data-height="none"
	                  data-whitespace="nowrap"
	                  data-transform_idle="o:1;"
	                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
	                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
	                  data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
	                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
	                  data-start="1400" 
	                  data-splitin="none" 
	                  data-splitout="none" 
	                  data-responsive_offset="on"
	                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;">
                    <!-- <a class="btn btn-colored btn-lg btn-theme-colored pl-20 pr-20" href="#">Donate Now</a> --> 
	                </div>
	            </li>

              <!-- SLIDE 3 -->
            <li data-index="rs-3" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="./webassets/images/bg/bg15.jpeg" data-rotate="0" data-saveperformance="off" data-title="Slide 3" data-description="">
                <!-- MAIN IMAGE -->
                <img src="./webassets/images/bg/bg15.jpeg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                <!-- LAYERS -->

                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent pr-20 pl-20"
                  id="rs-3-layer-1"

                  data-x="['right']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['-90']" 
                  data-fontsize="['64']"
                  data-lineheight="['72']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:600;"><span class="">Help</span> The Poor
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway"
                  id="rs-3-layer-2"

                  data-x="['right']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['-25']" 
                  data-fontsize="['32']"
                  data-lineheight="['54']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:600;">For Their Better Future 
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white text-right" 
                  id="rs-3-layer-3"

                  data-x="['right']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['30']"
                  data-fontsize="['16']"
                  data-lineheight="['28']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">Every day we bring hope to millions of children in the world's<br>  hardest places as a sign of God's unconditional love.
                </div>

                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme" 
                  id="rs-3-layer-4"

                  data-x="['right']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['95']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                  data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;">
                  <!-- <a class="btn btn-colored btn-lg btn-flat btn-theme-colored pl-20 pr-20" href="#">Donate Now</a> --> 
                </div>
            </li>

            </ul>
          </div><!-- end .rev_slider -->
        </div>
        <!-- end .rev_slider_wrapper -->
        <script>
          $(document).ready(function(e) {
            $(".rev_slider").revolution({
              sliderType:"standard",
              sliderLayout: "auto",
              dottedOverlay: "none",
              delay: 5000,
              navigation: {
                  keyboardNavigation: "off",
                  keyboard_direction: "horizontal",
                  mouseScrollNavigation: "off",
                  onHoverStop: "off",
                  touch: {
                      touchenabled: "on",
                      swipe_threshold: 75,
                      swipe_min_touches: 1,
                      swipe_direction: "horizontal",
                      drag_block_vertical: false
                  },
                arrows: {
                  style:"zeus",
                  enable:true,
                  hide_onmobile:true,
                  hide_under:600,
                  hide_onleave:true,
                  hide_delay:200,
                  hide_delay_mobile:1200,
                  tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                  left: {
                    h_align:"left",
                    v_align:"center",
                    h_offset:30,
                    v_offset:0
                  },
                  right: {
                    h_align:"right",
                    v_align:"center",
                    h_offset:30,
                    v_offset:0
                  }
                },
                bullets: {
                  enable:true,
                  hide_onmobile:true,
                  hide_under:600,
                  style:"metis",
                  hide_onleave:true,
                  hide_delay:200,
                  hide_delay_mobile:1200,
                  direction:"horizontal",
                  h_align:"center",
                  v_align:"bottom",
                  h_offset:0,
                  v_offset:30,
                  space:5,
                  tmp:'<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">{{title}}</span>'
                }
              },
              responsiveLevels: [1240, 1024, 778],
              visibilityLevels: [1240, 1024, 778],
              gridwidth: [1170, 1024, 778, 480],
              gridheight: [600, 768, 960, 720],
              lazyType: "none",
              parallax: {
                  origo: "slidercenter",
                  speed: 1000,
                  levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                  type: "scroll"
              },
              shadow: 0,
              spinner: "off",
              stopLoop: "on",
              stopAfterLoops: 0,
              stopAtSlide: -1,
              shuffle: "off",
              autoHeight: "off",
              fullScreenAutoWidth: "off",
              fullScreenAlignForce: "off",
              fullScreenOffsetContainer: "",
              fullScreenOffset: "0",
              hideThumbsOnMobile: "off",
              hideSliderAtLimit: 0,
              hideCaptionAtLimit: 0,
              hideAllCaptionAtLilmit: 0,
              debugMode: false,
              fallbacks: {
                  simplifyAll: "off",
                  nextSlideOnWindowFocus: "off",
                  disableFocusListener: false,
              }
            });
          });
        </script>
        <!-- Slider Revolution Ends -->
      </div>
    </section>

    <!-- Section: welcome -->
    <section>
      <div class="container pt-0 pb-0">
        <div class="section-content">
          <div class="row equal-height-inner home-boxes" data-margin-top="-100px">
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay2">
              <div class="sm-height-auto bg-theme-colored-lighter4">
                <div class="text-center pt-30 pb-sm-30">
                  <div class="icon-box text-center">
                    <a class="icon bg-white icon-circled icon-xl" href="#"> <i class="flaticon-charity-hand-holding-a-stalk  text-theme-colored"></i> </a>
                    <div class="p-10">
                      <h4 class="text-uppercase text-white mt-0">Become a Volunteer</h4>
                      
                      <a href="page-become-a-volunteer.html" class="btn btn-border btn-circled btn-transparent btn-sm">Join us Now</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay2">
              <div class="sm-height-auto bg-theme-colored-lighter3">
                <div class="text-center pt-30 pb-sm-30">
                  <div class="icon-box text-center">
                    <a class="icon bg-white icon-circled icon-xl" href="#"> <i class="flaticon-charity-dove-of-peace text-theme-colored"></i> </a>
                    <div class="p-10">
                      <h4 class="text-uppercase text-white mt-0">Our Scheme</h4>
                      
                      <a href="page-become-a-volunteer.html" class="btn btn-border btn-circled btn-transparent btn-sm">Contact us</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay3">
              <div class="sm-height-auto bg-theme-colored-lighter2">
                <div class="text-center pt-30 pb-sm-30">
                  <div class="icon-box text-center">
                    <a class="icon bg-white icon-circled icon-xl" href="#"> <i class="flaticon-charity-make-a-donation text-theme-colored"></i> </a>
                    <div class="p-10">
                      <h4 class="text-uppercase text-white mt-0">Donate</h4>
                      <a href="donate" class="btn btn-border btn-circled btn-transparent btn-sm">Donate Us</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay4">
              <div class="sm-height-auto bg-theme-colored">
                <div class="text-center pt-30 pb-sm-30">
                  <div class="icon-box text-center">
                    <a class="icon bg-white icon-circled icon-xl" href="#"> <i class="flaticon-charity-responsible-use-of-water text-theme-colored"></i> </a>
                    <div class="p-10">
                      <h4 class="text-uppercase text-white mt-0">Help Center</h4>
                      <h3 class="text-white">+91-88895-98774</h3>
                      <a href="page-become-a-volunteer.html" class="btn btn-border btn-circled btn-transparent btn-sm">Contact Now</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: About -->
    <section id="about2">
      <div class="container">
        <div class="section-content">
          <div class="row mt-10">
            <div class="col-sm-10 col-md-10 mb-sm-20">
              <h3 class="text-uppercase letter-space-1 mt-0">About Us</h3>
                <!-- <span class="text-theme-colored">  Network Worldwide.</span> -->
              <p class="lead mt-20 mb-30">विकास समिति छिंदौली एक ऐसा समाज सेवी संस्थायों का समूह है जो विभिन्न संस्थाओं के साथ् मिलकर कार्य करती है। </p>
              <p class="lead mt-20 mb-30">विकास समिति छिंदौली मदद, सहानुभुति व दूरदर्शिता से ओतप्रोत एक उभरती हुई संकल्पना है जो विशेषतः देशभर की जड़ समस्याओं गरीबी, बेटी की शादी , बेरोजगारी, अशिक्षा , महिला उत्पीड़न आदि के खिलाफ काम करते हुए, आत्मसंतुष्टि की प्राप्ति हेतु नए सिस्टम की स्थापना करेगी । हम सब आपसी सहयोग की ऐसी श्रृंखला का निर्माण कर रहे है, जिससे हमारे साथी जुड़ने वाले हर साथी की उन्नति सुनिश्रित की गई है। हम विकास समिति छिंदौली के माध्यम से एक ऐसे सिस्टम को ला रहे है जिसमें नई पीढ़ी की सोच के साथ आत्मनिर्भर भारत का निर्माण होगा। जिस प्रकार छोटी छोटी धाराओं से ही एक विशाल समुद्र का निर्माण होता है, ठीक उसी प्रकार भारत के कोने कोने से सहयोग की कोपलें फूटेगी जो एक वटवृक्ष के रूप में समृद्धि का छाया रूपी सुख देंगी। आज के कठोर युग में जहां इंसानियत अपना अस्तित्व खो रही है, वहीं हम आपसी मैत्री बढ़ाता एक ऐसा सिस्टम लाए है, जिसमें महिला सशक्तिकरण के साथ समाजिक बुराईयों से लड़ने में भी मदद मिलेगी।</p>
              <!-- <a href="#" class="btn btn-colored btn-theme-colored btn-sm">View Details</a> -->
            </div>
            <div class="col-sm-2 col-md-2 mb-sm-20">
              
            </div>
          </div>
        </div>
      </div>
    </section>

    

    <section id="about2">
        <div class="container">
        <div class="row">
            <div class="col-md-5">
            <div class="section-content">
                <center><h3 class="text-uppercase letter-space-1 mt-0"><b>Recruitment</b></h3></center>
                <!-- <div class="row mt-50 " >
                   <div class="carousel">
                        <div class="carousel-inner">
                            <div class="slide active">
                            	<img src="./webassets/images/project/img4.jpg" alt="Imagen 1">
                            </div>
                            <div class="slide">
                            	<img src="./webassets/images/ads.jpg" alt="Imagen 2">
                            </div>
                        </div>
                        <a class="carousel-prev">&#8249;</a>
                        <a class="carousel-next">&#8250;</a>
                    </div>
                </div> -->

                <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="./webassets/images/project/img4.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="./webassets/images/ads.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="./webassets/images/project/img4.jpg" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
            </div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5">
            	<div class="section-content">
                    <center><h3 class="text-uppercase letter-space-1 mt-0"><b>Notification</b></h3></center>
                    <div class="row mt-50 " >
                        <div class="carousel">
                            <ul>
                                <marquee width="90%" direction="up" height="400px;">
                                  <li class="lead lead2"><a href="training"><p><img src="./assets/images/new.gif" height="40" width="40" alt="client1"> Registration open for Vocational Training</p></a><br></li>
                                  <li class="lead lead2"><a href="training"><p><img src="./assets/images/new.gif" height="40" width="40" alt="client2">New batches are started for web development<br><br></p></a></li>
                                  <li class="lead lead2"><a href="training"><p><img src="./assets/images/new.gif" height="40" width="40" alt="client3">New batches are started for Java<br><br></p></a></li>
                                  <li class="lead lead2"><a href="training"><p><img src="./assets/images/new.gif" height="40" width="40" alt="client4">New batches are started for Python</p></a><br><br></li>
                                  <li class="lead lead2"><a href="training"><p><img src="./assets/images/new.gif" height="40" width="40" alt="client4">Join PHP Laravel New Batch @ 01:00 PM </p></a><br><br></li>
                                  <!-- <li class="lead lead2"><a href="training"><p><img src="./assets/images/new.gif" height="40" width="40" alt="client4">Join Website Design &amp; Development New Batch @ 11:00 am</p></a><br><br></li>
                                  <li class="lead lead2"><a href="training"><p><img src="./assets/images/new.gif" height="40" width="40" alt="client4">Join New Batch on Interior Design Training will be Started soon </p></a><br><br></li>
                                  <li class="lead lead2"><a href="training"><p><img src="./assets/images/new.gif" height="40" width="40" alt="client4">Python with Django Registration open for new Batch</p></a><br><br></li> -->
                                </marquee>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>


   
   
   

   <!-- Section: Running Project 1  -->
    <section>
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-12">
              <h2 class="mt-0 line-height-1">Our<span class="text-theme-colored"> Projects</span></h2>
              <p>सभी क्षेत्रीय NGO, सोसाइटी या कम्युनिटी हमारे यहाँ से प्रोजेक्ट लेकर अपने क्षेत्र मे विभिन्न तरह के सेंटर खोलकर चला सकते हैं। </p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="owl-carousel-4col horse-gallery" data-dots="true">
              <div class="gallery-item" style="width: 400px;margin-right: 15px;">
                <div class="thumb">
                  <img class="img-fullwidth" src="./webassets/images/ngo_projects/bunai.jpg" alt="project" >
                  <div class="overlay-shade"></div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a data-lightbox="image" href="./webassets/images/ngo_projects/bunai.jpg"><i class="fa fa-plus"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="horse-details">
                  <h4 class="title mb-5"><a href="#">सिलाई</a></h4>
                  <!-- <span class="category">Nepal / South Asia</span> -->
                 <!--  <p>
                  <a href="#" class="btn btn-theme-colored btn-flat mt-5 btn-sm" role="button">Donate</a>
                  <span class="pull-right ml-10 mt-12 font-14">Goal: $2500</span>
                  </p> -->
                </div>
              </div>
              <div class="gallery-item">
                <div class="thumb">
                  <img class="img-fullwidth" src="./webassets/images/ngo_projects/bunai1.jpg" alt="project">
                  <div class="overlay-shade"></div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a data-lightbox="image" href="./webassets/images/ngo_projects/bunai1.jpg"><i class="fa fa-plus"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="horse-details">
                  <h4 class="title mb-5"><a href="#">कढ़ाई</a></h4>
                  <!-- <span class="category">Seria / Medilist</span> -->
                 <!--  <p>
                  <a href="#" class="btn btn-theme-colored btn-flat mt-5 btn-sm" role="button">Donate</a>
                  <span class="pull-right ml-10 mt-12 font-14">Goal: $2500</span>
                  </p> -->
                </div>
              </div>
              <div class="gallery-item">
                <div class="thumb">
                  <img class="img-fullwidth" src="./webassets/images/ngo_projects/kadhai.jpg" alt="project">
                  <div class="overlay-shade"></div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a data-lightbox="image" href="./webassets/images/ngo_projects/kadhai.jpg"><i class="fa fa-plus"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="horse-details">
                  <h4 class="title mb-5"><a href="#">कढ़ाई </a></h4>
                  <!-- <span class="category">Somalia/ South Africa</span> -->
                 <!--  <p>
                  <a href="#" class="btn btn-theme-colored btn-flat mt-5 btn-sm" role="button">Donate</a>
                  <span class="pull-right ml-10 mt-12 font-14">Goal: $2500</span>
                  </p> -->
                </div>
              </div>
              <div class="gallery-item">
                <div class="thumb">
                  <img class="img-fullwidth" src="./webassets/images/ngo_projects/beauty.jpeg" alt="project">
                  <div class="overlay-shade"></div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a data-lightbox="image" href="./webassets/images/ngo_projects/beauty.jpeg">
                          <i class="fa fa-plus"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="horse-details">
                  <h4 class="title mb-5"><a href="#">ब्यूटी पोर्लर</a></h4>
                  <!-- <span class="category">India / South Asia</span> -->
                 <!--  <p>
                  <a href="#" class="btn btn-theme-colored btn-flat mt-5 btn-sm" role="button">Donate</a>
                  <span class="pull-right ml-10 mt-12 font-14">Goal: $2500</span>
                  </p> -->
                </div>
              </div>
              <div class="gallery-item">
                <div class="thumb">
                  <img class="img-fullwidth" src="./webassets/images/ngo_projects/beauty1.jpg" alt="project">
                  <div class="overlay-shade"></div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a data-lightbox="image" href="./webassets/images/ngo_projects/beauty1.jpg"><i class="fa fa-plus"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="horse-details">
                  <h4 class="title mb-5"><a href="#">ब्यूटी पोर्लर</a></h4>
                  <!-- <span class="category">India / South Asia</span> -->
                  <!-- <p>
                  <a href="#" class="btn btn-theme-colored btn-flat mt-5 btn-sm" role="button">Donate</a>
                  <span class="pull-right ml-10 mt-12 font-14">Goal: $2500</span>
                  </p> -->
                </div>
              </div>
              <div class="gallery-item">
                <div class="thumb">
                  <img class="img-fullwidth" src="./webassets/images/ngo_projects/computer.jpg" alt="project">
                  <div class="overlay-shade"></div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a data-lightbox="image" href="./webassets/images/ngo_projects/computer.jpg"><i class="fa fa-plus"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="horse-details">
                  <h4 class="title mb-5"><a href="#">कम्प्यूटर ट्रेनिंग</a></h4>
                  <!-- <span class="category">India / South Asia</span> -->
                  <!-- <p>
                  <a href="#" class="btn btn-theme-colored btn-flat mt-5 btn-sm" role="button">Donate</a>
                  <span class="pull-right ml-10 mt-12 font-14">Goal: $2500</span>
                  </p> -->
                </div>
              </div>
              <div class="gallery-item">
                <div class="thumb">
                  <img class="img-fullwidth" src="./webassets/images/ngo_projects/computer1.jpg" alt="project">
                  <div class="overlay-shade"></div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a data-lightbox="image" href="./webassets/images/ngo_projects/computer1.jpg"><i class="fa fa-plus"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="horse-details">
                  <h4 class="title mb-5"><a href="#">कम्प्यूटर ट्रेनिंग</a></h4>
                  <!-- <span class="category">Seria / Medilist</span> -->
                  <!-- <p>
                  <a href="#" class="btn btn-theme-colored btn-flat mt-5 btn-sm" role="button">Donate</a>
                  <span class="pull-right ml-10 mt-12 font-14">Goal: $2500</span>
                  </p> -->
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
  
  <!-- Footer -->
  
  <footer id="footer" class="bg-black-222">
    <div class="container pt-80 ">
      <div class="row border-bottom-black">
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            
            <div>
              <a href=""><img src="./webassets/images/about/logo.png" alt=""></a>
            </div>
            <div>
              <p class="lead mt-20 mb-30" style="color: white;">विकास समिति छिंदौली एक ऐसा समाज सेवी संस्थायों का समूह है जो विभिन्न संस्थाओं के साथ् मिलकर कार्य करती है। </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3" style="padding-left: 100px; padding-top: 20px;">
          <div class="widget dark container">
              <h5 class="widget-title line-bottom">Explore</h5>
              <ul class="form-group">
                <li><a href="term-condition" class="lead mt-10 mb-10" style="color:white;">Terms & Condition</a></li>
                <li><a href="privacy"  class="lead" style="color:white;">Privacy Policy</a></li>
                <li><a href="disclaimers"  class="lead" style="color:white;">Disclaimer</a></li>
                <li><a href=""  class="lead" style="color:white;">Refund Policy</a></li>
              </ul>
            </div>
        </div>
        
        <div class="col-sm-6 col-md-3 mt-20" >
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Gallery</h5>
            <div class="row">
              <div class="col-md-4">
                <img src="./webassets/images/ngo_projects/bunai.jpg" alt="" style="margin-top: 20px;">
              </div>
              <div class="col-md-4">
                <img src="./webassets/images/ngo_projects/bunai1.jpg" alt="" style="margin-top: 20px;">
              </div>
              <div class="col-md-4">
                <img src="./webassets/images/ngo_projects/kadhai.jpg" alt="" style="margin-top: 20px;">
              </div>
            </div>
            <div class="row">

              
              <div class="col-md-4">
                <img src="./webassets/images/ngo_projects/beauty1.jpg" alt="" style="margin-top: 20px;">
              </div>
              <div class="col-md-4">
                <img src="./webassets/images/ngo_projects/computer.jpg" alt="" style="margin-top: 20px;">
              </div>
              <div class="col-md-4">
                <img src="./webassets/images/ngo_projects/computer1.jpg" alt="" style="margin-top: 20px;">
              </div>
              
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark"> <img alt="" src="images/logo-wide-white.png">
            <h5 class="widget-title line-bottom">Contact Us</h5>
            <p style="font-size: 17px;">  <i class="fa fa-map-marker"></i>  Chhinduali, Bawankera, Mahasamund(C.G.)</p>
            <p style="font-size: 17px;"><i class="fa fa-envelope"></i>  vikassamiti1415@gmail.com</p>
            <p style="font-size: 17px;"><i class="fa fa-phone"></i>  88895-98774</p>
            <ul class="styled-icons icon-sm icon-bordered icon-circled clearfix mt-20">
              <li><a href="https://www.facebook.com/profile.php?id=100091732670803"><i class="fa fa-facebook"></i></a></li> 
              <li><a href="https://youtube.com/@vikassamitiorganization"><i class="fa fa-youtube"></i></a></li>
              <li><a href="https://www.instagram.com/vikassamiti1415/"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom bg-black-333">
      <div class="container pt-20 pb-20">
        <div class="row">
          <div class="col-md-6">
            <p class="font-11 text-black-777 m-0">Copyright &copy;2023 Vikassamiti. All Rights Reserved( NGO )</p>
          </div>
          <div class="col-md-6 text-right">
            <div class="widget no-border m-0">
              <ul class="list-inline sm-text-center mt-5 font-12">
                <li>
                  <a href="#">FAQ</a>
                </li>
                <li>|</li>
                <li>
                  <a href="#">Help Desk</a>
                </li>
                <li>|</li>
                <li>
                  <a href="#">Support</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>

</div>
<!-- end wrapper --> 


<!-- Footer Scripts --> 
<!-- JS | Calendar Event Data --> 
<script src="./webassets/js/calendar-events-data.js"></script> 
<!-- JS | Custom script for all pages --> 
<script src="./webassets/js/custom.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
       The following part can be removed on Server for On Demand Loading) --> 
<script type="text/javascript" src="./webassets/js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script> 
<script type="text/javascript" src="./webassets/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script> 
<script type="text/javascript" src="./webassets/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script> 
<script type="text/javascript" src="./webassets/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script> 
<script type="text/javascript" src="./webassets/js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script> 
<script type="text/javascript" src="./webassets/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script> 
<script type="text/javascript" src="./webassets/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script> 
<script type="text/javascript" src="./webassets/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script> 
<script type="text/javascript" src="./webassets/js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>



<script>

 var countries = Object();

countries['AndraPradesh'] = 'Anantapur|Chittoor|East Godavari|Guntur|Kadapa|Krishna|Kurnool|Prakasam|Nellore|Srikakulam|Visakhapatnam|Vizianagaram|West Godavari';

countries['ArunachalPradesh'] = 'Anjaw|Changlang|Dibang Valley|East Kameng|East Siang|Kra Daadi|Kurung Kumey|Lohit|Longding|Lower Dibang Valley|Lower Subansiri|Namsai|Papum Pare|Siang|Tawang|Tirap|Upper Siang|Upper Subansiri|West Kameng|West Siang|Itanagar';

countries ['Assam'] = 'Baksa|Barpeta|Biswanath|Bongaigaon|Cachar|Charaideo|Chirang|Darrang|Dhemaji|Dhubri|Dibrugarh|Goalpara|Golaghat|Hailakandi|Hojai|Jorhat|Kamrup Metropolitan|Kamrup (Rural)|Karbi Anglong|Karimganj|Kokrajhar|Lakhimpur|Majuli|Morigaon|Nagaon|Nalbari|Dima Hasao|Sivasagar|Sonitpur|South Salmara Mankachar|Tinsukia|Udalguri|West Karbi Anglo';

countries['Bihar'] = 'Araria|Arwal|Aurangabad|Banka|Begusarai|Bhagalpur|Bhojpur|Buxar|Darbhanga|East Champaran|Gaya|Gopalganj|Jamui|Jehanabad|Kaimur|Katihar|Khagaria|Kishanganj|Lakhisarai|Madhepura|Madhubani|Munger|Muzaffarpur|Nalanda|Nawada|Patna|Purnia|Rohtas|Saharsa|Samastipur|Saran|Sheikhpura|Sheohar|Sitamarhi|Siwan|Supaul|Vaishali|West Champaran';
countries['Chhattisgarh'] = 'Balod|Baloda Bazar|Balrampur|Bastar|Bemetara|Bijapur|Bilaspur|Dantewada|Dhamtari|Durg|Gariaband|Janjgir Champa|Jashpur|Kabirdham|Kanker|Kondagaon|Korba|Koriya|Mahasamund|Mungeli|Narayanpur|Raigarh|Raipur|Rajnandgaon|Sukma|Surajpur|Surguja';
countries ['Goa'] = 'North Goa|South Goa';
countries ['Gujarat'] = 'Ahmedabad|Amreli|Anand|Aravalli|Banaskantha|Bharuch|Bhavnagar|Botad|Chhota Udaipur|Dahod|Dang|Devbhoomi Dwarka|Gandhinagar|Gir Somnath|Jamnagar|Junagadh|Kheda|Kutch|Mahisagar|Mehsana|Morbi|Narmada|Navsari|Panchmahal|Patan|Porbandar|Rajkot|Sabarkantha|Surat|Surendranagar|Tapi|Vadodara|Valsad';
countries['Haryana'] = 'Ambala|Bhiwani|Charkhi Dadri|Faridabad|Fatehabad|Gurugram|Hisar|Jhajjar|Jind|Kaithal|Karnal|Kurukshetra|Mahendragarh|Mewat|Palwal|Panchkula|Panipat|Rewari|Rohtak|Sirsa|Sonipat|Yamunanagar';
countries ['HimanchalPradesh'] = 'Bilaspur|Chamba|Hamirpur|Kangra|Kinnaur|Kullu|Lahaul Spiti|Mandi|Shimla|Sirmaur|Solan|Una';
countries ['JammuKashmir'] = 'Anantnag|Bandipora|Baramulla|Budgam|Doda|Ganderbal|Jammu|Kargil|Kathua|Kishtwar|Kulgam|Kupwara|Leh|Poonch|Pulwama|Rajouri|Ramban|Reasi|Samba|Shopian|Srinagar|Udhampur';
countries ['Jharkhand'] = 'Bokaro|Chatra|Deoghar|Dhanbad|Dumka|East Singhbhum|Garhwa|Giridih|Godda|Gumla|Hazaribagh|Jamtara|Khunti|Koderma|Latehar|Lohardaga|Pakur|Palamu|Ramgarh|Ranchi|Sahebganj|Seraikela Kharsawan|Simdega|West Singhbhum';
countries ['Karnataka'] = 'Bagalkot|Bangalore Rural|Bangalore Urban|Belgaum|Bellary|Bidar|Vijayapura|Chamarajanagar|Chikkaballapur|Chikkamagaluru|Chitradurga|Dakshina Kannada|Davanagere|Dharwad|Gadag|Gulbarga|Hassan|Haveri|Kodagu|Kolar|Koppal|Mandya|Mysore|Raichur|Ramanagara|Shimoga|Tumkur|Udupi|Uttara Kannada|Yadgir';
countries ['Kerala'] = 'Alappuzha|Ernakulam|Idukki|Kannur|Kasaragod|Kollam|Kottayam|Kozhikode|Malappuram|Palakkad|Pathanamthitta|Thiruvananthapuram|Thrissur|Wayanad';
countries ['MadhyaPradesh'] = 'Agar Malwa|Alirajpur|Anuppur|Ashoknagar|Balaghat|Barwani|Betul|Bhind|Bhopal|Burhanpur|Chhatarpur|Chhindwara|Damoh|Datia|Dewas|Dhar|Dindori|Guna|Gwalior|Harda|Hoshangabad|Indore|Jabalpur|Jhabua|Katni|Khandwa|Khargone|Mandla|Mandsaur|Morena|Narsinghpur|Neemuch|Panna|Raisen|Rajgarh|Ratlam|Rewa|Sagar|Satna|Sehore|Seoni|Shahdol|Shajapur|Sheopur|Shivpuri|Sidhi|Singrauli|Tikamgarh|Ujjain|Umaria|Vidisha';
countries ['Maharashtra'] = 'Ahmednagar|Akola|Amravati|Aurangabad|Beed|Bhandara|Buldhana|Chandrapur|Dhule|Gadchiroli|Gondia|Hingoli|Jalgaon|Jalna|Kolhapur|Latur|Mumbai City|Mumbai Suburban|Nagpur|Nanded|Nandurbar|Nashik|Osmanabad|Palghar|Parbhani|Pune|Raigad|Ratnagiri|Sangli|Satara|Sindhudurg|Solapur|Thane|Wardha|Washim|Yavatmal';
countries ['Manipur'] = 'Bishnupur|Chandel|Churachandpur|Imphal East|Imphal West|Jiribam|Kakching|Kamjong|Kangpokpi|Noney|Pherzawl|Senapati|Tamenglong|Tengnoupal|Thoubal|Ukhrul';
countries ['Meghalaya'] = 'East Garo Hills|East Jaintia Hills|East Khasi Hills|North Garo Hills|Ri Bhoi|South Garo Hills|South West Garo Hills|South West Khasi Hills|West Garo Hills|West Jaintia Hills|West Khasi Hills';
countries[ 'Mizoram'] = 'Aizawl|Champhai|Kolasib|Lawngtlai|Lunglei|Mamit|Saiha|Serchhip|Aizawl|Champhai|Kolasib|Lawngtlai|Lunglei|Mamit|Saiha|Serchhip';
countries ['Nagaland'] = 'Dimapur|Kiphire|Kohima|Longleng|Mokokchung|Mon|Peren|Phek|Tuensang|Wokha|Zunheboto';
countries ['Odisha'] = 'Angul|Balangir|Balasore|Bargarh|Bhadrak|Boudh|Cuttack|Debagarh|Dhenkanal|Gajapati|Ganjam|Jagatsinghpur|Jajpur|Jharsuguda|Kalahandi|Kandhamal|Kendrapara|Kendujhar|Khordha|Koraput|Malkangiri|Mayurbhanj|Nabarangpur|Nayagarh|Nuapada|Puri|Rayagada|Sambalpur|Subarnapur|Sundergarh';
countries ['Punjab'] = 'Amritsar|Barnala|Bathinda|Faridkot|Fatehgarh Sahib|Fazilka|Firozpur|Gurdaspur|Hoshiarpur|Jalandhar|Kapurthala|Ludhiana|Mansa|Moga|Mohali|Muktsar|Pathankot|Patiala|Rupnagar|Sangrur|Shaheed Bhagat Singh Nagar|Tarn Taran';
countries ['Rajasthan'] = 'Ajmer|Alwar|Banswara|Baran|Barmer|Bharatpur|Bhilwara|Bikaner|Bundi|Chittorgarh|Churu|Dausa|Dholpur|Dungarpur|Ganganagar|Hanumangarh|Jaipur|Jaisalmer|Jalore|Jhalawar|Jhunjhunu|Jodhpur|Karauli|Kota|Nagaur|Pali|Pratapgarh|Rajsamand|Sawai Madhopur|Sikar|Sirohi|Tonk|Udaipur';
countries ['Sikkim'] = 'East Sikkim|North Sikkim|South Sikkim|West Sikkim';
countries ['TamilNadu'] = 'Ariyalur|Chennai|Coimbatore|Cuddalore|Dharmapuri|Dindigul|Erode|Kanchipuram|Kanyakumari|Karur|Krishnagiri|Madurai|Nagapattinam|Namakkal|Nilgiris|Perambalur|Pudukkottai|Ramanathapuram|Salem|Sivaganga|Thanjavur|Theni|Thoothukudi|Tiruchirappalli|Tirunelveli|Tiruppur|Tiruvallur|Tiruvannamalai|Tiruvarur|Vellore|Viluppuram|Virudhunagar';
countries ['Telangana'] = 'Adilabad|Bhadradri Kothagudem|Hyderabad|Jagtial|Jangaon|Jayashankar|Jogulamba|Kamareddy|Karimnagar|Khammam|Komaram Bheem|Mahabubabad|Mahbubnagar|Mancherial|Medak|Medchal|Nagarkurnool|Nalgonda|Nirmal|Nizamabad|Peddapalli|Rajanna Sircilla|Ranga Reddy|Sangareddy|Siddipet|Suryapet|Vikarabad|Wanaparthy|Warangal Rural|Warangal Urban|Yadadri Bhuvanagiri';
countries ['Tripura'] = 'Dhalai|Gomati|Khowai|North Tripura|Sepahijala|South Tripura|Unakoti|West Tripura';
countries ['UttarPradesh'] = 'Agra|Aligarh|Allahabad|Ambedkar Nagar|Amethi|Amroha|Auraiya|Azamgarh|Baghpat|Bahraich|Ballia|Balrampur|Banda|Barabanki|Bareilly|Basti|Bhadohi|Bijnor|Budaun|Bulandshahr|Chandauli|Chitrakoot|Deoria|Etah|Etawah|Faizabad|Farrukhabad|Fatehpur|Firozabad|Gautam Buddha Nagar|Ghaziabad|Ghazipur|Gonda|Gorakhpur|Hamirpur|Hapur|Hardoi|Hathras|Jalaun|Jaunpur|Jhansi|Kannauj|Kanpur Dehat|Kanpur Nagar|Kasganj|Kaushambi|Kheri|Kushinagar|Lalitpur|Lucknow|Maharajganj|Mahoba|Mainpuri|Mathura|Mau|Meerut|Mirzapur|Moradabad|Muzaffarnagar|Pilibhit|Pratapgarh|Raebareli|Rampur|Saharanpur|Sambhal|Sant Kabir Nagar|Shahjahanpur|Shamli|Shravasti|Siddharthnagar|Sitapur|Sonbhadra|Sultanpur|Unnao|Varanasi';
countries ['Uttarakhand']  = 'Almora|Bageshwar|Chamoli|Champawat|Dehradun|Haridwar|Nainital|Pauri|Pithoragarh|Rudraprayag|Tehri|Udham Singh Nagar|Uttarkashi';
countries ['WestBengal'] = 'Alipurduar|Bankura|Birbhum|Cooch Behar|Dakshin Dinajpur|Darjeeling|Hooghly|Howrah|Jalpaiguri|Jhargram|Kalimpong|Kolkata|Malda|Murshidabad|Nadia|North 24 Parganas|Paschim Bardhaman|Paschim Medinipur|Purba Bardhaman|Purba Medinipur|Purulia|South 24 Parganas|Uttar Dinajpur';
countries ['AndamanNicobar'] = 'Nicobar|North Middle Andaman|South Andaman';
countries ['Chandigarh'] = 'Chandigarh';
countries ['DadraHaveli'] = 'Dadra Nagar Haveli';
countries ['DamanDiu'] = 'Daman|Diu';
countries ['Delhi'] = 'Central Delhi|East Delhi|New Delhi|North Delhi|North East Delhi|North West Delhi|Shahdara|South Delhi|South East Delhi|South West Delhi|West Delhi';
countries ['Lakshadweep'] = 'Lakshadweep';
countries ['Puducherry'] = 'Karaikal|Mahe|Puducherry|Yanam';

var city_states = Object();
city_states['Chhattisgarh'] = 'Balod|Baloda Bazar|Balrampur|Bastar|Bemetara|Bijapur|Bilaspur|Dantewada|Dhamtari|Durg|Gariaband|Gaurella-Pendra-Marwahi|Janjgir-Champa|Jashpur|Kabirdham|Kanker|Kondagaon|Khairagarh-Chhuikhadan-Gandai|Korba|Koriya|Mahasamund|Manendragarh-Chirmiri-Bharatpur|Mohla-Manpur- Ambagarh Chowki|Mungeli|Narayanpur|Raigarh|Raipur|Rajnandgaon|Sarangarh-Bilaigarh|Sakti|Sukma|Surajpur|Surguja;'

html = "";
for (region in countries)
  html += '<option value="' + region + '">' + region + '</option>';

document.getElementById("region").innerHTML = document.getElementById("region").innerHTML + html;

function set_country(oRegionSel, oCountrySel, oCity_StateSel) {
  var countryArr;
  oCountrySel.length = 0;
  oCity_StateSel.length = 0;
  var region = oRegionSel.options[oRegionSel.selectedIndex].text;
  if (countries[region]) {
    oCountrySel.disabled = false;
    oCity_StateSel.disabled = true;
    oCountrySel.options[0] = new Option('SELECT DISTRICT', '');
    countryArr = countries[region].split('|');
    for (var i = 0; i < countryArr.length; i++)
      oCountrySel.options[i + 1] = new Option(countryArr[i], countryArr[i]);
    document.getElementById('txtregion').innerHTML = region;
    document.getElementById('txtplacename').innerHTML = '';
  } else oCountrySel.disabled = true;
}

function set_city_state(oCountrySel, oCity_StateSel) {
  var city_stateArr;
  oCity_StateSel.length = 0;
  var country = oCountrySel.options[oCountrySel.selectedIndex].text;
  if (city_states[country]) {
    oCity_StateSel.disabled = false;
    oCity_StateSel.options[0] = new Option('SELECT NEAREST DIVISION', '');
    city_stateArr = city_states[country].split('|');
    for (var i = 0; i < city_stateArr.length; i++)
      oCity_StateSel.options[i + 1] = new Option(city_stateArr[i], city_stateArr[i]);
 
  } else oCity_StateSel.disabled = true;
}

function print_city_state(oCountrySel, oCity_StateSel) {
  var country = oCountrySel.options[oCountrySel.selectedIndex].text;
  var city_state = oCity_StateSel.options[oCity_StateSel.selectedIndex].text;

}


</script>

<script type="text/javascript">
  
  $(document).ready(function () {
  // Variables
  var $carousel = $(".carousel");
  var $carouselInner = $(".carousel-inner");
  var $slides = $(".slide");
  var slideWidth = $slides.width();
  var currentIndex = 0;

  // Funciones auxiliares
  function goToSlide(index) {
    $carouselInner.css("transform", "translateX(-" + slideWidth * index + "px)");
  }

  function showSlide(index) {
    $slides.removeClass("active");
    $slides.eq(index).addClass("active");
  }

  // Eventos
  $(".carousel-next").click(function () {
    currentIndex++;
    if (currentIndex >= $slides.length) {
      currentIndex = 0;
    }
    goToSlide(currentIndex);
    showSlide(currentIndex);
  });

  $(".carousel-prev").click(function () {
    currentIndex--;
    if (currentIndex < 0) {
      currentIndex = $slides.length - 1;
    }
    goToSlide(currentIndex);
    showSlide(currentIndex);
  });
});


</script>


</body>




<!-- Mirrored from kodesolution.com/html/2016/echarity-html/demo/index-mp-layout1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Apr 2023 13:00:44 GMT -->
</html>