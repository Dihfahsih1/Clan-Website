<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- <link rel="icon" href="img/favicon.ico" type="image/x-icon"> -->
        <title>Salon Details</title>
        <link href="css/font-awesome.css" rel="stylesheet">
        <link href="css/fonts.css" rel="stylesheet">
        <link href="css/simple-line-icons.css" rel="stylesheet">
        <!-- pages css  -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive-style.css" rel="stylesheet">
        <link href="css/jquery.datetimepicker.css" rel="stylesheet">
        <link href="css/custome-tab.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="css/owl.transitions.css" />
    </head>
    <body>
        <?php
            require('include/page-header.php');
            ?>
        <section class="salon-slider">
            <div class="owl-demo1 owl-theme">
                <div class="item">
                    <img src="img/salon-d1.jpg" alt="slideimag" class="img-responsive">
                </div>
                <div class="item">
                    <img src="img/salon-d2.jpg" alt="slideimag" class="img-responsive">
                </div>
                <div class="item">
                    <img src="img/salon-d3.jpg" alt="slideimag" class="img-responsive">
                </div>
                <div class="item">
                    <img src="img/salon-d4.jpg" alt="slideimag" class="img-responsive">
                </div>
                <div class="item">
                    <img src="img/service-1.jpg" alt="slideimag" class="img-responsive">
                </div>
                <div class="item">
                    <img src="img/service-2.jpg" alt="slideimag" class="img-responsive">
                </div>
                <div class="item">
                    <img src="img/service-3.jpg" alt="slideimag" class="img-responsive">
                </div>
            </div>
            <div class="salon-details-header">
                <ul class="breadcrumb">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="#">USA</a>
                    </li>
                </ul>
                <span>Big Hair Beauty Salon</span>
            </div>
        </section>
        <section class="Salon-details-sec">
            <div class="container-fluid">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-md-9 col-sm-9 col-xs-12 p-l-0">
                            <div class="salon-des-consec">
                                <!-- Wizard container -->
                                <div class="wizard-container">
                                    <div class="card wizard-card" data-color="red" id="wizard">
                                        <div class="wizard-navigation">
                                            <ul class="custome-tab">
                                                <li>
                                                    <a href="#details" data-toggle="tab">About</a>
                                                </li>
                                                <li>
                                                    <a href="#captain" data-toggle="tab">Services</a>
                                                </li>
                                                <li>
                                                    <a href="#description" data-toggle="tab">Review</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-content">
                                            <div class="tab-pane" id="details">
                                                <div class="col-md-12 col-sm-12  col-xs-12 ">
                                                    <div class="about-us-sec">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                        </p>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                        <p> Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="captain">
                                                <div class="services-tab-sec">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="service-listwrap">
                                                            <a href="javascript:void(0)">
                                                                <span class="right-icon">
                                                                    <i class="fa fa-angle-up"></i>
                                                                </span>
                                                                Afro Haircut (2)
                                                            </a>
                                                            <div class="sub-menulist">
                                                                <div class="list-content gray-line">
                                                                    <div class="col-sm-8 p-0">
                                                                        <h4>Blow Dry</h4>
                                                                        <small><a href="#">Show Details</a> <span>30 Min</span></small>
                                                                    </div>
                                                                    <div class="col-sm-4 p-0">
                                                                        <div class="price-value">
                                                                            <span class="aed-total"><h6>AED 50</h6></span>
                                                                            <span class="add-cart-icon">
                                                                                <a href="#">
                                                                                    <i class="fa fa-plus"></i>
                                                                                </a>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="list-content">
                                                                    <div class="col-sm-8 p-0">
                                                                        <h4>Perm Cut</h4>
                                                                        <small><a href="#">Show Details</a><span>45 Min</span></small>
                                                                    </div>
                                                                    <div class="col-sm-4 p-0">
                                                                        <div class="price-value">
                                                                            <span class="aed-total"><h6>AED 190</h6></span>
                                                                            <span class="add-cart-icon">
                                                                                <a href="#">
                                                                                    <i class="fa fa-plus"></i>
                                                                                </a>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="service-listwrap">
                                                            <a href="javascript:void(0)">
                                                                <span class="right-icon">
                                                                    <i class="fa fa-angle-up"></i>
                                                                </span>
                                                                African Hair cornrow (2)
                                                            </a>
                                                            <div class="sub-menulist">
                                                                <div class="list-content gray-line">
                                                                    <div class="col-sm-8 p-0">
                                                                        <h4>African Lines with Own Extentions</h4>
                                                                        <small><a href="#">Show Details</a><span>30 Min</span></small>
                                                                    </div>
                                                                    <div class="col-sm-4 p-0">
                                                                        <div class="price-value">
                                                                            <span class="aed-total"><h6>AED 180</h6></span>
                                                                            <span class="add-cart-icon">
                                                                                <a href="#">
                                                                                    <i class="fa fa-plus"></i>
                                                                                </a>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="list-content">
                                                                    <div class="col-sm-8 p-0">
                                                                        <h4>Perm Cut</h4>
                                                                        <small><a href="#">Show Details</a><span>45 Min</span></small>
                                                                    </div>
                                                                    <div class="col-sm-4 p-0">
                                                                        <div class="price-value">
                                                                            <span class="aed-total"><h6>AED 190</h6></span>
                                                                            <span class="add-cart-icon">
                                                                                <a href="#">
                                                                                    <i class="fa fa-plus"></i>
                                                                                </a>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="service-listwrap">
                                                            <a href="javascript:void(0)">
                                                                <span class="right-icon">
                                                                    <i class="fa fa-angle-up"></i>
                                                                </span>
                                                                Afro Hair Below Dry & Styling (2)
                                                            </a>
                                                            <div class="sub-menulist">
                                                                <div class="list-content gray-line">
                                                                    <div class="col-sm-8 p-0">
                                                                        <h4>Hot Iron Styling OR Styling</h4>
                                                                        <small><a href="#">Show Details</a><span>45 Min</span></small>
                                                                    </div>
                                                                    <div class="col-sm-4 p-0">
                                                                        <div class="price-value">
                                                                            <span class="aed-total"><h6>AED 60</h6></span>
                                                                            <span class="add-cart-icon">
                                                                                <a href="#">
                                                                                    <i class="fa fa-plus"></i>
                                                                                </a>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="list-content">
                                                                    <div class="col-sm-8 p-0">
                                                                        <h4>Wash & Below Dry</h4>
                                                                        <small><a href="#">Show Details</a><span>45 Min</span></small>
                                                                    </div>
                                                                    <div class="col-sm-4 p-0">
                                                                        <div class="price-value">
                                                                            <span class="aed-total"><h6>AED 190</h6></span>
                                                                            <span class="add-cart-icon">
                                                                                <a href="#">
                                                                                    <i class="fa fa-plus"></i>
                                                                                </a>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="service-listwrap">
                                                            <a href="javascript:void(0)">
                                                                <span class="right-icon">
                                                                    <i class="fa fa-angle-up"></i>
                                                                </span>
                                                                Afro Hair Braiding (2)
                                                            </a>
                                                            <div class="sub-menulist">
                                                                <div class="list-content gray-line">
                                                                    <div class="col-sm-8 p-0">
                                                                        <h4>Big size with Own Extension (Short Hair)</h4>
                                                                        <small><a href="#">Show Details</a><span>30 Min</span></small>
                                                                    </div>
                                                                    <div class="col-sm-4 p-0">
                                                                        <div class="price-value">
                                                                            <span class="aed-total"><h6>AED 50</h6></span>
                                                                            <span class="add-cart-icon">
                                                                                <a href="#">
                                                                                    <i class="fa fa-plus"></i>
                                                                                </a>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="list-content">
                                                                    <div class="col-sm-8 p-0">
                                                                        <h4>Perm Cut</h4>
                                                                        <small><a href="#">Show Details</a><span>45 Min</span></small>
                                                                    </div>
                                                                    <div class="col-sm-4 p-0">
                                                                        <div class="price-value">
                                                                            <span class="aed-total"><h6>AED 190</h6></span>
                                                                            <span class="add-cart-icon">
                                                                                <a href="#">
                                                                                    <i class="fa fa-plus"></i>
                                                                                </a>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="service-listwrap">
                                                            <a href="javascript:void(0)">
                                                                <span class="right-icon">
                                                                    <i class="fa fa-angle-up"></i>
                                                                </span>
                                                                Afro Haircut (2)
                                                            </a>
                                                            <div class="sub-menulist">
                                                                <div class="list-content gray-line">
                                                                    <div class="col-sm-8 p-0">
                                                                        <h4>Blow Dry</h4>
                                                                        <small><a href="#">Show Details</a><span>30 Min</span></small>
                                                                    </div>
                                                                    <div class="col-sm-4 p-0">
                                                                        <div class="price-value">
                                                                            <span class="aed-total"><h6>AED 50</h6></span>
                                                                            <span class="add-cart-icon">
                                                                                <a href="#">
                                                                                    <i class="fa fa-plus"></i>
                                                                                </a>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="list-content">
                                                                    <div class="col-sm-8 p-0">
                                                                        <h4>Perm Cut</h4>
                                                                        <small><a href="#">Show Details</a><span>45 Min</span></small>
                                                                    </div>
                                                                    <div class="col-sm-4 p-0">
                                                                        <div class="price-value">
                                                                            <span class="aed-total"><h6>AED 190</h6></span>
                                                                            <span class="add-cart-icon">
                                                                                <a href="#">
                                                                                    <i class="fa fa-plus"></i>
                                                                                </a>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="description">
                                                <div class="review-wrap">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="review-heading">
                                                            <h4>Review</h4>
                                                            <span class="add-rating">
                                                                <a href="#"><i class="fa fa-plus-circle"></i>Rating</a>
                                                            </span>
                                                        </div>
                                                        <div class="col-md-4 col-sm-4 col-xs-12 text-center">
                                                            <h1 class="rating-num">
                                                                4.0</h1>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-half-o"></i>
                                                            </div>
                                                            <div class="total-starpoint">
                                                                 <i class="fa fa-user"></i> 1,050,008 total
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8 col-sm-8 col-xs-12">
                                                            <div class="rating-desc">
                                                                <div class="row">
                                                                    <div class="col-xs-3 col-md-3 text-right">
                                                                        <i class="fa fa-star"></i>5 
                                                                    </div>
                                                                    <div class="col-xs-8 col-md-9">
                                                                        <div class="progress progress-striped">
                                                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20"
                                                                                aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                                                <span class="sr-only">80%</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end 5 -->
                                                                <div class="row">
                                                                     <div class="col-xs-3 col-md-3 text-right">
                                                                        <i class="fa fa-star"></i>4
                                                                    </div>
                                                                    <div class="col-xs-8 col-md-9">
                                                                        <div class="progress">
                                                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20"
                                                                                aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                                                <span class="sr-only">60%</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end 4 -->
                                                                <div class="row">
                                                                    <div class="col-xs-3 col-md-3 text-right">
                                                                        <i class="fa fa-star"></i>3
                                                                    </div>
                                                                    <div class="col-xs-8 col-md-9">
                                                                        <div class="progress">
                                                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20"
                                                                                aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                                                <span class="sr-only">40%</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end 3 -->
                                                                <div class="row">
                                                                    <div class="col-xs-3 col-md-3 text-right">
                                                                        <i class="fa fa-star"></i>2
                                                                    </div>
                                                                    <div class="col-xs-8 col-md-9">
                                                                        <div class="progress">
                                                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="20"
                                                                                aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                                                <span class="sr-only">20%</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end 2 -->
                                                                <div class="row">
                                                                    <div class="col-xs-3 col-md-3 text-right">
                                                                        <i class="fa fa-star"></i>1
                                                                    </div>
                                                                    <div class="col-xs-8 col-md-9">
                                                                        <div class="progress">
                                                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80"
                                                                                aria-valuemin="0" aria-valuemax="100" style="width: 15%">
                                                                                <span class="sr-only">15%</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end 1 -->
                                                            </div>
                                                            <!-- end row -->
                                                        </div>
                                                    </div>
                                                    <div class="userlist-rating">
                                                        <div class="review-wrap-list">
                                                            <div class="col-md-1 col-sm-1 col-xs-12 p-0">
                                                                <div class="rating-user">
                                                                    <img src="img/user-pro-2.jpg" alt="rating-img" >
                                                                </div>
                                                            </div>
                                                            <div class="col-md-11 col-sm-11 col-xs-12">
                                                                <div class="review-content">
                                                                    <h3>Barry Alen</h3>
                                                                    <span class="user-star">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-half-o"></i>
                                                                    </span>
                                                                    <span class="time-day pull-right">2 week ago</span>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="review-wrap-list">
                                                            <div class="col-md-1 col-sm-1 col-xs-12 p-0">
                                                                <div class="rating-user">
                                                                    <img src="img/user-pro-1.jpg" alt="rating-img" >
                                                                </div>
                                                            </div>
                                                            <div class="col-md-11 col-sm-11 col-xs-12">
                                                                <div class="review-content">
                                                                    <h3>Barry Alen</h3>
                                                                    <span class="user-star">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-half-o"></i>
                                                                    </span>
                                                                    <span class="time-day pull-right">2 week ago</span>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- wizard container -->
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12 p-l-0">
                            <div class="salon-det-sidebar">
                                <div class="salon-add-map">
                                    <div id="googleMap" style="width:100%;height:200px;"></div>
                                    <div class="address-salon">
                                        <h4>Big Hair Beauty Salon</h4>
                                        <p class="addres-salon">9566 Destiny USA Dr E208, Syracuse, NY 13290, USA</p>
                                        <div class="Opening-hours">
                                            <a id="opening" href="javascript:void(0);">Opening Hours 
                                                <span class="pull-right">
                                                <i class="fa fa-plus-circle"></i>  
                                                </span>
                                            </a>
                                            <ul class="timing-ul">
                                                <li>
                                                    <span class="week-name">Sunday</span>
                                                    <span class="opening-time">10:00 AM - 10:00 PM</span>
                                                </li>
                                                <li>
                                                    <span class="week-name">Monday</span>
                                                    <span class="opening-time">10:00 AM - 10:00 PM</span>
                                                </li>
                                                <li>
                                                    <span class="week-name">Tuesday</span>
                                                    <span class="opening-time">10:00 AM - 10:00 PM</span>
                                                </li>
                                                <li>
                                                    <span class="week-name">Wednesday</span>
                                                    <span class="opening-time">10:00 AM - 10:00 PM</span>
                                                </li>
                                                <li>
                                                    <span class="week-name">Thursday</span>
                                                    <span class="opening-time">10:00 AM - 10:00 PM</span>
                                                </li>
                                                <li>
                                                    <span class="week-name">Friday</span>
                                                    <span class="opening-time">10:00 AM - 10:00 PM</span>
                                                </li>
                                                <li>
                                                    <span class="week-name">Saturday</span>
                                                    <span class="opening-time">10:00 AM - 10:00 PM</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="credit-card-salon">
                                            <span class="card-check">
                                                <i class="fa fa-credit-card"></i>
                                                <p><i class="fa fa-check-circle"></i></p>
                                            </span>
                                            This salon accepted credit Card
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="book-nowsec">
                                <div class="total-mony">
                                    <span class="booknow">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span class="circle-value">2</span>
                                    </span>
                                    <span class="price-span">AED 100.00</span>
                                </div>
                                <div class="book-nowbtn">
                                    <a href="javascript:void(0);" class="btn cut-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
            require('include/footer.php');
        ?>
    </body>
    <script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
       <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDRM9uLXGLUoQw27yHeYAgjrirJvoLZet0&callback=myMap"
    async defer></script>
    <script type="text/javascript" src="js/owl.carousel.js"></script>
    <script type="text/javascript" src="js/jquerydatetimepicker.js"></script>
    <script type="text/javascript" src="js/custome-tab.js"></script>
    <script>
        $(window).scroll(function() {
            if ($(this).scrollTop() > 1){  
                $('header').addClass("sticky");
            }
            else{
                $('header').removeClass("sticky");
            }
        });
    </script>
    <script type="text/javascript">
        $('.sub-menulist').hide();
        $(document).on('click','.service-listwrap  a',function(){
            $(this).toggleClass('active');
            $(this).next('.sub-menulist').slideToggle('500');
            $(this).find('i').toggleClass('fa-angle-up fa-angle-down')
        });
        $('.timing-ul').hide();
        $(document).on('click','#opening',function(){
            $(this).next('.timing-ul').slideToggle('500');
            $(this).find('i').toggleClass('fa-plus-circle fa-minus-circle')
        });
    </script>
    <script>
    function myMap() {
        var mapProp= {
            center:new google.maps.LatLng(51.508742,-0.120850),
            zoom:5,
        };
        var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
        }
    </script>
    <script>
        $(document).ready(function() {
         
            var owl = $(".owl-demo1");
             
            owl.owlCarousel({
            nav:true,
            loop:true,
            items : 4, //10 items above 1000px browser width
            itemsDesktop : [1000,3], //5 items between 1000px and 901px
            itemsDesktopSmall : [900,3], // betweem 900px and 601px
            itemsTablet: [600,2], //2 items between 600 and 0
            itemsMobile : false,
            autoplay:true // itemsMobile disabled - inherit from itemsTablet option
            });
             
            // Custom Navigation Events
         
        });
        
    </script>
</html>