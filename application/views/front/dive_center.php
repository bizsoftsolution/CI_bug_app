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
    <link rel="stylesheet" href="<?php echo base_url('assets/css/datepicker.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/daterangepicker.css'); ?>">



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
  
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap-datepicker.js'); ?>"></script> 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
	<!--
	  <link type="text/css" href="<?php echo base_url('assets/frontend/assert/gentleSelect/jquery-gentleSelect.css'); ?>" rel="stylesheet" />
   
    <script type="text/javascript" src="<?php echo base_url('assets/frontend/assert/gentleSelect/jquery-gentleSelect.js'); ?>"></script>      -->           
	
	
	<!--Date picker search bar start-->
<link href="<?php echo base_url('assets/new/css/datepicker.css');?>" rel="stylesheet">
<script type="text/javascript" src="<?php echo base_url('assets/new/js/bootstrap-datepicker.js');?>"></script>
	<!--Date picker search bar end-->
 
    <style>
        .carousel-control {
            padding-top: 10%;
            width: 5%;
        }
        td {
            padding: 20px;
        }
		ul {
  list-style-type: none;
}
.fixed {
    position: relative;
	background-color:#f5f5f5;
	padding:15px;
	color:#000;
	height:auto;
	overflow:scroll;
	height:250px;
	
}
@media (min-width: 768px) {
    .fixed {
        position: fixed;
		background-color:#f5f5f5;
	padding:15px;
	color:#000;
	height:auto;
	overflow:scroll;
	height:250px;
	width:256px;
    }
}
    </style>
	<style>
.wrapper {
    min-width:100%;
    max-width: 100%;
}
#overlay {
    position: fixed;
    top: 150;
    width: 100%;
    height: 100%;
}
#overlay .wrapper {
    height: 100%;
}
@media screen and (max-width: 480px) and (min-width: 320px) {
   #dvMap
   {
	      width: 100%!important;
	   height:auto;
   }
   #overlay
   {
	   position:relative;
	   width: 100%;
    height: 100%;
	bottom:0;
   }
   
}
@media screen and (max-width: 1000px) and (min-width: 481px) {
   #dvMap
   {
	       width: 100%!important;
	   height:auto;
   }
   #overlay
   {
	   position:relative;
	   width: 100%;
    height: 100%;
	bottom:0;
   }
   
}

@media screen and (max-width: 1000px) and (min-width: 600px) {
	#dvMap
   {
	       width: 100%!important;
	   height:auto;
   }
	.flate-search
   {
	   margin:125px 0 0 0;
		min-width:100%;
		max-width: 100%;
   }
   #wrapper {
    /* width: 800px; */
    /* margin: 0 auto; */
    color: #333;
    font-family: Tahoma,Verdana,sans-serif;
    line-height: 1.5;
    font-size: 14px;
}
#dvMap
   {
	   width:100%;
	   height:auto;
   }
}
</style>
	<script>
	$(document).ready(function () {
		var nowTemp = new Date();
        var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

        var checkin = $('#dpd1').datepicker({
		
            onRender: function(date) {
                return date.valueOf() < now.valueOf() ? 'disabled' : '';
            }
        }).on('changeDate', function(ev) {
            if (ev.date.valueOf() > checkout.date.valueOf()) {
                var newDate = new Date(ev.date)
                newDate.setDate(newDate.getDate() + 1);
                checkout.setValue(newDate);
            }
            checkin.hide();
            $('#dpd2')[0].focus();
        }).data('datepicker');
        var checkout = $('#dpd2').datepicker({
            onRender: function(date) {
                return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
            }
        }).on('changeDate', function(ev) {
            checkout.hide();
        }).data('datepicker');
	});
	</script>
    
	
	
	
	
	<script type="text/javascript">
        $(document).ready(function() {
		$("[type=checkbox]").click(function(){
			var clicked = $(this);
			
			 var product_id = $(this).data("productid");
			 var product_name = $(this).data("productname");
			 var product_price = $(this).data("price");
			 var quantity = 1;
			  //alert(product_id);
			   $.ajax({
			url:"<?php echo base_url(); ?>Front/addCart",
			method:"POST",
			 data:{product_id:product_id, product_name:product_name, product_price:product_price, quantity:quantity},
			success:function(data)
			{
			 alert("Product Added into Cart");
			 $('#cart_details').html(data);
			 $('#' + product_id).val('');
			}
		   });
		
		});
		$('.add_cart').click(function(){
	
			
			  var product_id = $(this).data("productid");
			  var product_name = $(this).data("productname");
			  var product_price = $(this).data("price");
			  var quantity = 1;
			 // alert(product_id);
			   dataString = $("#leisureDive").serialize();
		
		 $.ajax({
			url:"<?php echo base_url(); ?>Front/addCart",
			method:"POST",
			 data:{product_id:product_id, product_name:product_name, product_price:product_price, quantity:quantity},
			success:function(data)
			{
			 alert("Product Added into Cart");
			 $('#cart_details').html(data);
			 $('#' + product_id).val('');
			}
		   });

			});
			$('#cart_details').load("<?php echo base_url(); ?>Front/view_cart");

 $(document).on('click', '.remove_inventory', function(){
  var row_id = $(this).attr("id");
  if(confirm("Are you sure you want to remove this?"))
  {
   $.ajax({
    url:"<?php echo base_url(); ?>Front/remove",
    method:"POST",
    data:{row_id:row_id},
    success:function(data)
    {
     alert("Product removed from Cart");
     $('#cart_details').html(data);
    }
   });
  }
  else
  {
   return false;
  }
 });

 $(document).on('click', '#clear_cart', function(){
  if(confirm("Are you sure you want to clear cart?"))
  {
   $.ajax({
    url:"<?php echo base_url(); ?>Front/clear",
    success:function(data)
    {
     alert("Your cart has been clear...");
     $('#cart_details').html(data);
    }
   });
  }
  else
  {
   return false;
  }
 });
            $('#myCarousel').carousel({
                interval: 10000
            })
            $('#example1').gentleSelect({
                columns: 3,
                itemWidth: 100,
                title: "Select a Country",
                hideOnMouseOut: true
            });
            $('#example2').gentleSelect({
                columns: 3,
                itemWidth: 100,
                title: "Select a Island",
                hideOnMouseOut: true
            });


            var start = moment();
            var mindate = moment();



            var end = moment().add(2, 'days');

            function cb(start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            }

            $('input[name="daterange"]').daterangepicker({
                startDate: start,
                endDate: end,
                minDate: mindate,


                locale: {
                    format: 'DD-MM-YYYY'
                }
            });
			
			 
        });
    </script>
