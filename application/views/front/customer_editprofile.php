<?php 
			if($this->session->userdata('user_id') != '')
			{
		?>		
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
                           <li class="active">
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
			   
			   <?php 
				foreach($edit_customerprofile as $row)
				{
			   ?>
			  
               	  <div class="col-md-3 col-sm-12 col-xs-12">
					
                     <div class="main-box profile-box-contact">
                     	<div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                            <div class="profile-box-header blue-bg">
	<form class="form-horizontal" name="add" method="POST" action="<?php echo  base_url();?>Customer/Updatephoto/<?php echo $row->id; ?>" 
			   enctype="multipart/form-data">
                                <div class="col-md-12 text-center">
									<div id="dvPreview">
                                   <img src="<?php echo base_url(); ?>upload/customerprofile/<?php echo $row->photo; ?>" alt="" class="profile-img img-responsive" style="width:100%;height:auto;"/>
								   </div>
								   <input id="fileupload" type="file" multiple="multiple" name="cProfile" />
								  
									<script language="javascript" type="text/javascript">
									$(function () {
										$("#fileupload").change(function () {
											if (typeof (FileReader) != "undefined") {
												var dvPreview = $("#dvPreview");
												dvPreview.html("");
												var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
												$($(this)[0].files).each(function () {
													var file = $(this);
													if (regex.test(file[0].name.toLowerCase())) {
														var reader = new FileReader();
														reader.onload = function (e) {
															var img = $("<img />");
															img.attr("style", "height:100px;width: 100px");
															img.attr("src", e.target.result);
															dvPreview.append(img);
														}
														reader.readAsDataURL(file[0]);
													} else {
														alert(file[0].name + " is not a valid image file.");
														dvPreview.html("");
														return false;
													}
												});
											} else {
												alert("This browser does not support HTML5 FileReader.");
											}
										});
									});
									</script>
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
									<h4 align="center"><?php echo $row->firstname;?></h4>
									<p align="center">Joined since 1st May 2017</p>
                               </div>
							   <h4 align="center">
									<input type="submit" name="update_photo" value="UPLOAD PHOTO" style="border:none;background:none;text-decoration:underline;font-weight:bold;">
							   </h4>
							   </form>
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
							
							<p align="center" style="font-weight:bold;text-decoration:underline"><a href="<?php echo base_url('Customer/customerChangepassword'); ?>/<?php echo $row->user_id;?>">CHANGE MY PASSWORD</a></p>
					   </div>
					  
                  </div>
                  <div class="col-md-9 col-sm-12 col-xs-12">
                     <div style="margin:20px 0 0 0;">
						<div class="panel-group">
							<div class="panel panel-default">
							  <div class="panel-heading" style="font-size:19px;font-weight:bold;">Profile Details</div>
							  <div class="panel-body">
									 <form class="form-horizontal" name="add" method="POST" action="<?php echo  base_url();?>Customer/Updatecustomerprofile/<?php echo $row->id; ?>" 
			   enctype="multipart/form-data">
									<div class="form-group">
										<label class="control-label col-sm-3" for="text">First Name:</label>
										<div class="col-sm-9">
										  <input type="text" class="form-control" id="text" name="firstname" value="<?php echo $row->firstname; ?>">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="text">Last Name:</label>
										<div class="col-sm-9">
										  <input type="text" class="form-control" id="text" name="lastname" value="<?php echo $row->lastname;?>">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="text">I AM:</label>
										<div class="col-sm-9">
											<?php 
											$chkbox1 = $row->gender; 
											?>
											<label class="radio-inline"><input type="radio" name="gender" value="Male"  <?php echo ($chkbox1=='Male')?'checked':'' ?>>Male</label>
											<label class="radio-inline"><input type="radio" name="gender" value="Female" <?php echo ($chkbox1=='Female')?'checked':'' ?>>Female</label>
										</div>
									</div>
									<div class="form-group">
									  <label class="control-label col-sm-3" for="sel1">Date of Birth:</label>
									  <div class="col-sm-9">
											<?php 
												$start_dd = $row->dob;
												$start_dd_range =date("mm/dd/yyyy", strtotime($start_dd));
											?>
											<input type="date" name="dob" value="<?php echo $start_dd_range; ?>">
											<!--label class="checkbox-inline"><select class="form-control" >
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
											</label-->
									  </div>
									  
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="text">Email Address:</label>
										<div class="col-sm-9">
										  <input type="email" class="form-control" id="text" name="email" value="<?php echo $row->email;?>">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="text">Contact Number:</label>
										<div class="col-sm-9">
										  <div class="field_wrapper">
											<div>
												<input type="text" name="field_name[]" value="<?php echo $row->contactno;?>" style="200px"/>
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
										  <select class="form-control" name="nationality">
												<option value="<?php echo $row->nationality; ?>"><?php echo $row->nationality; ?></option>
												<option value="0">---Select Nationality---</option>
												<option value="Malaysia">Malaysia</option>
												
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="text">Diver Registration Body :</label>
										<div class="col-sm-9">
											<?php 
												$chkbox2 = $row->diver_registration_body;
												if($chkbox2 =='PADI' || $chkbox2 =='SSI')
												{
											?>
											<label class="checkbox-inline">
											<input type="radio" class="styled" name="diver_registration_body" value="PADI"
											<?php echo ($chkbox2=='PADI')?'checked':'' ?>>PADI</label>
											<label class="checkbox-inline">
											<input type="radio" class="styled" name="diver_registration_body" value="SSI"
											<?php echo ($chkbox2=='SSI')?'checked':'' ?>>SSI</label>					
											<?php 
												}
												else
												{
											?>
											<label class="checkbox-inline">
											<input type="radio" class="styled" name="diver_registration_body" value="<?php echo $chkbox2; ?>"
											<?php echo ($chkbox2==$chkbox2)?'checked':'' ?> ><?php echo $chkbox2; ?></label>
											<label class="checkbox-inline" style="margin: 0 0 0 10px;">
											<input type="radio" class="styled" name="diver_registration_body" value="PADI" >PADI</label>
											<label class="checkbox-inline">
											<input type="radio" class="styled" name="diver_registration_body" value="SSI" >SSI</label>
											<?php 
												}
											?>						
											
										</div>
									</div>
								
									
									<div class="form-group">
										<label class="control-label col-sm-3" for="text">Identification Passport:</label>
										<div class="col-sm-9">
											<label class="btn-file"><!--Browse-->
												 <img src="<?php echo base_url(); ?>/upload/customerprofile/<?php echo $row->identifiction_passport;?>" width="200" height="100"><input type="file" name="identification_passport" hidden>
											</label>
										</div>
									</div>
									
									<div class="form-group">
										<label class="control-label col-sm-3" for="text">Diver Registration Level :</label>
										<div class="col-sm-9">
										<?php 
											$chkbox3 = $row->diver_registration_level; 
											?>
											<label class="radio-inline"><input type="radio" name="diver_registration_level" value="OWD" <?php echo ($chkbox3=='OWD')?'checked':'' ?>>OWD</label>
											<label class="radio-inline"><input type="radio" name="diver_registration_level" value="AOW" <?php echo ($chkbox3=='AOW')?'checked':'' ?>>AOW</label>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="text">Diver Specialties Skill :</label>
										<div class="col-sm-9">
										<?php 
											$chkbox4 = $row->diver_speciality_skill; 
											?>
											<label class="radio-inline" style="font-size:14px;"><input type="radio" name="Specialtiesskill" value="PEAK PERFORMANCE BOUYANCY" <?php echo ($chkbox4=='PEAK PERFORMANCE BOUYANCY')?'checked':'' ?>>PEAK PERFORMANCE BOUYANCY</label>
											<label class="radio-inline" style="font-size:14px;"><input type="radio" name="Specialtiesskill" value="DEEP DIVING" <?php echo ($chkbox4=='DEEP DIVING')?'checked':'' ?>>DEEP DIVING</label>
											<label class="radio-inline" style="font-size:14px;"><input type="radio" name="Specialtiesskill" value="WRECK DIVING" <?php echo ($chkbox4=='WRECK DIVING')?'checked':'' ?>>WRECK DIVING</label>
											<label class="radio-inline" style="font-size:14px;"><input type="radio" name="Specialtiesskill" value="DRIFT DIVING" <?php echo ($chkbox4=='DRIFT DIVING')?'checked':'' ?>>DRIFT DIVING</label>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="text">Diver Card:</label>
										<div class="col-sm-9">
											<label class="btn-file"><!--Browse-->
												<img src="<?php echo base_url(); ?>/upload/customerprofile/<?php echo $row->diver_card;?>" width="200" height="100">
												 <input type="file" name="diver_card" hidden>
											</label>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="text">Preferred Language :</label>
										<div class="col-sm-9">
										  <select class="form-control" name="language">
												<option value="<?php echo $row->language; ?>"><?php echo $row->language; ?></option>
												<option value="0">---Select Language---</option>
												<option value="ENGLISH">ENGLISH</option>
												
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="text">Preferred Currency :</label>
										<div class="col-sm-9">
										  <select class="form-control" name="currency">
												<option value="<?php echo $row->currency; ?>"><?php echo $row->currency; ?></option>
												<option value="0">---Select Currency---</option>
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
											<input type="text" class="form-control" id="text" name="address1" value="<?php echo $row->address1; ?>"><br>
											<input type="text" class="form-control" id="text" name="address2" value="<?php echo $row->address2; ?>"><br>
											<input type="text" class="form-control" id="text" name="address3" value="<?php echo $row->address3; ?>">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="text">Other Languages:</label>
										<div class="col-sm-9">
										  <div class="field_wrapper1">
											<div>
												<?php 
												 $chkbox5=$row->other_language;
												 $arr1=explode(",",$chkbox5);
												foreach($arr1 as $arr)
												{
												 ?>
												<input type="text" name="field_name1[]" value="<?php echo $arr; ?>" style="200px"/>
												<?php 
												}
												?>
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
										  <input type="text" class="form-control" id="text" name="name" value="<?php echo $row->name; ?>">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="text">Contact Number:</label>
										<div class="col-sm-9">
										  <input type="text" class="form-control" id="text" name="contact_no" value="<?php echo $row->contact_no; ?>">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="text">Email Address:</label>
										<div class="col-sm-9">
										  <input type="email" class="form-control" id="text" name="e_mail" value="<?php echo $row->e_mail; ?>">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="text">Relationship:</label>
										<div class="col-sm-9">
										  <input type="text" class="form-control" id="text" name="relationship" value="<?php echo $row->relationship; ?>">
										</div>
									</div>
									<div class="form-group"> 
										<div class="col-sm-offset-3 col-sm-9">
										 <input type="submit" name="update_customerprofile_data" value="Save" class="btn btn-success">
										  <button type="reset" class="btn btn-danger">Cancel</button>
										</div>
									</div>
								 </form>
							 
							  </div>
							</div>
						</div>
                     </div>
                  </div>
                 
				 <?php 
				}
				 ?> 
				  
               </div>
            </div>
			<div class="container">&nbsp;</div>
			
			
			 
         </section>
		 <hr style="width:100%;border:2px solid #66ffff;">
		 
		 <?php
			}
			else
			{
				redirect(base_url());
			}
		 ?>