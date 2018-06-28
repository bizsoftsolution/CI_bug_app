<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="ScriptsBundle">
    <title>Scubbi Diving Portal</title>
    <!--link rel="icon" href="images/favicon.ico" type="image/x-icon" /-->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <!-- BOOTSTRAPE STYLESHEET CSS FILES -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/datepicker.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/daterangepicker.css');?>">


    <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/bootstrap.min.css'); ?>">
    <!-- JQUERY SELECT -->
    <link href="<?php echo base_url('assets/frontend/css/select2.min.css'); ?>" rel="stylesheet" />
    <!-- JQUERY MENU -->
    <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/bootstrap-dropdownhover.css'); ?>">
    <!-- ANIMATION -->
    <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/animate.min.css'); ?>">
    <!-- OWl  CAROUSEL-->
    <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/owl.carousel.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/owl.style.css'); ?>">
    <!-- TEMPLATE CORE CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/style.css'); ?>">
	
    <!-- MOBILE MENU CSS -->
    <link href="<?php echo base_url('assets/frontend/css/meanmenu.min.css'); ?>" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/frontend/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/et-line-fonts.css'); ?>" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/frontend/fonts/classified/flaticon.css'); ?>">
    <!--  MASTER SLIDER -->
    <link rel="stylesheet" href="<?php echo base_url('assets/frontend/masterslider/css/masterslider.css'); ?>" />
    <link href="<?php echo base_url('assets/frontend/masterslider/css/style.css'); ?>" rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo base_url('assets/frontend/masterslider/css/layer-style.css'); ?>">
    <link href="<?php echo base_url('assets/frontend/masterslider/css/ms-staff-style.css'); ?>" rel='stylesheet' type='text/css'>
    <!-- Google Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900%7cOpen+Sans:400,600,700" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/frontend/css/nouislider.min.css'); ?>" rel="stylesheet">
    <!-- Theme Color -->
    <link rel="stylesheet" id="color" href="<?php echo base_url('assets/frontend/css/colors/defualt.css'); ?>">
    <!-- For Style Switcher -->
    <link rel="stylesheet" id="theme-color" type="text/css" href="#" />
	
    <!-- JavaScripts -->
    <script src="<?php echo base_url('assets/frontend/js/modernizr.js'); ?>"></script>
     <script type="text/javascript" src="<?php echo base_url('assets/frontend/js/jquery-3.1.1.min.js'); ?>"></script>
  
  <!-- BOOTSTRAP CORE JS -->
    <script type="text/javascript" src="<?php echo base_url('assets/frontend/js/bootstrap.min.js'); ?>"></script>
  
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap-datepicker.js');?>"></script> 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
       <script type="text/javascript">
            // When the document is ready
            $(document).ready(function () {
                
                $('.input-daterange').datepicker({
                    todayBtn: "linked",
                    pickerPosition: "bottom-left",
                     format: "dd-M-yyyy"
                });
            
            });
        </script>
</head>

