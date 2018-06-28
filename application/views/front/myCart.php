<!-- mobile-menu-area-end -->
         <section class="dashboard-menu dashboard-menu-2 light-blue" style="margin: 60px 0 0 0;">
            <div class="container" style="width:100%;padding:5px 0 0 3px">
               <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                     <div class="dashboard-menu-container" style="background-color: #66ffff;">
                        <ul>
                           <li class="active">
                              <a href="<?php echo base_url('Customer/customerDashboard'); ?>">
                                 <div class="menue-name"> Home </div>
                              </a>
                           </li>
                           <li>
                              <a href="<?php echo base_url('Customer/customerProfile'); ?>">
                                 <div class="menue-name">Profiles</div>
                              </a>
                           </li>
                           <li>
                              <a href="<?php echo base_url('Customer/customerMydiveTrips'); ?>">
                                 <div class="menue-name">My Dive Trips</div>
                              </a>
                           </li>
                           <li>
                              <a href="<?php echo base_url('Customer/allMessages'); ?>">
                                 <div class="menue-name">My Messages</div>
                              </a>
                           </li>
                           <li>
                              <a href="<?php echo base_url('Customer/myCart'); ?>">
                                 <div class="menue-name">My Cart</div>
                              </a>
                           </li>
                           <li>
                              <a href="<?php echo base_url('Customer/customerDivecredits'); ?>">
                                 <div class="menue-name">Dive Credits</div>
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="dashboard light-blue">
            <div class="container">
               <div class="row" style="background: #FFF;">
			   <form action="<?php echo base_url(); ?>Customer/paymentInfo" method="POST">
					<?php 
								$this->load->library("cart");
							  $output = '<table class="table table-striped" id="cart_details">
							  <tr><td colspan="4"><p align="left" style="color:#000;font-size:18px;">Booking Summary</p></td></tr>
							  <tr><td colspan="2" style="background:#ccc;height:30px;"><p align="left" style="color:#000;height: 15px;">Your Dive Shopping Cart</p></td>
							  <td colspan="2" style="background:#ccc;"></td>
							  </tr>
							  ';
							  
							  $count = 0;
							  foreach($this->cart->contents() as $items)
							  {
							   $count++;
							   $output .= '
							   <tr style="font-size:12px;"> 
								<td >'.$items["name"].'
									
								</td>
								<td style="padding:2px;">MYR '.$items["price"].' X '.$items["qty"].'
									
								</td>
								<td align="right">'.$items["subtotal"].' MYR
									
								</td>
								
							   </tr>
							   ';
							  }
							  $output .= '
							   <tr>
								<td colspan="2" align="left" style="background:#ccc;">Total</td>
								<td colspan="2" align="right" style="background:#ccc;">MYR '.$this->cart->total().'</td>
							   </tr>
							   </table>
							  ';

							  if($count == 0)
							  {
							   $output = '<h3 align="center">Cart is Empty</h3>';
							  }
							  echo $output;
								?>
								<p style="text-align:center">
											<input type="submit" class="btn btn-success submit_button1" formtarget="_blank" value="Checkout">
										</p>
										<p style="text-align:center">
											<button class="btn btn-danger" id="clear_cart">Empty the carts</button>
										</p>
										</form>
							
  
                  
               </div>
            </div>
			

			 
         </section>
		 <hr style="width:100%;border:2px solid #66ffff;">