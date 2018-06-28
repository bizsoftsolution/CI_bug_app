		
		<link href='<?php echo base_url(); ?>assets/calendar/css/fullcalendar.css' rel='stylesheet' />
		<link href='<?php echo base_url(); ?>assets/calendar/css/fullcalendar.print.css' rel='stylesheet' media='print' />
		<script src='<?php echo base_url(); ?>assets/calendar/js/moment.min.js'></script>
		<script src='<?php echo base_url(); ?>assets/calendar/js/jquery.min.js1'></script>
		<script src='<?php echo base_url(); ?>assets/calendar/js/jquery-ui.min.js'></script>
		<script src='<?php echo base_url(); ?>assets/calendar/js/fullcalendar.min.js'></script>
		<script>

	$(document).ready(function() {

		var zone = "05:30";  //Change this to your timezone

	$.ajax({
		url: '<?php echo base_url('Customer/paymentInfo_details'); ?>',
        type: 'POST', // Send post data
        data: 'type=fetch',
        async: false,
        success: function(s){
        	json_events = s;
        }
	});


		$('#calendar').fullCalendar({
			events: JSON.parse(json_events),
			//events: [{"id":"14","title":"New Event","start":"2015-01-24T16:00:00+04:00","allDay":false}],
			utc: true,
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			editable: true,
			droppable: true, 
			slotDuration: '00:30:00',

		});

	function getFreshEvents(){
		$.ajax({
			url: '<?php echo base_url('Customer/paymentInfo_details'); ?>',
	        type: 'POST', // Send post data
	        data: 'type=fetch',
	        async: false,
	        success: function(s){
	        	freshevents = s;
	        }
		});
		$('#calendar').fullCalendar('addEventSource', JSON.parse(freshevents));
	}
	});

