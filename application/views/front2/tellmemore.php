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



    <link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>


   
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
    <!--
	  <link type="text/css" href="<?php echo base_url('assets/frontend/assert/gentleSelect/jquery-gentleSelect.css');?>" rel="stylesheet" />
   
    <script type="text/javascript" src="<?php echo base_url('assets/frontend/assert/gentleSelect/jquery-gentleSelect.js');?>"></script>      -->

    <link href="<?php echo base_url('assets/frontend/daterange/css/datepicker.css');?>" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?php echo base_url('assets/frontend/daterange/js/datepicker.js');?>"></script>
		<link rel="stylesheet"  href="<?php echo base_url('assets/frontend/assert/css/lightslider.css'); ?>"/>
	<script src="<?php echo base_url('assets/frontend/assert/js/lightslider.js'); ?>"></script> 
	 <script>
    	 $(document).ready(function() {
			$("#content-slider").lightSlider({
                loop:true,
                keyPress:true
            });
            $('#image-gallery').lightSlider({
                gallery:true,
                item:1,
                thumbItem:9,
                slideMargin: 0,
                speed:500,
                auto:true,
                loop:true,
                onSliderLoad: function() {
                    $('#image-gallery').removeClass('cS-hidden');
                }  
            });
		});
    </script>
</head>

