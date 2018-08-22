<div class="page-sidebar-wrapper">
	<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
	<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
	<div class="page-sidebar navbar-collapse collapse">
		<!-- BEGIN SIDEBAR MENU -->
		<ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
			<li class="start active ">
				<a href="saloon-dashboard.php">
					<i class="icon-home"></i>
					<span class="title">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="javascript:;">
					<i class="icon-user"></i>
					<span class="title">Employee Management</span>
					<span class="arrow "></span>
				</a>
				<ul class="sub-menu">
					<li>
						<a href="saloon-employee-list.php">Employee List</a>
					</li>
					<li>
						<a href="add-employee.php">Add Employee</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="javascript:;">
					<i class="icon-user"></i>
					<span class="title">Customer Management</span>
					<span class="arrow "></span>
				</a>
				<ul class="sub-menu">
					<li>
						<a href="customer-list.php">Customer List</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="javascript:;">
					<i class="icon-calendar"></i>
					<span class="title">Booking Management</span>
					<span class="arrow "></span>
				</a>
				<ul class="sub-menu">
					<li>
						<a href="booking-page1.php">Booking List</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="javascript:;">
					<i class="icon-calendar"></i>
					<span class="title">Services Management</span>
					<span class="arrow "></span>
				</a>
				<ul class="sub-menu">
					<li>
						<a href="services-list.php">Services List</a>
					</li>
					<li>
						<a href="add-service.php">Add Services</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="javascript:;">
					<i class="icon-credit-card"></i>
					<span class="title">Payments</span>
					<span class="arrow "></span>
				</a>
				<ul class="sub-menu">
					<li>
						<a href="transaction-details.php">Transaction Details</a>
					</li>
					<li>
						<a href="#">Payments</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="javascript:;">
					<i class="icon-doc"></i>
					<span class="title">FAQs</span>
				</a>
			</li>
		</ul>
		<!-- END SIDEBAR MENU -->
	</div>
</div>
<script type="text/javascript">
    var url = window.location;
	$('ul.page-sidebar-menu a').filter(function() {
	    return this.href == url;
	}).parent('li').addClass('active');
</script>