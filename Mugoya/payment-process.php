<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Payment Process</title>
        <link href="css/font-awesome.css" rel="stylesheet">
        <link href="css/fonts.css" rel="stylesheet">
        <link href="css/simple-line-icons.css" rel="stylesheet">
        <!-- pages css  -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive-style.css" rel="stylesheet">
        <link href="css/jquery.datetimepicker.css" rel="stylesheet">
        <link href="css/calender.css" rel="stylesheet">
    </head>
    <body>
        <section class="payment-process">
            <div class="payment-proces-header">
                <div class="payment-hcontent">
                    <a href="javascript:void(0);"> 
                        <i class="fa fa-angle-left"></i> Back
                    </a>
                    <span class="payment-logo">
                        <a href="javascript:void(0);">
                            <img src="img/logo.png" alt="beauty-logo">
                        </a>
                    </span>
                </div>
            </div>
            <div class="payment-processtab">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <div class="payment-sidediv">
                                <div class="saloon-wrap">
                                    <div class="tab-on-form payment-pro">
                                        <ul class="nav nav-pills nav-stacked">
                                            <li class="active step-li" id="appoiment">
                                               <a href="#tab_a" data-toggle="pill" >
                                                   1
                                               </a>
                                               <p>Schedule appointment</p> 
                                            </li>
                                            <li class="step-li" id="pay-book">
                                               <a href="#tab_b" data-toggle="pill">
                                                  2
                                               </a>
                                               <p><i class="fa fa-credit-card"></i>Pay And Book</p> 
                                            </li>
                                            <li class="" id="confir-bok">
                                               <a href="#tab_c" data-toggle="pill">
                                                  3
                                               </a>
                                               <p><i class="fa fa-check"></i>Booking Confirmation</p> 
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="payment-content">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab_a">
                                                <div class="schedule-sec">
                                                    <div class="any-professionl">
                                                        <span class="heading-profes">
                                                            <img src="img/user-pay.svg" alt="user-svg">
                                                            <p>Any Professional</p>
                                                        </span>
                                                        <span class="select-pro-type">
                                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#professional-typ">Select</a>
                                                        </span>
                                                    </div>
                                                    <div class="calender-payment">
                                                        <div class="week-sec">
                                                            <div id="calendarContainer"></div>
                                                            <div style="display:none;" id="organizerContainer" style="margin-left: 8px;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab_b">
                                                <div class="appointment-sec">
                                                    <div class="dshbrd-content">
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <ul class="cus-nav-tab nav nav-tabs m-tb-30" role="tablist">
                                                                <li role="presentation" class="active">
                                                                    <a href="#" id="card-credit" aria-controls="home" role="tab" data-toggle="tab"> Credit Card </a>
                                                                </li>
                                                                <li role="presentation">
                                                                    <a href="#" id="cashlink" aria-controls="profile" role="tab" data-toggle="tab"> Cash </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8 col-xs-12">
                                                            <div role="tabpanel" class="tab-pane active" id="card-content">
                                                                <div class="credit-form">
                                                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                                        <input type="text" name="" placeholder="Card Number" class="form-control txtfield">
                                                                    </div>
                                                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                                        <input type="text" name="" placeholder="MM / YY" class="form-control txtfield">
                                                                    </div>
                                                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control txtfield" placeholder="CVV" aria-describedby="basic-addon2">
                                                                            <span class="input-group-addon cvv-box" id="basic-addon2"  data-placement="top" data-toggle="tooltip" class="fa fa-info-circle" data-original-title="The CVV Number is the last 3 digits printed on the signature panel on the back side of the card. ">
                                                                                <img src="img/cvv.png" / >
                                                                                <div class="cvvinfo"></div>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                                        <input type="text" name="" placeholder="Name of Card" class="form-control txtfield">
                                                                    </div>
                                                                    <div class="form-group col-md-12 col-sm-12 col-xs-12 ">
                                                                        <input type="submit" name="" value="Proceed to Pay" class="btn cut-btn" data-target="#proceed-pay" data-toggle="modal">
                                                                    </div>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <p class="help-block">This card will be securely saved for a faster payment experience. CVV number will not be saved</p>
                                                                    </div>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 scure-ico">
                                                                        <img src="img/secure-ico.png"/>
                                                                        <img src="img/secure-icon2.png" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div role="tabpanel" class="tab-pane" id="cash-content">
                                                                <div class="cash-section">
                                                                    <ul class="cash-list">
                                                                        <li>
                                                                            <span class="cast-leftt">
                                                                                Price
                                                                            </span>
                                                                            <span class="right-cashd">AED 200.00</span>
                                                                        </li>
                                                                        <li>
                                                                            <span class="cast-leftt">
                                                                                Total Services
                                                                            </span>
                                                                            <span class="right-cashd">2</span>
                                                                        </li>
                                                                        <li class="total-price">
                                                                            <span class="cast-leftt">
                                                                                Amount Payable
                                                                            </span>
                                                                            <span class="right-cashd">AED 200.00</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="confirm-btn text-center">
                                                                    <button type="submit" class="btn cut-btn"><i class="fa fa-check"></i> OK</button>
                                                                </div>
                                                            </div>
                                                            <!-- 2nd type -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab_c">
                                                <div class="confirmation-payment">
                                                    <div class="wrap-confirmation">
                                                        <h4>Appointment Details</h4>
                                                        <div class="decription-list">
                                                            <dl class="dl-horizontal">
                                                                <dt>Date:</dt>
                                                                <dd>21 November 2017</dd>
                                                                <dt>Time:</dt>
                                                                <dd>9:10 AM To 10:30 PM</dd>
                                                                <dt>Service Name:</dt>
                                                                <dd>Hair Cut & Hair color</dd>
                                                                <dt>Payment Status:</dt>
                                                                <dd class="salon-name">Paid</dd>
                                                            </dl>
                                                        </div>
                                                        <div class="confirm-btn">
                                                            <button type="submit" class="btn cut-btn"><i class="fa fa-check"></i> OK</button>
                                                        </div>
                                                    </div>                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="payment-sidebar">
                                <div class="wrap-appoiment">
                                    <div class="payment-service-h">
                                        <p class="selected-service">His & Her Favourite (Le Meridien)</p>
                                    </div>
                                    <div class="selected-time">
                                        <ul class="slected-tul">
                                            <li class="select-ser" style="position:relative;">
                                               <span class="selected-t-left">
                                                   <h3>Fringe Time</h3>
                                                   <p><i class="fa fa-clock-o"></i>30 Min</p>
                                               </span> 
                                               <span class="selected-t-right">
                                                    <h5>AED 40</h5>
                                                </span>
                                                <span class="rem-se"><a href="javascript:void(0);"><i class="fa fa-minus-circle"></i></a></span>
                                            </li>
                                            <li class="payment-pro-in">
                                               <span class="selected-t-left">
                                                   <p>Select a date and time to proceed booking</p>
                                               </span> 
                                               <span class="selected-t-right">
                                                    <h5>AED 40</h5>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pay-book-sec">
                                    <h5>Appointment Details</h5>
                                    <dl class="dl-horizontal">
                                        <dt>Date</dt>
                                        <dd>21 November 2017</dd>
                                        <dt>Time</dt>
                                        <dd>9:10 AM To 10:30 PM</dd>
                                        <dt>Service Name</dt>
                                        <dd>Hair Cut & Hair color</dd>
                                        <dt>Salon Name</dt>
                                        <dd class="salon-name"> Big Beauty Services Salon </dd>
                                    </dl>
                                </div>
                                <div class="Confirmation-sec">
                                    <div class="salon-add-map">
                                        <div id="googleMap" style="width:100%;height:200px;"></div>
                                        <div class="address-salon">
                                            <h4>Big Hair Beauty Salon</h4>
                                            <p class="addres-salon">9566 Destiny USA Dr E208, Syracuse, NY 13290, USA</p>
                                            <div class="Opening-hours">
                                                <a id="opening" href="javascript:void(0);">Opening Hours 
                                                    <span class="pull-right">
                                                    <i class="fa fa-minus-circle"></i>  
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </section>
        <!-- Modal -->
        <div class="modal fade signup" id="professional-typ" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">STAFF</h4>
                </div>
                <div class="modal-body">
                    <div class="sign-selectoption">
                        <div class="col-md-12 col-xs-12 col-sm-12 p-0">
                            <div class="professional-type">
                                <ul class="profe-ul">
                                    <li>
                                        <div class="custom-radio">
                                            <input type="radio" id="radio01" name="radio"/>
                                            <label for="radio01">
                                               <img src="img/user-pay.svg" class="img-responsive"> 
                                               <small>Any Professional</small> <span><span></span></span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-radio">
                                            <input type="radio" id="radio02" name="radio"/>
                                            <label for="radio02">
                                               <img src="img/user-pay.svg" class="img-responsive"> 
                                               <small>His & Her Favourite 3 <p>staff</p></small> <span><span></span></span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-radio">
                                            <input type="radio" id="radio03" name="radio"/>
                                            <label for="radio03">
                                               <img src="img/user-pay.svg" class="img-responsive"> 
                                               <small>His & Her Favourite 2 <p>staff</p></small> <span><span></span></span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-radio">
                                            <input type="radio" id="radio04" name="radio"/>
                                            <label for="radio04">
                                               <img src="img/user-pay.svg" class="img-responsive"> 
                                               <small>His & Her Favourite 1 <p>staff</p></small> <span><span></span></span>
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
        <div class="modal fade signup" id="proceed-pay" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">OTP FORM</h4>
                </div>
                <div class="modal-body">
                    <div class="sign-selectoption">
                        <div class="col-md-12 col-xs-12 col-sm-12 p-0">
                            <form class="opt-form">
                                <h4>Please enter the OTP received on your mobile number</h4>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <label>Enter OTP Number<small class="manidatory">*</small></label>
                                    <input type="text" value="" placeholder="Enter OTP" class="form-control">
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="ok-btn-otp">
                                        <button type="submit" class="btn cut-btn"><i class="fa fa-check"></i> OK</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
        <?php
            require('include/footer.php');
        ?>    
    </body>
    <script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquerydatetimepicker.js"></script>
    <script src="js/calender-custom.js" type="text/javascript"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDRM9uLXGLUoQw27yHeYAgjrirJvoLZet0&callback=myMap"
    async defer></script>
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
        $(document).on('click','#pay-book',function(){
            $('.wrap-appoiment').hide('500');
            $('.pay-book-sec').show('500');
            $('.Confirmation-sec').hide('500');
        });
        $(document).on('click','#appoiment',function(){
            $('.wrap-appoiment').show('500');
            $('.pay-book-sec').hide('500');
            $('.Confirmation-sec').hide('500');
        });
        $(document).on('click','#confir-bok',function(){
            $('.wrap-appoiment').hide('500');
            $('.pay-book-sec').hide('500');
            $('.Confirmation-sec').show('500');
        });
        /*==========cash and payment- script---*/
        $('#card-content').show();
        $('#cash-content').hide();
        $(document).on('click','#cashlink',function(){
            $('#card-content').hide('500');
            $('#cash-content').show('500');
        });
        $(document).on('click','#card-credit',function(){
            $('#card-content').show('500');
            $('#cash-content').hide('500');
        });
        //ends
        //opening hourse script 
        $('.timing-ul').show();
        $(document).on('click','#opening',function(){
            $(this).next('.timing-ul').slideToggle('500');
            $(this).find('i').toggleClass('fa-minus-circle fa-plus-circle')
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
    <script type="text/javascript">
        $(document).ready(function () {
                //Initialize tooltips
                $('.nav-tabs > li a[title]').tooltip();
                
                //Wizard
                $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

                    var $target = $(e.target);
                
                    if ($target.parent().hasClass('disabled')) {
                        return false;
                    }
                });

                $(".next-step").click(function (e) {

                    var $active = $('.wizard .nav-tabs li.active');
                    $active.next().removeClass('disabled');
                    nextTab($active);

                });
                $(".prev-step").click(function (e) {

                    var $active = $('.wizard .nav-tabs li.active');
                    prevTab($active);

                });
            });

            function nextTab(elem) {
                $(elem).next().find('a[data-toggle="tab"]').click();
            }
            function prevTab(elem) {
                $(elem).prev().find('a[data-toggle="tab"]').click();
            }
    </script>
</html>