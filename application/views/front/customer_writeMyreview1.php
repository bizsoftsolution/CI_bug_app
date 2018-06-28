<!-- mobile-menu-area-end -->
         <section class="dashboard-menu dashboard-menu-2 light-blue" style="margin: 60px 0 0 0;">
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
                           <li class="active">
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
                              <a href="<?php echo base_url('Customer/customerDashboard'); ?>">
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
			<div class="container" style="background:#66ffff;">
				<div class="row">
					<h5 style="font-weight:bold;margin:10px 15px;"><a href="">My Dive Trips > </a> <a href="">My Past Trips > </a> Write My Review</h5>
				</div>
			 </div>
            <div class="container">
               <div class="row" style="background: #FFF;">
               	  <div class="col-md-3">
					<br>
					<div style="border:1px solid gray;padding:5px;">
					<p>
					<img src="<?php echo base_url(); ?>upload/customerprofile/1483346768735.png" class="img-responsive img-circle"style="height:150px;width:150px;display:block;margin:0 auto;border:1px solid gray;" />
					</p>
					<p align="center"><b>Ocean Dive Discovery</b></p>
					</div>
				  </div><br>
               	  <div class="col-md-9" style="border:1px solid gray;">
						<br><br>
						<form class="form-horizontal" action="" method="POST">
							<input type="hidden" value="<?php 
							$uuu_id = $this->session->userdata('user_id'); 
							echo $uuu_id; ?>" id="uuu_id" name="uuu_id">
							
							<input type="hidden" value="67" id="divecenter_id" name="divecenter_id">
							
							<div class="form-group">
								<div class="row">
									 <label class="control-label col-sm-3" for="email"><b>Destination</b></label>
									 <label class="control-label col-sm-3" for="email">Tioman Island, Malaysia</label>
									 <label class="control-label col-sm-3" for="email"><b>Departure Date</b></label>
									 <label class="control-label col-sm-2" for="email">07 March 2016</label>
									 <label class="control-label col-sm-1" for="email">&nbsp;</label>
								</div>
								<div class="row">
									<label class="control-label col-sm-3" for="email"><b>Arrival Date</b></label>
									 <label class="control-label col-sm-3" for="email">03 March 2016</label>
									 <label class="control-label col-sm-3" for="email">&nbsp;</label>
									 <label class="control-label col-sm-3" for="email">&nbsp;</label>
								</div>
							</div>
							
							<div class="form-group">
							  <label class="control-label col-sm-3" for="email"><b>Select Your Rating</b></label>
							</div>
							
							<div class="form-group">
							  <label class="control-label col-sm-3" for="email">Price</label>
							  <div class="col-sm-9">
								<div class="ratting" style="color:#fec107;">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								</div>
							  </div>
							</div>
							<div class="form-group">
							  <label class="control-label col-sm-3" for="email">Services</label>
							  <div class="col-sm-9">
								<div class="ratting" style="color:#fec107;">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-half-o"></i>
								<i class="fa fa-star-o"></i>
								</div>
							  </div>
							</div>
							<div class="form-group">
							  <label class="control-label col-sm-3" for="email">Facilities</label>
							  <div class="col-sm-9">
								<div class="ratting" style="color:#fec107;">
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								</div>
							  </div>
							</div>
							<div class="form-group">
							  <label class="control-label col-sm-3" for="email">Equipment</label>
							  <div class="col-sm-9">
								<div class="ratting" style="color:#fec107;">
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								</div>
							  </div>
							</div>
							<div class="form-group">
							  <label class="control-label col-sm-3" for="email"><b>Review Title</b></label>
							  <div class="col-sm-9">
								<input type="text" name="rtitle" id="rtitle" class="form-control">
							  </div>
							</div>
							
							<div class="form-group">
							  <label class="control-label col-sm-3" for="email"><b>Review to Dive Center</b></label>
							  <div class="col-sm-9">
								<textarea class="form-control" name="content" id="content" rows="5" ></textarea>
							  </div>
							</div>
							
							<div class="form-group">        
							  <div class="col-sm-offset-3 col-sm-9 text-right">
								<input type="submit" class="btn btn-default submit_button" value="Post Review">
								<input type="submit" class="btn btn-default submit_button" value="Back">
							  </div>
							</div>
							<div class="form-group">        
							  <div class="col-sm-offset-3 col-sm-9">
								<div id="flash"></div>
								<div id="show"></div>
							  </div>
							</div>
							
						</form>
						<script type="text/javascript">
						$(function() {
						$(".submit_button").click(function() {
						var texttitle = $("#rtitle").val();
						var textcontent = $("#content").val();
						var textuserid = $("#uuu_id").val();
						var textdiveid = $("#divecenter_id").val();
						var dataString = 'title='+ texttitle + '&content='+ textcontent + '&uuuid=' + textuserid + '&diveid=' + textdiveid;
						if(dataString=='')
						{
						alert("Enter some text..");
						$("#content").focus();
						}
						else
						{
						$("#flash").show();
						$("#flash").fadeIn(400).html('<span class="load">Loading..</span>');
						$.ajax({
						type: "POST",
						url: "<?php echo base_url('Customer/insertReview'); ?>",
						data: dataString,
						cache: true,
						success: function(html){
							$("#show").after(html);
							document.getElementById('content').value='';
							document.getElementById('rtitle').value='';
							$("#flash").hide();
							$("#content").focus();
							alert("Thank you for the review, Kindly click on the OK to proceed back to listing page");
							window.location.href = "<?php echo base_url('Customer/customerViewmyreview/67'); ?>";
						}  
						});
						}
						return false;
						});
						});
						</script>
				  </div>
                  
               </div>
            </div>
			<div class="container">&nbsp;</div>
			 
         </section>
		 <hr style="width:100%;border:2px solid #66ffff;">