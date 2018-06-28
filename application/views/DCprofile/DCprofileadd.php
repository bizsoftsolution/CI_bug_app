<div class="content-wrapper">
<!-- Content area -->
<div class="content">
<div class="breadcrumb-line breadcrumb-line-component">
   <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
   <ul class="breadcrumb">
      <li><a href=""><i class="icon-home2 position-left"></i> Home</a></li>
      <li><a href="<?php echo base_url();?>Dashboard">Dashboard</a></li>
      <li class="active">Dive Center Profile</li>
   </ul>
</div>
<br>
<!-- Main charts -->
<div class="row">
	<div class="col-md-12">
	<div class="panel panel-flat">
		<div class="panel-heading">
			<h2 class="panel-title">Dive Center Profile</h2>
			<div class="heading-elements">
				<ul class="icons-list">
					<li><a data-action="collapse"></a></li>
					<li><a data-action="reload"></a></li>
					<!-- <li><a data-action="close"></a></li> -->
				</ul>
			</div>
		</div>

		<div class="panel-body">
			<div class="tabbable">
				<ul class="nav nav-tabs nav-tabs-highlight">
					<li class="active"><a href="<?php echo base_url(); ?>DCprofile/addNew" >Details</a></li>
					<li><a href="<?php echo base_url(); ?>DCprofile/DCstaffList" >Contacts</a></li>
					<li><a href="<?php echo base_url(); ?>DCprofile/DCgalleryList" >Gallery</a></li>
				</ul>

				<div class="tab-content">
					<div class="active">
						 <?php if($message == "FAILED") { ?>
               <div class="alert alert-danger">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <strong>Action Failed !!! </strong>
               </div>
               <?php } else if($message == "SUCCESS") {  ?>
               <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <strong>Success !!! </strong> New Data Created successfully
               </div>
               <?php 
			   //redirect(base_url().'slider/sliderList');
			   } ?>
			   
               <form name="add" method="POST" action="<?php echo  base_url();?>DCprofile/addNew" class="form-horizontal form-validate-jquery" 
			   enctype="multipart/form-data">
                  <div class="form-body">
					<div class="form-group">
                        <label class="control-label col-md-3"><b>Dive Center Name</b> <strong style="color:red;">*</strong></label>
                        <div class="col-md-9">
                           <input name="name" class="form-control" type="text" required="" data-popup="tooltip" title="Dive Center name(It is required field)" data-placement="bottom">
                           <span class="help-block"></span>
                        </div>
                     </div>
					 <div class="form-group">
                        <label class="control-label col-md-3"><b>Display Image</b></label>
                        <div class="col-md-9">
                           <input name="file" class="form-control file-styled" type="file" required="" data-popup="tooltip" title="Please select the image to be displayed" data-placement="bottom">
                           <span class="help-block">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
                        </div>
                     </div>
					 <div class="form-group">
                        <label class="control-label col-md-3"><b>Dive Center Description</b> <strong style="color:red;">*</strong></label>
                        <div class="col-md-9">
						    <textarea name="description" class="form-control" id="editor-full1" required="required" data-popup="tooltip" title="Give the valid information about our Dive center" data-placement="bottom"></textarea>
                           <span class="help-block"></span>
                        </div>
                     </div>
					 <div class="form-group">
						<div class="row">
							<div class="col-md-7">
								<label class="control-label col-md-5"><b>Country</b></label>
								<div class="col-md-7">
								   <select class="form-control selectboxit selectbox-bootstrap btn-warning enabled btn legitRipple" name="dive_center_country" id="scountry" data-popup="tooltip" title="Please select the country where the dive center is located" data-placement="bottom">
										<option label="Select Country"></option>
										<?php 
											$data=$this->db->get('tbl_country')->result_array();
											foreach ($data as $a) {?>
										   <option value="<?php echo $a['country_id'];?>"><?php echo $a['country_name'];?></option> 
										   <?php
											}
										  ?>
									</select>
								   <span class="help-block"></span>
								</div>
							</div>
							<div class="col-md-5">
								<label class="control-label col-md-4"><b>Island</b></label>
								<div class="col-md-8">
									<select class="selectboxit selectbox-bootstrap btn-warning enabled btn legitRipple form-control" name="dive_center_island" id="islands" data-popup="tooltip" title="Please select the island " data-placement="bottom">
										<option label="Select Island"></option>
									</select> 
								   <span class="help-block"></span>
								</div>
							</div>
						</div>                      
                     </div>
					  <div class="form-group">
                        <label class="control-label col-md-3"><b>GPS COORDINATES</b></label>
                        <div class="col-md-9">
							<div class="row">
								<div class="col-md-6">
									<input name="gpsx" class="form-control" type="text" placeholder="GPS COORDINATES X" required="" data-popup="tooltip" title="Give Accuarate point the dive center lattitude value" data-placement="bottom">
									<span class="help-block"></span>
								</div>
								<div class="col-md-6">
									 <input name="gpsy" class="form-control" type="text" placeholder="GPS COORDINATES Y" required="" data-popup="tooltip" title="Give Accuarate point the dive center logintude value" data-placement="bottom">
									<span class="help-block"></span>
								</div>
							</div>
                        </div>
                     </div>
					 <div class="form-group">
                        <label class="control-label col-md-3"><b>Registered Company Name</b> <strong style="color:red;">*</strong></label>
                        <div class="col-md-9">
                           <input name="rcname" class="form-control" type="text" required="" data-popup="tooltip" title="Enter the Registered Name of the dive center" data-placement="bottom">
                           <span class="help-block"></span>
                        </div>
                     </div>
					 <div class="form-group">
						<div class="row">
							<div class="col-md-7">
								<label class="control-label col-md-5"><b>Business Registration NO</b> <strong style="color:red;">*</strong></label>
								<div class="col-md-7">
								   <input name="brnumber" class="form-control" type="text" required="" data-popup="tooltip" title="Enter the Registration Number of the Dive center" data-placement="bottom">
								   <span class="help-block"></span>
								</div>
							</div>
							<div class="col-md-5">
								<label class="control-label col-md-5"><b>Telephone NO</b></label>
								<div class="col-md-7">
								   <input name="tpnumber" class="form-control" type="text" required="" data-popup="tooltip" title="Enter the valid Telephone Number" data-placement="bottom">
								   <span class="help-block"></span>
								</div>
							</div>
						</div>                      
                     </div>
					 <div class="form-group">
						<div class="row">
							<div class="col-md-12">
								<label class="control-label col-md-3"><b>Billing Address</b> <strong style="color:red;">*</strong></label>
								<div class="col-md-9 ">
								   <textarea name="baddress" class="form-control" type="text" required="" data-popup="tooltip" title="Enter the Billing Address of the Dive center" data-placement="bottom"></textarea>
								   <span class="help-block"></span>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-12">
								<label class="control-label col-md-3"><b>FAX NO</b></label>
								<div class="col-md-9">
								   <input name="faxnumber" class="form-control" type="text" required="" data-popup="tooltip" title="Enter the FAX number of the billing address" data-placement="bottom">
								   <span class="help-block"></span>
								</div>
							</div>
						</div>                      
                     </div>
					 <div class="form-group">
                        <label class="control-label col-md-3"><b>Dive Center Address</b> <strong style="color:red;">*</strong></label>
                        <div class="col-md-9">
						   <textarea name="dcaddress" class="form-control" required="" data-popup="tooltip" title="Enter the Contact address of the dive center" data-placement="bottom"></textarea>
                           <span class="help-block"></span>
                        </div>
                     </div>
					 <div class="form-group">
						<div class="row">
							<div class="col-md-7">
								<label class="control-label col-md-5"><b>Telephone NO</b> <strong style="color:red;">*</strong></label>
								<div class="col-md-7">
								   <input name="dctpnumber" class="form-control" type="text" required="" data-popup="tooltip" title="Enter the contact number " data-placement="bottom">
								   <span class="help-block"></span>
								</div>
							</div>
							<div class="col-md-5">
								<label class="control-label col-md-5"><b>FAX NO</b></label>
								<div class="col-md-7">
								   <input name="dcfaxnumber" class="form-control" type="text" required="" data-popup="tooltip" title="Enter the valid FAX number for the Dive center" data-placement="bottom">
								   <span class="help-block"></span>
								</div>
							</div>
						</div>                      
                     </div>
					 <div class="form-group">
						<div class="row">
							<div class="col-md-7">
								<label class="control-label col-md-5"><b>Email ID</b> <strong style="color:red;">*</strong></label>
								<div class="col-md-7">
								   <input name="emailid" class="form-control" type="email" required="" data-popup="tooltip" title="Enter the valid Email id to contact" data-placement="bottom">
								   
								   <span class="help-block"></span>
								</div>
							</div>
							<div class="col-md-5">
								<label class="control-label col-md-5"><b>Website URL</b></label>
								<div class="col-md-7">
								   <input name="websiteurl" class="form-control" type="text" required="" data-popup="tooltip" title="Enter the valid Website to found you easily" data-placement="bottom">
								   <span class="help-block"></span>
								</div>
							</div>
						</div>                      
                     </div>
					 <div class="form-group">
                        <label class="control-label col-md-3"><b>Number of Instructor and Dive Master</b></label>
                        <div class="col-md-9">
                           <input name="divemaster" class="form-control" type="text" required="" data-popup="tooltip" title="Enter the Number of Instructor" data-placement="bottom">
                           <span class="help-block"></span>
                        </div>
                     </div>
					 <div class="form-group">
						<div class="row">
							<div class="col-md-7">
								<label class="control-label col-md-5"><b>Number of Boats</b> <strong style="color:red;">*</strong></label>
								<div class="col-md-7">
								   <input name="noofboats" class="form-control" type="number" min="1" required="" data-popup="tooltip" title="Enter the number of boats Availabe(please enter only number)" data-placement="bottom">
								   <span class="help-block"></span>
								</div>
							</div>
							<div class="col-md-5">
								<label class="control-label col-md-5"><b>Daily Capacity</b></label>
								<div class="col-md-7">
								   <input name="dailycapacity" class="form-control" type="text" required="" data-popup="tooltip" title="Enter the Daily Capacity of the Dives" data-placement="bottom">
								   <span class="help-block"></span>
								</div>
							</div>
						</div>                      
                     </div>
					  <div class="form-group">
                        <label class="control-label col-md-3" data-popup="tooltip" title="Please select the facilities availabe in the dive center" data-placement="bottom"><b>Dive Center Facilities</b></label>
                        <div class="col-md-9">
							<div class="row">
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="dcfacilities[]" value="CLASSROOM" >CLASSROOM</label>
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="dcfacilities[]" value="BAR">BAR</label>
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="dcfacilities[]" value="WASH CABIN">WASH CABIN</label>
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="dcfacilities[]" value="LOCKER">LOCKER</label>
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="dcfacilities[]" value="SHOWER">SHOWER</label>
							</div>
							<div class="row">
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="dcfacilities[]" value="EQUIPMENT SHOP">EQUIPMENT SHOP</label>
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="dcfacilities[]" value="WI-FI">WI-FI</label>
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="dcfacilities[]" value="LOUNGE">LOUNGE</label>
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="dcfacilities[]" value="DECO CHAMBER">DECO CHAMBER</label>
							</div>
							<div class="row">
		<label class="checkbox-inline"><input type="checkbox" class="styled" value="OTHERS" id="chkFacilities">OTHERS</label>
		<label class="checkbox-inline"><div id="dvFacilities" style="display: none"><input type="text" class="form-control" name="dcfacilities[]" /></div></label>
							</div>
							<script type="text/javascript">
								$(function () {
									$("#chkFacilities").click(function () {
										if ($(this).is(":checked")) {
											$("#dvFacilities").show();
										} else {
											$("#dvFacilities").hide();
										}
									});
								});
							</script>
                        </div>
                     </div>
					 <div class="form-group">
                        <label class="control-label col-md-3" data-popup="tooltip" title="Please select the Cetrification Available for the Dive Center" data-placement="bottom"><b>Dive Center Affiliation</b></label>
                        <div class="col-md-9">
							<div class="row">
							
		<label class="checkbox-inline">
		<input type="checkbox" class="styled" data-toggle="modal" data-target="#modal_theme_primary" >PADI</label>
		<!-- Basic modal -->
		<div id="modal_theme_primary" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header bg-primary">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h5 class="modal-title">PADI</h5>
					</div>

					<div class="modal-body">
						<div class="row">
						<label class="checkbox-inline"><input type="checkbox" class="styled" name="dcaffiliation[]" value="100% AWARE">100% AWARE</label>
						<label class="checkbox-inline"><input type="checkbox" class="styled" name="dcaffiliation[]" value="GREEN STAR AWARD">GREEN STAR AWARD</label>
						<label class="checkbox-inline"><input type="checkbox" class="styled" name="dcaffiliation[]" value="NATIONAL GEOGRAPHIC CENTER">NATIONAL GEOGRAPHIC CENTER</label>
						</div>
						<div class="row">
						<label class="checkbox-inline"><input type="checkbox" class="styled" name="dcaffiliation[]" value="PADI 5* CDC CENTER">PADI 5* CDC CENTER</label>
						<label class="checkbox-inline"><input type="checkbox" class="styled" name="dcaffiliation[]" value="PADI 5* DIVE RESORT">PADI 5* DIVE RESORT</label>
						<label class="checkbox-inline"><input type="checkbox" class="styled" name="dcaffiliation[]" value="PADI 5* DIVE CENTER">PADI 5* DIVE CENTER</label>
						</div>
						<div class="row">
						<label class="checkbox-inline"><input type="checkbox" class="styled" name="dcaffiliation[]" value="PADI 5* INSTRUCTOR DEVELOPMENT CENTER">PADI 5* INSTRUCTOR DEVELOPMENT CENTER</label>
						<label class="checkbox-inline"><input type="checkbox" class="styled" name="dcaffiliation[]" value="PADI TECREC CENTER">PADI TECREC CENTER</label>
						</div>
						<div class="row">
						<label class="checkbox-inline"><input type="checkbox" class="styled" name="dcaffiliation[]" value="PADI 5* INSTRUCTOR DEVELOPMENT RESORT">PADI 5* INSTRUCTOR DEVELOPMENT RESORT</label>
						<label class="checkbox-inline"><input type="checkbox" class="styled" name="dcaffiliation[]" value="PADI DIVE CENTER">PADI DIVE CENTER</label>
						</div>
						<div class="row">
						<label class="checkbox-inline"><input type="checkbox" class="styled" name="dcaffiliation[]" value="PADI DIVE RESORT">PADI DIVE RESORT</label>
						</div>
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
						<!--button type="button" class="btn btn-primary">Save changes</button-->
					</div>
				</div>
			</div>
		</div>
		
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="dcaffiliation[]" value="SSI">SSI</label>
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="dcaffiliation[]" value="SDI">SDI</label>
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="dcaffiliation[]" value="HEPCA">HEPCA</label>
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="dcaffiliation[]" value="ANDI">ANDI</label>
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="dcaffiliation[]" value="BIS">BIS</label>
							</div>
							<div class="row">
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="dcaffiliation[]" value="NAUI">NAUI</label>
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="dcaffiliation[]" value="TDI">TDI</label>
		<label class="checkbox-inline"><input type="checkbox" class="styled" value="OTHERS" id="chkdcaffiliation">OTHERS</label>
		<label class="checkbox-inline"><div id="dvdcaffiliation" style="display: none"><input type="text" class="form-control" name="dcaffiliation[]" /></div></label>
			<script type="text/javascript">
				$(function () {
					$("#chkdcaffiliation").click(function () {
						if ($(this).is(":checked")) {
							$("#dvdcaffiliation").show();
						} else {
							$("#dvdcaffiliation").hide();
						}
					});
				});
			</script>
							</div>
                        </div>
                     </div>
					 <div class="form-group">
                        <label class="control-label col-md-3"><b>Affiliation Registered NO</b></label>
                        <div class="col-md-9">
                           <input name="affiliationno" class="form-control" type="text" required="" data-popup="tooltip" title="Enter the valid Affilated Registered number" data-placement="bottom">
                           <span class="help-block"></span>
                        </div>
                     </div>
					 <div class="form-group">
						<label  class="control-label col-md-3"><b>Dive Season</b></label>
						  <div class="col-md-9">
								<div class="multi-select-full" data-popup="tooltip" title="Please select the seasons for the Diving" data-placement="bottom">
									<select class="multiselect-danger" name="diveseason[]" multiple="multiple" >
										<option value="JAN">JAN</option>
										<option value="FEB">FEB</option>
										<option value="MARCH">MARCH</option>
										<option value="APRIL">APRIL</option>
										<option value="MAY">MAY</option>
										<option value="JUNE">JUNE</option>
										<option value="JULY">JULY</option>
										<option value="AUGUST">AUGUST</option>
										<option value="SEPTEMBER">SEPTEMBER</option>
										<option value="OCTOBER">OCTOBER</option>
										<option value="NOVEMBER">NOVEMBER</option>
										<option value="DECEMBER">DECEMBER</option>
									</select>
								</div>
							</div>
					</div>
			
					 <div class="form-group">
                        <label class="control-label col-md-3" data-popup="tooltip" title="Please select the Languages" data-placement="bottom"><b>Languages</b></label>
                        <div class="col-md-9">
							<div class="row">
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="dlanguages[]" value="ENGLISH">ENGLISH</label>
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="dlanguages[]" value="FRENCH">FRENCH</label>
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="dlanguages[]" value="JAPANESE">JAPANESE</label>
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="dlanguages[]" value="CHINESE">CHINESE</label>
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="dlanguages[]" value="KOREAN">KOREAN</label>
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="dlanguages[]" value="SWEDISH">SWEDISH</label>
							</div>
							<div class="row">	
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="dlanguages[]" value="GERMAN">GERMAN</label>
		<label class="checkbox-inline"><input type="checkbox" class="styled" value="OTHERS" id="chkdlanguages">OTHERS</label>
		<label class="checkbox-inline"><div id="dvdlanguages" style="display: none"><input type="text" name="dlanguages[]" class="form-control" /></div></label>
		<script type="text/javascript">
			$(function () {
				$("#chkdlanguages").click(function () {
					if ($(this).is(":checked")) {
						$("#dvdlanguages").show();
					} else {
						$("#dvdlanguages").hide();
					}
				});
			});
		</script>
							</div>
                        </div>
                     </div>
					 <div class="form-group">
                        <label class="control-label col-md-3" data-popup="tooltip" title="Please select the Information and Documents Required of Diver" data-placement="bottom"><b>Information and Documents Required of Diver</b></label>
                        <div class="col-md-9">
							<div class="row">
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="docrequireddiver[]" value="CERTIFICATION CARD">CERTIFICATION CARD</label>
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="docrequireddiver[]" value="DATE OF BIRTH">DATE OF BIRTH</label>
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="docrequireddiver[]" value="LOGBOOK">LOGBOOK</label>
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="docrequireddiver[]" value="DATE OF LAST DIVE">DATE OF LAST DIVE</label>
							</div>
							<div class="row">
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="docrequireddiver[]" value="MEDICAL STATEMENT">MEDICAL STATEMENT</label>
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="docrequireddiver[]" value="DIVING INSURANCE">DIVING INSURANCE</label>
							</div>
							<div class="row">	
		<label class="checkbox-inline"><input type="checkbox" class="styled" value="OTHERS" id="chkdocrequireddiver">OTHERS</label>
		<label class="checkbox-inline"><div id="dvdocrequireddiver"  style="display: none"><input type="text" class="form-control"  name="docrequireddiver[]" /></div></label>
		<script type="text/javascript">
			$(function () {
				$("#chkdocrequireddiver").click(function () {
					if ($(this).is(":checked")) {
						$("#dvdocrequireddiver").show();
					} else {
						$("#dvdocrequireddiver").hide();
					}
				});
			});
		</script>
							</div>
                        </div>
                     </div>
					 <div class="form-group">
                        <label class="control-label col-md-3"><b>Currency of Dive Center</b></label>
                        <div class="col-md-9">
							<select class="form-control selectboxit selectbox-bootstrap btn-info enabled btn legitRipple" name="currency" data-popup="tooltip" title="Please select the currency format" data-placement="bottom" >
								<option label="Select Currency"></option>
								<?php 
									foreach($currency as $currencyval)
									{
								?>
								<option value="<?php echo $currencyval->Currencycode; ?>"><?php echo $currencyval->Currencycode; ?></option>
								<?php 
									}
								?>
							</select>
                           <span class="help-block"></span>
                        </div>
                     </div>
					 
                  </div>

                  <div style="text-align:center">
                     <button type="submit" name="submit_DCprofile" value="Add" class="btn btn-success btn-labeled btn-rounded legitRipple"><b><i class="icon-checkmark"></i></b> Save</button>
                     <button type="reset" name="submit_DCprofile" value="Add" class="btn btn-danger btn-labeled btn-rounded legitRipple"><b><i class="icon-sync"></i></b> Reset</button>
					
                     
                  </div>
               </form>
			  
				 <script type="text/javascript">// <![CDATA[
				 $(document).ready(function(){
				 $('#scountry').change(function(){ //any select change on the dropdown with id country trigger this code
				 $("#islands > option").remove(); //first of all clear select items
				 var country_id = $('#scountry').val(); // here we are taking country id of the selected one.
				 $.ajax({
				 type: "POST",
				 url: "<?php echo base_url(); ?>front/get_island/"+country_id, //here we are calling our user controller and get_cities method with the country_id
				 
				 success: function(cities) //we're calling the response json array 'cities'
				 {
				 $.each(cities,function(id,city) //here we're doing a foeach loop round each city with id as the key and city as the value
				 {
				 var opt = $('<option />'); // here we're creating a new select option with for each city
				 opt.val(id);
				 opt.text(city);
				 $('#islands').append(opt); //here we will append these new select options to a dropdown with the id 'cities'
				 });
				 }
				 
				 });
				 
				 });
				 });
				 </script>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

</div>
<!-- /dashboard content -->
