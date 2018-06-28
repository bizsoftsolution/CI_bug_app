
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
	<!--Date picker search bar start-->
<link href="<?php echo base_url('assets/new/css/datepicker.css');?>" rel="stylesheet">
<script type="text/javascript" src="<?php echo base_url('assets/new/js/bootstrap-datepicker.js');?>"></script>
	<!--Date picker search bar end-->
<style>
.wrapper {
    min-width:100%;
    max-width: 100%;
}
#overlay {
    position: fixed;
    top: 103;
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
   .nopstyle
   {
	   width:100%;
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



    // ]]>
</script>

</head>

<body>


      <header class="index4-header">
         <a class="navbar-brand visible-xs" id="navbar-logo-mobile" href=""><img src="<?php echo base_url(); ?>assets/images/logo-new-chrcle-small.jpg" alt="" class="img-responsive"></a>
         <a href="" class=" visible-xs " style=" font: 400 30px/0.8 'Cookie', Helvetica, sans-serif; padding:30px 15px;">Connecting Drivers Globally </a>
         <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container-fluid" style="padding-right: 37px!important;">
               <div class="navbar-header col-md-4">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" id="navbar-logo" href="<?php echo base_url(); ?>">
				  <img src="<?php echo base_url(); ?>assets/images/logo-new-chrcle-small.jpg" alt="" class="img-responsive"></a>
				  <div  style=" font: 400 30px/0.8 'Cookie', Helvetica, sans-serif; padding:30px 15px;margin-top: 13px;">Connecting Drivers Globally</div>
				  
               </div>
				<?php 
				foreach($search as $rowsearch)
				//{
				?>
                <div class="col-md-4">
                    <div style="padding:38px 0px;">
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
					<a href="<?php echo base_url();?>Front/tellmemore/<?php echo $rowsearch->dcislands."/".$rowsearch->dccountry;?>" target="_blank">Tell Me more</a></span>
					
                    </div>
                </div>
				<?php 
				//}
				?>
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
							<li><a href="<?php echo base_url('Customer/customerDashboard'); ?>"> My Message</a></li>
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
            </div>
        </nav>
    </header>
    <!-- mobile-menu-area-start -->
    
    <!-- mobile-menu-area-end -->
    <!-- mobile-menu-area-end -->
		 <!-- font libs -->
		<link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css" />
		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" />
		
		<!-- demo page styles -->
		<link href="<?php echo base_url(); ?>assets/jplist/css/jplist.demo-pages.min.css1" rel="stylesheet" type="text/css" />
		
		<!-- jQuery lib -->		
        <script src="http://code.jquery.com/jquery-1.11.1.min.js1"></script>
		
		<!-- jPList core js and css  -->
		<link href="<?php echo base_url(); ?>assets/jplist/css/jplist.core.min.css" rel="stylesheet" type="text/css" />		
		<script src="<?php echo base_url(); ?>assets/jplist/js/jplist.core.min.js"></script>		
	
		<!-- jPList toggle bundle -->
		<script src="<?php echo base_url(); ?>assets/jplist/js/jplist.filter-toggle-bundle.min.js"></script>
		<link href="<?php echo base_url(); ?>assets/jplist/css/jplist.filter-toggle-bundle.min.css" rel="stylesheet" type="text/css" />
		
		<!-- jplist pagination bundle -->
		<script src="<?php echo base_url(); ?>assets/jplist/js/jplist.pagination-bundle.min.js"></script>
		<link href="<?php echo base_url(); ?>assets/jplist/css/jplist.pagination-bundle.min.css" rel="stylesheet" type="text/css" />
		
		<!-- jPList start -->
		<script>
		$('document').ready(function(){
		
			$('#demo').jplist({				
				itemsBox: '.list' 
				,itemPath: '.list-item' 
				,panelPath: '.jplist-panel'	
			});
		});
		</script>
		
        <section class="benifts light-blue">
            <div class="container-fluid">
			
				<div id="demo" class="box jplist" style="margin: 120px 0 50px 0">
				
					<!-- ios button: show/hide panel -->
					<div class="jplist-ios-button">
						<i class="fa fa-sort"></i>
						Scubbi Actions
					</div>
					
					<!-- panel -->
					<div class="jplist-panel box panel-top">						
						
						<!-- checkbox filters -->
						<div 
						   class="jplist-group"
						   data-control-type="checkbox-group-filter"
						   data-control-action="filter"
						   data-control-name="themes">
						   
						   <input 
							  data-path=".architecture" 
							  id="architecture" 
							  type="checkbox" 									
						   /> 
						   
						   <label for="architecture">Architecture</label>
						   
						   <input 
							  data-path=".christmas" 										
							  id="christmas" 
							  type="checkbox" 
						   /> 
							  
						   <label for="christmas">Christmas</label>
						   
						   <input 
							  data-path=".nature" 
							  id="nature" 
							  type="checkbox"  
						   /> 
						   
						   <label for="nature">Nature</label>
						   
						   <input 
							  data-path=".lifestyle" 
							  id="lifestyle" 
							  type="checkbox" 
						   /> 
						   
						   <label for="lifestyle">Lifestyle</label>
						</div>

						<!-- checkbox filters -->
						<div 
						   class="jplist-group"
						   data-control-type="checkbox-group-filter"
						   data-control-action="filter"
						   data-control-name="colors">
						   
						   <input 
							  data-path=".red" 
							  id="red-color" 
							  type="checkbox" 									
						   /> 
						   
						   <label for="red-color">Red</label>
						   
						   <input 
							  data-path=".green" 										
							  id="green-color" 
							  type="checkbox" 
						   /> 
							  
						   <label for="green-color">Green</label>
						   
						   <input 
							  data-path=".blue" 
							  id="blue-color" 
							  type="checkbox"  
						   /> 
						   
						   <label for="blue-color">Blue</label>
						   
						   <input 
							  data-path=".brown" 
							  id="brown-color" 
							  type="checkbox" 
						   /> 
						   
						   <label for="brown-color">Brown</label>
						</div>
						
						<div 
						   class="jplist-label" 
						   data-type="Page {current} of {pages}" 
						   data-control-type="pagination-info" 
						   data-control-name="paging" 
						   data-control-action="paging">
						</div>	

						<div 
						   class="jplist-pagination" 
						   data-control-type="pagination" 
						   data-control-name="paging" 
						   data-control-action="paging"
						   data-items-per-page="5">
						</div>					
					</div>				 
					
					<!-- data -->   
					<div class="list box text-shadow">
						<!-- item 1 -->
						<div class="list-item box">	
						
							<span class="architecture">Architecture</span>, 
							<span class="brown">Brown</span>
							
							
						</div>
						
					</div>

					<div class="box jplist-no-results text-shadow align-center">
						<p>No results found</p>
					</div>
					
					<div class="jplist-ios-button">
						<i class="fa fa-sort"></i>
						jPList Actions
					</div>
					
					<div class="jplist-panel box panel-bottom">
						
						<div 
						   class="jplist-label" 
						   data-type="{start} - {end} of {all}"
						   data-control-type="pagination-info" 
						   data-control-name="paging" 
						   data-control-action="paging">
						</div>
						
						<div 
						   class="jplist-pagination" 
						   data-control-type="pagination" 
						   data-control-name="paging" 
						   data-control-action="paging"
						   data-items-per-page="5"
						   data-control-animate-to-top="true">
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