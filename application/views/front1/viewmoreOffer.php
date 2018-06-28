	<section class="ad-breadcrumb parallex">
            <div class="container page-banner">
            	<div class="row">
                   <div class="col-sm-6 col-md-6">
                      <h1>Special Offer</h1>
                   </div>
                   <div class="col-sm-6 col-md-6">
                      <ol class="breadcrumb pull-right">
                         <li><a href="<?php echo base_url(); ?>">Home</a></li>
                         <li class="active">Special Offer</li>
                      </ol>
                   </div>
                </div>
            </div>
         </section>
		<section class="featured-ads light-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="Heading-title black">
                            <h1>Special Offer</h1>
                        </div>
                    </div>
					<div class="featured-slider">
					<?php 
					foreach($offerpagination as $offer)
					{
					?>
						<div class="item">
							<div class="papular-reviews">
								<div class="col-md-12">
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
										<h4 style="font-size:18px;"> <?php echo $offer->city; ?>, 
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