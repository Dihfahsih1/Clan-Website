<div class="page-sidebar-wrapper">
	<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
	<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
	<div class="page-sidebar navbar-collapse collapse">
		<!-- BEGIN SIDEBAR MENU -->
		<ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
			<li class="start active ">
				<a href="customer-profile.php">
					<i class="icon-user"></i>
					<span class="title">My Profile</span>
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