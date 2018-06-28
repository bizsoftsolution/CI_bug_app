	<section class="ad-breadcrumb parallex">
            <div class="container page-banner">
            	<div class="row">
                   <div class="col-sm-6 col-md-6">
                      <h1>Popular Dive Destination</h1>
                   </div>
                   <div class="col-sm-6 col-md-6">
                      <ol class="breadcrumb pull-right">
                         <li><a href="<?php echo base_url(); ?>">Home</a></li>
                         <li class="active">Popular Dive Destination</li>
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
					<div class="col-md-12 text-center">
					<?php echo $links; ?>
					</div>
                </div>
            </div>
        </div>
    </section>