<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">
        <title> Clan Registration </title>
        <link href="css/font-awesome.css" rel="stylesheet">
        <link href="css/fonts.css" rel="stylesheet">
        <link href="css/simple-line-icons.css" rel="stylesheet">
        <!-- pages css  -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive-style.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/bootstrap-multiselect.css" rel="stylesheet">
        <style type="text/css">
            .tab-on-form .nav-stacked > li {
                 width: 50%;
            }
        </style>
    </head>
    <body>
        <?php
            require('include/header.php');
        ?>
        <section class="login-section">
            <div class="container">
                <div class="login-inner">
                    <form class="signup-form common-form" action="post.php" method="POST" autocomplete="off" validate="onSubmit" onsubmit="myFunction()">
                        <h3 class="form-h after-line">CLAN REGISTRATION</h3>
                        <p class="title-d customer-sign">Become a registered Omumugoya</p>
                        <div class="saloon-wrap">
                            <div class="form-wrap">
                                <div class="tab-content">
                                    <div class="saloon-form tab-pane active" id="tab_a">
                                        <div class="row">
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <label>Enter First Name</label>
                                                <input type="text" placeholder="Enter Name" class="form-control" name="first_name">
                                            </div>
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <label>Enter Last Name</label>
                                                <input type="text" placeholder="Enter Name" class="form-control" name="last_name">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <label>Enter Email</label>
                                                <input type="text" placeholder="Enter Email" class="form-control" name="email">
                                            </div>
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <label>Enter Contact Number</label>
                                                <input type="text" placeholder="Enter Contact Number" class="form-control" name="phone_number" >
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                         <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <span >upload your photo:
                                        <input style="color:red" type="file" name="image">
                                        <input style="color:red" type="submit" value= "Upload Image" name="submit"> </span>
                                             </div>
                                                             
                                             </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-4 col-sm-5 col-xs-9">
                                                <label>Your Location</label>
                                                <div class="custom-select">
                                                    <select class="form-control" placeholder="Select District" name="location">
                                                        <option disabled="">Select District Of Residence</option>
                                                        <option name="Sironko" value="SIRONKO">Sironko</option>
                                                        <option name="Mbale"value="MBALE">Mbale</option>
                                                        <option name="Jinja"value="JINJA">Jinja</option>
                                                        <option name="Mukono"value="MUKONO">Mukono</option>
                                                        <option name="Mbarara"value="MBARARA">Mbarara</option>
                                                        <option name="Masindi"value="MASINDI">Masindi</option>
                                                        <option name="Gulu"value="GULU">Gulu</option>
                                                        <option name="Arua"value="ARUA">Arua</option>
                                                    </select>
                                                    <span class="caret"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-4 col-sm-5 col-xs-9">
                                                <label>Select Your Lineage</label>
                                                <div class="custom-select">
                                                    <select class="form-control" placeholder="Select Inda Yoho" name="lineage">
                                                        <option disabled="">OMUMUGOYA</option>
                                                        <option name="muleme" value="muleme">MULEME</option>
                                                        <option name="wabusimba"value="wabusimba">WABUSIMBA</option>
                                                        <option name="wandidi"value="wandidi">WANDIDI</option>
                                                        <option name="wafaane"value="Kwafane">WAFAANE</option>
                                                    </select>
                                                    <span class="caret"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                             <div class="form-group col-md-2 col-sm-3 col-xs-7">
                                                <label>Select Gender</label>
                                                <div class="custom-select">
                                                       <select class="form-control" placeholder="Select Gender" name="gender">
                                                        <option disabled="">Select Gender</option>
                                                        <option name="male" value="Male">Male</option>
                                                        <option name="female" value="Female">Female</option>
                                                       </select>
                                                        <span class="caret"></span>
                                                </div>
                                              </div>
                                        </div> 
                                        <div class="row">
                                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                <label class="remember-me">
                                                    <input type="checkbox" checked="checked"> I acknowledge that i have read <a href="javascript:void(0);">Terms & Condition</a>   and <a href="javascript:void(0);">Privacy Policy</a>
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group col-md-4">
                                                  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="submit" name="submit" class="form-control" id="submit_id" value=" submit ">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </form> 
                        
                </div>
            </div>
        </section>
        <script>
                       function myFunction() {
                        alert("!!***Thanks For Registering***!!");
                         }
                      </script>
        <?php
            require('include/footer.php');
        ?>
    </body>
    <script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
    <script type="text/javascript" src="js/jquery.sliderPro.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-multiselect.js"></script>
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
        /*------on Back Continue Button click--------*/
        $('.continue-btn a').on('click',function(e){
            /*e.preventDefault();*/
            /*var id = $(this).attr('href');*/
            var id = $(this.hash);
            console.log(id);
            var attr_id = id[0]['id'];
            console.log(attr_id);

            $('.saloon-wrap .tab-content').find(id).addClass('active');
            $('.saloon-wrap .tab-content').find(id).siblings('.tab-pane').removeClass('active');

            $('.tab-on-form .nav.nav-pills li').has('a[href=#'+attr_id+']').siblings('li').removeClass('active');
            $('.tab-on-form .nav.nav-pills li').has('a[href=#'+attr_id+']').addClass('active');
        });

        $('.tab-on-form .nav.nav-pills li a').on('click',function(e){
            e.preventDefault();
            /*var id = $(this).attr('href');*/
            var id = $(this.hash);
            $('.saloon-wrap .tab-content').find(id).addClass('active');
            $('.saloon-wrap .tab-content').find(id).siblings('.tab-pane').removeClass('active');

            $(this).parent('li').addClass('active');
            $(this).parent('li').siblings('li').removeClass('active');
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.multiselect').multiselect();
        });
    </script>
</html>