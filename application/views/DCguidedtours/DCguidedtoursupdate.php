<div class="content-wrapper">
<!-- Content area -->
<div class="content">
<div class="breadcrumb-line breadcrumb-line-component">
   <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
   <ul class="breadcrumb">
      <li><a href=""><i class="icon-home2 position-left"></i> Home</a></li>
      <li><a href="">Dashboard</a></li>
      <li class="active">Guided Tours</li>
   </ul>
</div>
<br>
<!-- Main charts -->
<div class="row">
   <div class="col-lg-12">
      <!-- Traffic sources -->
      <div class="panel panel-flat">
         <div class="panel-heading">
            <h2 class="panel-title">Guided Tours</h2>
            <div style="text-align:right;">
               <!--a class="btn bg-violet" href="<?php echo  base_url();?>DCguidedtours/addNew"><i class="glyphicon glyphicon-plus"></i> Add </a-->
               <a href="<?php echo  base_url();?>DCguidedtours/DCguidedtourslist" class="btn bg-pink"><i class="glyphicon glyphicon-refresh"></i> List</a>
            </div>
            <hr/>
         </div>
         <div class="container-fluid">
            <!-- content Starts Here-->
			<div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
               <br>
               <?php if($message == "FAILED") { ?>
               <div class="alert alert-danger">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <strong>Action Failed !!! </strong>
               </div>
               <?php } else if($message == "SUCCESS") {  ?>
               <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <strong>Success !!! </strong> Updated successfully
               </div>
               <?php } ?>
               <?php foreach($getEditdata as $row){?>
				<h3 style="color: #2196f3;font-weight: bold;">Update Contents</h3>
				<hr>
				 <form name="add" method="POST" action="<?php echo  base_url();?>DCguidedtours/edit/<?php echo $row->id; ?>" class="form-horizontal form-validate-jquery stepy-clickable" 
			   enctype="multipart/form-data">
				<fieldset title="1">
				<legend class="text-semibold">General Info</legend>
					<div class="form-group">
                        <label class="control-label col-md-3"><b>Product Name</b> <strong style="color:red;">*</strong></label>
                        <div class="col-md-9">
                           <input name="name" class="form-control" type="text" value="<?php echo $row->product_name; ?>">
                           <span class="help-block"></span>
                        </div>
                     </div>

					 <div class="form-group">
                        <label class="control-label col-md-3"><b>Product Description</b> <strong style="color:red;">*</strong></label>
                        <div class="col-md-9">
						    <textarea name="description" class="form-control" id="editor-full1" ><?php echo $row->product_description; ?></textarea>
                           <span class="help-block"></span>
                        </div>
                     </div>
					 <div class="form-group">
                        <label class="control-label col-md-3"><b>Product Includes</b> <strong style="color:red;">*</strong></label>
                        <div class="col-md-9">
                           <input name="product_includes" class="form-control" type="text" value="<?php echo $row->product_includes; ?>">
                           <span class="help-block"></span>
                        </div>
                     </div>
					 <div class="form-group">
                        <label class="control-label col-md-3"><b>Product Excludes</b> <strong style="color:red;">*</strong></label>
                        <div class="col-md-9">
							<div class="row">
								<div class="col-md-10">
									<input name="productexcludes" class="form-control" type="text" value="<?php echo $row->product_excludes; ?>">
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
						<?php 
						 $chkbox=$row->common_options;
						 $arr=explode(",",$chkbox);						 
						 ?>
							<div class="row">
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="commonoptions[]" value="Full Equipment Rendal"
		<?php if(in_array("Full Equipment Rendal",$arr)){echo "checked";}?> >FULL EQUIPMENT RENDAL</label>
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="commonoptions[]" value="Lunch" 
		<?php if(in_array("Lunch",$arr)){echo "checked";}?> >LUNCH</label>
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="commonoptions[]" value="Dinner" 
		<?php if(in_array("Dinner",$arr)){echo "checked";}?> >DINNER</label>
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="commonoptions[]" value="Transfer From Jetty" 
		<?php if(in_array("Transfer From Jetty",$arr)){echo "checked";}?> >TRANSFER FROM JETTY</label>
							</div>
							<div class="row">	
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="commonoptions[]" value="Transfer From Hotel"
		<?php if(in_array("Transfer From Hotel",$arr)){echo "checked";}?> >TRANSFER FROM HOTEL</label>
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="commonoptions[]" value="Marine Park Fee"
		<?php if(in_array("Marine Park Fee",$arr)){echo "checked";}?> >MARINE PARK FEE</label>
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="commonoptions[]" value="DC to Dive Site" 
		<?php if(in_array("DC to Dive Site",$arr)){echo "checked";}?> >DC TO DIVE SITE</label>
							</div>
                        </div>
                     </div>
					 
					 <div class="form-group">
                        <label class="control-label col-md-3"><b>Other Information</b> <strong style="color:red;">*</strong></label>
                        <div class="col-md-9">
							<div class="row">
								<div class="col-md-10">
									<input name="otherinformation" class="form-control" type="text" value="<?php echo $row->other_info; ?>">
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
									<input name="productcategory" class="form-control" type="text" value="<?php echo $row->product_category; ?>">
								</div>
							</div>
							<div class="col-md-6">
								<label class="control-label col-md-4"><b>Product Keyword : </b></label>
								<div class="col-md-8">
									<select name="productkeyword" class="form-control">
										<option value="<?php echo $row->product_keyword; ?>"><?php echo $row->product_keyword; ?></option>
										<option label=" -- Select Keyword -- "></option>
										<?php 
											$data=$this->db->get('tbl_product_keywords')->result_array();
											foreach ($data as $pk) {?>
										   <option value="<?php echo $pk['keywords'];?>"><?php echo $pk['keywords'];?></option> 
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
											<span class="form-control" id="fromDisplay" name="from"><?php echo $row->booking_period_start_date; ?></span>
											<input type="hidden" name="bpdatestart" value="" id="fromInput" class="form-control" data-popup="tooltip" title="Start Date(It is required field)" data-placement="bottom">
											<div class="vf-datepicker" id="startDP"></div>
										</div>
									</div>
									<div class="col-md-6">
										<label class="control-label col-md-4"><b>End Date </b></label>
										<div class="col-md-8">
											<span class="form-control" id="toDisplay"><?php echo $row->booking_period_end_date; ?></span>
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
											<span class="form-control" id="fromDisplay2" name="from"><?php echo $row->travel_period_start_date; ?></span>
											<input type="hidden" name="tpdatestart" value="" id="fromInput2" class="form-control" data-popup="tooltip" title="Start Date(It is required field)" data-placement="bottom">
											<div class="vf-datepicker" id="startDP2"></div>
										</div>
									</div>
									<div class="col-md-6">
										<label class="control-label col-md-4"><b>End Date </b></label>
										<div class="col-md-8">
											<span class="form-control" id="toDisplay2"><?php echo $row->travel_period_end_date; ?></span>
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
                           <input name="sequence_number" class="form-control" type="text" value="<?php echo $row->sequence_number; ?>">
                           <span class="help-block"></span>
                        </div>
                     </div>
					 <div class="form-group">
                        <label class="control-label col-md-3"><b>Product Status</b></label>
                        <div class="col-md-9">
							<?php 
								$chkbox1 = $row->product_status;
							?>
                           <label class="checkbox-inline"><input type="radio" class="styled" name="productstatus" value="Available" 
						   <?php echo ($chkbox1=='Available')?'checked':'' ?> >AVAILABLE</label>
							<label class="checkbox-inline"><input type="radio" class="styled" name="productstatus" value="Hidden" 
							<?php echo ($chkbox1=='Hidden')?'checked':'' ?> >HIDDEN</label>
                        </div>
                     </div>
				</fieldset>
				<fieldset title="2">
				<legend class="text-semibold">Pricing Options</legend>
					<div class="form-group">
						<label class="control-label col-md-3"><b>Product Unit :</b> <strong style="color:red;">*</strong></label>
						<div class="col-md-9">
							<?php 
								$chkbox2 = $row->product_unit;
								if($chkbox2 =='Day' || $chkbox2 =='Trip')
								{
							?>
							<label class="checkbox-inline" style="margin: 0 0 0 10px;">
							<input type="radio" class="styled" name="productunits" value="Day" 
							<?php echo ($chkbox2=='Day')?'checked':'' ?>>Day</label>
							<label class="checkbox-inline">
							<input type="radio" class="styled" name="productunits" value="Trip" 
							<?php echo ($chkbox2=='Trip')?'checked':'' ?>>Trip</label>						
							<?php 
								}
								else
								{
							?>
							<label class="checkbox-inline" style="margin: 0 0 0 10px;">
							<input type="radio" class="styled" name="productunits" value="<?php echo $chkbox2; ?>" 
							<?php echo ($chkbox2==$chkbox2)?'checked':'' ?> ><?php echo $chkbox2; ?></label>
							<label class="checkbox-inline" style="margin: 0 0 0 10px;">
							<input type="radio" class="styled" name="productunits" value="Day">Day</label>
							<label class="checkbox-inline">
							<input type="radio" class="styled" name="productunits" value="Trip">Trip</label>
							<?php 
								}
							?>
						</div>
					 </div>
					
					 <div class="form-group">
                        <label class="control-label col-md-3"><b>Product Max / Day </b></label>
                        <div class="col-md-9">
                           <input name="productmaxday" class="form-control" type="text" value="<?php echo $row->product_max_day; ?>">
                           <span class="help-block"></span>
                        </div>
                     </div>
					 <div class="form-group">
                        <label class="control-label col-md-3"><b>Product Price</b></label>
                        <div class="col-md-9">
							<div class="row">
								<div class="col-md-6">
									<label class="control-label col-md-3">Single Room</label>
									 <div class="col-md-6">
										<input name="single_room" class="form-control" type="text" value="<?php echo $row->single_room; ?>">
									</div>
									<div class="col-md-3"><span class="help-block">MYR / PAX</span></div>
								</div>
								<div class="col-md-6">
									<label class="control-label col-md-3">Twin Room</label>
									 <div class="col-md-6">
										<input name="twin_room" class="form-control" type="text" value="<?php echo $row->twin_room; ?>">
									</div>
									<div class="col-md-3"><span class="help-block">MYR / PAX</span></div>
								</div>
							</div>
							<div class="row">&nbsp;</div>
							<div class="row">
								<div class="col-md-6">
									<label class="control-label col-md-3">3 Person Room</label>
									 <div class="col-md-6">
										<input name="three_person_room" class="form-control" type="text" value="<?php echo $row->three_person_room; ?>">
									</div>
									<div class="col-md-3"><span class="help-block">MYR / PAX</span></div>
								</div>
								<div class="col-md-6">
									<label class="control-label col-md-3">Quad Room</label>
									 <div class="col-md-6">
										<input name="quad_room" class="form-control" type="text" value="<?php echo $row->quad_room; ?>">
									</div>
									<div class="col-md-3"><span class="help-block">MYR / PAX</span></div>
								</div>
							</div>
                        </div>
                     </div>
					 
					 
<!--****************************************************************************************************************************************************************************************************************************************************************************************************													START APPLY DISCOUNT FOR BULK PURCHASE *****************************************************************************************************************************************************************************************************************************************************************************************************-->					 
					 
					 <?php 
					$chkbox3 = $row->discount_bulk_purchase;
					if(($chkbox3=='Yes')?'checked':'')
					 {
					?>
					 <div class="form-group">
						<label class="control-label col-md-3"><b>Apply Discount for Bulk Purchase? </b></label>
						<div class="col-md-9">
						<label class="checkbox-inline">
						<input type="radio" class="styled" name="dcdiscountpurchase" value="Yes" 
						<?php echo ($chkbox3=='Yes')?'checked':'' ?>>YES</label>
						<label class="checkbox-inline">
						<input type="radio" class="styled" name="dcdiscountpurchase" value="No" 
						<?php echo ($chkbox3=='No')?'checked':'' ?>>NO</label>
						</div>
					 </div>
					 <div class="form-group">
						<label class="control-label col-md-3"><b>Discount Unit : </b></label>
						 <div class="col-md-9">
							<?php 
							$chkbox4 = $row->discount_unit;
							?>
							<label class="checkbox-inline">
							<input type="radio" class="styled" name="dcdiscountunit" value="%" <?php echo ($chkbox4=='%')?'checked':'' ?>>% OR </label>
							<label class="checkbox-inline">
							<input type="radio" class="styled" name="dcdiscountunit" value="$" <?php echo ($chkbox4=='$')?'checked':'' ?>> $ </label>
						</div>
					 </div>
					 <div class="form-group">
						<label class="control-label col-md-3"><b>Range</b></label>
						<div class="col-md-9">
							<?php 
								$strrange1=$row->range_start;
								 $endrange1=$row->range_end;
								 $disrate1=$row->discount_rate;
								 $arr_strrange1=explode(",",$strrange1);	
								 $arr_endrange1=explode(",",$endrange1);	
								 $arr_disrate1=explode(",",$disrate1);
							echo '<div class="col-md-4">';	 
							foreach($arr_strrange1 as $vallllue1)
							{
							?>
							<input name="startrange[]" class="form-control" type="text" value="<?php echo $vallllue1; ?>" style="width:150px;">
							<?php 
							}
							echo '</div>
							<div class="col-md-4">';
							foreach($arr_endrange1 as $vallllue2)
							{
							?>
							<input name="endrange[]" type="text" class="form-control" value="<?php echo $vallllue2; ?>" style="width:150px;">
							<?php 
							}
							echo '</div>
							<div class="col-md-4">';
							foreach($arr_disrate1 as $vallllue3)
							{
							?>
							<input name="field_name[]"  type="text" class="form-control" value="<?php echo $vallllue3; ?>" style="width:150px;">						
							<?php
							}
							echo '</div>';
							?>
							<div class="row" style="margin:1px 0px;">&nbsp;</div>
						</div>
					 </div>
					<?php 
					 }
					 elseif(($chkbox3=='No')?'checked':'')
					 {
					?>
					<div class="form-group">
						<label class="control-label col-md-3"><b>Apply Discount for <br>Bulk Purchase? </b></label>
						 <div class="col-md-9">
						<label class="checkbox-inline">
						<input type="radio" class="styled" name="dcdiscountpurchase" value="Yes" onClick="showTextBox2()" <?php echo ($chkbox3=='Yes')?'checked':'' ?>>YES</label>
						<label class="checkbox-inline"><input type="radio" class="styled" name="dcdiscountpurchase" value="No" onClick="showTextBox3()" <?php echo ($chkbox3=='No')?'checked':'' ?>>NO</label>
						</div>
					 </div>
					 <div class="textBox1" style="display:none;background:#eeeeee;padding:1%;">
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
										DISCOUNT RATE : <input type="text" name="field_name[]" value="" style="width:100px;"/>
										<a href="javascript:void(0);" class="add_button" title="Add field">
										<img src="<?php echo base_url(); ?>/upload/images/plus.png" style="width:25px; height:25px;"/></a>
									</div>
								</div><br>
							</div>
						 </div>
					 </div>
					<script type="text/javascript">
					
							function showTextBox2() {
								$(".textBox1").show();
							}
							function showTextBox3() {
								$(".textBox1").hide();
							}
						
					$(document).ready(function(){
						var maxField = 10; //Input fields increment limitation
						var addButton = $('.add_button'); //Add button selector
						var wrapper = $('.field_wrapper'); //Input field wrapper
						var fieldHTML = '<div><input type="text" name="startrange[]"> TO <input type="text" name="endrange[]"> DISCOUNT RATE : <input type="text" name="field_name[]" value="" style="width:100px;"/><a href="javascript:void(0);" class="remove_button" title="Remove field"><img src="<?php echo base_url(); ?>/upload/images/minus.png" style="width:25px; height:25px;"/></a></div>'; //New input field html 
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
<!--****************************************************************************************************************************************************************************************************************************************************************************************************													END APPLY DISCOUNT FOR BULK PURCHASE *****************************************************************************************************************************************************************************************************************************************************************************************************-->
					<?php 
					 }
					$chkbox5 = $row->apply_promo;
					if(($chkbox5=='Yes')?'checked':'')
					 {
					?>
					<div class="form-group">
						<label class="control-label col-md-4"><b>Apply Promo? </b></label>
						<div class="col-md-8">
							<?php 
							
							?>
							<label class="checkbox-inline">
							<input type="radio" class="styled" name="dcapplypromo" id="chkapplypromoyes1" value="Yes" <?php echo ($chkbox5=='Yes')?'checked':'' ?>>YES</label>
							<!--label class="checkbox-inline"><input type="radio" class="styled" name="dcapplypromo" id="chkapplypromono" value="No" <?php echo ($chkbox5=='No')?'checked':'' ?>>NO</label-->
						</div>
					 </div>
					 <div class="form-group">
						<label class="control-label col-md-3"><b>Start Date : </b></label>
						<div class="col-md-3">
							
							<span class="form-control" id="fromDisplay3" name="from"><?php echo $row->start_date; ?></span>
							<input type="hidden" name="applypromo_startdate" value="" id="fromInput3" class="form-control" data-popup="tooltip" title="Apply Promo Start Date(It is required field)" data-placement="bottom">
							<div class="vf-datepicker" id="startDP3"></div>
						</div>
						<label class="control-label col-md-3"><b>End Date : </b></label>
						<div class="col-md-3">
							<span class="form-control" id="toDisplay3"><?php echo $row->end_date; ?></span>
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
							<?php 
							$chkbox6 = $row->ap_discount_unit;
							?>
							<label class="checkbox-inline">
							<input type="radio" class="styled" name="apdiscountunit" value="%" <?php echo ($chkbox6=='%')?'checked':'' ?>>% OR </label>
							<label class="checkbox-inline"><input type="radio" class="styled" name="apdiscountunit" value="$" <?php echo ($chkbox6=='$')?'checked':'' ?> > $ </label>
						</div>
					 </div>
					 <div class="form-group">
                        <label class="control-label col-md-3"><b>Discount Rate : </b></label>
                        <div class="col-md-9">
                           <input name="apdiscountrate" class="form-control" type="text" value="<?php echo $row->ap_discount_rate; ?>">
                           <span class="help-block"></span>
                        </div>
                     </div>
					 <div class="form-group">
						<label class="control-label col-md-4"><b>Apply Promo to Bulk Discount? </b></label>
						<div class="col-md-8">
							<?php 
							$chkbox7 = $row->apply_promo_bilk_discount;
							?>
							<label class="checkbox-inline" style="margin: 0 0 0 10px;">
							<input type="radio" class="styled" name="apbulkdiscount" value="Yes" 
							<?php echo ($chkbox7=='Yes')?'checked':'' ?>>YES</label>
							<label class="checkbox-inline"><input type="radio" class="styled" name="apbulkdiscount" value="No" 
							<?php echo ($chkbox7=='No')?'checked':'' ?>>NO</label>
						</div>
					 </div>
					 <?php 
					 }
					 elseif(($chkbox5=='No')?'checked':'')
					 {
					 ?>
					 <div class="form-group">
						<label class="control-label col-md-3"><b>Apply Promo? </b></label>
						<div class="col-md-9">
							<?php 
							
							?>
							<label class="checkbox-inline">
							<input type="radio" class="styled" name="dcapplypromo" id="chkapplypromoyes1" value="Yes" <?php echo ($chkbox5=='Yes')?'checked':'' ?>>YES</label>
							<label class="checkbox-inline"><input type="radio" class="styled" name="dcapplypromo" id="chkapplypromono" value="No" <?php echo ($chkbox5=='No')?'checked':'' ?>>NO</label>
						</div>
					 </div>
					 <script type="text/javascript">
						$(function () {
							$("input[name='dcapplypromo']").click(function () {
								if ($("#chkapplypromoyes1").is(":checked")) {
									$("#dvapplypromo1").show();
								} else {
									$("#dvapplypromo1").hide();
								}
							});
						});
					</script>
					 <div id="dvapplypromo1" style="display:none;">
					 <div class="form-group">
						<label class="control-label col-md-3"><b>Start Date : </b></label>
						<div class="col-md-3">
							
							<span class="form-control" id="fromDisplay4" name="from">dd/mm/yyyy</span>
							<input type="hidden" name="applypromo_startdate" value="" id="fromInput4" class="form-control" data-popup="tooltip" title="Apply Promo Start Date(It is required field)" data-placement="bottom">
							<div class="vf-datepicker" id="startDP4"></div>
						</div>
						<label class="control-label col-md-3"><b>End Date : </b></label>
						<div class="col-md-3">
							<span class="form-control" id="toDisplay4">dd/mm/yyyy</span>
							<input type="hidden" name="applypromo_enddate" value="" id="toInput4" class="form-control" data-popup="tooltip" title="Apply Promo End Date(It is required field)" data-placement="bottom">
							<div class="vf-datepicker" id="endDP4"></div>
						</div>
						<script>
					var _unavailable = [];
					 var _onrequest = [];
					var dp3 = new VF_datepicker();
					dp3.datepicker({
						'name': 'form4',
						'start': null,
						'end': null,
						'monthNames': ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
						'dayNames': ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
						'startCtrl': $('#fromDisplay4'),
						'endCtrl': $('#toDisplay4'),
						'startDisplay': $('#fromDisplay4'),
						'endDisplay': $('#toDisplay4'),
						'startInput': $('#fromInput4'),
						'endInput': $('#toInput4'),
						'startDP': $('#startDP4'),
						'endDP': $('#endDP4'),
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
                           <input name="apdiscountrate" class="form-control" type="text">
                           <span class="help-block"></span>
                        </div>
                     </div>
					 <div class="form-group">
						<label class="control-label col-md-3"><b>Apply Promo to <br>Bulk Discount? </b></label>
						<div class="col-md-9">
							<label class="checkbox-inline">
							<input type="radio" class="styled" name="apbulkdiscount" value="Yes">YES</label>
							<label class="checkbox-inline"><input type="radio" class="styled" name="apbulkdiscount" value="No">NO</label>
						</div>
					 </div>
					 </div>
<!--****************************************************************************************************************************************************************************************************************************************************************************************************																END APPLY PROMO *****************************************************************************************************************************************************************************************************************************************************************************************************-->					<?php 
					 }
					$chkbox12 = $row->optional_services;
					if(($chkbox12=='Yes')?'checked':'')
					 {
					?>	
					 <div class="form-group">
						<label class="control-label col-md-3"><b>Optional Services : </b></label>
						<div class="col-md-9">
							<label class="checkbox-inline">
							<input type="radio" class="styled" id="chkoptionalserviceyes" value="Yes" name="optionalservices1" <?php echo ($chkbox12=='Yes')?'checked':'' ?>>YES</label>
							<!--label class="checkbox-inline"><input type="radio" class="styled" name="optionalservices" id="chkoptionalserviceno" value="No" <?php echo ($chkbox12=='No')?'checked':'' ?>>NO</label-->
						</div>					
					 </div>
					 <div class="form-group" >
						<label class="control-label col-md-3"></label>
						<div class="col-md-9" style="background:#eeeeee;padding:1%;">
							<label class="control-label col-md-2">Price</label>
							<?php 
								$chkbox33=$row->optional_services_price;
								$arr33=explode(",",$chkbox33);	
								foreach($arr33 as $val33)
								{
							?>
							
							<div class="col-md-3">
								<input type="text" name="optionalservices" value="<?php echo $val33; ?>">
							</div>
							<?php 
								}
							?>
						</div>					
					 </div>
					 <?php 
					 }
					 elseif(($chkbox12=='No')?'checked':'')
					 {
					?>
					<div class="form-group">
						<label class="control-label col-md-3"><b>Optional Services : </b></label>
						<div class="col-md-9">
							<label class="checkbox-inline">
							<input type="radio" class="styled" id="chkoptionalserviceyes" name="optionalservices1" <?php echo ($chkbox12=='Yes')?'checked':'' ?>>YES</label>
							<label class="checkbox-inline">
							<input type="radio" class="styled" name="optionalservices1" value="No" id="chkoptionalserviceno" <?php echo ($chkbox12=='No')?'checked':'' ?>>NO</label>
							<label class="checkbox-inline">
							<div id="dvoptionalservice" style="display: none">
								<div class="field_wrapper1">
									<div>
								Price : <input type="text" name="optionalservices[]" />
								<a href="javascript:void(0);" class="add_button1" title="Add field">
								<img src="<?php echo base_url(); ?>/upload/images/plus.png" style="width:25px; height:25px;"/></a>
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
					<?php
					 }
					 ?>
<!--****************************************************************************************************************************************************************************************************************************************************************************************************																END OPTIONAL SERVICES *****************************************************************************************************************************************************************************************************************************************************************************************************-->
				</fieldset>
				<fieldset title="3">
				<legend class="text-semibold">Accommodation</legend>
					<div class="form-group">
						<label class="control-label col-md-12" style="color: #ff5722;"><b>ACCOMMODATION DETAILS</b></label>
					 </div>
					 <div class="form-group">
                        <label class="control-label col-md-3"><b>Accommodation Name : </b></label>
                        <div class="col-md-9">
                           <input name="accomodation_name" class="form-control" type="text" value="<?php echo $row->accomodation_name; ?>">
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
									<div class="col-md-3"><input name="1person_bed_type" class="form-control" type="text" value="<?php echo $row->oneperson_bed_type; ?>"></div>
									<div class="col-md-3"><input name="2person_bed_type" class="form-control" type="text" value="<?php echo $row->twoperson_bed_type; ?>"></div>
									<div class="col-md-3"><input name="3person_bed_type" class="form-control" type="text" value="<?php echo $row->threeperson_bed_type; ?>"></div>
									<div class="col-md-3"><input name="4person_bed_type" class="form-control" type="text" value="<?php echo $row->fourperson_bed_type; ?>"></div>
								</div>
							</div>
                        </div>
                     </div>
					 <div class="form-group">
						<div class="row">
							<div class="col-md-6">
								<label class="control-label col-md-6"><b>Check In </b></label>
								<div class="col-md-6">
									<input name="checkintime" class="form-control" id="timepicker1" type="text" value="<?php echo $row->checkintime; ?>">
								</div>
							</div>
							<div class="col-md-6">
								<label class="control-label col-md-5"><b>Check Out </b></label>
								<div class="col-md-7">
									<input name="checkouttime" class="form-control" id="timepicker2" type="text" value="<?php echo $row->checkouttime; ?>">
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
                        <div class="col-md-9">
						
							<div class="row">
							<?php 
								$chkbox2 = $row->actype;
								if($chkbox2 =='Capsule' || $chkbox2 =='Chalet' || $chkbox2 =='Hotel')
								{
							?>
							<label class="checkbox-inline"><input type="radio" class="styled" name="actype" value="Capsule" <?php echo ($chkbox2=='Capsule')?'checked':'' ?>>Capsule</label>
							<label class="checkbox-inline"><input type="radio" class="styled" name="actype" value="Chalet" <?php echo ($chkbox2=='Chalet')?'checked':'' ?>>Chalet</label>
							<label class="checkbox-inline"><input type="radio" class="styled" name="actype" value="Hotel" <?php echo ($chkbox2=='Hotel')?'checked':'' ?>>Hotel</label>
							<?php 
								}
								else
								{
							?>
							<label class="checkbox-inline">
							<input type="radio" class="styled" name="actype" value="<?php echo $chkbox2; ?>" 
							<?php echo ($chkbox2==$chkbox2)?'checked':'' ?> ><?php echo $chkbox2; ?></label>
							
							<label class="checkbox-inline">
							<input type="radio" class="styled" name="actype" value="Capsule">Capsule</label>
							<label class="checkbox-inline">
							<input type="radio" class="styled" name="actype" value="Chalet">Chalet</label>
							<label class="checkbox-inline">
							<input type="radio" class="styled" name="actype" value="Hotel">Hotel</label>					
							
							<?php 
								}
							?>
							</div>
                        </div>
                     </div>
					 <div class="form-group">
                        <label class="control-label col-md-3"><b>Amenities</b></label>
                        <div class="col-md-9">
							
							<?php 
								$chkbox0051 = $row->amenities;
								$chkbox005=explode(",",$chkbox0051);

							?>
							<div class="row">
							<label class="checkbox-inline"><input type="checkbox" class="styled" name="amenities[]" value="Wi-fi" 
							<?php if(in_array("Wi-fi",$chkbox005)){echo "checked";}?>>Wi-fi</label>
							<label class="checkbox-inline"><input type="checkbox" class="styled" name="amenities[]" value="Television" 
							<?php if(in_array("Television",$chkbox005)){echo "checked";}?>>Television</label>
							<label class="checkbox-inline"><input type="checkbox" class="styled" name="amenities[]" value="Refrigerator" 
							<?php if(in_array("Refrigerator",$chkbox005)){echo "checked";}?>>Refrigerator</label>
							<label class="checkbox-inline"><input type="checkbox" class="styled" name="amenities[]" value="Toiletries" 
							<?php if(in_array("Toiletries",$chkbox005)){echo "checked";}?>>Toiletries</label>
							<label class="checkbox-inline"><input type="checkbox" class="styled" name="amenities[]" value="Fan" 
							<?php if(in_array("Fan",$chkbox005)){echo "checked";}?>>Fan</label>
							</div>
							<div class="row">
							<label class="checkbox-inline"><input type="checkbox" class="styled" name="amenities[]" value="Air-Cond" 
							<?php if(in_array("Air-Cond",$chkbox005)){echo "checked";}?>>Air-Cond</label>
							<label class="checkbox-inline"><input type="checkbox" class="styled" name="amenities[]" value="Locker" 
							<?php if(in_array("Locker",$chkbox005)){echo "checked";}?>>Locker</label>
							</div>

                        </div>
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
						<?php 
						 $chkbox8=$row->diver_certification;
						 $arr1=explode(",",$chkbox8);						 
						 ?>
							<div class="row">
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="divercertification[]" value="Non-Diver" 
		<?php if(in_array("Non-Diver",$arr1)){echo "checked";}?>>NON-DIVER</label>
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="divercertification[]" value="Owd" 
		<?php if(in_array("Owd",$arr1)){echo "checked";}?>>OWD</label>
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="divercertification[]" value="Aow" 
		<?php if(in_array("Aow",$arr1)){echo "checked";}?>>AOW</label>
							</div>
                        </div>
                     </div>
					 <div class="form-group">
                        <label class="control-label col-md-3"><b>Diver Experience</b></label>
                        <div class="col-md-9">
						<?php 
						 $chkbox9=$row->diver_experience;
						 $arr2=explode(",",$chkbox9);						 
						 ?>
							<div class="row">
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="diverexperience[]" value="Novice" 
		<?php if(in_array("Novice",$arr2)){echo "checked";}?>>NOVICE</label>
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="diverexperience[]" value="Advanced" 
		<?php if(in_array("Advanced",$arr2)){echo "checked";}?>>ADVANCED</label>
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="diverexperience[]" value="Experienced" 
		<?php if(in_array("Experienced",$arr2)){echo "checked";}?>>EXPERIENCED</label>
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="diverexperience[]" value="Non-Diver" 
		<?php if(in_array("Non-Diver",$arr2)){echo "checked";}?>>NON-DIVER</label>
							</div>
                        </div>
                     </div>
					 <div class="form-group">
                        <label class="control-label col-md-3"><b>Diver Specialties</b></label>
                        <div class="col-md-9">
						<?php 
						 $chkbox10=$row->diver_specialties;
						 $arr3=explode(",",$chkbox10);						 
						 ?>
							<div class="row">
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="diverspecialties[]" value="Altitude Diver" 
		<?php if(in_array("Altitude Diver",$arr3)){echo "checked";}?>>ALTITUDE DIVER</label>
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="diverspecialties[]" value="Cavern Diver" 
		<?php if(in_array("Cavern Diver",$arr3)){echo "checked";}?>>CAVERN DIVER</label>
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="diverspecialties[]" value="Deep Diver" 
		<?php if(in_array("Deep Diver",$arr3)){echo "checked";}?>>DEEP DIVER</label>
		<label class="checkbox-inline"><input type="checkbox" class="styled" name="diverspecialties[]" value="Wreck Diver" 
		<?php if(in_array("Wreck Diver",$arr3)){echo "checked";}?>>WRECK DIVER</label>
							</div>
                        </div>
                     </div>
					
					 <div class="form-group">
						<div class="row">
							<div class="col-md-7">
								<label class="control-label col-md-5"><b>Country</b></label>
								<div class="col-md-7">
									<select class="selectboxit selectbox-bootstrap btn-warning enabled btn legitRipple form-control" name="edit_dive_center_country" id="scountry">
										<?php 
										$isp = $row->country;
										$isp_result=$this->db->get_where('tbl_country', array('country_id'=>$isp))->result();
										foreach($isp_result as $isprow)
										{
										?>
										<option value="<?php echo $isprow->country_id; ?>"><?php echo $isprow->country_name; ?></option>
										<?php
										}
										?>
										<option value="">--------------------------------------------------------------------</option>
										<option label="Select Country"> </option>
										<option value="">--------------------------------------------------------------------</option>
										<?php 
											$S_island=$this->db->get('tbl_country')->result_array();
											foreach ($S_island as $si) 
											{
												?>
										   <option value="<?php echo $si['country_id'];?>"><?php echo $si['country_name'];?></option> 
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
									<select class="selectboxit selectbox-bootstrap btn-warning enabled btn legitRipple form-control" name="edit_dive_center_island" id="islands">
										<?php 
										$iep = $row->island;
										$iep_result=$this->db->get_where('tbl_island', array('island_id'=>$iep))->result();
										foreach($iep_result as $ieprow)
										{
										?>
										<option value="<?php echo $ieprow->island_id; ?>"><?php echo $ieprow->island_name; ?></option>
										<?php
										}
										?>
										<option value="">--------------------------------------------------------------------</option>
										<option label="Select Island"></option>
										<option value="">--------------------------------------------------------------------</option>
										
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
									<input name="gpsx" class="form-control" type="text" placeholder="GPS COORDINATES X" value="<?php echo $row->gpsx; ?>">
									<span class="help-block"></span>
								</div>
								<div class="col-md-6">
									 <input name="gpsy" class="form-control" type="text" placeholder="GPS COORDINATES Y" value="<?php echo $row->gpsy; ?>">
									<span class="help-block"></span>
								</div>
							</div>
                        </div>
                     </div>
					 <div class="form-group">
                        <label class="control-label col-md-3"><b>Dive Sites</b></label>
                        <div class="col-md-9">       					   
							<!-- Basic example -->
							<div class="panel panel-flat">
								<div class="panel-body">
									<select multiple="multiple" class="form-control listbox" name="divesites[]">
										<option value="<?php echo $row->dive_sites; ?>"><?php echo $row->dive_sites; ?></option>
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
						<label class="control-label col-md-3"><b>Gallery</b></label>
						<div class="col-md-9">
							<div class="col-md-3">
								<img src="<?php echo base_url(); ?>upload/DCprofile/gallery/<?php echo $row->photo; ?>" width="100px" height="100px;" style="border:1px solid #999999;box-shadow: 1px 1px 7px #999999;">
							</div>
							<div class="col-md-9">
								<div class="row" style="width: 100%; height: 300px; overflow-y: scroll;">
								<?php 
									$data1=$this->db->get('tbl_gallery')->result_array();
									foreach ($data1 as $a1) 
									{?>
										<div class="col-md-3">
											<img src="<?php echo base_url(); ?>upload/DCprofile/gallery/<?php echo $a1['gallery']; ?>" 
											class="img-responsive" style="width:150px;height:100px;">
										   <p align="center"><input type="radio" value="<?php echo $a1['gallery']; ?>" name="gallery"></p>
										</div>								
								   <?php
									}
								  ?>
								</div>
							</div>
						</div>				
					</div>
				</fieldset>

				 <input type="submit" name="Update_DCguidedtours_Data" value="Update" class="btn btn-success stepy-finish">
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
				 
								
				
               <?php } ?>
               <br><br>
            </div>
			 <div class="col-md-1"></div>
			</div>
         </div>
      </div>
      <!-- /traffic sources -->
   </div>
</div>
<!-- /dashboard content -->
   