<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- <link rel="icon" href="img/favicon.ico" type="image/x-icon"> -->
        <title> Dashboard </title>
        <link href="css/font-awesome.css" rel="stylesheet">
        <link href="css/fonts.css" rel="stylesheet">
        <link href="css/simple-line-icons.css" rel="stylesheet">
        <!-- pages css  -->
        <link href="css/calender.css" rel="stylesheet">
        <!-- full calender ends -->
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
		<script>
		    jQuery(document).ready(function($) {
		        $('.count').counterUp({
		            delay: 10,
		            time: 1000
		        });
		    });
		</script>
		<style type="text/css">
			.booking-calender #organizerContainer {
			  display: none;
			}
		</style>
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
					<div class="page-wrap margin-top-10">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 p-0">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="dashboard-stat2 bordered">
	                                <div class="display">
	                                    <div class="number">
	                                        <h3 class="font-green-sharp">
	                                            <span class="count" data-counter="counterup" data-value="7000">0</span>
	                                            <small class="font-green-sharp">$</small>
	                                        </h3>
	                                        <small>TOTAL SALES</small>
	                                    </div>
	                                    <div class="icon">
	                                        <i class="icon-basket"></i>
	                                    </div>
	                                </div>
	                                <div class="progress-info">
	                                    <div class="progress">
	                                        <span style="width: 76%;" class="progress-bar progress-bar-success green-sharp">
	                                            <span class="sr-only">76% progress</span>
	                                        </span>
	                                    </div>
	                                    <div class="status">
	                                        <div class="status-title"> progress </div>
	                                        <div class="status-number"> 76% </div>
	                                    </div>
	                                </div>
	                            </div>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="dashboard-stat2">
									<div class="display">
										<div class="number">
											<h3 class="font-red-haze">
												<span class="count" data-counter="counterup" data-value="1390">0</span>
											</h3>
											<small class="">TOTAL BOOKING</small>
										</div>
										<div class="icon">
											<i class="icon-calendar"></i>
										</div>
									</div>
									<div class="progress-info">
										<div class="progress">
											<span style="width: 85%;" class="progress-bar progress-bar-success red-haze">
											<span class="sr-only">85% change</span>
											</span>
										</div>
										<div class="status">
											<div class="status-title">
												 change
											</div>
											<div class="status-number">
												 85%
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 cus-p-l">
                            <div class="calender-section">
                            	<div class="week-sec">
									<div id="calendarContainer"></div>
								</div>
                            </div>
                        </div>
					</div>
					<div class="booking-table-sec">
						<div class="col-md-12 col-sm-12">
							<!-- BEGIN PORTLET-->
							<div class="booking-section">
								<div class="portlet light">
									<div class="portlet-title">
										<div class="caption caption-md">
											<i class="icon-bar-chart theme-font-color hide"></i>
											<span class="caption-subject theme-font-color bold uppercase">Booking Calendar</span>
										</div>
									</div>
									<div class="portlet-body">
										<div class="col-md-12 col-sm-12 col-xs-12 p-0">
											<div class="col-md-12 col-sm-12 col-xs-12 ">
												<div class="booking-calender">
													 <div id="organizerContainer" style="margin-left: 8px;"></div>
													<div class="booking-table">
														<div class="table-responsive">
							                                <table class="table table-bordered">
							                                    <thead>
							                                    	<tr>
							                                    		<div class="cutome-th">
							                                    			<span class="pull-left">
								                                    			<a href="#"><i class="fa fa-angle-left"></i></a>
								                                    		</span>
								                                    			November 10, 2017
							                                    			<span class="pull-right">
								                                    			<a href="#">
								                                    			<i class="fa fa-angle-right"></i>
								                                    			</a>
								                                    		</span>
							                                    		</div>
							                                    	</tr>
							                                        <tr>
							                                            <th>Time</th>
							                                            <th>Customer Name</th>
							                                            <th>Employee Details</th>
							                                            <th>Service Details</th>
							                                            <th>Contact Details</th>
							                                            <th>Status</th>
							                                        </tr>
							                                    </thead>
							                                    <tbody>
							                                        <tr>
							                                            <td>12:00 PM - 12:30 PM</td>
							                                            <td><img class="user-view" src="img/avatar9.jpg">Smith</td>
							                                            <td>Manager</td>
							                                            <td>Hair Cutting</td>
							                                            <td>8009890712</td>
							                                            <td>Pending</td>
							                                        </tr>
							                                        <tr>
							                                            <td>12:30 PM - 1:00 PM</td>
							                                            <td><img class="user-view" src="img/avatar9.jpg">Smith</td>
							                                            <td>Manager</td>
							                                            <td>Hair Cutting</td>
							                                            <td>8009890712</td>
							                                            <td>Pending</td>
							                                        </tr>
							                                        <tr>
							                                            <td>1:00 PM - 1:30 PM</td>
							                                            <td><img class="user-view" src="img/avatar9.jpg">Smith</td>
							                                            <td>Manager</td>
							                                            <td>Hair Cutting</td>
							                                            <td>8009890712</td>
							                                            <td>Pending</td>
							                                        </tr>
							                                        <tr>
							                                            <td>1:30 PM - 2:00 PM</td>
							                                            <td><img class="user-view" src="img/avatar9.jpg">Smith</td>
							                                            <td>Manager</td>
							                                            <td>Hair Cutting</td>
							                                            <td>8009890712</td>
							                                            <td>Pending</td>
							                                        </tr>
							                                    </tbody>
							                                </table>
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
    <?php
        require('include/footer.php');
    ?>	
    </body>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
    <script type="text/javascript" src="js/jquery.counterup.min.js"></script>
	
    <!-- pages js -->
	<script src="js/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
	<script src="js/jquery.slimscroll.min.js" type="text/javascript"></script>
	<!-- END CORE PLUGINS -->
	<script src="js/calender-custom.js" type="text/javascript"></script>
    <!-- full calender js -->
    <script src="js/metronic.js" type="text/javascript"></script>
    <script src="js/layout.js" type="text/javascript"></script>
    <script src="js/demo.js" type="text/javascript"></script>
    <script src="js/tasks.js" type="text/javascript"></script>
    <script>
		jQuery(document).ready(function() {    
		   Metronic.init(); // init metronic core componets
		   Layout.init(); // init layout
		   Demo.init(); // init demo features 
		   /*Index.init(); // init index page*/
		 Tasks.initDashboardWidget(); // init tash dashboard widget  
		});
	</script>
</html>