<body>
    <div id="spinner">
        <div class="spinner-img">
            <img alt="AdZone Preloader" src="<?php echo base_url(); ?>upload/loader.gif" />
            <h2>Please Wait.....</h2>
        </div>
    </div>
    <!-- Color Switcher -->


    <div class="header-top clear">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 hidden-xs">
                    <div class="header-top-left header-top-info">
                        <div class="social-bar">
                            <ul>
							<?php 
								$data=$this->db->get('tbl_social_links')->result_array();
								foreach ($data as $sociallink) 
								{
								?>
                                <li><a class="<?php echo $sociallink['fa_icon_name']; ?>" href="<?php echo $sociallink['links']; ?>"></a></li>
								<?php
								}
							  ?>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="header-top-right pull-right header-top-info">
                        <ul>
                            <!--                         <li class="country">
                           <div class="btn-group" role="group">
                              <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fa fa-globe"></i> Language
                              <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu">
                                 <li><a href="#">English</a></li>
                                 <li><a href="#">Swedish</a></li>
                                 <li><a href="#">Arabic</a></li>
                                 <li><a href="#">Russian</a></li>
                                 <li><a href="#">chinese</a></li>
                              </ul>
                           </div>
                        </li> -->
                            <li>
                                <a href="#" data-toggle="modal" data-target=".login-model"> <i class="fa fa-users"></i>Became a Partner</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>Front/help" > <i class="fa fa-question"></i> Help</a>
                            </li>
                            <li>
                                <a href="#" data-toggle="modal" data-target=".register-model"> <i class="fa fa-user"></i> Register</a>
                            </li>
                            <li>
                                <a href="#" data-toggle="modal" data-target=".login-model"> <i class="fa fa-sign-in"></i> log in</a>
                            </li>
                            <li>
                                <a href="#" data-toggle="modal" data-target=".cart-model"> <i class="fa fa-shopping-basket"></i> Cart</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header class="index4-header">
        <a class="navbar-brand visible-xs" id="navbar-logo-mobile" href=""><!-- img src="images/logo.png" alt="" class="img-responsive"> --> Scubbi</a>
        <!--          <a href="post-ad.html" class="submit-btn visible-xs pull-right"><i class="fa fa-plus-square"></i> Create Ad </a>
 -->
        <nav class="navbar navbar-default hidden-xs" id="navbar">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" id="navbar-logo" href="<?php echo base_url(); ?>"> <img src="<?php echo base_url(); ?>upload/logo.png" alt="" class="img-responsive">  </a>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <h3>Connecting Drivers Globally</h3>
                </div>
                <!--  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" data-hover="dropdown" data-animations="fadeInDown fadeInRight fadeInUp fadeInLeft">
                  <ul class="nav navbar-nav navbar-right" id="menu-right">
                     <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"> Home <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                           <li><a href="index-2.html">Home With slider</a></li>
                           <li><a href="index2.html">Home 2 (Static Image)</a></li>
                           <li><a href="index3.html">Home 3 (Transparent Header)</a></li>
                           <li><a href="index4.html">Home 4</a></li>
                           <li><a href="index5.html">Home 5 (With Map)</a></li>
                           <li><a href="index6.html">Home 6 (advertizment)</a></li>
                        </ul>
                     </li>
                     <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Pages <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                           <li><a href="about.html">about Us</a></li>
                           <li><a href="contactus.html">contact us</a></li>
                           <li><a href="404.html">Error Page</a></li>
                           <li class="dropdown">
                              <a href="#">Multilevel Dropdown <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                 <li><a href="#">Level 1</a></li>
                                 <li><a href="#">Level 1</a></li>
                                 <li><a href="#">Level 1</a></li>
                                 <li class="dropdown">
                                    <a href="#">Level 1 <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                       <li><a href="#">Level 2</a></li>
                                       <li><a href="#">Level 2</a></li>
                                       <li><a href="#">Level 2</a></li>
                                       <li><a href="#">Level 2</a></li>
                                    </ul>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                     </li>
                     <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Listings <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                           <li><a href="category-1.html"> Category 1</a></li>
                           <li><a href="category-2.html">Category 2</a></li>
                           <li><a href="grid-listing.html">Grid Listing</a></li>
                           <li><a href="grid-listing-2.html">Grid Listing 2</a></li>
                           <li><a href="listing.html">Ad Listing</a></li>
                           <li><a href="listing2.html">Ad Listing 2</a></li>
                           <li><a href="listing-leftsidebar.html">Ad Listing Sidebar</a></li>
                           <li><a href="single-ad.html">Single Ad</a></li>
                           <li><a href="single-ad2.html">Single Ad 2</a></li>
                           <li class="dropdown">
                              <a href="#">Post Ad<span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                 <li><a href="post-ad.html">Post Ad 1</a></li>
                                 <li><a href="post-ad2.html">Post Ad 2</a></li>
                                 <li><a href="post-ad3.html">Post Ad 3</a></li>
                              </ul>
                           </li>
                        </ul>
                     </li>
                     <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Blog <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                           <li><a href="blog.html"> blog Listing</a></li>
                           <li><a href="blog-grid.html">Blog Grid</a></li>
                           <li><a href="blog-single.html">Blog Single</a></li>
                        </ul>
                     </li>
                     <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"> Dashboard <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                           <li><a href="user-dashboard.html"> Dashboard</a></li>
                           <li><a href="user-dashboard2.html"> Dashboard Style 2</a></li>
                           <li><a href="user-active-ads.html">Active ads</a></li>
                           <li><a href="user-archive.html">archive Ads</a></li>
                           <li><a href="user-edit-profile.html">Edit Profile</a></li>
                           <li><a href="user-pending-ads.html">Pending Ads</a></li>
                           <li><a href="user-followers.html">USer Followers</a></li>
                           <li><a href="user-delete-account.html">Delete Account</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="contactus.html" >Contact </a>
                     </li>
                     <li ><a href="post-ad.html" class="submit-btn"><i class="fa fa-plus-square"></i> Make New Ad </a></li>
                  </ul>
               </div> -->
            </div>
        </nav>
    </header>
    <!-- mobile-menu-area-start -->
    <div class="mobile-menu-area visible-xs hidden-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="mobile-menu-active">
                            <!-- <ul>
                           <li class="active">
                              <a href="index-2.html">Home</a>
                              <ul>
                                 <li><a href="index-2.html">Home With slider</a></li>
                                 <li><a href="index2.html">Home 2 (Static Image)</a></li>
                                 <li><a href="index3.html">Home 3 (Transparent Header)</a></li>
                                 <li><a href="index4.html">Home 4</a></li>
                                 <li><a href="index5.html">Home 5 (With Map)</a></li>
                                 <li><a href="index6.html">Home 6 (advertizment)</a></li>
                              </ul>
                           </li>
                           <li>
                              <a href="about.html">Pages</a>
                              <ul>
                                 <li><a href="about.html">about Us</a></li>
                                 <li><a href="contactus.html">contact us</a></li>
                                 <li><a href="404.html">Error Page</a></li>
                                 <li>
                                    <a href="#">Meltilevel Menu</a>
                                    <ul>
                                       <li><a href="#">Level 2</a></li>
                                       <li><a href="#">Level 2</a></li>
                                       <li><a href="#">Level 2</a></li>
                                       <li><a href="#">Level 2</a></li>
                                       <li><a href="#">Level 2</a></li>
                                       <li><a href="#">Level 2</a></li>
                                    </ul>
                                 </li>
                              </ul>
                           </li>
                           <li>
                              <a href="category-1.html">Listing</a>
                              <ul>
                                 <li><a href="category-1.html"> Category 1</a></li>
                                 <li><a href="category-2.html">Category 2</a></li>
                                 <li><a href="grid-listing.html">Grid Listing</a></li>
                                 <li><a href="grid-listing-2.html">Grid Listing 2</a></li>
                                 <li><a href="listing.html">Ad Listing</a></li>
                                 <li><a href="listing2.html">Ad Listing 2</a></li>
                                 <li><a href="listing-leftsidebar.html">Ad Listing Sidebar</a></li>
                                 <li><a href="single-ad.html">Single Ad</a></li>
                                 <li><a href="single-ad2.html">Single Ad 2</a></li>
                                 <li class="dropdown">
                                    <a href="#">Post Ad<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                       <li><a href="post-ad.html">Post Ad 1</a></li>
                                       <li><a href="post-ad2.html">Post Ad 2</a></li>
                                       <li><a href="post-ad3.html">Post Ad 3</a></li>
                                    </ul>
                                 </li>
                              </ul>
                           </li>
                           <li>
                              <a href="blog.html">Blog</a>
                              <ul>
                                 <li><a href="blog.html"> blog Listing</a></li>
                                 <li><a href="blog-grid.html">Blog Grid</a></li>
                                 <li><a href="blog-single.html">Blog Single</a></li>
                              </ul>
                           </li>
                           <li>
                              <a href="user-dashboard.html">Dashboard</a>
                              <ul>
                                 <li><a href="user-dashboard.html"> Dashboard</a></li>
                           <li><a href="user-dashboard2.html"> Dashboard Style 2</a></li>
                                 <li><a href="user-active-ads.html">Active ads</a></li>
                                 <li><a href="user-archive.html">archive Ads</a></li>
                                 <li><a href="user-edit-profile.html">Edit Profile</a></li>
                                 <li><a href="user-pending-ads.html">Pending Ads</a></li>
                                 <li><a href="user-followers.html">USer Followers</a></li>
                                 <li><a href="user-delete-account.html">Delete Account</a></li>
                              </ul>
                           </li>
                           <li><a href="#">Contact</a></li>
                        </ul> -->
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile-menu-area-end -->