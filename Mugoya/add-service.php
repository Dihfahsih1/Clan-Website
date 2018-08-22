<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">
        <title> Add Employee </title>
        <link href="css/font-awesome.css" rel="stylesheet">
        <link href="css/fonts.css" rel="stylesheet">
        <link href="css/simple-line-icons.css" rel="stylesheet">
        <!-- pages css  -->
        <link href="css/bootstrap-multiselect.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive-style.css" rel="stylesheet">
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
    <body class="page-header-fixed page-sidebar-closed-hide-logo page-sidebar-closed-hide-logo">
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
											<span class="caption-subject theme-font-color bold uppercase">Add Services</span>
										</div>
										<div class="back-icon pull-right">
											<a href="services-list.php">
												<i class="fa fa-angle-left"></i>
											</a>
										</div>
									</div>
									<div class="portlet-body">
										<div class="col-md-12 col-sm-12 col-xs-12 p-0">
											<div class="add-emp-form">
								            	<form class="services-addform">
							            			<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
							            				<div class="row">
						                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
			                                                  	<label>Select Category</label>
			                                                    <div class="custom-select">
			                                                        <select class="form-control multiselect" placeholder="Select Category" multiple="multiple">
			                                                            <option disabled="">Select Category</option>
			                                                            <option name="nsw">Saloon</option>
			                                                            <option name="vic">spa</option>
			                                                            <option name="qld">Stylist</option>
			                                                            <option name="wa">Ayurveda</option>
			                                                        </select>
			                                                    </div>
			                                                </div>
						                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
						                                        <label>Service Name<small class="manidatory">*</small></label>
						                                        <input type="text" placeholder="Enter Service Name" class="form-control">
						                                    </div>
						                                </div>
						                                <div class="row">
						                                	<div class="form-group col-md-6 col-sm-6 col-xs-12">
			                                                  	<label>Select Time</label>
			                                                    <div class="custom-select">
			                                                        <select class="form-control" placeholder="Select Category">
			                                                            <option disabled="">Select Time</option>
			                                                            <option name="nsw">30 Min</option>
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
						                                        <input type="email" placeholder="Enter Service Cost" class="form-control">
						                                    </div>
						                                </div>
						                                <div class="row">
						                                	<div class="form-group col-md-12 col-sm-12 col-xs-12">
						                                        <label>Employee First Name<small class="manidatory">*</small>
						                                        </label>
						                                        <input type="email" placeholder="Enter First Name" class="form-control">
						                                    </div>
						                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
						                                        <label>Employee Last Name<small class="manidatory">*</small>
						                                        </label>
						                                        <input type="email" placeholder="Enter Last Name" class="form-control">
						                                    </div>
						                                </div>
						                                <div class="row">
						                                	<div class="form-group col-md-12 col-sm-12 col-xs-12">
						                                        <label>
						                                        	Service Description<small class="manidatory">*</small>
						                                        </label>
						                                        <textarea class="cus-textarea form-control" col="8" rows="10" placeholder="message"></textarea>
						                                    </div>
						                                </div>
						                                <div class="modal-footerbtn">
												          	<span class="save-bt">
												          		<a href="services-list.php" class="btn cut-btn">Submit</a>
												          	</span>
											          	</div>
							            			</div>
								            	</form>
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
		    Index.init(); // init index page
		 Tasks.initDashboardWidget(); // init tash dashboard widget  
		});
	</script>
</html>