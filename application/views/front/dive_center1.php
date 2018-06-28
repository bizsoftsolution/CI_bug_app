	<section class="ad-breadcrumb parallex">
            <div class="container page-banner">
            	<div class="row">
                   <div class="col-sm-6 col-md-6">
                      <h1>Dive Center</h1>
                   </div>
                   <div class="col-sm-6 col-md-6">
                      <ol class="breadcrumb pull-right">
                         <li><a href="<?php echo base_url(); ?>">Home</a></li>
                         <li class="active">Dive Center</li>
                      </ol>
                   </div>
                </div>
            </div>
         </section>
<section class="cat-tabs cat-tab-2 light-grey">
            <div class="container">
               <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                     <div class="Heading-title black">
                        <h1>Dive Center</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                     </div>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                     <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                           <div class="panel panel-primary">
                              <div class="panel-heading">
                                 <!-- Tabs -->
                                 <ul class="nav panel-tabs">
                                    <li>
                                       <a href="#tab1" data-toggle="tab">
                                          <!--i class="flaticon-dog"></i-->
										  <img src="<?php echo base_url(); ?>/upload/images/gi.png" style="width:50px; height:50px;">
                                          <div class="hidden-xs hidden-sm">General Info</div>
                                       </a>
                                    </li>
                                    <li class="active">
                                       <a href="#tab2" data-toggle="tab">
                                          <!--i class="flaticon-computer"></i-->
										  <img src="<?php echo base_url(); ?>/upload/images/fd.png" style="width:50px; height:50px;">
                                          <div class="hidden-xs hidden-sm">Fun Dive</div>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#tab3" data-toggle="tab">
                                          <!--i class="flaticon-technology-23"></i-->
										  <img src="<?php echo base_url(); ?>/upload/images/cs.png" style="width:50px; height:50px;">
                                          <div class="hidden-xs hidden-sm">Courses & Specialties</div>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#tab5" data-toggle="tab">
                                          <!--i class="flaticon-construction"></i-->
										  <img src="<?php echo base_url(); ?>/upload/images/po.png" style="width:50px; height:50px;">
                                          <div class="hidden-xs hidden-sm">Package Offers</div>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#tab6" data-toggle="tab">
                                          <!--i class="flaticon-transport-8"></i-->
										  <img src="<?php echo base_url(); ?>/upload/images/ri.png" style="width:50px; height:50px;">
                                          <div class="hidden-xs hidden-sm">Review</div>
                                       </a>
                                    </li>
									
									<li>
                                       <a href="#tab7" data-toggle="tab">
                                          <!--i class="flaticon-transport-8"></i-->
										  <img src="<?php echo base_url(); ?>/upload/images/an.png" style="width:50px; height:50px;">
                                          <div class="hidden-xs hidden-sm">Accommodation</div>
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <div class="panel-body">
                              <div class="tab-content">
                                 <div class="tab-pane animated fadeInUp" id="tab1">
                                    <div class="row">
                                       
                                    </div>
                                 </div>
                                 <div class="tab-pane active animated fadeInDown" id="tab2">
                                    <div class="row">
                                       
										<?php 
										foreach($divecenter as $product)
										{
										?>
										<div class="col-md-4 col-sm-6 col-xs-12">
                                          <div class="listing-post">
                                             <div class="col-md-4 col-sm-12 col-xs-12 nopadding">
                                                <div class="listing-image">
                                                   <img src="<?php echo base_url(); ?>upload/product/<?php echo $product->product_image; ?>" class="img-responsive" alt="image">
                                                </div>
                                             </div>
                                             <div class="col-md-8 col-sm-12 col-xs-12">
                                                <div class="listing-desc">
                                                   <h3 class="listing-desc-title">
                                                      <a href="#"><?php echo $product->product_name; ?> </a>
                                                   </h3>
                                                   <!--div class="listing-desc-category">
                                                      <ul>
                                                         <li><a href="#">laptop</a></li>
                                                         <li><a href="#">HP</a></li>
                                                      </ul>
                                                   </div-->
                                                   <span class="listing-price">Price: <span>$ <?php echo $product->price; ?></span></span>
												   <br>
												   <a href="#" class="btn btn-default btn-search-submit" style="float:right;margin:7% 0px;">Add Cart</a>
                                                   <!--span class="listing-desc-date">
                                                   <i class="fa fa-calendar"></i> August 08, 2016
                                                   </span-->
                                                </div>
                                             </div>
                                          </div>
										 </div>
										<?php
										}
										?>
                                       
                                       
                                    </div>
                                 </div>
                                 <div class="tab-pane  animated fadeInLeft" id="tab3">
                                    <div class="row">
                                       <?php 
										foreach($divecenter as $product)
										{
										?>
										<div class="col-md-4 col-sm-6 col-xs-12">
                                          <div class="listing-post">
                                             <div class="col-md-4 col-sm-12 col-xs-12 nopadding">
                                                <div class="listing-image">
                                                   <img src="<?php echo base_url(); ?>upload/product/<?php echo $product->product_image; ?>" class="img-responsive" alt="image">
                                                </div>
                                             </div>
                                             <div class="col-md-8 col-sm-12 col-xs-12">
                                                <div class="listing-desc">
                                                   <h3 class="listing-desc-title">
                                                      <a href="#"><?php echo $product->product_name; ?> </a>
                                                   </h3>
                                                   <!--div class="listing-desc-category">
                                                      <ul>
                                                         <li><a href="#">laptop</a></li>
                                                         <li><a href="#">HP</a></li>
                                                      </ul>
                                                   </div-->
                                                   <span class="listing-price">Price: <span>$ <?php echo $product->price; ?></span></span>
												   <br>
												   <a href="#" class="btn btn-default btn-search-submit" style="float:right;margin:7% 0px;">Add Cart</a>
                                                   <!--span class="listing-desc-date">
                                                   <i class="fa fa-calendar"></i> August 08, 2016
                                                   </span-->
                                                </div>
                                             </div>
                                          </div>
										 </div>
										<?php
										}
										?>
                                    </div>
                                 </div>
                                 <div class="tab-pane animated fadeInRight" id="tab5">
                                    <div class="row">
                                       <?php 
										foreach($divecenter as $product)
										{
										?>
										<div class="col-md-4 col-sm-6 col-xs-12">
                                          <div class="listing-post">
                                             <div class="col-md-4 col-sm-12 col-xs-12 nopadding">
                                                <div class="listing-image">
                                                   <img src="<?php echo base_url(); ?>upload/product/<?php echo $product->product_image; ?>" class="img-responsive" alt="image">
                                                </div>
                                             </div>
                                             <div class="col-md-8 col-sm-12 col-xs-12">
                                                <div class="listing-desc">
                                                   <h3 class="listing-desc-title">
                                                      <a href="#"><?php echo $product->product_name; ?> </a>
                                                   </h3>
                                                   <!--div class="listing-desc-category">
                                                      <ul>
                                                         <li><a href="#">laptop</a></li>
                                                         <li><a href="#">HP</a></li>
                                                      </ul>
                                                   </div-->
                                                   <span class="listing-price">Price: <span>$ <?php echo $product->price; ?></span></span>
												   <br>
												   <a href="#" class="btn btn-default btn-search-submit" style="float:right;margin:7% 0px;">Add Cart</a>
                                                   <!--span class="listing-desc-date">
                                                   <i class="fa fa-calendar"></i> August 08, 2016
                                                   </span-->
                                                </div>
                                             </div>
                                          </div>
										 </div>
										<?php
										}
										?>
                                    </div>
                                 </div>
                                 <div class="tab-pane animated fadeInUp" id="tab6">
                                    <div class="row">
                                       
                                    </div>
                                 </div>
								 <div class="tab-pane animated fadeInUp" id="tab7">
                                    <div class="row">
                                       
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>