</script>

		<!--section class="dashboard-menu dashboard-menu-2 light-blue" style="margin: 60px 0 0 0;">
            <div class="container" style="width:100%;padding:5px 0 0 3px">
               <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                     <div class="dashboard-menu-container" style="background-color: #66ffff;">
                        <ul>
                           <li>
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
                              <a href="<?php echo base_url('Customer/customerDashboard'); ?>">
                                 <div class="menue-name">My Messages</div>
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
         </section-->
			<?php 
				if($this->session->userdata('user_id')!='')
				{
			?>
			<section class="dashboard light-blue" style="margin: 120px 0 0 0;">
			<form class="form-horizontal" action="<?php echo base_url(); ?>Customer/bookingInfo" method="POST" enctype="multipart/form-data">
            <div class="container-fluid">
               <div class="row" style="background:red;">
					<div class="col-md-12" style="padding:5px 0px;">
						<div class="col-md-4"><p style="color:#fff;font-weight:bold;margin:0 0 0 10px;">Your Diving Trip Travel Date</p></div>
						<div class="col-md-4"><p style="color:#fff;font-weight:bold;"><?php echo $sd; ?> - <?php echo $ed; ?></p></div>
						<div class="col-md-4">&nbsp;</div>
					</div>
			   </div>
			</div><br>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-8">
						<div class="panel-group">
							<div class="panel panel-default">
							  <div class="panel-heading" style="font-size:17px;font-weight:bold;">
							  Select Leisure Dive Date (Boat night dive 2 trips)</div>
								
							  <div class="panel-body">
								<div class="row">
									<style>
										 table {
										  background: #fff;
										  border-collapse: collapse;
										  color: #222;
										  font-family: 'PT Sans', sans-serif;
										  font-size: 13px;
										  width: 100%;
										}
										td {
										  border: 1px solid #ccc;
										  
										  line-height: 22px;
										 
										}
										tr:first-child td {
										  color: #222;
										  
										}
									</style>
									
									<!--p>
										<div id='calendar'></div>
										<div style='clear:both'></div>
									</p-->
									<div class="table-responsive">
									<table class="table-bordered">
										<tr>
											<td style="color:red;padding:10px;">Start Date : </td>
											<td><?php echo $sd; ?>
											<input type="hidden" value="<?php echo $sd; ?>" name="checkindate" >
											</td>
										</tr>
										<tr>
											<td style="color:red;padding:10px;">End Date : </td>
											<td><?php echo $ed; ?>
											<input type="hidden" value="<?php echo $ed; ?>" name="checkoutdate" >
											</td>
										</tr>
										<tr>
											<td style="color:red;padding:10px;">No of Days : </td>
											<td>
											<?php echo $nod; ?>
											<input type="hidden" value="<?php echo $diveid; ?>" name="diveid" >
											</td>
										</tr>
										<tr>
											<td style="color:red;padding:10px;">No of Person : </td>
											<td><?php echo $np; ?>
											<input type="hidden" value="<?php echo $np; ?>" name="noofperson" >
											</td>
										</tr>
									</table>
									</div>
								</div>
							  </div>
							</div>
						</div>
						<div class="panel-group">
							<div class="panel panel-default">
							  <div class="panel-heading" style="font-size:17px;font-weight:bold;">
							 Passenger Details</div>
								
								<div class="panel-body">
									<div class="row">
									
									<?php 
										$noofpersons = $np;
										for($i=1; $i<=$noofpersons; $i++)
										{
									?>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
										<label class="control-label col-sm-5" for="text">Title:</label>
										<div class="col-sm-7">
										 <select class="form-control" name="title[]">
											<option value="">Select Title</option>
											<option value="Mr">Mr.</option>
											<option value="Mrs">Mrs.</option>
										  </select>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-5" for="text">First Name:</label>
										<div class="col-sm-7">
										  <input type="text" class="form-control" id="text" name="firstname[]" value="">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-5" for="text">Surname:</label>
										<div class="col-sm-7">
										  <input type="text" class="form-control" id="text" name="lastname[]" value="">
										</div>
									</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-sm-5" for="text">Email Address:</label>
												<div class="col-sm-7">
												  <input type="email" class="form-control" id="text" name="email[]" value="">
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-sm-5" for="text">Mobile Number:</label>
												<div class="col-sm-7">
												  <select class="form-control" name="countrycode[]">
													<option value="(+60)">Malaysia (+60)</option>
												  </select>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-sm-5" for="text">&nbsp;</label>
												<div class="col-sm-7">
												  <input type="text" class="form-control" id="text" name="mobilenumber[]" value="">
												</div>
											</div>
										</div>
									</div>
									<hr>
									<?php 
										}
									?>
								</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="row" style="background: red;padding:10px 0px;">
							
							<div class="col-md-12"><p style="color:#fff;">Enter Promo Code</p></div>
							<div class="col-md-8"><input type="text" class="form-control" id="text"></div>
							<div class="col-md-4 text-right"><input type="submit" class="btn btn-danger" value="Verify" style="background: #ddd;width:100%;color:#000;"></div>
							
						</div><br>
						<div class="row">
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
							
						</div>
						<div class="row" style="background: red;">
							<div class="col-md-6"><p style="color:#fff;text-align:left;">Promo Code Discount</p></div>
							<div class="col-md-6"><p style="color:#fff;text-align:right;">MYR 0.00 
							<?php 
							//$norows = count($this->cart->contents());
							//echo $norows;
							?>
							</p></div>
						</div>
						<div class="row">&nbsp;</div>
						<div class="row" style="background: red;">
							<div class="col-md-6"><p style="color:#fff;text-align:left;">Total(After Promo) </p></div>
							<div class="col-md-6"><p style="color:#fff;text-align:right;">MYR <?php echo $this->cart->total(); ?></p>
							
							<!--Grand Total under define-->
							
							<input type="hidden" value="<?php echo $this->cart->total(); ?>" name="grandtotal" />
							<input type="hidden" value="<?php echo count($this->cart->contents()); ?>" name="totalcartitems" />
							</div>
						</div>
					</div>
			   </div>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="panel-group">
							<div class="panel panel-default">
							  <div class="panel-heading" style="font-size:17px;font-weight:bold;">
							  Cancellation Policy</div>
								
							  <div class="panel-body">
								<div class="row">
									<p style="padding:0% 1%;">The dive center will clearly set out their cancellation policy in the dive center terms.</p>
									<p style="padding:0% 1%;">The dive center will not charge a cancellation fee provided that the reservation is cancel during no charge cancellation period as set out in the dive center terms Scubbi.com as an intermediate platform play as assistance role between you and dive center </p>
									<p style="padding:0% 1%;">1. If you cancel 1 month before the trip, only bank charges fee is require to pay</p>
									<p style="padding:0% 1%;">2. If you cancel 7 days before the trip, a cancellation fee of MYR30 is charge.</p>
									<p style="padding:0% 1%;">3. If you cancel 3 days before the trip, a cancellation fee of MYR40 is charge.</p>
									<p style="padding:0% 1%;">4. If you cancel 1 days before the trip, a cancellation fee of MYR75 is charge.</p>
									<p style="padding:0% 1%;">5. Payment are not allow to return if customer no show or cancel.</p>
								</div>
							  </div>
							  <div class="panel-heading" style="font-size:17px;font-weight:bold;">
								<div class="row">
									<div class="col-md-6">
											<input type="checkbox"> I agree to the Cancellation Policy mentioned above and <a href="">Terms of Service.</a>
											<br>
											<input type="checkbox"> I agree to receive SCUBBI's special offers and newsletter.
									
									</div>
									<div class="col-md-6">
										<p align="right" style="margin:5px 0 0 0;">
											<input type="submit" class="btn btn-danger" name="submit_booking_data" value="PROCEED">
										</p>
									</div>
								</div>
								
							  </div>
							</div>
						</div>
					</div>
				</div>
			</div>
			</form>
		</section>	
		<?php
				}
			else
			{
				redirect('Customer');
			}
		?>
		