<div class="content-wrapper">
<!-- Content area -->
<div class="content">
<div class="breadcrumb-line breadcrumb-line-component">
   <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
   <ul class="breadcrumb">
      <li><a href=""><i class="icon-home2 position-left"></i> Home</a></li>
      <li><a href="">Dashboard</a></li>
      <li class="active">Booking Policies</li>
   </ul>
</div>
<br>
<!-- Main charts -->
<div class="row">
   <div class="col-lg-12">
      <!-- Traffic sources -->
      <div class="panel panel-flat">
         <div class="panel-heading">
            <h2 class="panel-title">Booking Policies</h2>
            <div style="text-align:right;">
               <a class="btn bg-violet" href="<?php echo  base_url();?>DCpolicies/addNew"><i class="glyphicon glyphicon-plus"></i> Add </a>
               <a href="<?php echo  base_url();?>DCpolicies/DCpolicieslist" class="btn bg-pink"><i class="glyphicon glyphicon-refresh"></i> List</a>
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
				<form name="add" method="POST" action="<?php echo  base_url();?>DCpolicies/edit/<?php echo $row->id; ?>" class="form-horizontal form-validate-jquery" 
			   enctype="multipart/form-data">
                  <div class="form-body">
					<div class="form-group">
                        <label class="control-label col-md-3"><b>Booking Policy Name</b> <strong style="color:red;">*</strong></label>
                        <div class="col-md-9">
                           <input name="name" class="form-control" type="text" value="<?php echo $row->booking_name; ?>">
                           <span class="help-block"></span>
                        </div>
                     </div>
					 <div class="form-group">
						<label class="control-label col-md-3"><b> Deposit Required </b></label>
						 <div class="col-md-9">
						<?php 
							$chkbox7 = $row->deposit_required;
						?>
						<label class="checkbox-inline">
						<input type="radio" class="styled" name="depositrequired" value="Yes" <?php echo ($chkbox7=='Yes')?'checked':'' ?>>YES</label>
						<label class="checkbox-inline"><input type="radio" class="styled" name="depositrequired" value="No" <?php echo ($chkbox7=='No')?'checked':'' ?>>NO</label>
						</div>
					 </div>
					  <?php 
					 //echo $abcd;
					 $chkbox5 = $row->booking_deposit;
					 if(($chkbox5=='Partial')?'checked':'')
					 {
					 ?>
					 <div class="form-group">
						<label class="control-label col-md-3"><b>Amount of Deposit Required Upon Booking</b></label>
						<div class="col-md-9">
							<!--label class="checkbox-inline">
							<input type="radio" class="styled" name="booking_deposit" id="chkapplypromono" value="Full Prepayment" <?php echo ($chkbox5=='Full Prepayment')?'checked':'' ?>>Full Prepayment</label-->
							<label class="checkbox-inline"><input type="radio" class="styled" name="booking_deposit" id="chkapplypromoyes" value="Partial" <?php echo ($chkbox5=='Partial')?'checked':'' ?>>Partial</label>
						</div>
					 </div>

					 <div class="form-group">

						<div class="col-md-12" style="background:whitesmoke;">
							<div class="row">
								<?php 
								 $chk003=$row->booking_amount;
								 $arr003=explode(",",$chk003);
								 $chk004=$row->booking_total_product;
								 $arr004=explode(",",$chk004);
								 $chk005=$row->booking_days;
								 $arr005=explode(",",$chk005);
								 $chk006=$row->booking_period;
								 $arr006=explode(",",$chk006);
								 
								foreach($arr003 as $val003)
								{
								?>
								<div class="col-md-12">
									<div class="col-md-6">								
										<input type="text" name="booking_amount[]" class="form-control" value="<?php echo $val003; ?>">
									</div>
									<div class="col-md-6">
										<label class="control-label col-md-12"> of </label>
									</div>
								</div>
								
								<?php 	
								}
								 //$chk004=$row->booking_total_product;
								 //$arr004=explode(",",$chk004);
								foreach($arr004 as $val004)
								{
								 ?>
								<div class="col-md-12">
									<div class="col-md-6">
										<select name="booking_total_product[]" class="form-control">
											<option value="<?php echo $val004; ?>"><?php echo $val004; ?></option>
											<option> % of Product Total</option>
										</select>
									</div>
									<div class="col-md-6">
										 <label class="control-label col-md-12">Will Be Charged</label>
									</div>
								</div>
								
								<?php 
								} 
								 //$chk005=$row->booking_days;
								 //$arr005=explode(",",$chk005);
								foreach($arr005 as $val005)
								{
								?>
								<div class="col-md-12">
									<div class="col-md-6">
										<label class="control-label col-md-12">The Amount Will Be Charged</label>
									</div>
									<div class="col-md-6">
										<input type="text" name="booking_days[]" class="form-control" value="<?php echo $val005; ?>">
									</div>
								</div>
								<?php 
								}
								 //$chk006=$row->booking_period;
								 //$arr006=explode(",",$chk006);
								foreach($arr006 as $val006)
								{
								 ?>
								<div class="col-md-12">
									<div class="col-md-6">
										<label class="control-label col-md-12">Days</label>
									</div>
									<div class="col-md-6">
										<select name="booking_period[]" class="form-control">
											<option value="<?php echo $val006; ?>"><?php echo $val006; ?></option>
											<option>After Booking Date</option>
										</select>
									</div>
								</div>
								<?php 
								}
								?>
							</div>
							<div class="row">&nbsp;</div>
	
						</div>

					 </div>
					<?php 
					 }
					 elseif(($chkbox5=='Full Prepayment')?'checked':'')
					 {
					?> 
					<div class="form-group">
						<label class="control-label col-md-3"><b>Amount of Deposit Required Upon Booking</b></label>
						<div class="col-md-9">
							<label class="checkbox-inline">
							<input type="radio" class="styled" name="booking_deposit" id="chkapplypromono" value="Full Prepayment">Full Prepayment</label>
							<label class="checkbox-inline"><input type="radio" class="styled" name="booking_deposit" id="chkapplypromoyes" value="Partial" >Partial</label>
						</div>
					 </div>
					 <div id="dvapplypromo" style="display:none;">
					 <div class="form-group">
						<div class="field_wrapper">
								<div>
						<div class="col-md-12" style="background:whitesmoke;">
							<div class="row">
								<div class="col-md-12">
									<div class="col-md-6">
										<input type="text" name="booking_amount[]" class="form-control">
									</div>
									<div class="col-md-6">
										<label class="control-label col-md-12"><b>of</b></label>
									</div>
								</div>
								<div class="col-md-12">
									<div class="col-md-6">
										<select name="booking_total_product[]" class="form-control">
											<option>% of Product Total</option>
										</select>
									</div>
									<div class="col-md-6">
										 <label class="control-label col-md-12"><b>Will Be Charged</b></label>
									</div>
								</div>
								<div class="col-md-12">
									<div class="col-md-6">
										<label class="control-label col-md-12"><b>The Amount Will Be Charged</b></label>
									</div>
									<div class="col-md-6">
										<input type="text" name="booking_days[]" class="form-control">
									</div>
								</div>
								<div class="col-md-12">
									<div class="col-md-6">
										<label class="control-label col-md-12"><b>Days</b></label>
									</div>
									<div class="col-md-6">
										<select name="booking_period[]" class="form-control">
											<option>After Booking Date</option>
										</select>
									</div>
								</div>
								
							</div>
							<div class="row">&nbsp;</div>

							<div class="row text-right">
								<a href="javascript:void(0);" class="add_button btn btn-default" title="Add field">
								<img src="<?php echo base_url(); ?>/upload/images/plus.png" style="width:25px; height:25px;"/> Click Here Addmore</a>
							</div>	
						</div>
						</div>
							</div>
					 </div>
					 </div>
					 <script type="text/javascript">
						$(function () {
							$("input[name='booking_deposit']").click(function () {
								if ($("#chkapplypromoyes").is(":checked")) {
									$("#dvapplypromo").show();
								} else {
									$("#dvapplypromo").hide();
								}
							});
						});
						
						$(document).ready(function(){
						var maxField = 10; //Input fields increment limitation
						var addButton = $('.add_button'); //Add button selector
						var wrapper = $('.field_wrapper'); //Input field wrapper
						var fieldHTML = '<div><div class="col-md-12" style="background:whitesmoke;border:1px solid gray;padding:5px;margin:10px 0px;"><input type="text" name="booking_amount[]"><label > of </label><select name="booking_total_product[]"><option>% of Product Total </option></select><label > Will Be Charged </label><br><label>The Amount Will Be Charged</label><input type="text" name="booking_days[]" ><label>Days</label><select name="booking_period[]" ><option>After Booking Date</option></select><a href="javascript:void(0);" class="remove_button btn btn-default" title="Remove field"><img src="<?php echo base_url(); ?>/upload/images/minus.png" style="width:25px; height:25px;"/>Click Here Remove</a></div></div>'; //New input field html 
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
					
					<?php 
					 }
					?>
                  </div>

                  <div style="text-align:center">
                     <input type="submit" name="update_DCpolicies_data" value="Update" class="btn btn-success">
                     <input type="reset" value="Reset" class="btn btn-danger">
                  </div>
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
   