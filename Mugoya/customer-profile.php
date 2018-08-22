<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">
        <title> Customer Profile </title>
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
    <body class="page-header-fixed page-sidebar-closed-hide-logo page-sidebar-closed-hide-logo ">
		<!-- BEGIN HEADER -->
		<?php
			require('include/customer-dashboard-header.php');
		?>
		<!-- END HEADER -->
		<div class="clearfix">
		</div>
		<!-- BEGIN CONTAINER -->
		<div class="page-container">
			<!-- BEGIN SIDEBAR -->
				<?php
					require('include/customer-dashboard-sidebar.php');
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
							<div class="booking-section"><!-- like that wrap class -->
								<div class="portlet light">
									<div class="portlet-title">
										<div class="caption caption-md">
											<i class="icon-bar-chart theme-font-color hide"></i>
											<span class="caption-subject theme-font-color bold uppercase">Clan Member</span>
										</div>
									</div>
									<div class="portlet-body services-list">
										<div class="col-md-12 col-sm-12 col-xs-12 p-0">
											<div class="otr-bg-dshbrd">
							                    <h4 class="title-form-head" >Personal Details <a class="edit-btn" href="#">
							                    <span id="show1" class="fa fa-pencil-square-o" ></span>
							                    </a></h4>
							                   <form class="profile-form customer-profil">
							                   		<div class="first-secwrap">
							                   			<div id="row1">
										                    <div class="col-md-9 col-sm-9 col-xs-12 ">
									                          	<div class="info-list">
									                          		<dl class="dl-horizontal">
																	  <dt>Name</dt>
																	  <dd>Williams</dd>
																	  <dt>Email</dt>
																	  <dd>williams@gmail.com</dd>
																	  <dt>Contact Number</dt>
																	  <dd>9089897890</dd>
																	  <dt>City</dt>
																	  <dd>New York City</dd>
																	</dl>
									                          	</div>
										                    </div>
									                      	<div class="col-md-3 col-sm-3 col-xs-12">
										                        <div class="wrap-div outer-img">
										                            <img src="img/user-pro-1.jpg" class="img-responsive">
										                        </div>
									                      	</div>
									                    </div>
									                    <div id="row2">
										                    <div class="col-md-9 col-md-9 col-xs-12">
										                    	<div class="row">
						                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
						                                                <label>Enter First Name</label>
						                                                <input type="text" placeholder="Enter First Name" class="form-control">
						                                            </div>
						                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
						                                                <label>Enter Last Name</label>
						                                                <input type="text" placeholder="Enter Last Name" class="form-control">
						                                            </div>
						                                        </div>
						                                        <div class="row">
						                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
						                                                <label>Enter Email</label>
						                                                <input type="text" placeholder="Enter Email" class="form-control">
						                                            </div>
						                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
						                                                <label>Enter Contact Number</label>
						                                                <input type="text" placeholder="Enter Contact Number" class="form-control">
						                                            </div>
						                                        </div>
						                                        <div class="row">
						                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
						                                                <label>Enter Your Location of Residence</label>
						                                                <input type="text" placeholder="Enter Your City" class="form-control">
						                                            </div>
						                                        </div>                                  
										                        <div class="row">
									                            	<ul class="update-form-ul">
									                            		<li>
									                            			<button id="update1" type="button" class="btn cut-btn">Update</button>
									                            		</li>
									                            		<li>
									                            			<a href="javascript:void(0);" class="btn cut-btn">Cancel</a>
									                            		</li>
									                            	</ul>
										                        </div>
										                    </div>
									                      	<div class="col-md-3 col-sm-3 col-xs-12">
										                        <div class="wrap-div outer-img">
										                            <img src="img/user-pro-1.jpg" class="img-responsive">
										                            <span class="upload-img">
										                            <button class="btn cut-btn" type="submit">Change Profile</button>
										                            <input class="profile-btn cut-btn" name="image" type="file">
										                            </span>
										                        </div>
										                    </div>
									                   </div>
							                   		</div>
								                   <h4 class="title-form-head" id="change">Change password<a class="edit-btn" href="javascript:;">
								                    <span class="fa fa-pencil-square-o" id="show3"></span>
								                    </a></h4>
									                <div id="row5">
									                      <div class="col-md-9">
									                         <span class="edited-value">Click on edit icon to change your password.</span>
									                      </div>
									                </div>
								                   	<div id="row6">
									                    <div class="col-md-9 col-sm-9 col-xs-12">
									                        <div class="row">
									                            <div class="form-group col-sm-9 col-md-9 col-xs-12">
									                            	<label>Current Password</label>
									                                <input type="password" placeholder="Current password" class="form-control">
									                            </div>
									                        </div>
									                        <div class="row">
									                            <div class="form-group col-sm-9 col-md-9 col-xs-12">
									                               	<label>New Password</label>
									                                  <input type="password" placeholder="New password" class="form-control">                         
									                            </div>
									                        </div>
									                        <div class="row">
									                            <div class="form-group col-sm-9 col-md-9 col-xs-12">
									                            	  <label>Confirm Password</label>
									                                  <input type="password" placeholder="Confirm password" class="form-control">                               
									                            </div>
									                        </div>
									                        <div class="row">
									                        	<div class="form-group col-sm-9 col-md-9 col-xs-12">
									                            	<ul class="update-form-ul">
									                            		<li>
									                            			<button type="button" class="btn cut-btn">Update</button>
									                            		</li>
									                            		<li>
									                            			<a href="javascript:void(0);" class="btn cut-btn">Cancel</a>
									                            		</li>
									                            	</ul>
									                            </div>
									                        </div>
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
	    <script type="text/javascript">
	    	$("#row2").hide();
		  	$(document).ready(function(){
			    $("#show1").click(function(){
			        $("#row1").hide(600);
			        $("#row2").show(600);
			    });
			});
		</script>
		  <script type="text/javascript">
		  $("#row6").hide();
		  $(document).ready(function(){
		    $("#show3").click(function(){
		        $("#row5").hide(500);
		        $("#row6").show(500);
		    });
		  });
		</script>
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