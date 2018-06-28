    <section class="papular-post-slider">
        <div class="container">
            <div class="row">
                <section class="cat-tabs" style="margin-top:72px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <!-- Tabs -->
                                                <ul class="nav panel-tabs">
                                                    <li class="active">
                                                        <a href="#tab1" data-toggle="tab">
                                                            <i class="fa fa-fort-awesome" data-toggle="tooltip" data-placement="left" title="Tooltip on left"></i>
                                                            <div class="hidden-xs hidden-sm">Dive Centers</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab2" data-toggle="tab">
                                                            <i class="fa fa-hand-o-right"></i>
                                                            <div class="hidden-xs hidden-sm">Guided Tour</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab3" data-toggle="tab">
                                                            <i class="fa fa-cog"></i>
                                                            <div class="hidden-xs hidden-sm">Liveabords</div>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <div class="tab-content">
                                                <div class="tab-pane active animated fadeInUp" id="tab1">
                                                    <section class="flate-search">
                                                        <div class="container-fluid">
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                            <form class="form-inline" action="<?php base_url(); ?>front/search" method="POST" enctype="multipart/form-data">
                                <div class="col-md-3 col-sm-3 col-xs-12">
								<div class="form-group">
									<select class="select-category form-control" name="scountry" id="scountry">
										<option label="Select Option">Select Country</option>
										<?php 
											$data=$this->db->get('tbl_country')->result_array();
											foreach ($data as $a) {?>
										   <option value="<?php echo $a['country_id'];?>"><?php echo $a['country_name'] ;?></option> 
										   <?php
											}
										  ?>
									</select>
								</div>
								</div>
                                <div class="col-md-3 col-sm-3 col-xs-12">
								<div class="form-group">
									<?php //$cities['#'] = 'Please Select'; 
									$attr = array('id'=>'islands', 'class'=>'select-category form-control', 'name'=>'islands');
									?>
									<?php echo form_dropdown($attr, 'Select islands'); ?>
								</div>
                                </div>
     							<div class="col-md-2 col-sm-3 col-xs-12">
     								<div class="form-group">
						                <div class="input-daterange form-group" id="datepicker" >
						                    <input type="text" class="form-control" name="start" placeholder="Check In" />
						                    
						                </div>
						            </div>
					            </div>
     							<div class="col-md-2 col-sm-3 col-xs-12">
     								<div class="form-group">
						                <div class="input-daterange form-group" id="datepicker" >
						                    <input type="text" class="form-control" name="end" placeholder="Check Out" />
						                    
						                </div>
						            </div>
					            </div>
									<div class="col-md-2 col-sm-2 col-xs-12 ">
													<div class="form-group form-action">
														<button type="submit" class="btn btn-default btn-search-submit">
															<span class="fa fa-search"></span> Search
														</button>
													</div>
												</div>
							</form>
		
										</div>
									</div>
								</div>
							</section>
						</div>
                                                <div class="tab-pane animated fadeInDown" id="tab2">
                                                    <section class="flate-search">
                                                        <div class="container-fluid">
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                    <form class="form-inline">
                                                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                                                            <div class="form-group">
                                    <select class="select-category form-control" name="stcountry" id="stcountry">
										<option label="Select Option"></option>
										<?php 
											$data=$this->db->get('tbl_country')->result_array();
											foreach ($data as $a) {?>
										   <option value="<?php echo $a['country_id'];?>"><?php echo $a['country_name'];?></option> 
										   <?php
											}
										  ?>
									</select>
                                                                            </div>
                                                                        </div>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="form-group">
									<?php
									$attr = array('id'=>'islands_tour', 'class'=>'select-category form-control', 'name'=>'islands_guided_tour');
									?>
									<?php echo form_dropdown($attr, 'Select islands'); ?>
								</div>
								</div>
								<div class="col-md-2 col-sm-3 col-xs-12">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="16-02-2017">
									</div>
								</div>
								<div class="col-md-2 col-sm-3 col-xs-12">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="16-02-2017">
									</div>
								</div>
								<div class="col-md-2 col-sm-2 col-xs-12 ">
									<div class="form-group form-action">
										<button type="button" class="btn btn-default btn-search-submit">
											<span class="fa fa-search"></span> Search
										</button>
									</div>
								</div>
							</form>
							
							<script src="<?php echo base_url(); ?>assets/autochange/jquery.min.js1"></script>
								 <script type="text/javascript">// <![CDATA[
								 $(document).ready(function(){
								 $('#scountry').change(function(){ //any select change on the dropdown with id country trigger this code
								 $("#islands > option").remove(); //first of all clear select items
								 var country_id = $('#scountry').val(); // here we are taking country id of the selected one.
								 $.ajax({
								 type: "POST",
								 url: "<?php echo base_url(); ?>front/get_island/"+country_id, //here we are calling our user controller and get_cities method with the country_id
								 
								 success: function(cities) //we're calling the response json array 'cities'
								 {
								 $.each(cities,function(id,city) //here we're doing a foeach loop round each city with id as the key and city as the value
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
								 
								 
								 $(document).ready(function(){
								 $('#stcountry').change(function(){ //any select change on the dropdown with id country trigger this code
								 $("#islands_tour > option").remove(); //first of all clear select items
								 var country_id = $('#stcountry').val(); // here we are taking country id of the selected one.
								 $.ajax({
								 type: "POST",
								 url: "<?php echo base_url(); ?>front/get_island/"+country_id, //here we are calling our user controller and get_cities method with the country_id
								 
								 success: function(cities) //we're calling the response json array 'cities'
								 {
								 $.each(cities,function(id,city) //here we're doing a foeach loop round each city with id as the key and city as the value
								 {
								 var opt = $('<option />'); // here we're creating a new select option with for each city
								 opt.val(id);
								 opt.text(city);
								 $('#islands_tour').append(opt); //here we will append these new select options to a dropdown with the id 'cities'
								 });
								 }
								 
								 });
								 
								 });
								 });
								 // ]]>
								</script>
										</div>
									</div>
								</div>
							</section>
						</div>
						<div class="tab-pane  animated fadeInLeft" id="tab3">

						</div>
					</div>
				</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="Heading-title black">
                        <h1>Special Offers</h1>
						<?php //echo $total_row; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="featured-slider">
		<?php 
		foreach($specialoffer as $offer)
		{
		?>
            <div class="item">
                <div class="papular-reviews">
                    <a href="#">
                        <div class="image">
                            <img alt="Tour Package" src="<?php echo base_url();?>upload/specialoffer/<?php echo $offer->offer_image; ?>" class="img-responsive">
                            <div class="absolute-in-image">
                                <div class="duration"><span> $ <?php echo $offer->price; ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <span class="cat"><i class="icon-map-pin"></i></span>
                            <h4> <?php echo $offer->city; ?>, 
							<?php 
							$cvall = $offer->country_id;
							$data1=$this->db->get_where('tbl_country', array('country_id'=>$cvall))->result();
							foreach($data1 as $cval){ echo $cval->country_name; }
							?>
							<br><?php echo $offer->center_name; ?></h4>
							<h5>From Rp.<?php echo $offer->start_km; ?> (<?php echo $offer->offer_period; ?>) </h5>
                            <div class="rating-wrapper">
                            </div>
                        </div>
                    </a>
                </div>
            </div>
		<?php 
		}
		?>
       </div>
	  <div class="row">
       
		
        <div class="col-md-7 col-sm-7 col-xs-7">
            <div class="load-more-btn" style="padding: 10px 30px;text-transform: uppercase;">
                <p align="right">
				 <a href="<?php echo base_url(); ?>Front/get_Allspecialoffer" class="btn-default" >View All Offers<i class="fa fa-angle-right"></i></a>
				<!--button class="btn-default"> View All Offers<i class="fa fa-angle-right"></i> </button--></p>
            </div>
        </div>
		 <div class="col-md-5">
            <p align="right"><?php echo $links; ?></p>
        </div>
		</div>
    </section>
   <section class="featured-ads light-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="Heading-title black">
                            <h1>Popular Diving Destinations</h1>
                        </div>
                    </div>
					<?php 
					foreach($populardivedestination as $res)
					{
						$pdd = $res->popular_dive_destination;
						if($pdd == 'Yes')
						{
					?>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="featured-image-box">
                            <div class="img-box"><img src="<?php echo base_url(); ?>upload/plan/<?php echo $res->image; ?>" class="img-responsive center-block" alt="">
                            </div>
                            <div class="content-area">
                                <div class="">
                                    <h4><a href="#"> 
									<?php 
									$cpdd = $res->country_id;
									$data_pdd=$this->db->get_where('tbl_country', array('country_id'=>$cpdd))->result();
									foreach($data_pdd as $cval_pdd){ echo $cval_pdd->country_name; }
									?>
									</a></h4>
                                    
                                </div>
<!--                                 <div class="feature-post-meta">
                                    <a href="#"> <i class="fa fa-clock-o"></i> August 12, 2016</a> <a href="#" class="mata-detail electronics"> camera </a>
                                </div>
 -->                                <div class="feature-post-meta-bottom"> 
									<span>$ <?php echo $res->per_day_amount; ?></span> <!--a href="#" class="apply pull-right"> View Detail</a--> 
									</div>
                            </div>
                        </div>
                    </div>
					<?php 
						}
					}
					?>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="load-more-btn" style="padding: 10px 30px;text-transform: uppercase;">
                            <a href="<?php echo base_url(); ?>Front/get_AllPDD" class="btn-default" >View All <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>