</head>

<body>

<div class="modal fade" id="myModalHorizontal" tabindex="-1" role="dialog"  aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content" style="width: 60%;">
			<!-- Modal Header -->
			<div class="modal-header">
				<button type="button" class="close" 
				   data-dismiss="modal">
					   <span aria-hidden="true">&times;</span>
					   <span class="sr-only">Close</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">
					Customer Login
				</h4>
			</div>
			
			<!-- Modal Body -->
			<div class="modal-body">
				
				<form role="form">
					 <div class="form-group">
						<label for="email">Email address:</label>
						<input type="email" class="form-control" id="inputEmail3">
					  </div> 
					  <div class="form-group">
						<label for="email">Password</label>
						<input type="password" class="form-control" id="inputPassword3" >
					  </div> 
				  <!--input type="submit" class="btn btn-danger" style="width:100%;" value="Login"-->
				   <a  href="<?php echo base_url('Customer/customerDashboard'); ?>" type="submit" class="btn btn-danger" style="width:100%;">Log in</a>
				  <hr style="width:100%;">
				  <!--div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
					  <a  href="<?php echo base_url('Customer/customerDashboard'); ?>" type="submit" class="btn btn-default">Sign in</a>
					</div>
				  </div-->
				</form>
				<a href="" class="">
				<img src="<?php echo base_url(); ?>assets/images/sign-in-facebook.png" style="width:100%;height:50px" class="img-responsive"><!--i class="icon-dribbble3"></i--></a>
				<a href="" class="">
				<img src="<?php echo base_url(); ?>assets/images/google-sign-in.png" style="width:100%;height:50px" class="img-responsive"><!--i class="icon-dribbble3"></i--></a>
			</div>
			
			<!-- Modal Footer -->
			<div class="modal-footer">
				<div class="row">
					<div class="col-md-6">Don't have an account?</div>
					<div class="col-md-6"> <a  href="<?php echo base_url('Customer/customerSignup'); ?>" type="submit" class="btn btn-danger" style="width:100%;background:#fff;color:red;">Sign up</a></div>
				</div>
				<!--button type="button" class="btn btn-default"
						data-dismiss="modal">
							Close
				</button-->
			</div>

		</div>

	</div>
</div>

      <header class="index4-header">
         <a class="navbar-brand visible-xs" id="navbar-logo-mobile" href=""><img src="<?php echo base_url(); ?>assets/images/logo-new-chrcle-small.jpg" alt="" class="img-responsive"></a>
         <a href="" class=" visible-xs " style=" font: 400 30px/0.8 'Cookie', Helvetica, sans-serif; padding:30px 15px;">Connecting Drivers Globally </a>
         <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container-fluid" style="padding-right: 37px!important;">
               <div class="navbar-header col-md-2">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" id="navbar-logo" href="<?php echo base_url(); ?>">
				  <img src="<?php echo base_url(); ?>assets/images/logo-new-chrcle-small.jpg" alt="" class="img-responsive"></a>
				    </div>
				  <div class="col-md-5" style="padding:17px 15px">
                        <div class="text-center1" style="padding-top:25px;font-weight:20px;">
						<b style="font-size:18px;">
						<?php
							foreach ($divecenterpage as $countryIsland)
							{
								$query = $this
									->db
									->get_where('tbl_country', array(
									'country_id' => $countryIsland->dccountry
								));
								foreach ($query->result_array() as $row2)
								{
									echo $row2['country_name'] . " > ";
								}
								$query1 = $this
									->db
									->get_where('tbl_island', array(
									'island_id' => $countryIsland->dcislands
								));
								foreach ($query1->result_array() as $row3)
								{
									echo $row3['island_name'];
								}
							?>
													   </b>
														<?php
							}
							?>
							
                            <span style="float:right;">
							<form class="form-inline">
								<div class="form-group">
									<select id='' class="form-control">
										<option value="1">MYR</option>
										<option value="2">AFN</option>
										<option value="3">ARS</option>
										<option value="4">BRL</option>
										<option value="5">EUR</option>
										<option value="6">JPY</option>
										<option value="7">KES</option>
										<option value="8">KPW</option>
										<option value="9">KRW</option>	
									</select> 
								</div>	
								<div class="form-group">
									<select id='' class="form-control">
										<option value="1">English</option>
										<option value="2">Chinese</option>
										<option value="3">Spanish</option>
										<option value="4">Hindi</option>
										<option value="5">Arabic</option>
										<option value="6">Portuguese</option>
										<option value="7">Bengali</option>
										<option value="8">Russian</option>
										<option value="9">Japanese</option>	
									</select> 
								</div>	
							</form>
						 
						 </span>
                        </div>

                    </div>
				  
             
               <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" data-hover="dropdown" data-animations="fadeInDown fadeInRight fadeInUp fadeInLeft">
				<?php 
					if($this->session->userdata('user_id')!='')
					{
						if($this->session->userdata('user_type') == 'Customer')
						{
				?>
                  <ul class="nav navbar-nav navbar-right" id="menu-right">
 
                     <li>
                        <a href="" >Become a Partner </a>
					</li>
					<li>
                        <a href="" >Help</a>
					</li>
					<li class="dropdown">
						<?php
						$u_id = $this->session->userdata('user_id');
						$data1=$this->db->get_where('tbl_customerprofile', array('user_id'=>$u_id))->result();
						foreach ($data1 as $a1) 
						{
						?>
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="padding: 0px 0px;border-radius:50%">
						<img src="<?php echo base_url();?>upload/customerprofile/<?php echo $a1->photo; ?>" style="width:50px;height:50px;" class="profile-image img-circle"> <!--Username <b class="caret"></b--></a>
						<?php 
						}
						?>
						<ul class="dropdown-menu">
							<li><a href="<?php echo base_url('Customer/customerDashboard'); ?>"><i class="fa fa-home"></i> My Dashboard</a></li>
							<li class="divider"></li>
							<li><a href="<?php echo base_url('Customer/customerProfile'); ?>"> Profile</a></li>
							<li class="divider"></li>
							<li><a href="<?php echo base_url('Customer/customerMydiveTrips'); ?>"> My Dive Trips</a></li>
							<li class="divider"></li>
							<li><a href="<?php echo base_url('Customer/allMessages'); ?>"> My Message</a></li>
							<li class="divider"></li>
							<li><a href="<?php echo base_url('Customer/myCart'); ?>"> My Cart</a></li>
							<li class="divider"></li>
							<li><a href="<?php echo base_url('Customer/customerDashboard'); ?>"> Dive Credits</a></li>
							<li class="divider"></li>
							<li><a href="<?php echo base_url('Customer/logout'); ?>"> Sign out</a></li>
							<li class="divider"></li>
						</ul>
					</li>
                    
                  </ul>
					<?php 
						}else
						{
							
					?>
					<ul class="nav navbar-nav navbar-right" id="menu-right">
 
                     <li>
                        <a href="" >Become a Partner </a>
					</li>
					<li>
                        <a href="" >Help</a>
					</li>
					<li>						
                        <a href="<?php echo base_url('Customer/customerSignup'); ?>" >Sign Up</a>
					</li>
					<li>						
                        <a href="<?php echo base_url('Customer'); ?>" >Login</a>
                     </li>
                    
                  </ul>
					<?php
						}
						
					}
					else
						{
							
					?>
					<ul class="nav navbar-nav navbar-right" id="menu-right">
 
                     <li>
                        <a href="" >Become a Partner </a>
					</li>
					<li>
                        <a href="" >Help</a>
					</li>
					<li>						
                        <a href="<?php echo base_url('Customer/customerSignup'); ?>" >Sign Up</a>
					</li>
					<li>						
                        <a href="<?php echo base_url('Customer'); ?>" >Login</a>
                     </li>
                    
                  </ul>
					<?php
						}
					
				?>
               </div>
            </div>  <div class="separator"></div>
         </nav>
      </header>
	

    <!-- End Slider -->
    <div class="container-fluid" >
        <div class="row">
            <div class="col-md-8" style="margin: 108px 0 0 0;">
			<?php
