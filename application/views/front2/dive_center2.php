<script type="text/javascript">
   // To conform clear all data in cart.
   function clear_cart() {
       var result = confirm('Are you sure want to clear all bookings?');
   
       if (result) {
           window.location = "<?php echo base_url(); ?>Front/remove/all";
       } else {
           return false; // cancel button
       }
   }
</script>
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
            </div>
         </div>
         <div id="cart" >
               <?php
                  // All values of cart store in "$cart". 
                  if ($cart = $this->cart->contents()): ?>
            <div id = "heading">
               <h2 align="center">Products on Your Shopping Cart</h2>
            </div>
            <div id="text"> 
               <?php  $cart_check = $this->cart->contents();
                  // If cart is empty, this will show below message.
                   if(empty($cart_check)) {
                   echo 'To add products to your shopping cart click on "Add to Cart" Button'; 
                   }  ?> 
            </div>
            <table class="table table-responsive" >

               <thead>
                  <tr id= "main_heading">
                     <th>Serial</th>
                     <th>Name</th>
                     <th>Price</th>
                     <th>Qty</th>
                     <th>Amount</th>
                     <th>Cancel Product</th>
                  </tr>
               </thead>
               <?php
                  // Create form and send all values in "shopping/update_cart" function.
                  echo form_open('Front/update_cart');
                  $grand_total = 0;
                  $i = 1;
                  
                  foreach ($cart as $item):
                     //   echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                     //  Will produce the following output.
                     // <input type="hidden" name="cart[1][id]" value="1" />
                     
                     echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                     echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
                     echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
                     echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
                     echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);
                     ?>
               <tr>
                  <td>
                     <?php echo $i++; ?>
                  </td>
                  <td>
                     <?php echo $item['name']; ?>
                  </td>
                  <td>
                     $ <?php echo number_format($item['price'], 2); ?>
                  </td>
                  <td>
                     <?php echo form_input('cart[' . $item['id'] . '][qty]', $item['qty'], 'maxlength="3" size="1" style="text-align: right" class="form-control"  '); ?>
                  </td>
                  <?php $grand_total = $grand_total + $item['subtotal']; ?>
                  <td>
                      <?php echo number_format($item['subtotal'], 2) ?>
                  </td>
                  <td>
                     <a href="<?php echo base_url();?>Front/remove/<?php echo $item['rowid'];?>" class="btn btn-danger "><i class="fa fa-remove"></i></a>
                     <?php 
                        // cancle image.
                        //echo anchor('shopping/remove/' . $item['rowid'], $path); ?>
                  </td>
                  <?php endforeach; ?>
               </tr>
               <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>Order Total</td>
                  <td><b> <?php 
                     //Grand Total.
                     echo number_format($grand_total, 2); ?></b></td>
                  <?php // "clear cart" button call javascript confirmation message ?>
                  <td></td>
                  
               </tr>
               <div align="">
                     <button type="button" class ='btn btn-danger' value="Clear Cart" onclick="clear_cart()"><i class="fa fa-refresh"></i>&nbsp;&nbsp;&nbsp;Clear Cart</button>
                     <?php //submit button. ?>
                     <button type="submit" class ='btn btn-primary' value="Update Cart"><i class="fa fa-pencil"></i>&nbsp;&nbsp;&nbsp;Update Cart</button>
                     <?php echo form_close(); ?>
                     <!-- "Place order button" on click send "billing" controller  -->
                   
                  </div>
               <?php endif; ?>
            </table>
            <span class="col-md-4 col-md-offset-5">
              <button type="button" class ='btn btn-default' value="Place Order" onclick="window.location = 'checkout'">
			  <i class="fa fa-cart-arrow-down"></i>Place Order</button>
            </span>
            <br>
         </div>
         <br><br>
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
                           <!--div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12 nopadding">
									<div class="col-md-12 col-sm-12 col-xs-12">
										<div class="Heading-title black">
											<h1>General Info</h1>
										</div>
									</div>
								</div>
							</div-->
								<div class="row">
									<?php 
										foreach($generalinfo as $row)
										{
										?>
										<div class="col-md-12" style="text-align:justify;">
											<?php echo $row->description; ?>
										</div>
										<?php 
										}
										?>
								</div>
                           
                        </div>
                        <div class="tab-pane active animated fadeInDown" id="tab2">
							<div class="row">
									<?php 
										foreach($fundive as $row)
										{
										?>
										<div class="col-md-12" style="text-align:justify;">
											<?php echo $row->description; ?>
										</div>
										<?php 
										}
										?>
								</div>
							<div class="row">
								<p style="margin:5% 0;">&nbsp;</p>
							</div>
                           <div class="row">
                              <?php 
                                 foreach($divecenter as $product)
                                 {
                                 ?>
                              <form action="<?php echo base_url();?>Front/addCart" method="post">
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
                                             <input type="hidden" name="id" value="<?php echo $product->product_id;?>">
                                             <input type="hidden" name="name" value="<?php echo $product->product_name;?>">
                                             <input type="hidden" name="price" value="<?php echo $product->price;?>">
                                             <button href="#" class="btn btn-default btn-search-submit cd-add-to-cart" style="float:right;margin:7% 0px;" data-price="<?php echo $product->price; ?>">Add Cart</button>
                                             <!--span class="listing-desc-date">
                                                <i class="fa fa-calendar"></i> August 08, 2016
                                                </span-->
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </form>
                              <?php
                                 }
                                 ?>
                           </div>
                        </div>
                        <div class="tab-pane  animated fadeInLeft" id="tab3">
							<div class="row">
								<?php 
									foreach($courses_specialties as $row)
									{
									?>
									<div class="col-md-12" style="text-align:justify;">
										<?php echo $row->description; ?>
									</div>
									<?php 
									}
									?>
								</div>
								<div class="row">
								<p style="margin:5% 0;">&nbsp;</p>
							</div>
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
									foreach($packages as $row)
									{
									?>
									<div class="col-md-12" style="text-align:justify;">
										<?php echo $row->description; ?>
									</div>
									<?php 
									}
									?>
								</div>
								<div class="row">
								<p style="margin:5% 0;">&nbsp;</p>
							</div>
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