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
							$user_id = $this->session->userdata('user_id');
							$data1=$this->db->get_where('tbl_customerprofile', array('user_id'=>$user_id))->result();
							
								foreach($data1 as $row)
								{
								?>
								
               	  <div class="col-md-3 col-sm-12 col-xs-12">
                     <div class="main-box profile-box-contact">
                     	<div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                            <div class="profile-box-header blue-bg">
                                <div class="col-md-12 text-center">
					
                                   <img src="<?php echo base_url(); ?>upload/customerprofile/<?php echo $row->photo;?>" alt="" class="profile-img img-responsive" style="width:100%;height:auto;"/>
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
					
									<h4 align="center"><?php echo $this->session->userdata('first_name');?></h4>
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
							<h4 align="center" style="font-weight:bold;text-decoration:underline"><a href="<?php echo base_url('Customer/customereditProfile'); ?>/<?php echo $row->id;?>">EDIT MY PROFILE</a></h4>
							<p align="center" style="font-weight:bold;text-decoration:underline"><a href="<?php echo base_url('Customer/customerChangepassword'); ?>/<?php echo $row->id;?>">CHANGE MY PASSWORD</a></p>
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
										  <input type="text" class="form-control" id="text" name="firstname" value="<?php echo $row->firstname; ?>" disabled>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="text">Last Name:</label>
										<div class="col-sm-9">
										  <input type="text" class="form-control" id="text" name="lastname" value="<?php echo $row->lastname;?>" disabled>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="text">I AM:</label>
										<div class="col-sm-9">
										  <input type="text" class="form-control" id="text" name="lastname" value="<?php echo $row->gender;?>" disabled>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="text">Date of Birth:</label>
										<div class="col-sm-9">
										  <input type="text" class="form-control" id="text" name="lastname" value="<?php echo $row->dob;?>" disabled>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="text">Email Address:</label>
										<div class="col-sm-9">
										  <input type="text" class="form-control" id="text" name="lastname" value="<?php echo $row->email;?>" disabled>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="text">Contact Number:</label>
										<div class="col-sm-9">
										  <input type="text" class="form-control" id="text" name="lastname" value="<?php echo $row->contactno;?>" disabled>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="text">Nationality:</label>
										<div class="col-sm-9">
										  <input type="text" class="form-control" id="text" name="lastname" value="<?php echo $row->nationality;?>" disabled>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="text">Diver Registration Body:</label>
										<div class="col-sm-9">
										  <input type="text" class="form-control" id="text" name="lastname" value="<?php echo $row->diver_registration_body;?>" disabled>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="text">Identification Passport:</label>
										<div class="col-sm-9">
										  <img src="<?php echo base_url(); ?>upload/customerprofile/<?php echo $row->identifiction_passport;?>" width="250px" height="120px"/>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="text">Diver Registration Level:</label>
										<div class="col-sm-9">
										  <input type="text" class="form-control" id="text" name="lastname" value="<?php echo $row->diver_registration_level;?>" disabled>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="text">Diver Specialties Skill:</label>
										<div class="col-sm-9">
										  <input type="text" class="form-control" id="text" name="lastname" value="<?php echo $row->diver_speciality_skill;?>" disabled>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="text">Diver Card:</label>
										<div class="col-sm-9">
										  <img src="<?php echo base_url(); ?>upload/customerprofile/<?php echo $row->diver_card;?>" width="250px" height="120px"/>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="text">Preferred Language:</label>
										<div class="col-sm-9">
										  <input type="text" class="form-control" id="text" name="lastname" value="<?php echo $row->language;?>" disabled>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="text">Preferred Currency:</label>
										<div class="col-sm-9">
										  <input type="text" class="form-control" id="text" name="lastname" value="<?php echo $row->currency;?>" disabled>
										</div>
									</div>
									<br>
									<hr style="width:100%;">
									<label style="font-size:19px;font-weight:bold;color:#000;" class="col-md-12">Others</label>
									
									<div class="form-group">
										<label class="control-label col-sm-3" for="text">Residential Address:</label>
										<div class="col-sm-9">
										  <input type="text" class="form-control" id="text" name="lastname" value="<?php echo $row->address1;?>" disabled>
										  <input type="text" class="form-control" id="text" name="lastname" value="<?php echo $row->address2;?>" disabled>
										  <input type="text" class="form-control" id="text" name="lastname" value="<?php echo $row->address3;?>" disabled>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-sm-3" for="text">Other Languages:</label>
										<div class="col-sm-9">
										  <input type="text" class="form-control" id="text" name="lastname" value="<?php echo $row->other_language;?>" disabled>
										</div>
									</div>
									
									<label style="font-size:19px;font-weight:bold;color:#000;margin:5px 0 10px 0;" class="col-md-12">Emergency Contact</label>
									
									<div class="form-group">
										<label class="control-label col-sm-3" for="text">Name:</label>
										<div class="col-sm-9">
										  <input type="text" class="form-control" id="text" name="lastname" value="<?php echo $row->name;?>" disabled>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="text">Contact Number:</label>
										<div class="col-sm-9">
										  <input type="text" class="form-control" id="text" name="lastname" value="<?php echo $row->contact_no;?>" disabled>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="text">Email Address:</label>
										<div class="col-sm-9">
										  <input type="text" class="form-control" id="text" name="lastname" value="<?php echo $row->e_mail;?>" disabled>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" for="text">Relationship:</label>
										<div class="col-sm-9">
										  <input type="text" class="form-control" id="text" name="lastname" value="<?php echo $row->e_mail;?>" disabled>
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