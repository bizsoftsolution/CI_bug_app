
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
  
    <script src="<?php echo base_url('assets/frontend/daterange/js/datepicker.js');?>"></script>
	
	

<!-- ############################# path: assets/jQuery_Date_Range_Picker #######################################################################-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/jQuery_Date_Range_Picker/font-awesome.min.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/jQuery_Date_Range_Picker/daterangepicker.min.css" />
	<script src="<?php echo base_url(); ?>assets/jQuery_Date_Range_Picker/jquery.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/jQuery_Date_Range_Picker/moment.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/jQuery_Date_Range_Picker/jquery.daterangepicker.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/jQuery_Date_Range_Picker/demo.js"></script>
<!-- ############################# path: assets/jQuery_Date_Range_Picker #######################################################################-->

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
</style>

<script src="<?php echo base_url(); ?>assets/autochange/jquery.min.js"></script>
<script type="text/javascript">
    // <![CDATA[
    $(document).ready(function() {
        $('#scountry').change(function() { //any select change on the dropdown with id country trigger this code
            //	alert("dhngfdhg");
            $("#islands > option").remove(); //first of all clear select items
            var country_id = $('#scountry').val(); // here we are taking country id of the selected one.
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>front/get_island/" + country_id, //here we are calling our user controller and get_cities method with the country_id

                success: function(cities) //we're calling the response json array 'cities'
                    {
                        $.each(cities, function(id, city) //here we're doing a foeach loop round each city with id as the key and city as the value
                            {
                                var opt = $('<option />'); // here we're creating a new select option with for each city
                                opt.val(id);
                                opt.text(city);
                                $('#islands').append(opt); //here we will append these new select options to a dropdown with the id 'cities'
                            });
                    }

            });

        });
    });



    // ]]>
</script>

</head>