foreach ($divecenterpage as $divecenterval)
{
?>
				<div class="col-md-12">
					<div class="featured-slider">
						<?php
    $carouseldive = $divecenterval->user_id;
    $data124 = $this
        ->db
        ->get_where('tbl_gallery', array(
        'user_id' => $carouseldive
    ))->result();
    foreach ($data124 as $cval24)
    {
?>
						<div class="item">
							<div class="papular-reviews">
								<a href="#">
									<div class="image">
									
										<img alt="Tour Package" src="<?php echo base_url(); ?>upload/DCprofile/gallery/<?php echo $cval24->gallery; ?>" class="img-responsive" style="height:150px;width:200px;" >
										
									</div>
								   
								</a>
							</div>
						</div>
						<?php
    } ?>
					</div>
					
				</div>
												
				
				<div class="col-md-12">&nbsp;</div>
                
                <!--/well-->
                <div class="row">
								<?php
    //$date = new DateTime(str_replace("-","/",$sDate));
    //$newStart = $date->format('d-m-Y');
    //$date1 = new DateTime(str_replace("/","-",$eDate));
    //$newEnd = $date1->format('d-m-Y');
    
?>
                   
	<div class="container">
<div class="row">
	<div class="col-md-12">
		<form class="form-inline" role="form" action="<?php echo base_url(); ?>Front/divecenter_search" method="POST">
	<div class="form-group"><span style="font-size:15px;width:100px;margin: 0 0 0 14px;font-family: serif;"><b><?php echo $divecenterval->dcname; ?></b></span></div>
	<div class="form-group">
		<div class="input-group" style="height: 50px;">
			<input type="number" name="no_of_persons" value="<?php echo $no_of_persons; ?>" min="1" class="form-control" style="width:50px;height: 50px;"/>
			<span class="input-group-addon">No. of Person</span>
		</div>
	</div>
	<div class="form-group">
		<div id="wrapper">
		<div class="demo">
		<span id="two-inputs">
		<div class="col-md-6 col-sm-2 col-xs-12 nopadding">
			<div class="form-group">											 
				 <input type="text" id="dpd1" class="form-control" style="height: 50px;width:122px;" name="checkin" value="<?php echo $sDate; ?>">						 
			</div>
		</div>
		<div class="col-md-6 col-sm-2 col-xs-12 nopadding">
		   <div class="form-group">
				<input type="text" id="dpd2" class="form-control" style="height: 50px;width:122px;" name="checkout" value="<?php echo $eDate; ?>">
				
				<input type="hidden" name="diveid" value="<?php echo $d_id; ?>">
			</div>
		</div> 
		</span>
		</div>
		</div>
	</div>
	<div class="form-group">
		 <input type="submit" class="btn btn-danger" value="Search" name="dive_search" style="height: 50px;line-height:35px;">
		<a href="" class="btn btn-success" style="height: 50px;line-height:35px;">Contact Dive Center </a>
	</div>
	 </form>
	</div>
	 
</div>
</div>
                        
                   
                </div>
                <hr>
				<style>
				 .nav-tabs>li.active>a
				 {
					    background-color: #eee!important;
						 border: 1px solid #FFF!important; 
				 }
				 .nav-tabs>li>a:hover
				 {
					 border-color: #fff #fff #fff; 
					 background-color: #eee; 
				 }
				 .panel-heading
				 {
					 
						border-bottom: 4px solid #eee!important;
    
				 }
				 .panel-default>.panel-heading 
				 {
					 background-color:#fff!important
				 }
				
				</style>
                   <div class="panel with-nav-tabs panel-default" >
                    <div class="panel-heading" style="background-color:#fff;">
                        <ul class="nav nav-tabs" style="border-bottom: 1px solid #ffffff;">
                            <li class="active"><a href="#General" data-toggle="tab" style="font-size: 16px;">General Info</a>
                            </li>
                            <li><a href="#Leisure" data-toggle="tab" style="font-size: 16px;">Leisure Dive</a>
                            </li>
                            <li><a href="#Courses" data-toggle="tab" style="font-size: 16px;">Courses & Specialties</a>
                            </li>
                            <li><a href="#Packages" data-toggle="tab" style="font-size: 16px;">Packages offer</a>
                            </li>
                            <li><a href="#Review" data-toggle="tab" style="font-size: 16px;">Review</a>
                            </li>

                        </ul>
                    </div>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="General">
                                <div class="row" style="padding-bottom: 8%;">
                                    <div class="col-md-4">
                                        <img src="<?php echo base_url(); ?>upload/DCprofile/<?php echo $divecenterval->dcimage; ?>" class="img-responsive" style="width:100%;height:150px;" />
                                    </div>
                                    <div class="col-md-8" style="text-align: justify;font-family: initial;font-size: 17px;LINE-HEIGHT: 1.8;word-spacing: 1px;">
                                        <?php echo $divecenterval->dcdescription; ?>
                                    </div>
                                </div>
                               
                                <div class="row">
                                    <table class="table" style="text-align: justify;font-family: initial;font-size: 15px;LINE-HEIGHT: 1.8;word-spacing: 1px;">
                                        <tr>
                                            <td>Address</td>
                                            <td><?php echo $divecenterval->dcaddress; ?>, Tioman Island</td>
                                        </tr>
                                        <tr>
                                            <td>Affiliation</td>
                                            <td>PADI</td>
                                        </tr>
                                        <tr>
                                            <td>Membership</td>
                                            <td><?php echo str_replace(',', ', ', $divecenterval->dcaffiliation); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Languages</td>
                                            <td style="text-transform:capitalize"><?php echo ucfirst(strtolower(str_replace(',', ', ', $divecenterval->dclanguage))); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Infrastructure</td>
                                            <td style="text-transform:capitalize"><?php echo ucfirst(strtolower(str_replace(',', ' | ', $divecenterval->dcfacilities))); ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Leisure"  style="overflow-y:scroll;height:470px;">
                                <div class="panel-group" id="accordion">
									
                                    <div class="panel panel-default">
									<?php
									$lesuiredive = $divecenterval->user_id;
									$data121 = $this
										->db
										->get_where('tbl_dcleisure', array(
										'user_id' => $lesuiredive
									))->result();
									foreach ($data121 as $cval21)
									{
										$date1 = strtotime($sDate);
										$date2 = strtotime($eDate);
										$datediff = $date2 - $date1;
										$days_between = floor($datediff / (60 * 60 * 24));
										
										$maxdive_day = $cval21->max_dive_day;
									?>
                    <div class="panel-heading">
											<div class="row">
												<div class="col-md-4">
													 <a data-toggle="collapse" data-parent="#accordion" href="#<?php echo $cval21->id; ?>"><?php echo $cval21->product_name; ?>&nbsp;&nbsp;<i class="fa fa-caret-down"></i></a>
												</div>
												<div class="col-md-4">
													<a  class="col-md-offset-2" data-toggle="collapse" data-parent="#accordion"  href="#<?php echo $cval21->id; ?>" style="color:#00db00;font-weight:bold;">AVAILABLE:15</a>
												</div>
												<div class="col-md-4">
													<a  style="float:right;font-size: 16px;" data-toggle="collapse" data-parent="#accordion" href="#<?php echo $cval21->id; ?>"><b><?php echo ucwords(strtoupper($divecenterval->dccurrency));?> <?php echo $cval21->product_price; ?></b> Per <?php echo $cval21->product_unit;?></a>
												</div>
											</div>
                                        </div>
										<?php
									}
									foreach ($data121 as $cval21)
									{
										/* $date1=date_create($sDate);
										$date2=date_create($eDate);
										$diff=date_diff($date1,$date2);
										
										$days_between = $diff->format("%a"); */
										$date1 = strtotime($sDate);
										$date2 = strtotime($eDate);
										$datediff = $date2 - $date1;
										$days_between = floor($datediff / (60 * 60 * 24));
										$maxdive_day = $cval21->max_dive_day;
										
									?>
                                        <div id="<?php echo $cval21->id; ?>" class="panel-collapse collapse " style="background-color:#ddd;">
                                            <div class="panel-body">
											<form method="post" id="leisureDive">
                                                <div class="row">
												
                                                    <div class="col-md-4">
                                                        <h5><b><?php echo $cval21->product_name; ?></b></h5>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="select-filters">
															<?php 
																if($cval21->product_unit == 'Dive')
																{
															?>
                                                            <select name="person" id="person" class="form-control">
                                                                <option label="Dives"></option>
																
																<?php 
																	for($i=1; $i<=$days_between;$i++)
																	{
																?>
                                                                <option value="<?php echo $i*$maxdive_day; ?>"><?php echo $i*$maxdive_day; ?></option>
																<?php
																	
																	}
																?>
                                                                <!--option value="3">12 Dives</option>
                                                                <option value="4">6 Dives</option-->
																</select>
																<?php
																}
																elseif($cval21->product_unit == 'Pax')
																{
																?>
																<select name="person" id="person" class="form-control">
                                                                <option label="Pax"></option>
																
																<?php 
																	for($i=1; $i<=$days_between;$i++)
																	{
																?>
                                                                <option value="<?php echo $i*$maxdive_day; ?>"><?php echo $i*$maxdive_day; ?></option>
																<?php
																	
																	}
																?>
                                                                <!--option value="3">12 Dives</option>
                                                                <option value="4">6 Dives</option-->
																</select>
																<?php 
																}
																?>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-2">
                                                        <b><?php echo ucwords(strtoupper($divecenterval->dccurrency));?> <?php echo $cval21->product_price; ?></b>
                                                    </div>
                                                    <div class="col-md-4 text-right">
                                                      
														 <button type="button" name="add_cart" class="btn btn-danger add_cart" data-productname="<?php echo $cval21->product_name; ?>" data-price="<?php echo $cval21->product_price; ?>" data-productid="<?php echo $cval21->id; ?>" />Add to My Dive Cart</button>
														 <input type="hidden" name="lproduct_id" id="lproduct_id" value="<?php echo $cval21->id; ?>"/>
														 <input type="hidden" name="lproduct_name" id="lproduct_name" value="<?php echo $cval21->product_name; ?>"/>
														 <input type="hidden" name="lproduct_price" id="lproduct_price" value="<?php echo $cval21->product_price; ?>"/>
                                                    </div>

                                                </div>
                                              
                                                <p><?php echo $cval21->product_description; ?></p>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <b>Included</b>
														<?php 
														$product_includes_single = explode(',',$cval21->product_includes);
														  foreach($product_includes_single as $sigle_include)
														  {?>
														  <p style="font-size: 12px;line-height: 20px;"><?php echo $sigle_include; ?></p>
														         
								<?php						  }
														  ?>

														
                                                        <!--ul>
                                                            <li>Diving</li>
                                                            <li>pick up & drop off at the hotel</li>
                                                            <li>water between the dives</li>
                                                            <li>Lunch</li>
                                                        </ul-->
														<hr>
														<b>Excluded</b>
														<?php 
														$product_excludes_single = explode(',',$cval21->product_excludes);
														  foreach($product_excludes_single as $sigle_excludes)
														  {?>
														  <p style="font-size: 12px;line-height: 20px;"><?php echo $sigle_excludes; ?></p>
														         
									<?php			}
														  ?>
														
                                                    </div>
                                                    <div class="col-md-3">
                                                        <b>Optional Services</b><br>
                                                        <ul>
                                                            <li>
														<?php 
													$row_optional_name[] ="";
													$row_optional_rate[] = "";
													$con_string[]="";
													$i=1;
													$j=1;
														$optional_services1 = explode(',',$cval21->optional_services);
														  foreach($optional_services1 as $row_optional)
														  {?>
														  
                              <?php
                              $row_optional_name[$i]=$row_optional;
                             // echo $row_optional_name[$i];
                              ?>
														         
									<?php			
                            $i++;
                            }
														  ?>
                          
                            <?php 
                            $optional_services2 = explode(',',$cval21->optional_services_price);
                              foreach($optional_services2 as $row_optional_price)
                              {?>
                              <p style="font-size: 12px;line-height: 20px;"><?php echo $row_optional_name[$j]; ?>
                                <b>MYR <?php echo $row_optional_price; ?></b>
                                

                             <?php  

                                $row_optional_rate[$j] = $row_optional_price;
                               $con_string[$j] = $row_optional_name[$j]."-".$row_optional_rate[$j];
                               ?>
                                 <input type="checkbox" class="form-control1" class="optional_service_value[]" name="optional_service[]" value="<?php echo $con_string[$j]; ?>" data-productid="<?php echo "L-".$cval21->id."-".$j; ?>" data-productname="<?php echo $row_optional_name[$j]; ?>" data-price="<?php echo $row_optional_rate[$j]; ?>"/></p>
                        
                               <?php
                                $j++;

                              }
                              ?>

                               </li>
                                                       
                                                    </div>
													<div class="col-md-3">
                                                        <b>BOOKING POLICY</b>
                                                        <p style="font-size: 12px;line-height: 20px;">full payment is required upon the booking via scubbi website</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <b>CANCELLATION POLICY</b>
                                                        <p style="font-size: 12px;line-height: 20px;">If you cancel 1 month before the trip,only bank charges fee is require to pay.</p>
                                                        <p style="font-size: 12px;line-height: 20px;">If you cancel 7 days before the trip, a cancellation fee of MYR30 is charge.</p>
                                                    </div>
                                                </div>
                                                <hr>
												</form>
												
                                            </div>

                                        </div>
										<?php
    }
?>
										
                                    </div>
									

                                </div>
                            </div>
                            <div class="tab-pane fade" id="Courses" style="overflow-y:scroll;height:470px;">
							    <div class="panel-group" id="accordion1">	
                                    <div class="panel panel-default">
										<?php
												$coursedive = $divecenterval->user_id;
												$data122 = $this
													->db
													->get_where('tbl_dccourses', array(
													'user_id' => $coursedive
												))->result();
												foreach ($data122 as $cval22)
												{
											?>
                                        <div class="panel-heading">
											<div class="row">
												<div class="col-md-4"> <a data-toggle="collapse" data-parent="#accordion1" href=".<?php echo "cour".$cval22->id; ?>"><?php echo $cval22->product_name; ?>&nbsp;&nbsp;<i class="fa fa-caret-down"></i></a></div>
												
												<div class="col-md-4"> <a  class="col-md-offset-2" data-toggle="collapse" data-parent="#accordion1"  href=".<?php echo "cour".$cval22->id; ?>" style="color:#00db00;font-weight:bold;">AVAILABLE:15</a></div>
												
												<div class="col-md-4"> <a  style="float:right;font-size: 16px;" data-toggle="collapse" data-parent="#accordion1" href=".<?php echo "cour".$cval22->id; ?>"><b>MYR 120</b> per dive</a></div>
											</div>
                                        </div>
										<?php
												}
												$coursedive = $divecenterval->user_id;
												$data122 = $this
													->db
													->get_where('tbl_dccourses', array(
													'user_id' => $coursedive
												))->result();
												foreach ($data122 as $cval22)
												{
											?>
                                         <div class="panel-collapse collapse <?php echo "cour".$cval22->id; ?>  " style="background-color:#ddd;">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <h5><b><?php echo $cval22->product_name; ?></b></h5>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="select-filters">
															<?php 
																if($cval22->product_unit == 'Dive')
																{
															?>
                                                            <select name="person" id="person" class="form-control">
                                                                <option label="Dives"></option>
																
																<?php 
																	for($i=1; $i<=$days_between;$i++)
																	{
																?>
                                                                <option value="<?php echo $i*$maxdive_day; ?>"><?php echo $i*$maxdive_day; ?></option>
																<?php
																	
																	}
																?>
                                                                <!--option value="3">12 Dives</option>
                                                                <option value="4">6 Dives</option-->
																</select>
																<?php
																}
																elseif($cval22->product_unit == 'Pax')
																{
																?>
																<select name="person" id="person" class="form-control">
                                                                <option label="Pax"></option>
																
																<?php 
																	for($i=1; $i<=$days_between;$i++)
																	{
																?>
                                                                <option value="<?php echo $i*$maxdive_day; ?>"><?php echo $i*$maxdive_day; ?></option>
																<?php
																	
																	}
																?>
                                                                <!--option value="3">12 Dives</option>
                                                                <option value="4">6 Dives</option-->
																</select>
																<?php 
																}
																?>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-2">
                                                        <b>MYR 120</b>
                                                    </div>
                                                    <div class="col-md-4 text-right">
                                                      
														 <button type="button" name="add_cart" class="btn btn-success add_cart" data-productname="<?php echo $cval22->product_name; ?>" data-price="<?php echo $cval22->product_price; ?>" data-productid="<?php echo $cval22->id; ?>" />Add to Cart</button>
                                                    </div>

                                                </div>
                                              
                                                <p><?php echo $cval22->product_description; ?></p>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <b>Included</b>
														<p style="font-size: 12px;line-height: 20px;"><?php echo $cval22->product_includes; ?></p>
                                                        <!--ul>
                                                            <li>Diving</li>
                                                            <li>pick up & drop off at the hotel</li>
                                                            <li>water between the dives</li>
                                                            <li>Lunch</li>
                                                        </ul-->
														<hr>
														<b>Excluded</b>
														<p style="font-size: 12px;line-height: 20px;"><?php echo $cval22->product_excludes; ?></p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <b>Optional Services</b><br>
														<p style="font-size: 12px;line-height: 10px;">Eqipment Rent <b>MYR 20</b>&nbsp;
                                                                <input type="checkbox" class="form-control1" /></p>
														<p style="font-size: 12px;line-height: 10px;">Dinner <b>MYR 20</b>&nbsp;
                                                                <input type="checkbox" class="form-control1" /></p>
														<p style="font-size: 12px;line-height: 10px;">Insurance<b>MYR 20</b>&nbsp;
                                                                <input type="checkbox" class="form-control1" /></p>
                                                        <!--ul>
                                                            <li>Eqipment Rent <b>MYR 20</b>&nbsp;
                                                                <input type="checkbox" class="form-control1" />
                                                            </li>
                                                            <li>Dinner <b>MYR 20</b>&nbsp;
                                                                <input type="checkbox" class="form-control1" />
                                                            </li>
                                                            <li>Insurance<b>MYR 20</b>&nbsp;
                                                                <input type="checkbox" class="form-control1" />
                                                            </li>

                                                        </ul-->

                                                    </div>
													<div class="col-md-3">
                                                        <b>BOOKING POLICY</b>
                                                        <p style="font-size: 12px;line-height: 20px;">full payment is required upon the booking via scubbi website</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <b>CANCELLATION POLICY</b>
                                                        <p style="font-size: 12px;line-height: 20px;">If you cancel 1 month before the trip,only bank charges fee is require to pay.</p>
                                                        <p style="font-size: 12px;line-height: 20px;">If you cancel 7 days before the trip, a cancellation fee of MYR30 is charge.</p>
                                                    </div>
                                                </div>
                                                <hr>
												
												
                                            </div>

                                        </div>
										<?php
											}
										?>
                                    </div>
									
                                    
                                </div>

							</div>
                            <div class="tab-pane fade" id="Packages" style="overflow-y:scroll;height:470px;">
                                <div class="panel-group" id="accordion">
								
                                    <div class="panel panel-default">
									<?php
										$packagedive = $divecenterval->user_id;
										$data123 = $this
											->db
											->get_where('tbl_dcpackage', array(
											'user_id' => $packagedive
										))->result();
										foreach ($data123 as $cval23)
										{
									?>
                                        <div class="panel-heading">
											<div class="row">
												<div class="col-md-4"> <a data-toggle="collapse" data-parent="#accordion" href=".<?php echo "pack".$cval23->id; ?>"><?php echo $cval23->product_name; ?>&nbsp;&nbsp;<i class="fa fa-caret-down"></i></a></div>
												
												
												<div class="col-md-4"> <a  class="col-md-offset-2" data-toggle="collapse" data-parent="#accordion"  href=".<?php echo "pack".$cval23->id; ?>" style="color:#00db00;font-weight:bold;">AVAILABLE:15</a></div>
												
												<div class="col-md-4"> <a  style="float:right;font-size: 16px;" data-toggle="collapse" data-parent="#accordion" href=".<?php echo "pack".$cval23->id; ?>"><b>MYR 120</b> per dive</a></div>
											</div>
                                        </div>
										<?php
										}
										$packagedive = $divecenterval->user_id;
										$data123 = $this
											->db
											->get_where('tbl_dcpackage', array(
											'user_id' => $packagedive
										))->result();
										foreach ($data123 as $cval23)
										{
									?>
                                          <div class="panel-collapse collapse <?php echo "pack".$cval23->id; ?>  " style="background-color:#ddd;">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <h5><b><?php echo $cval23->product_name; ?></b></h5>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="select-filters">
															<?php 
																if($cval23->product_unit == 'Dive')
																{
															?>
                                                            <select name="person" id="person" class="form-control">
                                                                <option label="Dives"></option>
																
																<?php 
																	for($i=1; $i<=$days_between;$i++)
																	{
																?>
                                                                <option value="<?php echo $i*$maxdive_day; ?>"><?php echo $i*$maxdive_day; ?></option>
																<?php
																	
																	}
																?>
                                                                <!--option value="3">12 Dives</option>
                                                                <option value="4">6 Dives</option-->
																</select>
																<?php
																}
																elseif($cval23->product_unit == 'Pax')
																{
																?>
																<select name="person" id="person" class="form-control">
                                                                <option label="Pax"></option>
																
																<?php 
																	for($i=1; $i<=$days_between;$i++)
																	{
																?>
                                                                <option value="<?php echo $i*$maxdive_day; ?>"><?php echo $i*$maxdive_day; ?></option>
																<?php
																	
																	}
																?>
                                                                <!--option value="3">12 Dives</option>
                                                                <option value="4">6 Dives</option-->
																</select>
																<?php 
																}
																?>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-2">
                                                        <b>MYR 120</b>
                                                    </div>
                                                    <div class="col-md-4 text-right">
                                                      
														 <button type="button" name="add_cart" class="btn btn-success add_cart" data-productname="<?php echo $cval23->product_name; ?>" data-price="<?php echo $cval23->normal_product_price; ?>" data-productid="<?php echo $cval22->id; ?>" />Add to Cart</button>
                                                    </div>

                                                </div>
                                              
                                                <p><?php echo $cval23->product_description; ?></p>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <b>Included</b>
														<p style="font-size: 12px;line-height: 20px;"><?php echo $cval23->product_includes; ?></p>
                                                        <!--ul>
                                                            <li>Diving</li>
                                                            <li>pick up & drop off at the hotel</li>
                                                            <li>water between the dives</li>
                                                            <li>Lunch</li>
                                                        </ul-->
														<hr>
														<b>Excluded</b>
														<p style="font-size: 12px;line-height: 20px;"><?php echo $cval23->product_excludes; ?></p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <b>Optional Services</b><br>
														<p style="font-size: 12px;line-height: 10px;">Eqipment Rent <b>MYR 20</b>&nbsp;
                                                                <input type="checkbox" class="form-control1" /></p>
														<p style="font-size: 12px;line-height: 10px;">Dinner <b>MYR 20</b>&nbsp;
                                                                <input type="checkbox" class="form-control1" /></p>
														<p style="font-size: 12px;line-height: 10px;">Insurance<b>MYR 20</b>&nbsp;
                                                                <input type="checkbox" class="form-control1" /></p>
                                                        <!--ul>
                                                            <li>Eqipment Rent <b>MYR 20</b>&nbsp;
                                                                <input type="checkbox" class="form-control1" />
                                                            </li>
                                                            <li>Dinner <b>MYR 20</b>&nbsp;
                                                                <input type="checkbox" class="form-control1" />
                                                            </li>
                                                            <li>Insurance<b>MYR 20</b>&nbsp;
                                                                <input type="checkbox" class="form-control1" />
                                                            </li>

                                                        </ul-->

                                                    </div>
													<div class="col-md-3">
                                                        <b>BOOKING POLICY</b>
                                                        <p style="font-size: 12px;line-height: 20px;">full payment is required upon the booking via scubbi website</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <b>CANCELLATION POLICY</b>
                                                        <p style="font-size: 12px;line-height: 20px;">If you cancel 1 month before the trip,only bank charges fee is require to pay.</p>
                                                        <p style="font-size: 12px;line-height: 20px;">If you cancel 7 days before the trip, a cancellation fee of MYR30 is charge.</p>
                                                    </div>
                                                </div>
                                                <hr>
												
												
                                            </div>

                                        </div>
										<?php
    }
?>
                                    </div>
									
                                   
                                </div>

							</div>
                            <div class="tab-pane fade" id="Review" style="overflow-y:scroll;height:470px;">
								<div class="row">
									<div class="col-md-3">
									<h2>245 Reviews</h2>
									</div>
									<div class="col-md-2">
										<ul>
											<li>Boat & Equipments</li>
											<li>Dive Sites</li>
											<li>Price</li>
											<li>Instructor</li>
											<li>Safety</li>
										</ul>

									</div>
									<div class="col-md-3">
									<ul>
										<li><div class="ratting" style="color:#fec107;">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half-o"></i>
											<i class="fa fa-star-o"></i>
											</div>
										</li>
										<li><div class="ratting" style="color:#fec107;">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half-o"></i>
											<i class="fa fa-star-o"></i>
											</div>
										</li>
											<li><div class="ratting" style="color:#fec107;">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half-o"></i>
											<i class="fa fa-star-o"></i>
											</div>
										</li>
										<li><div class="ratting" style="color:#fec107;">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half-o"></i>
											<i class="fa fa-star-o"></i>
											</div>
										</li>
										<li><div class="ratting" style="color:#fec107;">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half-o"></i>
											<i class="fa fa-star-o"></i>
											</div>
										</li>															
										
									</ul>

									</div>
									<div class="col-md-4" style="color:#fec107;font-size:20px;">
										<b>Average Rate 4.7 <i class="fa fa-star"></i></b>
									</div>

								
								</div>
								<hr>
								<?php
								$u_id = $divecenterval->user_id;
								$data3 = $this->db->get_where('tbl_review', array('divecenter_id'=>$u_id))->result();
									foreach($data3 as $dd3)
									{
								?>
								<div class="row">
									<div class="col-md-2">
										<?php 
										$userid = $dd3->customer_id;
										$data4 = $this->db->get_where('tbl_customerprofile', array('user_id'=>$userid))->result();
										foreach($data4 as $dd4)
										{
											$customer_photo = $dd4->photo;
										if($customer_photo != null)
										{
										?>
										<img src="<?php echo base_url(); ?>upload/customerprofile/<?php echo $dd4->photo; ?>" class="img-responsive img-circle" >
										<?php
										}
										else
										{
										?>
										<img src="<?php echo base_url(); ?>upload/1483346991334.png" class="img-responsive img-circle" >
										<?php
										}
										}
										?>
									</div>
									<div class="col-md-6">
										<?php 
										echo $dd3->description;
										?>
										
										
									</div>
									<div class="col-md-4">
										<?php
											$rdate = $dd3->date;
											$yrdata= strtotime($rdate);
											$rdd = date('F Y', $yrdata);
											echo 'on'.'  '.$rdd;
										?>
										
										<br><span style="color:#fec107;font-size:40px;">3.7<i class="fa fa-star"></i></span>
									</div>
								</div>
								<hr>
								<?php
									}
								?>
								
								
								<?php 
									if($this->session->userdata('user_id') != '')
									{
										if($this->session->userdata('user_type') == 'Customer')
										{
											?>
									<div class="row">
										<div class="col-md-2">
											<!--img src="assert/images/avtar-2.jpg" class="img-responsive img-circle" -->
										</div>
										<div class="col-md-6">
											<form action="" method="POST">
												
												<input type="hidden" value="<?php 
												$uuu_id = $this->session->userdata('user_id'); 
												echo $uuu_id; ?>" id="uuu_id" name="uuu_id">
												
												<input type="hidden" value="<?php
												$dive_id = $divecenterval->user_id;
												//$dive_id = $divecenter_id; 
												echo $dive_id; ?>" id="divecenter_id" name="divecenter_id">
												
												<textarea style="font-size:14px; height:60px; font-weight:bold; resize:none;" name="content" id="content" class="form-control"></textarea>

												<input type="submit" class="btn btn-default submit_button" value="Submit" class="" style="height:25px;float:right;line-height:0px;margin:2px 0;">
												
												<div id="flash"></div>
												<div id="show"></div>
											</form>
											
											<script type="text/javascript">
											$(function() {
											$(".submit_button").click(function() {
											var textcontent = $("#content").val();
											var textuserid = $("#uuu_id").val();
											var textdiveid = $("#divecenter_id").val();
											var dataString = 'content='+ textcontent + '&uuuid=' + textuserid + '&diveid=' + textdiveid;
											if(textcontent=='')
											{
											alert("Enter some text..");
											$("#content").focus();
											}
											else
											{
											$("#flash").show();
											$("#flash").fadeIn(400).html('<span class="load">Loading..</span>');
											$.ajax({
											type: "POST",
											url: "<?php echo base_url('Front/insertReview'); ?>",
											data: dataString,
											cache: true,
											success: function(html){
												$("#show").after(html);
												document.getElementById('content').value='';
												$("#flash").hide();
												$("#content").focus();
											}  
											});
											}
											return false;
											});
											});
											</script>
										</div>
										<!--div class="col-md-4">
											on March 2016
											<br><span style="color:#fec107;font-size:40px;">3.7<i class="fa fa-star"></i></span>
										</div-->
									</div>	
										
								<?php
										}
									}
								?>
								
							</div>
                        </div>
                    </div>
                </div>



			<?php
}
?>

            </div>
			
			
            <div class="col-md-4">
			<div id="overlay">
					<div class="wrapper">
			<?php
