<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">
        <title> Employee List </title>
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
											<span class="caption-subject theme-font-color bold uppercase">Employee List</span>
										</div>
									</div>
									<div class="portlet-body">
										<div class="col-md-12 col-sm-12 col-xs-12 p-0">
											<div class="emp-list-sec">	
												<div class="add-employee">
													<a href="add-employee.php" class="btn cus-btn">
														<i class="fa fa-plus"></i> Add Employee	
													</a>
												</div>
												<div class="table-responsive">
					                                <table class="table table-bordered">
					                                    <thead>
					                                        <tr class="emp-tr">
					                                            <th>Sr No</th>
					                                            <th>Employee Name</th>
					                                            <th>Employee Description</th>
					                                            <th>Contact Number</th>
					                                            <th>Email</th>
					                                            <th>Services</th>
					                                            <th>Gender</th>
					                                            <th>Action</th>
					                                        </tr>
					                                    </thead>
					                                    <tbody>
					                                        <tr>
					                                            <td>1</td>
					                                            <td>
					                                            	<img class="user-view" src="img/user-pro-1.jpg">
					                                            	John Smith
																</td>
					                                            <td>Lorem Ipsum is dummy text</td>
					                                            <td>+919890723421</td>
					                                            <td>john@gmail.com</td>
					                                            <td>Hair Cutting</td>
					                                            <td>Male</td>
					                                            <td>
					                                            	<ul class="action-icon">
					                                                    <li class="edit-ic">
					                                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#edit-employee">
					                                                            <i class="fa fa-pencil"></i>
					                                                        </a>
					                                                    </li>
					                                                    <li class="view-ic">
					                                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#view-employee">
					                                                            <i class="fa fa-eye"></i>
					                                                        </a>
					                                                    </li>
					                                                    <li class="close-ic">
					                                                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Close">
					                                                            <i class="fa fa-times"></i>
					                                                        </a>
					                                                    </li>
					                                                </ul>
					                                            </td>
					                                        </tr>
					                                        <tr>
					                                            <td>2</td>
					                                            <td>
					                                            	<img class="user-view" src="img/user-pro-3.jpg">
					                                            	Andrea Smith
																</td>
					                                            <td>Lorem Ipsum is dummy text</td>
					                                            <td>+918009890712</td>
					                                            <td>andrea@gmail.com</td>
					                                            <td>Hair Cutting</td>
					                                            <td>Male</td>
					                                            <td>
					                                            	<ul class="action-icon">
					                                                    <li class="edit-ic">
					                                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#edit-employee">
					                                                            <i class="fa fa-pencil"></i>
					                                                        </a>
					                                                    </li>
					                                                    <li class="view-ic">
					                                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#view-employee">
					                                                            <i class="fa fa-eye"></i>
					                                                        </a>
					                                                    </li>
					                                                    <li class="close-ic">
					                                                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Close">
					                                                            <i class="fa fa-times"></i>
					                                                        </a>
					                                                    </li>
					                                                </ul>
					                                            </td>
					                                        </tr>
					                                        <tr>
					                                            <td>3</td>
					                                            <td>
					                                            	<img class="user-view" src="img/user-pro-2.jpg">
					                                            	Alexa Andrzejewski
																</td>
					                                            <td>Lorem Ipsum is dummy text</td>
					                                            <td>+918009890712</td>
					                                            <td>andrea@gmail.com</td>
					                                            <td>Hair Cutting</td>
					                                            <td>Female</td>
					                                            <td>
					                                            	<ul class="action-icon">
					                                                    <li class="edit-ic">
					                                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#edit-employee">
					                                                            <i class="fa fa-pencil"></i>
					                                                        </a>
					                                                    </li>
					                                                    <li class="view-ic">
					                                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#view-employee">
					                                                            <i class="fa fa-eye"></i>
					                                                        </a>
					                                                    </li>
					                                                    <li class="close-ic">
					                                                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Close">
					                                                            <i class="fa fa-times"></i>
					                                                        </a>
					                                                    </li>
					                                                </ul>
					                                            </td>
					                                        </tr>
					                                        <tr>
					                                            <td>4</td>
					                                            <td>
					                                            	<img class="user-view" src="img/user-pro-1.jpg">
					                                            	Andrea Smith
																</td>
					                                            <td>Lorem Ipsum is dummy text</td>
					                                            <td>+918009890712</td>
					                                            <td>andrea@gmail.com</td>
					                                            <td>Hair Cutting</td>
					                                            <td>Male</td>
					                                            <td>
					                                            	<ul class="action-icon">
					                                                    <li class="edit-ic">
					                                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#edit-employee">
					                                                            <i class="fa fa-pencil"></i>
					                                                        </a>
					                                                    </li>
					                                                    <li class="view-ic">
					                                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#view-employee">
					                                                            <i class="fa fa-eye"></i>
					                                                        </a>
					                                                    </li>
					                                                    <li class="close-ic">
					                                                        <a href="javascript:void(0);" data-toggle="tooltip"  title="Close">
					                                                            <i class="fa fa-times"></i>
					                                                        </a>
					                                                    </li>
					                                                </ul>
					                                            </td>
					                                        </tr>
					                                    </tbody>
					                                </table>
												</div>
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
							<!-- END PORTLET-->
						</div>
					</div>
					<!-- END PAGE CONTENT INNER -->
				</div>
			</div>
			<!-- END CONTENT -->
		</div>
		<!-- add-employe modal -->
		<div class="modal fade custom-modal" id="edit-employee" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog modal-lg" role="document">
			    <div class="modal-content">
			        <div class="modal-header">
			            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			            	<span aria-hidden="true">&times;</span>
			            </button>
			            <h4 class="modal-title" id="myModalLabel">Edit Employee Details</h4>
			        </div>
			        <div class="modal-body">
			            <div class="add-emp-form">
			            	<form class="img-responsive">
		            			<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
		            				<div class="row add-emppic">
                                        <div class="col-md-offset-3 col-md-6 col-sm-6 col-xs-12 text-center">
                                            <div class="form-group custom-upload">
                                                <div class="file-previewimg">
                                                    <img src="img/user-pro-1.jpg" class="img-responsive" alt="NO-IMAGES">
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
	                                        <input type="text" value=" John  " class="form-control">
	                                    </div>
	                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
	                                        <label>Employee Last Name<small class="manidatory">*</small></label>
	                                        <input type="text" value="Enter Smith" class="form-control">
	                                    </div>
	                                </div>
	                                <div class="row">
	                                	<div class="form-group col-md-6 col-sm-6 col-xs-12">
	                                        <label>Contact Number<small class="manidatory">*</small></label>
	                                        <input type="text" value="+919890723421" class="form-control">
	                                    </div>
	                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
	                                        <label>Email <small class="manidatory">*</small></label>
	                                        <input type="email" value="john@gmail.com" class="form-control">
	                                    </div>
	                                </div>
	                                <div class="row">
	                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
	                                        <label>Select Gender<small class="manidatory">*</small></label>
                                            <div class="custom-radio">
                                                <div class="radio-inline">
                                                    <input checked="checked" type="radio" id="radio01" name="radio" />
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
                                                    <option name="nsw" selected="selected">Hair</option>
                                                    <option name="vic">Skin</option>
                                                    <option name="qld" selected="selected">Nail Treatment</option>
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
	                                        <textarea class="cus-textarea form-control" col="8" rows="10" name="comment" form="usrform">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
	                                        </textarea>
	                                    </div>
	                                </div>
		            			</div>
					          	<div class="modal-footerbtn">
					          		<span class="back-bt">
						          		<button type="button" class="btn cut-btn" data-dismiss="modal">Close</button>
						          	</span>
						          	<span class="save-bt">
						          		<button type="button" class="btn cut-btn" data-dismiss="modal" aria-label="Close">
						          		 <i class="fa fa-check"></i> Save Change
						          		</button>
						          	</span>
					          	</div>
			            	</form>
			            </div>
			        </div>
			    </div>
			</div>
		</div>
		<!-- ========== view employe list details-->
		<div class="modal fade custom-modal" id="view-employee" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog modal-md" role="document">
			    <div class="modal-content">
			        <div class="modal-header">
			            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			            	<span aria-hidden="true">&times;</span>
			            </button>
			            <h4 class="modal-title" id="myModalLabel">Employee Details</h4>
			        </div>
			        <div class="modal-body">
			            <div class="view-emp-detail">
			            	<form class="img-responsive">
		            			<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
		            				<div class="col-md-12 col-sm-12 col-xs-12 text-center">
		            					<div class="emp-viewimg">
		            						<img src="img/user-pro-1.jpg" class="img-responsive" alt="NO-IMAGES">
		            					</div>
		            				</div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                    	<div class="employe-details">
	                                    	<div class="info-list">
				                          		<dl class="dl-horizontal">
												  <dt>Employee Name</dt>
												  <dd>John Smith</dd>
												  <dt>Email</dt>
												  <dd>johnsmith@gmail.com</dd>
												  <dt>Contact Number</dt>
												  <dd>9089897890</dd>
												  <dt>Gender</dt>
												  <dd>Male</dd>
												  <dt>Saloon Service</dt>
												  <dd>Hair, Skin, Nail Treatment</dd>
												  <dt>Employee Address</dt>
												  <dd>Headquarters 1120 N Street Sacramento 916-654-5266</dd>
												  <dt>Description</dt>
												  <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</dd>
												</dl>
				                          	</div>
	                                    </div>
                                    </div>
		            			</div>
					          	<div class="modal-footerbtn">
						          	<div class="col-md-12 col-sm-12 col-xs-12 text-center">
							          		<button type="button" class="btn cut-btn" data-dismiss="modal" aria-label="Close"> OK
							          		</button>
						          	</div>
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
	<script>
		$(document).ready(function(){
		    $('[data-toggle="tooltip"]').tooltip();   
		});
	</script>
</html>