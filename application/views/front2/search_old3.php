
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="ScriptsBundle">
    
    <!--link rel="icon" href="images/favicon.ico" type="image/x-icon" /-->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <!-- BOOTSTRAPE STYLESHEET CSS FILES -->
   <?php 
	$this->load->view('front/header');
	?>

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
	   width:100%;
	   height:auto;
   }
   #overlay
   {
	   position:absolute;
	   width: 100%;
    height: 100%;
   }
   
}
@media screen and (max-width: 1000px) and (min-width: 481px) {
   #dvMap
   {
	   width:100%;
	   height:auto;
   }
   #overlay
   {
	position:absolute;
	width: 100%;
    height: 100%;
   }
   
}

@media screen and (max-width: 1000px) and (min-width: 600px) {
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
}
</style>

<script src="<?php echo base_url(); ?>assets/autochange/jquery.min.js1"></script>
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
				<?php 
				foreach($search as $rowsearch)
				//{
				?>
                <div class="col-md-3">
                    <div style="padding:30px 0px;">
					<?php
					$DCsearch = $rowsearch->dccountry;
					$query=$this->db->get_where('tbl_country', array('country_id' =>$DCsearch));
					foreach($query->result_array() as $row1)
					{
					echo $row1['country_name']; 
					}
					
					?>
					>
					<?php 
					$DCsearch1 = $rowsearch->dcislands;
					$query=$this->db->get_where('tbl_island', array('island_id' =>$DCsearch1));
					foreach($query->result_array() as $row2)
					{
					echo $row2['island_name']; 
					}
					?>
					>
					<span style="border: 1px solid #000;padding: 10px 2px;"> 
					<a href="<?php echo base_url();?>Front/tellmemore/<?php echo $rowsearch->dcislands;?>" target="_blank">Tell Me more</a></span>
					
                    </div>
                </div>
				<?php 
				//}
				?>
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
						
                        <script>
                            $(document).ready(function() {
                                $("#filter").click(function() {
                                    $("#filter_div").toggle();
                                });
                            });
                        </script>
						<script>
						$(document).ready(function(){
						$('.ids').on('change',function(){ //on checkboxes check
						//sending checkbox value into serialize form
						var hi=$('.ids:checked').serialize();
						 if(hi){
						$.ajax({
						type: "POST",
						cache: false,
						url: "<?php echo base_url('Front/filter_language'); ?>",
						data:{brandss:hi},
						success: function(response){
						document.getElementById('getdata').style.display = "block";
						document.getElementById("getdata").innerHTML = response;
						$('#result').hide();
						}
						});
						}
						else
						{
						document.getElementById('getdata').style.display = "none";
						$('#result').show();
						}
						});
						});
						</script>
                        <div id="filter_div" style="display:none;">
                            <form class="form-inline">
                                <!-- Multiple Checkboxes (inline) -->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="checkboxes">Inline Checkboxes</label>
                                    <div class="col-md-8">
										<?php $fil_lan=$this->db->get('filter_language')->result_array(); foreach ($fil_lan as $fl) {?>
                                        <label class="checkbox-inline" for="checkboxes-0">
                                            <input type="checkbox" name="checkboxes[]" id="<?php echo $fl['id']; ?>" value="<?php echo $fl['name']; ?>" class="ids"> <?php echo ucwords(strtolower($fl['name'])); ?>
                                        </label>
										<?php 
										}
										?>
                                        
                                    </div>
                                </div>
                                <hr>
                                <!-- Multiple Checkboxes (inline) -->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="checkboxes">Infrastructure</label>
                                    <div class="col-md-8">
										<?php $fil_infra=$this->db->get('filter_infrastructure')->result_array(); foreach ($fil_infra as $fi) {?>
                                        <label class="checkbox-inline" for="checkboxes-0">
                                            <input type="checkbox" name="checkboxes" id="<?php echo $fi['id']; ?>" value="<?php echo $fi['name']; ?>"> <?php echo ucwords(strtolower($fi['name'])); ?>
                                        </label>
										<?php } ?>
                                        
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
						foreach($search as $rowsearch)
						{
						?>
                        <div class="col-md-6" >
                            <div class="row" >
								<div class="ajax_result">
									<div class="col-md-12">
										<div class="thumbnail" style="border:1px solid #000;">
											<a href="#" target="_blank">
											  <img src="<?php echo base_url();?>upload/DCprofile/<?php echo $rowsearch->dcimage;?>" alt="Nature" style="width:100%">
											  <div class="caption">
												<div class="row">
												<div class="col-md-6" style="font-size: 11px;padding-bottom: 10px;">
													<a target="_blank" href="<?php echo base_url(); ?>Front/divecenter/2">
													<?php echo $rowsearch->dcname; ?><br>
													From MYR 316(2 Dives/day)</a>
												</div>
												<div class="col-md-6" style="font-size: 11px;">
													<?php 
														$dcaffliation = $rowsearch->dcaffiliation; 
														$fetch_dcaffliation = explode(",",$dcaffliation);
														
														$dclanguage = $rowsearch->dclanguage; 
														$fetch_dclang = explode(",",$dclanguage);
													?>
													
													<?php 
													foreach($fetch_dcaffliation as $fvdc)
													{
													echo '<span style="margin: 0px;text-align: right;float: right;padding-bottom: 0px;">';
													echo $fvdc.' | ';
													echo '</span>';
													}
													
													foreach($fetch_dclang as $fvdclang)
													{
													echo '<input type="hidden" name="language" value="'.$fvdclang.'">';
													}
													?>
													<BR>
													<span style="">4.6 <i class="fa fa-star" aria-hidden="true" style="color:#ffe63b;"></i> 23 Reviews</span>
												</div>
												</div>
											  </div>
											</a>
										</div>
									</div>
								</div>
                            </div>
                        </div>

                        <?php 
						}// ?>
                       
                    </div>
					<div id="getdata" style="border:2px dotted #ededed;height:auto;"></div>
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
<div id="dvMap" style="height: 100%;width:420px;"></div>
<!--iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127521.05457601185!2d104.10029351132222!3d2.806480406382707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31c51b92f94cd239%3A0xb7b7e438fc01e28e!2sTioman+Island!5e0!3m2!1sen!2sin!4v1491202602826" width="400" height="650" frameborder="0" style="border:0" allowfullscreen></iframe-->
<!--iframe width="400" height="780" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=11.0168,76.9558&hl=es;z=14&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?q='+data.lat+','+data.lon+'&hl=es;z=14&amp;output=embed" style="color:#0000FF;text-align:left" target="_blank">See map bigger</a></small-->
					</div>
				</div>
				
                </div>


            </div>



        </section>
		
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