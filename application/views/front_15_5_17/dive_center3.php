<!DOCTYPE html>
<html lang="en">

<head>
    <title>Scubbi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/assert/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Include Required Prerequisites -->

	 <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/style.css'); ?>">
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/assert/js/moment.min.js"></script>


    <!-- Include Date Range Picker -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/assert/js/daterangepicker.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/frontend/assert/js/daterangepicker.css" />
    <link type="text/css" href="<?php echo base_url(); ?>assets/frontend/assert/gentleSelect/jquery-gentleSelect.css" rel="stylesheet" />

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/assert/gentleSelect/jquery-gentleSelect.js"></script>
    <style>
        .carousel-control {
            padding-top: 10%;
            width: 5%;
        }
        td {
            padding: 20px;
        }
		ul {
  list-style-type: none;
}
.fixed {
    position: relative;
	background-color:#f5f5f5;
	padding:15px;
	color:#000;
	height:auto;
	overflow:scroll;
	height:250px;
	
}
@media (min-width: 768px) {
    .fixed {
        position: fixed;
		background-color:#f5f5f5;
	padding:15px;
	color:#000;
	height:auto;
	overflow:scroll;
	height:250px;
    }
}
    </style>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#myCarousel').carousel({
                interval: 10000
            })
            $('#example1').gentleSelect({
                columns: 3,
                itemWidth: 100,
                title: "Select a Country",
                hideOnMouseOut: true
            });
            $('#example2').gentleSelect({
                columns: 3,
                itemWidth: 100,
                title: "Select a Island",
                hideOnMouseOut: true
            });


            var start = moment();
            var mindate = moment();



            var end = moment().add(2, 'days');

            function cb(start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            }

            $('input[name="daterange"]').daterangepicker({
                startDate: start,
                endDate: end,
                minDate: mindate,


                locale: {
                    format: 'DD-MM-YYYY'
                }
            });
        });
    </script>
</head>

