<header class="header-sec page-header">
 <div class="mugoya1" style="float:right; width: 15%;  padding-top: 9px; ">

<?php

require('include/customer-dashboard-header.php');
?>           
<nav class="navbar">
<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    </button>
</div>
<!-- Collect the nav links, forms, and other content for toggling -->  
<div class="bottom-header">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
             <ul class="nav navbar-nav navbar-left cus-navbar" >
                    <li class="dropdown">
                    <a href="index.php">Home</a>
                    </li>
                   <li class="dropdown">
                    <a href="gallery.php">Gallery</a>
                   
                </li>
               <li class="dropdown">
                    <a href="#">Committees</a>
                    <ul class="sub-service dropdown-content">
                        
                        <li>
                            <a href="javascript:void(0);">Lands</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">Financial</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">Cultural</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">Executive </a>
                        </li>
                        
                        <li>
                            <a href="javascript:void(0);">Education</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">Disciplinary</a>
                        </li>                                
                    </ul>
                </li>
               <li class="dropdown">
                    <a href="#">Meetings</a>
                    <ul class="sub-service dropdown-content">
                        <li>
                            <a href="javascript:void(0);">2015</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">2016</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">2017</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">2018</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">2019</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#">About-Us</a>
                </li>
                <li class="dropdown">
                    <a href="contact.php">Contact-Us</a>
                </li>

                </ul>
        </div>
    </div>
</div>
<!-- /.navbar-collapse -->
</nav>
</header>
<!-- End Header -->
<!-- Modal -->
<div class="modal fade signup" id="signupAs" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    <h4 class="modal-title" id="myModalLabel">Sign Up As</h4>
</div>
<div class="modal-body">
    <div class="sign-selectoption">
        <div class="col-md-12 col-xs-12 col-sm-12 p-0">
            <div class="col-md-6 col-xs-12  col-sm-6 right-border">
                <div class="customer-img">
                    <img src="img/saloon.svg" class="img-responsive">
                </div>
                <a  class="cus-btn btn" href="saloon-signup.php">Clan Elder</a>
            </div>
            <div class="col-md-6 col-xs-12  col-sm-6">
                <div class="professional-img">
                    <div class="customer-img">
                        <img src="img/professional.svg" class="img-responsive">
                    </div>
                </div>
                <a class="cus-btn btn" href="customer-signup.php">Clan Member</a>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<!--  <script type="text/javascript">
$('.custome-bar > li.dropdown').hover(function(){
$(this).addClass('active').siblings('li.dropdown').removeClass('active');;
});
</script> -->