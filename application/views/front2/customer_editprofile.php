<!-- mobile-menu-area-end -->
         <section class="dashboard-menu dashboard-menu-2 light-blue" style="margin: 60px 0 0 0;">
            <div class="container" style="width:100%;padding:5px 0 0 3px">
               <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                     <div class="dashboard-menu-container" style="background-color: #66ffff;">
                        <ul>
                           <li>
                              <a href="<?php echo base_url('Front/customerDashboard'); ?>">
                                 <div class="menue-name"> Home </div>
                              </a>
                           </li>
                           <li class="active">
                              <a href="<?php echo base_url('Front/customerProfile'); ?>">
                                 <div class="menue-name">Profiles</div>
                              </a>
                           </li>
                           <li>
                              <a href="<?php echo base_url('Front/customerMydiveTrips'); ?>">
                                 <div class="menue-name">My Dive Trips</div>
                              </a>
                           </li>
                           <li>
                              <a href="<?php echo base_url('Front/customerDashboard'); ?>">
                                 <div class="menue-name">My Messages</div>
                              </a>
                           </li>
                           <li>
                              <a href="<?php echo base_url('Front/customerDivecredits'); ?>">
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
               	  <div class="col-md-3 col-sm-12 col-xs-12">
                     <div class="main-box profile-box-contact">
                     	<div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                            <div class="profile-box-header blue-bg">
                                <div class="col-md-12 text-center">
                                   <img src="<?php echo base_url(); ?>upload/1483346768735.png" alt="" class="profile-img img-responsive" style="width:100%;height:auto;"/>
                                   <!--h2>Jessica Daisy</h2>
                                   <ul class="contact-details">
                                      <li>
                                         <i class="fa fa-map-marker"></i> UK London
                                      </li>
                                      <li>
                                         <i class="fa fa-envelope"></i> jessica@admin.com
                                      </li>
                                      <li>
                                         <i class="fa fa-phone"></i> (123) 000-9876
                                      </li>
                                   </ul-->
                               </div>
                               <div class="col-md-12 col-sm-5 col-xs-12">
									<h4 align="center">Raymond</h4>
									<p align="center">Joined since 1st May 2017</p>
                               </div>
							   
                            </div>
                        </div>
						
                        <!--div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                            <div class="profile-box-footer">
                               <a href="#">
                               <span class="value">783</span>
                               <span class="label">Ads Posted</span>
                               </a>
                               <a href="#">
                               <span class="value">912</span>
                               <span class="label">Followers</span>
                               </a>
                               <a href="#">
                               <span class="value">83</span>
                               <span class="label">Messages</span>
                               </a>
                            </div>
                        </div-->
                     </div>
					 <div class="col-md-12 col-sm-5 col-xs-12">
							<h4 align="center" style="font-weight:bold;text-decoration:underline"><a href="">UPLOAD PHOTO</a></h4>
							<p align="center" style="font-weight:bold;text-decoration:underline"><a href="<?php echo base_url('Front/customerChangepassword'); ?>">CHANGE MY PASSWORD</a></p>
					   </div>
                  </div>
                  <div class="col-md-9 col-sm-12 col-xs-12">
                     <div style="margin:20px 0 0 0;">
						<div class="panel-group">
							<div class="panel panel-default">
							  <div class="panel-heading" style="font-size:19px;font-weight:bold;">Profile Details</div>
							  <div class="panel-body">
								<form class="form-horizontal">
									<div class="form-group">
										<label class="control-label col-sm-3" for="text">First Name:</label>
										<div class="col-sm-9">
										  <input type="text" class="form-control" id="text" value="Raymond">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="text">Last Name:</label>
										<div class="col-sm-9">
										  <input type="text" class="form-control" id="text" value="Wong">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="text">I AM:</label>
										<div class="col-sm-9">
											<label class="radio-inline"><input type="radio" name="optradio">Male</label>
											<label class="radio-inline"><input type="radio" name="optradio">Female</label>
										</div>
									</div>
									<div class="form-group">
									  <label class="control-label col-sm-3" for="sel1">Date of Birth:</label>
									  <div class="col-sm-9">
											<label class="checkbox-inline"><select class="form-control" >
												<option value="0">Month</option>
												<option value="Jan">Jan</option>
												<option value="Feb">Feb</option>
												<option value="Mar">Mar</option>
												<option value="Apr">Apr</option>
												<option value="May">May</option>
												<option value="Jun">Jun</option>
												<option value="Jul">Jul</option>
												<option value="Aug">Aug</option>
												<option value="Sep">Sep</option>
												<option value="Oct">Oct</option>
												<option value="Nov">Nov</option>
												<option value="Dec">Dec</option>
											</select></label>
											<label class="checkbox-inline">
											<select class="form-control" >
												<option value="0">Date</option>
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
												<option>6</option>
												<option>7</option>
												<option>8</option>
												<option>9</option>
												<option>10</option>
											</select>
											</label>
											<label class="checkbox-inline">
											<select class="form-control">
												<option value="0">Year</option>
												<option>1985</option>
												<option>1986</option>
												<option>1987</option>
												<option>1988</option>
												<option>1989</option>
												<option>1990</option>
												<option>1991</option>
												<option>1992</option>
												<option>1993</option>
												<option>1994</option>
												<option>1995</option>
												<option>1996</option>
											</select>
											</label>
									  </div>
									  
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="text">Email Address:</label>
										<div class="col-sm-9">
										  <input type="text" class="form-control" id="text" value="ray.wong@gmail.com">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="text">Contact Number:</label>
										<div class="col-sm-9">
										  <div class="field_wrapper">
											<div>
												<input type="text" name="field_name[]" value="" style="200px"/>
												<a href="javascript:void(0);" class="add_button" title="Add field">
												<img src="<?php echo base_url(); ?>/upload/images/plus.png" style="width:25px; height:25px;"/> Add New Number</a>
											</div>
										</div><br>
										</div>
									</div>
									<script type="text/javascript">
										
									$(document).ready(function(){
										var maxField = 2; //Input fields increment limitation
										var addButton = $('.add_button'); //Add button selector
										var wrapper = $('.field_wrapper'); //Input field wrapper
										var fieldHTML = '<div><input type="text" style="200px" name="field_name[]" value=""/><a href="javascript:void(0);" class="remove_button" title="Remove field"><img src="<?php echo base_url(); ?>/upload/images/minus.png" style="width:25px; height:25px;"/></a></div>'; //New input field html 
										var x = 1; //Initial field counter is 1
										$(addButton).click(function(){ //Once add button is clicked
											if(x < maxField){ //Check maximum number of input fields
												x++; //Increment field counter
												$(wrapper).append(fieldHTML); // Add field html
											}
										});
										$(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
											e.preventDefault();
											$(this).parent('div').remove(); //Remove field html
											x--; //Decrement field counter
										});
									});
									</script>
									<div class="form-group">
										<label class="control-label col-sm-3" for="text">Nationality :</label>
										<div class="col-sm-9">
										  <select class="form-control" >
												<option value="0">Nationality</option>
												<option value="Malaysia">Malaysia</option>
												
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="text">Diver Registration Body :</label>
										<div class="col-sm-9">
											<label class="radio-inline"><input type="radio" name="productunits" onClick="showTextBox1()">PADI</label>
											<label class="radio-inline"><input type="radio" name="productunits" onClick="showTextBox1()">SSI</label>
											<label class="checkbox-inline">
											<input type="radio" class="styled" name="productunits" onClick="showTextBox()"/>Others</label>
											<label class="checkbox-inline"><input type="text" name="productunits" class="textBox" hidden /></label>
										</div>
									</div>
									<script type="text/javascript">
										function showTextBox() {
											$(".textBox").show('fast');
										}
										function showTextBox1() {
											$(".textBox").hide('fast');
										}
									</script>
									
									<div class="form-group">
										<label class="control-label col-sm-3" for="text">Identification Passport:</label>
										<div class="col-sm-9">
											<label class="btn-file"><!--Browse-->
												 <input type="file" hidden>
											</label>
										</div>
									</div>
									
									<div class="form-group">
										<label class="control-label col-sm-3" for="text">Diver Registration Level :</label>
										<div class="col-sm-9">
											<label class="radio-inline"><input type="radio" name="productunits1">OWD</label>
											<label class="radio-inline"><input type="radio" name="productunits1">AOW</label>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="text">Diver Specialties Skill :</label>
										<div class="col-sm-9">
											<label class="radio-inline" style="font-size:14px;"><input type="radio" name="Specialtiesskill">PEAK PERFORMANCE BOUYANCY</label>
											<label class="radio-inline" style="font-size:14px;"><input type="radio" name="Specialtiesskill">DEEP DIVING</label>
											<label class="radio-inline" style="font-size:14px;"><input type="radio" name="Specialtiesskill">WRECK DIVING</label>
											<label class="radio-inline" style="font-size:14px;"><input type="radio" name="Specialtiesskill">DRIFT DIVING</label>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="text">Diver Card:</label>
										<div class="col-sm-9">
											<label class="btn-file"><!--Browse-->
												 <input type="file" hidden>
											</label>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="text">Preferred Language :</label>
										<div class="col-sm-9">
										  <select class="form-control" >
												<option value="0">Language</option>
												<option value="ENGLISH">ENGLISH</option>
												
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="text">Preferred Currency :</label>
										<div class="col-sm-9">
										  <select class="form-control" >
												<option value="0">Currency</option>
												<option value="MYR">MYR</option>
												
											</select>
										</div>
									</div>

									<br>
									<hr style="width:100%;">
									<label style="font-size:19px;font-weight:bold;color:#000;" class="col-md-12">Others</label>
									<div class="form-group">
										<label class="control-label col-sm-3" for="text">Residential Address:</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="text" value="10, Jalan testing 123"><br>
											<input type="text" class="form-control" id="text" value="taman testing menjalara"><br>
											<input type="text" class="form-control" id="text" value="56100 kepong, kuala lumpur">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="text">Other Languages:</label>
										<div class="col-sm-9">
										  <div class="field_wrapper1">
											<div>
												<input type="text" name="field_name1[]" value="" style="200px"/>
												<a href="javascript:void(0);" class="add_button1" title="Add field">
												<img src="<?php echo base_url(); ?>/upload/images/plus.png" style="width:25px; height:25px;"/> Add Languages</a>
											</div>
										</div><br>
										</div>
									</div>
									<script type="text/javascript">
										
									$(document).ready(function(){
										var maxField = 2; //Input fields increment limitation
										var addButton = $('.add_button1'); //Add button selector
										var wrapper = $('.field_wrapper1'); //Input field wrapper
										var fieldHTML = '<div><input type="text" style="200px" name="field_name1[]" value=""/><a href="javascript:void(0);" class="remove_button" title="Remove field"><img src="<?php echo base_url(); ?>/upload/images/minus.png" style="width:25px; height:25px;"/></a></div>'; //New input field html 
										var x = 1; //Initial field counter is 1
										$(addButton).click(function(){ //Once add button is clicked
											if(x < maxField){ //Check maximum number of input fields
												x++; //Increment field counter
												$(wrapper).append(fieldHTML); // Add field html
											}
										});
										$(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
											e.preventDefault();
											$(this).parent('div').remove(); //Remove field html
											x--; //Decrement field counter
										});
									});
									</script>
									
									<label style="font-size:19px;font-weight:bold;color:#000;margin:5px 0 10px 0;" class="col-md-12">Emergency Contact</label>
									<div class="form-group">
										<label class="control-label col-sm-3" for="text">Name:</label>
										<div class="col-sm-9">
										  <input type="text" class="form-control" id="text" value="Melanie Wong">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="text">Contact Number:</label>
										<div class="col-sm-9">
										  <input type="text" class="form-control" id="text" value="+60123456789">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="text">Email Address:</label>
										<div class="col-sm-9">
										  <input type="text" class="form-control" id="text" value="melanie.wong@gmail.com">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="text">Relationship:</label>
										<div class="col-sm-9">
										  <input type="text" class="form-control" id="text" value="Sister">
										</div>
									</div>
									<div class="form-group"> 
										<div class="col-sm-offset-3 col-sm-9">
										  <button type="submit" class="btn btn-danger">Save</button>
										  <button type="reset" class="btn btn-danger">Cancel</button>
										</div>
									</div>
								</form>
							 
							  </div>
							</div>
						</div>
                     </div>
                  </div>
                  
               </div>
            </div>
			<div class="container">&nbsp;</div>
			
			
			 
         </section>
		 <hr style="width:100%;border:2px solid #66ffff;">