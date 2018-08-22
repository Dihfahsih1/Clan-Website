<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">
        <title>Searched Salon</title>
        <link href="css/font-awesome.css" rel="stylesheet">
        <link href="css/fonts.css" rel="stylesheet">
        <link href="css/simple-line-icons.css" rel="stylesheet">
        <!-- pages css  -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive-style.css" rel="stylesheet">
        <link href="css/jquery.datetimepicker.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/page-header.css" rel="stylesheet">
        <link href="css/bootstrap-price-slider.css" rel="stylesheet">
    </head>
    <body>
        <?php
            require('include/page-header.php');
        ?>
        <section class="search-saloonsec">
            <div class="container-fluid">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h4 class="header-heading">
                        <ul class="breadcrumb">
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li>
                                <a href="index.php">Salon Page</a>
                            </li>
                        </ul>
                    </h4>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="filter-section">
                                <div class="header-saloon">
                                    <h4>Filter</h4><a href="javascript:void(0);">Clear All</a>
                                </div>
                                <div class="filter-content">
                                    <div class="filter-inner">
                                        <h5 class="text-left">Price</h5>
                                        <ul class="priceul price-inline">
                                            <li>
                                                <label class="remember-me">
                                                    <input type="checkbox"> $
                                                    <span></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="remember-me">
                                                    <input type="checkbox" checked="checked"> $$
                                                    <span></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="remember-me">
                                                    <input type="checkbox"> $$$
                                                    <span></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="remember-me">
                                                    <input type="checkbox"> $$$$
                                                    <span></span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="filter-inner">
                                        <h5 class="text-left">Area</h5>
                                        <ul class="priceul area-ul">
                                            <li>
                                                <label class="remember-me">
                                                    <input type="checkbox"> <p>Business Bay</p>
                                                    <span></span>
                                                </label>
                                                <small class="sm-1">1</small>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="filter-inner">
                                        <h5 class="text-left">Ctegories</h5>
                                        <ul class="category-ul">
                                            <li>
                                              Spa <span class="remove-cross"><a href="#">X</a></span> 
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="filter-inner">
                                        <h5 class="text-left">Services</h5>
                                        <ul class="priceul area-ul">
                                            <li>
                                                <label class="remember-me">
                                                    <input type="checkbox"> <p>Hair Coloring</p>
                                                    <span></span>
                                                </label>
                                                <small class="sm-1">281</small>
                                            </li>
                                            <li>
                                                <label class="remember-me">
                                                    <input type="checkbox"> <p>Blow Dry</p>
                                                    <span></span>
                                                </label>
                                                <small class="sm-1">231</small>
                                            </li>
                                            <li>
                                                <label class="remember-me">
                                                    <input type="checkbox" checked="checked"> <p>Haircut</p>
                                                    <span></span>
                                                </label>
                                                <small class="sm-1">231</small>
                                            </li>
                                            <li>
                                                <label class="remember-me">
                                                    <input type="checkbox"> <p>Hair Highlight</p>
                                                    <span></span>
                                                </label>
                                                <small class="sm-1">200</small>
                                            </li>
                                            <li>
                                                <label class="remember-me">
                                                    <input type="checkbox"> <p>Women's Haircut</p>
                                                    <span></span>
                                                </label>
                                                <small class="sm-1">207</small>
                                            </li>
                                            <li>
                                                <a class="load-more" href="javascript:void(0);">
                                                    <i class="fa fa-plus"></i> Load More
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="filter-inner">
                                        <h5 class="text-left">Service's Price</h5>
                                        <div class="filter-sub-categ">
                                            <span class="min-range">
                                                <span class="left-range">AED 200.00</span>   
                                                <span class="right-range">AED 200.00</span>   
                                            </span>
                                            <input id="rane-slide" type="text" class="span2" value="" data-slider-max="4684350" data-slider-step="5" data-slider-value="[0,4684350]"/> 
                                        </div>
                                    </div>
                                    <div class="filter-inner">
                                        <h5 class="text-left">Date</h5>
                                        <div class="col-md-12 col-sm-12 col-xs-12 p-l-0">
                                            <div class="date-wrsap">
                                                <div class="input-group">
                                                    <span class="input-group-addon" id="basic-addon1">
                                                        <i class="fa fa-calendar"></i>
                                                    </span>
                                                    <input type="text" class="form-control datetimepicker1" placeholder="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="filter-time">
                                            <p>Time</p>
                                            <ul class="time-ul">
                                                <li>
                                                    <label class="remember-me">
                                                        <input type="checkbox" checked="checked"> <p>Any Time</p>
                                                        <span></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="remember-me">
                                                        <input type="checkbox"> <p>Morning</p>
                                                        <span></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="remember-me">
                                                        <input type="checkbox"> <p>Afternoon</p>
                                                        <span></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="remember-me">
                                                        <input type="checkbox"> <p>Evening</p>
                                                        <span></span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 custom-p">
                            <div class="service-show-sec">
                                <div class="filter-content">
                                    <div class="sorting-div wow fadeInDown" wow-data-delay="0.4s">
                                        <span class="showing-list">Showing 200 results</span>
                                        <span class="sort-by">
                                            <div class="col-md-4 col-sm-4 col-xs-12 p-0">
                                                <label>Sort BY</label>    
                                            </div>
                                            <div class="col-md-8 col-sm-8 col-xs-12 p-0">
                                                <div class="custom-select">
                                                    <select class="form-control txtfield" placeholder="Select">
                                                        <option value="" selected="">Relevance</option>
                                                        <option value="">Lowest</option>
                                                        <option value="">Highest</option>
                                                        <option value="">Proximity</option>
                                                    </select>
                                                    <span class="caret"></span>
                                                </div>
                                            </div>
                                        </span>
                                    </div>
                                    <div class="service-list-sec salon-section">
                                        <div class="wrap-service">
                                            <div class="img-content-sec">
                                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 p-l-0">
                                                    <div class="service-img">
                                                        <img src="img/saloon-1.jpg" class="img-responsive">
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                                    <div class="service-inner-des">
                                                        <h5 class="name-saloon">
                                                            <a href="javascript:void(0);">Big Hair Beauty Salon</a>
                                                        </h5>
                                                        <address>9566 Destiny USA Dr E208, Syracuse, NY 13290, USA</address>
                                                        <ul class="rating-points">
                                                            <li>
                                                                <span class="rating-star">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-half-o"></i>
                                                                </span>
                                                                <span class="star-number">(200)</span>
                                                            </li>
                                                            <li>
                                                                <span class="dollor-select">
                                                                    <span class="card-check">
                                                                        <i class="fa fa-credit-card"></i>
                                                                        <p><i class="fa fa-check-circle"></i></p>
                                                                    </span>
                                                                    <ul class="dollor-view">
                                                                        <li class="active">
                                                                            <i class="fa fa-usd"></i>
                                                                        </li>
                                                                        <li class="active">
                                                                            <i class="fa fa-usd"></i>
                                                                        </li>
                                                                        <li>
                                                                            <i class="fa fa-usd"></i>
                                                                        </li>
                                                                        <li>
                                                                            <i class="fa fa-usd"></i>
                                                                        </li>
                                                                    </ul>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                        <p class="description-salon">
                                                            Sasha Beauty Salon is not a name unheard of in the Dubai beauty scene. With a chain of world class salons and only the very best quality of services, Sasha beauty is a name associated with reliable beauty care. The salon has an extensive...
                                                            <a href="javascript:void(0);">Read More</a>
                                                        </p>    
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="esact-service salon-sec">
                                                <p class="popular-service">Popular Services</p>
                                                <div class="searched-service relevant-de">
                                                    <ul class="searched-ul ">
                                                        <li>
                                                            <span class="service-name">
                                                                Bridal make-up + hair dressing (salon)
                                                                <span class="time-on"><i class="fa fa-clock-o"></i> 1h</span>
                                                            </span>
                                                            <span class="price-and-book">
                                                                <span class="price-nub">AED 2,000
                                                                </span>
                                                                <span class="book-btn">
                                                                    <a class="btn cus-btn" href="javascript:void(0);">Book</a>
                                                                </span>
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="searched-service relevant-de">
                                                    <ul class="searched-ul">
                                                        <li>
                                                            <span class="service-name">
                                                                Whitening Facial
                                                                <span class="time-on"><i class="fa fa-clock-o"></i> 1h 15 Min</span>
                                                            </span>
                                                            <span class="price-and-book">
                                                                <span class="price-nub">AED 275
                                                                </span>
                                                                <span class="book-btn">
                                                                    <a class="btn cus-btn" href="javascript:void(0);">Book</a>
                                                                </span>
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="searched-service relevant-de2">
                                                    <ul class="searched-ul">
                                                        <li>
                                                            <span class="service-name">
                                                                Hair Trim
                                                                <span class="time-on"><i class="fa fa-clock-o"></i> 15 Min</span>
                                                            </span>
                                                            <span class="price-and-book">
                                                                <span class="price-nub">AED 80
                                                                </span>
                                                                <span class="book-btn">
                                                                    <a class="btn cus-btn" href="javascript:void(0);">Book</a>
                                                                </span>
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wrap-service">
                                            <div class="img-content-sec">
                                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 p-l-0">
                                                    <div class="service-img">
                                                        <img src="img/saloon-2.jpg" class="img-responsive">
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                                    <div class="service-inner-des">
                                                        <h5 class="name-saloon">
                                                            <a href="javascript:void(0);">Bebe Beauty Salon (Ledies)</a>
                                                        </h5>
                                                        <address>9566 Destiny USA Dr E208, Syracuse, NY 13290, USA</address>
                                                        <ul class="rating-points">
                                                            <li>
                                                                <span class="rating-star">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-half-o"></i>
                                                                </span>
                                                                <span class="star-number">(100)</span>
                                                            </li>
                                                            <li>
                                                                <span class="dollor-select">
                                                                    <span class="card-check">
                                                                        <i class="fa fa-credit-card"></i>
                                                                        <p><i class="fa fa-check-circle"></i></p>
                                                                    </span>
                                                                    <ul class="dollor-view">
                                                                        <li class="active">
                                                                            <i class="fa fa-usd"></i>
                                                                        </li>
                                                                        <li class="">
                                                                            <i class="fa fa-usd"></i>
                                                                        </li>
                                                                        <li>
                                                                            <i class="fa fa-usd"></i>
                                                                        </li>
                                                                        <li>
                                                                            <i class="fa fa-usd"></i>
                                                                        </li>
                                                                    </ul>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                        <p class="description-salon">
                                                            Sasha Beauty Salon is not a name unheard of in the Dubai beauty scene. With a chain of world class salons and only the very best quality of services, Sasha beauty is a name associated with reliable beauty care. The salon has an extensive...
                                                            <a href="javascript:void(0);">Read More</a>
                                                        </p>    
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="esact-service salon-sec">
                                                <p class="popular-service">Popular Services</p>
                                                <div class="searched-service relevant-de">
                                                    <ul class="searched-ul ">
                                                        <li>
                                                            <span class="service-name">
                                                                Extension Removal by Piece(Form another salon)
                                                                <span class="time-on"><i class="fa fa-clock-o"></i> 15 Min</span>
                                                            </span>
                                                            <span class="price-and-book">
                                                                <span class="price-nub">AED 10
                                                                </span>
                                                                <span class="book-btn">
                                                                    <a class="btn cus-btn" href="javascript:void(0);">Book</a>
                                                                </span>
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="searched-service relevant-de">
                                                    <ul class="searched-ul">
                                                        <li>
                                                            <span class="service-name">
                                                                Hair Cut
                                                                <span class="time-on"><i class="fa fa-clock-o"></i> 1h 15 Min</span>
                                                            </span>
                                                            <span class="price-and-book">
                                                                <span class="price-nub">AED 125
                                                                </span>
                                                                <span class="book-btn">
                                                                    <a class="btn cus-btn" href="javascript:void(0);">Book</a>
                                                                </span>
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="searched-service relevant-de2">
                                                    <ul class="searched-ul">
                                                        <li>
                                                            <span class="service-name">
                                                                Hair Trim
                                                                <span class="time-on"><i class="fa fa-clock-o"></i> 15 Min</span>
                                                            </span>
                                                            <span class="price-and-book">
                                                                <span class="price-nub">AED 80
                                                                </span>
                                                                <span class="book-btn">
                                                                    <a class="btn cus-btn" href="javascript:void(0);">Book</a>
                                                                </span>
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wrap-service">
                                            <div class="img-content-sec">
                                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 p-l-0">
                                                    <div class="service-img">
                                                        <img src="img/saloon-3.jpg" class="img-responsive">
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                                    <div class="service-inner-des">
                                                        <h5 class="name-saloon">
                                                            <a href="javascript:void(0);">Morning Glory Health & Beauty Salon</a>
                                                        </h5>
                                                        <address>9566 Destiny USA Dr E208, Syracuse, NY 13290, USA</address>
                                                        <ul class="rating-points">
                                                            <li>
                                                                <span class="rating-star">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-half-o"></i>
                                                                </span>
                                                                <span class="star-number">(216)</span>
                                                            </li>
                                                            <li>
                                                                <span class="dollor-select">
                                                                    <span class="card-check">
                                                                        <i class="fa fa-credit-card"></i>
                                                                        <p><i class="fa fa-check-circle"></i></p>
                                                                    </span>
                                                                    <ul class="dollor-view">
                                                                        <li class="active">
                                                                            <i class="fa fa-usd"></i>
                                                                        </li>
                                                                        <li class="active">
                                                                            <i class="fa fa-usd"></i>
                                                                        </li>
                                                                        <li class="active">
                                                                            <i class="fa fa-usd"></i>
                                                                        </li>
                                                                        <li>
                                                                            <i class="fa fa-usd"></i>
                                                                        </li>
                                                                    </ul>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                        <p class="description-salon">
                                                            Sasha Beauty Salon is not a name unheard of in the Dubai beauty scene. With a chain of world class salons and only the very best quality of services, Sasha beauty is a name associated with reliable beauty care. The salon has an extensive...
                                                            <a href="javascript:void(0);">Read More</a>
                                                        </p>    
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="esact-service salon-sec">
                                                <p class="popular-service">Popular Services</p>
                                                <div class="searched-service relevant-de">
                                                    <ul class="searched-ul ">
                                                        <li>
                                                            <span class="service-name">
                                                                Bridal Up Style (In Salon)
                                                                <span class="time-on"><i class="fa fa-clock-o"></i> 1h</span>
                                                            </span>
                                                            <span class="price-and-book">
                                                                <span class="price-nub">AED 1,500
                                                                </span>
                                                                <span class="book-btn">
                                                                    <a class="btn cus-btn" href="javascript:void(0);">Book</a>
                                                                </span>
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="searched-service relevant-de">
                                                    <ul class="searched-ul">
                                                        <li>
                                                            <span class="service-name">
                                                                Bridal Makeup (In Salon)
                                                                <span class="time-on"><i class="fa fa-clock-o"></i> 2h</span>
                                                            </span>
                                                            <span class="price-and-book">
                                                                <span class="price-nub">AED 1,500
                                                                </span>
                                                                <span class="book-btn">
                                                                    <a class="btn cus-btn" href="javascript:void(0);">Book</a>
                                                                </span>
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="searched-service relevant-de2">
                                                    <ul class="searched-ul">
                                                        <li>
                                                            <span class="service-name">
                                                            Moroccan Bath with Massage
                                                                <span class="time-on"><i class="fa fa-clock-o"></i> 60 Min</span>
                                                            </span>
                                                            <span class="price-and-book">
                                                                <span class="price-nub">AED 199
                                                                </span>
                                                                <span class="book-btn">
                                                                    <a class="btn cus-btn" href="javascript:void(0);">Book</a>
                                                                </span>
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
    <script type="text/javascript" src="js/jquerydatetimepicker.js"></script>
    <script type="text/javascript" src="js/bootstrap-price-slider.js"></script>
    <script type="text/javascript" src="js/wow.js"></script>
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
    <script>
     wow = new WOW(
            {
                animateClass: 'animated',
                offset:       100,
                callback:     function(box) {
                    console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
                }
            }
        );
        wow.init();
    </script>
    <script type="text/javascript">
        $(window).load(function() {
            $(".datetimepicker1");
        });
        $('.datetimepicker1').datetimepicker({
            //lang:'ch',
             //yearOffset:200,       
            timepicker:false,
            format:'d-m-Y',
            formatDate:'d-m-Y',
            value:'Enter Date',
            step:10,
            minDate:'+1d',
            scrollMonth:false,
            scrollTime:false,
            scrollInput:true,
        });
    </script>
    <script>
        var mySlider = $("#rane-slide").slider({
            'tooltip':'hide'
        });
        // Cal l a method on the slider
        mySlider.on('change',function(){
            var value = mySlider.slider('getValue');
            $('.min-range').html('<b>$'+value[0]+'</b>');
            $('.max-range').html('<b>$'+value[1]+'</b>');
        });
    </script> 
</html>