<body>

    <div class="container-fluid">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-1">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#"> <img src="<?php echo base_url(); ?>assets/images/logo-new-chrcle-small.jpg" class="img-responsive" alt="logo" style="height:60px;margin-top:10px;">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-5">


                        <div class="text-center1" style="padding-top:25px;font-weight:20px;">
                            <b style="font-size:18px;">Malaysia > Tioman Island</b>
                            <span style="float:right;">
							<form class="form-inline">
								<div class="form-group">
									<select id='' class="form-control">
										<option value="1">MYR</option>
										<option value="2">AFN</option>
										<option value="3">ARS</option>
										<option value="4">BRL</option>
										<option value="5">EUR</option>
										<option value="6">JPY</option>
										<option value="7">KES</option>
										<option value="8">KPW</option>
										<option value="9">KRW</option>	
									</select> 
								</div>	
								<div class="form-group">
									<select id='' class="form-control">
										<option value="1">English</option>
										<option value="2">Chinese</option>
										<option value="3">Spanish</option>
										<option value="4">Hindi</option>
										<option value="5">Arabic</option>
										<option value="6">Portuguese</option>
										<option value="7">Bengali</option>
										<option value="8">Russian</option>
										<option value="9">Japanese</option>	
									</select> 
								</div>	
							</form>
						 
						 </span>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#">Become a Partner</a>
                                </li>
                                <li><a href="#">Help</a>
                                </li>
                                <li><a href="#">Sign Up</a>
                                </li>
                                <li><a href="#">Log In</a>
                                </li>

                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                    </div>

                </div>

            </div>
            <!-- /.container-fluid -->
        </nav>
        <hr>
    </div>
    <!-- End Slider -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
			<?php 
			foreach($divecenterpage as $divecenterval)
			{
			?>
                <div class="well">
                    <div id="myCarousel" class="carousel slide">

                        <!-- Carousel items -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <a href="#x"><img src="assert/images/1s.jpg" alt="Image" class="img-responsive" style="height:200px;width:250px;">
                                        </a>
                                    </div>
                                    <div class="col-sm-3">
                                        <a href="#x"><img src="assert/images/2s.jpg" alt="Image" class="img-responsive" style="height:200px;width:250px;">
                                        </a>
                                    </div>
                                    <div class="col-sm-3">
                                        <a href="#x"><img src="assert/images/3s.jpg" alt="Image" class="img-responsive" style="height:200px;width:250px;">
                                        </a>
                                    </div>
                                    <div class="col-sm-3">
                                        <a href="#x"><img src="assert/images/4s.jpg" alt="Image" class="img-responsive" style="height:200px;width:250px;">
                                        </a>
                                    </div>
                                </div>
                                <!--/row-->
                            </div>
                            <!--/item-->
                            <div class="item">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <a href="#x"><img src="assert/images/1s.jpg" alt="Image" class="img-responsive" style="height:200px;width:250px;">
                                        </a>
                                    </div>
                                    <div class="col-sm-3">
                                        <a href="#x"><img src="assert/images/2s.jpg" alt="Image" class="img-responsive" style="height:200px;width:250px;">
                                        </a>
                                    </div>
                                    <div class="col-sm-3">
                                        <a href="#x"><img src="assert/images/3s.jpg" alt="Image" class="img-responsive" style="height:200px;width:250px;">
                                        </a>
                                    </div>
                                    <div class="col-sm-3">
                                        <a href="#x"><img src="assert/images/4s.jpg" alt="Image" class="img-responsive" style="height:200px;width:250px;">
                                        </a>
                                    </div>
                                </div>
                                <!--/row-->
                            </div>
                            <!--/item-->
                            <div class="item">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <a href="#x"><img src="assert/images/1s.jpg" alt="Image" class="img-responsive" style="height:200px;width:250px;">
                                        </a>
                                    </div>
                                    <div class="col-sm-3">
                                        <a href="#x"><img src="assert/images/2s.jpg" alt="Image" class="img-responsive" style="height:200px;width:250px;">
                                        </a>
                                    </div>
                                    <div class="col-sm-3">
                                        <a href="#x"><img src="assert/images/3s.jpg" alt="Image" class="img-responsive" style="height:200px;width:250px;">
                                        </a>
                                    </div>
                                    <div class="col-sm-3">
                                        <a href="#x"><img src="assert/images/4s.jpg" alt="Image" class="img-responsive" style="height:200px;width:250px;">
                                        </a>
                                    </div>
                                </div>
                                <!--/row-->
                            </div>
                            <!--/item-->
                        </div>
                        <!--/carousel-inner--><a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>

                        <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
                    </div>
                    <!--/myCarousel-->
                </div>
                <!--/well-->
                <div class="row">

                    <form class="form-inline" role="form">
                        <span style="font-size:15px;"><b><?php echo $divecenterval->dcname; ?></b></span>
                        <div class="input-group col-md-3">
                            <input type="text" name="no_of_persons" value="" class="form-control" placeholder="Enter No of Persons" />
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        </div>
                        <div class="input-group">
                            <input type="text" name="daterange" value="" class="form-control" />
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        </div>
                        <a href="search_result.html" class="btn btn-danger"> Search </a>
                        <a href="" class="btn btn-success">Contact Dive Center </a>
                    </form>
                </div>
                <hr>
                <div class="panel with-nav-tabs panel-default">
                    <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#General" data-toggle="tab">General Info</a>
                            </li>
                            <li><a href="#Leisure" data-toggle="tab">Leisure Dive</a>
                            </li>
                            <li><a href="#Courses" data-toggle="tab">Courses & Specialties</a>
                            </li>
                            <li><a href="#Packages" data-toggle="tab">Packages offer</a>
                            </li>
                            <li><a href="#Review" data-toggle="tab">Review</a>
                            </li>

                        </ul>
                    </div>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="General">
                                <div class="row" style="padding-bottom: 8%;">
                                    <div class="col-md-4">
                                        <img src="<?php echo base_url(); ?>upload/DCprofile/<?php echo $divecenterval->dcimage; ?>" class="img-responsive" />
                                    </div>
                                    <div class="col-md-8" style="text-align: justify;font-family: initial;font-size: 17px;LINE-HEIGHT: 1.8;word-spacing: 1px;">
                                        <?php echo $divecenterval->dcdescription; ?>
                                    </div>
                                </div>
                                <div class="separator"></div>
                                <div class="row">
                                    <table class="table" style="text-align: justify;font-family: initial;font-size: 15px;LINE-HEIGHT: 1.8;word-spacing: 1px;">
                                        <tr>
                                            <td>Address</td>
                                            <td><?php echo $divecenterval->dcaddress; ?>, Tioman Island</td>
                                        </tr>
                                        <tr>
                                            <td>Affiliation</td>
                                            <td>PADI</td>
                                        </tr>
                                        <tr>
                                            <td>Membership</td>
                                            <td><?php echo str_replace(',',', ', $divecenterval->dcaffiliation); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Languages</td>
                                            <td style="text-transform:capitalize"><?php echo ucfirst(strtolower(str_replace(',',', ', $divecenterval->dclanguage))); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Infrastructure</td>
                                            <td style="text-transform:capitalize"><?php echo ucfirst(strtolower(str_replace(',',' | ', $divecenterval->dcfacilities))); ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Leisure">
                                <div class="panel-group" id="accordion">
									<?php 
									$lesuiredive = $divecenterval->user_id;
									$data121=$this->db->get_where('tbl_dcleisure', array('user_id'=>$lesuiredive))->result();
									foreach($data121 as $cval21)
									{ 
									?>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">

                                            <h4 class="panel-title">
										  <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><?php echo $cval21->product_name; ?>&nbsp;&nbsp;<i class="fa fa-caret-down"></i></a>
										  <a  class="col-md-offset-2" data-toggle="collapse" data-parent="#accordion"  href="#collapse1" style="color:#00db00;font-weight:bold;">AVAILABLE:15</a>
										  <a  style="float:right;font-size: 16px;" data-toggle="collapse" data-parent="#accordion" href="#collapse1"><b>MYR 120</b> per dive</a>
										</h4>


                                        </div>
                                        <div id="collapse1" class="panel-collapse collapse ">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <h5><b>Boat Night Dive</b></h5>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="select-filters">
                                                            <select name="person" id="person" class="form-control1">
                                                                <option value="" selected="">10 Dives</option>
                                                                <option value="2">8 Dives</option>
                                                                <option value="3">12 Dives</option>
                                                                <option value="4">6 Dives</option>
                                                            </select>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-3">
                                                        <b>MYR 120</b>
                                                    </div>
                                                    <div class="col-md-4" style="float:right;">
                                                        <a type="button" class="btn btn-danger">Add to My Dive cart</a>
                                                    </div>

                                                </div>
                                                <hr>
                                                <p>It is a maximum 2 dive per day trip(local boat) for max 10 min to reach the 2 different dives sites.Wrecks Renggis and Tiger Reef. This Product is for Certified Drivers and the price</p>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <b>Included</b>
                                                        <ul>
                                                            <li>Diving</li>
                                                            <li>pick up & drop off at the hotel</li>
                                                            <li>water between the dives</li>
                                                            <li>Lunch</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <b>Optional Services</b>
                                                        <ul>
                                                            <li>Eqipment Rent <b>MYR 20</b>&nbsp;
                                                                <input type="checkbox" class="form-control1" />
                                                            </li>
                                                            <li>Dinner <b>MYR 20</b>&nbsp;
                                                                <input type="checkbox" class="form-control1" />
                                                            </li>
                                                            <li>Insurance<b>MYR 20</b>&nbsp;
                                                                <input type="checkbox" class="form-control1" />
                                                            </li>

                                                        </ul>

                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <b>BOOKING POLICY</b>
                                                        <p>full payment is required upon the booking via scubbi website</p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <b>CANCELLATION POLICY</b>
                                                        <p>If you cancel 1 month before the trip,only bank charges fee is require to pay.</p>
                                                        <p>If you cancel 7 days before the trip, a cancellation fee of MYR30 is charge.</p>
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
                            <div class="tab-pane fade" id="Courses">
							                                <div class="panel-group" id="accordion">
									<?php 
									$coursedive = $divecenterval->user_id;
									$data122=$this->db->get_where('tbl_dccourses', array('user_id'=>$coursedive))->result();
									foreach($data122 as $cval22)
									{ 
									?>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">

                                            <h4 class="panel-title">
										  <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><?php echo $cval22->product_name; ?>&nbsp;&nbsp;<i class="fa fa-caret-down"></i></a>
										  <a  class="col-md-offset-2" data-toggle="collapse" data-parent="#accordion"  href="#collapse1" style="color:#00db00;font-weight:bold;">AVAILABLE:15</a>
										  <a  style="float:right;font-size: 16px;" data-toggle="collapse" data-parent="#accordion" href="#collapse1"><b>MYR 120</b> per dive</a>
										</h4>


                                        </div>
                                        <div id="collapse1" class="panel-collapse collapse ">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <h5><b>Boat Night Dive</b></h5>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="select-filters">
                                                            <select name="person" id="person" class="form-control1">
                                                                <option value="" selected="">10 Dives</option>
                                                                <option value="2">8 Dives</option>
                                                                <option value="3">12 Dives</option>
                                                                <option value="4">6 Dives</option>
                                                            </select>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-3">
                                                        <b>MYR 120</b>
                                                    </div>
                                                    <div class="col-md-4" style="float:right;">
                                                        <a type="button" class="btn btn-danger">Add to My Dive cart</a>
                                                    </div>

                                                </div>
                                                <hr>
                                                <p>It is a maximum 2 dive per day trip(local boat) for max 10 min to reach the 2 different dives sites.Wrecks Renggis and Tiger Reef. This Product is for Certified Drivers and the price</p>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <b>Included</b>
                                                        <ul>
                                                            <li>Diving</li>
                                                            <li>pick up & drop off at the hotel</li>
                                                            <li>water between the dives</li>
                                                            <li>Lunch</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <b>Optional Services</b>
                                                        <ul>
                                                            <li>Eqipment Rent <b>MYR 20</b>&nbsp;
                                                                <input type="checkbox" class="form-control1" />
                                                            </li>
                                                            <li>Dinner <b>MYR 20</b>&nbsp;
                                                                <input type="checkbox" class="form-control1" />
                                                            </li>
                                                            <li>Insurance<b>MYR 20</b>&nbsp;
                                                                <input type="checkbox" class="form-control1" />
                                                            </li>

                                                        </ul>

                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <b>BOOKING POLICY</b>
                                                        <p>full payment is required upon the booking via scubbi website</p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <b>CANCELLATION POLICY</b>
                                                        <p>If you cancel 1 month before the trip,only bank charges fee is require to pay.</p>
                                                        <p>If you cancel 7 days before the trip, a cancellation fee of MYR30 is charge.</p>
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
                            <div class="tab-pane fade" id="Packages">
                                <div class="panel-group" id="accordion">
								<?php 
									$packagedive = $divecenterval->user_id;
									$data123=$this->db->get_where('tbl_dcpackage', array('user_id'=>$packagedive))->result();
									foreach($data123 as $cval23)
									{ 
									?>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">

                                            <h4 class="panel-title">
										  <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><?php echo $cval23->product_name; ?>&nbsp;&nbsp;<i class="fa fa-caret-down"></i></a>
										  <a  class="col-md-offset-2" data-toggle="collapse" data-parent="#accordion"  href="#collapse1" style="color:#00db00;font-weight:bold;">AVAILABLE:15</a>
										  <a  style="float:right;font-size: 16px;" data-toggle="collapse" data-parent="#accordion" href="#collapse1"><b>MYR 120</b> per dive</a>
										</h4>


                                        </div>
                                        <div id="collapse1" class="panel-collapse collapse ">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <h5><b>Boat Night Dive</b></h5>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="select-filters">
                                                            <select name="person" id="person" class="form-control1">
                                                                <option value="" selected="">10 Dives</option>
                                                                <option value="2">8 Dives</option>
                                                                <option value="3">12 Dives</option>
                                                                <option value="4">6 Dives</option>
                                                            </select>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-3">
                                                        <b>MYR 120</b>
                                                    </div>
                                                    <div class="col-md-4" style="float:right;">
                                                        <a type="button" class="btn btn-danger">Add to My Dive cart</a>
                                                    </div>

                                                </div>
                                                <hr>
                                                <p>It is a maximum 2 dive per day trip(local boat) for max 10 min to reach the 2 different dives sites.Wrecks Renggis and Tiger Reef. This Product is for Certified Drivers and the price</p>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <b>Included</b>
                                                        <ul>
                                                            <li>Diving</li>
                                                            <li>pick up & drop off at the hotel</li>
                                                            <li>water between the dives</li>
                                                            <li>Lunch</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <b>Optional Services</b>
                                                        <ul>
                                                            <li>Eqipment Rent <b>MYR 20</b>&nbsp;
                                                                <input type="checkbox" class="form-control1" />
                                                            </li>
                                                            <li>Dinner <b>MYR 20</b>&nbsp;
                                                                <input type="checkbox" class="form-control1" />
                                                            </li>
                                                            <li>Insurance<b>MYR 20</b>&nbsp;
                                                                <input type="checkbox" class="form-control1" />
                                                            </li>

                                                        </ul>

                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <b>BOOKING POLICY</b>
                                                        <p>full payment is required upon the booking via scubbi website</p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <b>CANCELLATION POLICY</b>
                                                        <p>If you cancel 1 month before the trip,only bank charges fee is require to pay.</p>
                                                        <p>If you cancel 7 days before the trip, a cancellation fee of MYR30 is charge.</p>
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
                            <div class="tab-pane fade" id="Review">
								<div class="row">
									<div class="col-md-3">
									<h2>245 Reviews</h2>
									</div>
									<div class="col-md-2">
										<ul>
											<li>Boat & Equipments</li>
											<li>Dive Sites</li>
											<li>Price</li>
											<li>Instructor</li>
											<li>Safety</li>
										</ul>

									</div>
									<div class="col-md-3">
									<ul>
										<li><div class="ratting" style="color:#fec107;">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half-o"></i>
											<i class="fa fa-star-o"></i>
											</div>
										</li>
										<li><div class="ratting" style="color:#fec107;">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half-o"></i>
											<i class="fa fa-star-o"></i>
											</div>
										</li>
											<li><div class="ratting" style="color:#fec107;">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half-o"></i>
											<i class="fa fa-star-o"></i>
											</div>
										</li>
										<li><div class="ratting" style="color:#fec107;">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half-o"></i>
											<i class="fa fa-star-o"></i>
											</div>
										</li>
										<li><div class="ratting" style="color:#fec107;">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half-o"></i>
											<i class="fa fa-star-o"></i>
											</div>
										</li>															
										
									</ul>

									</div>
									<div class="col-md-4" style="color:#fec107;font-size:20px;">
										<b>Average Rate 4.7 <i class="fa fa-star"></i></b>
									</div>

								
								</div>
								<hr>
								<div class="row">
									<div class="col-md-2">
										<img src="assert/images/avtar-2.jpg" class="img-responsive img-circle" >
									</div>
									<div class="col-md-6">
										This place is located on older area of the town. There is night market every night where the hotel is located. place is within walkin to distance to some of the local food hunts or shopping malls.
										</ul>
										
									</div>
									<div class="col-md-4">
										on March 2016
										<br><span style="color:#fec107;font-size:40px;">3.7<i class="fa fa-star"></i></span>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-2">
										<img src="assert/images/avtar-2.jpg" class="img-responsive img-circle" >
									</div>
									<div class="col-md-6">
										This place is located on older area of the town. There is night market every night where the hotel is located. place is within walkin to distance to some of the local food hunts or shopping malls.
										</ul>
										
									</div>
									<div class="col-md-4">
										on March 2016
										<br><span style="color:#fec107;font-size:40px;">3.7<i class="fa fa-star"></i></span>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-2">
										<img src="assert/images/avtar-2.jpg" class="img-responsive img-circle" >
									</div>
									<div class="col-md-6">
										This place is located on older area of the town. There is night market every night where the hotel is located. place is within walkin to distance to some of the local food hunts or shopping malls.
										</ul>
										
									</div>
									<div class="col-md-4">
										on March 2016
										<br><span style="color:#fec107;font-size:40px;">3.7<i class="fa fa-star"></i></span>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-2">
										<img src="assert/images/avtar-2.jpg" class="img-responsive img-circle" >
									</div>
									<div class="col-md-6">
										This place is located on older area of the town. There is night market every night where the hotel is located. place is within walkin to distance to some of the local food hunts or shopping malls.
										</ul>
										
									</div>
									<div class="col-md-4">
										on March 2016
										<br><span style="color:#fec107;font-size:40px;">3.7<i class="fa fa-star"></i></span>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-2">
										<img src="assert/images/avtar-2.jpg" class="img-responsive img-circle" >
									</div>
									<div class="col-md-6">
										This place is located on older area of the town. There is night market every night where the hotel is located. place is within walkin to distance to some of the local food hunts or shopping malls.
										</ul>
										
									</div>
									<div class="col-md-4">
										on March 2016
										<br><span style="color:#fec107;font-size:40px;">3.7<i class="fa fa-star"></i></span>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-2">
										<img src="assert/images/avtar-2.jpg" class="img-responsive img-circle" >
									</div>
									<div class="col-md-6">
										This place is located on older area of the town. There is night market every night where the hotel is located. place is within walkin to distance to some of the local food hunts or shopping malls.
										</ul>
										
									</div>
									<div class="col-md-4">
										on March 2016
										<br><span style="color:#fec107;font-size:40px;">3.7<i class="fa fa-star"></i></span>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-2">
										<img src="assert/images/avtar-2.jpg" class="img-responsive img-circle" >
									</div>
									<div class="col-md-6">
										This place is located on older area of the town. There is night market every night where the hotel is located. place is within walkin to distance to some of the local food hunts or shopping malls.
										</ul>
										
									</div>
									<div class="col-md-4">
										on March 2016
										<br><span style="color:#fec107;font-size:40px;">3.7<i class="fa fa-star"></i></span>
									</div>
								</div>
								<hr>
								
								
							</div>
                        </div>
                    </div>
                </div>



			<?php 
			}
			?>

            </div>
			
			
            <div class="col-md-4">
			
			<?php 
				foreach($divecenterpage as $get_dc)
				{
				$get_id = $get_dc->user_id;
				$data=$this->db->get_where('tbl_dcprofile', array('user_id' => $get_id));
				//$this->db->get('tbl_dcprofile')->result_array(); 
					foreach ($data->result_array() as $a) {
					$markers[] = array(
					'lat' => $a['dcgps_x'],
					'lng' => $a['dcgps_y'],
					'description' => $a['dcname'] 
					);
				}
				}
				?>
				

		<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBLorhG6yww2PIYnW-C_d-D2MTmoZfa33w" type="text/javascript"></script>
		<script type="text/javascript">// <![CDATA[
		var markers = <?php echo json_encode( $markers ); ?>;
		window.onload = function () {
		var mapOptions = {
		center: new google.maps.LatLng(markers[0].lat, markers[0].lng),
		zoom: 10,
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
		title: data.title,
		//label: data.label
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
		<div id="dvMap" style="width: 100%; height: 850px;"></div>
			
              <div class="fixed affix-top" >
				<h4 class="text-center">My Dive Cart</h4>
				<div class="separator1"></div>
					<table class="table">
						<tr>
							<td>Boat night Dive 3 trips</td>
							<td>MYR 120</td>
							<td><a class=""><i class="fa fa-remove"></i></a></td>
						</tr>
						<tr>
							<td>Boat night Dive 3 trips</td>
							<td>MYR 120</td>
							<td><a class=""><i class="fa fa-remove"></i></a></td>
						</tr>
						<tr>
							<td>Boat night Dive 3 trips</td>
							<td>MYR 120</td>
							<td><a class=""><i class="fa fa-remove"></i></a></td>
						</tr>
						<tr>
							<td>Boat night Dive 3 trips</td>
							<td>MYR 120</td>
							<td><a class=""><i class="fa fa-remove"></i></a></td>
						</tr>
						
						
					</table>
					
					<button class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModalHorizontal">Checkout</button>
					<button class="btn btn-danger">Empty the carts</button>
				</div>
            </div>
			 <div class="modal fade" id="myModal" role="dialog">
				<div class="modal-dialog">
				
				  <!-- Modal content-->
				  <div class="modal-content">
					<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal">&times;</button>
					 
					</div>
					<div class="modal fade" id="myModalHorizontal" tabindex="-1" role="dialog"  aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<!-- Modal Header -->
								<div class="modal-header">
									<button type="button" class="close" 
									   data-dismiss="modal">
										   <span aria-hidden="true">&times;</span>
										   <span class="sr-only">Close</span>
									</button>
									<h4 class="modal-title" id="myModalLabel">
										Modal title
									</h4>
								</div>
								
								<!-- Modal Body -->
								<div class="modal-body">
									
									<form class="form-horizontal" role="form">
									  <div class="form-group">
										<label  class="col-sm-2 control-label"
												  for="inputEmail3">Email</label>
										<div class="col-sm-10">
											<input type="email" class="form-control" 
											id="inputEmail3" placeholder="Email"/>
										</div>
									  </div>
									  <div class="form-group">
										<label class="col-sm-2 control-label"
											  for="inputPassword3" >Password</label>
										<div class="col-sm-10">
											<input type="password" class="form-control"
												id="inputPassword3" placeholder="Password"/>
										</div>
									  </div>
									  <div class="form-group">
										<div class="col-sm-offset-2 col-sm-10">
										  <div class="checkbox">
											<label>
												<input type="checkbox"/> Remember me
											</label>
										  </div>
										</div>
									  </div>
									  <div class="form-group">
										<div class="col-sm-offset-2 col-sm-10">
										  <button type="submit" class="btn btn-default">Sign in</button>
										</div>
									  </div>
									</form>
									
									
									
									
									
									
								</div>
								
								<!-- Modal Footer -->
								<div class="modal-footer">
									<button type="button" class="btn btn-default"
											data-dismiss="modal">
												Close
									</button>
									<button type="button" class="btn btn-primary">
										Save changes
									</button>
								</div>
							</div>
						</div>
					</div>


					<div class="modal-footer">
					  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				  </div>
				  
				</div>
			  </div>
			
        </div>
    </div>
    <hr>
    <!-- footer starts-->



    <!--  end  Special offer -->


</body>

</html>