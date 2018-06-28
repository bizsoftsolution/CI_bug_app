	<br>

		<section class="featured-ads light-grey" style="margin:5% 0 0 0;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="Heading-title black">
                            <h1>Special Offer</h1>
                        </div>
                    </div>
					<div class="featured-slider1">
					<?php 
					foreach($offerpagination as $offer)
					{
					?>
						<div class="col-md-3">
							<div class="papular-reviews" style="margin: 5% 0;">
								<a href="#">
									<div class="image">
										<img alt="Tour Package" src="<?php echo base_url();?>upload/specialoffer/<?php echo $offer->offer_image; ?>" class="img-responsive">
										<div class="absolute-in-image">
											<div class="duration" style="color:#fff;">
												<h4 style="color:#fff;"> <?php echo $offer->city; ?>, 
											<?php 
											$cvall = $offer->country_id;
											$data1=$this->db->get_where('tbl_country', array('country_id'=>$cvall))->result();
											foreach($data1 as $cval){ echo $cval->country_name; }
											?>
											<br><?php echo $offer->center_name; ?></h4>
											<h5 style="font-weight: bold;">From Rp.<?php echo $offer->start_km; ?> (<?php echo $offer->offer_period; ?>) </h5>
											</div>
										</div>
									</div>
								   
								</a>
							</div>
						</div>
					<?php 
					}
					?>
				   </div>
					<div class="col-md-12 text-center">
					<?php echo $links; ?>
					</div>
                </div>
            </div>
        </div>
    </section>
	<div class="separator"></div>
	<br><br>