foreach ($divecenterpage as $get_dc)
{
    $get_id = $get_dc->user_id;
    $data = $this
        ->db
        ->get_where('tbl_dcprofile', array(
        'user_id' => $get_id
    ));
    //$this->db->get('tbl_dcprofile')->result_array();
    foreach ($data->result_array() as $a)
    {
        $markers[] = array(
            'lat' => $a['dcgps_x'],
            'lng' => $a['dcgps_y'],
            'description' => $a['dcname']
        );
    }
}
?>
				

		<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBLorhG6yww2PIYnW-C_d-D2MTmoZfa33w" type="text/javascript"></script>
		<script type="text/javascript">// <![CDATA[
		var markers = <?php echo json_encode($markers); ?>;
		window.onload = function () {
		var mapOptions = {
		center: new google.maps.LatLng(markers[0].lat, markers[0].lng),
		zoom: 10,
		mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		var map = new google.maps.Map(document.getElementById("dvMap"), mapOptions);
		var infoWindow = new google.maps.InfoWindow();
		var lat_lng = new Array();
		var latlngbounds = new google.maps.LatLngBounds();
		for (i = 0; i < markers.length; i++) {
		var data = markers[i]
		var myLatlng = new google.maps.LatLng(data.lat, data.lng);
		lat_lng.push(myLatlng);
		var marker = new google.maps.Marker({
		position: myLatlng,
		map: map,
		title: data.title,
		//label: data.label
		});
		latlngbounds.extend(marker.position);
		(function (marker, data) {
		google.maps.event.addListener(marker, "click", function (e) {
		infoWindow.setContent(data.description);
		infoWindow.open(map, marker);
		});
		})(marker, data);
		}
		map.setCenter(latlngbounds.getCenter());
		map.fitBounds(latlngbounds);

		}

// ]]></script>
		<div id="dvMap" style="width:420px; height: 750px;"></div>
			
             <div class="fixed affix-top" style="bottom: 0px;width:350px;">
				<h4 class="text-center">My Dive Cart</h4>
				<div class="separator"></div>
					<table class="table table-striped" id="cart_details">
						
						
						
					</table>
					<?php
foreach ($divecenterpage as $divecenter)
{
	?>
<form action="<?php echo base_url(); ?>Customer/paymentInfo" method="POST">
							
	<input type="hidden" value="<?php echo $no_of_persons; ?>" id="no_of_person" name="no_of_person">
	
	<input type="hidden" value="<?php
	$user_iddd = $this->db->get_where('tbl_dcprofile', array('user_id'=>$divecenter->user_id))->result();
	foreach($user_iddd as $u_val)
	{
	$dive_id = $u_val->id;
	//$dive_id = $divecenter_id; 
	echo $dive_id; 
	}
	?>" id="divecenter_id" name="divecenter_id">
	<input type="hidden" value="<?php echo $sDate; ?>" name="startdate" id="startdate">
	<input type="hidden" value="<?php echo $eDate; ?>" name="enddate" id="enddate">
	<input type="hidden" value="<?php
						$date = new DateTime(str_replace("/","-",$sDate));
						$newStart = $date->format('d-m-Y');
					
						$date1 = new DateTime(str_replace("/","-",$eDate));
						$newEnd = $date1->format('d-m-Y');
						
						$date1 = strtotime($newStart); //strtotime($sDate);
						$date2 = strtotime($newEnd); //strtotime($eDate);
						$datediff = $date2 - $date1;
						$days_between =  round($datediff / 86400);;
						echo $days_between;
						?>" name="noofdays">
						
	<!--div id="flash"></div>
	<div id="show"></div-->
	<p style="text-align:center">
	<input type="submit" class="btn btn-success submit_button1" formtarget="_blank" value="Checkout">
	</p>
	<p style="text-align:center">
	<button class="btn btn-danger" id="clear_cart">Empty the carts</button>
	</p>
</form>
<?php
}
?>
				</div>
            </div>
			
        </div>
		</div>
		</div>
    </div>
    <hr>
    <!-- footer starts-->



    <!--  end  Special offer -->
<!-- Owl CAROUSEL -->
  <script type="text/javascript" src="<?php echo base_url('assets/frontend/js/jquery-migrate-1.2.1.min.js'); ?>"></script>
    
    <!-- JQUERY SELECT -->
    <script type="text/javascript" src="<?php echo base_url('assets/frontend/js/select2.min.js'); ?>"></script>
    <!-- MEGA MENU -->
    <script type="text/javascript" src="<?php echo base_url('assets/frontend/js/bootstrap-dropdownhover.js'); ?>"></script>
    <!-- JQUERY EASING -->
    <script type="text/javascript" src="<?php echo base_url('assets/frontend/js/easing.js'); ?>"></script>
    <!-- JQUERY COUNTERUP -->
    <script type="text/javascript" src="<?php echo base_url('assets/frontend/js/counterup.js'); ?>"></script>
    <!-- JQUERY WAYPOINT -->
    <script type="text/javascript" src="<?php echo base_url('assets/frontend/js/waypoints.min.js'); ?>"></script>
    <!-- JQUERY REVEAL -->
    <script type="text/javascript" src="<?php echo base_url('assets/frontend/js/footer-reveal.min.js'); ?>"></script>
    <!-- Owl Carousel -->
    <script type="text/javascript" src="<?php echo base_url('assets/frontend/js/owl-carousel.js'); ?>"></script>
    <!-- MOBILE MENU JS -->
    <script type="text/javascript" src="<?php echo base_url('assets/frontend/js/jquery.meanmenu.js'); ?>"></script>
    <!--Style Switcher -->
    <script src="<?php echo base_url('assets/frontend/js/color-switcher.js'); ?>"></script>
    <!-- CORE JS -->
    <script type="text/javascript" src="<?php echo base_url('assets/frontend/js/custom.js'); ?>"></script>
    <!-- RANGE SLIDER JS -->
    <script type="text/javascript" src="<?php echo base_url('assets/frontend/js/nouislider.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/frontend/js/wNumb.js'); ?>"></script>
   

	
	

</body>

</html>
