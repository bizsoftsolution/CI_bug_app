<div class="content-wrapper">
<!-- Content area -->
<div class="content">
<div class="breadcrumb-line breadcrumb-line-component">
   <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
   <ul class="breadcrumb">
      <li><a href=""><i class="icon-home2 position-left"></i> Home</a></li>
      <li><a href="">Dashboard</a></li>
      <li class="active">Dive Center Leisure</li>
   </ul>
</div>
<br>
<!-- Main charts -->
<div class="row">
   <div class="col-lg-12">
      <!-- Traffic sources -->
      <div class="panel panel-flat">
         <div class="panel-heading">
            <h2 class="panel-title">Dive Center Leisure</h2>
            <div style="text-align:right;">
               <!--a class="btn bg-violet" href="<?php echo  base_url();?>DCleisure/addNew"><i class="glyphicon glyphicon-plus"></i> Add </a-->
               <a href="<?php echo  base_url();?>DCleisure/DCleisurelist" class="btn bg-pink"><i class="glyphicon glyphicon-refresh"></i> List</a>
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
				<form name="add" method="POST" action="<?php echo  base_url();?>DCleisure/edit/<?php echo $row->id; ?>" class="form-horizontal form-validate-jquery stepy-clickable" 
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
						    <textarea name="description" class="form-control" id="editor-full1" required="required"><?php echo $row->product_description; ?></textarea>
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

					  <div class="form-group">
                        <label class="control-label col-md-3"><b>OR SELECT FROM A LIST OF COMMON OPTIONS </b></label>
                        <div class="col-md-9">
							<div class="row">
							<?php 
						 $chkbox=$row->common_options;
						 $arr=explode(",",$chkbox);						 
						 ?>
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
								<label class="control-label col-md-4"><b>Product Keyword:</b></label>
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
								if($chkbox2 =='Dive' || $chkbox2 =='Pax' || $chkbox2 =='Trip')
								{
							?>
							<label class="checkbox-inline">
							<input type="radio" class="styled" name="productunits" value="Dive"
							<?php echo ($chkbox2=='Dive')?'checked':'' ?>>Dive</label>
							<label class="checkbox-inline">
							<input type="radio" class="styled" name="productunits" value="Pax"
							<?php echo ($chkbox2=='Pax')?'checked':'' ?>>Pax</label>
							<label class="checkbox-inline">
							<input type="radio" class="styled" name="productunits" value="Trip"
							<?php echo ($chkbox2=='Trip')?'checked':'' ?>>Trip</label>						
							<?php 
								}
								else
								{
							?>
							<label class="checkbox-inline">
							<input type="radio" class="styled" name="productunits" value="<?php echo $chkbox2; ?>"
							<?php echo ($chkbox2==$chkbox2)?'checked':'' ?> ><?php echo $chkbox2; ?></label>
							<label class="checkbox-inline" style="margin: 0 0 0 10px;">
							<input type="radio" class="styled" name="productunits" value="Dive" >Dive</label>
							<label class="checkbox-inline">
							<input type="radio" class="styled" name="productunits" value="Pax" >Pax</label>
							<label class="checkbox-inline">
							<input type="radio" class="styled" name="productunits" value="Trip" >Trip</label>
							<?php 
								}
							?>						
						</div>
					 </div>
					 
					  <div class="form-group">
                        <label class="control-label col-md-3"><b>Max Dive/ Day </b></label>
                        <div class="col-md-9">
                           <input name="maxdiveday" class="form-control" type="text" value="<?php echo $row->max_dive_day; ?>">
                           <span class="help-block"></span>
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
                        <label class="control-label col-md-3"><b>Product Price : MYR</b></label>
                        <div class="col-md-9">
                           <input name="product_price" class="form-control" type="text" value="<?php echo $row->product_price; ?>">
                           <span class="help-block"></span>
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
						<label class="control-label col-md-3"><b>Apply Promo? </b></label>
						<div class="col-md-9">
							<?php 
							
							?>
							<label class="checkbox-inline">
							<input type="radio" class="styled" name="dcapplypromo" id="chkapplypromoyes1" value="Yes" <?php echo ($chkbox5=='Yes')?'checked':'' ?>>YES</label>
							<!--label class="checkbox-inline"><input type="radio" class="styled" name="dcapplypromo" id="chkapplypromono" value="No" <?php echo ($chkbox5=='No')?'checked':'' ?>>NO</label-->
						</div>
					 </div>
					 <div class="form-group">
						<?php 
							
							$start_dd = $row->start_date;
							$start_dd_range =date("d/m/Y", strtotime($start_dd));
							$end_dd = $row->end_date;
							$end_dd_range =date("d/m/Y", strtotime($end_dd));
						?>
						<label class="control-label col-md-3"><b> Start Date : </b></label>
						<div class="col-md-3">
							<span class="form-control" id="fromDisplay" name="from"><?php echo $start_dd_range; ?></span>
							<input type="hidden" name="applypromo_startdate" value="" id="fromInput" class="form-control">
							<div class="vf-datepicker" id="startDP"></div>
						</div>
						<label class="control-label col-md-3"><b>End Date : </b></label>
						<div class="col-md-3">
							<span class="form-control" id="toDisplay"><?php echo $end_dd_range; ?></span>
							<input type="hidden" name="applypromo_enddate" value="" id="toInput" class="form-control">
							<div class="vf-datepicker" id="endDP"></div>
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
							'displayFrom': function(from, to){
								console.log(['from display', from, to]);
							},
							'displayTo': function(from, to){
								console.log(['to display', from, to]);
							},
							'fromChosen': function(from, to){
								console.log(['from chosen', from, to]);
							},
							'toChosen': function(from, to){
								console.log(['to chosen', from, to]);
							},
							'hideFrom': function(from, to){
								console.log(['from hide', from, to]);
							},
							'hideTo': function(from, to){
								console.log(['to hide', from, to]);
							},
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
							
							<span class="form-control" id="fromDisplay" name="from">dd/mm/yyyy</span>
							<input type="hidden" name="applypromo_startdate" value="" id="fromInput" class="form-control">
							<div class="vf-datepicker" id="startDP"></div>
												
							<!--input type="date" name="applypromo_startdate" data-popup="tooltip" title="Start Date(It is required field)" data-placement="bottom"-->
						</div>
						<label class="control-label col-md-3"><b>End Date : </b></label>
						<div class="col-md-3">
							<span class="form-control" id="toDisplay">dd/mm/yyyy</span>
							<input type="hidden" name="applypromo_enddate" value="" id="toInput" class="form-control">
							<div class="vf-datepicker" id="endDP"></div>
							
							<!--input type="date" name="applypromo_enddate" data-popup="tooltip" title="End Date(It is required field)" data-placement="bottom"-->
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
							'displayFrom': function(from, to){
								console.log(['from display', from, to]);
							},
							'displayTo': function(from, to){
								console.log(['to display', from, to]);
							},
							'fromChosen': function(from, to){
								console.log(['from chosen', from, to]);
							},
							'toChosen': function(from, to){
								console.log(['to chosen', from, to]);
							},
							'hideFrom': function(from, to){
								console.log(['from hide', from, to]);
							},
							'hideTo': function(from, to){
								console.log(['to hide', from, to]);
							},
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
				</fieldset>
				<input type="submit" name="update_DCleisure_data" value="Update" class="btn btn-success stepy-finish">
                  <!--div style="text-align:center">
                     <input type="submit" name="update_DCleisure_data" value="Update" class="btn btn-success">
                     <input type="reset" value="Reset" class="btn btn-danger">
                  </div-->
               </form>				
				
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
   