<body>


    <header class="index4-header">
        <a class="navbar-brand visible-xs" id="navbar-logo-mobile" href=""><img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="" class="img-responsive"></a>
        <a href="" class=" visible-xs " style=" font: 400 30px/0.8 'Cookie', Helvetica, sans-serif; padding:30px 15px;">Connecting Drivers Globally </a>
        <nav class="navbar navbar-default navbar-fixed-top" id="navbar" style="padding: 15px 0;">
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
                    <div style="padding:30px 0px;">Malaysia > Timon island > <span style="border: 1px solid #000;padding:10px;"> 
					<a href="<?php echo base_url();?>Front/tellmemore" target="_blank">Tell Me more</a></span>
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
            </div><div class="separator"></div>
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
    <!-- mobile-menu-area-end -->
    <!-- mobile-menu-area-end -->
    <div class="tab-content" style="margin: 55px 0 0 0;">
		
        <section class="benifts light-blue">
            <div class="container-fluid">
			
                <div class="col-md-8">
					<div class="row">
                    <div class="flate-search" style="background-color:#f4f7fa ;">
						<!---position: fixed;z-index: 9999;box-shadow: 2px 2px 2px 0 rgba(0, 0, 0, 0.1);margin: 8px 0 0 0;--->
                        <form class="form-inline" role="form" action="<?php base_url(); ?>search" method="POST" enctype="multipart/form-data">
						<div class="row">
						   <!--div class="col-md-2 col-sm-2 col-xs-12 nopadding">
							<style>
							.panel-primary > .panel-heading
							{
								color:#000;
							}
							</style>
						
								<div class="form-group">
									<select class="select-category form-control" name="scountry" id="scountry">
										<?php 
											$DCsearch = $rowsearch->dccountry;
											$query=$this->db->get_where('tbl_country', array('country_id' =>$DCsearch));
											foreach($query->result_array() as $row1)
											{
										?>
										
										<option value="<?php echo $row1['country_id'];?>"><?php echo $row1['country_name'];?></option>';
										<?php	
										}
										?>
										<option label="Select Option">Select Country</option>
										<?php $data=$this->db->get('tbl_country')->result_array(); foreach ($data as $a) {?>
										<option value="<?php echo $a['country_id'];?>">
											<?php echo $a['country_name'];?>
										</option>
										<?php } ?>
									</select>
								</div>
							</div>
							<div class="col-md-2 col-sm-2 col-xs-12 nopadding">
								<div class="form-group">
									<select class="select-category form-control" name="islands" id="islands">
										
										<?php 
											$DCsearch1 = $rowsearch->dcislands;
											$query=$this->db->get_where('tbl_island', array('island_id' =>$DCsearch1));
											foreach($query->result_array() as $row2)
											{
										?>
										<option value="<?php echo $row2['island_id'];?>"><?php echo $row2['island_name'];?></option>';
										<?php	
										}
										?>
										<option value="">Select Islands</option>
									</select>
									<?php //$cities[ '#']='Please Select' ; 
									//$attr=array( 'id'=>'islands', 'class'=>'select-category form-control', 'name'=>'islands'); ?>
									<?php //echo form_dropdown($attr, 'Select islands'); ?>
								</div>
							</div-->
								<!--#########jQuery_Date_Range_Picker##########-->
											<style type="text/css">
											#wrapper
											{
												width:800px;
												margin:0 auto;
												color:#333;
												font-family:Tahoma,Verdana,sans-serif;
												line-height:1.5;
												font-size:14px;
											}
											.demo { margin:30px 0;}
											
											</style>
											
											<div id="wrapper">
											<div class="demo">
											<span id="two-inputs">
											<div class="col-md-3 col-sm-2 col-xs-12 nopadding">
												<div class="form-group">											 
													 <input type="text" id="date-range200" class="form-control" style="height: 50px;" value="<?php echo $Sdate; ?>" name="checkin">						 
												</div>
											</div>
											<div class="col-md-3 col-sm-2 col-xs-12 nopadding">
											   <div class="form-group">
													<input type="text" id="date-range201" class="form-control" style="height: 50px;" value="<?php echo $Edate; ?>" name="checkout">
												</div>
											</div> 
											</span>
											</div>
											</div>
											
											<!--#########jQuery_Date_Range_Picker##########-->
                            <div class="col-md-4 col-sm-2 col-xs-12 nopadding">
                                <div class="form-group">


                                    <div class="form-group" id="">
                                        <input type="number" class="form-control col-md-5" name="no_of_persons" placeholder="Check Out" value="<?php echo $Noofpersons; ?>" style="width:70px;" id="num1"/>
                                        <label class="col-md-7" style="color:#000;font-size:16px;margin:10px 0 0 0">No of Persons</label>
                                    </div>
									
                                </div>
								
                            </div>
							 <div class="col-md-1 col-sm-2 col-xs-12 nopadding">
								<input type="submit" class="btn btn-default btn-search-submit fa fa-search" value="Search" name="search_result">
							 </div>

                          
							</div>
                        </form>
						
						
                        <br>
                        <button class="btn" id="filter" style="margin: 0 0 0 15px;">Filter</button>
						  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                        <script>
                            $(document).ready(function() {
                                $("#filter").click(function() {
                                    $("#filter_div").toggle();
                                });
                            });
                        </script>
                        <div id="filter_div" style="display:none;">
                            <form class="form-inline">
                                <!-- Multiple Checkboxes (inline) -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="checkboxes">Inline Checkboxes</label>
                                    <div class="col-md-8">
                                        <label class="checkbox-inline" for="checkboxes-0">
                                            <input type="checkbox" name="checkboxes" id="checkboxes-0" value="English"> English
                                        </label>
                                        <label class="checkbox-inline" for="checkboxes-1">
                                            <input type="checkbox" name="checkboxes" id="checkboxes-1" value="Japanese"> Japanese
                                        </label>
                                        <label class="checkbox-inline" for="checkboxes-2">
                                            <input type="checkbox" name="checkboxes" id="checkboxes-2" value="German"> German
                                        </label>
                                        <label class="checkbox-inline" for="checkboxes-3">
                                            <input type="checkbox" name="checkboxes" id="checkboxes-3" value="French"> French
                                        </label>
                                        <label class="checkbox-inline" for="checkboxes-4">
                                            <input type="checkbox" name="checkboxes" id="checkboxes-4" value="Malay"> Malay
                                        </label>
                                    </div>
                                </div>
                                <hr>
                                <!-- Multiple Checkboxes (inline) -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="checkboxes">Infrastructure</label>
                                    <div class="col-md-8">
                                        <label class="checkbox-inline" for="checkboxes-0">
                                            <input type="checkbox" name="checkboxes" id="checkboxes-0" value="Classroom"> Classroom
                                        </label>
                                        <label class="checkbox-inline" for="checkboxes-1">
                                            <input type="checkbox" name="checkboxes" id="checkboxes-1" value="Shower"> Shower
                                        </label>
                                        <label class="checkbox-inline" for="checkboxes-2">
                                            <input type="checkbox" name="checkboxes" id="checkboxes-2" value="Longe"> Longe
                                        </label>
                                        <label class="checkbox-inline" for="checkboxes-3">
                                            <input type="checkbox" name="checkboxes" id="checkboxes-3" value="Bar"> Bar
                                        </label>
                                        <label class="checkbox-inline" for="checkboxes-4">
                                            <input type="checkbox" name="checkboxes" id="checkboxes-4" value="Equipment Shop"> Equipment Shop
                                        </label>
                                        <label class="checkbox-inline" for="checkboxes-5">
                                            <input type="checkbox" name="checkboxes" id="checkboxes-5" value="Wc"> Wc
                                        </label>
                                        <label class="checkbox-inline" for="checkboxes-6">
                                            <input type="checkbox" name="checkboxes" id="checkboxes-6" value="WIFI"> WIFI
                                        </label>
                                        <label class="checkbox-inline" for="checkboxes-7">
                                            <input type="checkbox" name="checkboxes" id="checkboxes-7" value="Air-Conditioning"> Air-Conditioning
                                        </label>
                                        <label class="checkbox-inline" for="checkboxes-8">
                                            <input type="checkbox" name="checkboxes" id="checkboxes-8" value="Locker"> Locker
                                        </label>
                                    </div>
                                </div>

                            </form>
                        </div>


                        <br>
                        <div style="padding-bottom:20px;padding-top:10px;">
                            <div class="col-md-6">
                                Additional fees apply. Taxes may be added
                            </div>
                            <div class="col-md-6" style="text-align:right;">
							
                                <?php 
								echo $num_rows; 
								?> Dive Centers
                            </div>
                        </div>
                    </div>
					</div>
                    <br>
                    <div class="row wrapper" style="overflow-y: scroll;">
						<?php 
				$i=1;
				foreach($search as $rowsearch)
				{
					//echo "1";
				?>
                      

                        <div class="col-md-6">
                            <div class="row" style="border: 3px solid #000;margin:1px;">
                                <div id="carousel-<?php echo $i;?>" class="carousel slide" data-ride="carousel">
                                    <!-- slides bulletes -->
                                    <!--ol class="carousel-indicators">
                                        <li data-target="#carousel-<?php echo $i;?>" data-slide-to="0" class="active"></li>
                                        <!--li data-target="#carousel-<?php echo $i;?>" data-slide-to="1"></li>
                                        <li data-target="#carousel-<?php echo $i;?>" data-slide-to="2"></li->
                                    </ol-->

                                    <!-- wrapper for slides -->
                                     <div class="carousel-inner" role="listbox">
										<?php //$item_class = ($g== 1) ? 'item active' : 'item'; ?>
                                        <!-- slides 1 -->
                                        <div class="item active">
                                            <img src="<?php echo base_url();?>upload/DCprofile/<?php echo $rowsearch->dcimage;?>" alt="Chania">
                                        </div>

                                        <!-- slides 2 -->
                                        <!--div class="item">
                                            <img src="<?php echo base_url();?>assets/frontend/assert/images/1s.jpg" alt="Chania">
                                        </div>

                                        <!-- slides 3 -->
                                        <!--div class="item">
                                            <img src="<?php echo base_url();?>assets/frontend/assert/images/3s.jpg" alt="Flower">
                                        </div>

                                        <div class="item">
                                            <img src="<?php echo base_url();?>assets/frontend/assert/images/4s.jpg" alt="Flower">
                                        </div-->

                                    </div>

                                    <!-- left and right slides control arrrows -->
                                    <!--a class="left carousel-control" href="#carousel-<?php echo $i;?>" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-<?php echo $i;?>" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a-->
                                </div>

                                <div class="col-md-6" style="background-color:#f4f4f4;font-size: 11px;padding-top: 10px;padding-bottom: 10px;">
                                <a target="_blank" href="<?php echo base_url(); ?>Front/divecenter/<?php echo $rowsearch->id; ?>">
									<?php echo $rowsearch->dcname; ?><br>
						From MYR 316(2 Dives/day)</a>
                                </div>
                                <div class="col-md-6" style="font-size: 11px;">
									<?php 
										$dcaffliation = $rowsearch->dcaffiliation; 
										$fetch_dcaffliation = explode(",",$dcaffliation);
									?>
                                    
									<?php 
									foreach($fetch_dcaffliation as $fvdc)
									{
									echo '<span style="margin: 0px;text-align: right;float: right;padding-bottom: 0px;">';
									echo $fvdc.' | ';
									echo '</span>';
									}
									?>
                                    <BR>
                                    <span style="">4.6 <i class="fa fa-star" aria-hidden="true" style="color:#ffe63b;"></i> 23 Reviews</span>
                                </div>

                            </div>

                        </div>
						
						
						 
						
                        <?php 
						$i++;
						}// ?>
                       
                    </div>
					<div class="row">
						<div class="col-md-12">
							<?php echo $page; ?> - <?php echo $per_page; ?> of <?php echo $num_rows; ?> Dive Center
							<nav aria-label="...">
							   <?php echo $links; ?>
							</nav>
						</div>
                        
					</div>
						
                </div>
				<?php 
				//$g++;
				//} ?>
				
                <div class="col-md-4">
				<div id="overlay">
					<div class="wrapper">
						<?php 
				foreach($search as $get_val)
				{
				$get_id = $get_val->id;
				$data=$this->db->get_where('tbl_dcprofile', array('id' => $get_id));
				//$this->db->get('tbl_dcprofile')->result_array(); 
					foreach ($data->result_array() as $a) {
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
		var markers = <?php echo json_encode( $markers ); ?>;
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
<div id="dvMap" style="height: 100%;width:420px;"></div>
<!--iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127521.05457601185!2d104.10029351132222!3d2.806480406382707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31c51b92f94cd239%3A0xb7b7e438fc01e28e!2sTioman+Island!5e0!3m2!1sen!2sin!4v1491202602826" width="400" height="650" frameborder="0" style="border:0" allowfullscreen></iframe-->
<!--iframe width="400" height="780" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=11.0168,76.9558&hl=es;z=14&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?q='+data.lat+','+data.lon+'&hl=es;z=14&amp;output=embed" style="color:#0000FF;text-align:left" target="_blank">See map bigger</a></small-->
					</div>
				</div>
				
                </div>


            </div>



        </section>
		
       