<body>


    <header class="index4-header">
        <a class="navbar-brand visible-xs" id="navbar-logo-mobile" href=""><img src="<?php echo base_url(); ?>assets/images/logo-new-chrcle-small.jpg" alt="" class="img-responsive"></a>
        <a href="" class=" visible-xs " style=" font: 400 30px/0.8 'Cookie', Helvetica, sans-serif; padding:30px 15px;">Connecting Drivers Globally </a>
        <nav class="navbar navbar-default hidden-xs" id="navbar">
            <div class="container">
                <div class="navbar-header col-md-4">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" id="navbar-logo" href=""><img src="<?php echo base_url(); ?>assets/images/logo-new-chrcle-small.jpg" alt="" class="img-responsive"></a>
                    <div style=" font: 400 30px/0.8 'Cookie', Helvetica, sans-serif; padding:30px 15px;">Connecting Drivers Globally</div>

                </div>
                <div class="col-md-3">
                    <div style="padding:30px 0px;">Malaysia > Timon island 
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" data-hover="dropdown" data-animations="fadeInDown fadeInRight fadeInUp fadeInLeft">
                    <ul class="nav navbar-nav navbar-right" id="menu-right">

                        <li>
                            <a href="">Become a Partner </a>
                        </li>
                        <li>
                            <a href="">Help</a>
                        </li>
                        <li>
                            <a href="">Register</a>
                        </li>
                        <li>
                            <a href="">Login</a>
                        </li>

                    </ul>
                </div>
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
                            <ul>
                                <li>
                                    <a href="">Become a Partner </a>
                                </li>
                                <li>
                                    <a href="">Help</a>
                                </li>
                                <li>
                                    <a href="">Register</a>
                                </li>
                                <li>
                                    <a href="">Login</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

	<div class="container-fluid">
	<?php 
	foreach($tellmemore as $tellmemorelist)
	{
	?>
		 <div class="col-md-6">
				  <h3>Overview</h3>
				  <p style="text-align: justify;font-family: initial;font-size: 17px;LINE-HEIGHT: 1.8;word-spacing: 1px;text-indent: 60px;">
				  <?php echo $tellmemorelist->overview;?>
				 
					</p>
				<table cellpadding="20" style="font-family: initial;font-size: 18px;line-height:2.8;word-spacing: 1px;">
					<tr style="margin-bottom:20px;">
						<td><b>Current</b></td>
						<td>&nbsp;</td>
						<td><?php echo $tellmemorelist->current;?></td>
					</tr>
					<tr>
						<td><b>Water Temprature</b></td>
						<td>&nbsp;</td>
						<td><?php echo $tellmemorelist->water_temperature;?></td>
					</tr>
					<tr>
						<td><b>Under water Visibility</b></td>
						<td>&nbsp;</td>
						<td><?php echo $tellmemorelist->underwater_visibility;?></td>
					</tr>
					<tr>
						<td><b>Diving season</b></td>
						<td>&nbsp;</td>
						<td><?php echo $tellmemorelist->diving_season;?></td>
					</tr>
					<tr>
						<td><b>Diving sites</b></td>
						<td>&nbsp;</td>
						<td><?php echo $tellmemorelist->diving_sites;?></td>
					</tr>
					<tr>
						<td><b>Dive Center</b></td>
						<td>&nbsp;</td>
						<td><?php echo $tellmemorelist->diving_centers;?></td>
					</tr>
					<tr>
						<td><b>Depth</b></td>
						<td>&nbsp;</td>
						<td><?php echo $tellmemorelist->depth;?></td>
					</tr>
					<tr>
						<td><b>What to see</b></td>
						<td>&nbsp;</td>
						<td><?php echo $tellmemorelist->what_to_see;?></td>
					</tr>
				</table>
				  </div>
				  <div class="col-md-6">
					<div class="demo">
        <div class="item">            
            <div class="clearfix">
                <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                    <li data-thumb="<?php echo  base_url();?>assets/frontend/assert/images/mo1_small.jpg"> 
                        <img src="<?php echo base_url();?>assets/frontend/assert/images/mo1.jpg" style="height:500px;"/>
                         </li>
                    <li data-thumb="<?php echo base_url();?>assets/frontend/assert/images/mo2_small.jpg"> 
                        <img src="<?php  echo base_url();?>assets/frontend/assert/images/mo2.jpg" style="height:500px;"/>
                         </li>
                    <li data-thumb="<?php echo base_url();?>assets/frontend/assert/images/mo3_small.jpg"> 
                        <img src="<?php echo base_url();?>assets/frontend/assert/images/mo3.jpg" style="height:500px;"/>
                         </li>
                    <li data-thumb="<?php echo base_url();?>assets/frontend/assert/images/mo4_small.jpg"> 
                        <img src="<?php echo base_url();?>assets/frontend/assert/images/mo4.jpg" style="height:500px;"/>
                         </li>
                    <li data-thumb="<?php echo base_url();?>assets/frontend/assert/images/mo5_small.jpg"> 
                        <img src="<?php echo base_url();?>assets/frontend/assert/images/mo5.jpg" style="height:500px;"/>
                         </li>
                    <li data-thumb="<?php echo  base_url();?>assets/frontend/assert/images/mo6_small.jpg"> 
                        <img src="<?php echo base_url();?>assets/frontend/assert/images/mo6.jpg" style="height:500px;"/>
                         </li>
                    <li data-thumb="<?php echo base_url();?>assets/frontend/assert/images/mo7_small.jpg"> 
                        <img src="<?php echo base_url();?>assets/frontend/assert/images/mo7.jpg" style="height:500px;"/>
                         </li>
                    <li data-thumb="<?php echo  base_url();?>assets/frontend/assert/images/mo1_small.jpg"> 
                        <img src="<?php echo base_url();?>assets/frontend/assert/images/mo1.jpg" style="height:500px;"/>
                         </li>
						 <li data-thumb="<?php echo base_url();?>assets/frontend/assert/images/mo2_small.jpg"> 
                        <img src="<?php echo  base_url();?>assets/frontend/assert/images/mo2.jpg" style="height:500px;"/>
                         </li>
                    <li data-thumb="<?php echo  base_url();?>assets/frontend/assert/images/mo3_small.jpg"> 
                        <img src="<?php echo base_url();?>assets/frontend/assert/images/mo3.jpg" style="height:500px;"/>
                         </li>
                    <li data-thumb="<?php echo base_url();?>assets/frontend/assert/images/mo4_small.jpg"> 
                        <img src="<?php echo base_url();?>assets/frontend/assert/images/mo4.jpg" style="height:500px;"/>
                         </li>
                </ul>
            </div>
        </div>
        

    </div>	

	</div>
	<?php 
	}
	?>
