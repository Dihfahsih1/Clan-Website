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
											<span class="caption-subject theme-font-color bold uppercase">Add Employee</span>
										</div>
									</div>
									<div class="portlet-body">
										<div class="col-md-12 col-sm-12 col-xs-12 p-0">
											<div class="add-emp-form">
								            	<form class="add-empform">
							            			<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
							            				<div class="row add-emppic">
					                                        <div class="col-md-offset-3 col-md-6 col-sm-6 col-xs-12 text-center">
					                                            <div class="form-group custom-upload">
					                                                <div class="file-previewimg">
					                                                    <img src="img/no-img.png" class="img-responsive" alt="NO-IMAGES">
					                                                </div>
					                                                <div class="profile-upload">
					                                                    <div class="input-btn">
					                                                        <input type="file" />
					                                                        <button class="btn cus-btn"> 
					                                                        <i class="fa fa-file-image-o"></i> Employee Image</button>
					                                                    </div>
					                                                </div>
					                                            </div>
					                                        </div>
					                                    </div>
							            				<div class="row">
						                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
						                                        <label>Employee First Name <small class="manidatory">*</small></label>
						                                        <input type="text" placeholder="Enter First Name" class="form-control">
						                                    </div>
						                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
						                                        <label>Employee Last Name<small class="manidatory">*</small></label>
						                                        <input type="text" placeholder="Enter Last Name" class="form-control">
						                                    </div>
						                                </div>
						                                <div class="row">
						                                	<div class="form-group col-md-6 col-sm-6 col-xs-12">
						                                        <label>Contact Number<small class="manidatory">*</small></label>
						                                        <input type="text" placeholder="Enter Number" class="form-control">
						                                    </div>
						                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
						                                        <label>Email <small class="manidatory">*</small></label>
						                                        <input type="email" placeholder="Enter Employee Email" class="form-control">
						                                    </div>
						                                </div>
						                                <div class="row">
						                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
						                                        <label>Select Gender<small class="manidatory">*</small></label>
					                                            <div class="custom-radio">
					                                                <div class="radio-inline">
					                                                    <input type="radio" id="radio01" name="radio" />
					                                                    <label for="radio01">
					                                                        <span><span></span></span>Male
					                                                    </label>
					                                                </div>
					                                                <div class="radio-inline">
					                                                    <input type="radio" id="radio02" name="radio" />
					                                                    <label for="radio02">
					                                                        <span><span></span></span>Female
					                                                    </label>
					                                                </div>
					                                            </div>
						                                    </div>
						                                     <div class="form-group col-md-6 col-sm-6 col-xs-12">
						                                        <label>Select Employee Services<small class="manidatory">*</small></label>
						                                        <div class="custom-select">
					                                                <select class="form-control multiselect" placeholder="Select Services" multiple="multiple">
					                                                    <option disabled="">Select Services</option>
					                                                    <option name="nsw">Hair</option>
					                                                    <option name="vic">Skin</option>
					                                                    <option name="qld">Nail Treatment</option>
					                                                    <option name="qld">Essentials</option>
					                                                    <option name="qld">Innovations</option>
					                                                </select>
					                                            </div>
						                                    </div>
						                                </div>
						                                <div class="row">
						                                	<div class="form-group col-md-12 col-sm-12 col-xs-12">
						                                        <label>
						                                        	Enter Employee Details <small class="manidatory">*</small>
						                                        </label>
						                                        <textarea class="cus-textarea form-control" col="8" rows="10"></textarea>
						                                    </div>
						                                </div>
						                                <div class="row">
						                                	<div class="form-group col-md-12 col-sm-12 col-xs-12">
						                                		<label>
						                                        	Upload Employee Id <small class="manidatory">*</small>
						                                        </label>
						                                		<div class="col-md-12 col-sm-12 col-xs-12">
						                                			<div class="row add-emppic">
							                                            <div class="form-group custom-upload">
							                                                <div class="file-previewimg">
							                                                    <img src="img/no-img.png" class="img-responsive" alt="NO-IMAGES">
							                                                </div>
							                                                <div class="profile-upload">
							                                                    <div class="input-btn">
							                                                        <input type="file" />
							                                                        <button class="btn cus-btn"> 
							                                                        <i class="fa fa-address-card""></i> Upload Id</button>
							                                                    </div>
							                                                </div>
							                                            </div>
								                                    </div>
						                                		</div>
						                                	</div>
						                                </div>
						                                <div class="modal-footerbtn">
											          		<span class="back-bt">
												          		<button type="button" class="btn cut-btn" data-dismiss="modal">Cancel</button>
												          	</span>
												          	<span class="save-bt">
												          		<!-- <button type="button" class="btn cut-btn">Save</button> -->
												          		<a href="saloon-employee-list.php" class="btn cut-btn">Save</a>
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