<!doctype html>
<html lang="en">

<head>
   <!-- Basic Page Needs =====================================-->
   <meta charset="utf-8">

   <!-- Mobile Specific Metas ================================-->
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- Site Title- -->
   <title>SeoTime - SEO, Social Media and Marketing HTML Template</title>

   <!-- CSS
   ==================================================== -->
   <!--Font Awesome -->
   <link rel="stylesheet" href="assets/css/font-awesome.min.css">

   <!-- Animate CSS -->
   <link rel="stylesheet" href="assets/css/animate.css">

   <!-- Iconic Fonts -->
   <link rel="stylesheet" href="assets/css/icofonts.css">

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">

   <!-- Owl Carousel -->
   <link rel="stylesheet" href="assets/css/owlcarousel.min.css">

   <!-- Video Popup -->
   <link rel="stylesheet" href="assets/css/magnific-popup.css">

   <!--Style CSS -->
   <link rel="stylesheet" href="assets/css/style.css">

   <!--Responsive CSS -->
   <link rel="stylesheet" href="assets/css/responsive.css">


   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->


   
  <style type="text/css">
     *,
*::after,
*::before {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

:root {
  --unhover-border-color: rgba(0, 0, 0, 0.5);
  --unhover-text-color: rgba(255, 255, 255, 0.5);
  --unhover-background-color: rgba(0, 0, 0, 0.5);

  --hover-border-color: rgba(0, 0, 0, 0.8);
  --hover-text-color: rgba(255, 255, 255, 0.8);
  --hover-background-color: rgba(0, 0, 0, 0.8);

  --transition-delay: 0.5s;
}

.carousel {
  position: relative;
  width: 100vw;
  height: 100vh;
}

.slider-button {
  font-size: 1rem;
  padding: 5px 1rem;
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background-color: var(--unhover-background-color);
  border: 2px solid var(--unhover-border-color);
  color: var(--unhover-text-color);
  z-index: 10;
  cursor: pointer;
}

.slider-button-prev {
  left: 2rem;
}

.slider-button-next {
  right: 2rem;
}

.slider-button:hover,
.slider-button:focus {
  background-color: var(--hover-background-color);
  border: 2px solid var(--hover-border-color);
  color: var(--hover-text-color);
}

ul.slides {
  list-style-type: none;
  height: 100%;
  width: 100%;
}

li.slide {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  overflow: hidden;
  opacity: 0;
  transition: opacity var(--transition-delay);
  transition-delay: var(--transition-delay);
}

.slide > img {
  height: 100%;
  width: 100%;
  object-fit: cover;
  object-position: center;
}

li.slide[data-active-slide] {
  opacity: 1;
}

.slides-circles {
  display: flex;
  position: absolute;
  bottom: 3rem;
  left: 50%;
  transform: translateX(-50%);
  overflow: hidden;
}

.slides-circles > div {
  height: 20px;
  width: 20px;
  margin: 10px;
  border: 3px solid white;
  border-radius: 50%;
  transition: background-color var(--transition-delay);
  transition-delay: var(--transition-delay);
}

.slides-circles > div[data-active-slide] {
  background-color: white;
}

  </style>
         

</head>

<body>
   <div class="search-bar">
      <i class="fa fa-close"></i>
      <form class="search-bar-fixed" action="#">
         <input type="text" placeholder="search...">
         <button type="submit"><i class="icon icon-search"></i></button>
      </form>
   </div>
   <!--End Search bar -->

   <div class="tw-top-bar bg-green">
      <div class="container">
         <div class="row">
            <div class="col-md-8 text-left">
               <div class="top-contact-info">
                  <span> <i class="icon icon-map-marker2"></i> 1375 Ash Avenue</span>
                  <span> <i class="icon icon-envelope"></i> <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4a23242c250a2f322b273a262f64292527">[email&#160;protected]</a></span>
                  <span><i class="icon icon-phone3"></i> 314-326-2990</span>
               </div>
            </div>
            <!-- Col End -->
            <div class="col-md-4 ml-auto text-right">
               <div class="top-social-links">
                  <span>Follow us:</span>
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-google-plus"></i></a>
               </div>
            </div>
            <!-- Col End -->
         </div>
         <!-- Row End -->
      </div>
      <!-- Container End -->
   </div>
   <!-- Top Bar end -->

   <!-- header======================-->
   <header>
      <div class="tw-head">
         <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-white">
               <a class="navbar-brand tw-nav-brand" href="index.html">
                  <img src="assets/images/logo/logo.png" alt="seotime">
               </a>
               <!-- End of Navbar Brand -->
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>
               <!-- End of Navbar toggler -->
               <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                  <ul class="navbar-nav">
                     <li class="nav-item  active">
                        <a class="nav-link" href="home" >
                           Home
                           <span class="tw-indicator"></span>
                        </a>
                       
                     </li>
                     <li class="nav-item ">
                        <a class="nav-link" href="about" >
                           About Us
                           <span class="tw-indicator"></span>
                        </a>
                        
                     </li>
                     <!-- End Dropdown -->
                     
                     <li class="nav-item ">
                        <a class="nav-link" href="product" >
                           Products
                           <span class="tw-indicator"></span>
                        </a>
                        
                        <!-- End of Dropdown menu -->
                     </li>
                     <!-- End Dropdown -->
                     <li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>
                  </ul>
                  <!-- End Navbar Nav -->
                 <!--  <div class="tw-off-search d-none d-lg-inline-block">
                     <div class="tw-search">
                        <i class="icon icon-search"></i>
                     </div>
                  </div> -->
                  <!-- End off canvas menu -->
               </div>
               <!-- End of navbar collapse -->
            </nav>
            <!-- End of Nav -->
         </div>
         <!-- End of Container -->
      </div>
      <!-- End tw head -->
   </header>
   <!-- End of Header area -->