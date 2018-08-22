<div class="page-sidebar-wrapper">
    <div class="dashbrd-sidbar collapse navbar-collapse p-0" id="bs-example-navbar-collapse-1">
        <div class="profile-sidbar p-t-30">
            <div class="profile-userpic">
                    <img src="img/saloon-user.png" class="img-responsive" />
            </div>
            <div class="profile-username">
                <h4> Saloon Name </h4>
            </div>
        </div>
        <ul class="dshbrd-sidebar-menu m-0 p-0" type="none">
            <?php
                $urls = basename($_SERVER['REQUEST_URI']);
            ?>

            <?php
                if($urls == 'saloon-profile.php' || $urls == 'professional-profile-2.php' || $urls == 'professional-profile-3.php' || $urls == 'professional-profile-4.php' ){?>
                    <li class="sidebar-item active">
                <?php }
                else{?>
                    <li class="sidebar-item">
                <?php }
            ?>
                <a class="sidebar-link" href="professional-profile.php">
                    <i class="icon-home"></i>
                    <span class="title">My Account</span>
                </a>
            </li>
            <?php
                if($urls == 'professional-my-wallet.php' ){?>
                    <li class="sidebar-item active">
                <?php }
                else{ ?>
                    <li class="sidebar-item">
                <?php }
            ?>
                <a class="sidebar-link" href="javascript:void(0);">
                     <i class="fa fa-cogs" aria-hidden="true"></i>
                    <span class="title"> Service List </span>
                </a>
            </li>
             <?php
                if($urls == 'professional-my-wallet.php' ){?>
                    <li class="sidebar-item active">
                <?php }
                else{ ?>
                    <li class="sidebar-item">
                <?php }
            ?>
                <a class="sidebar-link" href="javascript:void(0);">
                     <i class="fa fa-user" aria-hidden="true"></i>
                    <span class="title"> Employe List </span>
                </a>
            </li>

             <?php
                if($urls == 'professional-message.php' ){?>
                    <li class="sidebar-item active">
                <?php }
                else{?>
                    <li class="sidebar-item">
                <?php }
            ?>
                <a class="sidebar-link" href="professional-message.php">
                    <i class="fa fa-user-plus"></i>
                    <span class="title"> Add Employe </span>
                </a>
            </li>

            <?php
                if($urls == 'professional-alerts.php'){?>
                    <li class="sidebar-item active">
                <?php }
                else{ ?>
                    <li class="sidebar-item">
                <?php }
            ?>
                <a class="sidebar-link" href="javascript:void(0);">
                     <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                    <span class="title"> My Alerts </span>
                </a>
            </li>
            <?php
                if($urls == 'Professional-applied-job.php' ){?>
                    <li class="sidebar-item active">
                <?php }
                else{ ?>
                    <li class="sidebar-item">
                <?php }
            ?>
                <a class="sidebar-link" href="javascript:void(0);">
                     <i class="fa fa-calendar"></i>
                    <span class="title"> Booking List </span>
                </a>
            </li>
           
            <?php
                if($urls == 'profesional-notification.php' ){?>
                    <li class="sidebar-item active">
                <?php }
                else{?>
                    <li class="sidebar-item">
                <?php }
            ?>
                <a class="sidebar-link" href="profesional-notification.php">
                    <i class="icon-bell"></i>
                    <span class="title"> Notifications </span>
                </a>
            </li>

            <?php
                if($urls == 'professional-myjobsApp.php' ){?>
                    <li class="sidebar-item active">
                <?php }
                else{?>
                    <!-- <li class="sidebar-item"> -->
                <?php }
            ?>
                <!-- <a class="sidebar-link" href="professional-myjobsApp.php">
                    <i class="icon-briefcase"></i>
                    <span class="title"> My Jobs </span>
                </a>
            </li> -->
            <?php
                if($urls == 'professional-review.php' ){?>
                    <li class="sidebar-item active">
                <?php }
                else{?>
                    <li class="sidebar-item">
                <?php }
            ?>
                <a class="sidebar-link" href="professional-review.php">
                    <i class="icon-star"></i>
                    <span class="title"> Ratings and Reviews </span>
                </a>
            </li>

            <?php
                if($urls == 'professional-password.php' ){?>
                    <li class="sidebar-item active">
                <?php }
                else{ ?>
                    <li class="sidebar-item">
                <?php }
            ?>
                <a class="sidebar-link" href="professional-password.php">
                    <i class="icon-key"></i>
                    <span class="title"> Change Password </span>
                </a>
            </li>

        </ul>
    </div>
</div>
<script type="text/javascript">
    var pathArray = window.location.pathname.split('/');
    var purePath = pathArray[pathArray.length - 1];
    console.log(purePath);
    var attr = $('.sidebar-menu-ul').find('a[href = "' + purePath+'"]');
    attr.addClass('active');
</script>
