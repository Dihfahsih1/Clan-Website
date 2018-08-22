<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">
        <title> Transaction Details </title>
        <link href="css/font-awesome.css" rel="stylesheet">
        <link href="css/fonts.css" rel="stylesheet">
        <link href="css/simple-line-icons.css" rel="stylesheet">
        <!-- pages css  -->
        <link href="css/bootstrap-multiselect.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive-style.css" rel="stylesheet">
        <!-- date and time picker css -->
        <link rel="stylesheet" type="text/css" href="css/datepicker3.css"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap-timepicker.min.css"/>
		<link rel="stylesheet" type="text/css" href="css/daterangepicker-bs3.css"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap-datetimepicker.min.css"/>
        <!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
        <link href="css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
		<!-- END PAGE LEVEL PLUGIN STYLES -->
        <!-- dashboard pages -->
        <link href="css/tasks.css" rel="stylesheet" type="text/css"/>
		<link href="css/components-rounded.css" id="style_components" rel="stylesheet" type="text/css"/>
		<link href="css/plugins.css" rel="stylesheet" type="text/css"/>
		<link href="css/layout.css" rel="stylesheet" type="text/css"/>
		<link href="css/light.css" rel="stylesheet" type="text/css" id="style_color"/>
		<link href="css/custom.css" rel="stylesheet" type="text/css"/>
		<!-- script -->
		<script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
    </head>
    <body class="page-header-fixed page-sidebar-closed-hide-logo page-sidebar-closed-hide-logo ">
		<!-- BEGIN HEADER -->
		<?php
			require('include/dashboard-header.php');
		?>
		<!-- END HEADER -->
		<div class="clearfix">
		</div>
		<!-- BEGIN CONTAINER -->
		<div class="page-container">
			<!-- BEGIN SIDEBAR -->
				<?php
					require('include/dashboard-sidebar.php');
				?>
			<!-- END SIDEBAR -->
			<!-- BEGIN CONTENT -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<ul class="page-breadcrumb breadcrumb hide">
						<li>
							<a href="#">Home</a><i class="fa fa-circle"></i>
						</li>
						<li class="active">
							 Dashboard
						</li>
					</ul>
					<!-- BEGIN PAGE CONTENT INNER -->
					<div class="emp-list-sec">
						<div class="col-md-12 col-sm-12 p-0">
							<!-- BEGIN PORTLET-->
							<div class="booking-section">
								<div class="portlet light">
									<div class="portlet-title">
										<div class="caption caption-md">
											<i class="icon-bar-chart theme-font-color hide"></i>
											<span class="caption-subject theme-font-color bold uppercase">Transaction Details</span>
										</div>
									</div>
									<div class="portlet-body services-list">
										<div class="col-md-12 col-sm-12 col-xs-12 p-0">
											<div class="search-main-sec">
												<div class="col-md-12 col-sm-12 col-xs-12">
													<form class="search-input">
														<div class="form-group col-md-6 col-sm-6 col-xs-12 pull-left p-0">
																<div class="col-md-2 col-sm-2 col-xs-12">
																	<label style="position:relative;top:7px;">Search:</label>
																</div>
																<div class=" col-md-4 col-sm-4 col-xs-12 p-0">
									                                  <input type="text" placeholder="Search.." class="form-control">                               
									                            </div>	
														</div>
														<div class="col-md-6 col-sm-6 col-xs-12 pull-right">
															<div class="wrap-date-to">
																<div class="col-md-5 col-sm-5 col-xs-12 p-0">
																	<div class="form-group">
										                                <input type="text" placeholder="Start Date " class="form-control  date-picker"> 
										                            </div>	
																</div>	
																<div class="col-md-2 col-sm-2 col-xs-12">
																	<span class="to-span">To</span>
																</div>
																<div class="col-md-5 col-sm-5 col-xs-12 p-0">
																	<div class="form-group">
										                                <input type="text" placeholder="End Date" class="form-control date-picker"> 
										                            </div>	
																</div>
															</div>
														</div>
													</form>
												</div>
											</div>	
											<div class="add-emp-form">
								            	<div class="table-responsive">
					                                <table class="table table-bordered">
					                                    <thead>
					                                        <tr class="emp-tr">
					                                        	<th>Sr No</th>
					                                            <th>Transaction ID</th>
					                                            <th>Payments Source</th>
					                                            <th>Amount</th>
					                                            <th>Status</th>
					                                        </tr>
					                                    </thead>
					                                    <tbody>
					                                        <tr>
					                                        	<td>1</td>
					                                            <td>98976</td>
					                                            <td>Credit Card</td>
					                                            <td>$500</td>
					                                            <td>
					                                            	Completed
					                                            </td>
					                                        </tr>
					                                        <tr>
					                                            <td>2</td>	
					                                            <td>68976</td>
					                                            <td>Credit Card</td>
					                                            <td>$300</td>
					                                            <td>
					                                            	Pending
					                                            </td>
					                                        </tr>
					                                        <tr>
					                                            <td>3</td>
					                                            <td>89809</td>
					                                            <td>Paypal</td>
					                                            <td>$800</td>
					                                            <td>
					                                            	Completed
					                                            </td>
					                                        </tr>
					                                        <tr>
					                                            <td>4</td>
					                                            <td>89809</td>
					                                            <td>Paypal</td>
					                                            <td>$800</td>
					                                            <td>
					                                            	Completed
					                                            </td>
					                                        </tr>
					                                    </tbody>
					                                </table>
					                                <div class="table-pagination">
														<div class="pagination">
														  <a href="#"><i class="fa fa-angle-left"></i></a>
														  <a href="#">1</a>
														  <a href="#" class="active">2</a>
														  <a href="#">3</a>
														  <a href="#"><i class="fa fa-angle-right"></i></a>
														</div>
													</div>
					                            </div>
								            </div>
										</div>
									</div>
								</div>
							</div>
							<!-- END PORTLET-->
						</div>
					</div>
					<!-- END PAGE CONTENT INNER -->
				</div>
			</div>
			<!-- END CONTENT -->
		</div>
		<div class="modal fade custom-modal" id="edit-servicelist" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog modal-md" role="document">
			    <div class="modal-content">
			        <div class="modal-header">
			            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			            	<span aria-hidden="true">&times;</span>
			            </button>
			            <h4 class="modal-title" id="myModalLabel">Edit Service List</h4>
			        </div>
			        <div class="modal-body">
			            <div class="add-emp-form">
			            	<form class="img-responsive">
		            			<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
		            				<div class="row">
	                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                          	<label>Select Category</label>
                                            <div class="custom-select">
                                                <select class="form-control multiselect" placeholder="Select Category" multiple="multiple">
                                                    <option disabled="">Select Category</option>
                                                    <option name="nsw" selected="">Saloon</option>
                                                    <option name="vic">spa</option>
                                                    <option name="qld">Stylist</option>
                                                    <option name="wa">Ayurveda</option>
                                                </select>
                                            </div>
                                        </div>
	                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
	                                        <label>Service Name<small class="manidatory">*</small></label>
	                                        <input type="text" value="Skin Treatment" class="form-control">
	                                    </div>
	                                </div>
	                                <div class="row">
	                                	<div class="form-group col-md-6 col-sm-6 col-xs-12">
                                          	<label>Select Time <small class="manidatory">*</small></label>
                                            <div class="custom-select">
                                                <select class="form-control" placeholder="Select Category">
                                                    <option disabled="">Select Time</option>
                                                    <option name="nsw" selected="">30 Min</option>
                                                    <option name="vic">1 Hr</option>
                                                    <option name="qld">1 hr 30 Min</option>
                                                    <option name="wa">2 hr</option>
                                                    <option name="wa">2 hr 30 Min</option>
                                                </select>
                                                <span class="caret"></span>
                                            </div>
                                        </div>
	                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
	                                        <label>Service Cost <small class="manidatory">*</small></label>
	                                        <input  type="email" value="$200" class="form-control">
	                                    </div>
	                                </div>
	                                <div class="row">
	                                	<div class="form-group col-md-12 col-sm-12 col-xs-12">
	                                        <label>Employee First Name<small class="manidatory">*</small>
	                                        </label>
	                                        <input type="email" value="John" class="form-control">
	                                    </div>
	                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
	                                        <label>Employee Last Name<small class="manidatory">*</small>
	                                        </label>
	                                        <input type="email" value="Smith" class="form-control">
	                                    </div>
	                                </div>
	                                <div class="row">
	                                	<div class="form-group col-md-12 col-sm-12 col-xs-12">
	                                        <label>
	                                        Service Description<small class="manidatory">*</small>
	                                        </label>
	                                        <textarea class="cus-textarea form-control" col="8" rows="10" Placeholder="Lorem ipsum is a dummy text"></textarea>
	                                    </div>
	                                </div>
		            			</div>
					          	<div class="modal-footerbtn">
						          	<span class="save-bt">
						          		<button type="button" class="btn cut-btn" data-dismiss="modal" aria-label="Close">
						          		 Save
						          		</button>
						          	</span>
					          	</div>
			            	</form>
			            </div>
			        </div>
			    </div>
			</div>
		</div>
		<?php
	        require('include/footer.php');
	    ?>
    </body>	
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-multiselect.js"></script>
    <script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
    <script type="text/javascript" src="js/jquery.counterup.min.js"></script>
	
    <!-- pages js -->
	<script src="js/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
	<script src="js/jquery.slimscroll.min.js" type="text/javascript"></script>
	<!-- END CORE PLUGINS -->
    <!-- full calender js -->
    <script src="js/metronic.js" type="text/javascript"></script>
    <script src="js/layout.js" type="text/javascript"></script>
    <script src="js/demo.js" type="text/javascript"></script>
    <script src="js/tasks.js" type="text/javascript"></script>
    <!-- datepicker -->
    <script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="js/bootstrap-timepicker.min.js"></script>
    <script src="js/components-pickers.js"></script>

    	<script type="text/javascript">
	        $(document).ready(function() {
	            $('.multiselect').multiselect();
	        });
	    </script>
      <script>
		jQuery(document).ready(function() {    
		   Metronic.init(); // init metronic core componets
		   Layout.init(); // init layout
		   Demo.init(); // init demo features 
		   Tasks.initDashboardWidget(); // init tash dashboard widget  
		   ComponentsPickers.init();
		});
	</script>
</html>