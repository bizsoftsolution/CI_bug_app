<div class="content-wrapper">
<!-- Content area -->
<div class="content">
<div class="breadcrumb-line breadcrumb-line-component">
   <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
   <ul class="breadcrumb">
      <li><a href=""><i class="icon-home2 position-left"></i> Home</a></li>
      <li><a href="<?php echo base_url();?>Dashboard">Bugs</a></li>
      <li class="active">Bugs</li>
   </ul>
</div>
<br>
<!-- Main charts -->
<div class="row">
   <div class="col-lg-12">
      <!-- Traffic sources -->
      <div class="panel panel-flat">
         <div class="panel-heading">
            <h2 class="panel-title">Bugs</h2>
            <div style="text-align:right;">
               <!--a class="btn bg-violet" href="<?php echo  base_url();?>Package/addNew"><i class="glyphicon glyphicon-plus"></i> Add </a-->
               <a href="<?php echo  base_url();?>Bugs/BugList" class="btn bg-pink"><i class="glyphicon glyphicon-refresh"></i> List</a>
            </div>
            <hr/>
         </div>
         <div class="container-fluid">
            <!-- content Starts Here-->
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-body1">
							<div class="col-md-1">&nbsp;</div>
							<div class="col-md-10">
							   <br>
							   <br>
							   <?php if($message == "FAILED") { ?>
							   <div class="alert alert-danger">
								  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								  <strong>Action Failed !!! </strong>
							   </div>
							   <?php } else if($message == "SUCCESS") {  ?>
							   <div class="alert alert-success">
								  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								  <strong>Success !!! </strong> New data Created successfully
							   </div>
							   <?php } ?>
							   <form name="add" method="POST" action="<?php echo  base_url();?>Bugs/addBug" class="form-horizontal" enctype="multipart/form-data">
								  <div class="form-body">
									 <div class="form-group">
										<label class="control-label col-md-3">Raised Date</label>
										<div class="col-md-9">
										   <input type="date" name="raised_date" class="form-control" >
										</div>
									 </div>
									<div class="form-group">
										<label class="control-label col-md-3">Raised By</label>
										<div class="col-md-9">
										   <input type="text" name="raised_by" class="form-control" >
										</div>
									 </div>
									 <div class="form-group">
										<label class="control-label col-md-3">Name</label>
										<div class="col-md-9">
										   <input type="text" name="name" class="form-control" >
										</div>
									 </div>
									 <div class="form-group">
										<label class="col-lg-3 control-label">Description</label>
										<div class="col-lg-9">
											<textarea rows="5" cols="5" class="form-control" name="description" placeholder="Enter your message here"></textarea>
										</div>
									</div>
									 <div class="form-group">
										<label class="col-lg-3 control-label">Priority</label>
										<div class="col-lg-9">
											<select class="select" name="priority">
													<option value=""> -- Select Priority -- </option>
												<optgroup label="Priority">
													<option value="Low">Low</option>
													<option value="Medium">Medium</option>
													<option value="High">High</option>
												</optgroup>
											</select>
										</div>
									</div>
									<br>
									<div class="form-group">
										<label class="col-lg-3 control-label">Image</label>
										<div class="col-lg-9">
											<input type="file" class="file-styled" name="image">
											<span class="help-block">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
										</div>
									</div>
								  </div>
									 <div class="form-group">
										<label class="col-lg-3 control-label">Module</label>
										<div class="col-lg-9">
											<select class="select" name="module">
													<option value=""> -- Select Module -- </option>
												<optgroup label="Topic">
													<option value="Front End">Front End</option>
													<option value="Back End">Back End</option>
												</optgroup>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-lg-3 control-label">Status</label>
										<div class="col-lg-9">
											<select class="select" name="status">
													<option value=""> -- Select Status -- </option>
												<optgroup label="Topic">
													<option value="On Progress">On Progress</option>
													<option value="Pending">Pending</option>
													<option value="Completed">Completed</option>
												</optgroup>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-lg-3 control-label">Remarks</label>
										<div class="col-lg-9">
											<textarea rows="5" cols="5" class="form-control" name="remarks" placeholder="Enter your remarks here"></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Approved by</label>
										<div class="col-md-9">
										   <input type="text" name="approved_by" class="form-control" >
										</div>
									 </div>
									<div class="form-group">
										<label class="control-label col-md-3">Completed Date</label>
										<div class="col-md-9">
										   <input type="date" name="completed_date" class="form-control" >
										</div>
									 </div>
								  <div style="text-align:center">
									 <input type="submit" name="submit_bug_data" value="Add" class="btn btn-success">
									 <input type="reset" value="Reset" class="btn btn-danger">
								  </div>
							   </form>
								<!--CKeditor-->
								
							   <br><br><br>
							</div>
							<div class="col-md-1">&nbsp;</div>
						</div>
					</div>
				</div>
				
			</div>
            
         </div>
      </div>
      <!-- /traffic sources -->
   </div>
</div>
<!-- /dashboard content -->
