<div class="content-wrapper">
<!-- Content area -->
<div class="content">
<div class="breadcrumb-line breadcrumb-line-component">
   <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
   <ul class="breadcrumb">
      <li><a href=""><i class="icon-home2 position-left"></i> Home</a></li>
      <li><a href="">Dashboard</a></li>
      <li class="active">Dive Package</li>
   </ul>
</div>
<br>

<div class="row">
   <div class="col-md-12">
	<div class="panel panel-flat">
		<div class="panel-heading">
			<h2 class="panel-title">Dive Package</h2>
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
					<li ><a href="<?php echo base_url(); ?>DCpackage/DCpackagelist" >Dashboard</a></li>
					<li class="active"><a href="<?php echo base_url(); ?>DCpackage/addNew" >Add Customized Product</a></li>
				</ul>

				<div class="tab-content">
					<div class="active">

						 <div class="container-fluid">
            <!-- content Starts Here-->
			<div class="row">
				<div class="col-md-12">
					<!-- Multiple buttons -->
						
						<div class="panel-body1">
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
	<form name="add" method="POST" action="<?php echo  base_url();?>DCpackage/addNew" class="stepy-clickable form-horizontal form-validate-jquery" enctype="multipart/form-data">
	
	<fieldset title="1">
		<legend class="text-semibold">General Info</legend>
		<div class="form-group">
                        <label class="control-label col-md-3"><b>Product Name</b> <strong style="color:red;">*</strong></label>
                        <div class="col-md-9">
                           <input name="name" class="form-control" type="text" required="" data-popup="tooltip" title="Product name(It is required field)" data-placement="bottom">
                           <span class="help-block"></span>
                        </div>
                     </div>

					 <div class="form-group">
                        <label class="control-label col-md-3"><b>Product Description</b> <strong style="color:red;">*</strong></label>
                        <div class="col-md-9">
						    <textarea name="description" class="form-control" id="editor-full1" required="required" data-popup="tooltip" title="Product Description(It is required field)" data-placement="bottom"></textarea>
                           <span class="help-block"></span>
                        </div>
                     </div>
					 <div class="form-group">
                        <label class="control-label col-md-3"><b>Product Includes</b> <strong style="color:red;">*</strong></label>
                        <div class="col-md-9">
                           <input name="product_includes" class="form-control" type="text" required="" data-popup="tooltip" title="Product Includes(It is required field)" data-placement="bottom">
                           <span class="help-block"></span>
                        </div>
                     </div>
					 <div class="form-group">
                        <label class="control-label col-md-3"><b>Product Excludes</b> <strong style="color:red;">*</strong></label>
                        <div class="col-md-9">
							<div class="row">
								<div class="col-md-10">
									<input name="productexcludes" class="form-control" type="text" required="" data-popup="tooltip" title="Product Excludes(It is required field)" data-placement="bottom">
									<span class="help-block"></span>
								</div>
								<div class="col-md-2">
									<label class="checkbox-inline"><input type="checkbox" class="styled" name="display" value="display" checked>Display</label>
								</div>
							</div>                     
                        </div>
                     </div>
					 <!--div class="form-group">
						<label class="control-label col-md-12" style="color: #ff5722;"><b>OR SELECT FROM A LIST OF COMMON OPTIONS : </b></label>
					 </div-->
					  <div class="form-group">
                        <label class="control-label col-md-3"><b>OR SELECT FROM A LIST OF COMMON OPTIONS </b></label>
                        <div class="col-md-9">
							<div class="row">
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="commonoptions[]" value="Full Equipment Rendal">FULL EQUIPMENT RENDAL</label>
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="commonoptions[]" value="Lunch">LUNCH</label>
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="commonoptions[]" value="Dinner">DINNER</label>
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="commonoptions[]" value="Transfer From Jetty">TRANSFER FROM JETTY</label>
							</div>
							<div class="row">	
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="commonoptions[]" value="Transfer From Hotel">TRANSFER FROM HOTEL</label>
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="commonoptions[]" value="Marine Park Fee">MARINE PARK FEE</label>
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="commonoptions[]" value="DC to Dive Site">DC TO DIVE SITE</label>
							</div>
                        </div>
                     </div>
					 
					 <div class="form-group">
                        <label class="control-label col-md-3"><b>Other Information</b> <strong style="color:red;">*</strong></label>
                        <div class="col-md-9">
							<div class="row">
								<div class="col-md-10">
									<input name="otherinformation" class="form-control" type="text" required="" data-popup="tooltip" title="Other Information(It is required field)" data-placement="bottom">
									<span class="help-block"></span>
								</div>
								<div class="col-md-2">
									<label class="checkbox-inline"><input type="checkbox" class="styled" name="display" value="display" checked>Display</label>
								</div>
							</div>                     
                        </div>
                     </div>
					  <div class="form-group">
						<div class="row">
							<div class="col-md-6">
								<label class="control-label col-md-6"><b>Product Category : </b></label>
								<div class="col-md-6">
									<input name="productcategory" class="form-control" type="text" data-popup="tooltip" title="Product Category(It is required field)" data-placement="bottom" value="Dive Package">
								</div>
							</div>
							<div class="col-md-6">
								<label class="control-label col-md-4"><b>Product Keyword : </b></label>
								<div class="col-md-8">
									<select name="productkeyword[]" class="form-control multiselect-filtering" data-popup="tooltip" title="Product Keyword(It is required field)" data-placement="bottom" multiple="multiple">
										<?php 
											$data=$this->db->get('tbl_product_keywords')->result_array();
											foreach ($data as $pk) {?>
										   <option value="<?php echo $pk['keywords'];?>" ><?php echo $pk['keywords'];?></option> 
										   <?php
											}
										  ?>
									</select>
								</div>
							</div>
						</div>					
					 </div>
					 <div class="form-group">
						<div class="row">
							<div class="col-md-3">
								<label class="control-label col-md-12"><b>Booking Period </b></label>
							</div>
							<div class="col-md-9">
								<div class="row">
									<div class="col-md-6">
										<label class="control-label col-md-4"><b>Start Date </b></label>
										<div class="col-md-8">
											<span class="form-control" id="fromDisplay" name="from">dd/mm/yyyy</span>
											<input type="hidden" name="bpdatestart" value="" id="fromInput" class="form-control" data-popup="tooltip" title="Start Date(It is required field)" data-placement="bottom">
											<div class="vf-datepicker" id="startDP"></div>
										</div>
									</div>
									<div class="col-md-6">
										<label class="control-label col-md-4"><b>End Date </b></label>
										<div class="col-md-8">
											<span class="form-control" id="toDisplay">dd/mm/yyyy</span>
											<input type="hidden" name="bpdateend" value="" id="toInput" class="form-control" data-popup="tooltip" title="End Date(It is required field)" data-placement="bottom">
											<div class="vf-datepicker" id="endDP"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
							<script>
							var _unavailable = [];
							 var _onrequest = [];
							var dp = new VF_datepicker();
							dp.datepicker({
								'name': 'form1',
								'start': null,
								'end': null,
								'monthNames': ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
								'dayNames': ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
								'startCtrl': $('#fromDisplay'),
								'endCtrl': $('#toDisplay'),
								'startDisplay': $('#fromDisplay'),
								'endDisplay': $('#toDisplay'),
								'startInput': $('#fromInput'),
								'endInput': $('#toInput'),
								'startDP': $('#startDP'),
								'endDP': $('#endDP'),
								'clearTxt': 'Clear dates',
								'unavailable': _unavailable,
								'onrequest': _onrequest,
								
								'positions': ['left', 'right']
							});
							</script>
					 </div>
					 <div class="form-group">
						<div class="row">
							<div class="col-md-3">
								<label class="control-label col-md-12"><b>Travel Period </b></label>
							</div>
							<div class="col-md-9">
								<div class="row">
									<div class="col-md-6">
										<label class="control-label col-md-4"><b>Start Date </b></label>
										<div class="col-md-8">
											<span class="form-control" id="fromDisplay2" name="from">dd/mm/yyyy</span>
											<input type="hidden" name="tpdatestart" value="" id="fromInput2" class="form-control" data-popup="tooltip" title="Start Date(It is required field)" data-placement="bottom">
											<div class="vf-datepicker" id="startDP2"></div>
										</div>
									</div>
									<div class="col-md-6">
										<label class="control-label col-md-4"><b>End Date </b></label>
										<div class="col-md-8">
											<span class="form-control" id="toDisplay2">dd/mm/yyyy</span>
											<input type="hidden" name="tpdateend" value="" id="toInput2" class="form-control" data-popup="tooltip" title="End Date(It is required field)" data-placement="bottom">
											<div class="vf-datepicker" id="endDP2"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<script>
						var _unavailable = [];
						var _onrequest = [];
						var dp2 = new VF_datepicker();
						dp2.datepicker({
							'name': 'form2',
							'start': null,
							'end': null,
							'monthNames': ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
							'dayNames': ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
							'startCtrl': $('#fromDisplay2'),
							'endCtrl': $('#toDisplay2'),
							'startDisplay': $('#fromDisplay2'),
							'endDisplay': $('#toDisplay2'),
							'startInput': $('#fromInput2'),
							'endInput': $('#toInput2'),
							'startDP': $('#startDP2'),
							'endDP': $('#endDP2'),
							'clearTxt': 'Clear dates',
							'unavailable': _unavailable,
							'onrequest': _onrequest,
							
							'positions': ['left', 'right']
						});
						</script>
					 </div>
					 <div class="form-group">
                        <label class="control-label col-md-3"><b>Sequence Number</b></label>
                        <div class="col-md-9">
                           <input name="sequence_number" class="form-control" type="text" required="" data-popup="tooltip" title="Sequence Number(It is required field)" data-placement="bottom">
                           <span class="help-block"></span>
                        </div>
                     </div>
					 <div class="form-group">
                        <label class="control-label col-md-3"><b>Product Status</b></label>
                        <div class="col-md-9">
                           <label class="checkbox-inline"><input type="radio" class="styled" name="productstatus" value="Available">AVAILABLE</label>
							<label class="checkbox-inline"><input type="radio" class="styled" name="productstatus" value="Hidden">HIDDEN</label>
                        </div>
                     </div>
	</fieldset>

	<fieldset title="2">
		<legend class="text-semibold">Pricing Options</legend>
		<div class="form-group">
						<label class="control-label col-md-3"><b>Product Unit :</b> <strong style="color:red;">*</strong></label>
						<div class="col-md-9">
							<label class="checkbox-inline">
							<input type="radio" class="styled" name="productunits" value="Day" id="chkproductunitno">Day</label>
							<label class="checkbox-inline">
							<input type="radio" class="styled" name="productunits" value="Trip" id="chkproductunitno">Trip</label>
							<label class="checkbox-inline">
							<input type="radio" class="styled" id="chkproductunitothers" name="productunits"/>OTHERS</label>
							<label class="checkbox-inline"><div id="dvproductunit" style="display: none">
							<input type="text" name="productunits" /></div></label>
						</div>
						<script type="text/javascript">
							$(function () {
								$("input[name='productunits']").click(function () {
									if ($("#chkproductunitothers").is(":checked")) {
										$("#dvproductunit").show();
									} else {
										$("#dvproductunit").hide();
									}
								});
							});
						</script>
				
					 </div>
					  <!--div class="form-group">
                        <label class="control-label col-md-3"><b>Max Dive/ Day </b></label>
                        <div class="col-md-9">
                           <input name="maxdiveday" class="form-control" type="text" required="">
                           <span class="help-block"></span>
                        </div>
                     </div-->
					  <div class="form-group">
                        <label class="control-label col-md-3"><b>Product Max / Day </b></label>
                        <div class="col-md-9">
                           <input name="productmaxday" class="form-control" type="text" required="" data-popup="tooltip" title="Product Max(It is required field)" data-placement="bottom">
                           <span class="help-block"></span>
                        </div>
                     </div>
					 <div class="form-group">
                        <label class="control-label col-md-3"><b>Product Price</b></label>
                        <div class="col-md-9">
							<div class="row">
								<div class="col-md-12">
									<label class="control-label col-md-3">Normal Rate</label>
									 <div class="col-md-6">
										<input name="normal_product_price" class="form-control" type="text" required="" data-popup="tooltip" title="Normal Rate(It is required field)" data-placement="bottom">
									</div>
									<div class="col-md-3"><span class="help-block">MYR / PAX</span></div>
								</div>
							</div>
							<div class="row">&nbsp;</div>
							<div class="row">
								<div class="col-md-12">
									<label class="control-label col-md-3">Weekend Rate</label>
									<div class="col-md-6">
										<input name="weekend_product_price" class="form-control" type="text" required="" data-popup="tooltip" title="Weekend Rate(It is required field)" data-placement="bottom">
									</div>
									<div class="col-md-3"><span class="help-block">MYR / PAX</span></div>
								</div>
							</div>
							<div class="row">&nbsp;</div>
							<div class="row">
								<div class="col-md-12">
									<label class="control-label col-md-3">Peak Season Rate</label>
									<div class="col-md-6">
										<input name="peak_product_price" class="form-control" type="text" required="" data-popup="tooltip" title="Peak Season Rate(It is required field)" data-placement="bottom">
									</div>
									<div class="col-md-3"><span class="help-block">MYR / PAX</span></div>
								</div>
							</div>
                        </div>
                     </div>
					 <div class="form-group">
						<label class="control-label col-md-3"><b>Is the Product Price <br>Inclusive of Accomodation?</b></label>
						 <div class="col-md-9">
						<label class="checkbox-inline">
						<input type="radio" class="styled" name="dcaccomodation" id="chkaccomodationyes" value="Yes">YES</label>
						<label class="checkbox-inline"><input type="radio" class="styled" name="dcaccomodation" id="chkaccomodationno" value="No" checked>NO</label>
						</div>
					 </div>
					 <div id="dvaccomodation" style="display:none;">
					 <div class="form-group">
                        <label class="control-label col-md-3"><b>Single Room</b></label>
                        <div class="col-md-9">
							<div class="row">
								<div class="col-md-12">
									 <div class="col-md-2">
										<input name="single_room[]" class="form-control" type="text" data-popup="tooltip" title="Single Room(It is required field)" data-placement="bottom">
									</div>
									<div class="col-md-2"><span class="help-block">MYR / PAX</span></div>
									 <div class="col-md-2">
										<input name="single_room[]" class="form-control" type="text" data-popup="tooltip" title="Single Room(It is required field)" data-placement="bottom">
									</div>
									<div class="col-md-2"><span class="help-block">MYR / PAX</span></div>
									 <div class="col-md-2">
										<input name="single_room[]" class="form-control" type="text" data-popup="tooltip" title="Single Room(It is required field)" data-placement="bottom">
									</div>
									<div class="col-md-2"><span class="help-block">MYR / PAX</span></div>
								</div>
							</div>
                        </div>
                     </div>
					 <div class="form-group">
                        <label class="control-label col-md-3"><b>Twin Room</b></label>
                        <div class="col-md-9">
							<div class="row">
								<div class="col-md-12">
									 <div class="col-md-2">
										<input name="twin_room[]" class="form-control" type="text" data-popup="tooltip" title="Twin Room(It is required field)" data-placement="bottom">
									</div>
									<div class="col-md-2"><span class="help-block">MYR / PAX</span></div>
									 <div class="col-md-2">
										<input name="twin_room[]" class="form-control" type="text" data-popup="tooltip" title="Twin Room(It is required field)" data-placement="bottom">
									</div>
									<div class="col-md-2"><span class="help-block">MYR / PAX</span></div>
									 <div class="col-md-2">
										<input name="twin_room[]" class="form-control" type="text" data-popup="tooltip" title="Twin Room(It is required field)" data-placement="bottom">
									</div>
									<div class="col-md-2"><span class="help-block">MYR / PAX</span></div>
								</div>
							</div>
                        </div>
                     </div>
					 <div class="form-group">
                        <label class="control-label col-md-3"><b>3 Person Room</b></label>
                        <div class="col-md-9">
							<div class="row">
								<div class="col-md-12">
									 <div class="col-md-2">
										<input name="three_person_room[]" class="form-control" type="text" data-popup="tooltip" title="3 Person Room(It is required field)" data-placement="bottom">
									</div>
									<div class="col-md-2"><span class="help-block">MYR / PAX</span></div>
									 <div class="col-md-2">
										<input name="three_person_room[]" class="form-control" type="text" data-popup="tooltip" title="3 Person Room(It is required field)" data-placement="bottom">
									</div>
									<div class="col-md-2"><span class="help-block">MYR / PAX</span></div>
									 <div class="col-md-2">
										<input name="three_person_room[]" class="form-control" type="text" data-popup="tooltip" title="3 Person Room(It is required field)" data-placement="bottom">
									</div>
									<div class="col-md-2"><span class="help-block">MYR / PAX</span></div>
								</div>
							</div>
                        </div>
                     </div>
					 <div class="form-group">
                        <label class="control-label col-md-3"><b>Quad Room</b></label>
                        <div class="col-md-9">
							<div class="row">
								<div class="col-md-12">
									 <div class="col-md-2">
										<input name="quad_room[]" class="form-control" type="text" data-popup="tooltip" title="Quad Room(It is required field)" data-placement="bottom">
									</div>
									<div class="col-md-2"><span class="help-block">MYR / PAX</span></div>
									 <div class="col-md-2">
										<input name="quad_room[]" class="form-control" type="text" data-popup="tooltip" title="Quad Room(It is required field)" data-placement="bottom">
									</div>
									<div class="col-md-2"><span class="help-block">MYR / PAX</span></div>
									 <div class="col-md-2">
										<input name="quad_room[]" class="form-control" type="text" data-popup="tooltip" title="Quad Room(It is required field)" data-placement="bottom">
									</div>
									<div class="col-md-2"><span class="help-block">MYR / PAX</span></div>
								</div>
							</div>
                        </div>
                     </div>
					 </div>
					<script type="text/javascript">
						$(function () {
							$("input[name='dcaccomodation']").click(function () {
								if ($("#chkaccomodationyes").is(":checked")) {
									$("#dvaccomodation").show();
								} else {
									$("#dvaccomodation").hide();
								}
							});
						});
					</script>
					 <div class="form-group">
						<label class="control-label col-md-3"><b>Apply Discount for <br>Bulk Purchase? </b></label>
						 <div class="col-md-9">
						<label class="checkbox-inline">
						<input type="radio" class="styled" name="dcdiscountpurchase" id="chkdcdiscountpurchaseyes" value="Yes">YES</label>
						<label class="checkbox-inline"><input type="radio" class="styled" name="dcdiscountpurchase" id="chkdcdiscountpurchaseno" value="No" checked>NO</label>
						</div>
					 </div>
					 <div id="discountbulkpurchase" style="display:none;">
					 <div class="form-group">
						<label class="control-label col-md-3"><b>Discount Unit : </b></label>
						 <div class="col-md-9">
							<label class="checkbox-inline">
							<input type="radio" class="styled" name="dcdiscountunit" value="%">% OR </label>
							<label class="checkbox-inline"><input type="radio" class="styled" name="dcdiscountunit" value="$"> $ </label>
						</div>
					 </div>
					 <div class="form-group">
						<label class="control-label col-md-3"><b>Range</b></label>
						<div class="col-md-9">
							<div class="field_wrapper">
								<div>
									<input type="text" name="startrange[]"/> TO <input type="text" name="endrange[]"/>
									DISCOUNT RATE : <input type="text" name="field_name[]" value="" width="100px;"/>
									<a href="javascript:void(0);" class="add_button" title="Add field">
									<img src="<?php echo base_url(); ?>/upload/images/plus.png" style="width:25px; height:25px;"/></a>
								</div>
							</div><br>
						</div>
					 </div>
					<script type="text/javascript">
					$(document).ready(function(){
						var maxField = 10; //Input fields increment limitation
						var addButton = $('.add_button'); //Add button selector
						var wrapper = $('.field_wrapper'); //Input field wrapper
						var fieldHTML = '<div><input type="text" name="startrange[]"> TO <input type="text" name="endrange[]"> DISCOUNT RATE : <input type="text" name="field_name[]" value="" width="100px;"/><a href="javascript:void(0);" class="remove_button" title="Remove field"><img src="<?php echo base_url(); ?>/upload/images/minus.png" style="width:25px; height:25px;"/></a></div>'; //New input field html 
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
					</div>
					<script type="text/javascript">
						$(function () {
							$("input[name='dcdiscountpurchase']").click(function () {
								if ($("#chkdcdiscountpurchaseyes").is(":checked")) {
									$("#discountbulkpurchase").show();
								} else {
									$("#discountbulkpurchase").hide();
								}
							});
						});
					</script>
					
					<div class="form-group">
						<label class="control-label col-md-3"><b>Apply Promo? </b></label>
						<div class="col-md-9">
							<label class="checkbox-inline">
							<input type="radio" class="styled" id="chkapplypromoyes" name="dcapplypromo" value="Yes">YES</label>
							<label class="checkbox-inline"><input type="radio" class="styled" name="dcapplypromo" id="chkapplypromono" value="No" checked>NO</label>
						</div>
					 </div>
					 <div id="dvapplypromo" style="display:none;">

					 <div class="form-group">
						<label class="control-label col-md-3"><b>Start Date : </b></label>
						<div class="col-md-3">
							
							<span class="form-control" id="fromDisplay3" name="from">dd/mm/yyyy</span>
							<input type="hidden" name="applypromo_startdate" value="" id="fromInput3" class="form-control" data-popup="tooltip" title="Apply Promo Start Date(It is required field)" data-placement="bottom">
							<div class="vf-datepicker" id="startDP3"></div>
						</div>
						<label class="control-label col-md-3"><b>End Date : </b></label>
						<div class="col-md-3">
							<span class="form-control" id="toDisplay3">dd/mm/yyyy</span>
							<input type="hidden" name="applypromo_enddate" value="" id="toInput3" class="form-control" data-popup="tooltip" title="Apply Promo End Date(It is required field)" data-placement="bottom">
							<div class="vf-datepicker" id="endDP3"></div>
						</div>
						<script>
					var _unavailable = [];
					 var _onrequest = [];
					var dp3 = new VF_datepicker();
					dp3.datepicker({
						'name': 'form3',
						'start': null,
						'end': null,
						'monthNames': ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
						'dayNames': ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
						'startCtrl': $('#fromDisplay3'),
						'endCtrl': $('#toDisplay3'),
						'startDisplay': $('#fromDisplay3'),
						'endDisplay': $('#toDisplay3'),
						'startInput': $('#fromInput3'),
						'endInput': $('#toInput3'),
						'startDP': $('#startDP3'),
						'endDP': $('#endDP3'),
						'clearTxt': 'Clear dates',
						'unavailable': _unavailable,
						'onrequest': _onrequest,
						
						'positions': ['left', 'right']
					});
					</script>
					 </div>
					 <div class="form-group">
						<label class="control-label col-md-3"><b>Discount Unit : </b></label>
						 <div class="col-md-9">
							<label class="checkbox-inline">
							<input type="radio" class="styled" name="apdiscountunit" value="%">% OR </label>
							<label class="checkbox-inline"><input type="radio" class="styled" name="apdiscountunit" value="$"> $ </label>
						</div>
					 </div>
					 <div class="form-group">
                        <label class="control-label col-md-3"><b>Discount Rate : </b></label>
                        <div class="col-md-9">
                           <input name="apdiscountrate" class="form-control" type="text" required="" data-popup="tooltip" title="Discount Rate(It is required field)" data-placement="bottom">
                           <span class="help-block"></span>
                        </div>
                     </div>
					 <div class="form-group">
						<label class="control-label col-md-4"><b>Apply Promo to Bulk Discount? </b></label>
						<div class="col-md-8">
							<label class="checkbox-inline" style="margin: 0 0 0 10px;">
							<input type="radio" class="styled" name="apbulkdiscount" value="Yes">YES</label>
							<label class="checkbox-inline"><input type="radio" class="styled" name="apbulkdiscount" value="No">NO</label>
						</div>
					 </div>
					 </div>
					 <script type="text/javascript">
						$(function () {
							$("input[name='dcapplypromo']").click(function () {
								if ($("#chkapplypromoyes").is(":checked")) {
									$("#dvapplypromo").show();
								} else {
									$("#dvapplypromo").hide();
								}
							});
						});
					</script>
					
					<div class="form-group">
						<label class="control-label col-md-3"><b>Optional Services : </b></label>
						<div class="col-md-9">
							<label class="checkbox-inline">
							<input type="radio" class="styled" id="chkoptionalserviceyes" name="optionalservices1">YES</label>
							<label class="checkbox-inline"><input type="radio" class="styled" name="optionalservices1" id="chkoptionalserviceno" value="No" checked>NO</label>
							<label class="checkbox-inline">
							<div id="dvoptionalservice" style="display: none">
								<div class="field_wrapper1">
									<div>
								Price : <input type="text" name="optionalservices[]" />
								<a href="javascript:void(0);" class="add_button1" title="Add field">
								<img src="<?php echo base_url(); ?>upload/images/plus.png" style="width:25px; height:25px;"/></a>
									</div>
								</div>
							</div>
							</label>
						</div>
					<script type="text/javascript">
					$(function () {
							$("input[name='optionalservices1']").click(function () {
								if ($("#chkoptionalserviceyes").is(":checked")) {
									$("#dvoptionalservice").show();
								} else {
									$("#dvoptionalservice").hide();
								}
							});
						});
								
								
					$(document).ready(function(){
						var maxField = 10; //Input fields increment limitation
						var addButton = $('.add_button1'); //Add button selector
						var wrapper = $('.field_wrapper1'); //Input field wrapper
						var fieldHTML = '<div>Price : <input type="text" name="optionalservices[]" /><a href="javascript:void(0);" class="remove_button1" title="Remove field"><img src="<?php echo base_url(); ?>/upload/images/minus.png" style="width:25px; height:25px;"/></a></div>'; //New input field html 
						var x = 1; //Initial field counter is 1
						$(addButton).click(function(){ //Once add button is clicked
							if(x < maxField){ //Check maximum number of input fields
								x++; //Increment field counter
								$(wrapper).append(fieldHTML); // Add field html
							}
						});
						$(wrapper).on('click', '.remove_button1', function(e){ //Once remove button is clicked
							e.preventDefault();
							$(this).parent('div').remove(); //Remove field html
							x--; //Decrement field counter
						});
					});
					</script>					
					 </div>
	</fieldset>

	<fieldset title="3">
		<legend class="text-semibold">Accommodation</legend>
		<div class="form-group">
						<label class="control-label col-md-12" style="color: #ff5722;"><b>ACCOMMODATION DETAILS</b></label>
					 </div>
					 <div class="form-group">
                        <label class="control-label col-md-3"><b>Accommodation Name : </b></label>
                        <div class="col-md-9">
                           <input name="accomodation_name" class="form-control" type="text" required="" data-popup="tooltip" title="Accommodation Name(It is required field)" data-placement="bottom">
                           <span class="help-block"></span>
                        </div>
                     </div>
					 <div class="form-group">
                        <label class="control-label col-md-3"><b>Accomodates : </b></label>
                        <div class="col-md-9">
                           <div class="row">
								<div class="col-md-12">
									<div class="col-md-3"><span class="help-block">1 Peson/ Room</span></div>
									<div class="col-md-3"><span class="help-block">2 Person/ Room</span></div>
									<div class="col-md-3"><span class="help-block">3 Person/ Room</span></div>
									<div class="col-md-3"><span class="help-block">4 Person/ Room</span></div>
								</div>
							</div>
                        </div>
                     </div>
					 <div class="form-group">
                        <label class="control-label col-md-3"><b>Bed Type : </b></label>
                        <div class="col-md-9">
                           <div class="row">
								<div class="col-md-12">
									<div class="col-md-3"><input name="1person_bed_type" class="form-control" type="text" data-popup="tooltip" title="Bed Type(It is required field)" data-placement="bottom"></div>
									<div class="col-md-3"><input name="2person_bed_type" class="form-control" type="text" data-popup="tooltip" title="Bed Type(It is required field)" data-placement="bottom"></div>
									<div class="col-md-3"><input name="3person_bed_type" class="form-control" type="text" data-popup="tooltip" title="Bed Type(It is required field)" data-placement="bottom"></div>
									<div class="col-md-3"><input name="4person_bed_type" class="form-control" type="text" data-popup="tooltip" title="Bed Type(It is required field)" data-placement="bottom"></div>
								</div>
							</div>
                        </div>
                     </div>
					 <div class="form-group">
						<div class="row">
							<div class="col-md-6">
								<label class="control-label col-md-6"><b>Check In </b></label>
								<div class="col-md-6">
									<input name="checkintime" class="form-control" id="timepicker1" type="text" data-popup="tooltip" title="Check In(It is required field)" data-placement="bottom">
								</div>
							</div>
							<div class="col-md-6">
								<label class="control-label col-md-5"><b>Check Out </b></label>
								<div class="col-md-7">
									<input name="checkouttime" class="form-control" id="timepicker2" type="text" data-popup="tooltip" title="Check Out(It is required field)" data-placement="bottom">
								</div>
							</div>
						</div>
						<script>
							$('#timepicker1').timepicki();
							$('#timepicker2').timepicki();
						</script>
					 </div>
					 <div class="form-group">
						<label class="control-label col-md-3"><b>Accommodation Type</b></label>
						<div class="col-md-5">
							<label class="checkbox-inline"><input type="radio" class="styled" name="packageactype" value="Capsule" id="chkacctypeno">Capsule</label>
							<label class="checkbox-inline"><input type="radio" class="styled" name="packageactype" value="Chalet" id="chkacctypeno">Chalet</label>
							<label class="checkbox-inline"><input type="radio" class="styled" name="packageactype" value="Hotel" id="chkacctypeno">Hotel</label>
						</div>
						<div class="col-md-2">
							<label class="checkbox-inline">
							<input type="radio" class="styled" id="chkacctypeothers" name="packageactype"/>OTHERS</label>
						</div>
						<div class="col-md-2">
							<label class="checkbox-inline"><div id="dvaccomodationtype" style="display: none">
							<input type="text" name="packageactype" /></div></label>
						</div>
						<script type="text/javascript">
							$(function () {
								$("input[name='packageactype']").click(function () {
									if ($("#chkacctypeothers").is(":checked")) {
										$("#dvaccomodationtype").show();
									} else {
										$("#dvaccomodationtype").hide();
									}
								});
							});
						</script>
				
					 </div>
					 <div class="form-group">
                        <label class="control-label col-md-3"><b>Amenities</b></label>
                        <div class="col-md-9">
							<div class="row">
							<label class="checkbox-inline"><input type="checkbox" class="styled" name="amenities[]" value="Wi-fi" onClick="getResults(this)">Wi-fi</label>
							<label class="checkbox-inline"><input type="checkbox" class="styled" name="amenities[]" value="Television" onClick="getResults(this)">Television</label>
							<label class="checkbox-inline"><input type="checkbox" class="styled" name="amenities[]" value="Refrigerator" onClick="getResults(this)">Refrigerator</label>
							<label class="checkbox-inline"><input type="checkbox" class="styled" name="amenities[]" value="Toiletries" onClick="getResults(this)">Toiletries</label>
							<label class="checkbox-inline"><input type="checkbox" class="styled" name="amenities[]" value="Fan" onClick="getResults(this)">Fan</label>
							<label class="checkbox-inline"><input type="checkbox" class="styled" name="amenities[]" value="Air-Cond" onClick="getResults(this)">Air-Cond</label>
							</div>
							<div class="row">
							<label class="checkbox-inline"><input type="checkbox" class="styled" name="amenities[]" value="Locker" onClick="getResults(this)">Locker</label>
							<label class="checkbox-inline">
							<input type="checkbox" class="styled" value="others" onClick="getResults(this)"/>OTHERS</label>
							<label class="checkbox-inline"><div id="dvProductunits2" style="display: none">
							<input type="text" name="amenities[]" /></div></label>
							</div>
                        </div>
						<script type="text/javascript">							
							$(document).ready(function() {
								$("#dvProductunits2").hide()									
							});
							function getResults(elem) {
								elem.checked && elem.value == "others" ? $("#dvProductunits2").show() : $("#dvProductunits2").hide();
							};
						</script>
                     </div>
	</fieldset>
	<fieldset title="4">
		<legend class="text-semibold">Other Details</legend>
		<div class="form-group">
						<label class="control-label col-md-12" style="color: #ff5722;"><b>OTHER INFORMATION TO DISPLAY: </b></label>
					 </div>
					 
					 <div class="form-group">
                        <label class="control-label col-md-3"><b>Diver Certification</b></label>
                        <div class="col-md-9">
							<div class="row">
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="divercertification[]" value="Non-Diver">NON-DIVER</label>
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="divercertification[]" value="Owd">OWD</label>
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="divercertification[]" value="Aow">AOW</label>
							</div>
                        </div>
                     </div>
					 <div class="form-group">
                        <label class="control-label col-md-3"><b>Diver Experience</b></label>
                        <div class="col-md-9">
							<div class="row">
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="diverexperience[]" value="Novice">NOVICE</label>
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="diverexperience[]" value="Advanced">ADVANCED</label>
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="diverexperience[]" value="Experienced">EXPERIENCED</label>
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="diverexperience[]" value="Non-Diver">NON-DIVER</label>
							</div>
                        </div>
                     </div>
					 <div class="form-group">
                        <label class="control-label col-md-3"><b>Diver Specialties</b></label>
                        <div class="col-md-9">
							<div class="row">
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="diverspecialties[]" value="Altitude Diver">ALTITUDE DIVER</label>
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="diverspecialties[]" value="Cavern Diver">CAVERN DIVER</label>
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="diverspecialties[]" value="Deep Diver">DEEP DIVER</label>
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="diverspecialties[]" value="Wreck Diver">WRECK DIVER</label>
							</div>
                        </div>
                     </div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-7">
								<label class="control-label col-md-5"><b>Country</b></label>
								<div class="col-md-7">
									
								   <select class="form-control selectboxit selectbox-bootstrap btn-warning enabled btn legitRipple" name="dive_center_country" id="scountry"
								   data-popup="tooltip" title="Select Country(It is required field)" data-placement="bottom">
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
									<select class="selectboxit selectbox-bootstrap btn-warning enabled btn legitRipple form-control" name="dive_center_island" id="islands" 
									data-popup="tooltip" title="Select Island(It is required field)" data-placement="bottom">
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
									<input name="gpsx" id="us2-lat" class="form-control" type="text" placeholder="GPS COORDINATES X" data-popup="tooltip" title="Enter Latitude(It is required field)" data-placement="bottom" required >
									<span class="help-block"></span>
								</div>
								<div class="col-md-6">
									 <input name="gpsy" id="us2-lon" class="form-control" type="text" placeholder="GPS COORDINATES Y" data-popup="tooltip" title="Enter Longitude(It is required field)" data-placement="bottom" required >
									<span class="help-block"></span>
								</div>
								<!--input type="button" value="updateCenter" onclick="pan()" /-->
							</div>
                        </div>
                     </div>
					<div class="form-group">
						<label class="control-label col-md-3"></label>
						<div class="col-md-9">
						<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBLorhG6yww2PIYnW-C_d-D2MTmoZfa33w&amp;sensor=false&amp;libraries=places"></script>
						<div class="form-group">
							<div id="us2" class="map-wrapper"></div>
						</div>
						<!--div class="col-md-12">
							<div class="panel panel-flat">
								<!--div class="panel-heading">
									<h5 class="panel-title">Binding UI with the widget</h5>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div->

								<div class="panel-body">
									<div class="form-group">
										<label>Location:</label>
										<input type="text" class="form-control" id="us2-address">
									</div>

									<!--div class="form-group">
										<label>Radius:</label>
										<input type="text" class="form-control" id="us2-radius">
									</div->
									<div class="form-group">
										<div id="us2" class="map-wrapper"></div>
									</div>
									

									<!--div class="form-group">
										<label>Latitude:</label>
										<input type="text" class="form-control" id="us2-lat">
									</div>

									<div class="form-group">
										<label>Longitude:</label>
										<input type="text" class="form-control" id="us2-lon">
									</div->
								</div>
							</div>
						</div-->
						<!--style>
						  html, body, #map-canvas {
							margin: 0;
							padding: 0;
							height: 100%;
						  }
						</style-->
						<!--script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBLorhG6yww2PIYnW-C_d-D2MTmoZfa33w" type="text/javascript"></script-->
						  <!--script>
							var map;
							function initialize() {
								var mapOptions = {
									zoom: 8,
									center: new google.maps.LatLng(-34.397, 150.644),
									mapTypeId: google.maps.MapTypeId.ROADMAP
								};
								map = new google.maps.Map(document.getElementById('map-canvas'),
						  mapOptions);
							}

							google.maps.event.addDomListener(window, 'load', initialize);
							function pan() {
								var panPoint = new google.maps.LatLng(document.getElementById("lat").value, document.getElementById("lng").value);
								map.panTo(panPoint)
							 }
						</script-->
						<!--div id="map-canvas" style="width: 100%; height: 300px;"></div-->
							<?php 
					/* $data=$this->db->get('tbl_map')->result_array();
					foreach ($data as $a) {
					$markers[] = array(
					'lat' => $a['lat'],
					'lng' => $a['lng']
					);	

					} */
				  ?>
				<!--script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBLorhG6yww2PIYnW-C_d-D2MTmoZfa33w" type="text/javascript"></script>
				<script type="text/javascript">// <![CDATA[
				var markers = <?php echo json_encode( $markers ); ?>;
				window.onload = function () {
				var mapOptions = {
				center: new google.maps.LatLng(markers[0].lat, markers[0].lng),
				zoom: 16,
				mapTypeId: google.maps.MapTypeId.ROADMAP
				};
				var map = new google.maps.Map(document.getElementById("dvMap"), mapOptions);
				var infoWindow = new google.maps.InfoWindow();
				var lat_lng = new Array();
				var latlngbounds = new google.maps.LatLngBounds();
				for (i = 0; i < markers.length; i++) {
				var data = markers[i]
				var myLatlng = new google.maps.LatLng(data.lat, data.lng);
				lat_lng.push(myLatlng);
				var marker = new google.maps.Marker({
				position: myLatlng,
				map: map,
				title: data.title
				});
				latlngbounds.extend(marker.position);
				(function (marker, data) {
				google.maps.event.addListener(marker, "click", function (e) {
				infoWindow.setContent(data.description);
				infoWindow.open(map, marker);
				});
				})(marker, data);
				}
				map.setCenter(latlngbounds.getCenter());
				map.fitBounds(latlngbounds);

				}
				
				

				// ]]></script>
				<div id="dvMap" style="width: 100%; height: 300px;"></div-->
						</div>
					</div>
					 <!--iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=<?php echo $latlon = $_GET['gpsx'],+$_GET['gpsy']; ?>&amp;sll=37.0625,-95.67706&&amp;sspn=33.984987,77.607422&amp;ie=UTF8&amp;hq=&amp;hnear=<?php echo $latlon = $_GET['gpsx'],+$_GET['gpsy']; ?>&amp;z=12&amp;ll=51.790898,1.156235&amp;output=embed" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe-->
					 <div class="form-group">
                        <label class="control-label col-md-3"><b>Dive Sites</b></label>
                        <div class="col-md-9">       					   
							<!-- Basic example -->
							<div class="panel panel-flat">
								<div class="panel-body">
									<select multiple="multiple" class="form-control listbox" name="divesites[]" data-popup="tooltip" title="Dive Sites(It is required field)" data-placement="bottom">
										<option value="Goral Garden">Goral Garden </option>
										<option value="Batu Ikan">Batu Ikan</option>
										<option value="Renggis">Renggis</option>
									</select>
								</div>
							</div>
							<!-- /basic example -->
                        </div>						
                     </div>
	</fieldset>
	<fieldset title="5">
		<legend class="text-semibold">Gallery</legend>
		 <div class="form-group">
							<h5 class="control-label col-md-12" style="color: #ff5722;"><b>Gallery Section</b></h5>
						 </div>
						
						<div class="form-group">
							<label class="control-label col-md-3"><b>Gallery</b></label>
							<div class="col-md-9">
								<!--input name="gallery" class="form-control" value="" type="text"-->
								<span class="help-block"></span>
								<div class="row" style="width: 100%; height: 300px; overflow-y: scroll;">
								<?php 
									$data1=$this->db->get('tbl_gallery')->result_array();
									foreach ($data1 as $a1) 
									{?>
										<div class="col-md-3">
											<img src="<?php echo base_url(); ?>upload/DCprofile/gallery/<?php echo $a1['gallery']; ?>" 
											class="img-responsive" style="width:150px;height:100px;" data-popup="tooltip" title="Choose One Images(It is required field)" data-placement="bottom">
										   <p align="center"><input type="radio" value="<?php echo $a1['gallery']; ?>" name="gallery"></p>
										</div>								
								   <?php
									}
								  ?>
								</div>
							</div>
						</div>
	</fieldset>
	<!--button type="submit" class="btn btn-primary stepy-finish">Submit <i class="icon-check position-right"></i></button-->
	<input type="submit" name="submit_DCpackage_data" value="Add" class="btn btn-success stepy-finish">
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
			
					<!-- /multiple button -->
				</div>
				
			</div>
            
         </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<!-- /dashboard content -->


<!-- /dashboard content -->