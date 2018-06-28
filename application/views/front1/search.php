		<!--div id="map-canvas"></div-->
		<iframe src="https://www.google.com/maps/embed?pb=!1m17!1m8!1m3!1d7968.321707134734!2d101.4608721!3d3.0515705!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d3.0521485!2d101.462932!5e0!3m2!1sen!2s!4v1487758385871" width="100%" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
      <section class="flate-search">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12">
			<form class="form-inline" action="<?php base_url(); ?>search" method="POST" enctype="multipart/form-data">
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="form-group">
						<select class="select-category form-control" name="scountry" id="scountry">
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
						<?php //$cities['#'] = 'Please Select'; 
						$attr = array('id'=>'islands', 'class'=>'select-category form-control', 'name'=>'islands');
						?>
						<?php echo form_dropdown($attr, 'Select islands'); ?>
					</div>
				</div>
				<div class="col-md-2 col-sm-3 col-xs-12">
					<div class="form-group">
						<div class="input-daterange form-group" id="datepicker" >
							<input type="text" class="form-control" name="start" placeholder="Check In">
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
			</script>
               </div>
            </div>
         </div>
      </section>
	  
		  
		  
	  <br><br><br>
	  <div class="container">
		<div class="row">
			<section class="papular-post-slider paddingtop0">
         <div class="featured-slider">
			<?php 
			foreach($search as $row)
			{
			?>
            <div class="item">
               <div class="papular-reviews">
                  <a href="<?php echo base_url(); ?>front/divecenter/<?php echo $row->dive_center_id; ?>" target="_blank">
                     <div class="image">
                        <img alt="Tour Package" src="<?php echo base_url();?>upload/dive_center/<?php echo $row->center_image; ?>" class="img-responsive">
                        <div class="absolute-in-image">
                           <div class="duration"><span>$1500</span></div>
                        </div>
                     </div>
                     <div class="content">
                        <span class="cat"><i class="icon-map-pin"></i></span>
                        <h4> <?php echo $row->city; ?> <br><?php echo $row->center_name; ?></h4>
                        <!-- <div class="rating-wrapper">
                           <div class="raty-wrapper">
                              <div class="star-rating-read-only" title="good"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-full"></i> </div>
                              <span> / 12 review </span> 
                           </div>
                        </div> -->
                     </div>
                  </a>
               </div>
            </div>
			<?php 
			}
			?>
            
          </div>
      </section>
		</div>
	  </div>
	  
	  